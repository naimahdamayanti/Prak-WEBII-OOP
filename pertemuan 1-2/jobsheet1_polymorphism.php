<?php
// Definisi class Pengguna sebagai class induk
class Pengguna {
    // Metode aksesFitur() yang dapat di-kesampingkan oleh class turunan
    public function aksesFitur() {
        echo "Fitur Pengguna Umum. <br>";
    }
}

// Class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    // Mengesampingkan metode aksesFitur() untuk memberikan fitur khusus bagi dosen
    public function aksesFitur() {
        echo "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>";
    }
}

// Class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    // Mengesampingkan metode aksesFitur() untuk memberikan fitur khusus bagi mahasiswa
    public function aksesFitur() {
        echo "Fitur Mahasiswa: Cek nilai.<br>";
    }
}

// Membuat objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Memanggil metode aksesFitur() pada masing-masing objek
$dosen->aksesFitur();        // Output: Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>
$mahasiswa->aksesFitur();    // Output: Fitur Mahasiswa: Cek nilai.<br>
?>
