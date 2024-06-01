<?php

class Segitiga{
    private float $alas;
    private float $tinggi;

    public function __construct(float $a, float $t){
        $this -> alas = $a;
        $this -> tinggi = $t;
    }

    public function getLuas(){
        return 0.5 * $this -> alas * $this -> tinggi;
    }
}