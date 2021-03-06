--TEST--
Preloading class using trait with undefined class constant access
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.optimization_level=-1
opcache.preload={PWD}/preload_undef_const_2.inc
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
var_dump(trait_exists('T'));
var_dump(class_exists('Foo'));
?>
--EXPECTF--
Fatal error: Undefined constant 'UNDEF' in Unknown on line 0

Fatal error: Failed to resolve initializers of class Foo during preloading in Unknown on line 0
