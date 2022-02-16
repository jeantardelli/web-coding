<?php
namespace Bar {
	const a=10; // defined as \Bar\a
}

namespace {
	const a=50; // defined as \a, in the global namespace
}
?>
