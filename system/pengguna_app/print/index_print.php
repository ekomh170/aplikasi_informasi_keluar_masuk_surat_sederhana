<?php include '../../../config/akses_block.php' ?>
<?php include '../../../config/uri.php' ?>
<?php include '../../../layout/header.php' ?>

<div class="container mt-5">
	<div class="h2 mb-3 text-center mb-5">Data Pengguna APP</div>
	<table class="table table-hover mt-2 text-center">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Email</th>
				<th scope="col">Role</th>
			</tr>
		</thead>
		<?php 
		include '../../../config/koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM tb_login");	
		$no = 1;
		foreach ($data as $dt => $value) { ?>
			<tbody>
				<tr>
					<th><?= $no++; ?></th>
					<td><?= $value['email']; ?></td>
					<td><?= $value['role']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php include '../../../layout/footer.php' ?>