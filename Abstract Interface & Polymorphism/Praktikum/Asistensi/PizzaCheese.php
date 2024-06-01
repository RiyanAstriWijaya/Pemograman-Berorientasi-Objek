<?php

class PizzaCheese extends Pizza {
    public function hitungHarga(Pizza $pizza): int {
        $harga = 10000;
        $harga += count($pizza->getTopping()) * 10000;
        $harga += count($pizza->getSaus()) * 10000;
        return $harga;
    }
}