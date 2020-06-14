<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Capaian Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php include('sidebar.php') ?>
        <div id="page-content-wrapper">
            <?php include('navbar.php') ?>
            <div class="m-3 bd-highlight">
                <div class="d-flex align-content-start flex-wrap">
                    <?php foreach ($data as $dat) { ?>
                        <div class="px-1 mb-2 col-12 col-sm-12 col-md-8 col-lg-4 col-xl-3">
                            <div class="bg-white rounded shadow-sm d-flex flex-wrap">
                                <div class="px-2 pt-3 col-12 rounded-top text-white bg-dark">
                                    <a href="<?php echo site_url('guru/aktivitas/' . $dat['code']) ?>" class="text-white">
                                        <h4><?php echo $dat['nama_mapel'] ?></h4>
                                    </a>
                                    <h5>Aktivitas Siswa</h5>
                                </div>
                                <div class="col-12 px-2 py-3">
                                    <?php echo $dat['nama'] ?><br>
                                    <?php echo $dat['periode'] ?>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>