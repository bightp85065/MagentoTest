<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once ( "app/Mage.php" );
Mage::app('default');

$db = Mage::getSingleton('core/resource')->getConnection('core_write');

$db->query("UPDATE `core_config_data` SET `value` = 'http://mitlab.m1.com:5487/' WHERE `path` = 'web/secure/base_url';");

$db->query("UPDATE `core_config_data` SET `value` = 'http://mitlab.m1.com:5487/' WHERE `path` = 'web/unsecure/base_url';");
?>
