<?php
class Tanah {
  private string $namaPemilik;
  private int $luas;
  private int $jarakKeArlan = 0;
  private bool $produktif = false;

  // get $namaPemilik
  public function getNamaPemilik(): string {
    return $this->namaPemilik;
  }
  // set $namaPemilik
  public function setNamaPemilik(string $namaPemilik): void {
    $this->namaPemilik = $namaPemilik;
  }

  // setter $luas
  public function setLuas(int $luas) {
    if ($luas < 0) {
      trigger_error("Luas tidak boleh negatif", E_USER_ERROR);
    }
    $this->luas = $luas;
  }
  // getter $luas
  public function getLuas(): int {
    return $this->luas;
  }

  // setter $jarakKeArlan
  public function setJarakKeArlan(int $jarakKeArlan) {
    if ($jarakKeArlan < 0) {
      trigger_error("Jarak ke Arlan tidak boleh negatif", E_USER_ERROR);
    }
    $this->jarakKeArlan = $jarakKeArlan;
  }
  // getter $jarakKeArlan
  public function getJarakKeArlan(): int {
    return $this->jarakKeArlan;
  }

  // setter $produktif
  public function setProduktif(bool $produktif) {
    $this->produktif = $produktif;
  }
  // getter $produktif
  public function getProduktif(): bool {
    return $this->produktif;
  }

  public function hitungHarga(): int {
    $harga = $this->luas * 1000000;

    if ($this->jarakKeArlan <= 5) {
      $bonus = (6 - $this->jarakKeArlan) * 500000;
      $harga += $bonus;
    }
    
    if ($this->produktif) {
      $harga += 500000;
    }
    return $harga;
  }
}