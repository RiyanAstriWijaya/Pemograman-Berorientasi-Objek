<?php
class Karyawan{
    public $gaji_pokok;
    public $bpjs_koperasi = 200000;

    function kenaikanGajiS1(){
      return ($this->gaji_pokok + 400000) - $this->bpjs_koperasi;
    }
    function kenaikangajiS2(){
        return ($this->gaji_pokok + 500000) - $this->bpjs_koperasi;
    } 
}

$tsuari = new Karyawan();
$tsuari ->gaji_pokok = 900000;
echo 'gaji pak tsauri :',$tsuari->kenaikanGajiS1(), PHP_EOL;

$roni = new Karyawan();
$roni ->gaji_pokok = 900000;
echo 'gaji pak roni :',$roni->kenaikangajiS2(), PHP_EOL;

$muhammad = new Karyawan();
$muhammad ->gaji_pokok = 900000 - 500000 + 100000;
echo 'gaji pak muhammad : ',$muhammad->kenaikangajiS2();