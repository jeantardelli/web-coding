<?php
namespace Foo;
include "bar.php";
const a=20;          // defined as \Foo\a;
echo a;              // 20, resolves to \Foo\a
echo \Foo\a;         // 20, resolves to \Foo\a
echo \Bar\a;         // 10, resolves to \Bar\a
echo \a;             // 50, resolves to \a, the global namespace
echo namespace\a;    // 20, resolves to \Foo\a
//echo Foo\a;        // error, resolves to \Foo\Foo\a
//echo Bar\a;        // error, resolves to \Foo\Bar\a

namespace Foo\Alpha;
const a=30;          // defined as \Foo\Alhpa\a
echo strlen("hi")    // 2, fall back to \strlen(), the global nspc;
?>
