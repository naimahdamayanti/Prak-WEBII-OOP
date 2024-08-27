<?php
    // Definisi class Mahasiswa
    class Mahasiswa {
        // Properti public untuk menyimpan data mahasiswa
        public $nama;
        public $nim;
        public $jurusan;

        // Konstruktor untuk menginisialisasi properti saat objek dibuat
        public function __construct($nama, $nim, $jurusan = "Naimah") {
            // Inisialisasi properti dengan nilai yang diberikan melalui parameter
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
    }

    // Membuat objek Mahasiswa dengan nilai yang diberikan
    $mahasiswa1 = new Mahasiswa("Salsa", "230302020", "Komputer dan Bisnis");

    // Menampilkan nilai properti objek Mahasiswa secara langsung
    echo $mahasiswa1->nama;
    echo " | ";
    echo $mahasiswa1->nim;
    echo " | ";
    echo $mahasiswa1->jurusan;
?>