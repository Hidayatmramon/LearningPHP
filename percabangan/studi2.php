<?php

$nilai = 20; 

echo "nilai anda $nilai";
echo "<br>";

if($nilai >= 90 && $nilai <= 100){
        echo "Selamat anda rangking A !";

    } else if ($nilai >= 80 && $nilai < 90){
        echo "selamat anda rangking B !";

    } else if ($nilai >= 70 && $nilai < 80){
        echo "selamat anda rangking C !";
        
    } else {
        echo "Waduh anda rangking D !";
    }


?>