<?php
spl_autoload_register(function($class){
    include $class . '.php';
});

$L = new Lingkaran();
$L->r =3;
echo 'Luas Lingkaran adalah: ' . $L->hitungLuas(). PHP_EOL;
echo PHP_EOL;

$T = new Tabung();
$T->r = 2;
$T->tinggi = 7;
echo 'Luas Tabung adalah: ' . $T->hitungLuas(). PHP_EOL;
echo 'Volume Tabung adalah: ' . $T->hitungVolume(). PHP_EOL;
echo PHP_EOL;

$K = new Kerucut();
$K->r = 2;
$K->t = 9;
$K->s = 12;
echo 'Luas Kerucut adalah: ' . $K->hitungLuas(). PHP_EOL;
echo 'Volume Kerucut Adalah: ' . $K->hitungVolume(). PHP_EOL;