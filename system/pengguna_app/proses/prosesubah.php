<?php 
if ($_POST['submit']) {

	include '../../../config/koneksi.php';
	$id = $_POST['id'];
	$email = $_POST['email'];
	$data_pass = $_POST['password'];
	$role = $_POST['role'];
	$password = md5($data_pass);

	if ($email == null && $password = null && $data_pass == null && $role == null) {
		echo "Form Harus Di isi!!";
	}

	mysqli_query($koneksi,"UPDATE tb_login SET id ='$id', email='$email', password='$password', role='$role' WHERE id='$id'") or die(mysqli_error($koneksi));

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