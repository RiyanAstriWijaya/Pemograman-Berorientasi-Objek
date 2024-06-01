<?php
    class Lingkaran{
        public $jari_jari= 4;
        public $phi= 3.14;

        function hitungkeliling(){
           return 2 * $this->phi * $this->jari_jari;
        }
    }
    $L = new Lingkaran();
    echo $L->hitungkeliling();