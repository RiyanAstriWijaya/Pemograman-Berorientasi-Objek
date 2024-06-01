<?php
    class Kuda{
        public $warna= 'Putih';
        public $energi= 0;

        function makan(){
            $this->energi = $this->energi + 20;
        }
        function berlari(){
            $this->energi =$this->energi -5;
        }
    }
    $kd = new Kuda();
    echo $kd->warna, PHP_EOL;
    $kd->makan();
    $kd->berlari();
    echo $kd->energi;