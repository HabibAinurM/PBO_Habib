<?php
// Definisikan interface Mobil
interface Mobil {
    public function nyalakan();
    public function matikan();
    public function getModel();
}

// Kelas Sedan mengimplementasikan interface Mobil
class Sedan implements Mobil {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function nyalakan() {
        echo $this->model . " sedan sekarang menyala";
    }

    public function matikan() {
        echo $this->model . " sedan sekarang mati";
    }

    public function getModel() {
        return $this->model;
    }
}

// Kelas SUV mengimplementasikan interface Mobil
class SUV extends Mobil {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function nyalakan() {
        echo $this->model . " SUV cocok untuk disegala medan";
    }

    public function matikan() {
        echo $this->model . " SUV sangat bisa untuk off-road";
    }

    public function getModel() {
        return $this->model;
    }
}

// Kelas Truk mengimplementasikan interface Mobil
class Truk implements Mobil {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function nyalakan() {
        echo $this->model . " truk menaikkan pasir";
    }

    public function matikan() {
        echo $this->model . " truk menurunkan pasir";
    }

    public function getModel() {
        return $this->model;
    }
}

// Kelas MobilListrik mengimplementasikan interface Mobil
class MobilListrik implements Mobil {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function nyalakan() {
        echo $this->model . " mobil listrik sekarang best seller";
    }

    public function matikan() {
        echo $this->model . " mobil listrik sekarang hemat sumber daya";
    }

    public function getModel() {
        return $this->model;
    }
}

// Membuat instance dari setiap kelas
$sedan = new Sedan("Toyota Camry");
$suv = new SUV("Fortuner VRZ");
$truk = new Truk("Volvo FH16");
$mobilListrik = new MobilListrik("Tesla Model S");

// Masukkan semua instance ke dalam array kumpulanMobil
$kumpulanMobil = array($sedan, $suv, $truk, $mobilListrik);

// Loop melalui setiap mobil dan panggil metode nyalakan, matikan, dan getModel
foreach($kumpulanMobil as $mobil) {
    echo "Model: " . $mobil->getModel() . "<br>";
    $mobil->nyalakan();
    echo "<br>";
    $mobil->matikan(); 
    echo "<br><br>";
}
?>
