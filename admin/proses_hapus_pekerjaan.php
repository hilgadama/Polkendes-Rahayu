<?php
include "koneksi.php";

$id_pekerjaan=$_GET["id_pekerjaan"];
mysql_query("delete from pekerjaan where id_pekerjaan=$id_pekerjaan")
or die (mysql_error());

header("location:?view=data_pekerjaan");
?>