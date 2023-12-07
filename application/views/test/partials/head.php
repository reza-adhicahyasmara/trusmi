<?php 
    $notifikasi = 0;
    $url_gambar_profil = base_url('assets/images/banner/user_solid.png');
?>  

<style>
    #chat3 .form-control {
        border-color: transparent;
    }

    #chat3 .form-control:focus {
        border-color: transparent;
    }

    .badge-dot {
        border-radius: 50%;
        height: 10px;
        width: 10px;
        margin-left: 2.9rem;
        margin-top: -.75rem;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<!--  

    PPPPPPPP    RRRRRRRR    II      AA            II  DDDDDDD         AA      MMMM        MMMM      AA      NNNN        NN        MMMM        MMMM  EEEEEEEEEE  RRRRRRRR    TTTTTTTTTT  UU      UU      AA
    PP     PP   RR     RR   II     AAAA           II  DD    DD       AAAA     MM MM      MM MM     AAAA     NN NN       NN        MM MM      MM MM  EE          RR     RR       TT      UU      UU     AAAA 
    PP      PP  RR      RR  II    AA  AA          II  DD     DD     AA  AA    MM  MM    MM  MM    AA  AA    NN  NN      NN        MM  MM    MM  MM  EE          RR      RR      TT      UU      UU    AA  AA
    PP     PP   RR     RR   II   AA    AA         II  DD      DD   AA    AA   MM   MM  MM   MM   AA    AA   NN   NN     NN        MM   MM  MM   MM  EE          RR     RR       TT      UU      UU   AA    AA
    PPPPPPPP    RRRRRRRR    II  AAAAAAAAAA        II  DD      DD  AAAAAAAAAA  MM    MMMM    MM  AAAAAAAAAA  NN    NN    NN        MM    MMMM    MM  EEEEEE      RRRRRRRR        TT      UU      UU  AAAAAAAAAA
    PP          RR     RR   II  AA      AA        II  DD      DD  AA      AA  MM            MM  AA      AA  NN     NN   NN        MM            MM  EE          RR     RR       TT      UU      UU  AA      AA
    PP          RR      RR  II  AA      AA        II  DD     DD   AA      AA  MM            MM  AA      AA  NN      NN  NN        MM            MM  EE          RR      RR      TT      UU      UU  AA      AA
    PP          RR      RR  II  AA      AA        II  DD    DD    AA      AA  MM            MM  AA      AA  NN       NN NN        MM            MM  EE          RR      RR      TT       UU    UU   AA      AA
    PP          RR      RR  II  AA      AA        II  DDDDDDD     AA      AA  MM            MM  AA      AA  NN        NNNN        MM            MM  EEEEEEEEEE  RR      RR      TT        UUUUUU    AA      AA

by exitus
reza.adhicahyasmara.github.io
-->
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php if($notifikasi != 0){echo "(".$notifikasi.") ";} echo $pageTitle; ?></title>
    
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <link href="<?php echo base_url('assets/images/banner/logo1.png'); ?>" rel="icon">
    <link href="<?php echo base_url('assets/images/banner/logo1.png'); ?>" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/datatables-1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/Responsive-2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datetimepicker/jquery.datetimepicker.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/floating-labels/floating-labels.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/remixicon/remixicon.css"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/nice-admin/css/style.css">

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets/images/banner/logo1.png'); ?>" alt="">
                <span class="d-none d-lg-block">TES SOAL</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="<?php echo $url_gambar_profil; ?>" class="rounded-circle" Alt="Profile">
                        <span class="d-none d-md-block dropdown-toggle ps-2">REZA ADHICAHYASMARA</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('profil_karyawan'); ?>"><i class="bi bi-person"></i><span>Profilku</span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('login/logout'); ?>"><i class="bi bi-box-arrow-right"></i><span>Keluar</span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </header>

    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"><a class="nav-link collapsed" href="<?php echo base_url('admin/test'); ?>"><i class="bi bi-grid"></i><span>Test</span></a></li>
        </ul>
    </aside>

    
    <div id="modal_campur" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-load">

                </div>
            </div>
        </div>
    </div>