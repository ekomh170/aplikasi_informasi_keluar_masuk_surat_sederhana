<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>
<div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-body">
			<div class="h2 mb-3 text-center mb-5">Data Informasi Surat</div>
			<div class="float-right">
				<form class="form-inline" action="index.php" method="get">
					<div class="col-12">
						Form Pencarian Data :  			
						<?php if (@$_GET['kata_cari'] == @$_GET['kata_cari']): ?>				
							<input class="form-control mr-sm-2" type="text" placeholder="Cari Data =<?= @$_GET['kata_cari'];?>" aria-label="Search" name="kata_cari">
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
							<th scope="col">Nomer Surat</th>
							<th scope="col">Nomer Disposisi</th>
							<th scope="col">Dari</th>
							<th scope="col">Aksi</th>
							<?php
							@session_start(); 
							if (@$_SESSION['role'] == "Admin"): ?>
								<th scope="col">Aksi Tambahan</th>
							<?php endif ?>
						</tr>
					</thead>
					<?php 
					include '../../config/koneksi.php';
					if(isset($_GET['kata_cari'])){
						$no_surat = $_GET['kata_cari'];
						$no_disposisi = $_GET['kata_cari'];
						$dari = $_GET['kata_cari'];
						$data = mysqli_query($koneksi, "SELECT * FROM tb_surat WHERE no_surat LIKE '%".$no_surat."%' OR no_disposisi LIKE '%".$no_disposisi."%' OR dari LIKE '%".$dari."%'");			
					}else{
						$data = mysqli_query($koneksi, "SELECT * FROM tb_surat");	
					}

					$no = 1;
					foreach ($data as $dt => $value) {
						?>
						<tbody>
							<tr>
								<th><?= $no++; ?></th>
								<td><?= $value['no_surat']; ?></td>
								<td><?= $value['no_disposisi']; ?></td>
								<td><?= $value['dari']; ?></td>

								<td>
									<a href="detail.php?id=<?= $value['id_surat']; ?>"><button class="btn btn-warning">Selengkapnya</button></a>
									<?php
									@session_start(); 
									if (@$_SESSION['role'] == "Admin"): ?>
										<a href="ubah.php?id=<?= $value['id_surat']; ?>"><button class="btn btn-warning">Ubah</button></a>
										<a href="hapus.php?id=<?= $value['id_surat']; ?>"><button  class="btn btn-warning">Hapus</button></a>
									<?php endif ?>
								</td>
								<?php
								@session_start(); 
								if (@$_SESSION['role'] == "Admin" || @$_SESSION['role'] == "Pegawai"): ?>
									<td>
										<a href="proses_tambahan/keluar.php?id=<?= $value['id_surat']; ?>"><button class="btn btn-warning">Surat Keluar</button></a>
										<br><br>
										<a href="proses_tambahan/masuk.php?id=<?= $value['id_surat']; ?>"><button class="btn btn-warning">Surat Masuk</button></a>
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