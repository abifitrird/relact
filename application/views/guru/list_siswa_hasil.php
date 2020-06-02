<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<?php include("header.php") ?>
<div class="container-fluid">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Skor</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data as $dat) { ?>
                <tr>
                    <th><?php echo $i ?></th>
                    <td><?php echo $dat['nis'] ?></td>
                    <td><?php echo $dat['nama'] ?></td>
                    <td><?php echo $dat['skor'] ?></td>
                    <td><a class="btn btn-primary" type="button" href="<?php echo site_url('guru/hasil/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/PG/' . $dat['user_id']) ?>">Pilihan Ganda</a>&nbsp;
                        <a class="btn btn-primary" type="button" href="<?php echo site_url('guru/hasil/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/Esai/' . $dat['user_id']) ?>">Esai</a></td>
                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>
</div>