<?php
    // Definisi kelas abstrak Shape
    abstract class Shape {
        // Metode abstrak area yang harus diimplementasikan oleh kelas turunan
        abstract public function area();
    }

    // Definisi kelas Rectangle yang mewarisi dari kelas Shape
    class Rectangle extends Shape {
        // Properti private untuk menyimpan lebar dan tinggi dari Rectangle
        private $width;
        private $height;

        // Konstruktor untuk menginisialisasi nilai properti width dan height
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        // Implementasi metode area untuk menghitung luas Rectangle
        public function area() {
            return $this->width * $this->height;
        }
    }

    // Definisi kelas Circle yang mewarisi dari kelas Shape
    class Circle extends Shape {
        // Properti private untuk menyimpan jari-jari dari Circle
        private $radius;

        // Konstruktor untuk menginisialisasi nilai properti radius
        public function __construct($radius) {
            $this->radius = $radius;
        }

        // Implementasi metode area untuk menghitung luas Circle
        public function area() {
            return pi() * pow($this->radius, 2);
        }
    }

    // Membuat objek Rectangle dengan lebar 5 dan tinggi 10
    $rectangle = new Rectangle(5, 10);
    // Menampilkan hasil perhitungan luas Rectangle
    echo "Area of Rectangle: " . $rectangle->area();
    echo "<br>";

    // Membuat objek Circle dengan jari-jari 7
    $circle = new Circle(7);
    // Menampilkan hasil perhitungan luas Circle
    echo "Area of Circle: " . $circle->area();
?>