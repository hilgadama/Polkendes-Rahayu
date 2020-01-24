
<style type="text/css">
	#form{
		margin-left: 10px;
		margin-bottom: 30px;
		padding-top: 100px;
	}
	#form label{
		width: 60px;
		float:left;
	}
</style>
<div id="form">
<h3>Input Data</h3>


<form action="?view=proses_tambah_pekerjaan" method="post">
	<table>
		<tr>
			<td>Id Pekerjaan</td>
			<td>:</td>
			<td><?php
			$sql = mysql_query('SELECT * FROM pekerjaan ORDER BY id_pekerjaan DESC LIMIT 1;');
								if(mysql_num_rows($sql)>0){?>
									<?php while ($row = mysql_fetch_array($sql)) { 
										$id = $row[0];
										$tot = $id;
										$tot++;
										?>
										<input type="text" name="id_pekerjaan" disabled="disable" value=<?php echo $tot ?> >
									<?php } ?>
								<?php } ?>
							
				</td>
		</tr>
		<tr>
			<td>Nama Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="nama_pekerjaan" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="Tambahkan" />
				<input type="reset" name="Reset" />
			</td>
		</tr>
	</table>
</form>
</div>
