<?php 
	session_start();
	include "config/koneksi.php";

	@$pass = md5($_POST['password']);

@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);

$login = mysqli_query($koneksi, "SELECT * from tbl_user
								WHERE username = '$username' and password = '$password' ");

$data = mysqli_fetch_array($login);
if ($data) {
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	header('location:admin.php?page=home');
}
else {
	echo "<script> alert('Make sure the Username and Password are Correct');
	document.location='index.php';
	</script>";
}

?>