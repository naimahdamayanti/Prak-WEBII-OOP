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
  <p>Constructor adalah method atau function yang otomatis akan dijalankan saat class diinstansiasi (dibuat sebuah object).</p>
  
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
  <p>Object adalah output dari class yang dapat menampilkan atau mengelola isi class yang akan diinstansiasikan menjadi object.
    
  ```
  $mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan Bisnis");
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
  <p>

    ```
    Nama: Naimah Damayanti, NIM: 230302020, Jurusan: Komputer dan Bisnis
    ```
  </p>
  <li><b>Implementasi Constructor</b></li>
  <p>a. Class</p>
  <p>Class yang digunakan pada saat ini merupakan Class Mahasiswa yang berisi property nama, nim, dan jurusan.
    
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
  <p>Constructor dengan parameter nama, nim, dan jurusan dengan "Naimah" sebagai pengatur nilai awal pada objek tersebut. Nilai dari parameter ini digunakan untuk menginisialisasi properti nama, nim, dan jurusan menggunakan kata kunci $this untuk mereferensikan properti dari objek saat ini.
  
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
  <p>Nilai properti dari objek mahasiswa1 ditampilkan langsung menggunakan akses. Karena properti didefinisikan sebagai public, mereka dapat diakses langsung di luar class.
    
    ```
    // Menampilkan nilai properti objek Mahasiswa secara langsung
    echo $mahasiswa1->nama;
    echo " | ";
    echo $mahasiswa1->nim;
    echo " | ";
    echo $mahasiswa1->jurusan;
    ```
  </p>
  <p>Output Kode</p>
  <p>
    
    ```
    Naimah | 230302020 | Komputer dan Bisnis
    ```
  </p>
  
  <li><b>Metode Tambahan serta Atribut dan Metode</b></li>
  <p>a. Class</p>
  <p>Class Mahasiswa memiliki tiga properti yaitu $nama, $nim, dan $jurusan.
  
  ```
  // Definisi class Mahasiswa
  class Mahasiswa {
    // Properti private untuk menyimpan data mahasiswa
    private $nama;
    private $nim;
    private $jurusan;
  ```
  </p>
  <p>b. Property</p>
  <p>Aksesibilitas properti di sini menggunakan private, artinya properti ini hanya bisa diakses dari dalam class itu sendiri.
  
  ```
  // Properti private untuk menyimpan data mahasiswa
    private $nama;
    private $nim;
    private $jurusan;
  ```
  </p>
  <p>c. Analisiasi Constructor</p>
  <p>Konstruktor (__construct) digunakan untuk menginisialisasi nilai properti ketika objek dibuat. Nilai dari parameter $nama, $nim, dan $jurusan diberikan saat instansiasi objek dan kemudian disimpan dalam properti class.
  
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
  <p>d. Metode tampilkanData()</p>
  <p>Metode yang digunakan untuk menampilkan data mahasiswa.
  
  ```
  // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }
  ```
  </p>
  <p>e. Metode updateJurusan($JurusanBaru)</p>
  <p>Metode updateJurusan() digunakan untuk memperbarui nilai jurusan mahasiswa. Parameter $jurusanBaru yang diterima oleh metode ini kemudian disimpan dalam properti $jurusan.
  
  ```
  // Metode untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
  ```
  </p>
  <p>f. Metode setNIM($nim)</p>
  <p>Metode setNIM() digunakan untuk mengubah NIM mahasiswa. Nilai baru yang diterima melalui parameter $nim disimpan dalam properti $nim.
  
  ```
  // Metode untuk mengubah NIM mahasiswa
    public function setNIM($nim) {
        $this->nim = $nim;
    }
}
  ```
  </p>
  <p>g. Membuat Objek dan Menampilkan Data</p>
  <p>Objek $mahasiswa dibuat dari class Mahasiswa dengan nilai awal "Naimah Damayanti", "230302020", dan "Komputer dan Bisnis". Selanjutnya, metode tampilkanData() dipanggil untuk menampilkan data awal mahasiswa.
  
  ```
  // Membuat objek Mahasiswa dengan nilai yang diberikan
$mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan Bisnis");

// Menampilkan data mahasiswa menggunakan metode tampilkanData()
echo "Data Mahasiswa Awal:<br>";
echo $mahasiswa->tampilkanData(); // Menampilkan data awal mahasiswa
```
</p>
<p>h. Memperbarui Jurusan dan NIM Mahasiswa</p>
<p>Jurusan mahasiswa diperbarui menjadi "Teknik Informatika" menggunakan metode updateJurusan(). Sedangkan, NIM mahasiswa diperbarui menjadi "230302022" menggunakan metode setNIM().

```
// Memperbarui jurusan mahasiswa menggunakan metode updateJurusan
$mahasiswa->updateJurusan("Teknik Informatika");

// Memperbarui NIM mahasiswa menggunakan metode setNIM
$mahasiswa->setNIM("230302022");
```
</p>
<p>i. Tampilan Data Setelah Diperbarui</p>
<p>Data mahasiswa yang sudah diperbarui ditampilkan kembali menggunakan metode tampilkanData().

```
// Menampilkan data mahasiswa setelah diperbarui
echo "<br><br>Data Mahasiswa Setelah Diperbarui:<br>";
echo $mahasiswa->tampilkanData(); // Menampilkan data mahasiswa setelah diperbarui
```
</p>
<p>Output Kode</p>
<p>
  
  ```
  Data Mahasiswa Awal:
Nama: Naimah Damayanti
NIM: 230302020
Jurusan: Komputer dan Bisnis

Data Mahasiswa Setelah Diperbarui:
Nama: Naimah Damayanti
NIM: 230302022
Jurusan: Teknik Informatika
```
</p>

<li>Tugas</li>
<p>a. Class</p>
<p>Class Dosen yang memiliki tiga properti yang bersifat public yaitu $nama, $nip, dan $mataKuliah.

```
// Definisi class Dosen
    class Dosen {
        // Properti public untuk menyimpan data dosen
        public $nama;
        public $nip;
        public $mataKuliah;
```
</p>
<p>b. Property</p>
<p>Property yang digunakan di sini menggunakan aksesibilitas public yang dimana dapat diakses dari mana saja.

```
// Properti public untuk menyimpan data dosen
        public $nama;
        public $nip;
        public $mataKuliah;
```
</p>
<p>c. Constructor untuk Menginisialisasi Property</p>
<p>Konstruktor (__construct) digunakan untuk menginisialisasi nilai properti saat objek dibuat. Nilai properti diambil dari parameter yang diberikan saat instansiasi objek.

```
// Konstruktor untuk menginisialisasi properti saat objek dibuat
        public function __construct($nama, $nip, $mataKuliah) {
            // Inisialisasi properti dengan nilai yang diberikan melalui parameter
            $this->nama = $nama;
            $this->nip = $nip;
            $this->mataKuliah = $mataKuliah;
        }
```
</p>
<p>d. Metode tampilkanDosen()</p>
<p>Metode tampilkanDosen() digunakan untuk menampilkan data dosen dalam bentuk string yang diformat menggunakan HTML. Metode ini mengakses properti $nama, $nip, dan $mataKuliah dengan $this->.

```
// Metode untuk menampilkan data dosen
        public function tampilkanDosen() {
            // Mengembalikan string yang berisi informasi dosen
            return "Nama: $this->nama <br> NIP: $this->nip <br> Mata Kuliah: $this->mataKuliah";
        }
    }
