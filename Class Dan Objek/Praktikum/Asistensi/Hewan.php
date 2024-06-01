<?php
class Hewan
{
    public $nama;
    public $kaki;

    function getHewan(){
        return "$this->nama,$this->kaki";
    }
}