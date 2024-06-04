<?php
class BangunDatar{
    protected float $panjang, $lebar;

    public function __construct($panjang = 10, $lebar = 10)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    //getter dan setter panjang
    public function getPanjang(){
        return $this->panjang;
    }
    public function setPanjang(float $p){
        $this->panjang = $p < 1 ? 0 : $p;
    }

    //getter dan setter lebar
    public function getLebar(){
        return $this->Lebar;
    }
    public function setLebar(float $l){
        $this->lebar = $l < 1 ? 0 : $l;
    }

    //method Luas
    function getLuas(){
        return $this->panjang * $this->lebar;
    }
}