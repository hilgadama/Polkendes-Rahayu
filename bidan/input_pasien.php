
	<link rel="stylesheet" type="text/css" href="css/inpututil.css">
	<link rel="stylesheet" type="text/css" href="css/inputmain.css">
	<style type="text/css">
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
	.contact100-form-btn{
		background-color: green;
	}
	.contact100-form-btn2{
		background-color: red;
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
	.button-submit span, .contact100-form-btn span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}
	.button-submit2 span, .contact100-form-btn2 span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}
	.button-submit span:after, .contact100-form-btn span:after{
	  content: '\00bb';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}
	.button-submit2 span:after, .contact100-form-btn2 span:after {
	  content: '\26CC';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}

	.button-submit:hover span, .contact100-form-btn:hover span{
	  padding-right: 20px;
	}

	.button-submit2:hover span, .contact100-form-btn2:hover span{
	  padding-right: 30px;
	}

	.button-submit:hover span:after, .contact100-form-btn:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	.button-submit2:hover span:after, .contact100-form-btn2:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	</style>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="?view=proses_input" method="post">
				<span class="contact100-form-title">
					Form Input Data Pasien
				</span>
				<table width="100%">
					<tr>
						<td><label class="label-input100 " for="first-name">NIK</label>
				<div class="wrap-input100 rs1">
					<input id="first-name" class="input100" type="text" name="nik" placeholder="NIK" required="">
					<span class="focus-input100"></span>
				</div></td>
				<td>
					<label class="label-input100" for="nama" >Nama Pasien</label>
				<div class="wrap-input100 rs1">
					<input id="nama" class="input100" type="text" name="nama_pasien" placeholder="Nama Lengkap" required="">
					<span class="focus-input100"></span>
				</div>
				</td>
					</tr>
				</table>

				<label class="label-input100" for="email">Tanggal Lahir</label>
				<div class="wrap-input100">
					<input id="email" class="input100" type="date" name="tgl_lahir" required="">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Nomor Telepon</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="number" name="no_telp" placeholder="Nomor Telepon" required="">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Alamat</label>
				<div class="wrap-input100">
					<textarea id="message" class="input100" name="alamat" placeholder="Alamat Saat Ini" required=""></textarea>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Pekerjaan</label>
				<div class="wrap-input100">
					<select class="opsi" style="width:100%;" name="pekerjaan">
							<option class="label-input100">-- Pilih Pekerjaan --</option>
							<?php
								$sql = mysql_query('SELECT * FROM pekerjaan ORDER BY nama_pekerjaan ASC;');
								if(mysql_num_rows($sql)>0){?>
									<?php while ($row = mysql_fetch_array($sql)) { ?>
										<option><?php echo $row['nama_pekerjaan'] ?></option>
									<?php } ?>
								<?php } ?>
							?>
						</select>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="first-name">Nama Wali</label>
				<div class="wrap-input100 rs1">
					<input class="input100" type="text" name="nama_wali" placeholder="Nama Lengkap Orang Tua / Wali">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="jk">Jenis Kelamin</label>
				<div class="">
					<input id="jk" class="" type="radio" name="jk" value="Laki-Laki"  required=""> Laki-Laki
					<input id="phone" class="" type="radio" name="jk" value="Perempuan" required=""> Perempuan
					<span class="focus-input100"></span>
				</div>
				<br><br>

				<table width="100%">
					<tr>
						<td>
							<label class="label-input100" for="first-name">Nomor KK</label>
				<div class="wrap-input100 rs1">
					<input id="first-name" class="input100" type="number" name="no_kk" placeholder="Nomor Kartu Keluarga">
					<span class="focus-input100"></span>
				</div>
						</td>
						<td>
							<label class="label-input100" for="first-name">Nomor BPJS</label>
				<div class="wrap-input100 rs1">
					<input id="first-name" class="input100" type="number" name="no_bpjs" placeholder="Nomor BPJS">
					<span class="focus-input100"></span>
				</div>
						</td>
					</tr>

				</table>

				<div class="container-contact100-form-btn">
					<button class="button-submit2" type="reset">
						<span>
							Reset
							<i class="zmdi zmdi-arrow-left m-l-8"></i>
						</span>
					</button>

					<button class="contact100-form-btn" style="margin-left:60px;">
						<span>
							Tambahkan
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
