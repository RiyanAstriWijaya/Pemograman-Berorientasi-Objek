<?php
spl_autoload_register(function($class){
    include $class .'.php' ;
});

$matic = new Matic();
$matic->setHarga(18000000);
$sport = new Sport();
$sport->setHarga(63800000);
echo "Harga Beat = Rp{$matic->totalBayar() }". PHP_EOL;
echo "Harga Ninja = Rp{$sport->totalBayar() }". PHP_EOL;

$ASN = new ASN();
$ASN->setNama('Siti');
$ASN->setUmur('19');
$ASN->setJenisKelamin('Perempuan');
echo "ASN Dengan Biodata Sebagai Berikut Nama : {$ASN->getSeseorang()} , Jenis Kelamin : {$ASN->getUsia()} , Usia : {$ASN->getTahun()} " . PHP_EOL;

$KS = new KaryawanSwasta();
$KS->setNama('ririn');
$KS->setUmur('19');
$KS->setJenisKelamin('Perempuan');
echo "Karyawan Swasta Dengan Biodata Sebagai Berikut Nama : {$KS->getSeseorang()} , Jenis Kelamin : {$KS->getUsia()} , Usia : {$KS->getTahun()} " . PHP_EOL;

$WS = new WiraSwasta();
$WS->setNama('ririn');
$WS->setUmur('19');
$WS->setJenisKelamin('Perempuan');
echo "WiraSwasta Dengan Biodata Sebagai Berikut Nama : {$WS->getSeseorang()} , Jenis Kelamin : {$WS->getUsia()} , Usia : {$WS->getTahun()} " . PHP_EOL;