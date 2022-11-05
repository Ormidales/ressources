<?php
/**
 * ---------------------------------------------------------------------
 * Formcreator is a plugin which allows creation of custom forms of
 * easy access.
 * ---------------------------------------------------------------------
 * LICENSE
 *
 * This file is part of Formcreator.
 *
 * Formcreator is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Formcreator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 * ---------------------------------------------------------------------
 * @copyright Copyright © 2011 - 2021 Teclib'
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @link      https://github.com/pluginsGLPI/formcreator/
 * @link      https://pluginsglpi.github.io/formcreator/
 * @link      http://plugins.glpi-project.org/#/plugin/formcreator
 * ---------------------------------------------------------------------
 */
namespace tests\units;

use CommonITILObject;
use Glpi\Agent\Communication\Headers\Common;
use GlpiPlugin\Formcreator\Tests\CommonTestCase;
use PluginFormcreatorForm;
use PluginFormcreatorFormAnswer as GlobalPluginFormcreatorFormAnswer;
use PluginFormcreatorTargetTicket;
use PluginFormcreatorTargetChange;
use PluginFormcreatorTargetProblem;
class PluginFormcreatorFormAnswer extends CommonTestCase {
   public function beforeTestMethod($method) {
      parent::beforeTestMethod($method);
      switch ($method) {
         case 'testSaveForm':
         case 'testGetFullForm':
         case 'testCanValidate':
         case 'testIsFieldVisible':
         case 'testPost_UpdateItem':
         case 'testPrepareInputForAdd':
         case 'testGetTartgets':
         case 'testGetGeneratedTargets':
         case 'testGetAggregatedStatus':
            $this->login('glpi', 'glpi');
      }
   }

   public function providerPrepareInputForAdd() {
      $question = $this->getQuestion(['fieldtype' => 'text']);
      $form = new PluginFormcreatorForm();
      $form->getFromDBByQuestion($question);
      $this->boolean($form->isNewItem())->isFalse();
      $success = $form->update([
         'id' => $form->getID(),
         'formanswer_name' => '##answer_' . $question->getID() . '##',
      ]);
      $this->boolean($success)->isTrue();

      $data = [
         'form FK required' => [
            'input' => [],
            'expected' => false,
            'message' => '',
         ],
         'tags parsing in name' => [
            'input' => [
               'plugin_formcreator_forms_id' => $form->getID(),
               'formcreator_field_' . $question->getID() => 'foo',
            ],
            'expected' => [
               'plugin_formcreator_forms_id'             => $form->getID(),
               'formcreator_field_' . $question->getID() => 'foo',
               'name'                                    => 'foo',
               'entities_id'                             => \Session::getActiveEntity(),
               'is_recursive'                            => 0,
               'requester_id'                            => \Session::getLoginUserID(),
               'users_id_validator'                      => 0,
               'groups_id_validator'                     => 0,
               'status'                                  => \PluginFormcreatorFormAnswer::STATUS_ACCEPTED,
               'request_date'                            => $_SESSION['glpi_currenttime'],
               'comment'                                 => '',
            ],
            'message' => '',
         ],
      ];

      $question = $this->getQuestion(['fieldtype' => 'text']);
      $form = new PluginFormcreatorForm();
      $form->getFromDBByQuestion($question);
      $this->boolean($form->isNewItem())->isFalse();
      $success = $form->update([
         'id'                  => $form->getID(),
         'validation_required' => \PluginFormcreatorForm::VALIDATION_USER,
         '_validator_users'    => [2] // glpi
      ]);
      $this->boolean($success)->isTrue();

      $data['unique validator user autoselection'] = [
         'input' => [
            'plugin_formcreator_forms_id' => $form->getID(),
            'formcreator_field_' . $question->getID() => 'foo',
         ],
         'expected' => [
            'plugin_formcreator_forms_id'             => $form->getID(),
            'formcreator_field_' . $question->getID() => 'foo',
            'name'                                    => $form->fields['name'],
            'entities_id'                             => \Session::getActiveEntity(),
            'is_recursive'                            => 0,
            'requester_id'                            => \Session::getLoginUserID(),
            'formcreator_validator'                   => 'User_2',
            'users_id_validator'                      => 2,
            'groups_id_validator'                     => 0,
            'status'                                  => \PluginFormcreatorFormAnswer::STATUS_WAITING,
            'request_date'                            => $_SESSION['glpi_currenttime'],
            'comment'                                 => '',
         ],
         'message' => '',
      ];

      return $data;
   }

