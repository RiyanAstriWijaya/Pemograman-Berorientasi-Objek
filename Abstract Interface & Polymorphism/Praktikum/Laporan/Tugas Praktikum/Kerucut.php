<?php
class Kerucut implements BangunRuang{
  public float $r;
  public float $t;
  public float $s;
  public  $PHI = 3.14;

  public function hitungVolume(){
    return ($this->PHI * $this->r * $this->r * $this->t) / 3;
  }

  public function hitungLuas() {
    return $this->PHI * $this->r * ($this->s + $this->r);
  }
}