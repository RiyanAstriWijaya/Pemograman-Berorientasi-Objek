<?php
class Tabung implements BangunRuang{
  public float $r;
  public float $tinggi;
  public  $PHI = 3.14;

  public function hitungVolume(){
    return $this->PHI * $this->r * $this->r * $this->tinggi;
  }

  public function hitungLuas() {
    return 2 * ($this->PHI * $this->r * ($this->tinggi + $this->r));
  }
}