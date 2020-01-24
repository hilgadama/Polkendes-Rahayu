<?php
if (!isset($_SESSION)) {
        session_start();
    }
include "koneksi.php";

			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$id_login=$_POST['id_login'];
			$nama_lengkap=$_POST["nama_lengkap"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$nama = $_FILES['foto_login']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto_login']['size'];
			$file_tmp = $_FILES['foto_login']['tmp_name'];	
 
			if ($nama=="") {
			 	$query = mysql_query("update login set nama_lengkap	='$nama_lengkap', username ='$username', password='$password' where id_login='$id_login'");
			 	echo 'FILE BERHASIL ';	
			}else{
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
					if($ukuran < 1044070){			
						move_uploaded_file($file_tmp, '../images/'.$nama);
						$query = mysql_query("update login set nama_lengkap='$nama_lengkap', username='$username', password='$password', foto_login='$nama' where id_login='$id_login'");
						
						if($query){
							echo 'FILE BERHASIL DI UPLOAD';						
						}else{
							echo 'GAGAL MENGUPLOAD GAMBAR';
						}
					}else{
						echo 'UKURAN FILE TERLALU BESAR';
					}
				}else{
					echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
				}
			} 
			

header("location:?view=data_bidan");

?>

