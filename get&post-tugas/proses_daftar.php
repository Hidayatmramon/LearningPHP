<?php
	// Program pendaftaran siswa baru

	// Mendapatkan data dari form
	$nama_siswa = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$no_telp = $_POST['no_telp'];

	// Menampilkan data yang diinput
	echo "Nama Siswa: " . $nama_siswa . "<br>";
	echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
	echo "Asal Sekolah: " . $asal_sekolah . "<br>";
	echo "No. Telp: " . $no_telp;
?>