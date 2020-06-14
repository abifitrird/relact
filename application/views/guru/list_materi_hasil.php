<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Hasil/Materi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul Materi</th>
                                <th scope="col">Kode Materi</th>
                                <th class="text-right" scope="col">Lihat Hasil Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data as $dat) { ?>
                                <tr>
                                    <th><?php echo $i ?></th>
                                    <td><?php echo $dat['judul'] ?></td>
                                    <td><?php echo $dat['kode'] ?></td>
                                    <td class="text-right"><a class="btn btn-primary" type="button" href="<?php echo site_url('guru/hasil/' . $this->uri->segment(3) . '/materi/' . $dat['kode']) ?>">Lihat Siswa</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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