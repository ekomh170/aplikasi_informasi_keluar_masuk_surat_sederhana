<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<div class="container text-center mt-5">
	<?php
	include '../../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_surat WHERE id_surat ='$id'");		
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="card" style="width: 70rem;">
			<div class="card-body">
				<h5 class="card-title">Data Lengkap Informasi Surat</h5>
				<hr>
				<div class="card-text">Nomer Surat : <?= $d['no_surat'] ?></div>
				<div class="card-text">Nomer Disposisi : <?= $d['no_disposisi'] ?></div>
				<div class="card-text">Dari : <?= $d['dari'] ?></div>
				<div class="card-text">Kepada : <?= $d['kepada'] ?></div>
				<div class="card-text">Tanggal Surat : <?= $d['tanggal_surat'] ?></div>
				<div class="card-text">Tanggal Diterima : <?= $d['tanggal_terima'] ?></div>
				<div class="card-text">Kategori Surat : <?= $d['kategori'] ?></div>
				<div class="card-text">Klasifikasi Surat : <?= $d['klasifikasi'] ?></div>
				<div class="card-text">Derajat Surat : <?= $d['derajat'] ?></div>
				<div class="card-text">Aksi Surat : <?= $d['aksi'] ?></div>
				<div class="card-text">Isi Surat :</div>
				<div class="card-text"><?= $d['isi'] ?></div>
				<br>
				<a href="print/detail_print.php?id=<?= $id; ?>" class="btn btn-danger" target="_BLANK">Print Data</a> | 
				<a href="index.php" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	<?php } ?>
</div>
<?php include '../../layout/footer.php' ?>