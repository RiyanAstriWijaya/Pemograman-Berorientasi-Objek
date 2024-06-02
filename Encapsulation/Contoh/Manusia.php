<?php
    class Manusia{
        private string $nama;
        private int $umur;

        public function getNama(){
            return $this->nama;
        }
        public function setNama(string $nama){
            if($nama == Null){
                $nama = 'nama';
            }
            $this->nama = $nama;
        }
        public function getUmur(){
            return $this->umur;
        }
        public function setUmur( int $umur ){
            if($umur == Null){
                $umur = 'umur';
            }
            $this->umur = $umur;
        }
    }