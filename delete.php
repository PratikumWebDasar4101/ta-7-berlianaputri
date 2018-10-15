<?php 
	if (!empty($_GET['nim'])) {
		$nim = $_GET['nim'];

		$db = new mysqli("localhost", "root", "", "webdasar7");		

		$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";

		if (mysqli_query($db, $sql)) {
			echo "Data Mahasiswa Berhasil Dihapus";
		}else{
			echo "Error : " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	mysqli_close($db);
	echo "<br>";
	echo "<a href = lihatdata.php>Lihat Data";

?>