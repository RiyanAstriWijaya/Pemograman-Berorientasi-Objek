<?php
class Karyawan{
    public $gaji_pokok;
    public $bpjs_koperasi; 
    public $masa_kerja;
    public $pinjaman;

    function kenaikanGajiS1(){
      return $this->gaji_pokok + 400000 - $this->bpjs_koperasi;
    }
    function kenaikangajiS2(){
    $kerja = 100000;
    if($this->masa_kerja % 10 == 0) {
      $masa = $kerja + (($this->gaji_pokok - $this->bpjs_koperasi - $this->pinjaman ) + 500000);
      return $masa;
    }else 
      if($this->masa_kerja % 10 > 0){
        return $this->gaji_pokok - $this->bpjs_koperasi - $this->pinjaman  + 500000;
      }    
    }      
} 
$tsuari = new Karyawan();
$tsuari ->gaji_pokok = 900000;
$tsuari ->bpjs_koperasi = 200000;
echo 'gaji pak tsauri :',$tsuari->kenaikanGajiS1(), PHP_EOL;

$roni = new Karyawan();
$roni ->gaji_pokok = 900000;
$roni ->bpjs_koperasi = 200000;
$roni ->masa_kerja= 11;
echo 'gaji pak roni :',$roni->kenaikangajiS2(), PHP_EOL;

$muhammad = new Karyawan();
$muhammad->gaji_pokok = 900000;
$muhammad->bpjs_koperasi = 200000;
$muhammad->pinjaman = 500000;
$muhammad->masa_kerja = 20;
echo 'gaji pak muhammad : ',$muhammad->kenaikangajiS2();