<?php 
	session_start();
	unset($_SESSION['id_user']);
	unset($_SESSION['username']);

	session_destroy();
	echo "<script>document.location='index.php';
	</script>";
?>