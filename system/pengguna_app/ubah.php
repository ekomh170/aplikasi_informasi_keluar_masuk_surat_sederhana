<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
$data_sebelum = mysqli_query($koneksi,"SELECT * FROM tb_login where id='$id'");
while($d = mysqli_fetch_array($data_sebelum)){
	?>
	<div class="container mt-5">
		<div class="h3 text-center">Ubah Data</div>
		<form action="proses/prosesubah.php" method="post">
			<input type="hidden" name="id" value="<?= $d['id']; ?>">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" placeholder="Masukan Email" value="<?= $d['email']; ?>" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" class="form-control" name="password" placeholder="Masukan Yang Akan Di Ubah Password" value="" required>
			</div>
			<?php $data = mysqli_query($koneksi, "SELECT * FROM tb_pemilik_akta");?>
			<div class="form-group">
				<label for="role">Role</label>
				<select class="form-control" name="role">
					<option value="Admin">Admin</option>
					<option value="Pegawai">Pegawai</option>
					<option value="User">User</option>
				</select>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-primary">Ubah Data</button>
		</form>
		<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
<?php } ?>


<?php include '../../layout/footer.php' ?>