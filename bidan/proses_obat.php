<?php
include "koneksi.php";

	$nik=$_POST["nik"];
	//$nik=$_GET["nik"];
	$id_obat=$_POST["id_obat"];
	$nik=$_POST["nik"];
	$tanggal=$_POST["tanggal"];
//	$jumlah=$_POST["jumlah"];

	$datenow=date('Y-m-d');
	$a= "SELECT * from rmpasien inner join obat_keluar on rmpasien.nik=obat_keluar.nik inner join obat on obat.id_obat=obat_keluar.id_obat where obat_keluar.nik='$nik' and obat_keluar.tanggal='$datenow'";
	$hasil=mysql_query($a);
	if (mysql_num_rows($hasil))
	while ($rew=mysql_fetch_array($hasil)){
		$b=$rew['nama_obat'];
		
	}
	
	mysql_query("UPDATE rmpasien SET id_obat='$rew' WHERE tanggal='$datenow'")or die(mysql_error());
	//echo $c;
	header("location:?view=form_periksa&nik=".+$nik);

?>