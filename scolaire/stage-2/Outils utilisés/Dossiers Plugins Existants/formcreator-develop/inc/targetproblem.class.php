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

use GlpiPlugin\Formcreator\Exception\ImportFailureException;
use GlpiPlugin\Formcreator\Exception\ExportFailureException;

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access this file directly");
}

class PluginFormcreatorTargetProblem extends PluginFormcreatorAbstractTarget {
   public static function getTypeName($nb = 1) {
      return _n('Target problem', 'Target problems', $nb, 'formcreator');
   }

   protected function getItem_User() {
      return new Problem_User();
   }

   protected function getItem_Group() {
      return new Group_Problem();
   }

   protected function getItem_Supplier() {
      return new Problem_Supplier();
   }

   public function getItem_Item() {
      return new Item_Problem();
   }

   public function getTargetItemtypeName(): string {
      return Problem::class;
   }

   protected function getTemplateItemtypeName(): string {
      return ProblemTemplate::class;
   }

   protected function getTemplatePredefinedFieldItemtype(): string {
      return ProblemTemplatePredefinedField::class;
   }
   protected function getCategoryFilter() {
      return [
         'is_problem'  => 1,
      ];
   }

   /**
    * Show the Form for the adminsitrator to edit in the config page
    *
    * @param  array  $options Optional options
    * @return void
    */
   public function showForm($ID, $options = []) {
      if ($ID == 0) {
         // Not used for now
         $title =  __('Add a target ', 'formcreator');
      } else {
         $title =  __('Edit a target', 'formcreator');
      }
      $rand = mt_rand();

      $form = $this->getForm();

      echo '<form name="form"'
      . ' method="post"'
      . ' action="' . self::getFormURL() . '"'
      . ' data-itemtype="' . self::class . '"'
      . '>';

      // General information: target_name
      echo '<table class="tab_cadre_fixe">';
      echo '<tr><th colspan="2">' . $title . '</th></tr>';
      echo '<tr>';
      echo '<td width="15%"><strong>' . __('Name') . ' <span style="color:red;">*</span></strong></td>';
      echo '<td>';
      echo Html::input('name', [
         'id' => 'name',
         'autofocus' => '',
         'value' => $this->fields['name'],
      ]);
      echo '</td>';
      echo '</tr>';
      echo '</table>';

      // Ticket information: title, template...
      echo '<table class="tab_cadre_fixe">';

      echo '<tr><th colspan="4">' . $this->getTypeName(1) . '</th></tr>';

      echo '<tr>';
      echo '<td><strong>' . __('Problem title', 'formcreator') . ' <span style="color:red;">*</span></strong></td>';
      echo '<td colspan="3">';
      echo Html::input('target_name', [
         'id' => 'target_name',
         'autofocus' => '',
         'value' => $this->fields['target_name'],
      ]);
      echo '</td>';
      echo '</tr>';

      echo '<tr>';
      echo '<td><strong>' . __('Description') . ' <span style="color:red;">*</span></strong></td>';
      echo '<td colspan="3">';
      echo Html::textarea([
         'name'            => 'content',
         'value'           => $this->fields['content'],
         'enable_richtext' => true,
         'display'         => false,
      ]);
      echo '</td>';
      echo '</tr>';

      echo '<tr>';
      echo '<td><strong>' . __('Impacts') . ' </strong></td>';
      echo '<td colspan="3">';
      echo Html::textarea([
         'name'    => 'impactcontent',
         'value'   => $this->fields['impactcontent'],
         'display' => false,
      ]);
      echo '</td>';
      echo '</tr>';

      echo '<tr>';
      echo '<td><strong>' . __('Cause') . ' </strong></td>';
      echo '<td colspan="3">';
      echo Html::textarea([
         'name'    => 'causecontent',
         'value'   => $this->fields['causecontent'],
         'display' => false,
      ]);
      echo '</td>';
      echo '</tr>';

      echo '<tr>';
      echo '<td><strong>' . __('Symptom') . ' </strong></td>';
      echo '<td colspan="3">';
      echo Html::textarea([
         'name'    => 'symptomcontent',
         'value'   => $this->fields['symptomcontent'],
         'display' => false,
      ]);
      echo '</td>';
      echo '</tr>';

      $rand = mt_rand();
      $this->showDestinationEntitySetings($rand);

      echo '<tr>';
      $this->showTemplateSettings($rand);
      echo '</tr>';

      // -------------------------------------------------------------------------------------------
      //  category of the target
      // -------------------------------------------------------------------------------------------
      $this->showCategorySettings($rand);

      // -------------------------------------------------------------------------------------------
      // Urgency selection
      // -------------------------------------------------------------------------------------------
      $this->showUrgencySettings($rand);

      // -------------------------------------------------------------------------------------------
      //  Tags
      // -------------------------------------------------------------------------------------------
      $this->showPluginTagsSettings($rand);

      // -------------------------------------------------------------------------------------------
      //  Validation as ticket followup
      // -------------------------------------------------------------------------------------------
      if ($form->fields['validation_required']) {
         echo '<tr>';
         echo '<td colspan="4">';
         echo '<input type="hidden" name="validation_followup" value="0" />';
         echo '<input type="checkbox" name="validation_followup" id="validation_followup" value="1" ';
         if (!isset($this->fields['validation_followup']) || ($this->fields['validation_followup'] == 1)) {
            echo ' checked="checked"';
         }
         echo '/>';
         echo ' <label for="validation_followup">';
         echo __('Add validation message as first ticket followup', 'formcreator');
         echo '</label>';
         echo '</td>';
         echo '</tr>';
      }

      // -------------------------------------------------------------------------------------------
      //  Conditions to generate the target
      // -------------------------------------------------------------------------------------------
      echo '<tr>';
      echo '<th colspan="4">';
      echo __('Condition to create the target', 'formcreator');
      echo '</label>';
      echo '</th>';
      echo '</tr>';
      $this->showConditionsSettings($rand);

      echo '</table>';

      // Buttons
      echo '<table class="tab_cadre_fixe">';

      echo '<tr>';
      echo '<td colspan="4" class="center">';
      $formFk = PluginFormcreatorForm::getForeignKeyField();
      echo Html::hidden('id', ['value' => $ID]);
      echo Html::hidden($formFk, ['value' => $this->fields[$formFk]]);
      echo '</td>';
      echo '</tr>';

      echo '<tr>';
      echo '<td colspan="5" class="center">';
      echo Html::submit(_x('button', 'Save'), ['name' => 'update']);
      echo '</td>';
      echo '</tr>';

      echo '</table>';
      Html::closeForm();

      $this->showActorsSettings();

      $this->showTagsList();
   }

