<?php
function jumlah($angka1, $angka2, $angka3, $angka4, $angka5){
    $a = $angka1;
    $b = $angka2;
    $c = $angka3;
    $d = $angka4;
    $e = $angka5;

    echo "$a + $b = ";
    echo $hasil = $a+$b;
     echo "<br>";

    echo "$b * $c = ";
    echo $hasil1 = $b+$c;
    echo "<br>";

    echo "$d / $e = ";
    echo $hasil2 = $d / $e ;
    echo "<br>";

    echo "$a - $e = ";
    echo $hasil3 = $a - $e;
    echo "<br>";
    
    echo "$b % $e = ";
    echo $hasil4 = $b % $e;
    echo "<br>";
 }
  
 echo "<br>";
 echo jumlah(4,5,6,7,8);
?>