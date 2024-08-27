<?php
    // Definisi class Dosen
    class Dosen {
        // Properti public untuk menyimpan data dosen
        public $nama;
        public $nip;
        public $mataKuliah;

        // Konstruktor untuk menginisialisasi properti saat objek dibuat
        public function __construct($nama, $nip, $mataKuliah) {
            // Inisialisasi properti dengan nilai yang diberikan melalui parameter
            $this->nama = $nama;
            $this->nip = $nip;
            $this->mataKuliah = $mataKuliah;
        }

        // Metode untuk menampilkan data dosen
        public function tampilkanDosen() {
            // Mengembalikan string yang berisi informasi dosen
            return "Nama: $this->nama <br> NIP: $this->nip <br> Mata Kuliah: $this->mataKuliah";
        }
    }

    // Membuat objek Dosen dengan nilai yang diberikan
    $dosen = new Dosen("Prih Diantono Abda`u", "230302020", "Praktikum WEB II");

    // Menampilkan data dosen menggunakan metode tampilkanDosen()
    echo $dosen->tampilkanDosen();
?>