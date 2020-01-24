<?php
include "koneksi.php";

$id_pekerjaan=$_POST["id_pekerjaan"];
$nama_pekerjaan=$_POST["nama_pekerjaan"];
mysql_query("UPDATE pekerjaan SET id_pekerjaan='$id_pekerjaan', nama_pekerjaan='$nama_pekerjaan' WHERE id_pekerjaan='$id_pekerjaan'")or die(mysql_error());

header("location:?view=data_pekerjaan");

?>