   /**
    * @dataProvider providerPrepareInputForAdd
    *
    * @param array $input
    * @param [type] $expected
    * @return void
    */
   public function testPrepareInputForAdd(array $input, $expected, $expectedMessage) {
      $instance = $this->newTestedInstance();
      $output = $instance->prepareInputForAdd($input);
      if ($expected === false) {
         $this->boolean($output)->isFalse();
         if ($expectedMessage != '') {
            $this->sessionHasMessage($expectedMessage, ERROR);
         }
         return;
      }

      $this->array($output)->isEqualTo($expected);
   }

   public function providerGetFullForm() {
      $form = $this->getForm();
      $section1 = $this->getSection([
         \PluginFormcreatorForm::getForeignKeyField() => $form->getID(),
         'name' => \Toolbox::addslashes_deep("section 1"),
      ]);
      $question1 = $this->getQuestion([
         \PluginFormcreatorSection::getForeignKeyField() => $section1->getID(),
         'name' => \Toolbox::addslashes_deep("radios for section"),
         'fieldtype'  => 'radios',
         'values'     => 'yes\r\nno',
      ]);
      $question2 = $this->getQuestion([
         \PluginFormcreatorSection::getForeignKeyField() => $section1->getID(),
         'name' => \Toolbox::addslashes_deep("radios for question"),
         'fieldtype'  => 'radios',
         'values'     => 'yes\r\nno',
      ]);
      $section2 = $this->getSection([
         \PluginFormcreatorForm::getForeignKeyField() => $form->getID(),
         'name' => \Toolbox::addslashes_deep("section 2"),
         'show_rule' => \PluginFormcreatorCondition::SHOW_RULE_HIDDEN,
         '_conditions' => [
            'plugin_formcreator_questions_id' => [$question1->getID()],
            'show_condition' => [\PluginFormcreatorCondition::SHOW_CONDITION_EQ],
            'show_value'     => ['yes'],
            'show_logic'     => [\PluginFormcreatorCondition::SHOW_LOGIC_AND],
         ]
      ]);
      $question3 = $this->getQuestion([
         \PluginFormcreatorSection::getForeignKeyField() => $section2->getID(),
         'name' => \Toolbox::addslashes_deep("text"),
         'fieldtype'  => 'text',
         'values'     => 'hello',
         'show_rule' => \PluginFormcreatorCondition::SHOW_RULE_HIDDEN,
         '_conditions' => [
            'plugin_formcreator_questions_id' => [$question2->getID()],
            'show_condition' => [\PluginFormcreatorCondition::SHOW_CONDITION_EQ],
            'show_value'     => ['yes'],
            'show_logic'     => [\PluginFormcreatorCondition::SHOW_LOGIC_AND],
         ]
      ]);

      return [
         // fullForm matches all question and section names
         [
            'answer' => [
               \PluginFormcreatorForm::getForeignKeyField() => $form->getID(),
               'formcreator_field_' . $question1->getID() => 'yes',
               'formcreator_field_' . $question2->getID() => 'yes',
               'formcreator_field_' . $question3->getID() => 'foo',
            ],
            'expected' => function($output) use($section1, $section2, $question1, $question2, $question3) {
               $this->string($output)->contains($section1->fields['name']);
               $this->string($output)->contains('##question_' . $question1->getID() . '##');
               $this->string($output)->contains('##question_' . $question2->getID() . '##');
               $this->string($output)->contains($section2->fields['name']);
               $this->string($output)->contains('##question_' . $question3->getID() . '##');
            }
         ],
         // fullForm matches only visible section names
         [
            'answer' => [
               \PluginFormcreatorForm::getForeignKeyField() => $form->getID(),
               'formcreator_field_' . $question1->getID() => 'no',
               'formcreator_field_' . $question2->getID() => 'yes',
               'formcreator_field_' . $question3->getID() => 'foo',
            ],
            'expected' => function($output) use($section1, $section2, $question1, $question2, $question3) {
               $this->string($output)->contains($section1->fields['name']);
               $this->string($output)->contains('##question_' . $question1->getID() . '##');
               $this->string($output)->contains('##question_' . $question2->getID() . '##');
               $this->string($output)->notContains($section2->fields['name']);
               $this->string($output)->notContains('##question_' . $question3->getID() . '##');
            }
         ],
         // fullForm matches only visible question names
         [
            'answer' => [
               \PluginFormcreatorForm::getForeignKeyField() => $form->getID(),
               'formcreator_field_' . $question1->getID() => 'yes',
               'formcreator_field_' . $question2->getID() => 'no',
               'formcreator_field_' . $question3->getID() => 'foo',
            ],
            'expected' => function($output) use($section1, $section2, $question1, $question2, $question3) {
               $this->string($output)->contains($section1->fields['name']);
               $this->string($output)->contains('##question_' . $question1->getID() . '##');
               $this->string($output)->contains('##question_' . $question2->getID() . '##');
               $this->string($output)->contains($section2->fields['name']);
               $this->string($output)->notContains('##question_' . $question3->getID() . '##');
            }
         ],
      ];
   }

