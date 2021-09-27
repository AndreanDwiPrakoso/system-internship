<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Form Tambah Data</h6>
                    </nav>
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
                    <form action="<?= base_url('c_dashboard/action_input'); ?>" method="POST" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Tanggal</label>
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
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <!-- <textarea class="form-control" name="schedule" id="exampleFormControlTextarea1 validationCustomUsername" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi" required></textarea> -->
                            <textarea name="schedule" id="content" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Durasi Pelaksanaan</label>
                            <!-- <textarea class="form-control" htmlspecialchars name="schedule" id="exampleFormControlTextarea1 validationCustomUsername" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi" required><?= $data['schedule'] ?></textarea> -->
                            <textarea name="execute_time" id="content2" required></textarea>
                        </div>

                        <!-- <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule2" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time2" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule3" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time3" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule4" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time4" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule5" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time5" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule6" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time6" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule7" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time7" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule8" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time8" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule9" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time9" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div>

                        <hr style="height:2px;border:none;color:#333;background-color:#bbb8b8;" />

                        <div class="form-group">
                            <label class="fom-control-label font-weight-bold">Schedule</label>
                            <textarea class="form-control" name="schedule10" rows="3" aria-describedby="inputGroupPrepend" placeholder="Schedule Wajib Diisi"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" name="execute_time10" rows="3" aria-describedby="inputGroupPrepend" placeholder="Durasi Pelaksanaan Wajib Diisi"></input>
                            </div>
                        </div> -->

                        <div class="float-right">
                            <button class="btn btn-primary mb-1" type="submit"><i class="ni ni-check-bold"></i> Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>