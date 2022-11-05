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

global $CFG_GLPI;
// Version of the plugin (major.minor.bugfix)
define('PLUGIN_FORMCREATOR_VERSION', '2.13.0-alpha.2');
// Schema version of this version (major.minor only)
define('PLUGIN_FORMCREATOR_SCHEMA_VERSION', '2.13');
// is or is not an official release of the plugin
define('PLUGIN_FORMCREATOR_IS_OFFICIAL_RELEASE', true);

// Minimal GLPI version, inclusive
define ('PLUGIN_FORMCREATOR_GLPI_MIN_VERSION', '10.0');
// Maximum GLPI version, exclusive (ignored if PLUGIN_FORMCREATOR_IS_OFFICIAL_RELEASE == false)
define ('PLUGIN_FORMCREATOR_GLPI_MAX_VERSION', '10.1');

define('FORMCREATOR_ROOTDOC', Plugin::getWebDir('formcreator'));

// Advanced features for Formcreator
define('PLUGIN_FORMCREATOR_ADVANCED', 'advform');

/**
 * Define the plugin's version and informations
 *
 * @return Array [name, version, author, homepage, license, minGlpiVersion]
 */
function plugin_version_formcreator() {
   $glpiVersion = rtrim(GLPI_VERSION, '-dev');
   if (!method_exists('Plugins', 'checkGlpiVersion') && version_compare($glpiVersion, PLUGIN_FORMCREATOR_GLPI_MIN_VERSION, 'lt')) {
      echo 'This plugin requires GLPI >= ' . PLUGIN_FORMCREATOR_GLPI_MIN_VERSION;
      return false;
   }
   $requirements = [
      'name'           => 'Form Creator',
      'version'        => PLUGIN_FORMCREATOR_VERSION,
      'author'         => '<a href="http://www.teclib.com">Teclib\'</a>',
      'homepage'       => 'https://github.com/pluginsGLPI/formcreator',
      'license'        => '<a href="../plugins/formcreator/LICENSE" target="_blank">GPLv2</a>',
      'requirements'   => [
         'glpi'           => [
            'min'            => PLUGIN_FORMCREATOR_GLPI_MIN_VERSION,
         ]
      ]
   ];

   if (PLUGIN_FORMCREATOR_IS_OFFICIAL_RELEASE) {
      // This is not a development version
      $requirements['requirements']['glpi']['max'] = PLUGIN_FORMCREATOR_GLPI_MAX_VERSION;
   }
   return $requirements;
}

/**
 * Check plugin's prerequisites before installation
 *
 * @return boolean
 */
function plugin_formcreator_check_prerequisites() {
   $prerequisitesSuccess = true;

   if (version_compare(GLPI_VERSION, PLUGIN_FORMCREATOR_GLPI_MIN_VERSION, 'lt')
       || PLUGIN_FORMCREATOR_IS_OFFICIAL_RELEASE && version_compare(GLPI_VERSION, PLUGIN_FORMCREATOR_GLPI_MAX_VERSION, 'ge')) {
      echo "This plugin requires GLPI >= " . PLUGIN_FORMCREATOR_GLPI_MIN_VERSION . " and GLPI < " . PLUGIN_FORMCREATOR_GLPI_MAX_VERSION . "<br>";
      $prerequisitesSuccess = false;
   }

   if (!is_readable(__DIR__ . '/vendor/autoload.php') || !is_file(__DIR__ . '/vendor/autoload.php')) {
      echo "Run composer install --no-dev in the plugin directory<br>";
      $prerequisitesSuccess = false;
   }

   if (!is_readable(__DIR__ . '/lib/.yarn-integrity') || !is_file(__DIR__ . '/lib/.yarn-integrity')) {
      echo "Run yarn install --prod in the plugin directory<br>";
      $prerequisitesSuccess = false;
   }

   return $prerequisitesSuccess;
}

/**
 * Check plugin's config before activation (if needed)
 *
 * @param string $verbose Set true to show all messages (false by default)
 * @return boolean
 */
function plugin_formcreator_check_config($verbose = false) {
   return true;
}

/**
 * Initialize all classes and generic variables of the plugin
 */
