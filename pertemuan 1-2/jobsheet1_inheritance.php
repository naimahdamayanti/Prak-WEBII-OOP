<?php
// Definisi class Pengguna sebagai class induk
class Pengguna {
    // Properti protected untuk menyimpan nama
    protected $nama;

    // Konstruktor untuk menginisialisasi properti nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai properti nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    // Properti private untuk menyimpan mata kuliah
    private $mataKuliah;

    // Konstruktor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil konstruktor dari class inti (Pengguna)
        parent::__construct($nama);
        // Inisialisasi properti mata kuliah
        $this->mataKuliah = $mataKuliah;
    }
}

// Membuat objek Dosen dengan parameter yang diberikan
$dosen = new Dosen("Naimah Damayanti<br>", "230302020 <br>");

// Menampilkan nama dosen menggunakan metode getNama() dari class Pengguna
echo $dosen->getNama();
?>
