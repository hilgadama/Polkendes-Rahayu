<?php
if (!isset($_SESSION)) {
  session_start();
}
$admin=$_SESSION['admin']['id_login'];
	$queri="SELECT * FROM login where id_login='$admin'";
    $resulti=mysql_query($queri);
    if (mysql_num_rows($resulti)) {
    $rowi=mysql_fetch_array($resulti); 
?>

<body>
      <!--/ nav-->
      <div class="container">
        <div class="wrapper wow fadeInUp delay-05s">
          <div class="col-md-6">
          <h2 class="top-title">Selamat Datang</h2>
          <h4 class="title">admin <?php echo $rowi['username']; ?></h3>
          <h5 class="sub-title">Polkendes Dilem, Kecamatan Kepanjen</h4>
          </div>
        <div class="col-md-6">
          <img src="img/admin.png" width="700px" class="gambar-admin">
        </div>
      </div>
    </div>
  </header>
  <!--/ header-->
  <!---->
  <!---->
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
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Data Bidan</h3>
              <p class="txt-para">Mengelola seluruh data bidan yang bertugas di Polkendes Dilem, Kecamatan Kepanjen.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Data Pekerjaan</h3>
              <p class="txt-para">Mengelola data pekerjaan pada form register pasien.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Data Penyakit</h3>
              <p class="txt-para">Mengelola data penyakit pada form register pasien.</p>
            </div>
          </div>
           <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Data Obat</h3>
              <p class="txt-para">Mengelola data obat pada form register pasien.</p>
            </div>
          </div>
      </div>
    </div>
  </section>

?>
			<!-- End services Area -->	
			<?php
			}
			?>		
