<?php

function hitung_luas_segitiga(){
    $panjang = 10;
    $lebar = 60;
    return 0.5 * $panjang * $lebar;
}

$segitiga = hitung_luas_segitiga();
echo $segitiga;