   /**
    * Save form data to the target
    *
    * @param  PluginFormcreatorFormAnswer $formanswer    Answers previously saved
    *
    * @return Ticket|null Generated ticket if success, null otherwise
    */
   public function save(PluginFormcreatorFormAnswer $formanswer) {
      $data    = [];
      $problem = new Problem();
      $form    = $formanswer->getForm();
      $data    = $this->getDefaultData($formanswer);

      // Parse data
      $domain = PluginFormcreatorForm::getTranslationDomain($form->getID());
      $data['name'] = $this->prepareTemplate(
         __($this->fields['target_name'], $domain),
         $formanswer,
         true
      );
      $data['name'] = Toolbox::addslashes_deep($data['name']);
      $data['name'] = $formanswer->parseTags($data['name'], $this);

      $problemFields = [
         'content',
         'impactcontent',
         'causecontent',
         'symptomcontent',
      ];
      foreach ($problemFields as $problemFields) {
         $data[$problemFields] = $this->prepareTemplate(
            $this->fields[$problemFields],
            $formanswer,
            $problemFields == 'content' // only content supports rich text
         );
         $data[$problemFields] = $data[$problemFields] ?? '';

         $data[$problemFields] = $formanswer->parseTags($data[$problemFields], $this, $problemFields == 'content');
      }

      $data['_users_id_recipient']   = $_SESSION['glpiID'];

      $this->prepareActors($form, $formanswer);

      if (count($this->requesters['_users_id_requester']) == 0) {
         $this->addActor('requester', $formanswer->fields['requester_id'], true);
         $requesters_id = $formanswer->fields['requester_id'];
      } else {
         $requesterAccounts = array_filter($this->requesters['_users_id_requester'], function($v) {
            return ($v != 0);
         });
         $requesters_id = array_shift($requesterAccounts);
         if ($requesters_id === null) {
            // No account for requesters, then fallback on the account used to fill the answers
            $requesters_id = $formanswer->fields['requester_id'];
         }
      }

      $data = $this->setTargetEntity($data, $formanswer, $requesters_id);
      $data = $this->setTargetUrgency($data, $formanswer);

      $data = $this->requesters + $this->observers + $this->assigned + $this->assignedSuppliers + $data;
      $data = $this->requesterGroups + $this->observerGroups + $this->assignedGroups + $data;

      // Create the target problem
      if (!$problemID = $problem->add($data)) {
         return null;
      }

      $this->saveTags($formanswer, $problemID);

      // Add link between Problem and FormAnswer
      $itemlink = $this->getItem_Item();
      $itemlink->add([
         'itemtype'     => PluginFormcreatorFormAnswer::class,
         'items_id'     => $formanswer->fields['id'],
         'problems_id'  => $problemID,
      ]);

      $this->attachDocument($formanswer->getID(), Problem::class, $problem);

      return $problem;
   }

