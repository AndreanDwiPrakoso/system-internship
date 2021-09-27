<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Schedule Internship</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url('c_dashboard') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('c_dashboard') ?>">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Schedule</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col text-right">
                            <a class="btn btn-icon btn-success" href="<?= base_url('c_dashboard/export'); ?>" target="_blank">
                                <span class="btn-inner--icon text-white"><i class="fas fa-print"></i> Export</span>
                                <!-- <span>export</span> -->
                            </a>
                            <a class="btn btn-md btn-primary" href="<?= base_url('c_dashboard/form_input'); ?>"><i class="fas fa-plus"></i> Tambah Data Kegiatan</a>
                            <!-- <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Tambah Data Kegiatan</button> -->
                        </div>
                    </div>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th class="pl-6">KEGIATAN</th>
                                <th>DURASI PELAKSANAAN</th>
                                <th class="pl-6">OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tampil_data as $data) { ?>
                                <tr>
                                    <th class="align-middle"><?= $no++ ?></th>
                                    <th class="align-middle"><?= $data->date ?></th>
                                    <th class="text-uppercase"><?= $data->schedule ?></th>
                                    <th class="text-uppercase"><?= $data->execute_time ?></th>
                                    <td class="align-middle">
                                        <a href="<?= base_url('c_dashboard/edit/' . $data->id) ?>" class="btn btn-sm btn-warning">
                                            <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                            <span class="btn-inner--text">Edit</span>
                                        </a>
                                        <!-- <a href="<?= base_url('c_dashboard/delete/' . $data->id); ?>" class="btn btn-sm btn-danger remove remove-done"> -->
                                        <a href="<?= base_url('c_dashboard/delete/' . $data->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Data Akan Dihapus?')">
                                            <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                                            <span class="btn-inner--text">Delete</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>