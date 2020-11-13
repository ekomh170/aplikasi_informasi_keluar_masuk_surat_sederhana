<?php include 'config/uri.php' ?>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-grid.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css.map">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">

	<style>
		body {
			background-image: url('assets/img/unhan.jpg'); 
			/* background-repeat: no-repeat; */
			background-size: cover;
		}
	</style>
	<title>Apps Informasi Keluar Masuk Surat</title>
</head>
<body>
	<div class="gambar">
		<div class="container">
			<div class="text1 h1 text-center text-light mb-auto">APPS</div>
			<div class="text2 h3 text-center text-light">Informasi Keluar</div>
			<div class="text2 h3 text-center text-light">Masuk Surat</div>
			<div class="mb-5">
				<span><img src="assets/img/unhan-logo.png"></span>
			</div>
			<div class="mt-5">
				<a href="auth/masuk.php" style="text-decoration-line: none;"><button type="button" class="btn btn btn-lg btn-block mb-2" style="background-color: red;">Form Login</button></a>
				<a href="auth/daftar.php" style="text-decoration-line: none;"><button type="button" class="btn btn btn-lg btn-block mb-2" style="background-color: white;">Form Daftar</button></a>
				<?php
				@session_start();
				if (@$_SESSION['email']): ?>
					<a href="system/informasi_surat/index.php" style="text-decoration-line: none;"><button type="button" class="btn btn-warning btn-lg btn-block text-light mb-2">Kembali Ke Halaman APPS</button></a>
					<a href="auth/keluar_akun.php" style="text-decoration-line: none;"><button type="button" class="btn btn-danger btn-lg btn-block mb-2">Keluar Akun</button></a>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
</html>