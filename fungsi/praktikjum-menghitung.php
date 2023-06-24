<?php
//Buatlah fungsi untuk menghitung luas bangun ruang (segi tiga, lingkaran, persegi, dll)!

echo  "Ini adalah fungsi menhitung luas segitiga:";
echo "<br>";
echo "<br>";

function luas_segitiga($alas,$tinggi)

{
	$luas = ($alas)/2 * $tinggi;
	return $luas;
}
echo "Luas Segitiga dengan alas 6 dan tinggi 15 = ".luas_segitiga(6,15);
echo "<br>";
echo "Luas Segitiga dengan alas 4 dan tinggi 8 = ".luas_segitiga(4,8);

echo "<hr>";
echo "<br>";

//menghitung luas lingkaran
echo  "Ini adalah fungsi menhitung luas lingkaran:";
echo "<br>";
echo "<br>";
function luasLingkaran($jari_jari) {
    return pi() * ($jari_jari ** 2);
}

$jari_jari = 10;
echo "Luas lingkaran dengan jari-jari $jari_jari adalah " . luasLingkaran($jari_jari);
echo "<hr>";
echo "<br>";
//menghitung persegi
echo  "Ini adalah fungsi menhitung luas persegi:";
echo "<br>";
echo "<br>";
function luas_persegi($sisi) {
  return $sisi * $sisi;
}

$sisi = 5;
echo "Luas persegi dengan sisi ". $sisi . " adalah " . luas_persegi($sisi);
echo "<hr>";
echo "<br>";
// Fungsi untuk menghitung luas kubus
echo  "Ini adalah fungsi menhitung luas kubus:";
echo "<br>";
echo "<br>";
function luas_kubus($sisi) {
	return 6 * ($sisi * $sisi);
  }
  $sisi = 5;
echo "Luas kubus dengan sisi ". $sisi . " adalah " . luas_kubus($sisi);
echo "<hr>";
echo "<br>";
?>

