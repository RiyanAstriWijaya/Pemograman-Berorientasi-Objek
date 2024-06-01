<?php
    class Pegawai{
        public $nama;
        public $jabatan;

        function bekerja(){
            return "$this->nama,  bekerja sebagai: $this->jabatan";
        }
    }
    $p= new Pegawai();
    $p->nama='Aisyah';
    $p->jabatan='Kasir';
    echo $p->bekerja();  