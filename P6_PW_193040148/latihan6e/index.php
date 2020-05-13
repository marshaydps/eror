
	<?php
	require 'php/function.php';

	$buku = query("SELECT * FROM buku");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title></title>
</head>
	<body bgcolor="skyblue">
	<h1><center>TABEL BUKU</center></h1>
	<div class="container">
	<?php foreach ($buku as $bk) : ?>
	<p class="Judul">
	<a href="php/detail.php?id=<?= $bk['id'] ?>">
	<?= $bk["Judul"] ?>
	</a>
	</p>
	<?php endforeach; ?>

</div>
</body>
</html>

