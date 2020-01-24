<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include "koneksi.php";
    $admin=$_SESSION['admin']['id_login'];
    $query="SELECT * FROM login where id_login  ='$admin'";
    $result=mysql_query($query);
    if (mysql_num_rows($result)) {
    $row=mysql_fetch_array($result); 
?>
<?php
include "koneksi.php"
?>

<script type="text/javascript">
  function hapus(nama_lengkap, id_login){
    var jawab=confirm("Anda Yakin ingin Menghapus data "+nama_lengkap+"?");
    if(jawab==true){
      document.location="?view=proses_hapus_bidan&id_login="+id_login;
    }
  }
  function edit(id_login){
    document.location="?view=form_edit_bidan&id_login="+id_login;
  }
</script>

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">
<div class="container-contact100">
  <div class="wrap-contact100">
    <form class="contact100-form validate-form" action="?view=proses_tambah_bidan" method="post" enctype="multipart/form-data">
      <span class="contact100-form-title">Data Bidan</span>
      <label class="label-input100" for="nama_bidan">Id Login</label>
      <div class="wrap-input100">
        <?php
          $sql = mysql_query('SELECT * FROM login where id_login ORDER BY id_login desc LIMIT 1;');
                if(mysql_num_rows($sql)>0){?>
                  <?php while ($row = mysql_fetch_array($sql)) { 
                    $id = $row[0];
                    $tot = $id;
                    $tot++;
        ?>
                <input type="text" name="id_login" class="input100" disabled="disable" value=<?php echo $tot ?> >
                <?php } ?>
              <?php } ?>
      </div>
      <label class="label-input100">Nama Lengkap</label>
      <div class="wrap-input100">
        <input type="text" class="input100" name="nama_lengkap" />
        <span class="focus-input100"></span>
      </div>
      <label class="label-input100">Username</label>
      <div class="wrap-input100">
        <input type="text" class="input100" name="username" />
        <span class="focus-input100"></span>
      </div>
      <label class="label-input100">Password</label>
      <div class="wrap-input100">
        <input type="text" class="input100" name="password" />
        <span class="focus-input100"></span>
      </div>
      <label class="label-input100">Upload Foto</label>
      <div>
        <input type="file" class="input100" name="foto_login">
      </div>
      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn a" type="reset">
          <span>
            Reset
            <i class="zmdi zmdi-arrow-left m-l-8"></i>
          </span>
        </button>&nbsp;
        <button class="contact100-form-btn" type="submit">
          <span>
            Tambahkan
            <i class="zmdi zmdi-arrow-right m-l-8"></i>
          </span>
        </button>
        <br>
      </div>
    </form>
    <br>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example table-wrapper-scroll-y my-custom-scrollbar">
      <thead>
        <tr class="table100-head">
          <th class="column1">ID Bidan</th>
          <th class="column2">Nama Lengkap</th>
          <th class="column3">Username</th>
          <th class="column4">Password</th>
          <th class="column5">Hak Akses</th>
          <th class="column6">Foto</th>
          <th class="column7">Aksi</th>
        </tr>
      </thead>
      <?php
      $data=mysql_query("select * from login where hak_akses='bidan' order by id_login asc");
      while ($data2=mysql_fetch_array($data)) {
      echo "
      <tr>
      <td>$data2[id_login]
      <td>$data2[nama_lengkap]
      <td>$data2[username]
      <td>$data2[password]
      <td>$data2[hak_akses]
      <td><img src='../images/$data2[foto_login]' width='100' height='100'>
      </td>"; 
      ?>
      <td><button class="btn btn-primary" onclick="edit(<?php echo "$data2[id_login]";?>)">Edit</button>
      <button class="btn btn-danger" onclick="hapus(<?php 
      echo "'$data2[nama_lengkap]',$data2[id_login]";?>)">Hapus</button></td>
      </tr>
    <?php
    }
    ?>
  </table>

  </div>
</div>

  
  </table>
</div>
<?php
}
?>