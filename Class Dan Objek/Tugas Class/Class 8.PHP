<?php
    class JajarGenjang{
        public $alas = 8;
        public $sisi_miring = 5;

        function hitungKeliling(){
           return 2 * ($this->alas + $this->sisi_miring);
        }
    }
    $jg= new JajarGenjang();
    echo $jg->hitungkeliling();