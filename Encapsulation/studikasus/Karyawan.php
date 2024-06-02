<?php
class Karyawan {
  private string $nama;
  private int $gajiPokok = 900000;
  private string $lulusan = 'S1';
  private int $masaKerja;
  private int $potongan = 200000;
  private int $pinjamanBank = 0;

  // setter $nama
  public function setNama(string $nama) {
    $this->nama = $nama;
  }
  // getter $nama
  public function getNama(): string {
    return $this->nama;
  }

  // getter $lulusan
  public function getLulusan(): string {
    return $this->lulusan;
  }
  // setter $lulusan
  public function setLulusan(string $lulusan) {
    if (! in_array($lulusan, ['S1', 'S2', 'S3'])) {
      trigger_error("Lulusan harus S1, S2, atau S3", E_USER_ERROR);
    }
  }

  // getter $masaKerja
  public function getMasaKerja(): int {
    return $this->masaKerja;
  }
  // setter $masaKerja
  public function setMasaKerja(int $masaKerja) {
    if ($masaKerja < 0) {
      trigger_error("Masa kerja tidak boleh negatif", E_USER_ERROR);
    }
    $this->masaKerja = $masaKerja;
  }

  // getter $pinjamanBank
  public function getPinjamanBank(): int {
    return $this->pinjamanBank;
  }
  // setter $pinjamanBank
  public function setPinjamanBank(int $pinjamanBank) {
    if ($pinjamanBank < 0) {
      trigger_error("Pinjaman bank tidak boleh negatif", E_USER_ERROR);
    }
    $this->pinjamanBank = $pinjamanBank;
  }

  public function hitungGaji(): int {
    $gaji = $this->gajiPokok;
    if ($this->lulusan == 'S1') {
      $gaji += 400000;
    } else if ($this->lulusan == 'S2') {
      $gaji += 500000;
    } else if ($this->lulusan == 'S3') {
      $gaji += 700000;
    }
    $gaji += floor($this->masaKerja / 10) * 100000;
    $gaji -= $this->potongan;
    if ($this->pinjamanBank > 0) {
      $gaji -= $this->pinjamanBank;
    }
    return $gaji;
  }
}