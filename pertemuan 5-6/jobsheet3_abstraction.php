<?php
    // Definisi kelas abstrak Course
    abstract class Course {
        // Metode abstrak yang harus diimplementasikan oleh kelas turunan
        abstract public function getCourseDetails();
    }
    
    // Kelas OnlineCourse yang mengimplementasikan Course
    class OnlineCourse extends Course {
        // Implementasi dari metode getCourseDetails() untuk kelas OnlineCourse
        public function getCourseDetails() {
            // Mengembalikan deskripsi mengenai OnlineCourse
            return "Ini adalah online course yang dapat diakses kapanpun.";
        }
    }
    
    // Kelas OfflineCourse yang mengimplementasikan Course
    class OfflineCourse extends Course {
        // Implementasi dari metode getCourseDetails() untuk kelas OfflineCourse
        public function getCourseDetails() {
            // Mengembalikan deskripsi mengenai OfflineCourse
            return "Ini adalah offline course yang dihadiri secara langsung.";
        }
    }
    
    // Demonstrasi penggunaan Abstraction dengan membuat objek dari kelas turunan
    $onlineCourse = new OnlineCourse();  // Membuat objek dari kelas OnlineCourse
    $offlineCourse = new OfflineCourse(); // Membuat objek dari kelas OfflineCourse
    
    // Memanggil metode getCourseDetails() pada objek OnlineCourse dan menampilkannya
    echo $onlineCourse->getCourseDetails(); // Output: Ini adalah online course yang dapat diakses kapanpun.
    
    // Menambahkan baris baru untuk pemisah
    echo "<br>";
    
    // Memanggil metode getCourseDetails() pada objek OfflineCourse dan menampilkannya
    echo $offlineCourse->getCourseDetails(); // Output: Ini adalah offline course yang dihadiri secara langsung.
?>