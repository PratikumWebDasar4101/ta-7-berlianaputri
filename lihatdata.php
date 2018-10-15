<h2>Data Mahasiswa Baru</h2>
<form action="cari.php" method="post">
	<input type="text" name="search" placeholder="Cari berdasarkan NIM">
	<input type="submit" name="submit" value="Cari">
</form>
<table border="1">
	<thead>
		<th>Nama</th>
		<th>NIM</th>
		<th>Action</th>
	</thead>
	<tbody>
<?php
$db = new mysqli("localhost", "root", "", "webdasar7");

$sql = "SELECT nim, nama from mahasiswa";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim = $row['nim'];
		echo "<tr>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $nim . "</td>";
		echo "<td> <a href='delete.php?nim=$nim'>Delete</a> <a href='detail.php?nim=$nim'>Detail</a></td>";
		echo "</tr>";
	}
}else{
	echo "0 result";
}


mysqli_close($db);
?>
	</tbody>
</table>
<br><br>
<a href="form.php">Input Data</a> || <a href="cari.php">Cari Data</a>