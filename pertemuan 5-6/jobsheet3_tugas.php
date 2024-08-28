<?php
    // Definisi class Person sebagai induk dari Dosen dan Mahasiswa
    class Person {
        // Atribut protected name, dapat diakses oleh kelas ini dan kelas turunannya
        protected $name;

        // Konstruktor untuk menginisialisasi atribut name saat objek dibuat
        public function __construct($name) {
            $this->name = $name;
        }

        // Metode untuk mendapatkan nilai name
        public function getName() {
            return $this->name;
        }

        // Metode untuk Polymorphism, akan di-override oleh class turunan
        public function getRole() {
            // Mengembalikan peran dasar "Person"
            return "Person";
        }
    }

    // Definisi class Dosen yang mewarisi dari Person
    class Dosen extends Person {
        // Atribut private untuk menyimpan NIDN, hanya dapat diakses oleh class ini
        private $nidn;

        // Konstruktor untuk menginisialisasi name dan nidn saat objek dibuat
        public function __construct($name, $nidn) {
            // Memanggil konstruktor dari kelas induk (Person)
            parent::__construct($name);
            // Menginisialisasi atribut nidn dengan nilai yang diberikan
            $this->nidn = $nidn;
        }

        // Override metode getRole untuk menampilkan peran spesifik Dosen
        public function getRole() {
            // Mengembalikan string "Dosen" sebagai peran
            return "Dosen";
        }

        // Metode getter untuk mendapatkan nilai nidn
        public function getNidn() {
            return $this->nidn;
        }

        // Metode setter untuk mengubah nilai nidn
        public function setNidn($nidn) {
            $this->nidn = $nidn;
        }
    }

    // Definisi class Mahasiswa yang mewarisi dari Person
    class Mahasiswa extends Person {
        // Atribut private untuk menyimpan NIM, hanya dapat diakses oleh class ini
        private $nim;

        // Konstruktor untuk menginisialisasi name dan nim saat objek dibuat
        public function __construct($name, $nim) {
            // Memanggil konstruktor dari kelas induk (Person)
            parent::__construct($name);
            // Menginisialisasi atribut nim dengan nilai yang diberikan
            $this->nim = $nim;
        }

        // Override metode getRole untuk menampilkan peran spesifik Mahasiswa
        public function getRole() {
            // Mengembalikan string "Mahasiswa" sebagai peran
            return "Mahasiswa";
        }

        // Metode getter untuk mendapatkan nilai nim
        public function getNim() {
            return $this->nim;
        }

        // Metode setter untuk mengubah nilai nim
        public function setNim($nim) {
            $this->nim = $nim;
        }
    }

    // Definisi class abstrak Jurnal
    abstract class Jurnal {
        // Atribut protected untuk menyimpan judul jurnal
        protected $judul;

        // Konstruktor untuk menginisialisasi judul jurnal saat objek dibuat
        public function __construct($judul) {
            $this->judul = $judul;
        }

        // Metode abstrak untuk pengelolaan pengajuan jurnal, harus diimplementasikan oleh class turunan
        abstract public function submit();
    }

    // Definisi class JurnalDosen yang mengimplementasikan Jurnal
    class JurnalDosen extends Jurnal {
        // Implementasi metode submit untuk JurnalDosen
        public function submit() {
            // Mengembalikan string yang menyatakan bahwa jurnal dosen telah diajukan
            return "Jurnal Dosen '$this->judul' telah diajukan.";
        }
    }

    // Definisi class JurnalMahasiswa yang mengimplementasikan Jurnal
    class JurnalMahasiswa extends Jurnal {
        // Implementasi metode submit untuk JurnalMahasiswa
        public function submit() {
            // Mengembalikan string yang menyatakan bahwa jurnal mahasiswa telah diajukan
            return "Jurnal Mahasiswa '$this->judul' telah diajukan.";
        }
    }

    // Membuat objek Dosen dengan nama "Pak Abda`u" dan NIDN "123456789"
    $dosen = new Dosen("Pak Abda`u", "123456789");

    // Membuat objek Mahasiswa dengan nama "Naimah Damayanti" dan NIM "230302020"
    $mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020");

    // Menampilkan nama dan peran objek Dosen
    echo $dosen->getName() . " adalah " . $dosen->getRole() . "<br>"; // Output: Pak Abda`u adalah Dosen

    // Menampilkan nama dan peran objek Mahasiswa
    echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . "<br>"; // Output: Naimah Damayanti adalah Mahasiswa

    // Contoh penggunaan class Jurnal
    // Membuat objek JurnalDosen dengan judul "Penelitian A"
    $jurnalDosen = new JurnalDosen("Penelitian A");

    // Membuat objek JurnalMahasiswa dengan judul "Skripsi B"
    $jurnalMahasiswa = new JurnalMahasiswa("Skripsi B");

    // Menampilkan hasil submit jurnal dosen
    echo $jurnalDosen->submit() . "<br>"; // Output: Jurnal Dosen 'Penelitian A' telah diajukan.

    // Menampilkan hasil submit jurnal mahasiswa
    echo $jurnalMahasiswa->submit() . "<br>"; // Output: Jurnal Mahasiswa 'Skripsi B' telah diajukan.
?>