```
</p>
<p>e. Intansiasi Objek dan Penggunaan Metode</p>
<p>Objek $dosen dibuat dari class Dosen dengan parameter: "Prih Diantono Abda'u", "230302020", dan "Praktikum WEB II". Sedangkan, metode tampilkanDosen() dipanggil untuk menampilkan data dosen tersebut.

```
// Membuat objek Dosen dengan nilai yang diberikan
    $dosen = new Dosen("Prih Diantono Abda`u", "230302020", "Praktikum WEB II");

    // Menampilkan data dosen menggunakan metode tampilkanDosen()
    echo $dosen->tampilkanDosen();
```
</p>
<p>f. Output Kode</p>
<p>

```
Nama: Prih Diantono Abda`u
NIP: 230302020
Mata Kuliah: Praktikum WEB II
```
</p>
</ol>

<h2>Jobsheet 2</h2>
<ol>
  <li>Class dan Object</li>
  <p>a. Class</p>
  <p>Class Mahasiswa didefinisikan dengan tiga properti public: $nama, $nim, dan $jurusan.
  
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
<p>Property yang digunakan di sini menggunakan aksesibilitas public yang dimana dapat diakses dari mana saja.

```
// Properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
```
</p>
<p>c. Constructor untuk Menginisialisasi Property</p>
<p>Konstruktor (__construct) digunakan untuk menginisialisasi nilai properti saat objek dibuat. Parameter yang diterima oleh konstruktor ($nama, $nim, dan $jurusan) digunakan untuk mengisi properti yang ada di dalam class. Keyword $this-> digunakan untuk mengakses properti dari dalam class, menunjukkan bahwa nilai dari parameter akan disimpan ke dalam properti objek tersebut.

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
<p>d. Metode tampilkanData()</p>
<p>Metode tampilkanData mengembalikan informasi mahasiswa dalam format string. Properti $nama, $nim, dan $jurusan diakses menggunakan $this-> untuk menampilkan nilai yang sudah diinisialisasi sebelumnya.

```
// Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}
```
</p>
<p>e. Instansiasi Objek dan Penggunaan Metode</p>
<p>Objek Mahasiswa dibuat dengan memanggil konstruktor dan memberikan nilai untuk setiap parameter ("Naimah Damayanti", "230302020", dan "Komputer dan Bisnis"). Sedangkan, metode tampilkanData() dipanggil untuk menampilkan informasi yang disimpan dalam objek tersebut.

```
// Membuat objek Mahasiswa dengan nilai yang diberikan
$mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan Bisnis");

// Menampilkan data mahasiswa menggunakan metode tampilkanData()
echo $mahasiswa->tampilkanData();
```
</p>
<p>f. Output Kode</p>
<p>
  
  ```
  Nama: Naimah Damayanti, NIM: 230302020, Jurusan: Komputer dan Bisnis
  ```
</p>

<li><b>Encapsulation</b></li>
<p>a. Class</p>
<p>Kelas Mahasiswa disini memiliki tiga properti privat: $nama, $nim, dan $jurusan.

```
// Definisi class Mahasiswa
class Mahasiswa {
    // Properti private untuk menyimpan data mahasiswa
    private $nama;
    private $nim;
    private $jurusan;
```
</p>
<p>b. Property</p>
<p>Properti yang digunakan bersifat private, yaitu hanya dapat diakses dari dalam kelas itu sendiri. Dengan menjadikan properti ini privat, kita menerapkan prinsip encapsulation untuk melindungi data agar tidak dapat diakses langsung dari luar kelas.

```
// Properti private untuk menyimpan data mahasiswa
    private $nama;
    private $nim;
    private $jurusan;
```
</p>
<p>c. Constructor untuk Menginisialisasi Property</p>
<p>Konstruktor adalah metode khusus yang secara otomatis dipanggil ketika sebuah objek dibuat. Parameter $nama, $nim, dan $jurusan digunakan untuk menginisialisasi nilai awal dari masing-masing properti.

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
<p>d. Metode Getter dan Setter</p>
<p>Getter dan setter digunakan untuk mengakses dan mengubah nilai properti privat dari luar kelas.
<ul>
  <li>Getter untuk Mengambil Nilai Property</li>
  <p>Metode getter (getNama, getNIM, dan getJurusan) berfungsi untuk mengambil nilai dari masing-masing properti. Ini memungkinkan properti privat diakses dari luar kelas dengan cara yang lebih terkontrol.

