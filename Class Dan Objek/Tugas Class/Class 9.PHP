<?php
    class Dosen{
        public $nama ='Mohammad Nazir Arifin, M.kom.';
        public $Matkul ='Pemrograman Berorientasi Objek';

        function mengampu(){
            return "Nama: $this->nama, Mengampu Matkul: $this->Matkul";
        }
    }
    $D= new Dosen();
    echo $D->mengampu();