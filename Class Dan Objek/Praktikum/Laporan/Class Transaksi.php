<?php
    class Transaksi{
        public $baju;
        public $perabotan;

        function totalBelanja(){
            return $this->baju + $this->perabotan;
        }
    }
    $Rina = new Transaksi();
    $Rina->baju= 250000;
    $Rina->perabotan= 30000; //membeli perabotan piring
    echo "Total Belanjaan Rina Rp",$Rina->totalBelanja(), PHP_EOL;
    $Salama = new Transaksi();
    $Salama->baju= 2 * 100000; // membeli baju harga satuan 100000
    $Salama->perabotan = 300000; // membeli perabotan wajan
    echo "Total Belanjaan Salama Rp",$Salama->totalBelanja(), PHP_EOL;