<?php

class Bus extends Kendaraan{
    public function getJmlPenumpang(){
        return $this -> jml_penumpang;
    }
    public function setJmlPenumpang(int $j){
        parent::setJmlPenumpang($j);
    }

    public function getBiayaKendaraan(){
        return $this -> biaya_kendaraan;
    }
    public function setBiayaKendaraan(int $j){
        parent::setBiayaKendaraan($j);
    }

    public function getBiayaPerpenumpang(){
        return $this -> biaya_perpenumpang;
    }
    public function setBiayaPerpenumpang(int $j){
        parent::setBiayaPerpenumpang($j);
    }

    public function getTotal(){
        $pajak = parent::getTotal() * 5/100;
        return parent::getTotal() + $pajak;
    }
}