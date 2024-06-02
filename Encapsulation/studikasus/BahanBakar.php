<?php
class BahanBakar {
  private string $nama;
  private int $harga;

  // get $nama
  public function getNama(): string {
    return $this->nama;
  }
  // set $nama
  public function setNama(string $nama): void {
    // harus Pertalite atau Pertamax
    if ($nama != "Pertalite" && $nama != "Pertamax") {
      trigger_error("Nama bahan bakar harus Pertalite atau Pertamax", E_USER_ERROR);
    }
    $this->nama = $nama;
  }

  // setter $harga
  public function setHarga(int $harga) {
    if ($harga < 0) {
      trigger_error("Harga tidak boleh negatif", E_USER_ERROR);
    }
    $this->harga = $harga;
  }
  // getter $harga
  public function getHarga(): int {
    return $this->harga;
  }
}