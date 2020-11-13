<?php 
	
	$koneksi = mysqli_connect("localhost", "root", "", "db_informasi_kema_surat");

	if (!$koneksi) {
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

 ?>