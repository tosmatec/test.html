<?php
function __autoload($class_name) {
  require_once $class_name . '.php';
}
//include("/var/www/html/get/MyClass.php");

echo "test <br/> ";

//make changes on Apr 8

//require_once('MyClass.php');

echo "test .<br/>";

 $vars = new MyClass;

echo $vars->getProperty();
echo $vars->setProperty("I'm a new property value!");
echo $vars->getProperty();
//print($vars->setProperty("I'm a new property value!"));

echo "last test <br/>";

/* require_once("/var/www/html/get/MyClass.php") or die ("Could Not load file");
 //include("MyClass.php");

 require_once('MyClass.php');
*/

$testObject = new MyClass;
$testOthObj = new MyOtherClass;

echo $testObject->getProperty();
echo $testOthObj->newMethod();


do
{
  // Call plusOne without instantiating MyClass
  echo MyClass::plusOne();
} while ( MyClass::$count < 10 );


?>
