<?php

require_once "app/Mage.php";

Mage::app();

$handsome = new Demo_Bohan_Model_Handsome();
$handsome -> printSomething();

echo "<br>";

$getModelHandsome = Mage::getModel('bohan/handsome');
echo $getModelHandsome->printSomething();
//echo 123;

echo "<br>";

$config = Mage::getModel('core/config');
echo $config->getBaseDir();
//echo 123;

echo "<br>";

echo $handsome->loginGoodGood();


echo "<br>";

//$model = Mage::getModel('catalog/product') -> load(27);
//$price = $model -> getPrice();
//$price += 5;
//$model-> setPrice($price) -> setSku('SK83293432');
//$model-> save();
//
//echo $model -> getPrice();

$products_collection = Mage::getModel('catalog/product')
->getCollection()
->addAttributeToSelect('*')
->addFieldToFilter('price','5.00');

foreach ($products_collection as $key => $value) {
    echo $key;
    echo $product->getName();
}

echo "<br>";
echo "<a href='bohan/index/index'>DemoController</a>"; 
echo "<br>";
echo "<a href='bohan/index/view'>DemoController2</a>"; 

?>