   protected function getTaggableFields() {
      return [
         'target_name',
         'content',
         'impactcontent',
         'causecontent',
         'symptomcontent',
      ];
   }

   public function prepareInputForUpdate($input) {
      // Control fields values :
      if (!$this->skipChecks) {
         $input['content'] = Html::entity_decode_deep($input['content']);

         if (isset($input['destination_entity'])) {
            switch ($input['destination_entity']) {
               case self::DESTINATION_ENTITY_SPECIFIC :
                  $input['destination_entity_value'] = $input['_destination_entity_value_specific'];
                  unset($input['_destination_entity_value_specific']);
                  break;
               case self::DESTINATION_ENTITY_USER :
                  $input['destination_entity_value'] = $input['_destination_entity_value_user'];
                  unset($input['_destination_entity_value_user']);
                  break;
               case self::DESTINATION_ENTITY_ENTITY :
                  $input['destination_entity_value'] = $input['_destination_entity_value_entity'];
                  unset($input['_destination_entity_value_entity']);
                  break;
               default :
                  $input['destination_entity_value'] = 'NULL';
                  break;
            }
         }

         if (isset($input['urgency_rule'])) {
            switch ($input['urgency_rule']) {
               case self::URGENCY_RULE_ANSWER:
                  $input['urgency_question'] = $input['_urgency_question'];
                  unset($input['_urgency_question']);
                  break;
               case self::URGENCY_RULE_SPECIFIC:
                  $input['urgency_question'] = $input['_urgency_specific'];
                  unset($input['_urgency_specific']);
                  break;
               default:
                  $input['urgency_question'] = '0';
            }
         }

         if (isset($input['category_rule'])) {
            switch ($input['category_rule']) {
               case self::CATEGORY_RULE_ANSWER:
                  $input['category_question'] = $input['_category_question'];
                  unset($input['_category_question']);
                  break;
               case self::CATEGORY_RULE_SPECIFIC:
                  $input['category_question'] = $input['_category_specific'];
                  unset($input['_category_specific']);
                  break;
               default:
                  $input['category_question'] = '0';
            }
         }

         $plugin = new Plugin();
         if ($plugin->isInstalled('tag') && $plugin->isActivated('tag')) {
            $input['tag_questions'] = (!empty($input['_tag_questions']))
                                       ? implode(',', $input['_tag_questions'])
                                       : '';
            $input['tag_specifics'] = (!empty($input['_tag_specifics']))
                                       ? implode(',', $input['_tag_specifics'])
                                       : '';
         }
      }

      return parent::prepareInputForUpdate($input);
   }

   /**
    * Hook for pre_purge of the item.
    * GLPI does not provides pre_purgeItem, this is emulated with
    * the hook pre_purge_item
    *
    * @param CommonDBTM $item
    * @return boolean
    */
   public function pre_purgeItem() {
      if (!parent::pre_purgeItem()) {
         $this->input = false;
         return false;
      }

      // delete conditions
      if (! (new PluginFormcreatorCondition())->deleteByCriteria([
         'itemtype' => self::class,
         'items_id' => $this->getID(),
      ])) {
         return false;
      }

      return true;
   }

   public function post_addItem() {
      parent::post_addItem();
      if ($this->input['show_rule'] != PluginFormcreatorCondition::SHOW_RULE_ALWAYS) {
         $this->updateConditions($this->input);
      }
   }

   public function post_updateItem($history = 1) {
      parent::post_updateItem();
      if ($this->input['show_rule'] != PluginFormcreatorCondition::SHOW_RULE_ALWAYS) {
         $this->updateConditions($this->input);
      }
   }

   protected function getTargetTemplate(array $data): int {
      global $DB;

      $targetItemtype = $this->getTemplateItemtypeName();
      $targetTemplateFk = $targetItemtype::getForeignKeyField();
      if ($targetItemtype::isNewID($this->fields[$targetTemplateFk]) && !ITILCategory::isNewID($data['itilcategories_id'])) {
         $rows = $DB->request([
            'SELECT' => [$targetTemplateFk],
            'FROM'   => ITILCategory::getTable(),
            'WHERE'  => ['id' => $data['itilcategories_id']]
         ]);
         if ($row = $rows->next()) {
            // assign problem template according to resulting problem category
            return $row[$targetTemplateFk];
         }
      }

      return $this->fields[$targetTemplateFk] ?? 0;
   }

