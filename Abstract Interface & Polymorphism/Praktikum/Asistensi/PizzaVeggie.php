<?php

class PizzaVeggie extends Pizza {
    public function hitungHarga(Pizza $pizza): int {
        $harga = 15000;
        $harga += count($pizza->getTopping()) * 15000;
        $harga += count($pizza->getSaus()) * 15000;
        return $harga;
    }
}