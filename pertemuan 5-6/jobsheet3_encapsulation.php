<?php
    // Definisi kelas Person sebagai kelas induk
    class Person {
        // Atribut protected untuk menyimpan nama
        protected $name;

        // Konstruktor untuk menginisialisasi nama saat objek Person dibuat
        public function __construct($name) {
            $this->name = $name;
        }

        // Metode untuk mendapatkan nilai atribut name
        public function getName() {
            // Mengembalikan string yang menggabungkan teks dengan nilai name
            return "Person Name: " . $this->name;
        }
    }

    // Definisi kelas Student yang mewarisi kelas Person
    class Student extends Person {
        // Atribut private untuk menyimpan studentID
        private $studentID;
    
        // Konstruktor untuk menginisialisasi name dan studentID saat objek Student dibuat
        public function __construct($name, $studentID) {
            // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi name
            parent::__construct($name);
            // Menginisialisasi atribut studentID
            $this->studentID = $studentID;
        }
    
        // Metode getter untuk name yang meng-override metode di kelas induk
        public function getName() {
            // Mengembalikan string yang menggabungkan teks dengan nilai name
            return "Nama Mahasiswa: " . $this->name;
        }
    
        // Metode getter untuk mendapatkan nilai atribut studentID
        public function getStudentID() {
            // Mengembalikan nilai studentID
            return $this->studentID;
        }
    
        // Metode setter untuk mengubah nilai atribut name
        public function setName($name) {
            // Mengatur nilai name dengan nilai baru yang diberikan sebagai parameter
            $this->name = $name;
        }
    
        // Metode setter untuk mengubah nilai atribut studentID
        public function setStudentID($studentID) {
            // Mengatur nilai studentID dengan nilai baru yang diberikan sebagai parameter
            $this->studentID = $studentID;
        }
    }
    
    // Demonstrasi Encapsulation dengan menggunakan objek Student
    $student = new Student("Naimah Damayanti", "230302020");
    
    // Menampilkan nama mahasiswa dengan memanggil metode getName()
    echo $student->getName(); // Output: Nama Mahasiswa: Naimah Damayanti
    
    // Baris baru untuk pemisah
    echo "<br>";
    
    // Menampilkan studentID dengan memanggil metode getStudentID()
    echo $student->getStudentID(); // Output: 230302020
    
    // Mengubah nilai atribut name dan studentID menggunakan metode setter
    $student->setName("Massayu");
    $student->setStudentID("54321");
    
    // Baris baru untuk pemisah
    echo "<br>";
    
    // Menampilkan nama mahasiswa yang telah diubah
    echo $student->getName(); // Output: Nama Mahasiswa: Massayu
    
    // Baris baru untuk pemisah
    echo "<br>";
    
    // Menampilkan studentID yang telah diubah
    echo $student->getStudentID(); // Output: 54321
?>