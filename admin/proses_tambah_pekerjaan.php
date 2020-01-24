<?php
include "koneksi.php";

$id_pekerjaan=$_POST["id_pekerjaan"];
$nama_pekerjaan=$_POST["nama_pekerjaan"];

mysql_query("insert into pekerjaan values ('$id_pekerjaan', '$nama_pekerjaan')")
or die (mysql_error());
header("location:?view=data_pekerjaan");
?>