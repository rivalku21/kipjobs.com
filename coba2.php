<?php
$kalimat = $_POST['coba'];
$kunci = $_POST['kunci'];
$point= $_POST['point'];
$kunci1 = $_POST['kunci1'];
$point1= $_POST['point1'];

$kata_2 = explode("$kunci", $kalimat);
$hasil_2 = count($kata_2);
$hasil_3 = ($hasil_2 - 1) * $point;

$kata1_2 = explode("$kunci1", $kalimat);
$hasil1_2 = count($kata1_2);
$hasil1_3  = ($hasil1_2 - 1) * $point1;

$total = $hasil_3 + $hasil1_3;

if(preg_match("/$kunci/i", $kalimat)) {
  echo "Ketemu <hr>";
  echo "$kalimat <hr>";
  echo "nilai : $total point";
} else {
  echo 'Tidak Ketemu';
}
?>