function plugin_init_formcreator() {
   global $CFG_GLPI;

   plugin_formcreator_permanent_hook();

   array_push($CFG_GLPI["ticket_types"], PluginFormcreatorFormAnswer::class);
   array_push($CFG_GLPI["document_types"], PluginFormcreatorFormAnswer::class);

   $plugin = new Plugin();
   if (!$plugin->isActivated('formcreator')) {
      return;
   }

   plugin_formcreator_redirect();

   spl_autoload_register('plugin_formcreator_autoload');
   require_once(__DIR__ . '/vendor/autoload.php');

   plugin_formcreator_hook();

   if (isset($_SESSION['glpiactiveentities_string'])) {
      plugin_formcreator_registerClasses();

      $pages = [
         FORMCREATOR_ROOTDOC . '/front/targetticket.form.php',
         FORMCREATOR_ROOTDOC . '/front/formdisplay.php',
         FORMCREATOR_ROOTDOC . '/front/form.form.php',
         FORMCREATOR_ROOTDOC . '/front/formanswer.form.php',
         FORMCREATOR_ROOTDOC . '/front/issue.form.php',
         FORMCREATOR_ROOTDOC . '/front/form_language.form.php',
         '/front/entity.form.php',
      ];
      foreach ($pages as $page) {
         if (strpos($_SERVER['REQUEST_URI'], $page) !== false) {
            Html::requireJs('tinymce');
            break;
         }
      }
   }

   // Html::requireJs('gridstack');
   $CFG_GLPI['javascript']['admin'][strtolower(PluginFormcreatorForm::class)] = ['gridstack'];
   $CFG_GLPI['javascript']['helpdesk'][strtolower(PluginFormcreatorFormlist::class)] = ['gridstack'];
   $CFG_GLPI['javascript']['helpdesk'][strtolower(PluginFormcreatorIssue::class)] = ['photoswipe'];
}

/**
 * Tells if helpdesk replacement is enabled for the current user
 *
 * @return boolean|integer
 */
function plugin_formcreator_replaceHelpdesk() {
   if (!isset($_SESSION['glpiactive_entity'])) {
      return false;
   }

   if (Session::getCurrentInterface() != 'helpdesk') {
      return false;
   }

   $helpdeskMode = PluginFormcreatorEntityconfig::getUsedConfig('replace_helpdesk', $_SESSION['glpiactive_entity']);
   if ($helpdeskMode != PluginFormcreatorEntityConfig::CONFIG_GLPI_HELPDSK) {
      return $helpdeskMode;
   }

   return false;
}


/**
 * Generate unique id for form based on server name, glpi directory and basetime
 **/
function plugin_formcreator_getUuid() {
   //encode uname -a, ex Linux localhost 2.4.21-0.13mdk #1 Fri Mar 14 15:08:06 EST 2003 i686
   $serverSubSha1 = substr(sha1(php_uname('a')), 0, 8);
   // encode script current dir, ex : /var/www/glpi_X
   $dirSubSha1    = substr(sha1(__FILE__), 0, 8);

   return uniqid("$serverSubSha1-$dirSubSha1-", true);
}

/**
 * Retrieve an item from the database
 *
 * @param $item instance of CommonDBTM object
 * @param $field field of object's table to search in
 * @param $value value to search in provided field
 *
 * @return true if succeed else false
 */
function plugin_formcreator_getFromDBByField(CommonDBTM $item, $field = '', $value = '') {
   global $DB;

   // != 0 because 0 is consider as empty
   if (!$item instanceof Entity
       && (strlen($value) == 0
           || $value === 0)) {
      return false;
   }

   $value = $DB->escape($value);
   $found = $item->getFromDBByRequest([
      'WHERE' => [$item::getTable() . '.' . $field => $value],
      'LIMIT' => 1
   ]);

   if ($found) {
      return $item->getID();
   } else {
      return false;
   }
}

/**
 * Autoloader
 * @param string $classname
 */
function plugin_formcreator_autoload($classname) {
   if (strpos($classname, 'PluginFormcreator') === 0) {
      // useful only for installer GLPi autoloader already handles inc/ folder
      $filename = __DIR__ . '/inc/' . strtolower(str_replace('PluginFormcreator', '', $classname)). '.class.php';
      if (is_readable($filename) && is_file($filename)) {
         include_once($filename);
         return true;
      }
   }
}

/**
 * Show the last SQL error, logs its backtrace and dies
 * @param Migration $migration
 */
function plugin_formcreator_upgrade_error(Migration $migration) {
   global $DB;

   $error = $DB->error();
   $migration->log($error . "\n" . Toolbox::backtrace(false, '', ['Toolbox::backtrace()']), false);
   die($error . "<br><br> Please, check migration log");
}

