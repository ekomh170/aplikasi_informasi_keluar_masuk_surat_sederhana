<?php 

if ($_POST['submit']) {
	
	include '../../../config/koneksi.php';
	
	$no_surat = $_POST['no_surat'];
	$no_disposisi = $_POST['no_disposisi'];
	$dari = $_POST['dari'];
	$perihal = $_POST['perihal'];
	$kepada = $_POST['kepada'];
	$tanggal_surat = $_POST['tanggal_surat'];
	$tanggal_terima = $_POST['tanggal_terima'];
	$isi = $_POST['isi'];
	$kategori = $_POST['kategori'];
	$klasifikasi = $_POST['klasifikasi'];
	$derajat = $_POST['derajat'];
	$aksi = $_POST['aksi'];

	if ($no_surat == null && $no_disposisi = null && $dari = null && $perihal = null && $kepada = null && $tanggal_surat = null && $tanggal_terima = null && $isi = null && $kategori = null && $derajat = null && $aksi = null ) {
		echo "Form Harus Di isi!!";
	}
	
	$data = mysqli_query($koneksi,"INSERT INTO tb_surat VALUES('', '$no_surat', '$no_disposisi', '$dari', '$perihal', '$kepada', '$tanggal_surat', '$tanggal_terima', '$isi', '$kategori', '$klasifikasi', '$derajat', '$aksi')") or die(mysqli_error($koneksi));

	echo "
	<script>
	alert('Data Berhasil DiTambahkan');
	document.location.href = '../index.php';
	</script>";

} else {
	echo "
	<script>
	alert('Anda Terdeteksi Ingin Merusak System');
	document.location.href = '../index.php';
	</script>";
}

?>