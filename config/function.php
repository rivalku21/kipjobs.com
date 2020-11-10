<?php 

function upload() {
	$namafile = $_FILES['user_photo']['name'];
	$ukuranfile = $_FILES['user_photo']['size'];
	$error = $_FILES['user_photo']['error'];
	$tmpname = $_FILES['user_photo']['tmp_name'];

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
};

  if (isset($_POST['user_photo'])) 
    {
        $user_photo = upload();
        $simpan = mysqli_query($koneksi, "INSERT INTO tbl_user VALUES ('',
                                                                       '',
                                                                       '',
                                                                       '',
                                                                       '',
                                                                       '',
                                                                       '',
                                                                       '$user_photo'
                                                                        )" );
    }

?>