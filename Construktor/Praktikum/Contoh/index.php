<?php
spl_autoload_register(function($class){
    include $class .'.php' ;
});

$a = new Manusia("Asih" , 20);
echo $a->getIdentitas(), PHP_EOL;

$b = new Hewan('Ayam ', 'Jantan');
echo "Nama: " . $b->getNama() ,PHP_EOL;
echo "Gender: " .$b->getGender();