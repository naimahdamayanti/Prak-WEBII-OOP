<h1>PRAKTIKUM PEMROGRAMAN WEB II</h1>
<h2>Object-Oriented Programming</h2> 
<p><i>Object-Oriented Programming</i> merupakan metode pemrograman yang berorientasi pada objek.
Adapun beberapa yang akan kita pelajari dalam menggunakan metode OOP, sebagai berikut:
<ol>
  <li>Konsep Dasar OOP</li>
  <li>Prinsip OOP</li>
  <li>Kelas dan Objek</li>
  <li>Metode dan Atribut</li>
</ol></p>
<h2>Jobsheet 1</h2>
<ol>
  <li><b>Class dan Object</b></li>
  <p>a. Class</p>
  <p>Class di dalam OOP digunakan untuk membuat sebuah kerangka kerja yang berisi property dan method. Jadi class adalah sebuah wadah yang menyimpan property, method, dan object.
    
  ```
    class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;
  ```

  </p>
  
  <p>b. Property</p>
  <p>Property adalah data-data yang terdapat di dalam class berupa sifat.
    
  ```
    // Properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
  ```
  </p>
  <p>c. Analisiasi Construct</p>
  <p>Constructor adalah method atau function yang otomatis akan dijalankan saat       class diinstansiasi (dibuat sebuah object).</p>
  
  ```
  // Konstruktor untuk menginisialisasi properti saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi properti dengan nilai yang diberikan melalui parameter
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
  ```
  </p>
  <p>d. Metode yang digunakan tampilkanData()</p>
  <p>Method adalah sebuah aksi yang terdapat di dalam class.
  
  ```
  // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
  ```
  </p>
  <p>e. Membuat Object</p>
  <p>Object adalah output dari class yang dapat menampilkan atau mengelola isi       class yang akan diinstansiasikan menjadi object.
    
  ```
  $mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan           Bisnis");
  ```
  </p>
  <p>f. Menampilkan Data Mahasiswa</p>
  <p> Hasil yang akan dimunculkan
    
    ```
    // Menampilkan data mahasiswa menggunakan metode tampilkanData()
    echo $mahasiswa->tampilkanData();
    ```
  </p>
  <p>g. Output</p>
  
  <li><b>Implementasi Constructor</b></li>
  <p>a. Class</p>
  <p>Class yang digunakan pada saat ini merupakan Class Mahasiswa yang berisi         property nama, nim, dan jurusan.
    
  ```
  // Definisi class Mahasiswa
    class Mahasiswa {
        // Properti public untuk menyimpan data mahasiswa
        public $nama;
        public $nim;
        public $jurusan;
  ```
  </p>
  <p>b. Property</p>
  <p>Property dengan visibility public yang dapat diakses secara umum.
  
  ```
  // Properti public untuk menyimpan data mahasiswa
        public $nama;
        public $nim;
        public $jurusan;
  ```
  </p>
  <p>c. Analisiasi Constructor</p>
  <p>Constructor dengan parameter nama, nim, dan jurusan dengan "Naimah" sebagai pengatur nilai awal pada objek tersebut. 
  
  ```
  // Konstruktor untuk menginisialisasi properti saat objek dibuat
        public function __construct($nama, $nim, $jurusan) {
            // Inisialisasi properti dengan nilai yang diberikan melalui parameter
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
  ```
  </p>
  <p>d. Object</p>
  <p>Membuat object dengan nilai yang sudah ditentukan
  
  ```
  // Membuat objek Mahasiswa dengan nilai yang diberikan
    $mahasiswa1 = new Mahasiswa("Naimah", "230302020", "Komputer dan Bisnis");
  ```
  </p>
  <p>e. Tampilkan Nilai Object</p>
  <p>
    
    ```
    // Menampilkan nilai properti objek Mahasiswa secara langsung
    echo $mahasiswa1->nama;
    echo " | ";
    echo $mahasiswa1->nim;
    echo " | ";
    echo $mahasiswa1->jurusan;
    ```
  </p>
  
  <li><b>Metode Tambahan serta Atribut dan Metode</b></li>
  <p>a. Class</p>
  <p></p>
</ol>
