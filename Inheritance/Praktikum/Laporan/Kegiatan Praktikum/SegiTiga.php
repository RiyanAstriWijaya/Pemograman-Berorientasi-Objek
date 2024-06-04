<?php
class SegiTiga extends BangunDatar{

    public function __construct($alas = 8, $tinggi = 5)
    {
        parent::__construct($alas, $tinggi);
    }

    //getter dan setter Alas
    public function getAlas(){
        return $this->panjang;
    }
    public function setAlas(float $p){
        parent::setPanjang($p);
    }

    //getter dan setter Tinggi
    public function getTinggi(){
        return $this->lebar;
    }
    public function setTinggi(float $l){
        parent::setLebar($l);
    }

    function getLuas(){
       return parent::getLuas()/2;
    }
}