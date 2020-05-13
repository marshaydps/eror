	<?php


	function koneksi() {
		$connect = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
		mysqli_select_db($connect, "tubes_193040148") or die("Database salah!");

		return $connect;
	}

	function query($sql){
		$connect = koneksi();
		$result = mysqli_query($connect, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

		//fungsi untuk menambahkan data didalam database
	function tambah($bk)
	{
		$connect = koneksi();
		$cover = htmlspecialchars($bk['cover']);
		$judul = htmlspecialchars($bk['judul']);
		$penulis = htmlspecialchars($bk['penulis']);
		$halaman = htmlspecialchars($bk['halaman']);
		$terbit = htmlspecialchars($bk['terbit']);
		

		$query = "INSERT INTO buku
		VALUES 
		('', '$cover', '$judul', '$penulis', $halaman, $terbit)";

		mysqli_query($connect, $query);

		return mysqli_affected_rows($connect);
	}

	?>