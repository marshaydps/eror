<?php
require 'function.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) >0) {
		echo "<script>
		alert('data berhasil ditambahkan !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal ditambahkan!');
		document.location.href='admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="violet">
<h3>Form Tambah Data Tabel Buku</h3>
<form action="" method="post">
<ul>
			<li>
				<label for="Cover">Cover :</label><br>
				<input type="text" name="Cover" id="Cover" required><br><br>
			</li>
			<li>
				<label for="Judul">Judul :</label><br>
				<input type="text" name="Judul" id="Judul" required><br><br>
			</li>
			<li>
				<label for="Penulis">Penulis :</label><br>
				<input type="text" name="Penulis" id="Penulis" required><br><br>
			</li>
			<li>
				<label for="Halaman">Halaman :</label><br>
				<input type="Halaman" name="Halaman" id="Halaman" required><br><br>
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
<body>

</body>
</html>