<?php
class Kota {
  private string $nama;
  private int $jarak;

  // get $nama
  public function getNama(): string {
    return $this->nama;
  }
  // set $nama
  public function setNama(string $nama): void {
    $this->nama = $nama;
  }

  // setter $jarak
  public function setJarak(int $jarak) {
    if ($jarak < 0) {
      trigger_error("Jarak tidak boleh negatif", E_USER_ERROR);
    }
    $this->jarak = $jarak;
  }
  // getter $jarak
  public function getJarak(): int {
    return $this->jarak;
  }
}