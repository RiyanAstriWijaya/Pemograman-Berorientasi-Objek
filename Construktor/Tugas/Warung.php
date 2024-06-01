<?php
class Warung{
    private int $porsi;
    private int $harga;

    public function __construct(int $porsi, int $harga){
        $this->porsi = $porsi;
        $this->harga = $harga;
    }
    public function Pendapatan(){
        $pajak = ($this->harga * 0.1) * $this->porsi;
        $pendapatan = ($this->porsi * $this->harga) - $pajak;
        return $pendapatan;
    }
}
$warung1 = new Warung(200 , 10000);
echo "Total Pendapatan Dari Warung 1 Sebesar : Rp. " .$warung1->pendapatan(), PHP_EOL;

$warung2 = new Warung(250 , 9000);
echo "Total Pendapatan Dari Warung 2 Sebesar : Rp.  " .$warung2->pendapatan(), PHP_EOL;

$warung3 = new Warung(300, 7500);
echo "Total Pendapatan Dari Warung 3 Sebesar : Rp. " .$warung3->pendapatan(), PHP_EOL;