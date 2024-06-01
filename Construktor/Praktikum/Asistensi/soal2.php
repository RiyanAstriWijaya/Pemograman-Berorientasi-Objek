<?php

class Lingkaran
{
    private $jariJari;
    private $phi = 3.14;

    public function __construct($j){
        $this -> jariJari = $j;
    }

    public function hitungLuas(){
       return $this -> phi * $this -> jariJari * $this -> jariJari;
    }
}

class Segitiga
{
    private int $alas;
    private int $tinggi;

    public function __construct(int $a, int $t){
        $this -> alas = $a;
        $this -> tinggi = $t;
    }

    public function hitungLuas(){
        return 0.5 * $this -> alas * $this -> tinggi;
    }
}

class Trapesium{
    private int $tinggi;
    private int $panjangSisi1;
    private int $panjangSisi2;

    public function __construct(int $t, int $p1, int $p2){
        $this -> tinggi = $t;
        $this -> panjangSisi1 = $p1;
        $this -> panjangSisi2 = $p2;
    }

    public function hitungLuas(){
        return 0.5 * $this -> tinggi * ($this -> panjangSisi1 + $this -> panjangSisi2);
    }
}

$obj = new Lingkaran(3);
echo $obj -> hitungLuas(),PHP_EOL;

$obj = new Segitiga(10, 9);
echo $obj -> hitungLuas(),PHP_EOL;

$obj = new Trapesium(7, 6, 6);
echo $obj -> hitungLuas(),PHP_EOL;