```
// Metode untuk mendapatkan nilai properti $nama
    public function getNama() {
        return $this->nama;
    }
// Metode untuk mendapatkan nilai properti $nim
    public function getNIM() {
        return $this->nim;
    }
// Metode untuk mendapatkan nilai properti $jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
```
</p>
<li>Setter untuk Mengubah Nilai Property</li>
<p>Metode setter (setNama, setNIM, dan setJurusan) digunakan untuk mengubah nilai dari properti privat. Dengan cara ini, kita bisa menerapkan logika validasi sebelum menetapkan nilai baru, jika diperlukan.

```
// Metode untuk mengatur nilai properti $nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
// Metode untuk mengatur nilai properti $nim
    public function setNIM($nim) {
        $this->nim = $nim;
    }
// Metode untuk mengatur nilai properti $jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
```
</p>
</ul></p>
<p>e. Instansiasi Objek dan Penggunaan Getter</p>
<p>Objek Mahasiswa diinstansiasi dengan memanggil konstruktor, yang kemudian menginisialisasi properti dengan nilai yang diberikan. Nilai yang dioper ("Naimah Damayanti", "230302020", dan "Komputer dan Bisnis") akan disimpan ke dalam masing-masing properti.

```
// Membuat objek Mahasiswa dengan nilai yang diberikan
$mahasiswa = new Mahasiswa("Naimah Damayanti", "230302020", "Komputer dan Bisnis");
```
</p>
<p>f. Menampilkan Data dengan Getter</p>
<p>Nilai properti diambil menggunakan metode getter. Metode ini memastikan bahwa nilai properti dapat diambil dari luar kelas meskipun sifatnya privat.

```
// Menampilkan data mahasiswa menggunakan metode getter
echo $mahasiswa->getNama();      // Output: Naimah Damayanti
echo $mahasiswa->getNIM();       // Output: 230302020 
echo $mahasiswa->getJurusan();   // Output: Komputer dan Bisnis
```
</p>
<p>g. Output Kode</p>
<p>
  
```
Naimah Damayanti
230302020 
Komputer dan Bisnis
```
</p>

<li><b>Inheritance</b></li>
<p>a. Definisi Class "Pengguna"</p>
<ul>
  <li>Class dan Property</li>
  <p>Kelas Pengguna didefinisikan. Di dalam kelas ini, ada properti protected $nama yang berarti properti ini bisa diakses dalam kelas itu sendiri dan juga kelas turunan.
  
  ```
// Definisi class Pengguna sebagai class induk
class Pengguna {
    // Properti protected untuk menyimpan nama
    protected $nama;

    // Konstruktor untuk menginisialisasi properti nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai properti nama
    public function getNama() {
        return $this->nama;
    }
}
```
</p>
<li>Inisialisasi Constructor</li>
<p>Konstruktor __construct($nama) berfungsi untuk menginisialisasi properti $nama ketika objek dibuat. Misalnya, ketika kita membuat objek new Pengguna("Naimah"), nilai "Naimah" akan disimpan ke dalam $nama.

```
// Konstruktor untuk menginisialisasi properti nama
    public function __construct($nama) {
        $this->nama = $nama;
    }
```
</p>
<li>Metode getNama</li>
<p>Metode getNama() didefinisikan untuk mengambil nilai dari properti $nama. Metode ini bersifat public, sehingga bisa diakses dari mana saja, termasuk dari luar kelas.

```
// Metode untuk mendapatkan nilai properti nama
    public function getNama() {
        return $this->nama;
    }
}
```
</p>
</ul>

