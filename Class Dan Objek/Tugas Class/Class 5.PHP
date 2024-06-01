<?php
    class Mobil{
        public $merk= 'AVANZA';
        public $warna= 'PUTIH';

        function Maju() {
         return "Merk Mobil: $this->merk, Warna: $this->warna";
        }

    }

    $mbl = new Mobil();
    echo $mbl->Maju();