function plugin_formcreator_ldap_warning_handler($errno, $errstr, $errfile, $errline) {
   if (0 === error_reporting()) {
      return false;
   }
   throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

function plugin_formcreator_permanent_hook() {
   global $PLUGIN_HOOKS;

   // Set the plugin CSRF compliance (required since GLPI 0.84)
   $PLUGIN_HOOKS['csrf_compliant']['formcreator'] = true;

   // Can assign FormAnswer to tickets
   $PLUGIN_HOOKS['assign_to_ticket']['formcreator'] = true;

   // hook to update issues when an operation occurs on a ticket
   $PLUGIN_HOOKS['item_add']['formcreator'] = [
      Ticket::class => 'plugin_formcreator_hook_add_ticket',
      ITILFollowup::class => 'plugin_formcreator_hook_update_itilFollowup',
   ];
   $PLUGIN_HOOKS['item_update']['formcreator'] = [
      Ticket::class => 'plugin_formcreator_hook_update_ticket',
      TicketValidation::class => 'plugin_formcreator_hook_update_ticketvalidation',
      Plugin::class => 'plugin_formcreator_hook_update_plugin',
      Profile::class => 'plugin_formcreator_hook_update_profile',
   ];
   $PLUGIN_HOOKS['item_delete']['formcreator'] = [
      Ticket::class => 'plugin_formcreator_hook_delete_ticket'
   ];
   $PLUGIN_HOOKS['item_restore']['formcreator'] = [
      Ticket::class => 'plugin_formcreator_hook_restore_ticket'
   ];
   $PLUGIN_HOOKS['item_purge']['formcreator'] = [
      Ticket::class => 'plugin_formcreator_hook_purge_ticket',
      TicketValidation::class => 'plugin_formcreator_hook_purge_ticketvalidation',
   ];
   $PLUGIN_HOOKS['pre_item_purge']['formcreator'] = [
      PluginFormcreatorTargetTicket::class => 'plugin_formcreator_hook_pre_purge_targetTicket',
      PluginFormcreatorTargetChange::class => 'plugin_formcreator_hook_pre_purge_targetChange'
   ];
   // hook to add custom actions on a ticket in service catalog
   $PLUGIN_HOOKS['timeline_actions']['formcreator'] = 'plugin_formcreator_timelineActions';
}

function plugin_formcreator_hook() {
   global $PLUGIN_HOOKS, $CFG_GLPI;

   // Add specific CSS
   $PLUGIN_HOOKS['add_css']['formcreator'][] = PluginFormcreatorCommon::getCssFilename();

   $PLUGIN_HOOKS['pre_show_tab']['formcreator'] = [
      PluginFormcreatorCommon::class, 'hookPreShowTab',
   ];
   $PLUGIN_HOOKS['post_show_tab']['formcreator'] = [
      PluginFormcreatorCommon::class, 'hookPostShowTab',
   ];

   // Load JS and CSS files if we are on a page which need them
   if (strpos($_SERVER['REQUEST_URI'], 'formcreator') !== false
      || strpos($_SERVER['REQUEST_URI'], 'central.php') !== false
      || isset($_SESSION['glpiactiveprofile']) &&
         Session::getCurrentInterface() == 'helpdesk') {

      // Add specific JavaScript
      $PLUGIN_HOOKS['add_javascript']['formcreator'][] = 'js/scripts.js';
   }

   if (isset($_SESSION['glpiactiveentities_string'])) {
      if (strpos($_SERVER['REQUEST_URI'], 'helpdesk') !== false
            || strpos($_SERVER['REQUEST_URI'], 'central.php') !== false
            || strpos($_SERVER['REQUEST_URI'], 'formcreator/front/formlist.php') !== false
            || strpos($_SERVER['REQUEST_URI'], 'formcreator/front/knowbaseitem.php') !== false
            || strpos($_SERVER['REQUEST_URI'], 'formcreator/front/wizard.php') !== false) {
         $PLUGIN_HOOKS['add_javascript']['formcreator'][] = 'lib/jquery-slinky/dist/slinky.min.js';
         $PLUGIN_HOOKS['add_javascript']['formcreator'][] = 'lib/masonry-layout/dist/masonry.pkgd.min.js';
         $CFG_GLPI['javascript']['self-service']['none'] = [
            'dashboard',
            'gridstack'
         ];
      }
      if (strpos($_SERVER['REQUEST_URI'], 'issue.php') !== false) {
         $CFG_GLPI['javascript']['self-service']['none'] = [
            'dashboard',
            'gridstack'
         ];
      }
   }

   $PLUGIN_HOOKS['dashboard_cards']['formcreator'] = 'plugin_formcreator_hook_dashboard_cards';

   if (Session::getLoginUserID() === false) {
      return;
   }

   // If user have acces to one form or more, add link
   if (PluginFormcreatorForm::countAvailableForm() > 0) {
      $PLUGIN_HOOKS['menu_toadd']['formcreator']['helpdesk'] = PluginFormcreatorFormlist::class;
   }

   // Massive Action definition
   $PLUGIN_HOOKS['use_massive_action']['formcreator'] = 1;

   // Add a link in the main menu plugins for technician and admin panel
   $PLUGIN_HOOKS['menu_entry']['formcreator'] = 'front/formlist.php';

   $PLUGIN_HOOKS['redefine_menus']['formcreator'] = "plugin_formcreator_redefine_menus";

   // Config page
   $links  = [];
   if (Session::haveRight('entity', UPDATE)) {
      $PLUGIN_HOOKS['menu_toadd']['formcreator']['admin'] = PluginFormcreatorForm::class;
   }
}

function plugin_formcreator_registerClasses() {
   // Load menu entries if user is logged in and if he has access to at least one form
   if (Session::getLoginUserID() !== false) {

      Plugin::registerClass(PluginFormcreatorEntityconfig::class, ['addtabon' => Entity::class]);
   }
   Plugin::registerClass(PluginFormcreatorForm::class, ['addtabon' => Central::class]);

   // Load field class and all its method to manage fields
   Plugin::registerClass(PluginFormcreatorFields::class);

   // Notification
   Plugin::registerClass(PluginFormcreatorFormAnswer::class, [
      'notificationtemplates_types' => true
   ]);

   Plugin::registerClass(PluginFormcreatorEntityconfig::class, ['addtabon' => Entity::class]);
}

function plugin_formcreator_redirect() {
   if (!isset($_SESSION['glpiactiveentities_string'])) {
      return;
   }

   // Redirect to helpdesk replacement
   if (strpos($_SERVER['REQUEST_URI'], "front/helpdesk.public.php") !== false) {
      if (!isset($_REQUEST['newprofile']) && !isset($_REQUEST['active_entity'])) {
         // Not changing profile or active entity
         if (Session::getCurrentInterface() !== false
               && isset($_SESSION['glpiactive_entity'])) {
            // Interface and active entity are set in session
            if (plugin_formcreator_replaceHelpdesk()) {
               Html::redirect(FORMCREATOR_ROOTDOC."/front/wizard.php");
            }
         }
      }
   }

   if (plugin_formcreator_replaceHelpdesk() === false) {
      return;
   }

   if (strpos($_SERVER['REQUEST_URI'], "front/ticket.form.php") !== false) {
      if (!isset($_POST['update'])) {
         $decodedUrl = [];
         $openItilFollowup = '';
         if (isset($_GET['_openfollowup'])) {
            $openItilFollowup = '&_openfollowup=1';
         }
         parse_str($_SERVER['QUERY_STRING'], $decodedUrl);
         if (isset($decodedUrl['forcetab'])) {
            Session::setActiveTab(Ticket::class, $decodedUrl['forcetab']);
         }

         // When an ticket has a matching issue (it means that the ticket is the only generated ticket)
         $issue = new PluginFormcreatorIssue();
         $issues = $issue->find([
            'itemtype' => Ticket::class,
            'items_id'  => (int) $_GET['id']
         ]);
         if (count($issues) == 1) {
            $issueId = array_pop($issues)['id'];
            $issue->getFromDB($issueId);
            Html::redirect($issue->getFormURLWithID($issue->getID()) . $openItilFollowup);
         }

         // When no or several tickets matches an issue, rely use the Form Answer
         $itemTicket = new Item_Ticket();
         $itemTicket->getFromDBByCrit([
            'itemtype' => PluginFormcreatorFormAnswer::class,
            'tickets_id'  => (int) $_GET['id']
         ]);
         if ($itemTicket->isNewItem()) {
            // No formanswer found
            Html::displayNotFoundError();
         }

         $issue->getFromDBByCrit([
            'itemtype' => PluginFormcreatorFormAnswer::class,
            'items_id'  => $itemTicket->fields['items_id']
         ]);
         if ($issue->isNewItem()) {
            // No formanswer found
            Html::displayNotFoundError();
         }
         $ticket = Ticket::getById($itemTicket->fields['tickets_id']);
         if ($ticket === false) {
            Html::redirect($issue->getFormURLWithID($itemTicket->fields['items_id']) . $openItilFollowup);
         }

         Html::redirect($issue->getFormURLWithID($issue->getID()) . '&tickets_id=' . $itemTicket->fields['tickets_id']);
      }
   }
}