<p>b. Definisi Class Dosen yang Mewarisi dari Class Pengguna</p>
<ul>
  <li>Class</li>
  <p>Kelas Dosen didefinisikan dan mewarisi (extends) kelas Pengguna. Ini artinya kelas Dosen akan memiliki semua properti dan metode dari kelas Pengguna.
  
  ```
// Definisi class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    // Properti private untuk menyimpan mata kuliah
    private $mataKuliah;

    // Konstruktor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil konstruktor dari class inti (Pengguna)
        parent::__construct($nama);
        // Inisialisasi properti mata kuliah
        $this->mataKuliah = $mataKuliah;
    }
}
```
</p>
<li>Property</li>
<p>Properti $mataKuliah didefinisikan dalam kelas Dosen dan bersifat private. Properti ini hanya bisa diakses dari dalam kelas Dosen saja.

```
// Properti private untuk menyimpan mata kuliah
    private $mataKuliah;
```
</p>
<li>Inisialisasi Constructor</li>
<p>Konstruktor kelas Dosen menerima dua parameter: $nama dan $mataKuliah. Kemudian, parent::__construct($nama) memanggil konstruktor dari kelas induk (Pengguna) untuk menginisialisasi properti $nama. Sedangkan, properti $mataKuliah diinisialisasi dengan nilai yang diterima dari parameter $mataKuliah.

```
public function __construct($nama, $mataKuliah) {
        // Memanggil konstruktor dari class inti (Pengguna)
        parent::__construct($nama);
        // Inisialisasi properti mata kuliah
        $this->mataKuliah = $mataKuliah;
    }
}
```
</p>
</ul>

<p>c. Membuat Objek dari Class Dosen</p>
<p>Sebuah objek dari kelas Dosen dibuat dengan nilai "Naimah Damayanti<br>" sebagai nama dan "230302020 <br>" sebagai mata kuliah. Nilai "Naimah Damayanti<br>" akan diatur ke properti $nama melalui konstruktor kelas induk, dan "230302020 <br>" akan diatur ke properti $mataKuliah di kelas Dosen.

```
// Membuat objek Dosen dengan parameter yang diberikan
$dosen = new Dosen("Naimah Damayanti<br>", "230302020 <br>");
```
</p>
<p>d. Menampilkan Nama Dosen Menggunakan Metode getNama()</p>
<p>Metode getNama() dipanggil dari objek $dosen karena kelas Dosen mewarisi kelas Pengguna, metode getNama() yang ada di kelas Pengguna dapat digunakan. Selanjutnya, metode getNama() mengembalikan nilai properti $nama, yaitu "Naimah Damayanti<br>", dan nilai ini kemudian ditampilkan.

```
// Menampilkan nama dosen menggunakan metode getNama() dari class Pengguna
echo $dosen->getNama();
```
</p>
<p>e. Output Kode</p>
<p>

```
Naimah Damayanti
```
</p>

<li><b>Polymorphism</b></li>
<p>a. Definisi Class Pengguna Sebagai Class Induk</p>
<ul>
  <li>Class</li>
  <p>Sebuah class bernama Pengguna didefinisikan. Ini akan berfungsi sebagai class induk yang mewakili pengguna secara umum.
  
  ```
// Definisi class Pengguna sebagai class induk
class Pengguna {
    // Metode aksesFitur() yang dapat di-kesampingkan oleh class turunan
    public function aksesFitur() {
        echo "Fitur Pengguna Umum. <br>";
    }
}
```
</p>
<li>Metode aksesFitur()</li>
<p>Di dalam class Pengguna, terdapat metode aksesFitur(). Metode ini menampilkan teks "Fitur Pengguna Umum. <br>" ketika dipanggil. Metode ini bisa di-override oleh class turunan.

```
// Metode aksesFitur() yang dapat di-kesampingkan oleh class turunan
    public function aksesFitur() {
        echo "Fitur Pengguna Umum. <br>";
    }
```
</p>
</ul>

