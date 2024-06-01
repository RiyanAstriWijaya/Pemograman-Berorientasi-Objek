<?php
class Lingkaran implements BangunDatar{
  public float $r;
  public float $PHI = 3.14;

  public function hitungLuas(){
    return $this->PHI * $this->r * $this->r;
  }
}