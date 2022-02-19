<?php //foobaz.php
namespace Foobaz;
include "alpha_beta.php";

$o=new \Alpha\Beta\MyClass;
$ns='Alpha\Beta\MyClass'; // no leading \ needed
$o2= new $ns;
echo $o2::$v;

use Alpha\Beta as A; // aliasing a namespace
echo A\MyClass::$v;

use Alpha\Beta\MyClass as C; // aliasing a class name
echo C::$v;

use Alpha\Beta\MyClass; // Alpha\Beta\MyClass as MyClass;
echo MyClass::$v;

use Alpha\Beta\MyClass as D, Alpha\Beta; // Multiple decl.
echo Beta\MyClass::$v;
?>
