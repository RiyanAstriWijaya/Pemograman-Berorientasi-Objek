<?php

spl_autoload_register(function($class){
    include $class . ".php";
});

$obj = new Segitiga(5, 10);
echo $obj -> getLuas(),PHP_EOL;

$obj2 = new Lingkaran(3);
echo $obj2 -> getLuas(),PHP_EOL;

$obj1 = new Trapesium (5, 6, 6);
echo $obj1 -> getLuas(),PHP_EOL;