<?php
  include "koneksi.php";
?>
<script type="text/javascript">
  function hapus(nama_obat, id_obat){
    var jawab=confirm("Anda Yakin ingin Menghapus data "+nama_obat+"?");
    if(jawab==true){
      document.location="?view=proses_hapus_obat&id_obat="+id_obat;
    }
  }
  function edit(id_obat){
    document.location="?view=form_edit_obat&id_obat="+id_obat;
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
  width: 310;
}
</style>

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">
<div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="?view=proses_tambah_obat" method="post">
        <span class="contact100-form-title">
          Data Obat
        </span>
        <label class="label-input100" for="nama_obat"> Nama Obat </label>
        <div class="wrap-input100">
          <input id="nama_obat" class="input100" type="text" name="nama_obat">
          <span class="focus-input100"></span>
        </div>
        <label class="label-input100" for="stok"> Stok </label>
        <div class="wrap-input100">
          <input id="stok" class="input100" type="text" name="stok">
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
        <th class="column1">ID Obat</th>
        <th class="column2">Nama Obat</th>
        <th class="column3">Stok</th>
        <th class="column4">Aksi</th>
      </tr>
    </thead>
    <?php
      $nomor=0;
      $data=mysql_query("select * from obat where id_obat order by id_obat asc");
      while ($data2=mysql_fetch_array($data)) {
      $nomor++;
      echo "
      <tr>
      <td>$data2[id_obat]
      <td>$data2[nama_obat]
      <td>$data2[stok]
      </td>"; 
      ?>
      <td><button class="btn btn-primary" type="submit" onclick="edit(<?php echo "$data2[id_obat]";?>)">Edit</button>

      <button class="btn btn-danger" type="submit" onclick="hapus(<?php echo "'$data2[nama_obat]',$data2[id_obat]";?>)">Hapus</button></td>
      </tr>
      <?php
    }
    ?>
  </table>
</div>
</div>
