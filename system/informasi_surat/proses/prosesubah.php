<?php 
if ($_POST['submit']) {

	include '../../../config/koneksi.php';
	$id_surat = $_POST['id_surat'];
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

	if ($id_surat == null && $no_surat == null && $no_disposisi = null && $dari = null && $perihal = null && $kepada = null && $tanggal_surat = null && $tanggal_terima = null && $isi = null && $kategori = null && $klasifikasi = null && $derajat = null && $aksi = null ) {
		echo "Form Harus Di isi!!";
	}

	mysqli_query($koneksi,"UPDATE tb_surat SET id_surat ='$id_surat', no_surat='$no_surat', no_disposisi='$no_disposisi', dari='$dari', perihal='$perihal', kepada='$kepada', tanggal_surat='$tanggal_surat', tanggal_terima='$tanggal_terima', isi='$isi', kategori='$kategori', klasifikasi='$klasifikasi', derajat='$derajat', aksi='$aksi' WHERE id_surat='$id_surat'") or die(mysqli_error($koneksi));

	echo "
	<script>
	alert('Data Berhasil DiUbah');
	document.location.href = '../index.php';
	</script>";
}
echo "
<script>
alert('Anda Terdeteksi Ingin Merusak System');
document.location.href = '../index.php';
</script>";

?>