<?php
include "koneksi.php";

			$ekstensi_diperbolehkan	= array('png','jpg');
			$id_login=$_POST["id_login"];
			$nama_lengkap=$_POST["nama_lengkap"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$nama = $_FILES['foto_login']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto_login']['size'];
			$file_tmp = $_FILES['foto_login']['tmp_name'];	
 		if (ctype_alpha($nama_lengkap)) {
 			echo 'nama harus huruf';
 		
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../images/'.$nama);
					$query = mysql_query("insert into login values('', '$nama_lengkap', '$username','$password','bidan','$nama')");
					
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
						header("location:?view=data_bidan");
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

//header("location:?view=tampil_dokter");
?>
