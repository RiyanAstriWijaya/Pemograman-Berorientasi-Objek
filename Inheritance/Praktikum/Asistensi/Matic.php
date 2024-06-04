<?php
 class Matic extends SepedaMotor{
    public function setJenis(string $jenis = "Matic") {
        parent::setJenis($jenis);
    }

    public function setHarga(int $harga) {
        parent::setHarga($harga);
    }

    public function totalBayar() {
        $diskon = 50000;
        $totalHarga = $this->harga - $diskon;
        return $totalHarga;
    }
 }
 