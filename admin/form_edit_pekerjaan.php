<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $id_pekerjaan=$_GET['id_pekerjaan'];
	$query="SELECT * FROM pekerjaan where id_pekerjaan='$id_pekerjaan' ";
	$result=mysql_query($query);
	if (mysql_num_rows($result)) {
	$row=mysql_fetch_array($result);
?> 

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="?view=proses_edit_pekerjaan" method="post">
        <span class="contact100-form-title">
          Edit Pekerjaan
        </span>
        <input type="hidden" name="id_pekerjaan" value="<?php echo $row['id_pekerjaan']; ?>">
        <label class="label-input100" for="nama_obat">Sebelum</label>
        <div class="wrap-input100">
          <input class="input100" type="text" name="nama_pekerjaan" disabled="disable" value="<?php echo $row['nama_pekerjaan'];?>" >
          <span class="focus-input100"></span>
        </div>
        <label class="label-input100" for="stok">Diubah</label>
        <div class="wrap-input100">
          <input class="input100" type="text" value="<?php echo $row['nama_pekerjaan'];?>" name="nama_pekerjaan">
          <span class="focus-input100"></span>
        </div>        

    <div class="container-contact100-form-btn">
          <button class="contact100-form-btn a" type="submit">
            <span>
              Perbarui
              <i class="zmdi zmdi-arrow-left m-l-8"></i>
            </span>
          </button>&nbsp;
          <button type="submit" class="contact100-form-btn" value="kembali">
            <span>
              Kembali
              <i class="zmdi zmdi-arrow-right m-l-8"></i>
              </a>
            </span>
          </button>
          <br>
          </div>
</form>
</div>
</div>


<?php
}
?>