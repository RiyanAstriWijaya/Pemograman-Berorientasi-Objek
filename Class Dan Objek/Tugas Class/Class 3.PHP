<?php
    class Segitiga{
        public $alas =4;
        public $tinggi =6;

        function hitungLuas(){
            return 0.5 * $this->alas * $this->tinggi;
        }
    }
    $a= new Segitiga();
    echo $a->hitungLuas();
