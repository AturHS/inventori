
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           tambah data obat
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="master/proses_input_obat" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input type="text" name="kode_obat" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nama_obat" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Jual</label>
                                            <input type="text" name="harga_jual" class="form-control"> 
                                        </div>

                                         <div class="form-group">
                                            <label>Harga Beli</label>
                                            <input type="text" name="harga_beli" class="form-control"> 
                                        </div>

                                         <div class="form-group">
                                            <label>Satuan</label>
                                            <input type="text" name="satuan" class="form-control"> 
                                        </div>

                                         <div class="form-group">
                                            <label>Stok</label>
                                            <input type="text" name="stok" class="form-control"> 
                                        </div>
                                        
                                         
                                        <button type="submit" class="btn btn-success">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                        </div>
 
