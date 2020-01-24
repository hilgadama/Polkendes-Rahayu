<?php
include "koneksi.php";

$id_obat=$_GET["id_obat"];
mysql_query("delete from obat where id_obat=$id_obat")
or die (mysql_error());

header("location:?view=data_obat");
?>