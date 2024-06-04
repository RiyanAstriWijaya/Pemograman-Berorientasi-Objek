<?php
 class SepedaMotor {
    protected string $jenis;
    protected int $harga;
     
    public function setJenis(string $jenis){
        $this->jenis = $jenis;
    }

    public function getJenis(){
        return $this->jenis;
    }
    
    public function setHarga(int $harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function totalHarga() {
        return $this->harga;
    }
 }
 