<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$bd1 = new BangunDatar();

// Mengubah nilai di property
$bd1->panjang = 10;
$bd1->lebar = 5;
$luasBd1 = $bd1->getLuas();
echo $luasBd1, PHP_EOL;

// Membuat objek baru dengan nama bd2
$bd2 = new BangunDatar();

// Contoh input dari user
echo 'Masukkan panjang bangun datar: ';
$bd2->panjang = trim(fgets(STDIN));
echo 'Masukksn lebar bangun datar: ';
$bd2->lebar = trim(fgets(STDIN));
echo 'luas bangun Datar: ',$bd2->getLuas(), PHP_EOL;