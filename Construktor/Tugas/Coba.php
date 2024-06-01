<?php
Class Tempat{
    private $jmlhPenonton,
            $hrgTiket;

    public function __construct($jmlhPenonton,$hrgTiket){
        $this->jmlhPenonton=$jmlhPenonton;
        $this->hrgTiket=$hrgTiket;
    }
    public function Pendapatan(){
        $pajak = ($this->hrgTiket * 0.1) * $this->jmlhPenonton;
        $pendapatan = ($this->jmlhPenonton * $this->hrgTiket) - $pajak;
        return $pendapatan;
    }
}
$stadion1 = new Tempat(5000 , 5000);
echo "Total Pendapatan Stadion 1 : " .$stadion1->pendapatan(), PHP_EOL;

$stadion2 = new Tempat(7500 , 10000);
echo "Total Pendapatan Stadion 2 : " .$stadion2->pendapatan(), PHP_EOL;

$stadion3 = new Tempat(10000 , 50000);
echo "Total Pendapatan Stadion 3 : " .$stadion3->pendapatan(), PHP_EOL;