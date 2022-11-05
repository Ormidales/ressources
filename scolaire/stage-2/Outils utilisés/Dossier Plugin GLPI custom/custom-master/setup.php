<?php
//
include_once (GLPI_ROOT . "/plugins/custom/inc/install.function.php");
define("CUSTOM_FILES_DIR", GLPI_ROOT."/files/_plugins/custom/");
define("CUSTOM_CSS_PATH", CUSTOM_FILES_DIR."glpi_style.css");

// Init the hooks of the plugins -Needed
function plugin_init_custom() {
   global $PLUGIN_HOOKS, $CFG_GLPI;

   $PLUGIN_HOOKS['config_page']['custom']  = "front/config.php";
   $PLUGIN_HOOKS['add_javascript']['custom'][]    = 'selector.js.php';

   $PLUGIN_HOOKS['add_css']['custom'][]           = 'style.css';

   $PLUGIN_HOOKS['csrf_compliant']['custom']      = true;

   if (Session::haveRight('config', UPDATE)) {
      $PLUGIN_HOOKS['menu_toadd']['custom'] = array('config' => 'PluginCustomConfig');
   }

   // exclude some pages from splitted layout
   if (isset($CFG_GLPI['layout_excluded_pages'])) {
      array_push($CFG_GLPI['layout_excluded_pages'], "tab.form.php",
                                                     "defaulttab.form.php");
   }
}


// Get the name and the version of the plugin - Needed
function plugin_version_custom() {
   return array('name'           => "Custom",
                'version'        => "0.90-1.0.1",
                'author'         => "<a href='mailto:adelaunay@teclib.com'>Alexandre DELAUNAY</a> ".
                  "- <a href='http://www.teclib.com'>Teclib'</a>",
                'homepage'       => "http://www.teclib.com/",
                'minGlpiVersion' => "0.90");
}

// Optional : check prerequisites before install : may print errors or add to message after redirect
function plugin_custom_check_prerequisites() {
   if (version_compare(GLPI_VERSION,'0.90','lt')) {
      echo "This plugin requires GLPI >= 0.90";
      return false;
   } elseif (!extension_loaded("gd")) {
      echo "php-gd is required";
   }
   if (version_compare(PHP_VERSION, '5.3.0', 'lt')) {
      echo "PHP 5.3.0 or higher is required";
      return false;
   }

   return true;
}


// Check configuration process for plugin : need to return true if succeeded
// Can display a message only if failure and $verbose is true
function plugin_custom_check_config($verbose=false) {
   if (true) { // Your configuration check
      return true;
   }
   if ($verbose) {
      echo __('Installed / not configured');
   }
   return false;
}
