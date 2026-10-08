<?php

require_once __DIR__ . '/Handphone.php';

class FeaturePhone extends Handphone {

    public function __construct(string $merk, string $model) {
        parent::__construct($merk, $model);
    }

    // @Override
    public function nyalakan(): void {
        echo "Feature Phone " . $this->merk . " " . $this->model . " dinyalakan.\n";
    }

    // @Override
    public function matikan(): void {
        echo "Feature Phone " . $this->merk . " " . $this->model . " dimatikan.\n";
    }

    // @Override
    public function telepon(string $nomor): void {
        echo "Melakukan panggilan suara ke nomor " . $nomor . "\n";
    }

    public function mainGameSnake(): void {
        echo "Memainkan game Snake.\n";
    }
}
