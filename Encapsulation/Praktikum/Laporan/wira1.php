<?php

class Bus {
    private int $penumpang = 0;
    private int $kapasitas = 20;
    
    public function getPenumpang (): int{
        return $this->penumpang;
    }
    public function getKapasitas (): int{
        return $this->kapasitas;
    }
    public function setkapasitas(int $kapasitas){
        $this->kapasitas = $kapasitas;
    }
    public function setPenumpang ($penumpang){
        if($penumpang < $this->kapasitas) {
            $this->penumpang = $penumpang < 1 ? 1 : $penumpang;
        }else {
            echo "Bus Penuh";
        }
    }
    public function penumpangNaik()
    {
        if ($this->penumpang < $this->kapasitas) {
            $this->penumpang++;
        } else {
            echo "Penumpang sudah penuh . \n";
        }
    }

    public function penumpangTurun()
    {
        if ($this->penumpang <= 0) {
            echo "Tidak ada penumpang . \n";
        } else {
            $this->penumpang--;
        }
    }
}

$bus1=new Bus ();
$bus1->setKapasitas(20);
$bus1->setPenumpang (14);
echo "Kapasitas Bus : " . $bus1->getKapasitas() . PHP_EOL;
$bus1->penumpangNaik();
$bus1->penumpangNaik();
$bus1->penumpangNaik();
$bus1->penumpangNaik();
$bus1->penumpangTurun();
$bus1->penumpangTurun();
echo "Penumpang Bus : " . $bus1->getPenumpang();