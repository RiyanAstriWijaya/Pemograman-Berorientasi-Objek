<?php
class Bus{
    private int $jmlh_penumpang;
    private int $kapasitas;

    public function setJumlah($jmlh_penumpang){
            $this->jmlh_penumpang = $jmlh_penumpang < 1 ? 1 : $jmlh_penumpang;
    }
    public function getJumlah(){
        return $this->jmlh_penumpang;
    }
    public function setkapasitas($kapasitas){
        $this->kapasitas = $kapasitas < 1 ? : $kapasitas;
    }
    public function getkapasitas(){
        return $this->kapasitas;
    }
    public function  validasi(){
       $validasi = $this->jmlh_penumpang;
        if($this->jmlh_penumpang < $this->kapasitas){
            $this->jmlh_penumpang++;
        }else{
            return "PENUH";
        }
        if($this->jmlh_penumpang <= 0 ){
            return "KOSONG"; 
        }else{
            $this->jmlh_penumpang--;
        }
        return $validasi;
    }
}