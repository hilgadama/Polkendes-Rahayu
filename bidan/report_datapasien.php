<!--https://www.mynotescode.com/laporan-pdf-plus-filter-tanggal-php/-->

<div style="padding: 100px 30px; position: inherit;">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg -12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" style="overflow-x:auto;overflow-y:hidden">
                                <thead>                                    
                                    <tr>
                                        <th>No</th>
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