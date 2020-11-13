<?php 
include '../../../config/koneksi.php';
$jumlah_data = mysqli_query($koneksi, "SELECT * FROM tb_surat_masuk");
$data = mysqli_num_rows($jumlah_data);

//Data INSERT
$id_surat_masuk = "SRT-MSK"."-".$data;
//Data INSERT

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_surat WHERE id_surat=$id") or die(mysqli_error($koneksi));
$row = mysqli_fetch_assoc($data);

//Data INSERT
$id_surat = $row['id_surat'];
$jenis = "SURAT MASUK";
//Data INSERT

$tsm = mysqli_query($koneksi, "SELECT * FROM tb_surat_masuk where id_surat='$id'");
$tsk = mysqli_query($koneksi, "SELECT * FROM tb_surat_keluar where id_surat='$id'");
$d   = mysqli_fetch_array($tsm);
$d2  = mysqli_fetch_array($tsk);

if ($d['id_surat'] == $id_surat) {
	echo "Surat Sudah Ada!!";
	die;
}

mysqli_query($koneksi, "INSERT INTO tb_surat_masuk VALUES('$id_surat_masuk', '$id_surat', '$jenis')") or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Berhasil DiTambahkan');
document.location.href = '../../surat_masuk/index.php';
</script>";

?>