<?php
//Buatlah fungsi untuk mencetak NIS, Nama, Rayon, Rombel untuk 3 orang siswa!
echo  "Ini adalah fungsi mencetak NIS, Nama, Rayon, Rombel untuk 3 orang siswa! :";
echo "<br>";
echo "<br>";


//Membuat Fungsi Ke-3
function perkenalan2($nama, $rombel, $rayon="Cisarua 1"){
  echo "Nama : $nama<br/>";
	echo "Rombel : $rombel<br/>";
	echo "Rayon : $rayon<br/>";
}

//Memanggil fungsi yang sudah dibuat tanpa mengisi parameter rayon
perkenalan2("Fajar Aditia Yusuf ", "KLN X");

echo "<hr>";

perkenalan2("Ramon HIdayat", "PPLG X");

echo "<hr>";

perkenalan2("zahwa", "DKV XI-2");

?>