<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Pasien.xls");
?>

<h3>Data Siswa</h3>
    
<table border="1" cellpadding="5">
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
  
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM dtpasien");
  $sql->execute(); // Eksekusi querynya
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$nomor."</td>";
        echo "<td>".$data['nik']."</td>";
        echo "<td>".$data['nama_pasien']."</td>";
        echo "<td>".$data['tgl_lahir']."</td>";
        echo "<td>".$data['no_telp']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['pekerjaan']."</td>";
        echo "<td>".$data['nama_wali']."</td>";
        echo "<td>".$data['jk']."</td>";
        echo "<td>".$data['no_kk']."</td>";
        echo "<td>".$data['no_bpjs']."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>