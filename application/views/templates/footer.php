<!-- Footer -->
<footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
                &copy; <?= date('Y') ?> <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="<?= base_url('assets/'); ?>vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/chart.js/dist/Chart.extension.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- Argon JS -->
<script src="<?= base_url('assets/'); ?>js/argon.js?v=1.1.0"></script>
<!-- Demo JS - remove this in your project -->
<script src="<?= base_url('assets/'); ?>js/demo.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    $('.remove').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        swal({
            title: 'Apakah Anda Yakin',
            text: 'Data Akan Dihapus?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085D6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });
</script>
</body>

</html>