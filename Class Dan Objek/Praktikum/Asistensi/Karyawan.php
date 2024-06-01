<?php
class Karyawan{
    public $nama;
    public $lama_kerja;
    public $jabatan;
    public $gaji;

    public function hitungGaji(){
        if($this->lama_kerja == 5){
            return $this->gaji + 100000 - (41/100) ;
        }else
            if($this->lama_kerja < 5){
             return $this->gaji - (41/100) ;
        }
    }
}