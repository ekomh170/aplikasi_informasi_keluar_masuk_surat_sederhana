<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Surat Masuk</div>
	<table class="table table-hover mt-2 text-center">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Kode Surat</th>
				<th scope="col">Nomer Surat</th>
				<th scope="col">Nomer Disposisi</th>
				<th scope="col">Dari</th>
				<th scope="col">Jenis Surat</th>
			</tr>
		</thead>
		<?php 
		include '../../../config/koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk as tb_sm INNER JOIN tb_surat as tb_s on tb_sm.id_surat = tb_s.id_surat INNER JOIN tb_jenis as tb_j on tb_sm.jenis = tb_j.jenis ");

		$no = 1;
		foreach ($data as $dt => $value) { ?>
			<tbody>
				<tr>
					<th><?= $no++; ?></th>
					<td><?= $value['id_surat_masuk']; ?></td>
					<td><?= $value['no_surat']; ?></td>
					<td><?= $value['no_disposisi']; ?></td>
					<td><?= $value['dari']; ?></td>
					<td><?= $value['jenis']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>