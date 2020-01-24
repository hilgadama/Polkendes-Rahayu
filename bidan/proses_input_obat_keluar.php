<?php
include "koneksi.php";

	$nik=$_POST["nik"];
	//$nik=$_GET["nik"];
	$id_obat=$_POST["id_obat"];
	$nik=$_POST["nik"];
	$tanggal=$_POST["tanggal"];
	$jumlah=$_POST["jumlah"];

	$query="SELECT * FROM obat WHERE id_obat='$id_obat'";
	$result=mysql_query($query);
	if (mysql_num_rows($result)) {
	$row=mysql_fetch_array($result);
	$stok=$row['stok'];
	$sisa=$stok-$jumlah;
	mysql_query("insert into obat_keluar values ('','$id_obat','$jumlah', '$nik','$tanggal')") or die (mysql_error());
	mysql_query("UPDATE obat SET stok='$sisa' WHERE id_obat='$id_obat'")or die(mysql_error());
	
	header("location:?view=form_periksa&nik=".+$nik);
}
?>