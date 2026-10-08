<?php

require_once __DIR__ . '/Handphone.php';
require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/FeaturePhone.php';

class Main {
    public static function main($args = []) {
        // Membuat array atau list dari Handphone
        $daftarHandphone = [];

        // Mengisi array dengan objek Smartphone dan FeaturePhone
        $daftarHandphone[0] = new Smartphone("Samsung", "Galaxy S21");
        $daftarHandphone[1] = new FeaturePhone("Nokia", "3310");

        // Menggunakan loop untuk memanggil metode secara polimorfik
        foreach ($daftarHandphone as $hp) {
            $hp->nyalakan();
            $hp->telepon("08123456789");
            $hp->matikan();
            echo "\n";
        }

        // Mengakses metode khusus dengan casting
        foreach ($daftarHandphone as $hp) {
            if ($hp instanceof Smartphone) {
                $hp->aksesInternet();
            } else if ($hp instanceof FeaturePhone) {
                $hp->mainGameSnake();
            }
        }
    }
}

Main::main();
