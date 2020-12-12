<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
$this->load->helper('url');
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/matrix/assets/images/favicon-png.png') ?>">
    <title>ICT CENTER - INFORMATIKA</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/matrix/assets/libs/flot/css/float-chart.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/matrix/assets/extra-libs/multicheck/multicheck.css') ?>">
    <link href="<?php echo base_url('public/matrix/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/matrix/dist/css/style.min.css') ?>" rel="stylesheet">
    <style type="text/css">
        input {
            text-align: left;
        }

        .value {
            text-align: left;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body oncontextmenu="return false">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('dashboard/header-aside');
        ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">PEMROGRAMAN BERORIENTASI OBJEK</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">db</li>
                                    <li class="breadcrumb-item">Data Lab db</li>
                                    <li class="breadcrumb-item active">Update Data</a></li>
                                    <!-- <li class="breadcrumb-item active" aria-current="page">Praktikum</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <div class="row">

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h3 class="card-title">UPDATE DATA BARANG <strong>DATABASE DAN WEB</strong></h3>
                                </center>
                                <div style="color: red;"><?php echo validation_errors(); ?></div>
                                <?php echo form_open("labdb/ubah/" . $lab_db->id_db); ?>
                                 
                                <!-- FORM NAMA BARANG MULAI -->
                                <div class="form-group">
                                    <label for="namabarang_db">
                                        Nama Barang
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="id_db" type="hidden" value="
                                                <?php echo set_value('id_db', $lab_db->id_db); ?>">
                                    <input class="form-control" name="namabarang_db" type="text" value="
                                                <?php echo set_value('namabarang_db', $lab_db->namabarang_db); ?>">
                                    <?php echo $this->input->post('namabarang_db'); ?>
                                    </input>
                                    <span class="text-danger"><?php echo form_error('namabarang_db'); ?></span>
                                </div>
                                <!-- FORM NAMA BARANG BUYAR -->
                                <!-- FORM jumlah barang MULAI -->
                                <div class="form-group">
                                    <label for="jumlahbarang_db">
                                        Jumlah Barang
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="jumlahbarang_db" type="text" value="
                                                <?php echo $lab_db->jumlahbarang_db; ?>">
                                    <?php echo $this->input->post('jumlahbarang_db'); ?>
                                    </input>
                                    <span class="text-danger"><?php echo form_error('jumlahbarang_db'); ?></span>
                                </div>
                                <!-- FORM jumlah barang BUYAR -->

                                <!-- FORM satuan barang MULAI -->
                                <div class="form-group">
                                    <label for="satuanbarang_db">
                                        Satuan Barang
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="satuanbarang_db" type="text" value="
                                                <?php echo $lab_db->satuanbarang_db; ?>">
                                    <?php echo $this->input->post('satuanbarang_db'); ?>
                                    </input>
                                    <span class="text-danger"><?php echo form_error('satuanbarang_db'); ?></span>
                                </div>
                                <!-- FORM satuan barang BUYAR -->

                                <!-- FORM TANGGAL update-->
                                <div class="form-group">
                                    <label for="tanggalupdate_db">
                                        Tanggal Update
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="tanggalupdate_db" type="date" value="
                                                    <?php echo $lab_db->tanggalupdate_db; ?>">
                                    <?php echo $this->input->post('tanggalupdate_db'); ?>
                                    </input>
                                    <span class="text-danger"><?php echo form_error('tanggalupdate_db'); ?></span>
                                </div>
                                <!-- FORM TANGGAL update BUYAR -->

                                <!-- FORM kondisi barang MULAI -->
                                <div class="form-group">
                                    <label for="kondisi_db">
                                        Kondisi Barang
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="kondisi_db" type="text" value="<?php echo $lab_db->kondisi_db; ?>">
                                    <?php echo $this->input->post('kondisi_db'); ?>
                                    </input>
                                    <span class="text-danger"><?php echo form_error('kondisi_db'); ?></span>
                                </div>
                                <!-- FORM kondisi barang BUYAR -->

                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="submit" name="submit" value="Ubah" class="btn btn-primary"></input>
                                        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
                                    </div>
                                </div>

                                <?php echo form_close(); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                ICT CENTER <a href="https://instagram.com/aslabti.umsida">INFORMATIKA</a><br>Universitas Muhammadiyah Sidoarjo.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('public/matrix/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('public/matrix/assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/extra-libs/sparkline/sparkline.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('public/matrix/dist/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('public/matrix/dist/js/sidebarmenu.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('public/matrix/dist/js/custom.min.js') ?>"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url('public/matrix/assets/libs/flot/excanvas.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/flot/jquery.flot.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/flot/jquery.flot.time.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/flot/jquery.flot.crosshair.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/dist/js/pages/chart/chart-page-init.js') ?>"></script>
    <!-- this page js -->
    <script src="<?php echo base_url('public/matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/extra-libs/multicheck/jquery.multicheck.js') ?>"></script>
    <script src="<?php echo base_url('public/matrix/assets/extra-libs/DataTables/datatables.min.js') ?>"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>