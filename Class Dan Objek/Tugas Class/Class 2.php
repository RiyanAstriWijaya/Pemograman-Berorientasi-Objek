<?php
class Pintu{
    public $model_pintu;
    public $warna_pintu;

    function membuka(){
        return "$this->model_pintu, $this->warna_pintu";
    }
}
$rmh = new Pintu();
$rmh->model_pintu="buka 2";
$rmh->warna_pintu="coklat";
echo $rmh->membuka();