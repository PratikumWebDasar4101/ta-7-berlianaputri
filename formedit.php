<?php
if (!empty($_GET['nim'])) {
		$nim = $_GET['nim'];

		$db = new mysqli("localhost", "root", "", "webdasar7");

		$sql = "SELECT * from mahasiswa where nim='$nim'";

		$result = mysqli_query($db, $sql);
		

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$nim = $row['nim'];
				$nama = $row['nama'];
				$jk = $row['jk'];
				$prodi = $row['prodi'];
				$fakultas = $row['fakultas'];
				$asal = $row['asal'];
				$motto = $row['motto'];
			}

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendataan Mahasiswa Baru</title>
</head>
<body>
	<h2>EDIT MAHASISWA BARU</h2>
	<table>
		<form action="proses-edit.php" method="post">
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
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
				<td><input type="text" name="asal" value="<?php echo $asal; ?>"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td> : </td>
				<td><textarea name="motto"><?php echo $motto; ?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="edit" value="EDIT"></td>
			</tr>
		</form>
	</table>
</body>
</html>