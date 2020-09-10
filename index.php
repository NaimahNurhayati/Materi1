<?php

    class Mobil {
        public $merk, $tipe, $mesin, $max_speed;

        function cetakTipe(){
            return $this->tipe;
        }

        function kecepatanMaksimal(){
            return " kecepatan maksimal sebesar :".$this->max_speed;
        }
    }


    $bmw = new Mobil;
    $bmw ->merk = "BMW";
    $bmw ->tipe = "320i";
    $bmw ->mesin = "2000cc";
    $bmw ->max_speed = "280km/h";

    echo "Tipe BMW mempunyai".$bmw->kecepatanmaksimal();