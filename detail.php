<table border="1">
	<thead>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Program Studi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Motto Hidup</th>
		<th>Action</th>
	</thead>
	<tbody>
<?php
$nim = $_GET['nim'];
$db = new mysqli("localhost", "root", "", "webdasar7");

$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim = $row['nim'];
		echo "<tr>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $nim . "</td>";
		echo "<td>" . $row['jk'] . "</td>";
		echo "<td>" . $row['prodi'] . "</td>";
		echo "<td>" . $row['fakultas'] . "</td>";
		echo "<td>" . $row['asal'] . "</td>";
		echo "<td>" . $row['motto'] . "</td>";
		echo "<td> <a href='formedit.php?nim=$nim'>Edit</a></td>";
		echo "</tr>";
	}
}else{
	echo "0 result";
}

mysqli_close($db);

?>
	</tbody>
</table>
<br>
<a href="lihatdata.php">Kembali ke Halaman Sebelumnya</a>