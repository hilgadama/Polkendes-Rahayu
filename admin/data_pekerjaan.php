<?php
	include "koneksi.php";
?>

<script type="text/javascript">
	function hapus(nama_pekerjaan, id_pekerjaan){
		var jawab=confirm("Anda Yakin ingin Menghapus data "+nama_pekerjaan+"?");
		if(jawab==true){
			document.location="?view=proses_hapus_pekerjaan&id_pekerjaan="+id_pekerjaan;
		}
	}
	function edit(id_pekerjaan){
		document.location="?view=form_edit_pekerjaan&id_pekerjaan="+id_pekerjaan;
	}
	function tambah(id_pekerjaan){
		document.location="?view=tambah_data_pekerjaan";
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
  width: 400;
}
</style>

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="?view=proses_tambah_pekerjaan" method="post">
        <span class="contact100-form-title">
          Data Pekerjaan
        </span>
        <label class="label-input100" for="nama_obat">Id Pekerjaan</label>
        <div class="wrap-input100">
        	<?php
						$sql = mysql_query('SELECT * FROM pekerjaan ORDER BY id_pekerjaan DESC LIMIT 1;');
									if(mysql_num_rows($sql)>0){
						?>
						<?php while ($row = mysql_fetch_array($sql)) { 
							$id = $row[0];
							$tot = $id;
							$tot++;
							?>
							<input class="input100" type="text" name="id_pekerjaan" disabled="disable" value=<?php echo $tot ?> >
										<?php } ?>
									<?php } ?>
          <span class="focus-input100"></span>
        </div>
        <label class="label-input100" for="stok">Nama Pekerjaan</label>
        <div class="wrap-input100">
        	<input type="text" class="input100" name="nama_pekerjaan" />
          <span class="focus-input100"></span>
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
              </a>
            </span>
          </button>
          <br>
          </div>
</form>
<br>
<table class="table table-striped table-bordered table-hover dataTables-example table-wrapper-scroll-y my-custom-scrollbar">
    <thead>
      <tr class="table100-head">
        <th class="column1 text-center">No</th>
        <th class="column2 text-center">Nama Pekerjaan</th>
        <th class="column3 text-center">Aksi</th>
      </tr>
    </thead>
    <?php
			$nomor=0;
			$data=mysql_query("select * from pekerjaan");
			while ($data2=mysql_fetch_array($data)) {
			$nomor++;
			echo "
			<tr>
			<td>$nomor
			<td>$data2[nama_pekerjaan]
			</td>";	
		?>
			<td><button type="button" class="btn btn-primary size" onclick="edit(<?php echo "$data2[id_pekerjaan]";?>)">Edit</button>
			<button type="button" class="btn btn-danger size" onclick="hapus(<?php 
			echo "'$data2[nama_pekerjaan]',$data2[id_pekerjaan]";?>)">Hapus</button></td>
			
			</tr>
	<?php } ?>
  </table>
</div>
</div>