<p>b. Definisi Class Dosen yang Mewarisi dari Class Pengguna</p>
<ul>
  <li>Class</li>
  <p>Class Dosen didefinisikan dan mewarisi (extends) class Pengguna. Ini berarti class Dosen akan memiliki semua properti dan metode dari class Pengguna.
  
  ```
// Class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    // Mengesampingkan metode aksesFitur() untuk memberikan fitur khusus bagi dosen
    public function aksesFitur() {
        echo "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>";
    }
}
```
</p>
<li>Metode aksesFitur()</li>
<p>Dalam class Dosen, metode aksesFitur() di-override (di-override adalah proses mendefinisikan kembali metode dari class induk dalam class turunan dengan tujuan memberikan fungsionalitas yang berbeda). Metode ini sekarang menampilkan teks "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>"

```
// Mengesampingkan metode aksesFitur() untuk memberikan fitur khusus bagi dosen
    public function aksesFitur() {
        echo "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>";
    }
```
</p>
</ul>

<p>c. Definisi Class Mahasiswa yang Mewarisi dari Class Pengguna</p>
<ul>
  <li>Class</li>
  <p> Class Mahasiswa juga didefinisikan dan mewarisi class Pengguna.
  
  ```
// Class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    // Mengesampingkan metode aksesFitur() untuk memberikan fitur khusus bagi mahasiswa
    public function aksesFitur() {
        echo "Fitur Mahasiswa: Cek nilai.<br>";
    }
}
```
</p>
<li>Metode aksesFitur()</li>
<p>Sama seperti pada class Dosen, metode aksesFitur() di-override dalam class Mahasiswa untuk memberikan fungsionalitas yang berbeda. Metode ini sekarang menampilkan teks "Fitur Mahasiswa: Cek nilai.<br>".

```
// Mengesampingkan metode aksesFitur() untuk memberikan fitur khusus bagi mahasiswa
    public function aksesFitur() {
        echo "Fitur Mahasiswa: Cek nilai.<br>";
    }
```
</p>
</ul>

<p>d. Membuat Objek dari Class Dosen dan Mahasiswa</p>
<p>Objek $dosen dibuat dari class Dosen. Ketika objek ini dibuat, ia mewarisi semua properti dan metode dari class Pengguna, namun dengan metode aksesFitur() yang telah di-override. Selanjutnya, objek $mahasiswa dibuat dari class Mahasiswa, yang juga mewarisi semua properti dan metode dari class Pengguna, tetapi dengan implementasi metode aksesFitur() yang berbeda.

```
// Membuat objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();
```
</p>
<p>e. Memanggil Metode aksesFitur() pada Masing-Masing Objek</p>
<p>Metode aksesFitur() dipanggil pada objek $dosen. Karena class Dosen telah meng-override metode ini, hasil yang ditampilkan adalah "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>" dan metode aksesFitur() dipanggil pada objek $mahasiswa. Karena class Mahasiswa juga meng-override metode ini, hasil yang ditampilkan adalah "Fitur Mahasiswa: Cek nilai.<br>".

```
// Memanggil metode aksesFitur() pada masing-masing objek
$dosen->aksesFitur();        // Output: Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>
$mahasiswa->aksesFitur();    // Output: Fitur Mahasiswa: Cek nilai.<br>
```
</p>
<p>f. Output Kode</p>
<p>

  ```
Fitur Dosen: Mengelola mata kuliah dan memberikan nilai.
Fitur Mahasiswa: Cek nilai.
```
</p>

<li><b>Abstraction</b></li>
<p>a. Definisi Class Abstrak Pengguna</p>
<ul>
  <li>Class</li>
  <p>Sebuah class abstrak bernama Pengguna didefinisikan. Class abstrak adalah class yang tidak bisa diinstansiasi secara langsung dan biasanya berfungsi sebagai blueprint untuk class turunan.
  
  ```
// Definisi class abstrak Pengguna
abstract class Pengguna {
    // Metode abstrak aksesFitur yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}
```
</p>
<li>Metode aksesFitur()</li>
<p>Class Pengguna memiliki sebuah metode abstrak aksesFitur(). Metode abstrak adalah metode yang dideklarasikan tanpa implementasi dalam class abstrak, dan harus diimplementasikan oleh class turunan.

