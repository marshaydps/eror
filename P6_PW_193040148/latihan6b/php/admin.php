<?php
//menghubungkan dengan file php lainnya
require 'function.php';

//melakukan query
$buku = query("SELECT * FROM buku");


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body bgcolor="Bisque">
<div class="add">
	<a href="tambah.php">Tambah Data!</a>
</div>

	<table border="1" cellpadding="13" cellspacing="0">
		<tr bgcolor="skyblue">
			<th>ID</th>
			<th>Opsi</th>
			<th>Cover</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Halaman</th>
			<th>Tahun Terbit</th>
		</tr>
		<?php $a = 1; ?>
		<?php foreach ($buku as $bk) : ?>
			<tr>
				<td><?= $a; ?></td>
				<td>
					<a href=""><button>Ubah</button>
					<a href=""><button>Hapus</button>
				</td>
				<td><img src="../assets/img/<?= $bk['cover']; ?>"></td>
				<td><?= $bk['judul']; ?></td>
				<td><?= $bk['penulis']; ?></td>
				<td><?= $bk['halaman']; ?></td>
				<td><?= $bk['terbit']; ?></td>
			</tr>
			<?php $a++; ?>
			<?php endforeach; ?>
	</table>
</body>
</html>