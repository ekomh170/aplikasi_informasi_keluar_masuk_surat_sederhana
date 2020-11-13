<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<?php
include '../../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_surat WHERE id_surat ='$id'");		
while($d = mysqli_fetch_array($data)){
	?>
	<div class="container mt-5">
		<div class="h3 text-center">Tambah Data Informasi Surat</div>
		<form action="proses/prosesubah.php" method="post">	
			<input type="hidden" name="id_surat" value="<?= $d['id_surat']; ?>">
			<div class="form-group">
				<label for="no_surat">Nomer Surat</label>
				<input type="text" class="form-control" name="no_surat" placeholder="Masukan Nomer Surat" value="<?= $d['no_surat']; ?>" required>
			</div>
			<div class="form-group">
				<label for="no_disposisi">Nomer Disposisi</label>
				<input type="text" class="form-control" name="no_disposisi" placeholder="Masukan Nomer Disposisi" value="<?= $d['no_disposisi']; ?>" required>
			</div>
			<div class="form-group">
				<label for="dari">Dari</label>
				<input type="text" class="form-control" name="dari" placeholder="Masukan Dari" value="<?= $d['dari']; ?>" required>		
			</div>
			<div class="form-group">
				<label for="perihal">Perihal</label>
				<input type="text" class="form-control" name="perihal" placeholder="Masukan Perihal" value="<?= $d['perihal']; ?>" required>
			</div>
			<div class="form-group">
				<label for="kepada">Kepada</label>
				<input type="text" class="form-control" name="kepada" placeholder="Masukan Kepada" value="<?= $d['kepada']; ?>" required>
			</div>
			<div class="form-group">
				<label for="tanggal_surat">Tanggal Surat</label>
				<input type="date" class="form-control" name="tanggal_surat" placeholder="Masukan Tanggal Surat" value="<?= $d['tanggal_surat']; ?>" required>
			</div>
			<div class="form-group">
				<label for="tanggal_terima">Tanggal Diterima</label>
				<input type="date" class="form-control" name="tanggal_terima" placeholder="Masukan Tanggal Diterima" value="<?= $d['tanggal_terima']; ?>"required>
			</div>
			<div class="form-group">
				<label for="isi">Isi</label>
				<textarea class="form-control" name="isi" rows="3" value="<?= $d['no_surat']; ?>" required><?= $d['isi']; ?></textarea>
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
					<?php $data = mysqli_query($koneksi,"SELECT * FROM tb_aksi"); ?>
					<?php while($d = mysqli_fetch_array($data)) { ?>
						<option value="<?= $d['aksi']; ?>"><?= $d['aksi']; ?></option>
					<?php } ?>
				</select>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-primary">Ubah Data</button>
		</form>
		<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
<?php } ?>


<?php include '../../layout/footer.php' ?>