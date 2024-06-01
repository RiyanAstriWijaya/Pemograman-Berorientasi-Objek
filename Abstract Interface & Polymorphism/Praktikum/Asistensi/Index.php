<?php

spl_autoload_register(function($class){
    include $class . '.php';
});

$pizzaStore = new PizzaStore();
$pizza = $pizzaStore->orderPizza('Pepperoni', 'thin crust');
$pizza->addTopping('mushroom')
    ->addTopping('olive')
    ->addSauce('tomato sauce')
    ->panggangPizza()
    ->addTopping('peeperoni')
    ->addSauce('barbecue sauce');

$pizzaStore->sajikanPizza($pizza);
$pizzaStore->hargaPizza($pizza); 