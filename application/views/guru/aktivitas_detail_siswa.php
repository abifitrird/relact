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
                        <th>Nama</th>
                        <td>:&nbsp;<?php echo isset($data[0]['nama']) ? $data[0]['nama'] : "Belum diisi" ?></td>
                    </tr>
                    <tr>
                        <th>NIS</th>
                        <td>:&nbsp;<?php echo isset($data[0]['nis']) ? $data[0]['nis'] : "Belum diisi"  ?></td>
                    </tr>
                </table>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>url</th>
                            <th>Judul Materi</th>
                            <th>Soal</th>
                            <th>Waktu Akses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data as $dat) { ?>
                            <tr>
                                <th><?php echo $i ?></th>
                                <td><?php echo $dat['url'] ?></td>
                                <td><?php echo $dat['judul_materi'] ?></td>
                                <td><?php echo $dat['is_soal'] ? "Ya" : "Tidak" ?></td>
                                <td><?php echo $dat['waktu_akses'] ?></td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>