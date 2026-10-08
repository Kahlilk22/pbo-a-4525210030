<?php

require_once __DIR__ . '/Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa {
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    // Constructor 1: tanpa parameter, memanggil constructor parent
    // Constructor 2: dengan parameter nama, nim, dan negara asal
    // Constructor 3: dengan parameter nama, nim, umur, dan negara asal
    public function __construct(string $nama = "Belum Diisi", string $nim = "Belum Diisi", $arg3 = null, ?string $arg4 = null) {
        if ($arg4 !== null) {
            // Constructor 3: dengan parameter nama, nim, umur, dan negara asal
            parent::__construct($nama, $nim, (int) $arg3);
            $this->negaraAsal = $arg4;
        } elseif (is_string($arg3)) {
            // Constructor 2: dengan parameter nama, nim, dan negara asal
            parent::__construct($nama, $nim);
            $this->negaraAsal = $arg3;
        } else {
            // Constructor 1: tanpa parameter, memanggil constructor parent
            parent::__construct();
            $this->negaraAsal = "Belum Diisi";
        }
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    // @Override
    public function tampilkanInfo(): void {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
