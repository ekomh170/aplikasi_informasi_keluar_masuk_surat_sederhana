<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/main.php' ?>
<div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-body">
			<div class="h2 mb-3 text-center mb-5">Data Surat Masuk</div>
			<div class="float-right">
				<form class="form-inline" action="index.php" method="get">
					<div class="col-12">
						Form Pencarian Data :  			
						<?php if (@$_GET['kata_cari'] == @$_GET['kata_cari']): ?>				
							<input class="form-control mr-sm-2" type="text" placeholder="Cari Data = <?= @$_GET['kata_campuran'];?>" aria-label="Search" name="kata_campuran">
							<?php else: ?>
								<input class="form-control mr-sm-2" type="text" placeholder="Cari Data" aria-label="Search" name="kata_cari">
							<?php endif ?>
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" value="cari">Cari</button>
						</div>
					</form>
				</div>
				<a href="print/index_print.php" target="_BLANK"><button class="btn btn-danger mt-3">Print Data</button></a>
				<table class="table table-hover mt-2 text-center">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Kode Surat</th>
							<th scope="col">Nomer Surat</th>
							<th scope="col">Nomer Disposisi</th>
							<th scope="col">Dari</th>
							<th scope="col">Jenis Surat</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<?php 
					include '../../config/koneksi.php';
					if(isset($_GET['kata_campuran'])){
						$kode_surat = $_GET['kata_campuran'];
						$no_surat = $_GET['kata_campuran'];
						$no_disposisi = $_GET['kata_campuran'];
						$dari = $_GET['kata_campuran'];
						$data = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk as tb_sm INNER JOIN tb_surat as tb_s on tb_sm.id_surat = tb_s.id_surat INNER JOIN tb_jenis as tb_j on tb_sm.jenis = tb_j.jenis WHERE id_surat_masuk LIKE '%".$kode_surat."%' OR no_surat LIKE '%".$no_surat."%' OR no_disposisi LIKE '%".$no_disposisi."%' OR dari LIKE '%".$dari."%'");			
					}else{
						$data = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk as tb_sm INNER JOIN tb_surat as tb_s on tb_sm.id_surat = tb_s.id_surat INNER JOIN tb_jenis as tb_j on tb_sm.jenis = tb_j.jenis ");				
					}
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
								<td>
									<a href="detail.php?id=<?= $value['id_surat_masuk']; ?>"><button class="btn btn-warning">Selengkapnya</button></a>
									<?php
									@session_start(); 
									if (@$_SESSION['role'] == "Admin"): ?>	
										<a href="hapus.php?id=<?= $value['id_surat_masuk']; ?>"><button class="btn btn-warning">Hapus</button></a>
									<?php endif ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php include '../../layout/footer.php' ?>