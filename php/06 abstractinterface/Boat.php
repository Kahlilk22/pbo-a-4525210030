<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Movable.php';
require_once __DIR__ . '/Fuelable.php';

// Subclass lain dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Boat extends Vehicle implements Movable, Fuelable {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move() {
        echo $this->name . " bergerak di air.\n";
    }

    // Override default method refuel dari Fuelable
    public function refuel() {
        echo $this->name . " mengisi bahan bakar solar khusus kapal.\n";
    }
}
