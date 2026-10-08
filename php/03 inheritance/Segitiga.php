<?php

require_once __DIR__ . '/BangunDatar.php';

class Segitiga extends BangunDatar {
    private int $alas;
    private int $tinggi;

    public function __construct(int $alas, int $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    
    // @Override
    public function luas() {
        return (float) (($this->alas * $this->tinggi) / 2);
    }
}