   /**
    * @dataProvider providerGetFullForm
    */
   public function testGetFullForm($answers, $expected) {
      $instance = $this->newTestedInstance();
      $output = $instance->add($answers);
      $this->boolean($instance->isNewItem())->isFalse();
      \PluginFormcreatorFields::resetVisibilityCache();
      $output = $instance->getFullForm(true);
      $expected($output);
   }

   public function testSaveForm() {
      global $CFG_GLPI;

      // disable notifications as we may fail in some case (not the purpose of this test btw)
      $use_notifications = $CFG_GLPI['use_notifications'];
      $CFG_GLPI['use_notifications'] = 0;

      // prepare a form with targets
      $question = $this->getQuestion();
      $form = new \PluginFormcreatorForm();
      $form->getFromDBByQuestion($question);
      $formFk = \PluginFormcreatorForm::getForeignKeyField();
      $this->getTargetTicket([
         $formFk => $form->getID(),
      ]);
      $this->getTargetChange([
         $formFk => $form->getID(),
      ]);

      // prepare input
      $answer = 'test answer to question';
      $input = [
         $formFk => $form->getID(),
         'formcreator_field_'.$question->getID() => $answer
      ];

      // send form answer
      $formAnswer = new \PluginFormcreatorFormAnswer();
      $formAnswerId = $formAnswer->add($input);
      $this->boolean($formAnswer->isNewItem())->isFalse();

      // check existence of generated target
      // - ticket
      $item_ticket = new \Item_Ticket;
      $this->boolean($item_ticket->getFromDBByCrit([
         'itemtype' => \PluginFormcreatorFormAnswer::class,
         'items_id' => $formAnswerId,
      ]))->isTrue();
      $ticket = new \Ticket;
      $this->boolean($ticket->getFromDB($item_ticket->fields['tickets_id']))->isTrue();
      $this->string($ticket->fields['content'])->contains($answer);

      // - change
      $change_item = new \Change_Item;
      $this->boolean($change_item->getFromDBByCrit([
         'itemtype' => \PluginFormcreatorFormAnswer::class,
         'items_id' => $formAnswerId,
      ]))->isTrue();
      $change = new \Change;
      $this->boolean($change->getFromDB($change_item->fields['changes_id']))->isTrue();
      $this->string($change->fields['content'])->contains($answer);

      // - issue
      $issue = new \PluginFormcreatorIssue;
      $this->boolean($issue->getFromDBByCrit([
        'itemtype' => \Ticket::class,
        'items_id'  => $ticket->getID()
      ]))->isTrue();

      $CFG_GLPI['use_notifications'] = $use_notifications;
   }

