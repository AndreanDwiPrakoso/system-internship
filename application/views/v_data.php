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
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Tambah Data Kegiatan</button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="container">
                                            <form action="<?= base_url('c_dashboard/action_input'); ?>" method="POST" class="needs-validation" novalidate>
                                                <div class="row input-daterange align-items-center">
                                                    <div class="col" style="padding-top: 15px; border-bottom-width: 15px; padding-bottom: 15px;">
                                                        <div class="form-group">
                                                            <h2 class="fom-control-label float-left">Form Input</h2><br>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fom-control-label float-left">Tanggal</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                </div>
                                                                <input class="form-control" name="date" id="validationCustomUsername" placeholder="Select date" type="date" required>
                                                                <div class="invalid-feedback text-left">
                                                                    Silahkan Pilih Tanggal
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fom-control-label float-left">Schedule</label>
                                                            <textarea class="form-control" name="schedule" id="exampleFormControlTextarea1 validationCustomUsername" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi" required></textarea>
                                                            <div class="invalid-feedback text-left">
                                                                Schedule Belum Diisi
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                                                </div>
                                                                <input class="form-control" name="execute_time" id="validationCustomUsername" placeholder="Waktu Pelaksanaan Wajib Diisi" type="text" required>
                                                                <div>
                                                                    <span class="input-group-text" id="inputGroupPrepend2">Jam</span>
                                                                </div>
                                                                <div class="invalid-feedback text-left">
                                                                    Waktu Pelaksanaan Belum Diisi
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label class="fom-control-label float-left">Schedule Tambahan</label>
                                                            <textarea class="form-control" name="schedule2" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                                                </div>
                                                                <input class="form-control" name="execute_time2" placeholder="Waktu Pelaksanaan" type="text">
                                                                <div>
                                                                    <span class="input-group-text" id="inputGroupPrepend2">Jam</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-secondary mb-1" type="reset">Reset</button>
                                                        <button class="btn btn-primary mb-1" type="submit">Submit form</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th>KEGIATAN</th>
                                <th>DURASI PELAKSANAAN</th>
                                <th class="pl-6">OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tampil_data as $data) : ?>
                                <tr>
                                    <th class="align-middle"><?= $no++ ?></th>
                                    <th class="align-middle"><?= $data->date ?></th>
                                    <th class="text-uppercase align-middle"><?= $data->schedule . '<br>' . $data->schedule2 ?></th>
                                    <th class="pl-6 text-uppercase align-middle"><?= $data->execute_time . '<br>' . $data->execute_time2 ?></th>
                                    <td class="align-middle">
                                        <a href="<?= base_url('c_dashboard/edit/' . $data->id) ?>" class="btn btn-sm btn-warning">
                                            <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                            <span class="btn-inner--text">Edit</span>
                                        </a>
                                        <a href="<?= base_url('c_dashboard/delete/' . $data->id); ?>" class="btn btn-sm btn-danger remove remove-done">
                                            <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                                            <span class="btn-inner--text">Delete</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>