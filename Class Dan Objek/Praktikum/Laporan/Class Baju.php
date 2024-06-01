<?php
class Baju{
    public $nama;
    public $harga;

    function getBaju(){
        return "Nama Baju: $this->nama, Harga: $this->harga";
    }
}
$b = new Baju();
$b ->nama = 'Friday Killer';
$b ->harga = 250000;
echo $b->getBaju();