   public function providerCanValidate() {
      $validatorUserId = 5; // normal
      $form1 = $this->getForm([
         'validation_required' => \PluginFormcreatorForm::VALIDATION_USER,
         '_validator_users' => $validatorUserId
      ]);
      $this->boolean($form1->isNewItem())->isFalse();

      $group = new \Group();
      $group->add([
         'name' => $this->getUniqueString(),
      ]);
      $this->boolean($group->isNewItem())->isFalse();
      $groupUser = new \Group_User();
      $groupUser->add([
         'users_id' => $validatorUserId,
         'groups_id' => $group->getID(),
      ]);
      $form2 = $this->getForm([
         'validation_required' => \PluginFormcreatorForm::VALIDATION_GROUP,
         '_validator_groups' => $group->getID()
      ]);
      $this->boolean($form2->isNewItem())->isFalse();

      return [
         'having validate incident right, validator user can validate' => [
            'right'     => \TicketValidation::VALIDATEINCIDENT,
            'validator' => $validatorUserId,
            'userId'    => $validatorUserId,
            'form'      => $form1,
            'expected'  => true,
         ],
         'having validate incident right, member of a validator group can validate' => [
            'right'     => \TicketValidation::VALIDATEINCIDENT,
            'validator' => $group->getID(),
            'userId'    => $validatorUserId,
            'form'      => $form2,
            'expected'  => true,
         ],
         'having validate incident right, not a validator user cannot validate' => [
            'right'     => \TicketValidation::VALIDATEINCIDENT,
            'validator' => $group->getID(),
            'userId'    => 2, // glpi
            'form'      => $form2,
            'expected'  => false,
         ],
         'having validate request right, member of a validator group can validate' => [
            'right'     => \TicketValidation::VALIDATEREQUEST,
            'validator' => $group->getID(),
            'userId'    => $validatorUserId,
            'form'      => $form2,
            'expected'  => true,
         ],
         'having validate request right and validate incident, member of a validator group can validate' => [
            'right'     => \TicketValidation::VALIDATEREQUEST | \TicketValidation::VALIDATEINCIDENT,
            'validator' => $group->getID(),
            'userId'    => $validatorUserId,
            'form'      => $form2,
            'expected'  => true,
         ],
         'having validate request right and validate incident, not member of a validator group can validate' => [
            'right'     => \TicketValidation::VALIDATEREQUEST | \TicketValidation::VALIDATEINCIDENT,
            'validator' => $group->getID(),
            'userId'    => 2, // glpi
            'form'      => $form2,
            'expected'  => false,
         ],
         'having no validation right, member of a validator group cannot validate' => [
            'right'     => 0,
            'validator' => $group->getID(),
            'userId'    => $validatorUserId,
            'form'      => $form2,
            'expected'  => false,
         ],
         'having no validation right, a validator user cannot validate' => [
            'right'     => 0,
            'validator' => $group->getID(),
            'userId'    => $validatorUserId,
            'form'      => $form2,
            'expected'  => false,
         ],
      ];
   }

   /**
    * @dataProvider providerCanValidate
    */
   public function testCanValidate($right, $validator, $userId, $form, $expected) {
      // Save answers for a form
      $instance = $this->newTestedInstance();
      $input = [
         'plugin_formcreator_forms_id' => $form->getID(),
         'formcreator_validator' => $validator,
      ];
      $fields = $form->getFields();
      foreach ($fields as $id => $question) {
         $fields[$id]->parseAnswerValues($input);
      }
      $formAnswerId = $instance->add($input);

      // test canValidate
      $_SESSION['glpiID'] = $userId;
      $_SESSION['glpiactiveprofile']['ticketvalidation'] = $right;
      $instance = $this->newTestedInstance();
      $instance->getFromDB($formAnswerId);
      $this->boolean($instance->isNewItem())->isFalse();
      $output = $instance->canValidate();
      $this->boolean($output)->isEqualTo($expected);
   }

