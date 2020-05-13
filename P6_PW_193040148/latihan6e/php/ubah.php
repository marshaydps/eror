<?php
require 'function.php';

$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (tambah($_POST) >0) {
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
<body bgcolor="violet">
<h3>Form Ubah Data Tabel Buku</h3>
<form action="" method="post">
<ul>
	<input type="hidden" name="id" id="id" value="<?= $bk['id'];?>">
			<br><br>
			
			<li>
				<label for="Cover">Cover :</label><br>
				<input type="text" name="Cover" id="Cover" required value="<?= $bk['Cover']; ?>"><br><br>
			</li>
			<li>
				<label for="Judul">Judul :</label><br>
				<input type="text" name="Judul" id="Judul" required value="<?= $bk['Judul']; ?>"><br><br>
			</li>
			<li>
				<label for="Penulis">Penulis :</label><br>
				<input type="text" name="Penulis" id="Penulis" required value="<?= $bk['Penulis']; ?>"><br><br>
			</li>
			<li>
				<label for="Halaman">Halaman :</label><br>
				<input type="Halaman" name="Halaman" id="Halaman" required value="<?= $bk['Halaman']; ?>"><br><br>
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