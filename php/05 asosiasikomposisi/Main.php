<?php

require_once __DIR__ . '/Dokter.php';
require_once __DIR__ . '/Pasien.php';
require_once __DIR__ . '/Pemain.php';
require_once __DIR__ . '/Tim.php';
require_once __DIR__ . '/Buku.php';

class Main {
    public static function main($args = []) {
        /**
         * ASOSIASI
         */
        // object dokter
        $dokter = new Dokter("Dr. Andi");
        // object pasien
        $pasien = new Pasien("Budi");

        // asosiasi. Pak Dokter merawat Pasien
        $dokter->merawat($pasien);

        /**
         * AGREGASI
         */
        // object Pemain Eko
        $pemain1 = new Pemain("Eko");
        // object Pemain Diana
        $pemain2 = new Pemain("Dina");

        // Membuat Tim
        $tim = new Tim("Garuda", [$pemain1, $pemain2]);
        $tim->tampilkanPemain();

        /**
         * KOMPOSISI
         */
        // object Buku
        $buku = new Buku("Belajar Java");
        $buku->tampilkanBab();
        // Jika buku dihancurkan, bab juga ikut hilang
        $buku = null;
    }
}

Main::main();
