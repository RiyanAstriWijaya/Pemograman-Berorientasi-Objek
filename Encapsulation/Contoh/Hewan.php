<?php
class Hewan{
    private string $nama;
    private string $gender;

    public function getNama(){
        return $this->nama;
    }
    public function setNama(string $nama){
        if($nama == Null ){
            $nama = 'Ayam' ;
        }
        $this->nama = $nama;
    }

    public function getGender(){
        return $this->gender;
    }
    public function setGender(string $gender){
        if($gender == Null){
            $this->gender = 'Betina';
        }
        $this->gender = $gender;
    }
}