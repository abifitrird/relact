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
            <div class="container-fluid">
                <table>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td>:&nbsp;<?php echo isset($kelas['mapel']) ? $kelas['mapel'] : "-" ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>:&nbsp;<?php echo isset($kelas['nama']) ? $kelas['nama'] : "-"  ?></td>
                    </tr>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>NIS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data as $dat) { ?>
                            <tr>
                                <th><?php echo $i ?></th>
                                <th><?php echo $dat['nama'] ?></th>
                                <th><?php echo $dat['username'] ?></th>
                                <th><?php echo $dat['nis'] ?></th>
                                <th><a class="btn btn-primary" href="<?php echo site_url('guru/aktivitas/' . $this->uri->segment(3) . '/detail/' . $dat['username']) ?>">Detail</a></th>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
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