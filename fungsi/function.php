<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
   $a= $angka1;
   $b= $angka2;
   $hasil= $a*$b;
   return $hasil;
}
 
//pemanggilan fungsi
$hasil=perkalian(4,5);
echo "Perkalian 4 x 5 adalah $hasil";
echo "<br />";
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
?>