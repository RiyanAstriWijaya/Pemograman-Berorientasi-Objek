<?php
spl_autoload_register(function($class){
    include $class . '.php';
});

$k = new Kotak(4, 6);
echo $k->getLuas(), PHP_EOL;

$kubus = new Kotak();
$kubus->setPanjang(4);
$kubus->setLebar(4);
echo $kubus->getLuas(), PHP_EOL;

$balok = new Balok(5, 6, 7);
echo "Luas Balok : " . $balok->getLuas(), PHP_EOL;
echo "Volume Balok : " . $balok->getVolume(), PHP_EOL;