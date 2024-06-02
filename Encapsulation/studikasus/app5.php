<?php
spl_autoload_register(function($class) {
  include $class . '.php';
});

$pertalite = new BahanBakar;
$pertalite->setNama('Pertalite');
$pertalite->setHarga(10000);

$pertamax = new BahanBakar;
$pertamax->setNama('Pertamax');
$pertamax->setHarga(15000);

$malang = new Kota;
$malang->setNama('Malang');
$malang->setJarak(400);

$surabaya = new Kota;
$surabaya->setNama('Surabaya');
$surabaya->setJarak(300);

$innova = new Mobil;
$innova->setNama('Innova');
$innova->setKonsumsiPerLiterPertalite(4);
$innova->setKonsumsiPerLiterPertamax(3);

$ertiga = new Mobil;
$ertiga->setNama('Ertiga');
$ertiga->setKonsumsiPerLiterPertalite(6);
$ertiga->setKonsumsiPerLiterPertamax(5);

// innova ke malang PP dengan pertalite
// biaya dikali 2 karena PP
$innova->setBahanBakar($pertalite);
$innova->setKotaTujuan($malang);
echo "Biaya perjalanan " . $innova->getNama() . " ke " . $innova->getKotaTujuan()->getNama() . " dengan " . $innova->getBahanBakar()->getNama() . " adalah Rp " . number_format($innova->hitungBiayaPerjalanan() * 2, 0, '.', '.') . PHP_EOL;

// innova ke malang PP dengan pertamax
// biaya dikali 2 karena PP
$innova->setBahanBakar($pertamax);
echo "Biaya perjalanan " . $innova->getNama() . " ke " . $innova->getKotaTujuan()->getNama() . " dengan " . $innova->getBahanBakar()->getNama() . " adalah Rp " . number_format($innova->hitungBiayaPerjalanan() * 2, 0, '.', '.') . PHP_EOL;

// ertiga ke surabaya PP dengan pertalite
// biaya dikali 2 karena PP
$ertiga->setBahanBakar($pertalite);
$ertiga->setKotaTujuan($surabaya);
echo "Biaya perjalanan " . $ertiga->getNama() . " ke " . $ertiga->getKotaTujuan()->getNama() . " dengan " . $ertiga->getBahanBakar()->getNama() . " adalah Rp " . number_format($ertiga->hitungBiayaPerjalanan() * 2, 0, '.', '.') . PHP_EOL;

// ertiga ke surabaya PP dengan pertamax
// biaya dikali 2 karena PP
$ertiga->setBahanBakar($pertamax);
echo "Biaya perjalanan " . $ertiga->getNama() . " ke " . $ertiga->getKotaTujuan()->getNama() . " dengan " . $ertiga->getBahanBakar()->getNama() . " adalah Rp " . number_format($ertiga->hitungBiayaPerjalanan() * 2, 0, '.', '.') . PHP_EOL;