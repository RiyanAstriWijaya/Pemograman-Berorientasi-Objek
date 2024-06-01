<?php
    class Handphone{
        public $merk= 'OPPO';
        public $warna= 'HITAM';
        public $tipe= 'A3S';

        function menelfon(){
            return "$this->merk, $this->warna, $this->tipe" ; 
        }
    }

    $hp = new Handphone() ;
    echo $hp->menelfon() ;