<?php
class ASN extends Manusia{
   
    public function getSeseorang(){
        return $this->nama;
    }

    public function setSeseorang(string $n){
        parent::setNama($n);
    }

    public function getUsia(){
        return $this->jenisKelamin;
    }

    public function setUsia(int $jk){
        parent::setJenisKelamin($jk);
    }
    
    public function getTahun(){
        return $this->umur;
    }

    public function setTahun(string $u){
        parent::setUmur($u);
    }

}