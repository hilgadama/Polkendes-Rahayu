<script src="assets"></script>
<script type="text/javascript">

</script>
<style type="text/css">
	.pasien-form-container {
		display: inline-block;
		width: 80%;
		padding-top: 100px;
		padding-left: 25%;
		text-align: center;
	}
	.pasien-form-content{
		text-align: left;
		margin:auto ;	
		width: 80%;
		padding: 5% 15%;
		background-color: #d7e0e3;
  		box-shadow: 5px 10px #888888;
  		margin-bottom: 40px;
  		border-radius: 10px;
	}
	.title{
		font-weight: 600;
		font-size: 20px;
	}
	.table-row{
		height: 35px;
		color: #919191;
		font-weight: 500;
	}
	.button-form{
		width: 100%;
		text-align: center;
		margin-top: 10px;
		margin-right: -30px;
	}
	.button-submit{
		display: inline-block;
	    border-radius: 4px;
	    background-color: green;
	    border: none;
	    color: #FFFFFF;
	    text-align: center;
	    font-size: 16px;
	    padding: 7px;
	    width: 138px;
	    transition: all 0.5s;
	    cursor: pointer;
	    margin: 5px;
	}
	.button-submit2{
		display: inline-block;
	    border-radius: 4px;
	    background-color: red;
	    border: none;
	    color: #FFFFFF;
	    text-align: center;
	    font-size: 16px;
	    padding: 7px;
	    width: 138px;
	    transition: all 0.5s;
	    cursor: pointer;
	    margin: 5px;
	}
	.button-submit span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}
	.button-submit2 span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}
	.button-submit span:after {
	  content: '\00bb';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}
	.button-submit2 span:after {
	  content: '\26CC';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}

	.button-submit:hover span{
	  padding-right: 20px;
	}

	.button-submit2:hover span{
	  padding-right: 30px;
	}

	.button-submit:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	.button-submit2:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	
</style>

<div id="form" class="pasien-form-container">
	<span class="title">Input Data Pasien</span>
		<form action="?view=proses_input" method="post" class="pasien-form-content">
			<table width="100%">
				<tr class="table-row">
					<td>NIK</td>
					<td></td>
					<td><input type="number" name="nik" placeholder="NIK"></td>
				</tr>
				<tr class="table-row">
					<td>Nama Pasien</td>
					<td></td>
					<td><input type="text" name="nama_pasien" placeholder="Nama Lengkap" required=""></td>
				</tr>
				<tr class="table-row">
					<td>Tanggal Lahir</td>
					<td></td>
					<td><input type="date" name="tgl_lahir" required=""></td>
				</tr>
				<tr class="table-row">
					<td>No. Telepon</td>
					<td></td>
					<td><input type="number" name="no_telp" required="" placeholder="No. HP/Telepon"></td>
				</tr>
				<tr class="table-row">
					<td>Alamat</td>
					<td></td>
					<td><input type="text" name="alamat" required="" placeholder="Alamat saat ini"></td>
				</tr>
				<tr class="table-row">
					<td>Pekerjaan</td>
					<td></td>
					<td>
						<select style="width:190px;" name="pekerjaan">
							<option>-- Pilih Pekerjaan --</option>
							<?php
								$sql = mysql_query('SELECT * FROM pekerjaan ORDER BY nama_pekerjaan ASC;');
								if(mysql_num_rows($sql)>0){?>
									<?php while ($row = mysql_fetch_array($sql)) { ?>
										<option><?php echo $row['nama_pekerjaan'] ?></option>
									<?php } ?>
								<?php } ?>
							?>
						</select>
					</td>
				</tr>
				<tr class="table-row">
					<td>Nama Wali</td>
					<td></td>
					<td><input type="text" name="nama_wali" required="" placeholder="Ayah/Ibu"></td>
				</tr>
				<tr class="table-row">
					<td>Jenis Kelamin</td>
					<td></td>
					<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
						<input type="radio" name="jk" value="Perempuan">Perempuan</td>
				</tr>
				<tr class="table-row">
					<td>No KK</td>
					<td></td>
					<td>
					<input type="number" name="no_kk" ></td>
				</tr>
				<tr class="table-row">
					<td>No BPJS</td>
					<td></td>
					<td><input type="number" name="no_bpjs"></td>
				</tr>
			</table>
		<div class="button-form">
			<button class="button-submit2" type="reset" style="vertical-align:middle; width:110px;" ><span>Reset</span></button>

			<button class="button-submit" style="vertical-align:middle" ><span>Tambahkan</span></button>
		</div>
	</form>
</div>


