<?php
include "koneksi.php";

$nik=$_GET["nik"];
mysql_query("delete from dtpasien where nik=$nik")
or die (mysql_error());

header("location:?view=data_pasien");
?>