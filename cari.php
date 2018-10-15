<h2>Cari Data Berdasarkan NIM</h2>
<form action="" method="post">
	<input type="text" name="search" placeholder="Cari berdasarkan NIM">
	<input type="submit" name="submit" value="Cari">
</form>
<table border="1">
	<thead>
		<th>Nama</th>
		<th>NIM</th>
	</thead>
<tbody>

<?php
	if (isset($_POST['submit'])) {
		echo "<b>Hasil Pencarian</b>";
		$cari = $_POST['search']; 
		$db = new mysqli("localhost", "root", "", "webdasar7");

		$sql = "SELECT nim, nama FROM mahasiswa WHERE nim LIKE '%$cari%'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$nim = $row['nim'];
				echo "<tr>";
				echo "<td>" . $row['nama'] . "</td>";
				echo "<td>" . $nim . "</td>";
				echo "</tr>";
			}
		}else{
			echo "0 result";
		}


	mysqli_close($db);
	}
?>
	</tbody>
</table>
<br><br>
<a href="lihatdata.php">Kembali</a>