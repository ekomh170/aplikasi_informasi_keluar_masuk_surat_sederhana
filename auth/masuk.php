<?php include '../config/block_akses.php' ?>
<?php include '../config/uri.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/font/fontawesome/css/font-awesome.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/img/unhan.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="proses/prosesmasuk.php" method="post">
					<span class="login100-form-logo">
						<img src="../assets/img/unhan-logo.png">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login Akun
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf007;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Masukan password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf007;"></span>
					</div>
					<div class="contact100-form-checkbox"></div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../index.php">
							Halaman Utama
						</a><br>
						<a class="txt1" href="daftar.php">
							Jika Belum Punya AKun? Klik Text Ini
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
</body>
</html>

