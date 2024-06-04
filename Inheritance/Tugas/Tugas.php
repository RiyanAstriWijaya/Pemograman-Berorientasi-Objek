<?php
class Lingkaran{
    protected $r;
    protected $phi = 3.14;

    public function __construct($r){
        $this->Jari=$r;
    }

    public function Hitung_Luas(){
        return $this->phi * ($this->Jari * $this->Jari);
    }
}
class Tabung extends Lingkaran{
    private $tinggi = 80;
    public function Hitung_Vol(){
        return $this->Hitung_Luas() * $this->tinggi;
    }
}
class Bola extends Lingkaran{
    public function Hitung_Luas(){
        return (4 * parent :: Hitung_Luas());
    }
}
$obj = new Tabung(20);
echo $obj->Hitung_Vol(),PHP_EOL;

$obj1 = new Bola(5);
echo $obj1->Hitung_Luas();