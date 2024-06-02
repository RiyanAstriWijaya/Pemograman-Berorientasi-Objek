<?php
class Bus {
    private int $jumlahPenumpang = 0;
    private int $kapasitas = 15;

    //set $jumlahPenumpang
    public function setjumlahPenumpang($jumlahPenumpang){
        if  ($jumlahPenumpang > $this->kapasitas){
            trigger_error("Jumlah Penumpang melebihi kapasitas Bus!");
        }
        else{
            $this->jumlahPenumpang = $jumlahPenumpang;
        }
    }

    //set $kapasitas
    public function setkapasitas($kapasitas){
        $this->kapasitas = $kapasitas;
    }

    //get $jumlahPenumpang
    public function getjumlahPenumpang(){
        return  $this->jumlahPenumpang;
    }

    //get $kapasitas
    public function getkapasitas(){
        return  $this->kapasitas;
    }

    public function validasi(){
        if ($this->jumlahPenumpang <= 0){
        return "Tidak Ada Penumpang!, Kapasitas bus : {$this->kapasitas}";
    }
        else{
            return "Jumlah penumpang : {$this->jumlahPenumpang} dan Kapasitas Bus : {$this->kapasitas}";
        }
    }
}

$bus1 = new Bus;
$bus1->setjumlahPenumpang(15);
echo "Bus 1 memiliki {$bus1->validasi()}" , PHP_EOL;

$bus2 = new Bus;
$bus2->setkapasitas(25);
$bus2->setjumlahPenumpang(24);
echo "Bus 2 memiliki {$bus2->validasi()}" ,PHP_EOL;

$bus3 = new Bus;
echo "Bus 3 memiliki {$bus3->validasi()} " ,PHP_EOL;