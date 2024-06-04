<?php
spl_autoload_register(function($class){
    include $class . ".php";
});

$akas = new Bus();
$akas -> setJmlPenumpang(25);
$akas -> setBiayaKendaraan(8000);
$akas -> setBiayaPerpenumpang(5000);
echo "Total Yang Harus Dibayar Pengguna BUS = " . $akas -> getTotal() . " |Sesuai Pajak 5%" . PHP_EOL;

$mini = new MiniBus();
$mini -> setJmlPenumpang(12);
$mini -> setBiayaKendaraan(4000);
$mini -> setBiayaPerpenumpang(3000);
echo "Total Yang Harus Dibayar Pengguna MiniBus = " . $mini -> getTotal() . " |Sesuai Pajak 2%" . PHP_EOL;

$Avanza = new Mobil();
$Avanza -> setJmlPenumpang(4);
$Avanza -> setBiayaKendaraan(5000);
$Avanza -> setBiayaPerpenumpang(3000);
echo "Total yang Harus Dibayar Pengguna Mobil = " . $Avanza -> getTotal() . " |Tanpa Pajak" . PHP_EOL;

$vario = new SepedaMotor();
$vario -> setJmlPenumpang(3);
$vario -> setBiayaKendaraan(5000);
$vario -> setBiayaPerpenumpang(2000);
echo "Total Yang Harus Dibayar Pengguna SEPEDA MOTOR = " . $vario -> getTotal() . " |Tanpa Pajak" . PHP_EOL;