<?php
// ============================
// Include() dan Require() pada PHP
// ============================
// Include() dan Require() adalah suatu suatu fungsi pada program PHP
// untuk menyisipkan sebuah file PHP di dalam nya.

// Pada dasarnya fungsi include() dan require() memiliki kegunaan yang
// sama, hanya saja pada fungsi include(), jika file yang disertakan
// ternyata tidak ditemukan (karena lokasi yang salah atau memang file
// tidak ada) maka program atau perintah PHP selanjutnya (setelah include)
// akan tetap dijalankan walaupun ditampilkan error. Sedangkan require()
// jika file yang disertakan tidak ditemukan (karena lokasi yang salah atau
// memang file tidak ada) maka program atau perintah PHP selanjutnya (setelah
// include) tidak akan dijalankan.
// Contoh menggunakan Include()
// sebelum itu kita membuat file "tes.php"
include('tes.php'); 

echo "teks diatas di panggil dari tes.php menggunakan include";
echo "<br/>";

require('tes.php');
echo "teks diatas di panggil dari tes.php menggunakan require";

?>
