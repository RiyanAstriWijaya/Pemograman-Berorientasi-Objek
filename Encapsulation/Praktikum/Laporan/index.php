<?php
spl_autoload_register(function($class){
    include $class .'.php' ;
});

$bd1 = new BangunDatar();
$bd1->setPanjang(10); //mengeset nilai property
$bd1->setLebar(3);
echo $bd1->getLuas(),PHP_EOL;

$bus1 = new Bus();
$bus1->setkapasitas(20);
$bus1->setJumlah(19);
echo "Bus 1 Meniliki Penumpang: {$bus1->validasi()} kapasitas:{$bus1->getkapasitas()}" ,PHP_EOL;

$bus2 = new Bus();
$bus2->setkapasitas(30);
$bus2->setJumlah(25);
echo "Bus 2 Meniliki Penumpang: {$bus2->validasi()} kapasitas:{$bus2->getkapasitas()}" ,PHP_EOL;