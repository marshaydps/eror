<?php
require 'function.php';

$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) >0) {
		echo "<script>
		alert('data berhasil diubah !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal diubah!');
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
<body bgcolor="skyblue">
<h3>Form Ubah Data Tabel Buku</h3>
<form action="" method="post">
<ul>
	<input type="hidden" name="id" id="id" value="<?= $bk['id'];?>">
			<br><br>
			
			<li>
				<label for="cover">Cover :</label><br>
				<input type="text" name="cover" id="cover" required value="<?= $bk['cover']; ?>"><br><br>
			</li>
			<li>
				<label for="judul">Judul :</label><br>
				<input type="text" name="judul" id="judul" required value="<?= $bk['judul']; ?>"><br><br>
			</li>
			<li>
				<label for="penulis">Penulis :</label><br>
				<input type="text" name="penulis" id="penulis" required value="<?= $bk['penulis']; ?>"><br><br>
			</li>
			<li>
				<label for="halaman">Halaman :</label><br>
				<input type="halaman" name="halaman" id="halaman" required value="<?= $bk['halaman']; ?>"><br><br>
			</li>
			<li>
				<label for="terbit">Tahun Terbit :</label><br>
				<input type="terbit" name="terbit" id="terbit" required value="<?= $bk['terbit']; ?>"><br><br>
			</li>
		<br>
			<button type="submit" name="ubah">Ubah Data!</button>
			<button type="submit">
			<a href="index.php">Kembali</a>
		</button>
		
	</ul>
<body>

</body>
</html>