<?php

class SepedaMotor extends Kendaraan{
    public function getJmlPenumpang(){
        return $this -> jml_penumpang;
    }
    public function setJumlahPenumpang(int $j){
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
        return parent::getTotal();
    }
}