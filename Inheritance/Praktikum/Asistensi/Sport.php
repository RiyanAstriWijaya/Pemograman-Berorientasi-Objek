<?php
 class Sport extends SepedaMotor{
   public function setJenis(string $jenis = "Sport") {
      parent::setJenis($jenis);
   }

   public function setHarga(int $harga) {
      parent::setHarga($harga);
   }
      public function totalBayar() {
         $diskon = $this->harga * 0.41;
         $totalHarga = $this->harga - $diskon;
         return $totalHarga;
      }
 }