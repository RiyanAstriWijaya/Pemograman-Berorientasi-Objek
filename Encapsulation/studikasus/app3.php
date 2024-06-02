<?php
spl_autoload_register(function($class) {
  include 'classes/' . $class . '.php';
});

$pakTsauri = new Karyawan();
$pakTsauri->setNama('Tsauri');
$pakTsauri->setMasaKerja(5);
echo "Gaji {$pakTsauri->getNama()} adalah: {$pakTsauri->hitungGaji()}" . PHP_EOL;

$pakRoni = new Karyawan();
$pakRoni->setNama('Roni');
$pakRoni->setLulusan('S2');
$pakRoni->setMasaKerja(11);
echo "Gaji {$pakRoni->getNama()} adalah: {$pakRoni->hitungGaji()}" . PHP_EOL;

$pakMohammad = new Karyawan();
$pakMohammad->setNama('Mohammad');
$pakMohammad->setLulusan('S2');
$pakMohammad->setMasaKerja(20);
$pakMohammad->setPinjamanBank(500000);
echo "Gaji {$pakMohammad->getNama()} adalah: {$pakMohammad->hitungGaji()}";