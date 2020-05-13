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

	?>