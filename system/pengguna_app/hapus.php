<?php 
include '../../config/akses_block.php';
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_login WHERE id='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Pengguna Apps Berhasil Dihapus');
document.location.href = 'index.php';
</script>";

?>