   /**
    * Export in an array all the data of the current instanciated targetticket
    * @return array the array with all data (with sub tables)
    */
   public function export(bool $remove_uuid = false): array {
      if ($this->isNewItem()) {
         throw new ExportFailureException(sprintf(__('Cannot export an empty object: %s', 'formcreator'), $this->getTypeName()));
      }

      $export = $this->fields;

      // remove key and fk
      $formFk = PluginFormcreatorForm::getForeignKeyField();
      unset($export[$formFk]);

      // replace dropdown ids
      $export['_problemtemplate'] = '';
      if ($export['problemtemplates_id'] > 0) {
         $export['_problemtemplate']
            = Dropdown::getDropdownName('glpi_problemtemplates',
                                        $export['problemtemplates_id']);
      }
      unset($export['problemtemplates_id']);

      $subItems = [
         '_actors'     => PluginFormcreatorTarget_Actor::class,
         '_conditions' => PluginFormcreatorCondition::class,
      ];
      $export = $this->exportChildrenObjects($subItems, $export, $remove_uuid);

      // remove ID or UUID
      $idToRemove = 'id';
      if ($remove_uuid) {
         $idToRemove = 'uuid';
      } else {
         // Convert IDs into UUIDs
         $export = $this->convertTags($export);
         $questionLinks = [
            'urgency_rule'       => ['values' => self::URGENCY_RULE_ANSWER, 'field' => 'urgency_question'],
            'tag_type'           => ['values' => self::TAG_TYPE_QUESTIONS, 'field' => 'tag_questions'],
            'category_rule'      => ['values' => self::CATEGORY_RULE_ANSWER, 'field' => 'category_question'],
            'destination_entity' => [
               'values' => [
                  self::DESTINATION_ENTITY_ENTITY,
                  self::DESTINATION_ENTITY_USER,
               ],
               'field' => 'destination_entity_value',
            ],
         ];
         foreach ($questionLinks as $field => $fieldSetting) {
            if (!is_array($fieldSetting['values'])) {
               $fieldSetting['values'] = [$fieldSetting['values']];
            }
            if (!in_array($export[$field], $fieldSetting['values'])) {
               continue;
            }
            $question = new PluginFormcreatorQuestion();
            $question->getFromDB($export[$fieldSetting['field']]);
            $export[$fieldSetting['field']] = $question->fields['uuid'];
         }
      }
      unset($export[$idToRemove]);

      return $export;
   }

