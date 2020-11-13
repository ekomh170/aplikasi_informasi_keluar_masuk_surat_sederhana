<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<?php 
include '../../config/koneksi.php';
$data = mysqli_query($koneksi,"SELECT * FROM tb_aksi");
?>

<div class="container mt-5">
	<div class="h3 text-center">Tambah Data Informasi Surat</div>
	<form action="proses/prosestambah.php" method="post">
		<div class="form-group">
			<label for="no_surat">Nomer Surat</label>
			<input type="text" class="form-control" name="no_surat" placeholder="Masukan Nomer Surat" required>
		</div>
		<div class="form-group">
			<label for="no_disposisi">Nomer Disposisi</label>
			<input type="text" class="form-control" name="no_disposisi" placeholder="Masukan Nomer Disposisi" required>
		</div>
		<div class="form-group">
			<label for="dari">Dari</label>
			<input type="text" class="form-control" name="dari" placeholder="Masukan Dari" required>		
		</div>
		<div class="form-group">
			<label for="perihal">Perihal</label>
			<input type="text" class="form-control" name="perihal" placeholder="Masukan Perihal" required>
		</div>
		<div class="form-group">
			<label for="kepada">Kepada</label>
			<input type="text" class="form-control" name="kepada" placeholder="Masukan Kepada" required>
		</div>
		<div class="form-group">
			<label for="tanggal_surat">Tanggal Surat</label>
			<input type="date" class="form-control" name="tanggal_surat" placeholder="Masukan Tanggal Surat" required>
		</div>
		<div class="form-group">
			<label for="tanggal_terima">Tanggal Diterima</label>
			<input type="date" class="form-control" name="tanggal_terima" placeholder="Masukan Tanggal Diterima" required>
		</div>
		<div class="form-group">
			<label for="isi">Isi</label>
			<textarea class="form-control" name="isi" rows="3" value="" required></textarea>
		</div>
		<div class="form-group">
			<label for="kategori">Kategori</label>
			<select class="form-control" name="kategori">
				<option value="Biasa">Biasa</option>
				<option value="Rahasia">Nota Dinas</option>
			</select>
		</div>
		<div class="form-group">
			<label for="klasifikasi">Klasifikasi</label>
			<select class="form-control" name="klasifikasi">
				<option value="Biasa">Biasa</option>
				<option value="Rahasia">Rahasia</option>
				<option value="Sangat Rahasia">Sangat Rahasia</option>
			</select>
		</div>
		<div class="form-group">
			<label for="derajat">Derajat</label>
			<select class="form-control" name="derajat">
				<option value="Biasa">Biasa</option>
				<option value="Kilat">Kilat</option>
				<option value="Segera">Segera</option>
			</select>
		</div>
		<div class="form-group">
			<label for="aksi">Aksi</label>
			<select class="form-control" name="aksi">
				<?php while($d = mysqli_fetch_array($data)) { ?>
					<option value="<?= $d['aksi']; ?>"><?= $d['aksi']; ?></option>
				<?php } ?>
			</select>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah Data</button>
	</form>
	<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
</div>

<?php include '../../layout/footer.php' ?>