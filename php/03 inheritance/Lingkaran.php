<?php

require_once __DIR__ . '/BangunDatar.php';

class Lingkaran extends BangunDatar {
    // r atau jari-jari
    private int $r;

    public function __construct(int $r) {
        $this->r = $r;
    }
    
    // @Override
    public function luas() {
        return (float) (M_PI * $this->r * $this->r);
    }
    
    // @Override
    public function keliling() {
        return (float) (2 * M_PI * $this->r);
    }
}
