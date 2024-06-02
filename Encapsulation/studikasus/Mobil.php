<?php
class Mobil {
  private string $nama;
  private int $konsumsiPerLiterPertalite;
  private int $konsumsiPerLiterPertamax;
  private BahanBakar $bahanBakar;
  private Kota $kotaTujuan;

  // get $nama
  public function getNama(): string {
    return $this->nama;
  }
  // set $nama
  public function setNama(string $nama): void {
    $this->nama = $nama;
  }

  // setter $konsumsiPerLiterPertalite
  public function setKonsumsiPerLiterPertalite(int $konsumsiPerLiterPertalite) {
    $this->konsumsiPerLiterPertalite = $konsumsiPerLiterPertalite;
  }
  // getter $konsumsiPerLiterPertalite
  public function getKonsumsiPerLiterPertalite(): int {
    return $this->konsumsiPerLiterPertalite;
  }

  // setter $konsumsiPerLiterPertamax
  public function setKonsumsiPerLiterPertamax(int $konsumsiPerLiterPertamax) {
    $this->konsumsiPerLiterPertamax = $konsumsiPerLiterPertamax;
  }
  // getter $konsumsiPerLiterPertamax
  public function getKonsumsiPerLiterPertamax(): int {
    return $this->konsumsiPerLiterPertamax;
  }

  // setter $bahanBakar
  public function setBahanBakar(BahanBakar $bahanBakar) {
    $this->bahanBakar = $bahanBakar;
  }
  // getter $bahanBakar
  public function getBahanBakar(): BahanBakar {
    return $this->bahanBakar;
  }

  // setter $kotaTujuan
  public function setKotaTujuan(Kota $kotaTujuan) {
    $this->kotaTujuan = $kotaTujuan;
  }
  // getter $kotaTujuan
  public function getKotaTujuan(): Kota {
    return $this->kotaTujuan;
  }

  // hitung biaya perjalanan
  public function hitungBiayaPerjalanan(): int {
    $jarak = $this->kotaTujuan->getJarak();
    $hargaBahanBakar = $this->bahanBakar->getHarga();
    $namaBahanBakar = $this->bahanBakar->getNama();
    $konsumsiPerLiter = 0;
    if ($namaBahanBakar == 'Pertalite') {
      $konsumsiPerLiter = $this->konsumsiPerLiterPertalite;
    } else if ($namaBahanBakar == 'Pertamax') {
      $konsumsiPerLiter = $this->konsumsiPerLiterPertamax;
    }
    return ($jarak / $konsumsiPerLiter) * $hargaBahanBakar;
  }
}