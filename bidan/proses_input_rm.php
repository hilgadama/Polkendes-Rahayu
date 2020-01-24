<?php
include "koneksi.php";

	$nik=$_POST["nik"];
	//$nik=$_GET["nik"];
	

	$id_obat_keluar=$_POST["id_obat_keluar"];
	$tanggal=$_POST["tanggal"];
	$t_darah=$_POST["t_darah"];
	$b_badan=$_POST["b_badan"];
	$t_badan=$_POST["t_badan"];
	$anamnese=$_POST["anamnese"];
	$dx=$_POST["dx"];
	$tx=$_POST["tx"];

	mysql_query("insert into rmpasien values ('','$nik','$tanggal','$t_darah', '$b_badan', '$t_badan', '$anamnese', '$dx','$tx')") or die (mysql_error());
	header("location:?view=form_periksa&nik=".+$nik);

?>