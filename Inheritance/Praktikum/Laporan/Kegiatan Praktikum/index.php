<?php

spl_autoload_register(function($class){
    include $class. '.php';
});

$bd2 = new BangunDatar();
$bd2->setPanjang(10);
$bd2->setLebar(10);
echo $bd2->getLuas(), PHP_EOL;


$segi = new SegiTiga();
$segi->setAlas(10);
$segi->setTinggi(10);
echo $segi->getLuas(), PHP_EOL;


$lingkaran = new Lingkaran();
$lingkaran->setDiameter(7);
echo $lingkaran->getLuas(), PHP_EOL;


$trapesium = new Trapesium();
$trapesium->setPanjang(10);
$trapesium->setLebar(4);
$trapesium->setPanjangAtas(10);
echo $trapesium->getLuas(), PHP_EOL;