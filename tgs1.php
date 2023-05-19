<?php

interface kendaraan {
    public function hitungKecepatan();
}

abstract class kecepatan {
    abstract public function lajuan();
}

class mobil extends kecepatan implements kendaraan {
    private $jarak;
    private $waktu;

    public function __construct($jarak, $waktu) {
        $this->jarak = $jarak;
        $this->waktu = $waktu;
    }

    public function hitungKecepatan() {
        return $this->jarak / $this->waktu;
    }

    public function lajuan() {
         return "melaju lambat <br>";
    }
}

class motor extends kecepatan implements kendaraan {
    private $jarak;
    private $waktu;

    public function __construct($jarak, $waktu) {
        $this->jarak = $jarak;
        $this->waktu = $waktu;
    }

    public function hitungKecepatan() {
        return $this->jarak / $this->waktu;
    }

    public function lajuan() {
         return "melaju cepat";
    }
}

$mobilWuling = new mobil (114,2);
$motorMio = new motor (200,2);

echo "Mobil Wuling memiliki kecepatan " . $mobilWuling->hitungKecepatan() . " km/jam <br>";
echo "Mobil tersebut " .$mobilWuling->lajuan() . "\n \n";
echo "<br>";
echo "Motor Mio memiliki kecepatan " . $motorMio->hitungKecepatan() . " km/jam <br>";
echo "Motor tersebut " .$motorMio->lajuan();


