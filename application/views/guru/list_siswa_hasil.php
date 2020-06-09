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
                            <th scope="col">No.</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Skor</th>
                            <th scope="col">Hasil</th>
                            <th scope="col">Aksi</th>
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
                                <td><a class="btn btn-primary <?php echo isset($dat['nilai']) ? "disabled" : '' ?>" type="button" href="<?php echo  site_url('guru/hasil/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/PG/' . $dat['user_id']) ?>">Pilihan Ganda</a>&nbsp;
                                    <a class="btn btn-primary <?php echo isset($dat['nilai']) ? "disabled" : '' ?>" type="button" href="<?php echo  site_url('guru/hasil/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/Esai/' . $dat['user_id']) ?>">Esai</a></td>
                                <td>
                                    <form action="<?php echo  site_url('guru/hasil/fix/' . $dat['user_id']) ?>" method="<?php echo  'POST' ?>">
                                        <?php if (!isset($dat['nilai'])) { ?>
                                            <input type="hidden" class="d-none" name="nilai" value="<?php echo $dat['skor'] ?>">
                                            <input type="hidden" class="d-none" name="id" value="<?php echo $dat['id'] ?>">
                                        <?php } ?>
                                        <button type="submit" class="btn btn-danger" <?php echo isset($dat['nilai']) ? "disabled" : '' ?>>Simpan</button>
                                    </form>

                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="fixNilai" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Fix Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Anda yakin akan fix nilai siswa ini?</h6>
                    <small>Setelah nilai di fix, anda tidak bisa mengubah kembali nilai esai !</small>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>