<?php

require_once __DIR__ . '/Mahasiswa.php';

// Kelas Main untuk menjalankan program
class Aplikasi {
    public static function main($args = []) {
        // // Menggunakan constructor tanpa parameter
        // Mahasiswa mhs1 = new Mahasiswa();
        // mhs1.tampilkanInfo();

        // System.out.println();

        // // Menggunakan constructor dengan 2 parameter
        // Mahasiswa mhs2 = new Mahasiswa("Budi", "12345678");
        // mhs2.setUmur(20); // Mengatur umur menggunakan setter
        // mhs2.tampilkanInfo();

        // System.out.println();

        // // Menggunakan constructor dengan 3 parameter
        // Mahasiswa mhs3 = new Mahasiswa("Siti", "87654321", 22);
        // mhs3.tampilkanInfo();

        $soja = new Mahasiswa();
        $soja->tampilkanInfo();

        // memberikan value Soja Purnamasari ke property nama dari objek soja
        $soja->setNama("Soja Purnamasari");
        echo "Nama : " . $soja->getNama() . "\n";

        $soja->setNim("4523210104");
        echo "NIM : " . $soja->getNim() . "\n";

        $soja->setUmur(15);
        echo "Umur : " . $soja->getUmur() . "\n";

        // Constructor lengkap
        $nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
        $nenden->tampilkanInfo();
    }
}

Aplikasi::main();
