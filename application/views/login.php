<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/'); ?>img/theme/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/argon.css?v=1.1.0" type="text/css">
</head>

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header py-7 py-lg-5 pt-lg-6">
            <div class="container">
                <div class="header-body text-center">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-5 px-5">
                            <h1 class="text-white mb-7">Selamat Datang!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h4>Silahkan Masukan Username Dan Password</h4>
                            </div>
                            <form action="<?= base_url('c_login/action_login') ?>" method="POST" class="needs-validation" novalidate>
                                <div class="form-group mb-3">
                                    <label class="label-group font-weight-bold">Username</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" name="username" placeholder="Username" id="validationCustomUsername" type="text" autocomplete="off" required>
                                        <div class="invalid-feedback text-left">
                                            Anda Belum Memasukan Username
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-group font-weight-bold">Password</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" name="password" id="validationCustomUsername" placeholder="Password" type="password" required>
                                        <div class="invalid-feedback text-left">
                                            Anda Belum Memasukan password
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <!-- <input type="submit" class="btn btn-primary my-4" value="Log In"> -->
                                    <button type="submit" name="login" class="btn btn-primary my-4"><i class="fas fa-sign-in-alt mr-1"></i>Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
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
</body>

</html>