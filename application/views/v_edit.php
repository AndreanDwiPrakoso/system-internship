<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Form Ubah Data</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
            <div class="card pb-5">
                <div class="card-header border-0">
                </div>
                <div class="container">
                    <?php foreach ($edit as $data) : ?>
                        <form action="<?= base_url() . 'c_dashboard/update'; ?>" method="POST" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label class="fom-control-label font-weight-bold">Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control" value="<?= $data['id'] ?>" name="id" id="validationCustomUsername" placeholder="Select date" type="hidden" required>
                                    <input class="form-control" value="<?= $data['date'] ?>" name="date" id="validationCustomUsername" placeholder="Select date" type="date" required>
                                    <div class="invalid-feedback text-left">
                                        Silahkan Pilih Tanggal
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="fom-control-label font-weight-bold">Schedule</label>
                                <textarea class="form-control" name="schedule" id="exampleFormControlTextarea1 validationCustomUsername" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi" required><?= $data['schedule'] ?></textarea>
                                <div class="invalid-feedback text-left">
                                    Schedule Belum Diisi
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                    </div>
                                    <input class="form-control" value="<?= $data['execute_time'] ?>" name="execute_time" id="validationCustomUsername" placeholder="Waktu Pelaksanaan Wajib Diisi" type="text" required>
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
                                <label class="fom-control-label font-weight-bold">Schedule Tambahan</label>
                                <textarea class="form-control" name="schedule2" id="exampleFormControlTextarea1" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule"><?= $data['schedule2'] ?></textarea>
                                <div class="invalid-feedback text-left">
                                    Schedule Belum Diisi
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                    </div>
                                    <input class="form-control" value="<?= $data['execute_time2'] ?>" name="execute_time2" placeholder="Waktu Pelaksanaan Wajib Diisi" type="text">
                                    <div>
                                        <span class="input-group-text" id="inputGroupPrepend2">Jam</span>
                                    </div>
                                    <div class="invalid-feedback text-left">
                                        Waktu Pelaksanaan Belum Diisi
                                    </div>
                                </div>
                            </div>
                            <div class="float-right">
                                <button class="btn btn-primary mb-1" type="submit"><i class="ni ni-check-bold"></i> Submit form</button>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>