<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Jawaban</title>
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Pertanyaan</th>
                                <?php if (isset($data[0]['pilihan_soal_id'])) { ?>
                                    <th scope="col">Jawaban</th>
                                    <th scope="col">Keterangan</th>
                                <?php } else { ?>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data as $dat) { ?>
                                <tr>
                                    <th><?php echo $i ?></th>
                                    <td><?php echo $dat['pertanyaan'] ?></td>
                                    <?php if (isset($dat['pilihan_soal_id'])) { ?>
                                        <td><?php echo $dat['jawaban'] ?></td>

                                        <td><?php echo $dat['pilihan_soal_id'] == $dat['kunci_soal'] ? '❌' : '✅'; ?></td>
                                    <?php } else { ?>
                                        <td><?php echo $dat['nilai'] ?></td>
                                        <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#cekJawaban<?php echo $dat['id'] ?>">Lihat Jawaban</button></td>
                                    <?php } ?>
                                </tr>
                            <?php $i++;
                            } ?>
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

<?php foreach ($data as $dat) { ?>
    <div class="modal fade" id="cekJawaban<?php echo $dat['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Koreksi Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url('api/simpan_nilai_esai/' . $this->uri->segment(7)) ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $dat['id'] ?>" />
                        <textarea readonly class="form-control" rows="8"><?php echo $dat['jawaban'] ?></textarea>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" required value="<?php echo isset($dat['nilai']) ? $dat['nilai'] : "0" ?>" max="<?php echo $dat['bobot'] ?>" min="0" />
                        </div>

                </div>
                <div class=" modal-footer">

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>