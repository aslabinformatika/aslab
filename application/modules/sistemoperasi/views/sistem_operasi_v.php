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
                        <h4 class="page-title">SISTEM OPERASI</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Sistem Operasi</li>
                                    <li class="breadcrumb-item active">Data Lab Sistem Operasi </a></li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h3 class="card-title">DATA BARANG <strong>SISTEM OPERASI</strong></h3>
                                </center>
                                <a href="<?php echo base_url('sistemoperasi/tambah'); ?>"><button type="button" class="btn btn-info btn-sm">Tambah Data Barang</button></a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>No</center>
                                                </th>
                                                <th>
                                                    <center>Nama Barang</center>
                                                </th>
                                                <th>
                                                    <center>Jumlah Barang</center>
                                                </th>
                                                <th>
                                                    <center>Satuan Barang</center>
                                                </th>
                                                <th>
                                                    <center>Tanggal Update </center>
                                                </th>
                                                <th>
                                                    <center>Kondisi Barang</center>
                                                </th>

                                                <?php if ($this->session->userdata('akses') == '1') : ?>
                                                    <th colspan="2">
                                                        <center>Aksi</center>
                                                    </th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 1;
                                            foreach ($lab_sistemoperasi as $data) {
                                            ?>
                                                <tr>
                                                
                                                    <td>
                                                        <center><?php echo $id++; ?></center>
                                                    </td>
                                                    
                                                    <td>
                                                        <center><?php echo $data->namabarang_sistemoperasi; ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?php echo $data->jumlahbarang_sistemoperasi; ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?php echo $data->satuanbarang_sistemoperasi; ?></center>
                                                    </td>
                                                    <td><center><?php echo $data->tanggalupdate_sistemoperasi; ?></center></td>
                                                    <td>
                                                        <center><?php echo $data->kondisi_sistemoperasi; ?></center>
                                                    </td>
                                                    

                                                    <?php if ($this->session->userdata('akses') == '1') : ?>
                                                        <td>
                                                            <center><a href="<?php echo base_url() . 'sistemoperasi/ubah/' . $data->id_sistemoperasi; ?>">Ubah</a></center>
                                                        </td>
                                                        <td>
                                                            <center><a href="<?php echo base_url() . 'sistemoperasi/hapus/' . $data->id_sistemoperasi; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" >Hapus</a></center>

                                                        </td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
            
                                       
                                    </table>
                                </div>

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