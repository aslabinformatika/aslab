<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?php echo base_url('public/matrix/assets/images/logoasl.png') ?>" alt="homepage" class="light-logo" height="30px" width="30px" />

                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <b alt="homepage" class="light-logo">INFORMATIKA</b>

                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block">Tambah Data Praktikum <i class="fa fa-angle-down"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('prak01_algoprog/tambah'); ?>">Algoritma Pemrograman</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak02_algostruk/tambah'); ?>">Algoritma Struktur Data</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?php echo base_url('prak03_basisdata/tambah'); ?>">Basis Data</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak04_pbo/tambah'); ?>">PBO</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak05_sistemoperasi/tambah'); ?>">Sistem Operasi</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak06_web/tambah'); ?>">Pemrograman Berbasis Web</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak07_jarkom/tambah'); ?>">Jaringan Komputer</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak08_rpl/tambah'); ?>">Rekayasa Perangkat Lunak</a>
                        <a class="dropdown-item" href="<?php echo base_url('prak09_sisdig/tambah'); ?>">Sistem Digital</a>
                    </div>
                </li>
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('public/matrix/assets/images/users/1.jpg') ?>" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="#"><i class="ti-user m-r-5 m-l-5"></i> Profile</a>
                        <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a> 
                                <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <div class="p-l-30 p-10"><a href="#" class="btn btn-sm btn-success btn-rounded">Absen Masuk</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('dashboard'); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Beranda</span></a></li>


                <?php if ($this->session->userdata('akses') == '1') : ?>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Kartu Anggota</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> Struktural Fakultas </span></a></li>
                            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> Struktural Laboratory </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('kartuanggota/userdata'); ?>" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> Data Anggota </span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>



                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('praktikum'); ?>" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Praktikum</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Rekap Arsip</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?php echo base_url('rekaparsip/sop_lab'); ?>" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> SOP Laboratorium </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('rekaparsip/rapat'); ?>" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> Rapat Aslab </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('rekaparsip/lpj_kegiatan'); ?>" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> LPJ Kegiatan </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> Peminjaman Lab </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> Peminjaman Buku </span></a></li>
                    </ul>
                </li>


                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Divisi</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?php echo base_url('divitsupport/it_support'); ?>" class="sidebar-link"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu"> IT Support </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu"> Jaringan </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu"> Pemrograman </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu"> Humas </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu"> Usaha </span></a></li>
                    </ul>
                </li>


                <?php if ($this->session->userdata('akses') == '1') : ?>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-hospital-building"></i><span class="hide-menu">Status Laboratorium</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="<?php echo base_url('softcomputing/soft_computing'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Soft Computing </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('sistemoperasi/sistem_operasi'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Sistem Operasi </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('algoprog/algo_prog'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Algo Pemrograman </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('jarkom/jaringan_komputer'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Jaringan Komputer </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('labserver/server'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Server </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('labrpl/rekayasa_perangkat_lunak'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Rekayasa Perangkat Lunak </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('labdb/database_web'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Database & Web </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('labsisdig/sistem_digital'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Sistem Digital </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('labalgostruk/algoritma_struktur_data'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Algoritma Struktur Data </span></a></li>
                            <li class="sidebar-item"><a href="<?php echo base_url('labpbo/pemrograman_berorientasi_objek'); ?>" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> PBO </span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('bugreport'); ?>" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Bug Report</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->