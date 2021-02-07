    <?php
    session_start();
    if ($this->session->userdata('username')) {
    ?>

        <!DOCTYPE html>
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>APP INVENTORI</title>
            <base href="<?php echo base_url() ?>" />
            <link href="assets/css/bootstrap.css" rel="stylesheet" />
            <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <link href="assets/css/custom-styles.css" rel="stylesheet" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

            <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        </head>

        <body>
            <div id="wrapper">
                <nav class="navbar navbar-default top-navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><i class="fa fa-comments"></i> <strong>MASTER </strong></a>
                    </div>

                    <center>
                        <h3 style="color: white">
                            SISTEM INFORMASI GUDANG
                        </h3>
                    </center>

                    <ul class="nav navbar-top-links navbar-right">

                    </ul>
                </nav>
                <!--/. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">

                            <li>
                                <a href="master" class="<?php if ($class == 'home') {
                                                            echo "active-menu";
                                                        } ?>"><i class="fa fa-dashboard"></i> Home</a>
                            </li>
                            <li>
                                <a href="master/obat" class="<?php if ($class == 'obat') {
                                                                    echo "active-menu";
                                                                } ?>"><i class="fa fa-desktop"></i> Data Gudang</a>
                            </li>
                            <li>
                                <a href="master/obat_masuk" class="<?php if ($class == 'obat_masuk') {
                                                                        echo "active-menu";
                                                                    } ?>"><i class="fa fa-bar-chart-o"></i> Data Barang Masuk</a>
                            </li>
                            <li>
                                <a href="master/pengguna" class="<?php if ($class == 'pengguna') {
                                                                        echo "active-menu";
                                                                    } ?>"><i class="fa fa-bar-chart-o"></i> Data Pengguna</a>
                            </li>
                            <li>
                                <a href="master/l_obat" class="<?php if ($class == 'l_obat') {
                                                                    echo "active-menu";
                                                                } ?>"><i class="fa fa-qrcode"></i> Laporan Stok Barang</a>
                            </li>
                            <li>
                                <a href="master/l_obat_masuk" class="<?php if ($class == 'l_obat_masuk') {
                                                                            echo "active-menu";
                                                                        } ?>"><i class="fa fa-qrcode"></i> Laporan Barang Masuk</a>
                            </li>
                            <li>
                                <a href="master/logout" class="<?php if ($class == 'detail') {
                                                                    echo "active-menu";
                                                                } ?>"><i class="fa fa-qrcode"></i> Keluar</a>
                            </li>

                        </ul>

                    </div>

                </nav>
                <?php $this->load->view($isi); ?>

                <script src="assets/js/jquery-1.10.2.js"></script>
                <!-- Bootstrap Js -->
                <script src="assets/js/bootstrap.min.js"></script>
                <!-- Metis Menu Js -->
                <script src="assets/js/jquery.metisMenu.js"></script>
                <!-- DATA TABLE SCRIPTS -->
                <script src="assets/js/dataTables/jquery.dataTables.js"></script>
                <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#dataTables-example').dataTable();
                    });
                </script>
                <!-- Custom Js -->
                <script src="assets/js/custom-scripts.js"></script>


        </body>

        </html>
    <?php } else {
        redirect('master/login');
    } ?>