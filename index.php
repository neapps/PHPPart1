<?php
// ===========================================
// Membuat Form dengan method GET dan POST PHP
// ===========================================
// pertama kita akan membuat file lagi dengan judul
// index.php, karena di dalam index.php ini kita
// akan menampilkan hasil Formnya
// berikut adalah contoh nya

// membuat method dan menangkap method nama
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

// menampilkan data 
echo "Nama anda adalah " . $nama;
echo "<br/>";
echo "Alamat anda " . $alamat;

?>