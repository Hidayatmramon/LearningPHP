<html>
<head>
	<title>Program Pendaftaran Siswa Baru</title>
</head>
<body>
	<h1>Program Pendaftaran Siswa Baru</h1>

	<form action="proses_daftar.php" method="post">
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td><input type="text" name="asal_sekolah"></td>
			</tr>
			<tr>
				<td>No. Telpon</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Daftar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
