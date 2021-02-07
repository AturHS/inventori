 <center>
     <h1>LAPORAN DATA OBAT</h1>
 </center>
                                <table width="100%" border="1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Harga Beli</th>
                                            <th>harga Jual</th>
                                            <th>Satuan</th>
                                            <th>Stok</th>
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
                                            <td><?php echo $row->kode_obat; ?></td>
                                            <td><?php echo $row->nama_obat; ?></td>
                                            <td><?php echo $row->harga_beli; ?></td>
                                            <td><?php echo $row->harga_jual; ?></td>
                                            <td><?php echo $row->satuan; ?></td>
                                            <td><?php echo $row->stok; ?></td>
                                            <td>
                                                
                                                <a href="master/hapus_obat/<?php echo $row->id_obat ?>" class="btn btn-warning">HAPUS</a>
                                            </td>
                                            
                                        </tr>
                                             <?php
                                            }
                                         ?>

                                    </tbody>
                                </table>
                            