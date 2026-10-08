<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Movable.php';
require_once __DIR__ . '/Fuelable.php';

// Subclass dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Car extends Vehicle implements Movable, Fuelable {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move() {
        echo $this->name . " bergerak di jalan.\n";
    }

    // Menggunakan default method refuel dari Fuelable tanpa override
    public function refuel() {
        echo $this->name . "Isi bahan bakar mobil\n";
    }
}
