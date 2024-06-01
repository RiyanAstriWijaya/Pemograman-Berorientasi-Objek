<?php
class BangunDatar{
    private float $panjang,$lebar;

    public function __construct(float $p = 10 , float $l = 10){
        $this -> panjang = $p;
        $this -> lebar = $l;
    }

    public function getPanjang() {
        return $this->panjang;
    }
    public function setPanjang(float $p) {
        $this -> panjang = $p < 1 ? 0 : $p;
    }
  
    public function getLebar() {
        return $this->lebar;
    }

    public function setLebar(float $l){
    $this->lebar = $l < 1 ? 0: $l;
    }

    //method getLuas
    public function getLuas() {
        return $this->panjang * $this->lebar;
    }
}