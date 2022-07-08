<?php
require(dirname(__FILE__) . '/class/pdo.class.php');
require(dirname(__FILE__) . '/class/customer.class.php');
require(dirname(__FILE__) . '/class/phonebook.class.php');

define('DBHost', 'localhost');
define('DBName', 'asterisk');
define('DBUser', 'root');
define('DBPassword', '');
define('PAGIN', 5);

$groups = array(
    '174' => array(155,164,168,173),    
    '66' => array(67,68,69,74,100)     
);

define('GROUPS', $groups);

?>