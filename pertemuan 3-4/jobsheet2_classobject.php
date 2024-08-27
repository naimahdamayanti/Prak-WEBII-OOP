<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi properti saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi properti dengan nilai yang diberikan melalui parameter
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Membuat objek Mahasiswa dengan nilai yang diberikan
$mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan Bisnis");

// Menampilkan data mahasiswa menggunakan metode tampilkanData()
echo $mahasiswa->tampilkanData();
?>
