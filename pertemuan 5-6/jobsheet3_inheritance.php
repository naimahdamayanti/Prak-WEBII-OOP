<?php
// Definisi kelas Person sebagai kelas induk
class Person {
    // Atribut name
    protected $name;

    // Konstruktor untuk menginisialisasi name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai name
    public function getName() {
        return "Person Name: " . $this->name;
    }
}

// Definisi kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut tambahan studentID
    protected $studentID;

    // Konstruktor untuk menginisialisasi name dan studentID
    public function __construct($name, $studentID) {
        // Memanggil konstruktor kelas induk
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Override metode getName untuk memberikan format berbeda
    public function getName() {
        return "Student Name: " . $this->name;
    }
}

// Membuat objek Student dengan nilai name dan studentID
$student = new Student("Naimah Damayanti", "230302020");

// Menampilkan hasil pemanggilan metode getName()
echo $student->getName();
?>