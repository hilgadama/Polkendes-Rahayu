<?php
	$nik=$_GET['nik'];
	$query="SELECT * FROM dtpasien where nik='$nik' ";
	$result=mysql_query($query);
	if (mysql_num_rows($result)) {
	$row=mysql_fetch_array($result); 	
	$datenow=date('Y-m-d');
?>
<script type="text/javascript">
    function detail(nik){
        document.location="?view=form_detail_obat&nik="+nik;
    }
</script>

<style>
	.ojo{
			color: black;
			font-family: arial;
			font-weight: bold;

		}
	.ojo input{
		background-color: #1be293;
	}
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
		padding-top:30px; 
		background-color: #1be293;
  		box-shadow: 5px 10px #888888;
  		margin-bottom: 40px;
  		border-radius: 10px;

	}
</style>
<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="?view=proses_input_rm" method="post">
				<span class="contact100-form-title">
					<h1><b>FORMULIR REKAM MEDIS</h1>
					<p>----------------------</p>
				</span>
				<div class="pasien-form-content">
					<table style="margin-left:160px;" width="0%" class="ojo">
					<tr>
						<td style="padding-bottom:30px"><h4> NIK</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						<td style="padding-bottom:30px" class="ojo"><input id="tanggal" type="text" name="nik" value="<?php echo $row['nik'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> Nama</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>

						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="nama_pasien" value="<?php echo $row['nama_pasien'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> Tanggal Lahir</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
		
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> No . Telepon</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="no_telp" value="<?php echo $row['no_telp'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> Alamat</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="alamat" value="<?php echo $row['alamat'] ?>"></textarea></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> Pekerjaan</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="pekerjaan" value="<?php echo $row['pekerjaan'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> Jenis Kelamin</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="jk" value="<?php echo $row['jk'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> Nama Wali</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="nama_wali" value="<?php echo $row['nama_wali'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> No KK</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="no_kk" value="<?php echo $row['no_kk'] ?>"></td>
					</tr>
					<tr>
						<td style="padding-bottom:30px"><h4> No BPJS</h4></td>
						<td>&nbsp; &nbsp;</td>
						<td style="padding-bottom:30px"><h4> : </h4></td>
						
						<td style="padding-bottom:30px"><input id="tanggal" type="text" name="no_bpjs" value="<?php echo $row['no_bpjs'] ?>"></td>
					</tr>
					<tr> <td>&nbsp; &nbsp;</td> <td>&nbsp; &nbsp;</td> </tr>
				</table>
				</div>

			<!---Form Periksa-->
			<br/><br/>
				<form class="contact100-form validate-form" action="?view=proses_input_rm" method="post">
				<label class="label-input100" for="tanggal" > Tanggal Pemeriksaan </label>
				<div class="wrap-input100">
					<input id="tanggal" class="input100" disabled="disable" style="background-color:lightgrey;" type="text" name="tanggal" value="<?php echo $datenow; ?>">
					<span class="focus-input100"></span>
				</div>


				<table width="100%">
					<tr>
						<td>
						<label class="label-input100" for="t_darah">Tensi Darah</label>
				<div class="wrap-input100">
					<input id="t_darah" class="input100" type="text" name="t_darah" placeholder="Tensi Darah">
					<span class="focus-input100"></span>
				</div>
						</td>
						<td>
							<label class="label-input100" for="b_badan">Berat Badan</label>
				<div class="wrap-input100">
					<input id="no_bpjs" class="input100" type="text" name="b_badan" placeholder="Berat Badan (Kg)" >
					<span class="focus-input100"></span>
				</div>	
						</td>
						<td>
						<label class="label-input100" for="t_badan">Tinggi Badan</label>
				<div class="wrap-input100">
					<input id="t_badan" class="input100" type="text" name="t_badan" placeholder="Tinggi Badan (cm)" >
					<span class="focus-input100"></span>
				</div>	
						</td>

					</tr>
				</table>


				<label class="label-input100" for="anamnese">Anamnese</label>
				<div class="wrap-input100">
					<textarea id="anamnese" class="input100" name="anamnese" placeholder="Masukkan Data Keluhan Pasien"></textarea>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">DX</label>
				<div class="wrap-input100">
					<select class="opsi" style="width:100%;" name="dx">
							<option class="label-input100" >-- Pilih Penyakit --</option>
							<?php
						$sql = mysql_query('SELECT * FROM datadx ORDER BY nama_penyakit ASC;');
							if(mysql_num_rows($sql)>0){?>
								<?php while ($row = mysql_fetch_array($sql)) { ?>
									<option><?php echo $row['nama_penyakit'] ?></option>
								<?php } ?>
							<?php } ?>
					?>
					</select>
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="tx">TX</label>
				<div class="wrap-input100">
					<textarea id="tx" class="input100" name="tx" placeholder="Masukkan Data Penanganan Pasien"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn a" type="reset">
						<span>
							Reset
							<i class="zmdi zmdi-arrow-left m-l-8"></i>
						</span>
					</button>

					<button class="contact100-form-btn" type="submit">
						<span>
							Simpan
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
							</a>
						</span>
					</button>
					<br>
					</div>
			</form>
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			<form method="post" action="?view=proses_input_obat_keluar">
			<label class="label-input100" for="phone">Nama Obat</label>
				<div class="wrap-input100">
					<select class="opsi" style="width:100%;" name="id_obat">
							<option class="label-input100">-- Nama Obat --</option>
							 <?php
					$sql = mysql_query('SELECT * FROM obat where stok!=0');
					if(mysql_num_rows($sql)){
						 while ($roww = mysql_fetch_array($sql)) {
				?>
							<option value="<?php echo $roww['id_obat']?>"><?php echo $roww['nama_obat']?></option>
							
					<?php }} ?>
				?>
			</select>
			<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="tanggal"> Jumlah </label>
				<div class="wrap-input100">
					<input id="tanggal" class="input100" type="text" name="jumlah" placeholder=" Per butir/per botol">
					<span class="focus-input100"></span>
				</div>

		<div class="form-group col-md-4 mb-3">
  			<input type="hidden" class="form-control" placeholder=" nik" id="no_ktp" size="16" name="nik" value="<?php echo $nik; ?>">
		</div>

		<div class="form-group col-md-2 mb-3">
  			<input type="hidden" class="form-control" placeholder="tanggal" id="usia" name="tanggal" value="<?php echo $datenow; ?>">
		</div>
		<br>
		<button class="contact100-form-btn">
			<span>
					Tambahkan
						<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</a>
						</span>
					</button>

		</form>

	<br><br>
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example table-wrapper-scroll-y my-custom-scrollbar">
		<thead>
			<tr class="table100-head">
				<th class="column1">No</th>
				<th class="column2">Nama Obat</th>
				<th class="column3">Jumlah</th>
			</tr>
		</thead>
		<?php
            $query="SELECT * FROM obat INNER JOIN obat_keluar ON obat_keluar.id_obat=obat.id_obat WHERE obat_keluar.nik='$nik' and tanggal='$datenow'";
            $result=mysql_query($query);
            if (mysql_num_rows($result)) {
            	$no=0;
                while ($row=mysql_fetch_array($result)) {
                    $no++;
        ?>
        <tr class="odd gradeX">                                        
            <td style="text-align: center;"><?php echo $no; ?></td>
            <td><?php echo $row['nama_obat'];?></td>         
            <td><?php echo $row['jumlah']; ?></td>
            
        </tr>
        <?php
            	}
            }
        ?>
	</table>

		</div>
		</form>
	</div>
</div>
 
	</form>
	
	<form method="post" action="?view=proses_obat">
		<div class="form-group col-md-4 mb-3">
			
  			<input type="hidden" class="form-control" placeholder=" nik" id="no_ktp" size="16" name="nik" value="<?php echo $row['nik']; ?>">
		</div>
		 
	</form>
</div>

<!--ISI TABEL REKAM MEDIS PASIEN-->

<div style="padding: 0 30px; position: inherit;">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg -12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <table width="100%" class="table table-striped table-bordered table-hover table-wrapper-scroll-y my-custom-scrollbar" id="dataTables-example">
                                <thead>                                    
                                    <tr>
                                        <th width="6%">No</th>
                                        <th>NIK</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Tensi Darah</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Anamnese</th>
                                        <th>Diagnosis (DX)</th>
                                        <th>Penanganan (tx)</th>
                                        <th>obat</th><!--obat keluar-->             
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * FROM rmpasien WHERE nik='$nik'";
                                        $result=mysql_query($query);
                                        if (mysql_num_rows($result)) {
                                            $no=0;
                                            while ($row=mysql_fetch_array($result)) {
                                            $no++;
                                    ?>	
                                    <tr class="odd gradeX">                                        
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $row['nik'];?></td>         
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['t_darah']; ?></td>
                                        <td><?php echo $row['b_badan']; ?></td>
                                        <td><?php echo $row['t_badan']; ?></td> 
                                        <td><?php echo $row['anamnese']; ?></td>
                                        <td><?php echo $row['dx']; ?></td> 
                                        <td><?php echo $row['tx']; ?></td>
                                        <td>
											 <button type="button" class="btn btn-default btn-sm" onclick="detail(<?php echo "$row[nik]"; ?>)">
                                                <span></span> Detail 
                                            </button>             
                                        </td>
                                        
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>                                                                
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        </form>
        </div>    

<?php
}
?>