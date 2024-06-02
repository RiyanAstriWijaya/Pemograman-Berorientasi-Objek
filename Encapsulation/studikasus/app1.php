<?php
spl_autoload_register(function($class) {
  include 'classes/' . $class . '.php';
});

$novel1 = new Novel();
$novel1->setJudul('Novel 1');
$novel1->setTahunBeli(2020);
$novel1->setPengarang('Gosho Aoyama');
$novel1->setHargaBeli(50000);

echo "Harga jual novel {$novel1->getJudul()} adalah Rp. {$novel1->hitungHargaJual()}" . PHP_EOL;

$novel2 = new Novel();
$novel2->setJudul('Novel 2');
$novel2->setTahunBeli(2017);
$novel2->setPengarang('Gaji Oraono');
$novel2->setHargaBeli(75000);

echo "Harga jual novel {$novel2->getJudul()} adalah Rp. {$novel2->hitungHargaJual()}" . PHP_EOL;

