<?php // magical_constants.php
namespace test;
class C{
	public $v;
	function print_names(){
		echo __LINE__."<br />";
		echo __FILE__."<br />";
		echo __DIR__."<br />";
		echo __CLASS__."<br />";
		echo __METHOD__."<br />";
		echo __FUNCTION__."<br />";
		echo __NAMESPACE__."<br />"; // NULL
		// echo __TRAIT__;
	}
}
$o = new C;
$o->print_names();
?>
