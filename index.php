<?php

    class Mobil {
        private $merk, $tipe, $mesin, $max_speed;

        public function cetakTipe(){
            return $this->tipe;
        }

        public function kecepatanMaksimal(){
            return " kecepatan maksimal sebesar :".$this->max_speed;
        }

        function injekGas(){
            return "mengalirkan bensin keruang bakar, rpm naik, roda berputer";
        }

    }

    class BMW extends Mobil {
         
    }

    class Tesla extends Mobil {
        function selfParking(){
            echo "Parkir Sendiri";
        }

        function injekGas(){
            return parent::injekGas();
            return "mengalirkan listrik ke dinamo, rpm naik, roda berputer";
        }
    }


    $bmw = new BMW;
    $bmw ->merk = "BMW";
    $bmw ->tipe = "320i";
    $bmw ->mesin = "2000cc";
    $bmw ->max_speed = "280km/h";

    $tesla = new Tesla;
    $tesla->merk = "Tesla";
    $tesla->tipe = "Model";
    $tesla->mesin = "Listrik";
    $tesla->max_speed = "280km/h";

    echo "BMW :".$bmw->injekGas();
    echo "<br>";
    echo "<br>";
    echo "Tesla :".$tesla->injekGas();