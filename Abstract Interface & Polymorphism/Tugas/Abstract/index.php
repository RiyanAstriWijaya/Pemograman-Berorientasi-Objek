<?php

spl_autoload_register(function($class){
    include $class. ".php";
});

$a = new Lingkaran();
$a->setJari(3);
echo $a->HitungLuas(),PHP_EOL;

$krc = new Kerucut();
$krc -> setJariJari(4);
$krc -> setTinggi(12);
echo $krc -> HitungVolume(),PHP_EOL;

$tbg = new Tabung();
$tbg -> setJariJari(4);
$tbg -> setTinggi(6);
echo $tbg -> HitungVolume();