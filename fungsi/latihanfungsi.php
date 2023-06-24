<?php
	//Membuat Sebuah Fungsi
	function biodata(){
	  echo "Nama : Novica<br/>";
	  echo "Rombel : PPLG X<br/>";
}
	
	//Memanggil fungsi yang sudah dibuat
	biodata();
	
	echo "<hr>";
	
	//Memanggil fungsi lagi
	biodata();

    echo "<hr>";

    //Membuat Fungsi Ke-2
    function perkenalan($nama, $rombel){
    echo "Nama : $nama<br/>";
	echo "Rombel : $rombel<br/>";
}

	//Memanggil fungsi yang sudah dibuat
	perkenalan("Ardina", "DKV X");

	echo "<hr>";

	$nama = "Indry";
	$rombel = "HTL X";
	//Memanggil fungsi lagi
	perkenalan($nama, $rombel);

    echo "<hr>";

    //Membuat Fungsi Ke-3
    function perkenalan2($nama, $rombel, $rayon="Cicurug 7"){
    echo "Nama : $nama<br/>";
	echo "Rombel : $rombel<br/>";
	echo "Rayon : $rayon<br/>";
}

    //Memanggil fungsi yang sudah dibuat tanpa mengisi parameter rayon
    perkenalan2("Julia", "TBG X");

    echo "<hr>";

    //Membuat Fungsi (Return)
    function hitungUmur($thnlahir, $thnsekarang){
    $umur = $thnsekarang - $thnlahir;
    return $umur;
}
  
    echo "Umur saya adalah ". hitungUmur(2001, 2022) ." tahun";
?>