```
// Metode abstrak aksesFitur yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}
```
</p>
</ul>

<p>b. Definisi Class Dosen yang Mewarisi Class Pengguna</p>
<ul>
  <li>Class</li>
  <p>Class Dosen didefinisikan dan mewarisi (extends) class Pengguna. Karena class Pengguna adalah class abstrak, class Dosen wajib mengimplementasikan metode aksesFitur() yang dideklarasikan dalam class Pengguna.
  
  ```
// Class Dosen yang mewarisi class Pengguna dan mengimplementasikan metode aksesFitur
class Dosen extends Pengguna {
    // Implementasi metode aksesFitur khusus untuk Dosen
    public function aksesFitur() {
        echo "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>";
    }
}
```
</p>
<li>Metode aksesFitur()</li>
<p>Di dalam class Dosen, metode aksesFitur() diimplementasikan untuk menampilkan teks "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>".

```
// Implementasi metode aksesFitur khusus untuk Dosen
    public function aksesFitur() {
        echo "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>";
    }
```
</p>
</ul>

<p>c. Definisi Class Mahasiswa yang Mewarisi Class Pengguna</p>
<ul>
  <li>Class</li>
  <p>Class Mahasiswa juga didefinisikan dan mewarisi class Pengguna.
  
  ```
// Class Mahasiswa yang mewarisi class Pengguna dan mengimplementasikan metode aksesFitur
class Mahasiswa extends Pengguna {
    // Implementasi metode aksesFitur khusus untuk Mahasiswa
    public function aksesFitur(){
        echo "Fitur Mahasiswa: Cek nilai.<br>";
    }
}
```
</p>
<li>Metode aksesFitur()</li>
<p>Sama seperti pada class Dosen, class Mahasiswa harus mengimplementasikan metode aksesFitur() yang dideklarasikan dalam class Pengguna. Implementasinya di sini menampilkan teks "Fitur Mahasiswa: Cek nilai.<br>".

```
// Implementasi metode aksesFitur khusus untuk Mahasiswa
    public function aksesFitur(){
        echo "Fitur Mahasiswa: Cek nilai.<br>";
    }
```
</p>
</ul>

<p>d. Membuat Objek dari Class Dosen dan Mahasiswa</p>
<p>Objek $dosen dibuat dari class Dosen. Ketika objek ini dibuat, ia memiliki implementasi metode aksesFitur() yang spesifik untuk dosen. Sedangkan, objek $mahasiswa dibuat dari class Mahasiswa, yang memiliki implementasi metode aksesFitur() yang spesifik untuk mahasiswa.

```
// Membuat objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();
```
</p>
<p>e. Memanggil Metode aksesFitur() pada Objek Dosen dan Mahasiswa</p>
<p>Metode aksesFitur() dipanggil pada objek $dosen. Karena class Dosen mengimplementasikan metode ini, hasil yang ditampilkan adalah "Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>". Selanjutya, metode aksesFitur() dipanggil pada objek $mahasiswa. Hasil yang ditampilkan adalah "Fitur Mahasiswa: Cek nilai.<br>".

```
// Memanggil metode aksesFitur() pada objek dosen dan mahasiswa
$dosen->aksesFitur();        // Output: Fitur Dosen: Mengelola mata kuliah dan memberikan nilai. <br>
$mahasiswa->aksesFitur();    // Output: Fitur Mahasiswa: Cek nilai.<br>
```
</p>

<p>f. Output Kode</p>
<p>

  ```
Fitur Dosen: Mengelola mata kuliah dan memberikan nilai.
Fitur Mahasiswa: Cek nilai.
```
</p>
</ol>

<h2>Jobsheet 3</h2>
