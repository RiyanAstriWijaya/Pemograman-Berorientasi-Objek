<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$a = new Hewan();
$a->nama ='Ayam';
$a->kaki = 2;
echo $a->getHewan(), PHP_EOL;

$b = new Hewan();
$b->nama ='burung';
$b->kaki = 2;
echo $b->getHewan(),PHP_EOL;

$c = new Hewan();
$c->nama ='sapi';
$c->kaki = 4;
echo $c->getHewan(),PHP_EOL;

$d = new Hewan();
$d->nama ='kuda';
$d->kaki = 4;
echo $d->getHewan(),PHP_EOL;

$e = new Hewan();
$e->nama ='badak';
$e->kaki = 4;
echo $e->getHewan(),PHP_EOL;

$f = new Hewan();
$f->nama ='kambing';
$f->kaki = 4;
echo $f->getHewan(),PHP_EOL;

$g = new Hewan();
$g->nama ='harimau';
$g->kaki = 4;
echo $g->getHewan(),PHP_EOL;

$h= new Hewan();
$h->nama ='unta';
$h->kaki = 4;
echo $h->getHewan(),PHP_EOL;

// Membuat objek baru dengan nama i
$i = new Hewan();

// Contoh input dari user
echo 'Masukkan Nama Hewan: ';
$i->nama = trim(fgets(STDIN));
echo 'Masukkan Banyak Kaki: ';
$i->kaki = trim(fgets(STDIN));
echo 'Jadi Hewan Tersebut : ',$i->getHewan(), PHP_EOL;

// Membuat objek baru dengan nama i
$j = new Hewan();

// Contoh input dari user
echo 'Masukkan Nama Hewan: ';
$j->nama = trim(fgets(STDIN));
echo 'Masukksn Banyak Kaki: ';
$j->kaki = trim(fgets(STDIN));
echo 'Jadi Hewan Tersebut : ',$j->getHewan(), PHP_EOL;

$arya = new Karyawan();
$arya->nama = 'Arya Saputra' ;
$arya->jabatan = 'Staff' ;
$arya->lama_kerja = 5;
$arya->gaji = 4000000;
echo "Total Gaji Arya Saputra sebesar : " .$arya->hitungGaji(), PHP_EOL;

$rendi = new Karyawan();
echo 'Masukkan Nama Karyawan : ';
$rendi->nama =trim(fgets(STDIN));
echo 'Masukkan Jabatan : ';
$rendi->jabatan =trim(fgets(STDIN));
echo 'Masukkan Lama Kerja : ';
$rendi->lama_kerja =trim(fgets(STDIN));
echo 'Masukkan Besar Gaji Pokok : ';
$rendi->gaji =trim(fgets(STDIN));
echo "Total Gaji Dari Rendi Pratama : " .$rendi->hitungGaji(), PHP_EOL;