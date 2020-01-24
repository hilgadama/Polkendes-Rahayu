<?php
if (!isset($_SESSION)) {
  session_start();
}
$bidan=$_SESSION['bidan']['id_login'];
	$queri="SELECT * FROM login where id_login='$bidan'";
    $resulti=mysql_query($queri);
    if (mysql_num_rows($resulti)) {
    $rowi=mysql_fetch_array($resulti); 
?>

<div class="container">
        <div class="wrapper wow fadeInUp delay-05s">
        <div class="col-md-6">
            <h2 class="top-title">Selamat Datang</h2>
            <h4 class="title">Bidan <?php echo $rowi['username']; ?></h3>
            <h5 class="sub-title">Polkendes Dilem, Kecamatan Kepanjen</h5>
        </div>
        <div class="col-md-6">
          <img src="img/dokter.png" width="750px" class="gambar-dokter"> 
          <!--<p><?php echo "<img src='../images/".$rowi['foto_login']."' width='500' height='500'>"; ?><p>-->
        </div>
             
        </div>
      </div>
    </div>
  </header>

  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 wow fadeInLeft delay-05s">
          <div class="section-title">
            <h2 class="head-title">Features</h2>
            <hr class="botm-line">
            <p class="sec-para">Sistem Informasi Polkendes Rahayu Desa Dilem memuat data pasien beserta rekam medisnya.</p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="icon-text" >
              <h3 class="txt-tl"><a href="?view=input_pasien">Input Data Pasien</a></h3>
              <p class="txt-para">Menginputkan data diri pasien yang belum teregistrasi pada database.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><a href="?view=data_pasien">Data Pasien</a></h3>
              <p class="txt-para">Menampilkan data pasien yang sudah terdaftar dan melakukan pengelolaan data diri maupun rekam medis pasien.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><a href="#">Pemeriksaan</a></h3>
              <p class="txt-para">Memasukkan data keluhan, diagnosis, dan penanganan pasien</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><a href="?view=profil">Profil</a></h3>
              <p class="txt-para">Menampilkan data diri bidan yang bertugas pada Polkendes Desa Dilem, Kecamatan Kepanjen</p>
            </div>
          </div>
         
        </div>
      </div>
    </div>
			<?php
			}
			?>
