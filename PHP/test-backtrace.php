<?php // test-backtrace.php

function a() {b();}
function b() {
	print_r(debug_backtrace());
	echo "<br /><br />";
	debug_print_bracktrace();
}
a();
?>
