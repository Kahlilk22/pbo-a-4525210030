<?php

class iPhone {
    // Properties
    /*
     * warna/color
     * storage/kapasistas penyimpanan
     */
    public $color;
    public $storage;

    // Methods
    /*
     * 1. Konstraktor() --> fungsinya sama dengan nama class
     *    kalau class iPhone --> iPhone(parameter parameter input)
     * 2. getColor()
     * 3. getStorage()
     */

    // Konstraktor
    /*
     * jadi setiap objek yang dibentuk dari class harus memberikan nilai/value
     * terhadap beberapa properties
     */
    public function __construct($color, $storage) {
        $this->color = $color;
        $this->storage = $storage;
    }

    // public -> bisa diakses dari umum
    // string --> output dari method getColor tipe datanya string
    // getColor() --> adalah nama method
    // return --> karena di definisi method ada outputnya, maka di dalam method harus
    // menggunakan return supaya punya keluaran/output.
    public function getColor() {
        return $this->color;
    }

    public function getStorage() {
        return $this->storage;
    }
}
