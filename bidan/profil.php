 <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include "koneksi.php";
    $bidan=$_SESSION['bidan']['id_login'];
    $query="SELECT * FROM login where id_login  ='$bidan '";
    $result=mysql_query($query);
    if (mysql_num_rows($result)) {
    $row=mysql_fetch_array($result); 
?>
<script type="text/javascript">
    function edit(id_login){
        document.location="?view=form_edit_profil&id_login="+id_login;
    }
</script>
<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<style>
    td{
        padding-left: 10px;
    }
</style>

<div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Profil Bidan <?php echo $rowi['username']; ?>
                </span>
            <form class="position">
                <table width="100%" style="padding-left:50px; margin-top: -30;">
        <tr>
            <td rowspan="9" width="200"><?php echo "<img src='../images/".$row['foto_login']."' width='150' height='200'>"; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>            
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>&nbsp;<?php echo $row['nama_lengkap']; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>&nbsp;<?php echo $row['username']; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td >:</td>
            <td>&nbsp;<?php echo $row['password']; ?></td>
        </tr>
        <tr>
            <td>Hak Akses</td>
            <td>:</td>
            <td>&nbsp;<?php echo $row['hak_akses']; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div class="container-contact100-form-btn" width="10%">
                    <button type="button" class="contact100-form-btn a" onclick="edit(<?php echo "$row[id_login]"; ?>)">
                        <span>
                            Edit
                            <i class="zmdi zmdi-arrow-left m-l-8"></i>
                        </span>
                    </button>         
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>     
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>           
    </table>
</form>
                            
            </div>
            <div class="row">
            </div>
        </div>

    <?php
}
?>