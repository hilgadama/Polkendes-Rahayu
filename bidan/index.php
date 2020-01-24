<script type="text/javascript"></script>
<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['bidan'])) {
	header("location:../login.php");
}
	$bidan=$_SESSION['bidan']['id_login'];
	$queri="SELECT * FROM login where id_login='$bidan'";
    $resulti=mysql_query($queri);
    if (mysql_num_rows($resulti)) {
    $rowi=mysql_fetch_array($resulti); 
?>


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Polkendes Rahayu</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="img/logo-bar.png"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

  <!--header-->
  <header class="main-header" id="header">
    <div class="">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="?view=home" class="navbar-brand"><img src="img/psd logo.png" width="150px"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li><a href="?view=home">Home</a></li>
                <li><a href="?view=input_pasien">Input Pasien</a></li>
                <li><a href="?view=data_pasien">Data Pasien</a></li>
                <li class="nav-item dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;" data-hover="dropdown">Data</a>
                   <div class="dropdown-menu">
                        <a class="dropdown-item" href="?view=data_obat">&nbsp; Data Obat</a><br>
                       <a class="dropdown-item" href="?view=data_penyakit">&nbsp;Data Penyakit</a>
                </li>                                          
                <li><a href="?view=profil">Profil</a></li>
                <li><a href="../logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

							<?php
                            if (isset($_GET['view'])) {
                                $view = $_GET['view'];
                                include $view . '.php';
                            } else {
                                $_GET['view'] = 'home';
                            }
                            ?>
          
   <!---->
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-lg-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
          </div>
        </div>
          </div>

          <div class="col-lg-6 col-md-4">
          <div class="single-footer-widget">
            <h4 class="cont-title">Visit Us</h4>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Kantor Desa Dilem</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Jl. Bromo No 2 Desa Dilem, Kecamatan Kepanjen, Kabupaten Malang</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: polkendesrahayus@gmail.com</a></p>
            </div>
            </div>
          </div>
<div class="col-lg-6 col-md-4">
    <div class="single-footer-widget">
       <h4 class="cont-title">Find Us</h4>
          <div style="padding-right:5%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.834607066828!2d112.5654436116212!3d-8.118316683283854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789ef744beea0d%3A0xde1d220414e504fc!2sKantor+Desa+Dilem!5e0!3m2!1sid!2sid!4v1556762491615!5m2!1sid!2sid"  frameborder="0" style="border:0" width="100%" height="55%" allowfullscreen></iframe></div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
         
          <div class="credits">
            
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    	<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
      <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

			<script src="js/jquery.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.js"></script>
      <script src="js/custom.js"></script>
      <script src="contactform/contactform.js"></script>
      <script src="../js/jquery.bootstrap-dropdown-hover.js"></script>

			 <!-- DataTables JavaScript -->
      <script src="style1/vendor/datatables/js/jquery.dataTables.min.js"></script>
      <script src="style1/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
      <script src="style1/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>        
		</body>
	</html>
		</body>
	</html>
	<?php
}
	?>