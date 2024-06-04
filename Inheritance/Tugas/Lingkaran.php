<?php
class Lingkaran{
    protected $r;
    protected $phi = 3.14;

    public function setJariJari($r){
        $this->Jari_Jari= $r;
    }
    public function getJariJari(){
        return $this->Jari_Jari;
    }
    public Function HitungLuas(){
        return $this->phi * ($this->Jari_Jari * $this->Jari_Jari);
    }
}
class Tabung extends Lingkaran{
    private $tinggi = 80;

    public function HitungVolume(){
        return $this->HitungLuas() * $this->tinggi;
    }
}
$obj1 = new Lingkaran();
$obj1->setJariJari(10);
echo $obj1->HitungLuas(),PHP_EOL;

$obj2 = new Tabung();
$obj2->setJariJari(20);
echo $obj2->HitungVolume();