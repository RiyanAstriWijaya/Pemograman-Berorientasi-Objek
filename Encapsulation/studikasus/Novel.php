<?php
class Novel {
  private string $judul;
  private string $pengarang;
  private int $hargaBeli;
  private int $tahunBeli;

  // setter $judul
  public function setJudul(string $judul) {
    if (strlen($judul) > 0) {
      $this->judul = $judul;
    } else {
      trigger_error("Judul tidak boleh kosong", E_USER_ERROR);
    }
  }
  // gettter $judul
  public function getJudul(): string {
    return $this->judul;
  }

  // setter $pengarang
  public function setPengarang(string $pengarang) {
    $this->pengarang = $pengarang;
  }
  // getter $pengarang
  public function getPengarang(): string {
    return $this->pengarang;
  }

  // setter $hargaBeli
  public function setHargaBeli(int $harga) {
    $this->hargaBeli = $harga;
  }
  // getter $hargaBeli
  public function getHargaBeli(): int {
    return $this->hargaBeli;
  }

  // setter $tahunBeli
  public function setTahunBeli(int $tahun) {
    $this->tahunBeli = $tahun;
  }
  // getter $tahunBeli
  public function getTahunBeli(): int {
    return $this->tahunBeli;
  }

  // method untuk menghitung harga jual
  public function hitungHargaJual(): int {
    $prosentase = ((2022 - $this->tahunBeli) * $this->getHargaBeli()) / 100;
    return $this->getHargaBeli() - $prosentase;
  }
}