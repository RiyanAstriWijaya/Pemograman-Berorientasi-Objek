<?php


class PizzaStore {
    public function orderPizza($nama, $adonan): Pizza {
        $pizza = match($nama) {
            'Pepperoni' => new PizzaPepperoni($nama, $adonan),
            'Cheese' => new PizzaCheese($nama, $adonan),
            'Veggie' => new PizzaVeggie($nama, $adonan),
        };
        return $pizza;
    }
    
    
    public function sajikanPizza(Pizza $pizza) {
        echo "Harga pizza".  $pizza->getNama() . "dengan saus" . implode(', ', $pizza->getSaus()) 
        . " dan topping". implode(', ', $pizza->getTopping()). PHP_EOL;
    }
    
    public function hargaPizza(Pizza $pizza) {
        echo "Harga pizza {$pizza->getNama()} adalah {$pizza->hitungHarga($pizza)}";
    }
}