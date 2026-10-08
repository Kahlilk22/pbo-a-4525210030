<?php

require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Boat.php';
require_once __DIR__ . '/Motor.php';
require_once __DIR__ . '/Building.php';

class Main {
    public static function main($args = []) {
        // Membuat objek Car dan Boat
        $myCar = new Car("Mobil Sport");
        $myBoat = new Boat("Perahu Motor");
        $myMotor = new Motor("Motor Gravel");
        $myBuilding = new Building("Gedung Tinggi");

        // Menampilkan informasi dan menggerakkan kendaraan
        $myCar->showInfo();
        $myCar->move();
        $myCar->refuel();

        echo "\n";  // Pembatas antar output

        $myBoat->showInfo();
        $myBoat->move();
        $myBoat->refuel();

        echo "\n";  // Pembatas antar output

        $myMotor->showInfo();
        $myMotor->move();
        $myMotor->refuel();

        echo "\n";  // Pembatas antar output

        $myBuilding->showInfo();
        // $myBuilding->move();    // Tidak bisa dipanggil karena Building tidak mengimplementasikan Movable
        // $myBuilding->refuel();  // Tidak bisa dipanggil karena Building tidak mengimplementasikan Fuelable
    }
}

Main::main();
