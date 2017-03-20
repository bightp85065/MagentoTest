<?php

require_once "app/Mage.php";

Mage::app();

$handsome = new Demo_Bohan_Model_Handsome();
$handsome -> printSomething();


?>