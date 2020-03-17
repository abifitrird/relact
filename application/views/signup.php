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
<!-- animated text -->
<center>
    <h1 style="color: white">Selamat Datang</h1><br>
    <!-- fade out -->
    <h1 style="color: white">RELACT</h1><br>
    <h5 style="color: white">Recording Learning Activities</h5>
</center>

<!-- form -->
<div class="container">
<div id="content" class="shadow p-3 mb-5 bg-white rounded col-8" style="margin: 0 auto; height: auto; margin-top: 7%;">
    <h2 align="center" >Buat Akun Baru</h2>
    <form method="POST" action="<?php echo base_url(); ?>Signup/daftar">
        <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" id="inputUsername" name="inputUsername" required>
        </div>
        <div class="form-group">
        <label for="inputJabatan">Saya adalah</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioJabatan" id="radioGuru" value="1" required>
                <label class="form-check-label" for="radioGuru">
                    Guru
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioJabatan" id="radioSiswa" value="2" required>
                <label class="form-check-label" for="radioSiswa">
                    Siswa
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" style="width: 100%">DAFTAR</button>
            <hr>
            <p style="text-align: center">Sudah punya akun?</p>
            <a href="<?php echo base_url("Login") ?>" type="button" class="btn btn-secondary" style="width: 100%">MASUK</a>
        </div>
    </form>
</div>
</div>

<!-- footer -->
<?php include("footer.php")?>
</body>
</html>