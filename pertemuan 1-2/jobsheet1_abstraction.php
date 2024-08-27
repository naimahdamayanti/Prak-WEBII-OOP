<?php
// Definisi class abstrak Pengguna
abstract class Pengguna {
    // Metode abstrak aksesFitur yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

// Class Dosen yang mewarisi class Pengguna dan mengimplementasikan metode aksesFitur
class Dosen extends Pengguna {
    // Implementasi metode aksesFitur khusus untuk Dosen
    public function aksesFitur() {
        echo "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>";
    }
}

// Class Mahasiswa yang mewarisi class Pengguna dan mengimplementasikan metode aksesFitur
class Mahasiswa extends Pengguna {
    // Implementasi metode aksesFitur khusus untuk Mahasiswa
    public function aksesFitur(){
        echo "Fitur Mahasiswa: Cek nilai.<br>";
    }
}

// Membuat objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Memanggil metode aksesFitur() pada objek dosen dan mahasiswa
$dosen->aksesFitur();        // Output: Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>
$mahasiswa->aksesFitur();    // Output: Fitur Mahasiswa: Cek nilai.<br>
?>
