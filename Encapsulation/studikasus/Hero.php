<?php
class Hero {
  private int $hp;
  private int $armor;
  private int $damage;

  // setter $hp
  public function setHp(int $hp) {
    $this->hp = $hp;
  }
  // getter $hp
  public function getHp(): int {
    return $this->hp;
  }

  // setter $armor
  public function setArmor(int $armor) {
    $this->armor = $armor;
  }
  // getter $armor
  public function getArmor(): int {
    return $this->armor;
  }

  // setter $damage
  public function setDamage(int $damage) {
    $this->damage = $damage;
  }
  // getter $damage
  public function getDamage(): int {
    return $this->damage;
  }

  public function dipukul(Hero $hero) {
    $this->hp -= $hero->getDamage() - $this->armor;
  }
}