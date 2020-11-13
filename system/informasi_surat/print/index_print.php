<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Informasi Surat</div>
	<table class="table table-hover mt-2 text-center">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nomer Surat</th>
				<th scope="col">Nomer Disposisi</th>
				<th scope="col">Dari</th>
				<th scope="col">Kepada</th>
			</tr>
		</thead>
		<?php 
		include '../../../config/koneksi.php';
		$data = mysqli_query($koneksi, "SELECT * FROM tb_surat");	
		$no = 1;
		foreach ($data as $dt => $value) {
			?>
			<tbody>
				<tr>
					<th><?= $no++; ?></th>
					<td><?= $value['no_surat']; ?></td>
					<td><?= $value['no_disposisi']; ?></td>
					<td><?= $value['dari']; ?></td>
					<td><?= $value['kepada']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>