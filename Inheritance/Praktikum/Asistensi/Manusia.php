<?php
class Manusia{
    protected string $nama;
    protected int $umur;
    protected string $jenisKelamin;

    public function getNama(){
        return $this->nama;
    }

    public function setNama(string $nama){
        $this->nama = $nama;
    }

    public function setUmur(int $umur){
        $this->umur = $umur;
    }

    public function getUmur(){
        return $this->umur;
    }

    public function setJenisKelamin(string $jk){
        $this->jenisKelamin = $jk;
     }

    public function getJenisKelamin(){
        return $this->jenisKelamin;
    }
}