<?php
include "koneksi.php";

$id_login=$_GET["id_login"];
mysql_query("delete from login where id_login=$id_login")
or die (mysql_error());

header("location:?view=data_bidan");
?>