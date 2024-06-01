<?php
    class SepedaMotor{
        public $merk='Vario';
        public $warna='Hitam';
        Public $kecepatan=0;

        function maju(){
          return "Merk Motor: $this->merk, Warna: $this->warna" ;
        }
        function melaju(){
         $this->kecepatan = $this->kecepatan + 20;
        }
    }

    $spd= new SepedaMotor();
    echo $spd->maju(), PHP_EOL;
    $spd->melaju();
        for($i = 0; $i < 7; $i ++){
            $spd->melaju();
        }
    echo $spd->kecepatan;