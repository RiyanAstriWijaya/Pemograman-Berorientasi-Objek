<?php
class Lingkaran extends BangunDatar{

    public function __construct(int $diameter = 7){
        parent::__construct($diameter);
    }

    //getter dan setter diameter
    public function getDiameter(){
        return $this->panjang;
    }
    public function setDiameter(float $p){
        parent::setPanjang($p);
    }

    //method Luas = PI * (r*r) -> r = jari2
    function getLuas(): float{
        return pi() * pow($this->panjang, 2);
    }
}