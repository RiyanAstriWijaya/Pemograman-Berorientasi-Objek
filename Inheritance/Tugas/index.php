<?php
spl_autoload_register(function($class){
    include $class .'.php' ;
});

$BD = new BangunDatar();
$BD->setPanjang(6);
$BD->setLebar(4);
echo "HASIL DARI GET LUAS YANG DI CLASS INDUK   : " .$BD->getLuas(),PHP_EOL;

$Blk = new Balok();
$Blk->setPanjang(6);
$Blk->setLebar(5);
$Blk->setTinggi(8);
echo "HASIL DARI GET LUAS YANG DI CLASS EXTENDS : " .$Blk->getLuas();