<?php
include "koneksi.php";

$nik=$_POST["nik"];
$nama_pasien=$_POST["nama_pasien"];
$tgl_lahir=$_POST["tgl_lahir"];
$no_telp=$_POST["no_telp"];
$alamat=$_POST["alamat"];
$pekerjaan=$_POST["pekerjaan"];
$nama_wali=$_POST["nama_wali"];
$jk=$_POST["jk"];
$no_kk=$_POST["no_kk"];
$no_bpjs=$_POST["no_bpjs"];
mysql_query("UPDATE dtpasien SET nik='$nik', nama_pasien='$nama_pasien', tgl_lahir='$tgl_lahir', no_telp='$no_telp', alamat='$alamat', pekerjaan='$pekerjaan', nama_wali='$nama_wali', jk='$jk', no_kk='$no_kk', no_bpjs='$no_bpjs' WHERE nik='$nik'")or die(mysql_error());

header("location:?view=data_pasien");

?>