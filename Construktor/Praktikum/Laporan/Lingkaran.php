<?php

class Lingkaran{
    private float $phi = 3.14;
    private float $r;

    public function __construct(float $r){
        $this -> r = $r;
    }

    public function getLuas(){
        return $this -> phi * $this -> r * $this -> r;
    }
}