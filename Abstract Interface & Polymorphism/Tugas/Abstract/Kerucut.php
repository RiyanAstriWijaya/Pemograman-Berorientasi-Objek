<?php
class Kerucut extends BangunRuang{
   
    public function  setJariJari($j){
        $this->jarijari = $j < 1 ? 0 : $j;
    }
    public function getJariJari(){
        return $this->jarijari;
    }

    public function  setTinggi($t){
        $this->tinggi = $t < 1 ? 0 : $t;
    }
    public function getTinggi(){
        return $this->tinggi;
    }    
    public function HitungVolume(){
        return 1/3 * 3.14 * $this->jarijari * $this->jarijari * $this-> tinggi;
    }
}