<?php

class PizzaPepperoni extends Pizza {
    public function hitungHarga(Pizza $pizza): int {
        $harga = 5000;
        $harga += count($pizza->getTopping()) * 5000;
        $harga += count($pizza->getSaus()) * 5000;
        return $harga;
    }
}
