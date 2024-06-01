<?php
 class Lingkaran extends BangunDatar{

    public function setJari($j){
    $this->jari_jari=$j <1 ? 0 : $j;   
    }
    public function getJari(){
        return $this->jari_jari;
    }
    
    public function HitungLuas(){
        return $this->phi * $this->jari_jari * $this->jari_jari;
    }
 }

