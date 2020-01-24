<?php
include "koneksi.php";

$id_datadx=$_POST["id_datadx"];
$nama_penyakit=$_POST["nama_penyakit"];
$cek = mysql_num_rows(mysql_query("SELECT * FROM datadx WHERE nama_penyakit='$nama_penyakit'"));
    if ($cek > 0){
    echo "<script>window.alert('nama penyakit yang anda masukan sudah ada')
    window.location='?view=data_penyakit'</script>";
    }else {
mysql_query("insert into datadx values ('$id_datadx', '$nama_penyakit')")
or die (mysql_error());
header("location:?view=data_penyakit");
}
?>