<?php
class Tabung implements BangunRuang{
  public float $j;
  public float $t;
  public  $phi = 3.14;

  public function hitungVolume(){
    return $this->phi * $this->j * $this->j * $this->t;
  }

  public function hitungLuas() {
    return 2 * ($this->phi * $this->j * ($this->t + $this->j));
  }
}