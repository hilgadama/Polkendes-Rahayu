<?php
  include "koneksi.php";
?>

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
          Data Penyakit
        </span>
        <label class="label-input100">Nama Penyakit</label>
        <div class="wrap-input100">
          <input type="text" class="input100" name="nama_penyakit" />
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn a">
            Tambahkan
          </button>
          <button class="contact100-form-btn a">
            Reset
          </button>
        </div>
      </form>
<br><br>
      <table class="table table-striped table-bordered table-hover dataTables-example table-wrapper-scroll-y my-custom-scrollbar">
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
    <td><button type="button" class="btn btn-primary size" onclick="edit(<?php echo "$data2[id_datadx]";?>)">Edit</button>

      <button type="button" class="btn btn-danger size" onclick="hapus(<?php echo "'$data2[id_datadx]',$data2[id_datadx]";?>)">Hapus</button>
    </td>
      </tr>
  <?php } ?>
  </table>
</div>
</div>
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
