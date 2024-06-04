<?php
class WiraSwasta extends Manusia {

    public function setSeseorang(string $n){
        parent::setNama($n);
    }

    public function getSeseorang(){
        return $this->nama;
    }

    public function setUsia(int $jk){
        parent::setJenisKelamin($jk);
    }
    public function getUsia(){
        return $this->jenisKelamin;
    }

    public function setTahun(string $u){
        parent::setUmur($u);
    }

    public function getTahun(){
        return $this->umur;
    }

}