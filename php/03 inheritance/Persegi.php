<?php

require_once __DIR__ . '/BangunDatar.php';

class Persegi extends BangunDatar {
    private int $sisi;
    
    public function __construct(int $sisi) {
        $this->sisi = $sisi;
    }
    
    // @Override
    public function luas() {
        return (float) ($this->sisi * $this->sisi);
    }
    
    // @Override
    public function keliling() {
        return (float) ($this->sisi * 4);
    }
}
