<?php
    class Pedagang{
        public $pensil = 1000;
        public $bolpoint = 2000;
        public $penghapus = 500;

        function jual1(){
            return ($this-> pensil * 10) + ($this-> bolpoint * 10) + ($this-> penghapus * 20) ;
        }
        function jual2(){
            return ($this-> pensil * 30) + ($this-> bolpoint * 5) + ($this-> penghapus * 2) ;
        }
    }
    $ahmad = new Pedagang();
    echo "Total Pendapatan Ahmad:" , $ahmad->jual1(),PHP_EOL;
    $budi = new Pedagang();
    echo "Total Pendapatan Budi:" , $budi->jual2();