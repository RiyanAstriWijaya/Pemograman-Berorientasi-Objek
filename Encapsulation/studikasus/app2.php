<?php
spl_autoload_register(function($class) {
  include 'classes/' . $class . '.php';
});

$alucard = new Hero();
$alucard->setHp(180);
$alucard->setArmor(6);
$alucard->setDamage(10);

$batman = new Hero;
$batman->setHp(200);
$batman->setArmor(5);
$batman->setDamage(12);

do {
  $batman->dipukul($alucard);
  $alucard->dipukul($batman);

  if ($alucard->getHp() <= 0) {
    echo "Batman menang!" . PHP_EOL;
    break;
  } else if ($batman->getHp() <= 0) {
    echo "Alucard menang!" . PHP_EOL;
    break;
  }
  
} while (true);