<?php
include "koneksi.php";

$id_obat=$_POST["id_obat"];
$nama_obat=$_POST["nama_obat"];
$stok=$_POST["stok"];
$cek = mysql_num_rows(mysql_query("SELECT * FROM obat WHERE nama_obat='$nama_obat' LIKE "));
    if ($cek > 0){
    echo "<script>window.alert('nama obat yang anda masukan sudah ada')
    window.location='?view=data_obat'</script>";
    }else {
mysql_query("insert into obat values ('', '$nama_obat', '$stok')")
or die (mysql_error());
header("location:?view=data_obat");
}
?>