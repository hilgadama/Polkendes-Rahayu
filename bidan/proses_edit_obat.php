<?php
include "koneksi.php";

$id_obat=$_POST["id_obat"];
$nama_obat=$_POST["nama_obat"];
$stok=$_POST["stok"];
mysql_query("UPDATE obat SET id_obat='$id_obat', nama_obat='$nama_obat', stok='$stok' WHERE id_obat='$id_obat'")or die(mysql_error());

header("location:?view=data_obat");

?>