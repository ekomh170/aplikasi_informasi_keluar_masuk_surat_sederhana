<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<?php 
include '../../config/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta");

?>

<div class="container mt-5">
	<div class="h3 text-center">Tambah Data</div>
	<form action="proses/prosestambah.php" method="post">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" placeholder="Masukan Email" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
		</div>
		<div class="form-group">
			<label for="role">Role</label>
			<select class="form-control" name="role">
				<option value="Admin">Admin</option>
				<option value="Pegawai">Pegawai</option>
				<option value="User">User</option>
			</select>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah Data</button>
	</form>
	<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
</div>

<?php include '../../layout/footer.php' ?>