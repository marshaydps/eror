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
	<a href="tambah.php">Tambah data!</a>
	</div>
	<table cellpadding="13" cellspacing="0" border="1" bgcolor="Bisque">
		<tr bgcolor="skyblue">
			<th>id</th>
			<th>opsi</th>
			<th>cover</th>
			<th>judul</th>
			<th>penulis</th>
			<th>halaman</th>
			<th>tahun terbit</th>
		</tr>
<?php $a = 1?>
<?php foreach ($buku as $bk) : ?>

	<tr>
		<td><?= $a ?></td>
		<td>
			<a href="ubah.php?id=<?= $bk['id'] ?>">Ubah</a>
			<a href="hapus.php?id=<?= $bk['id'] ?>" onclick="return confirm('Hapus data??')"><button>Hapus</button> </a>
		</td>
		<td><img src="../assets/img/<?=$bk["cover"]; ?>" alt=""> </td>
		<td><?= $bk ["judul"] ?></td>
		<td><?= $bk ["penulis"] ?></td>
		<td><?= $bk ["halaman"] ?></td>
		<td><?= $bk ["terbit"] ?></td>
	</tr>
	<?php $a++ ?>
	
<?php endforeach; ?>
</table>
</body>
</html>