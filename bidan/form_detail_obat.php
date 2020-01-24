<?php
	$nik=$_GET['nik'];
	$queryy="SELECT * FROM dtpasien where nik='$nik' ";
	$resultt=mysql_query($queryy);
	if (mysql_num_rows($resultt)) {
	$roww=mysql_fetch_array($resultt);

	$query="SELECT * FROM rmpasien WHERE nik='$nik'";
	$result=mysql_query($query);
    if (mysql_num_rows($result)) 
    $row=mysql_fetch_array($result);

	$datenow=date('Y-m-d');
?>
<script type="text/javascript">
 function kembali(){
        document.location="?view=form_periksa&nik="+nik;
    }
    </script>

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post">
				<span class="contact100-form-title">
					Data Detail Obat
				</span>
				<table>
					<tr>
						<td><h4> NIK</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['nik']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Tanggal Periksa</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $datenow; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Tensi Darah</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['t_darah']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Berat Badan</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['b_badan']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Tinggi Badan</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['t_badan']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Anamnese</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['anamnese']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Diagnosis (DX) </h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['dx']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Penanganan (TX) </h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php echo $row['tx']; ?></h4></td>
					</tr>
					<tr>
						<td><h4> Obat </h4></td>
						<td>&nbsp; &nbsp;</td>
						<td><h4> : </h4></td>
						<td>&nbsp; &nbsp; &nbsp;</td>
						<td><h4><?php
                                        $queryyy="SELECT * from obat_keluar inner join obat on obat.id_obat=obat_keluar.id_obat where obat_keluar.nik='$nik' and obat_keluar.tanggal='$datenow'";
                                        $resulttt=mysql_query($queryyy);
                                        if (mysql_num_rows($resulttt)) 
                                            while ($rowww=mysql_fetch_array($resulttt)) {       
                                            	echo $rowww['nama_obat'];
                                            	echo "<br>";
                                            }
                                    ?>
                                    	
                                    </h4></td>
					</tr>
					<tr><td>&nbsp; &nbsp; &nbsp;</td></tr>
					<tr>
					<td rowspan="2" align="center">
						<td>
			<button class="contact100-form-btn" type="kembali" >
			<a href="javascript:history.back()">
					Kembali
						
						</a>
						
					</button>
					</td></tr>
				</table>
				
	</form>
</div>
<?php
}
?>
</div>