<?php
include "koneksi.php";

$id_datadx=$_GET["id_datadx"];
mysql_query("delete from datadx where id_datadx=$id_datadx")
or die (mysql_error());

header("location:?view=data_penyakit");
?>