<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>
<div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-body">
			<div class="h2 mb-3 text-center mb-5">Data Pengguna APP</div>
			<div class="float-right">
				<form class="form-inline" action="index.php" method="get">
					<div class="col-12">
						Form Pencarian Data :  			
						<?php if (@$_GET['kata_cari'] == @$_GET['kata_cari']): ?>				
							<input class="form-control mr-sm-2" type="text" placeholder="Cari Data = <?= @$_GET['kata_kunci'];?>" aria-label="Search" name="kata_kunci">
							<?php else: ?>
								<input class="form-control mr-sm-2" type="text" placeholder="Cari Data" aria-label="Search" name="kata_cari">
							<?php endif ?>
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" value="cari">Cari</button>
						</div>
					</form>
				</div>
				<?php  
				@session_start(); 
				if (@$_SESSION['role'] == "Admin"):
					?>
					<a href="tambah.php"><button class="btn btn-danger mt-3">Tambah Data</button></a>
				<?php endif ?>
				<a href="print/index_print.php" target="_BLANK"><button class="btn btn-danger mt-3">Print Data</button></a>
				<table class="table table-hover mt-2 text-center">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Email</th>
							<th scope="col">Role</th>
							<?php
							@session_start(); 
							if (@$_SESSION['role'] == "Admin"): ?>
								<th scope="col">Aksi</th>
							<?php endif ?>
						</tr>
					</thead>
					<?php 
					include '../../config/koneksi.php';
					if(isset($_GET['kata_kunci'])){
						$email = $_GET['kata_kunci'];
						$role = $_GET['kata_kunci'];
						$data = mysqli_query($koneksi,"SELECT * FROM tb_login WHERE email LIKE '%".$email."%' OR role LIKE '%".$role."%'");			
					}else{
						$data = mysqli_query($koneksi,"SELECT * FROM tb_login");	
					}

					$no = 1;
					foreach ($data as $dt => $value) { ?>
						<tbody>
							<tr>
								<th><?= $no++; ?></th>
								<td><?= $value['email']; ?></td>
								<td><?= $value['role']; ?></td>
								<?php
								@session_start(); 
								if (@$_SESSION['role'] == "Admin"): ?>
									<td>
										<a href="ubah.php?id=<?= $value['id']; ?>"><button class="btn btn-warning">Ubah</button></a>
										<a href="hapus.php?id=<?= $value['id']; ?>"><button class="btn btn-warning">Hapus</button></a>
									</td>
								<?php endif ?>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	

	<?php include '../../layout/footer.php' ?>