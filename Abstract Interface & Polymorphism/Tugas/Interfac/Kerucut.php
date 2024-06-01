<?php
class Kerucut implements BangunRuang{
  public float $j;
  public float $t;
  public float $s;
  public  $phi = 3.14;

  public function hitungVolume(){
    return ($this->phi * $this->j * $this->j * $this->t) / 3;
  }

  public function hitungLuas() {
    return $this->phi * $this->j * ($this->s + $this->j);
  }
}