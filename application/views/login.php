<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color: #34ace0;">

<!-- container -->
<div class="container">
    <div class="row shadow m-5 bg-light rounded konten">
        <div class="col-12">
            <div class="row">
                <div class="col-7">
                <!-- gambar -->
                </div>
                <div class="col-5">
                    <!-- form -->
                    <div id="content" class="shadow mb-5 bg-white rounded" style="margin: 0 auto; height: auto; padding: 20px; margin-top: 7%;">
                        <h5 align="center" >Masuk ke Relact</h2>
                        <hr>
                        <form method="POST" action="<?php echo base_url('Login/aksi_login') ?>">
                            <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="inputUsername" name="inputUsername" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                            </div>
                            <center>
                                <a href="#">Lupa kata sandi?</a>
                                <button type="submit" class="my-2 btn btn-primary" style="width: 100%">MASUK</button>
                                <p>Belum punya akun? <a href="<?php echo base_url('Signup'); ?>">Daftar</a></p>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include("footer.php")?>
</body>
</html>