<?php
final class Balok implements BangunDatar,BangunRuang {

    private float $panjang;
    private float $lebar;
    private float $tinggi;

    public function __construct(float $panjang, float $lebar, float $tinggi){
        $this->setPanjang($panjang);
        $this->setLebar($lebar);
        $this->setTinggi($tinggi);
    }

    public function setPanjang(float $panjang): void {
        $this->panjang = $panjang < 0 ? 1 : $panjang;
    }

    public function setLebar(float $lebar): void {
        $this->lebar = $lebar < 0 ? 1 : $lebar;
    }

    public function setTinggi(float $tinggi): void {
        $this->tinggi = $tinggi < 0 ? 1 : $tinggi;
    }

    public function getLuas(): float {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

    public function getVolume(): float {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}