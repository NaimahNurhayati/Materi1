<?php

class Binatang{
    public  $jumlahKaki,
        $bisa_terbang = "Bisa Terbang",
        $bersuara;
}

class Kucing extends Binatang{
    public $bisa_terbang = "Tidak Bisa Terbang";

    function jumlahKaki(){
        return $this->jumlahKaki;
    }
    public function terbang(){
        return $this->bisa_terbang;
    }
    public function bersuara(){
        return "meong";
    }
}

class Anjing extends Binatang{
    public $bisa_terbang = "Tidak bisa terbang";

    function jumlahKaki(){
        return $this->jumlahKaki;
    }
    public function terbang(){
        return $this->bisa_terbang;
    }
    public function bersuara(){
        return "Guk Guk";
    }
}

class Elang extends Binatang{

    function jumlahKaki(){
        return $this->jumlahKaki;
    }
    public function terbang(){
        return $this->bisa_terbang;
    }
    public function bersuara(){
        return "Miiip";
    }
}

class Angsa extends Binatang{

    function jumlahKaki(){
        return $this->jumlahKaki;
    }
    public function terbang(){
        return $this->bisa_terbang;
    }
    public function bersuara(){
        return "Kwaaak";
    }
}

echo "Hewan";
echo "<br>";
echo "<hr>";


$momo = new kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah kucing <br>";
echo "Punya kaki sebanyak : " . $momo->jumlah_kaki . "<br>";
echo $momo->bisa_terbang . "<br>";
echo "Suaranya : " . $momo->bersuara() . "<br>";

echo "<hr><hr>";


$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo adalah Anjing <br>";
echo "Punya kaki sebanyak : " . $doggo->jumlah_kaki . "<br>";
echo $doggo->bisa_terbang . "<br>";
echo "Suaranya : " . $doggo->bersuara() . "<br>";

echo "<hr><hr>";


$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah Elang <br>";
echo "Punya kaki sebanyak : " . $zya->jumlah_kaki . "<br>";
echo $zya->bisa_terbang . "<br>";
echo "Suaranya : " . $zya->bersuara() . "<br>";

echo "<hr><hr>";


$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha adalah Angsa <br>";
echo "Punya kaki sebanyak : " . $masha->jumlah_kaki . "<br>";
echo $masha->bisa_terbang . "<br>";
echo "Suaranya : " . $masha->bersuara() . "<br>";

echo "<hr><hr>";