<?php
class BangunDatar {
    public function hitungLuas() {
        return 0;
    }
}

class Persegi extends BangunDatar {
    public $sisi = 5;
    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    public $r = 7;
    public function hitungLuas() {
        return 3.14 * $this->r * $this->r;
    }
}

class Segitiga extends BangunDatar {
    public $alas = 10, $tinggi = 5;
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$persegi = new Persegi();
echo "Luas Persegi: " . $persegi->hitungLuas() . "<br>";
?>