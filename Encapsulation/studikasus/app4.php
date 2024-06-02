<?php
spl_autoload_register(function($class) {
  include 'classes/' . $class . '.php';
});

$tanahPakImam = new Tanah;
$tanahPakImam->setNamaPemilik('Pak Imam');
$tanahPakImam->setLuas(3000);
$tanahPakImam->setJarakKeArlan(3);
$tanahPakImam->setProduktif(true);
echo "Harga tanah {$tanahPakImam->getNamaPemilik()} adalah: " . number_format($tanahPakImam->hitungHarga(), 0, '.', '.') . PHP_EOL;

$tanahBuMisnatun = new Tanah;
$tanahBuMisnatun->setNamaPemilik('Ibu Misnatun');
$tanahBuMisnatun->setLuas(7000);
$tanahBuMisnatun->setJarakKeArlan(20);
$tanahBuMisnatun->setProduktif(true);
echo "Harga tanah {$tanahBuMisnatun->getNamaPemilik()} adalah: " . number_format($tanahBuMisnatun->hitungHarga(), 0, '.', '.') . PHP_EOL;

$tanahPakAhmad = new Tanah;
$tanahPakAhmad->setNamaPemilik('Pak Ahmad');
$tanahPakAhmad->setLuas(6000);
$tanahPakAhmad->setJarakKeArlan(1);
$tanahPakAhmad->setProduktif(false);
echo "Harga tanah {$tanahPakAhmad->getNamaPemilik()} adalah: " . number_format($tanahPakAhmad->hitungHarga(), 0, '.', '.') . PHP_EOL;