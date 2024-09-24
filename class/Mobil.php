<?php
class Mobil {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function infoMobil() {
        return "Mobil ini bermerk " . $this->merk . " dan berwarna " . $this->warna;
    }
}

// Membuat objek dari kelas Mobil
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->infoMobil();
?>