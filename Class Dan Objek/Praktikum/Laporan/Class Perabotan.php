<?php
    class Perabotan{
        public $nama;
        public $harga;

        function getPerabotan(){
            return "Nama Perabotan: $this->nama, Harga: $this->harga";
        }
    }
    $a = new Perabotan();
    $a ->nama = 'Wajan';
    $a ->harga = 300000;
    echo $a->getPerabotan();