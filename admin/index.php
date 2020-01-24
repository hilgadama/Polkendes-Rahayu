<script type="text/javascript"></script>
<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['admin'])) {
	header("location:../login.php");
}
	$admin=$_SESSION['admin']['id_login'];
	$queri="SELECT * FROM login where id_login='$admin'";
    $resulti=mysql_query($queri);
    if (mysql_num_rows($resulti)) {
    $rowi=mysql_fetch_array($resulti); 
?>	
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

<style type="text/css">
.gambar-admin{
  position: relative;
  right: 100px;
  bottom: 80px;
}

.wrapper {
  padding: 200px 0px 130px;
}

.top-title {
  z-index: 5;
  font-size: 50px;
  font-weight: 700;
  color: #475936;
  line-height: 38px;
  letter-spacing: 4px;
  opacity: 1;
  text-transform: uppercase;
}

.sub-title {
  font-size: 17px;
  font-weight: 700;
  color: #475936;
  line-height: inherit;
  letter-spacing: 4px;
  opacity: 1;
  text-transform: uppercase;
}

.title {
  font-size: 40px;
  font-weight: 700;
  color: #475936;
  line-height: 70px;
  letter-spacing: 4px;
  opacity: 1;
  text-transform: uppercase;
  padding: 5px 0px;
}

</style>



</head>
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
              <a href="index.html" class="navbar-brand"><img src="img/psd logo.png" width="150px"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
			          <li><a href="?view=home">Home</a></li>
			          <li><a href="?view=data_bidan">Data Bidan</a></li>
			          <li><a href="?view=data_pekerjaan">Data Pekerjaan</a></li>
			          <li><a href="?view=data_obat">Data Obat</a></li>	          			
			          <li><a href="?view=data_penyakit">Data Penyakit</a></li>		
			          <li><a href="../logout.php">Logout </a></li>
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

 <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
          </div>
        </div>
          </div>

          <div class="col-lg-6 col-sm-6 ">
          <div class="single-footer-widget">
            <h4 class="cont-title">Visit Us</h4>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Kantor Desa Dilem</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Jl. Bromo No 2 Desa Dilem, Kecamatan Kepanjen, Kabupaten Malang</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: polkendesrahayus@gmail.com</a></p>
            </div>
            </div>
          </div>
<div class="col-lg-6 col-sm-6">
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

<script>
	$(document).ready(function(){
		function fetch_data()
		{
			$.ajax({
				url:"data_bidan.php",
				method:"POST",
				success:function(data){
					$('#live_data').html(data);
				}
			});

		}
		fetch_data();
		$(document).on('click', '#btn_add', function(){ 
			var nama_lengkap = $('#nama_lengkap').text();
           var username = $('#username').text();  
           var password = $('#password').text(); 
           var hak_akses = $('#hak_akses').text();  
           if(nama_lengkap == '')  
           {  
                alert("Enter Name");  
                return false;  
           }  
           if(username == '')  
           {  
                alert("Enter Username");  
                return false;  
           }  
           if(password == '')  
           {  
                alert("Enter Password");  
                return false;  
           } 
            if(hak_akses == '')  
           {  
                alert("Enter Hak Akses");  
                return false;  
           }  
           $.ajax({  
                url:"proses_tambah_bidan.php",  
                method:"POST",  
                data:{nama_lengkap:nama_lengkap, username:username, password:password, hak_akses:hak_akses},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data); 
                     location.reload(); 
                     fetch_data(); 

                }  
           })
      });
	function edit_data()  
      {  
           $.ajax({  
                url:"proses_edit_bidan.php",  
                method:"POST",  
                data:{nama_lengkap:nama_lengkap, username:username, password:password, hak_akses:hak_akses},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.nama_lengkap', function(){  
           var id = $(this).data("id1");  
           var nama_lengkap = $(this).text();  
           edit_data(id, nama_lengkap, "nama_lengkap");  
      });  
      $(document).on('blur', '.username', function(){  
           var id = $(this).data("id2");  
           var username = $(this).text();  
           edit_data(id,username, "username");  
      });
      $(document).on('blur', '.password', function(){  
           var id = $(this).data("id3");  
           var password = $(this).text();  
           edit_data(id,password, "password");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id4");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"proses_delete_bidan.php",  
                     method:"POST",  
                      data:{nama_lengkap:nama_lengkap, username:username, password:password, hak_akses:hak_akses},  
                	dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
	
</script>