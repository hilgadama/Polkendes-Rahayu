<?php
  include "koneksi.php";
?>
<script type="text/javascript">
  function hapus(nama_penyakit, id_datadx){
    var jawab=confirm("Anda Yakin ingin Menghapus data "+nama_penyakit+"?");
    if(jawab==true){
      document.location="?view=proses_hapus_penyakit&id_datadx="+id_datadx;
    }
  }
  function edit(id_datadx){
    document.location="?view=form_edit_penyakit&id_datadx="+id_datadx;
  }


</script>

<style type="text/css">
  .my-custom-scrollbar {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
.column2{
  width: 330;
}
</style>

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">
<div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="?view=proses_tambah_penyakit" method="post">
        <span class="contact100-form-title">
          Data Penyakit
        </span>
         <label class="label-input100" for="nama_obat"> Nama Penyakit </label>
        <div class="wrap-input100">
          <input id="nama_penyakit" class="input100" type="text" name="nama_penyakit">
          <span class="focus-input100"></span>
        </div>
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn a" type="reset">
            <span>
              Reset
              <i class="zmdi zmdi-arrow-left m-l-8"></i>
            </span>
          </button>

          <button class="contact100-form-btn" type="submit">
            <span>
              Tambahkan
              <i class="zmdi zmdi-arrow-right m-l-8"></i>
              </a>
            </span>
          </button>
          <br>
          </div>
</form>


<br><br><br>
<table width="100%" class="table table-striped table-bordered table-hover dataTables-example table-wrapper-scroll-y my-custom-scrollbar">
    <thead>
      <tr class="table100-head">
        <th class="column1">ID Penyakit</th>
        <th class="column2">Nama Penyakit</th>
        <th class="column3">Aksi</th>
      </tr>
    </thead>
    <?php
      $nomor=0;
      $data=mysql_query("select * from datadx where id_datadx order by id_datadx asc");
      while ($data2=mysql_fetch_array($data)) {
      $nomor++;
      echo "
      <tr>
      
      <td>$data2[id_datadx]
      <td>$data2[nama_penyakit]

      </td>"; 
      ?>
      <td><button class="btn btn-primary" type="submit" onclick="edit(<?php echo "$data2[id_datadx]";?>)">Edit</button>

      <button class="btn btn-danger" type="submit" onclick="hapus(<?php echo "'$data2[id_datadx]',$data2[id_datadx]";?>)">Hapus</button></td>
      </tr>
      <?php
    }
    ?>

  
  </table>
</div>
</div>