<?php
class Trapesium extends BangunDatar{

    protected float $panjangAtas;

    public function __construct(float $panjang = 10, float $tinggi = 10, float $panjangAtas = 10){
        parent::__construct($panjang, $tinggi,$panjangAtas);
        $this->panjangAtas = $panjangAtas;
    }

    //getter dan setter panjangAtas
    public function getPanjangAtas(){
        return $this->panjangAtas;
    }
    public function setPanjangAtas(float $p){
        $this->panjangAtas = $p < 1 ? 0 : $p;      
    }

    //method Luas = 1/2 * tinggi (panjang + panjangAtas)
    function getLuas(){
        return 1/2 * $this->lebar * ($this->panjang + $this->panjangAtas);
    }
}