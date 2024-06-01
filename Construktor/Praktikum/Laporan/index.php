<?php 
spl_autoload_register (function ($class){
    include $class . ".php";
});

//dengan parameter
$persegi = new BangunDatar(7,2);
echo $persegi -> getLuas(),PHP_EOL;

//tanpa parameter
$persegi = new BangunDatar();
echo $persegi -> getLuas();