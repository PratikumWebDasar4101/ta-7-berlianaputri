<?php 
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];	
	$asal = $_POST['asal'];
	$motto = $_POST['motto'];

	$db = new mysqli("localhost", "root", "", "webdasar7");

	$sql = "UPDATE `mahasiswa` SET `nama`='$nama', `nim`='$nim', `jk`='$jk', `prodi`='$prodi', `fakultas`=
			'$fakultas', `asal`='$asal', `motto`='$motto' WHERE nim='$nim'";

	if (mysqli_query($db, $sql)) {
		echo "Update Data Berhasil";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

	mysqli_close($db);

	echo "<br>";
	echo "<a href=lihatdata.php>Lihat Semua Data Mahasiswa";
?>