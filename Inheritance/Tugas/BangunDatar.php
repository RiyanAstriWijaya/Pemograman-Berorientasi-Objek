<?php
class  BangunDatar{
    protected int $panjang;
    protected int $lebar;

    public function setPanjang(int $panjang){
        //ternary operator
        $this->panjang = $panjang < 1 ? 1 : $panjang;
        // if($panjang < 1){
        //     $this->panjang =1;
        // }else{
        //     $this->panjang = $panjang;
        // }
    }
    public function getPanjang(){
        return $this->panjang;
    }
    public function setLebar(int $lebar){
        $this->lebar = $lebar < 1 ? 1 : $lebar;
    }
    public function getLebar(){
        return $this->Lebar;
    }
    public function getLuas(){
      return $this->panjang * $this->lebar;
    }
}