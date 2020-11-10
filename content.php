<?php 

	$page = $_GET['page'];

	if($page == "messege"){
		include "template/header.php";

		include "modul/kependudukan/kependudukan.php";
	}
	elseif ($page == "profil") {
		include "template/header.php";
		if (@$_GET['why'] == "edit" 
			// || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus"
	) {
			include "modul/profil/editprofil.php";
		}
		else {
			include "modul/profil/profil.php";
		}
	}
	elseif ($page == "setting") {
		include "template/header.php";
		if (@$_GET['hal'] == "tambahbaru" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus") {
			include "modul/pembangunan/form1.php";
		}
		else {
			include "modul/pembangunan/pembangunan.php";
		}
	}
	else {
		if (@$_GET['next'] == "make-form") {
			include "template/header.php";

			include "modul/form/index.html";
		}
		else {
			include "web1.php";
		}
	}

?>