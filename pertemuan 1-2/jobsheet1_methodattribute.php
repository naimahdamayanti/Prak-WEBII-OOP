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

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

    // Metode untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode untuk mengubah NIM mahasiswa
    public function setNIM($nim) {
        $this->nim = $nim;
    }
}

// Membuat objek Mahasiswa dengan nilai yang diberikan
$mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan Bisnis");

// Menampilkan data mahasiswa menggunakan metode tampilkanData()
echo "Data Mahasiswa Awal:<br>";
echo $mahasiswa->tampilkanData(); // Menampilkan data awal mahasiswa

// Memperbarui jurusan mahasiswa menggunakan metode updateJurusan
$mahasiswa->updateJurusan("Teknik Informatika");

// Memperbarui NIM mahasiswa menggunakan metode setNIM
$mahasiswa->setNIM("230302022");

// Menampilkan data mahasiswa setelah diperbarui
echo "<br><br>Data Mahasiswa Setelah Diperbarui:<br>";
echo $mahasiswa->tampilkanData(); // Menampilkan data mahasiswa setelah diperbarui
?>