<?php
    class Aktris{
        public $nama ='Amanda Manopo';
        public $judul_film ='Ikatan Cinta';

        function beracting(){
            return "Nama aktris: $this->nama, berperan dalam film: $this->judul_film" ;
        }
    }
    $a = new Aktris();
    echo $a->beracting();