<!DOCTYPE html>
<html>
<head>
	<title>Form Pendataan Mahasiswa Baru</title>
</head>
<body>
	<h2>FORM PENDATAAN MAHASISWA BARU</h2>
	<table>
		<form action="submit.php" method="post">
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td> : </td>
				<td>
					<select name="prodi">
						<option>D3 Sistem Informasi</option>
						<option>D3 Teknik Informatika</option>
						<option>D3 Teknik Telekomunikasi</option>
						<option>D3 Teknik Komputer</option>
						<option>D4 Sistem Multimedia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td> : </td>
				<td>
					<select name="fakultas">
						<option>Fakultas Ilmu Terapan</option>
						<option>Fakultas Rekayasa Industri</option>
						<option>Fakultas Industri Kreatif</option>
						<option>Fakultas Teknik Elektro</option>
						<option>Fakultas Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td> : </td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td> : </td>
				<td><textarea name="motto"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				<td></td>
				<td>Sudah Input Data? <a href="lihatdata.php">Lihat Data</a></td>
			</tr>
		</form>
	</table>
</body>
</html>