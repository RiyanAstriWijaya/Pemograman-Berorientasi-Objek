<?php
interface BangunDatar {

    public function setPanjang(float $panjang): void;
    public function setLebar(float $lebar): void;
    public function getLuas(): float;
}