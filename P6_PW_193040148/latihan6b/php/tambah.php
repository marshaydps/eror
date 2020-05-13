<?php
require 'function.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data berhasil ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}else {
		echo "<script>
		alert('Data gagal ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="skyblue">
	<h3>Form Tambah Data Mahasiswa</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="cover">Cover :</label><br>
				<input type="text" name="cover" id="cover" required><br><br>
			</li>
			<li>
				<label for="judul">Judul :</label><br>
				<input type="text" name="judul" id="judul" required><br><br>
			</li>
			<li>
				<label for="penulis">Penulis :</label><br>
				<input type="text" name="penulis" id="penulis" required><br><br>
			</li>
			<li>
				<label for="halaman">Halaman :</label><br>
				<input type="halaman" name="halaman" id="halaman" required><br><br>
			</li>
			<li>
				<label for="terbit">Tahun Terbit :</label><br>
				<input type="terbit" name="terbit" id="terbit" required><br><br>
			</li>
		<br>
			<button type="submit" name="tambah">Tambah Data!</button>
			<button type="submit">
			<a href="index.php">Kembali</a>
		</button>
		
	</ul>
	</form>

</body>
</html>