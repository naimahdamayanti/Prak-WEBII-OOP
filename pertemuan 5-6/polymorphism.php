<?php
    // Definisi kelas Printer untuk mencetak informasi dari objek Animal
    class Printer {
        // Metode print menerima objek yang merupakan turunan dari kelas Animal
        public function print(Animal $animal) {
            // Menampilkan nama hewan dan suara yang dihasilkannya
            echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
        }
    }

    // Membuat objek Dog dengan nama "Buddy"
    $dog = new Dog("Buddy");

    // Membuat objek Cat dengan nama "Kitty"
    $cat = new Cat("Kitty");

    // Membuat objek Printer untuk mencetak informasi dari hewan
    $printer = new Printer();

    // Mencetak informasi dari objek Dog menggunakan metode print
    $printer->print($dog); // Output: Buddy says Woof!

    // Mencetak informasi dari objek Cat menggunakan metode print
    $printer->print($cat); // Output: Kitty says Meow!
?>