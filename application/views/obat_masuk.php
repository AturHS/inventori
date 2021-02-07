
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           TABEL OBAT MASUK
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="master/tambah_obat_masuk" class="btn btn-success" >TAMBAH</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=1;
                                            foreach ($data->result() as $row) {
                                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row->kode_transaksi; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <td><?php echo $row->kode_obat; ?></td>
                                            <td><?php echo $row->nama_obat; ?></td>
                                            <td><?php echo $row->jumlah_masuk; ?></td>
                                            <td><?php echo $row->satuan; ?></td>
                                            <td>
                                                
                                                <a href="master/hapus_obat_masuk/<?php echo $row->id_obatmasuk ?>" class="btn btn-warning">HAPUS</a>
                                            </td>
                                            
                                        </tr>
                                             <?php
                                            }
                                         ?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
 