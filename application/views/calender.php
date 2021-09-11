<div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6">
                    <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Full calendar</h6>
                    <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url('c_dashboard/calender'); ?>"><i class="ni ni-calendar-grid-58"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('c_dashboard/calender'); ?>">Kalender</a></li>
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