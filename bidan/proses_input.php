<?php
	include "koneksi.php";

	$nik=$_POST["nik"];
	$nama=$_POST["nama_pasien"];
	$tgl=$_POST["tgl_lahir"];
	$no_telp=$_POST["no_telp"];
	$alamat=$_POST["alamat"];
	$pekerjaan=$_POST["pekerjaan"];
	$namawali=$_POST["nama_wali"];
	$jk=$_POST["jk"];
	$kk=$_POST["no_kk"];
	$bpjs=$_POST["no_bpjs"];

	mysql_query("insert into dtpasien values ('$nik','$nama', '$tgl','$pekerjaan', '$namawali', '$alamat', '$kk', '$bpjs','$jk','$no_telp')") or die (mysql_error());

	header("location:?view=form_periksa&nik=".+$nik);


?>