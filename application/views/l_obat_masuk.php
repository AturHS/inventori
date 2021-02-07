<center>
    <h1>LAPORAN DATA BARANG MASUK</h1>
</center>
<table border="1" width="100%">
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
        $no = 1;
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