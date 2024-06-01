<?php

    class PersegiPanjang{
        public $panjang = 8;
        public $lebar = 5;

        function hitungLuas() {
           return $this->panjang * $this->lebar;
        }
    }

    $a = new PersegiPanjang() ;
    echo $a->hitungLuas();