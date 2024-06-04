<?php
class Kendaraan {
    protected string $jenis;
    protected int $jml_penumpang;
    protected int $biaya_kendaraan;
    protected int $biaya_perpenumpang;

    public function getJenis(){
        return $this -> jenis;
    }
    public function setJenis(string $jenis){
        $this -> jenis = $jenis < 1 ? 0 : $jenis;
    }

    public function getJmlPenumpang(){
        return $this -> jml_penumpang;
    }
    public function setJmlPenumpang(int $jml_penumpang){
        $this -> jml_penumpang = $jml_penumpang < 1 ? 0 : $jml_penumpang;
    }

    public function getBiayaKendaraan(){
        return $this -> biaya_kendaraan;
    }
    public function setBiayaKendaraan(int $biaya_kendaraan){
        $this -> biaya_kendaraan = $biaya_kendaraan < 1 ? 0 : $biaya_kendaraan;
    }

    public function getBiayaPerpenumpang(){
        return $this -> biaya_perpenumpang;
    }
    public function setBiayaPerpenumpang(int $biaya_perpenumpang){
        $this -> biaya_perpenumpang = $biaya_perpenumpang < 1 ? 0 : $biaya_perpenumpang;
    }

    public function getTotal(){
        return ($this -> jml_penumpang * $this -> biaya_perpenumpang) + $this -> biaya_kendaraan;
    }  
}