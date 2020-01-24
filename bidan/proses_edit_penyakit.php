<?php
include "koneksi.php";

$id_datadx=$_POST["id_datadx"];
$nama_penyakit=$_POST["nama_penyakit"];
mysql_query("UPDATE datadx SET id_datadx='$id_datadx', nama_penyakit='$nama_penyakit' WHERE id_datadx='$id_datadx'")or die(mysql_error());

header("location:?view=data_penyakit");

?>