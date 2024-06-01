<?php

class Trapesium{
    private float $tinggi;
    private float $a;
    private float $b;

    public function __construct(float $tinggi, float $a, float $b){
        $this -> tinggi = $tinggi;
        $this -> a = $a;
        $this -> b = $b;
    }

    public function getLuas(){
        return 0.5 * ($this -> a + $this -> b) * $this -> tinggi;
    }
}