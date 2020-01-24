
<?php
	session_start();
	include "koneksi.php";
	
	//extract($_POST);//$username $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM login  WHERE username='$username' AND password='$password'";

//"SELECT * from tb_dokter inner join tb_akses on tb_akses.idakses=tb_dokter.idakses where tb_dokter.username='$username' and tb_dokter.password='$password'";

//"SELECT * from tb_admin inner join tb_akses on tb_akses.idakses=tb_admin.idakses where tb_admin.username='$username' and tb_admin.password='$password'";

	$result=mysql_query($query)or die(mysql_error());
	if (mysql_num_rows($result)) {
		 $row=mysql_fetch_array($result);

			if ($row['hak_akses']=="admin") {
				$_SESSION['username']=$username;
				$_SESSION['hak_akses1']="admin";
				//$_SESSION['']
				$admin="SELECT * from login where username='$username' and password='$password'";
				$result2=mysql_query($admin);
				$adminn=mysql_fetch_array($result2);
				$_SESSION['admin']=$adminn;
				header("location:admin/?view=home");			
			} elseif ($row['hak_akses']=="bidan") {
				$_SESSION['username']=$username;
				$_SESSION['hak_akses2']="bidan";

				$bidan="SELECT * from login where username='$username' and password='$password'";
				$result3=mysql_query($bidan);
				$bidann=mysql_fetch_array($result3);
				$_SESSION['bidan']=$bidann;

				//$_SESSION['bidan']=""
				header("location:bidan/?view=home");
			} 
			 else{
				echo "<script>alert('Username / Password Anda salah!!');history.go(-1);</script>";
				
			}
		
	} else{
		echo "<script>alert('Username / Password Anda salah!!');history.go(-1); </script>";

	}
?>

