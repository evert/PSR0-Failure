<?php
require 'SplClassLoader.php';

$loader = new SplClassLoader('Foo', __DIR__ . '/lib');
$loader->register();

var_dump(new Foo\Baz\Foo());

$loader2 = new SplClassLoader('Foo', __DIR__ . '/src');
$loader2->register();

var_dump(new Foo\Bar\Foo());
