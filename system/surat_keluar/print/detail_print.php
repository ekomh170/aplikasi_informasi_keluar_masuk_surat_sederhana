<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container text-center mt-5">
	<div class="row">
		<div class="col-6 mt-3">
			<?php
			include '../../../config/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_surat_keluar as tb_sk INNER JOIN tb_surat as tb_s on tb_sk.id_surat = tb_s.id_surat INNER JOIN tb_jenis as tb_j on tb_sk.jenis = tb_j.jenis WHERE id_surat_keluar='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="card" style="width: 70rem;">
					<div class="card-body">
						<h5 class="card-title">Data Lengkap Surat Keluar</h5>
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
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>