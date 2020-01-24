<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>
  
<h1 style="text-align: center;">Data Pasien</h1>
<table border="1" width="10%" style="padding-left:60px;">
<tr>
  <th>No</th>
  <th>NIK</th>
  <th>Nama Pasien</th>
  <th>Tanggal Lahir</th>
  <th>Nomor Telepon</th>
  <th>Alamat </th>
  <th>Pekerjaan </th>
  <th>Nama Wali </th>
  <th>Jenis Kelamin </th>
  <th>Nomor KK </th>
  <th>Nomor BPJS </th>
</tr>
<?php
// Load file koneksi.php
include "koneksi.php";
 
$query = "SELECT * FROM dtpasien"; // Tampilkan semua data gambar
$sql = mysql_query("select * from dtpasien"); // Eksekusi/Jalankan query dari variabel $query
$row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
	$nomor=0;
    while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    	$nomor++;
        echo "<tr>";
        echo "<td width='30px'>".$nomor."</td>";
        echo "<td width='80px'>".$data['nik']."</td>";
        echo "<td width='80px'>".$data['nama_pasien']."</td>";
        echo "<td width='80px'>".$data['tgl_lahir']."</td>";
        echo "<td width='80px'>".$data['no_telp']."</td>";
        echo "<td width='80px'>".$data['alamat']."</td>";
        echo "<td width='80px'>".$data['pekerjaan']."</td>";
        echo "<td width='80px'>".$data['nama_wali']."</td>";
        echo "<td width='80px'>".$data['jk']."</td>";
        echo "<td width='80px'>".$data['no_kk']."</td>";
        echo "<td width='80px'>".$data['no_bpjs']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Pasien.pdf', 'D');
?>