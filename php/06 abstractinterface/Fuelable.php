<?php

// Interface dengan default method untuk mengisi bahan bakar
// Di PHP, interface tidak dapat memiliki body method.
// Trait digunakan untuk menyediakan implementasi default method seperti pada interface Java.
interface Fuelable {
    public function refuel();
}

trait FuelableTrait {
    public function refuel() {
        echo "Mengisi bahan bakar umum.\n";
    }
}
