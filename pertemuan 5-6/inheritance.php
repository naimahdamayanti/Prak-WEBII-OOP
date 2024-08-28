<?php
    // Definisi kelas Animal sebagai kelas induk
    class Animal {
        // Properti protected untuk menyimpan nama hewan
        protected $name;

        // Konstruktor untuk menginisialisasi nama hewan saat objek dibuat
        public function __construct($name) {
            // Inisialisasi properti $name dengan nilai yang diberikan melalui parameter
            $this->name = $name;
        }

        // Metode untuk mendapatkan nilai properti $name
        public function getName() {
            // Mengembalikan nilai nama hewan
            return $this->name;
        }
    }

    // Definisi kelas Dog yang mewarisi kelas Animal
    class Dog extends Animal {
        // Metode untuk menghasilkan suara anjing
        public function makeSound() {
            // Mengembalikan string "Woof!" sebagai suara anjing
            return "Woof!";
        }
    }

    // Definisi kelas Cat yang mewarisi kelas Animal
    class Cat extends Animal {
        // Metode untuk menghasilkan suara kucing
        public function makeSound() {
            // Mengembalikan string "Meow!" sebagai suara kucing
            return "Meow!";
        }
    }

    // Membuat objek dari kelas Dog dengan nama "Buddy"
    $dog = new Dog("Buddy");

    // Menampilkan nama anjing dan suaranya menggunakan metode getName() dan makeSound()
    echo $dog->getName() . " says " . $dog->makeSound();
    // Output: Buddy says Woof!
?>