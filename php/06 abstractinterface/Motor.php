<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Fuelable.php';
require_once __DIR__ . '/Movable.php';

class Motor extends Vehicle implements Fuelable, Movable {
    use FuelableTrait;

    public function __construct(string $name) {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move() {
        echo $this->name . " bergerak di tanah gravel.\n";
    }
}
