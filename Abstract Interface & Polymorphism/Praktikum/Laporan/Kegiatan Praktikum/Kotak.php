<?php 
final class Kotak extends SegiEmpat {

    public function __construct(float $panjang = 1, float $lebar =1) {
        $this->setPanjang($panjang);
        $this->setLebar($lebar);
    }

    public function setLebar(float $lebar): void {
        $this->lebar = $lebar < 0 ? 1 : $lebar;
    }

    public function setPanjang(float $panjang): void {
        $this->panjang = $panjang < 0 ? 1 : $panjang;
    }

    public function getLuas(): float {
        return $this->panjang * $this->lebar;
    }

    public function hitungLuas()
    {
        
    }
}