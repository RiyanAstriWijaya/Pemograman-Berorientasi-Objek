<?php
    class ProdukSusu{
        public $merk = 'ULTRAMILK';
        public $ukuran = '100ml';
        public $harga = '6000';

        function minum(){
           return "$this->merk, $this->ukuran, $this->harga";
        }
    }

    $S = new ProdukSusu();
    echo $S->minum();
