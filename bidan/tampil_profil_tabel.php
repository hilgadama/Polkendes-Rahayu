<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include "koneksi.php";
    $nik=$_GET['nik'];
    $query="SELECT * FROM dtpasien where nik='$nik'";
    $result=mysql_query($query);
    if (mysql_num_rows($result)) {   
    $row=mysql_fetch_array($result);
?> 
<div style="padding-top:100px;">
	<table>
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
	
	</table>
</div>
<?php
}
?>