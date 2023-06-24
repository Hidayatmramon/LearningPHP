<?php
//ini perkalian
function perkalian($satu, $dua)
{
   $a= $satu;
   $b= $dua;
   $c= $satu;
   $d= $dua;
   $e= $satu;
   $f= $dua;
   $hasil= $a+$b;
   $hasil2= $c-$d;
   $hasil3= $e*$f;
   return $hasil;
   return $hasil2;
   return $hasil3;
}

$a = 5;
$b = 2;

//Penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";


?>