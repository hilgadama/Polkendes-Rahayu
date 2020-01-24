<?php
	include "koneksi.php";
	
	$nik=$_GET["nik"];
	$query="SELECT * from dtpasien where nik='$nik'";
	$result=mysql_query($query);
	if(mysql_num_rows($result)){
		$row=mysql_fetch_array($result);
	}
	
?>
<h1 style="padding-top:100px; padding-left:15%;">PROFIL PASIEN <b><?php echo $row['nama_pasien']; ?></b>
</h1>
<div style="padding-top:10px; padding-left:45%; padding-bottom:100px;">
	<table border="1px">
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $row['nik']; ?></td>
	</tr>
	<tr>
		<td>Nama Pasien</td>
		<td>:</td>
		<td><?php echo $row['nama_pasien']; ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $row['tgl_lahir']; ?></td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td>:</td>
		<td><?php echo $row['no_telp']; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $row['alamat']; ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $row['pekerjaan']; ?></td>
	</tr>
	<tr>
		<td>Nama Wali</td>
		<td>:</td>
		<td><?php echo $row['nama_wali']; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $row['jk']; ?></td>
	</tr>
	<tr>
		<td>Nomor KK</td>
		<td>:</td>
		<td><?php echo $row['no_kk']; ?></td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td>:</td>
		<td><?php echo $row['no_bpjs']; ?></td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
	</table>

	
</div>
