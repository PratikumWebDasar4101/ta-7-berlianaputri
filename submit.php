<?php 
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];	
	$asal = $_POST['asal'];
	$motto = $_POST['motto'];
	
	$db = new mysqli("localhost", "root", "", "webdasar7");

	$sql = "INSERT INTO mahasiswa(nama, nim, jk, prodi, fakultas, asal, motto) 
			VALUES ('$nama', '$nim', '$jk', '$prodi', '$fakultas', '$asal', '$motto')";

	if (mysqli_query($db, $sql)) {
		echo "New record created successfully";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

mysqli_close($db);
echo "<br><br>";
echo "<a href = lihatdata.php>Lihat Data";
?>