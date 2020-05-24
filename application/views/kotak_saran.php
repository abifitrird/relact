<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kotak Saran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body style="background-color: #ecf0f1">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <a href="<?php echo base_url() ?>">
            <h5 class="text-white ml-2">RELACT</h1>
        </a>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                    <span class="text-white"><?php echo $this->session->userdata("nama"); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item" href="#">Bantuan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('Login/Logout') ?>">Keluar</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- form -->
    <div class="container">
        <h2 align="center" class="text-dark my-3">Ada yang bisa kami bantu?</h2>
        <div id="content" class="shadow p-3 mb-5 bg-white rounded col-7" style="margin: 0 auto; height: auto;">
            <form method="POST" action="<?php echo base_url(); ?>Maintenances">
                <div class="form-group">
                    <label for="jenisPertanyaan">Mana di antara kategori berikut yang paling menggambarkan pertanyaan Anda?</label>
                    <select id="jenisPertanyaan" class="form-control" name="jenisPertanyaan" required>
                        <option value="Pendaftaran">Pendaftaran</option>
                        <option value="Fitur Sistem">Fitur Sistem</option>
                        <option value="Kritik dan Saran">Kritik dan Saran</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputJudul">Judul</label>
                    <input type="text" class="form-control" id="inputJudul" name="inputJudul" required>
                </div>
                <div class="form-group">
                    <label for="inputDetail">Detail</label>
                    <textarea class="form-control" id="inputDetail" name="inputDetail" required></textarea>
                    <small id="detailHelp" class="form-text text-muted">Jelaskan pertanyaan Anda di sini. Berikan kami detail selengkap mungkin.</small>
                </div>
                <div class="form-group mb-3">
                    <label for="inputLampiran">Lampiran (opsional)</label><br>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputLampiran">
                        <label class="custom-file-label" for="inputLampiran">Tambah file di sini</label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" style="width: 100%">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php include("footer.php") ?>
</body>

</html>