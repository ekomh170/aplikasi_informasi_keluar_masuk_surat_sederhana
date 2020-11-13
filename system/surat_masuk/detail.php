<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>

<div class="container text-center mt-5">
	<div class="row">
		<div class="col-6 mt-3">
			<?php
			include '../../config/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk as tb_sm INNER JOIN tb_surat as tb_s on tb_sm.id_surat = tb_s.id_surat INNER JOIN tb_jenis as tb_j on tb_sm.jenis = tb_j.jenis WHERE id_surat_masuk='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="card" style="width: 70rem;">
					<div class="card-body">
						<h5 class="card-title">Data Lengkap Surat Masuk</h5>
						<hr>
						<div class="h3 card-text"><?= $d['jenis']?></div>
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
	</div>
</div>

<?php include '../../layout/footer.php' ?>