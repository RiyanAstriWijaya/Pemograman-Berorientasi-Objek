<?php
class Kelas{
    private int $kapasitas = 20;
    private int $jmlh_siswa = 0;

    public function getKapasitas(){
        return $this->kapasitas;
    }
    public function setKapasitas(int $kapasitas){
        $this->kapasitas = $kapasitas < 1 ? : $kapasitas;
    }
    public function getJumlah(){
        return $this->Jumlah;

    }
    public function setJumlah(int $jmlh_siswa){
        $this->Jumlah= $jmlh_siswa < 1 ? 1 : $jmlh_siswa;
    }
    public function tambahSiswa(){
        if ($this->Jumlah < $this->kapasitas) {
            $this->Jumlah++;
        } else {
            echo "Siswa Penuh . \n";
        }
    }

    public function kurangSiswa(){
        if ($this->Jumlah <= 0) {
            echo "Tidak ada Siswa . \n";
        } else {
            $this->Jumlah--;
        }
    }
}
$obj1=new Kelas ();
$obj1->setKapasitas(20);
$obj1->setJumlah (19);
echo "Kapasitas Kelas: " . $obj1->getKapasitas() . PHP_EOL;
$obj1->tambahSiswa();
$obj1->tambahSiswa();
echo "Jumlah Siswa : " . $obj1->getJumlah(),PHP_EOL;

$obj2=new Kelas ();
$obj2->setKapasitas(30);
$obj2->setJumlah (30);
echo "Kapasitas Kelas: " . $obj2->getKapasitas() . PHP_EOL;
$obj2->kurangSiswa();
echo "Jumlah Siswa : " . $obj2->getJumlah();