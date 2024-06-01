<?php
    class Manusia{
        private string $nama;
        private int $umur;

        public function __construct(string $nama, int $umur){
            $this->nama= $nama;
            $this->umur= $umur;
        }

        public function getIdentitas(){
            return "Nama : {$this->nama} Umur : {$this->umur}";
        }

    }