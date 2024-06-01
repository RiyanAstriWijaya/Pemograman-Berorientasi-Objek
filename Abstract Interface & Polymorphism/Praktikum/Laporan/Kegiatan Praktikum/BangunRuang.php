<?php
 interface BangunRuang {
   
    public function setPanjang(float $panjang): void;
    public function setLebar(float $lebar): void;
    public function setTinggi(float $tinggi): void;
    public function getVolume(): float;
 }