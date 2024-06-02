<?php
spl_autoload_register(function($class){
    include $class .'.php' ;
});

$a = new Hewan();
$a->setNama('');
$a->setGender('Jantan');
echo $a->getNama(), PHP_EOL;
echo $a->getGender(), PHP_EOL;

$b = new Manusia();
$b->setNama('Siti Ririn Sutarsih');
$b->setUmur(19);
echo $b->getNama(),PHP_EOL;
echo $b->getUmur();