   public function testGetMyLastAnswersAsRequester() {
      // Create a form
      $this->login('glpi', 'glpi');
      $form = $this->getForm();

      // Add some form answers
      $userName = $this->getUniqueString();
      $this->getUser($userName);
      $this->login($userName, 'p@ssw0rd');

      $formAnswers = [];
      $formAnswer1 = $this->newTestedInstance();
      $formAnswers[] = $formAnswer1->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
      $formAnswer2 = $this->newTestedInstance();
      $formAnswers[] = $formAnswer2->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);

      // Check the count of result matches the expected count
      $output = \PluginFormcreatorFormAnswer::getMyLastAnswersAsRequester();
      foreach ($output as $row) {
         $this->boolean(in_array($row['id'], $formAnswers))->isTrue();
      }
      $this->integer(count($output))->isEqualTo(count($formAnswers));
   }

   public function testGetMyLastAnswersAsValidator() {
      // Create a form
      $this->login('glpi', 'glpi');
      $user = $this->getUser($this->getUniqueString(), 'p@ssw0rd', 'Technician');
      $validatorId = $user->getID();
      $form = $this->getForm([
         'validation_required' => \PluginFormcreatorForm_Validator::VALIDATION_USER,
         '_validator_users' => $validatorId,
      ]);

      // Add some form answers
      $this->login('normal', 'normal');
      $formAnswers = [];
      $formAnswer1 = $this->newTestedInstance();
      $formAnswers[] = $formAnswer1->add([
         'plugin_formcreator_forms_id' => $form->getID(),
         'formcreator_validator'       => $validatorId,
      ]);
      $formAnswer2 = $this->newTestedInstance();
      $formAnswers[] = $formAnswer2->add([
         'plugin_formcreator_forms_id' => $form->getID(),
         'formcreator_validator'       => $validatorId,
      ]);

      // Check the requester does not has his forms in list to validate
      $output = \PluginFormcreatorFormAnswer::getMyLastAnswersAsValidator();
      foreach ($output as $row) {
         $this->boolean(in_array($row['id'], $formAnswers))->isFalse();
      }

      $this->login($user->fields['name'], 'p@ssw0rd');
      // Check the validator does not has the forms in list to validate
      $output = \PluginFormcreatorFormAnswer::getMyLastAnswersAsValidator();
      foreach ($output as $row) {
         $this->boolean(in_array($row['id'], $formAnswers))->isTrue();
      }
   }

   public function testDeserialiseAnswers() {

   }

   public function testIsFieldVisible() {
      $instance = $this->newTestedInstance();

      // Check exceptions are properly thrown
      $this->exception(
         function() use ($instance) {
            $instance->isFieldVisible(42);
         }
      )->isInstanceOf(\RuntimeException::class);
      $this->string($this->exception->getMessage())->isEqualTo('Instance is empty');

      // Check exceptions are properly thrown
      $form = $this->getForm();
      $instance->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);

      $this->exception(
         function() use ($instance) {
            $instance->isFieldVisible(42);
         }
      )->isInstanceOf(\RuntimeException::class);
      $this->string($this->exception->getMessage())->isEqualTo('Question not found');
   }

   public function testPost_UpdateItem() {
      $question = $this->getQuestion(['fieldtype' => 'text']);
      $form = new PluginFormcreatorForm;
      $form->getFromDBByQuestion($question);
      $formValidator = new \PluginFormcreatorForm_Validator();
      $formValidator->add([
         'plugin_formcreator_forms_id' => $form->getID(),
         'itemtype'                    => \User::class,
         'items_id'                    => \Session::getLoginUserID(),
      ]);
      $form->update([
         'id' => $form->getID(),
         'validation_required' => \PluginFormcreatorForm::VALIDATION_USER,
      ]);

      /**
       * Test updating a simple form answer
       */

      // Setup test
      $instance = $this->newTestedInstance();
      $formAnswerId = $instance->add([
         'plugin_formcreator_forms_id' => $form->getID(),
         'formcreator_validator'       => \Session::getLoginUserID(),
         'formcreator_field_' . $question->getID() => 'foo',
      ]);
      $this->integer((int) $formAnswerId);
      $answer = new \PluginFormcreatorAnswer();
      $answer->getFromDBByCrit([
         'plugin_formcreator_formanswers_id' => $instance->getID(),
         'plugin_formcreator_questions_id'  => $question->getID(),
      ]);
      $this->boolean($answer->isNewItem())->isFalse();
      $this->string($answer->fields['answer'])->isEqualTo('foo');

      // check the answer is kept when accepting without edition
      $instance = $this->newTestedInstance();
      $instance->getFromDB($formAnswerId);
      $this->boolean($instance->isNewItem())->isFalse();
      $input = [
         'plugin_formcreator_forms_id'             => $form->getID(),
         'accept_formanswer'                       => 'accept',
         'status'                                  => \PluginFormcreatorFormAnswer::STATUS_ACCEPTED,
      ];
      $input = $instance->prepareInputForUpdate($input);
      $this->array($input)->size->isGreaterThan(0);
      $instance->input = $input;
      $instance->post_updateItem();
      $answer = new \PluginFormcreatorAnswer();
      $answer->getFromDBByCrit([
         'plugin_formcreator_formanswers_id' => $instance->getID(),
         'plugin_formcreator_questions_id'  => $question->getID(),
      ]);
      $this->boolean($answer->isNewItem())->isFalse();
      $this->string($answer->fields['answer'])->isEqualTo('foo');

      // check the answer is actually changed when accepting with edition
      $instance = $this->newTestedInstance();
      $instance->getFromDB($formAnswerId);
      $this->boolean($instance->isNewItem())->isFalse();
      $input = [
         'plugin_formcreator_forms_id'             => $form->getID(),
         'accept_formanswer'                       => 'accept',
         'status'                                  => \PluginFormcreatorFormAnswer::STATUS_ACCEPTED,
         'formcreator_field_' . $question->getID() => 'bar',
      ];
      $input = $instance->prepareInputForUpdate($input);
      $this->array($input)->size->isGreaterThan(0);
      $instance->input = $input;
      $instance->post_updateItem();
      $answer = new \PluginFormcreatorAnswer();
      $answer->getFromDBByCrit([
         'plugin_formcreator_formanswers_id' => $instance->getID(),
         'plugin_formcreator_questions_id'  => $question->getID(),
      ]);
      $this->boolean($answer->isNewItem())->isFalse();
      $this->string($answer->fields['answer'])->isEqualTo('bar');
   }

   public function testGetTartgets() {
      global $CFG_GLPI;

      $CFG_GLPI['use_notifications'] = 0;

      // Prepare test context
      // A form with 2 targets of each available type
      // and a form answer for this form
      $form = $this->getForm();
      $formFk = PluginFormcreatorForm::getForeignKeyField();
      $targets = [];

      $targets[] = $this->getTargetTicket([
         $formFk => $form->getID(),
      ]);
      $targets[] = $this->getTargetTicket([
         $formFk => $form->getID(),
      ]);

      $targets[] = $this->getTargetChange([
         $formFk => $form->getID(),
      ]);
      $targets[] = $this->getTargetChange([
         $formFk => $form->getID(),
      ]);

      $targets[] = $this->getTargetProblem([
         $formFk => $form->getID(),
      ]);
      $targets[] = $this->getTargetProblem([
         $formFk => $form->getID(),
      ]);

      $instance = $this->newTestedInstance();
      $instance->add([
         $formFk => $form->getID(),
      ]);

      $output = $instance->getGeneratedTargets();

      $this->array($output)->hasSize(count($targets));
      $typeCount = [
         \Ticket::getType()  => 0,
         \Change::getType()  => 0,
         \Problem::getType() => 0,
      ];
      foreach($output as $generatedTarget) {
         $typeCount[$generatedTarget::getType()]++;
      }
      $this->array($typeCount)->isEqualTo([
         \Ticket::getType()  => 2,
         \Change::getType()  => 2,
         \Problem::getType() => 2,
      ]);
   }

   public function testUpdateStatus() {
      global $CFG_GLPI;

      $CFG_GLPI['use_notifications'] = 0;

      // Prepare test context
      $form = $this->getForm();

      $formAnswer = $this->newTestedInstance();
      $formAnswer->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
   }

   public function testGetGeneratedTargets() {
      $form = $this->getForm();
      $targets = [];
      $targets[1] = $this->getTargetTicket([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
      $targets[2] = $this->getTargetChange([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
      $targets[3] = $this->getTargetProblem([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);

      $instance = $this->newTestedInstance();
      $output = $instance->getGeneratedTargets();
      $this->array($output)->hasSize(0);

      $instance->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
      $this->boolean($instance->isNewItem())->isFalse();
      $generatedTargets = $instance->targetList;

      $output = $instance->getGeneratedTargets();
      // Check the targetsList is unchanged
      $this->array($instance->targetList)->hasSize(count($generatedTargets));
      $this->array($output)->hasSize(3);

      $output = $instance->getGeneratedTargets([PluginFormcreatorTargetTicket::getType()]);
      // Check the targetsList is unchanged
      $this->array($instance->targetList)->hasSize(3);
      $this->array($output)->hasSize(1);

      $output = $instance->getGeneratedTargets([PluginFormcreatorTargetChange::getType()]);
      // Check the targetsList is unchanged
      $this->array($instance->targetList)->hasSize(3);
      $this->array($output)->hasSize(1);

      $output = $instance->getGeneratedTargets([PluginFormcreatorTargetProblem::getType()]);
      // Check the targetsList is unchanged
      $this->array($instance->targetList)->hasSize(3);
      $this->array($output)->hasSize(1);
   }

   public function testGetAggregatedStatus() {
      // When no target defined
      $form = $this->getForm();
      $instance = $this->newTestedInstance();
      $instance->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
      $this->boolean($instance->isNewItem())->isFalse();
      $output = $instance->getAggregatedStatus();
      $this->variable($output)->isNull();

      // When several targets
      $form = $this->getForm();
      $targetTickets = [];
      for ($i = 1; $i <= 3; $i++) {
         $targetTickets[$i] = $this->getTargetTicket([
            'plugin_formcreator_forms_id' => $form->getID(),
         ]);
      }

      $instance = $this->newTestedInstance();
      $instance->add([
         'plugin_formcreator_forms_id' => $form->getID(),
      ]);
      $this->boolean($instance->isNewItem())->isFalse();

      $tickets = $instance->targetList;

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::INCOMING);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::ASSIGNED,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::ASSIGNED);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::WAITING,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::WAITING);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::PLANNED,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::WAITING,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::WAITING);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::INCOMING);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::INCOMING,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::ASSIGNED,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::PLANNED,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::PLANNED);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::SOLVED,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::CLOSED,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::SOLVED);

      $tickets[0]->update([
         'id'     => $tickets[0]->getID(),
         'status' => CommonITILObject::CLOSED,
      ]);
      $tickets[1]->update([
         'id'     => $tickets[1]->getID(),
         'status' => CommonITILObject::CLOSED,
      ]);
      $tickets[2]->update([
         'id'     => $tickets[2]->getID(),
         'status' => CommonITILObject::CLOSED,
      ]);
      $output = $instance->getAggregatedStatus();
      $this->integer($output)->isEqualTo(CommonITILObject::CLOSED);
   }
}
