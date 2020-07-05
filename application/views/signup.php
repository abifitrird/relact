<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar</title>
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
        </div>

        <div class="vh-100 d-flex justify-content-center align-self-center align-items-baseline row px-5">
            <div class="row shadow bg-light rounded konten col-12 mt-5">
                <div class="col-12">
                    <div class="fade-in text-info text-center pt-3">
                        <h2>Selamat Datang<br>
                            RELACT
                        </h2>
                        <h6>Recording Learning Activities</h6>
                    </div>
                    <!-- form -->
                    <div id="content" class="col-12 shadow p-4 my-4 bg-white rounded">
                        <h5 class="text-center">Daftar</h5>
                        <hr>
                        <form method="POST" class="d-flex flex-wrap row" action="<?php echo site_url("daftar"); ?>">
                            <div class="form-group col-12 col-lg-6">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="inputUsername" name="inputUsername" required>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label for="passwordConf">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="passwordConf" name="passwordConfirmation" required>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">DAFTAR</button>
                                <hr>
                                <p class="col-12">Sudah punya akun? <a href="<?php echo site_url("login") ?>">Masuk disini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>