    
<script src="assets"></script>
<script type="text/javascript">
    
    function rm(nik){
        document.location="?view=form_periksa&nik="+nik;
    }
    function print(){
        document.location="export_dtpasien_pdf.php";
    }
    

    function hapus(nama_pasien,nik){
        var jawab=confirm("Anda ingin menghapus data pasien "+nama_pasien+ " ?");
        if (jawab==true) {
            document.location="?view=proses_hapus_pasien&nik="+nik;
        }
    }
</script>

<link rel="stylesheet" type="text/css" href="css/inpututil.css">
<link rel="stylesheet" type="text/css" href="css/inputmain.css">

<style type="text/css">
.all{
    margin-top: 50px;
}
.judul{
    text-align: center;
}
    .show-pasien-container{
        width: 80%;
        text-align: center;
        display: inline-block;
        vertical-align: top;
        margin-top: 50px;
        padding: 0 25% 0 22%;
    }
    .show-pasien-container table {
      border-collapse: collapse;
      width: 100%;

    }

    .show-pasien-container th, .show-pasien-container td {
      text-align: left;
      padding: 8px;

    }
    .show-pasien-container tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .about-content{
        margin-top: 50px;
        margin-bottom: -50px;
    }
    .caripasien form{
        display: inline-block;
        padding-top: 50%;
        padding-bottom: 30px;
        padding-left: 50%;
    }
     table{
        margin-top: 10px;
        margin-left: 0px;
        margin-right: 10px;
        font-size: 12px;
        width: 80%;
    }
</style>
<!-- start banner Area -->
            <section class="about-banner">
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center all">
                        <div class="about-content col-lg-12">
                            <h1 class="judul">
                                Data Pasien             
                            </h1>   
                        </div>  
                    </div>
                </div>
            </section>
<div style="padding: 0 30px; position: inherit; margin-top:80px; margin-bottom:-100px;>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg -12 col-md-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>                                    
                                    <tr>
                                        <th width="6%">No</th>
                                        <th>NIK</th>
                                        <th>Nama Pasien</th>                      
                                        <th>Tanggal Lahir</th>
                                        <th>No. Telp</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Nama Wali</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. KK</th>
                                        <th>No. BPJS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * FROM dtpasien";
                                        $result=mysql_query($query);
                                        if (mysql_num_rows($result)) {
                                            $no=0;
                                            while ($row=mysql_fetch_array($result)) {
                                            $no++;
                                    ?>
                                    <tr class="odd gradeX">                          
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $row['nik'];?></td>         
                                        <td><?php echo $row['nama_pasien']; ?></td>
                                        <td><?php echo $row['tgl_lahir']; ?></td>
                                        <td><?php echo $row['no_telp']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td> 
                                        <td><?php echo $row['pekerjaan']; ?></td>
                                        <td><?php echo $row['nama_wali']; ?></td> 
                                        <td><?php echo $row['jk']; ?></td>
                                        <td><?php echo $row['no_kk']; ?></td>
                                        <td><?php echo $row['no_bpjs']; ?></td>
                                        <td width="15%">  
                                            <button type="button" style="background-color:black;color:white" class="btn btn-default btn-sm" onclick="rm(<?php echo "$row[nik]"; ?>)">
                                                <span class="glyphicon glyphicon-look"></span> Rekam Medis 
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm" onclick="hapus(<?php echo "'$row[nama_pasien]',$row[nik]"; ?>)">
                                                <span></span> Hapus 
                                            </button>
                                             
                                        </td>                                      
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>                                                                
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>    

                <br><br><br><br>
            <div class="container-contact100-form-btn">
          <button class="contact100-form-btn a" onclick="print()">
            <span>
              Print
              <i class="zmdi zmdi-arrow-left m-l-8"></i>
            </span>
          </button>
          </div>
<br><br>

            