   public static function import(PluginFormcreatorLinker $linker, array $input = [], int $containerId = 0) {
      global $DB;

      if (!isset($input['uuid']) && !isset($input['id'])) {
         throw new ImportFailureException(sprintf('UUID or ID is mandatory for %1$s', static::getTypeName(1)));
      }

      $formFk = PluginFormcreatorForm::getForeignKeyField();
      $input[$formFk] = $containerId;
      $input['_skip_create_actors'] = true;

      $item = new self();
      // Find an existing target to update, only if an UUID is available
      $itemId = false;
      /** @var string $idKey key to use as ID (id or uuid) */
      $idKey = 'id';
      if (isset($input['uuid'])) {
         $idKey = 'uuid';
         $itemId = plugin_formcreator_getFromDBByField(
            $item,
            'uuid',
            $input['uuid']
         );
      }

      // set template
      $problemTemplateId = 0;
      plugin_formcreator_getFromDBByField(
         $problemTemplate = new ProblemTemplate(),
         'name',
         $input['_problemtemplate']
      );
      if (!$problemTemplate->isNewItem() && $problemTemplate->canViewItem()) {
         $problemTemplateId = $problemTemplate->getID();
      }
      $input['problemtemplates_id'] = $problemTemplateId;

      // Escape text fields
      foreach (['name'] as $key) {
         $input[$key] = $DB->escape($input[$key]);
      }

      // Assume that all questions are already imported
      // convert question uuid into id
      $questions = $linker->getObjectsByType(PluginFormcreatorQuestion::class);
      if ($questions !== false) {
         $taggableFields = $item->getTaggableFields();
         foreach ($questions as $originalId => $question) {
            $newId = $question->getID();
            foreach ($taggableFields as $field) {
               $content = $input[$field];
               $content = str_replace("##question_$originalId##", "##question_$newId##", $content);
               $content = str_replace("##answer_$originalId##", "##answer_$newId##", $content);
               $input[$field] = $content;
            }
         }

         // escape text fields
         foreach ($taggableFields as $key) {
            $input[$key] = $DB->escape($input[$key]);
         }
      }

      // Update links to other questions
      $questionLinks = [
         'urgency_rule'       => ['values' => self::URGENCY_RULE_ANSWER, 'field' => 'urgency_question'],
         'tag_type'           => ['values' => self::TAG_TYPE_QUESTIONS, 'field' => 'tag_questions'],
         'category_rule'      => ['values' => self::CATEGORY_RULE_ANSWER, 'field' => 'category_question'],
         'destination_entity' => [
            'values' => [
               self::DESTINATION_ENTITY_ENTITY,
               self::DESTINATION_ENTITY_USER,
            ],
            'field' => 'destination_entity_value',
         ],
      ];
      foreach ($questionLinks as $field => $fieldSetting) {
         if (!is_array($fieldSetting['values'])) {
            $fieldSetting['values'] = [$fieldSetting['values']];
         }
         if (!in_array($input[$field], $fieldSetting['values'])) {
            continue;
         }
         /**@var PluginFormcreatorQuestion $question */
         $question = $linker->getObject($input[$fieldSetting['field']], PluginFormcreatorQuestion::class);
         if ($question === false) {
            $typeName = strtolower(self::getTypeName());
            throw new ImportFailureException(sprintf(__('Failed to add or update the %1$s %2$s: a question is missing and is used in a parameter of the target', 'formceator'), $typeName, $input['name']));
         }
         $input[$fieldSetting['field']] = $question->getID();
      }

      // Add or update
      $originalId = $input[$idKey];
      $item->skipChecks = true;
      if ($itemId !== false) {
         $input['id'] = $itemId;
         $item->update($input);
      } else {
         unset($input['id']);
         $itemId = $item->add($input);
      }
      $item->skipChecks = false;
      if ($itemId === false) {
         $typeName = strtolower(self::getTypeName());
         throw new ImportFailureException(sprintf(__('Failed to add or update the %1$s %2$s', 'formceator'), $typeName, $input['name']));
      }

      // add the target to the linker
      $linker->addObject($originalId, $item);

      $subItems = [
         '_actors'     => PluginFormcreatorTarget_Actor::class,
         '_conditions' => PluginFormcreatorCondition::class,
      ];
      $item->importChildrenObjects($item, $linker, $subItems, $input);

      return $itemId;
   }

   public static function countItemsToImport(array $input) : int {
      $subItems = [
         '_actors'            => PluginFormcreatorTarget_Actor::class,
         '_conditions'        => PluginFormcreatorCondition::class,
      ];

      return 1 + self::countChildren($subItems, $input);
   }

   public function rawSearchOptions() {
      $tab = parent::rawSearchOptions();

      $tab[] = [
         'id'                 => '2',
         'table'              => $this::getTable(),
         'field'              => 'id',
         'name'               => __('ID'),
         'searchtype'         => 'contains',
         'massiveaction'      => false
      ];

      $tab[] = [
         'id'                 => '4',
         'table'              => $this::getTable(),
         'field'              => 'target_name',
         'name'               => __('Problem title', 'formcreator'),
         'datatype'           => 'string',
         'searchtype'         => 'contains',
         'massiveaction'      => false
      ];

      $tab[] = [
         'id'                 => '5',
         'table'              => $this::getTable(),
         'field'              => 'content',
         'name'               => __('Content', 'formcreator'),
         'datatype'           => 'text',
         'searchtype'         => 'contains',
         'massiveaction'      => false
      ];

      $tab[] = [
         'id'                 => '6',
         'table'              => $this::getTable(),
         'field'              => 'impactcontent',
         'name'               => __('Impact', 'formcreator'),
         'datatype'           => 'text',
         'searchtype'         => 'contains',
         'massiveaction'      => false
      ];

      $tab[] = [
         'id'                 => '7',
         'table'              => $this::getTable(),
         'field'              => 'causecontent',
         'name'               => __('Cause', 'formcreator'),
         'datatype'           => 'text',
         'searchtype'         => 'contains',
         'massiveaction'      => false
      ];

      $tab[] = [
         'id'                 => '8',
         'table'              => $this::getTable(),
         'field'              => 'symptomcontent',
         'name'               => __('Symptom', 'formcreator'),
         'datatype'           => 'text',
         'searchtype'         => 'contains',
         'massiveaction'      => false
      ];

      return $tab;
   }
}
