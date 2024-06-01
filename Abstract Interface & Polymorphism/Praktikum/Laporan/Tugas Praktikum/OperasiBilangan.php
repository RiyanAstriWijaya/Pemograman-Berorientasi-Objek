<?php
abstract class OperasiBilangan {
    protected $bil1;
    protected $bil2;
    public function __construct($bil1, $bil2) {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }
    abstract public function hitung();
}

class Penjumlahan extends OperasiBilangan {
    public function hitung() {
         return $this->bil1 + $this->bil2;
        }
    }

class Pengurangan extends OperasiBilangan {
    public function hitung() {
        return $this->bil1 - $this->bil2;
        }
    }
    
class Pembagian extends OperasiBilangan {
    public function hitung() {
        return $this->bil1 / $this->bil2;
        }
    }

class Perkalian extends OperasiBilangan {
    public function hitung() {
        return $this->bil1 * $this->bil2;
    }
}

function hitung(OperasiBilangan $operasi) {
    return $operasi->hitung();
}
echo 'Hasil Penjumlahan: ' . hitung(new Penjumlahan(10,5)) . PHP_EOL;
echo 'Hasil Pengurangan: ' . hitung(new Pengurangan(10,5)) . PHP_EOL;
echo 'Hasil Pembagian: '. hitung(new Pembagian(10,5)) . PHP_EOL;
echo 'Hasil Perkalian: ' . hitung(new Perkalian(10,5)) . PHP_EOL;