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
  <p>Konstruktor (__construct) digunakan untuk menginisialisasi nilai properti      ketika objek dibuat. Nilai dari parameter $nama, $nim, dan $jurusan diberikan saat instansiasi objek dan kemudian disimpan dalam properti class.
  
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
</ol>
