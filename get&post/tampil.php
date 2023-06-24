<?php 
// menangkap data nama dengan method post
$nama = $_POST['nama'];
// menangkap data usia dengan method post
$usia = $_POST['usia'];
 
// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia anda adalah " . $usia;
?>