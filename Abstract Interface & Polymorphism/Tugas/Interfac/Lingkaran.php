<?php
class Lingkaran implements BangunDatar{
  public float $j;
  public $phi = 3.14;

  public function hitungLuas(){
    return $this->j * $this->j * $this->phi;
  }
}