<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reset Password</title>
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
        <div class="vh-100 d-flex justify-content-center align-self-center align-items-baseline row px-5">
            <div class="row shadow bg-light rounded konten col-12 mt-5">
                <div class="col-12">
                    <!-- form -->
                    <div id="content" class="col-12 shadow p-4 my-4 bg-white rounded">
                        <h5 class="text-center">Ubah Password</h5>
                        <hr>
                        <form method="POST" class="d-flex flex-wrap row" action="<?php echo site_url("ubah/" . $token); ?>">
                            <div class="form-group col-12">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="passwordConf">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="passwordConf" name="passwordConfirmation" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" style="width: 100%">Ubah password</button>
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