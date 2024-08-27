<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Properti private untuk menyimpan data mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    // Konstruktor untuk menginisialisasi properti saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi properti dengan nilai yang diberikan melalui parameter
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk mendapatkan nilai properti $nama
    public function getNama() {
        return $this->nama;
    }

    // Metode untuk mengatur nilai properti $nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai properti $nim
    public function getNIM() {
        return $this->nim;
    }

    // Metode untuk mengatur nilai properti $nim
    public function setNIM($nim) {
        $this->nim = $nim;
    }

    // Metode untuk mendapatkan nilai properti $jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode untuk mengatur nilai properti $jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat objek Mahasiswa dengan nilai yang diberikan
$mahasiswa = new Mahasiswa("Naimah Damayanti<br>", "230302020 <br>", "Komputer dan Bisnis");

// Menampilkan data mahasiswa menggunakan metode getter
echo $mahasiswa->getNama();      // Output: Naimah Damayanti
echo $mahasiswa->getNIM();       // Output: 230302020 
echo $mahasiswa->getJurusan();   // Output: Komputer dan Bisnis
?>
