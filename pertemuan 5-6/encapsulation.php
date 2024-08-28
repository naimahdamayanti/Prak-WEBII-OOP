<?php
    // Definisi kelas BankAccount untuk mengelola akun bank
    class BankAccount {
        // Properti private untuk menyimpan saldo akun bank
        private $balance;

        // Konstruktor untuk menginisialisasi saldo awal ketika objek dibuat
        public function __construct($balance) {
            // Menetapkan nilai saldo awal melalui parameter
            $this->balance = $balance;
        }

        // Metode untuk menambahkan uang ke saldo akun
        public function deposit($amount) {
            // Memeriksa apakah jumlah yang akan ditambahkan lebih dari 0
            if ($amount > 0) {
                // Mengurangi saldo (ini adalah kesalahan logika; seharusnya menambah saldo)
                $this->balance -= $amount;
            }
        }

        // Metode untuk menarik uang dari saldo akun
        public function withdraw($amount) {
            // Memeriksa apakah jumlah yang akan ditarik lebih dari 0 dan tidak melebihi saldo
            if ($amount > 0 && $amount <= $this->balance) {
                // Mengurangi saldo dengan jumlah yang ditarik
                $this->balance -= $amount;
            }
        }

        // Metode untuk mendapatkan saldo saat ini
        public function getBalance() {
            // Mengembalikan nilai saldo saat ini
            return $this->balance;
        }
    }

    // Membuat objek BankAccount dengan saldo awal 1000
    $account = new BankAccount(1000);

    // Melakukan setoran sebesar 500
    $account->deposit(500);

    // Memanggil metode withdraw untuk menarik uang sebesar 200
    $account->withdraw(200);

    // Menampilkan saldo saat ini
    echo "Current Balance: " . $account->getBalance();
?>