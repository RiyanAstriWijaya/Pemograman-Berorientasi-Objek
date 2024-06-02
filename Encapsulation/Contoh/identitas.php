<?php
class Identitas{
    private string $nama,
            $alamat;
    
    public function setNama(string $nama){
        if($nama == Null){
            $nama = 'Siti Ririn Sutarsih';
        }
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setalamat(string $alamat){
        if($alamat == Null){
            $alamat = 'Taraban';
        }
        $this->alamat = $alamat;
    }
    public function getalamat(){
        return $this->alamat;
}
}
$id = new Identitas();
$id->setnama('');
$id->setalamat('Taraban-Larangan-Pamekasan');
echo "NAMA : " .$id->getnama(),PHP_EOL;
echo "ALAMAT : " .$id->getalamat();