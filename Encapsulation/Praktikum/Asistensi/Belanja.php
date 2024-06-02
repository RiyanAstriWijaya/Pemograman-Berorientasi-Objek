<?php
class Belanja{
    private int $piring_kramik,
                $sendok,
                $garpu,
                $mangkok,
                $rak_piring;
    private int $harga_piring =35000;
    private int $harga_sendok =27000;
    private int $harga_garpu =25000;
    private int $harga_mangkok =13000;
    private int $harga_rak =734500;

    public function setPiring(int $piring_kramik){
        $this->piring = $piring_kramik * ($this->harga_piring);
    }
    public function getPiring(){
      return  $this->piring;
    }
    public function setSendok(int $sendok){
        $this->sendok = $sendok * ($this->harga_sendok);
    }
    public function getSendok(){
      return  $this->sendok;
    }
    public function setGarpu(int $garpu){
      $this->garpu = $garpu * ($this->harga_garpu);
    }
    public function getGarpu(){
      return  $this->garpu;
    }
    public function setMangkok(int $mangkok){
      $this->mangkok = $mangkok * ($this->harga_mangkok);
    }
    public function getMangkok(){
      return  $this->mangkok;
    }
    public function setRakPiring(int $rak_piring){
      $this->rak_piring = $rak_piring * ($this->harga_rak);
    }
    public function getRakPiring(){
      return  $this->rak_piring;
    }
    public function getTotal(){
      return $this->piring + $this->sendok + $this->garpu +  $this->mangkok + $this->rak_piring;
    }
}
$sinta = new Belanja();
$sinta->setPiring(5);
echo "Total Harga Piring :" .$sinta->getPiring(),PHP_EOL;
$sinta->setSendok(10);
echo "Total Harga Sendok :" .$sinta->getSendok(),PHP_EOL;
$sinta->setGarpu(10);
echo "Total Harga Garpu :" .$sinta->getGarpu(),PHP_EOL;
$sinta->setMangkok(15);
echo "Total Harga Mangkok :" .$sinta->getMangkok(),PHP_EOL;
$sinta->setRakPiring(1);
echo "Total Harga Rak Piring :" .$sinta->getRakPiring(),PHP_EOL;
echo "Total Belanjaan Sinta : " .$sinta->getTotal();