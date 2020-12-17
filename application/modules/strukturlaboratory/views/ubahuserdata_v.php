<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
                        <h4 class="page-title">DATA ANGGOTA</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Kartu Anggota</li>
                                    <li class="breadcrumb-item">Data Anggota</li>
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
                                    <center><h3 class="card-title">UPDATE DATA ANGGOTA <strong>ASISTEN LABORATORIUM INFORMATIKA</strong></h3></center>
                                    <div style="color: red;"><?php echo validation_errors(); ?></div>
                                    <?php echo form_open("kartuanggota/ubah/".$asistenpraktikum->nim_asisten); ?>
                                    
                                    <!-- FORM ID MULAI -->
                                        <div class="form-group">
                                            <label for="id_asisten">
                                            ID Asisten
                                                <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="id_asisten" type="text" min="4" value="
                                                <?php echo set_value('id_asisten', $asistenpraktikum->id_asisten); ?>">
                                                <?php echo $this->input->post('id_asisten'); ?>
                                            <span class="text-danger"><?php echo form_error('id_asisten');?></span>
                                        </div>
                                    <!-- FORM ID BUYAR -->
                                    <!-- FORM NAMA MULAI -->
                                        <div class="form-group">
                                            <label for="nama_asisten">
                                                Nama Lengkap
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="nama_asisten" type="text" value="
                                                <?php echo set_value('nama_asisten', $asistenpraktikum->nama_asisten); ?>">
                                                <?php echo $this->input->post('nama_asisten'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('nama_asisten');?></span>
                                        </div>
                                    <!-- FORM NAMA BUYAR -->
                                    <!-- FORM PASSWORD MULAI -->
                                        <div class="form-group">
                                            <label for="password_asisten">
                                                Password
                                                <span class="text-danger">*</span>
                                                </label>
                                            <input class="form-control" name="password_asisten" type="password" value="
                                                <?php echo set_value($asistenpraktikum->password_asisten); ?>">
                                                <?php echo $this->input->post('password_asisten'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('password_asisten');?></span>
                                        </div>
                                    <!-- FORM PASSWORD BUYAR -->
                                    <!-- FORM NIM MULAI -->
                                        <div class="form-group">
                                            <label for="nim_asisten">
                                                Nomer Induk Mahasiswa
                                                    <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="nim_asisten" type="text" value="
                                                <?php echo set_value('nim_asisten', $asistenpraktikum->nim_asisten); ?>">
                                                <?php echo $this->input->post('nim_asisten'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('nim_asisten');?></span>
                                        </div>
                                    <!-- FORM NIM BUYAR -->
                                    <!-- FORM ANGKATAN MULAI -->
                                        <div class="form-group">
                                            <label for="angkatan_asisten">
                                                Angkatan
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <select name="angkatan_asisten" class="form-control">
                                                    <option value="
                                                    <?php echo set_value('nim_asisten', $asistenpraktikum->nim_asisten); ?>"></option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                </select>
                                        </div>
                                    <!-- FORM ANGKATAN BUYAR -->
                                    <!-- FORM ALAMAT MULAI -->
                                        <div class="form-group">
                                            <label for="alamat_asisten">
                                                Alamat Lengkap
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input name="alamat_asisten" class="form-control" type="text" value="
                                                    <?php echo set_value('alamat_asisten', $asistenpraktikum->alamat_asisten); ?>">
                                                    <?php echo $this->input->post('alamat_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('alamat_asisten');?></span>
                                        </div>
                                    <!-- FORM ALAMAT BUYAR -->
                                    <!-- FORM TANGGAL LAHIR MULAI -->
                                        <div class="form-group">
                                            <label for="ttl_asisten">
                                                Tanggal Lahir
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="ttl_asisten" type="date" value="
                                                    <?php echo set_value('ttl_asisten', $asistenpraktikum->ttl_asisten); ?>">
                                                    <?php echo $this->input->post('ttl_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('ttl_asisten');?></span>
                                        </div>
                                    <!-- FORM TANGGAL LAHIR BUYAR -->
                                    <!-- FORM EMAIL MULAI -->
                                        <div class="form-group">
                                            <label for="email_asisten">
                                                Email
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="email_asisten" type="email" value="
                                                    <?php echo set_value('email_asisten', $asistenpraktikum->email_asisten); ?>">
                                                    <?php echo $this->input->post('email_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('email_asisten');?></span>
                                        </div>
                                    <!-- FORM EMAIL BUYAR -->
                                    <!-- FORM NO TELP MULAI -->
                                        <div class="form-group">
                                            <label for="notelp_asisten">
                                                No Telp
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="notelp_asisten" type="text" value="
                                                    <?php echo set_value('notelp_asisten', $asistenpraktikum->notelp_asisten); ?>">
                                                    <?php echo $this->input->post('notelp_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('notelp_asisten');?></span>
                                        </div>
                                    <!-- FORM NO TELP BUYAR -->
                                    <!-- FORM INSTAGRAM MULAI -->
                                        <div class="form-group">
                                            <label for="instagram_asisten">
                                                Link Instagram
                                                    <!-- <span class="text-danger">*</span> -->
                                            </label>
                                                <input class="form-control" name="instagram_asisten" type="text" value="
                                                    <?php echo set_value('instagram_asisten', $asistenpraktikum->instagram_asisten); ?>">
                                                    <?php echo $this->input->post('instagram_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('instagram_asisten');?></span>
                                        </div>
                                    <!-- FORM INSTAGRAM BUYAR -->
                                    <!-- FORM LEVEL MULAI -->
                                        <div class="form-group">
                                            <label for="level">
                                                Level User
                                                    <span class="text-danger">*</span><br>
                                                    <small>1 = Struktural<br>2 = Anggota</small>
                                            </label>
                                                <select name="level" class="form-control">
                                                    <option value="<?php echo set_value('level', $asistenpraktikum->level); ?>"></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                        </div>
                                    <!-- FORM LEVEL BUYAR -->
                                        <div class="border-top">
                                            <div class="card-body">
                                                <input type="submit" name="submit" value="Ubah" class="btn btn-primary"></input>
                                                    <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
                                            </div>
                                        </div>

                                    <?php echo form_close(); ?>
                                    </form>
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