<?php
  
function uploadphoto() {
  	$namafile = $_FILES['userupload']['name'];
	$ukuranfile = $_FILES['userupload']['size'];
	$error = $_FILES['userupload']['error'];
	$tmpname = $_FILES['userupload']['tmp_name'];

	$eksfilevalid = ['jpg', 'jpeg', 'png'];
	$eksfile = explode('.', $namafile);
	$eksfile = strtolower(end($eksfile));

	if (!in_array($eksfile, $eksfilevalid)) {
		echo "<script> alert('File Yang Anda upload Salah..!') </script>";
		return false;
	}
	if ($ukuranfile > 2000000) {
		echo "<script> alert('Ukuran File Anda Lebih Dari 2 Mb..!')</script>";
		return false;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $eksfile;

	move_uploaded_file($tmpname, 'file/'.$namafilebaru);
	return $namafilebaru;
}
?>