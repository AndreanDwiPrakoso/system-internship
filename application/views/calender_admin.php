<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Internship Report System</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/'); ?>img/theme/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="<?= base_url('c_dashboard') ?>">
                    <img src="<?= base_url('assets/'); ?>img/brand/logo-sobad.png" class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboards</span>
                            </a>
                            <div class="collapse show" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li <?= $this->uri->segment(2) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : '' ?>>
                                        <a href="<?= base_url('c_admin') ?>" class="nav-link">Schedule</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li <?= $this->uri->segment(2) == 'calender' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : '' ?>>
                            <a class="nav-link" href="<?= base_url('c_admin/calender_detail') ?>">
                                <i class="ni ni-calendar-grid-58 text-red"></i>
                                <span class="nav-link-text">Kalender</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('c_login/logout') ?>" onclick="return confirm('Apakah yakin Akan Logout?')">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><i class="fas fa-user-alt mr-2"></i><?= $this->session->userdata('name') ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">HALO <?= $this->session->userdata('_nickname') ?></h6>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('c_login/logout') ?>" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt ml-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6">
                            <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Full calendar</h6>
                            <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="<?= base_url('c_admin/calender_detail'); ?>"><i class="ni ni-calendar-grid-58"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('c_admin/calender_detail'); ?>">Kalender</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
                            <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                                <i class="fas fa-angle-left"></i>
                            </a>
                            <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Bulan</a>
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Minggu</a>
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Hari</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <!-- Fullcalendar -->
                    <div class="card card-calendar">
                        <!-- Card header -->
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="h3 mb-0">Kalender</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <div class="calendar" data-toggle="calendar" id="calendar"></div>
                        </div>
                    </div>