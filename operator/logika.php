<?php

$a = true;
$b = false;

//variabel $c akan bernilai false
$c = $a && $b;
echo $c;
echo "<hr>";

//variabel $c akan bernilai true
$c = $a || $b;
echo $c;
echo "<hr>";

//variabel $c akan bernilai false
$c = !$a;
echo $c;
echo "<hr>";

?>