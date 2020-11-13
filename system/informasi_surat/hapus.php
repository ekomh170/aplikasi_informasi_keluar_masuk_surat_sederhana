<?php 
include '../../config/akses_block.php';
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_surat WHERE id_surat='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Surat Berhasil Dihapus');
document.location.href = 'index.php';
</script>";

?>