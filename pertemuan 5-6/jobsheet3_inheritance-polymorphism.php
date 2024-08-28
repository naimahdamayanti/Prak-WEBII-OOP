<?php
// Definisi kelas Person sebagai kelas induk
class Person {
    // Atribut protected untuk menyimpan nama, dapat diakses oleh kelas turunan
    protected $name;

    // Konstruktor untuk menginisialisasi atribut name saat objek Person dibuat
    public function __construct($name) {
        // Menginisialisasi atribut name dengan nilai yang diberikan sebagai parameter
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai atribut name
    public function getName() {
        // Mengembalikan string yang menggabungkan teks dengan nilai name
        return "Person Name: " . $this->name;
    }
}

// Definisi kelas Student yang mewarisi dari kelas Person
class Student extends Person {
    // Atribut tambahan protected untuk menyimpan studentID, hanya dapat diakses oleh kelas ini dan turunan
    protected $studentID;

    // Konstruktor untuk menginisialisasi atribut name dan studentID saat objek Student dibuat
    public function __construct($name, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi name
        parent::__construct($name);
        // Menginisialisasi atribut studentID dengan nilai yang diberikan sebagai parameter
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai atribut studentID
    public function getStudentID() {
        // Mengembalikan nilai studentID
        return $this->studentID;
    }

    // Override metode getName dari kelas induk untuk memberikan format berbeda yang spesifik untuk Student
    public function getName() {
        // Mengembalikan string yang menggabungkan teks dengan nilai name, dengan format khusus untuk mahasiswa
        return "Nama Mahasiswa: " . $this->name;
    }
}

// Definisi kelas Teacher yang juga mewarisi dari kelas Person
class Teacher extends Person {
    // Atribut tambahan protected untuk menyimpan teacherID, hanya dapat diakses oleh kelas ini dan turunan
    protected $teacherID;

    // Konstruktor untuk menginisialisasi atribut name dan teacherID saat objek Teacher dibuat
    public function __construct($name, $teacherID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi name
        parent::__construct($name);
        // Menginisialisasi atribut teacherID dengan nilai yang diberikan sebagai parameter
        $this->teacherID = $teacherID;
    }

    // Override metode getName dari kelas induk untuk memberikan format berbeda yang spesifik untuk Teacher
    public function getName() {
        // Mengembalikan string yang menggabungkan teks dengan nilai name, dengan format khusus untuk dosen
        return "Nama Dosen: " . $this->name;
    }
}

// Membuat objek Student dan Teacher
$student = new Student("Naimah Damayanti", "230302020");
$teacher = new Teacher("Pak Abda`u", "67890");

// Menampilkan hasil pemanggilan metode getName() pada objek Student
echo $student->getName();   // Output: Nama Mahasiswa: Naimah Damayanti

// Baris baru untuk pemisah
echo "<br>";

// Menampilkan hasil pemanggilan metode getName() pada objek Teacher
echo $teacher->getName(); // Output: Nama Dosen: Pak Abda`u
?>