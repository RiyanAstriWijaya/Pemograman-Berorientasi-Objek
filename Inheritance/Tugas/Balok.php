<?php
class Balok extends BangunDatar{
    private int $tinggi;
    public function setTinggi(int $tinggi){
        $this->tinggi = $tinggi < 1 ? 1 : $tinggi;
    }
    public function getTinggi(){
        return $this->tinggi;
    }
    
    public function getLuas(){
        return (2 * parent :: getLuas() ) + (2 * $this->panjang * $this->tinggi) + (2 * $this->lebar * $this->tinggi);
    }
}