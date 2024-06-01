<?php
abstract class SegiEmpat implements BangunDatar {

    protected float $panjang;
    protected float $lebar;
    
    abstract public function setPanjang(float $panjang): void;
    public function getPanjang(): float {
        return $this->panjang;
    }

    abstract public function setLebar(float $lebar): void;
    public function getLebar(): float {
        return $this->lebar;
    }

    abstract public function getLuas(): float;
}