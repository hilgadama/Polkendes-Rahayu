<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $id_login=$_GET['id_login'];
    $query="SELECT * FROM login where id_login='$id_login' ";
    $result=mysql_query($query);
    if (mysql_num_rows($result)) {
    $row=mysql_fetch_array($result);
?> 

</script>
<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="?view=proses_edit_profil" method="post" enctype="multipart/form-data">
                <span class="contact100-form-title">
                    Formulir Edit Profil Bidan
                </span>       
        <input type="hidden" name="id_login" value="<?php echo $row['id_login']; ?>">
        <label class="label-input100" for="nama_lengkap">Nama Lengkap</label>
                <div class="wrap-input100">
                    <input id="nama_lengkap" class="input100" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>"></input>
                </div>
         <label class="label-input100" for="username">Username</label>
                <div class="wrap-input100">
                    <input id="nama_lengkap" class="input100" name="username" value="<?php echo $row['username'];?>"></input>
                </div>  
        <label class="label-input100" for="nama_lengkap">Password</label>
                <div class="wrap-input100">
                    <input id="nama_lengkap" class="input100" name="password" value="<?php echo $row['password'];?>"></input>
                </div>     
        <label class="label-input100" for="nama_lengkap">Foto</label>
                <div class="">
                    <input type="file" id="nama_lengkap" class="input100" name="foto_login" ></input>
                </div> 
         <div class="container-contact100-form-btn" width="10%">
                    <button type="submit" class="contact100-form-btn a">
                        <span>
                            Perbarui
                            <i class="zmdi zmdi-arrow-left m-l-8"></i>
                        </span>
                    </button>
                    <button type="submit" value="kembali" class="contact100-form-btn a">
                        <span>
                            Kembali
                            <i class="zmdi zmdi-arrow-left m-l-8"></i>
                        </span>
                    </button>

        </div>      
        </form>
        </div>
</div>
<?php
}
?>