<?php
    class Mahasiswa{
        public $nama;
        public $fakultas;
        public $prodi;

        function belajar() {
            return "$this->nama,$this->fakultas,$this->prodi";
        }
    }
    $mhs = new Mahasiswa();
    $mhs->nama = 'SITI RIRIN SUTARSIH';
    $mhs->fakultas = 'TEKNIK';
    $mhs->prodi = 'INFORMATIKA';
    echo $mhs->belajar();