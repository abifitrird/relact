<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body style="background-color: #34ace0;">
    <!-- container -->
    <div class="container">
        <div class="col-12 justify-content-center row px-5">
            <?php if ($this->session->flashdata('alert')) { ?>
                <div class=" alert alert-danger fixed-top text-center" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('success')) { ?>
                <div class=" alert alert-success fixed-top text-center" role="alert">
                    <?php echo $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
        </div>

        <div class="vh-100 d-flex justify-content-center align-self-center align-items-start mt-0 align-items-md-center row px-2 px-md-5 pb-md-5">
            <div class="row shadow bg-light rounded konten col-12 mt-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-7 d-none d-md-block">
                            <div class="container4">
                                <img src="<?php echo base_url('assets/images/logo_Relact.png') ?>" width="250">
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <!-- form -->
                            <div id="content" class="shadow my-5 bg-white rounded p-3">
                                <h5 class="text-center">Masuk ke Relact</h5>
                                <hr>
                                <form method="POST" action="<?php echo site_url('login') ?>">
                                    <div class="form-group">
                                        <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="inputUsername" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                                    </div>
                                    <div class="align-center">
                                        <button type="submit" class="my-2 btn btn-primary" style="width: 100%">MASUK</button>
                                        <p><a href="#lupaPassword" data-toggle="modal">Lupa password?</a></p>
                                        <p>Belum punya akun? <a href="<?php echo site_url('daftar'); ?>">Daftar</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>

    <div class="modal fade" id="lupaPassword" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Lupa Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url('lupa') ?>" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" autofocus>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>