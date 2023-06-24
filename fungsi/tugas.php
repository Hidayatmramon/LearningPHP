<?php
echo  "Ini adalah fungsi mencetak DATA DIRI :";
echo "<br>";
echo "<br>";


//Membuat Fungsi Ke-3
function perkenalan($nama="Ramon Hidayat", $rombel="PPLGX5", $rayon="Cisarua 1"){
    echo "Nama : $nama<br/>";
	echo "Rombel : $rombel<br/>";
	echo "Rayon : $rayon<br/>";
}

//Memanggil fungsi yang sudah dibuat tanpa mengisi parameter rayon
perkenalan();
?>