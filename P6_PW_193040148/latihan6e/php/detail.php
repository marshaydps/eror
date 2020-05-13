<?php 

if (!isset($_GET['id'])) {
	header("location : ../index.php");
	exit;
}
require 'function.php';

$id = $_GET['id'];

$buku = query("SELECT * FROM buku WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body bgcolor="Bisque">

	<div class="container">
	<div class="img">
	<img src="../assets/img/<?=$buku["Cover"];?>" alt="">
</div>
<div class="keterangan">
		<p><?= $buku["Judul"]; ?></p>
		<p><?= $buku["Penulis"]; ?></p>
		<p><?= $buku["Halaman"]. " halaman" ?></p>
		<p><?="Terbit ". $buku["terbit"]; ?></p>
	</div>
	<button class="tombol-kembali"><a href="../index.php">Back</button>
</body>
</html>