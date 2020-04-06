<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kelas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<?php include("header.php") ?>
<div class="m-3 bd-highlight">
    <div class="d-flex align-content-start flex-wrap">
        <?php foreach ($data as $dat) { ?>
            <div class="px-1 mb-2 col-3">
                <div class="bg-white rounded shadow-sm d-flex flex-wrap">
                    <div class="px-2 pt-3 col-12 rounded-top text-white bg-dark">
                        <a href="<?php echo site_url('guru/kelas/' . $dat['id']) ?>" class="text-white">
                            <h4><?php echo $dat['nama_mapel'] ?></h4>
                        </a>
                        <h5>
                            <code><?php echo $dat['code'] ?></code>
                        </h5>
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

<!-- footer -->
<?php //include("footer.php") 
?>
<!-- /#page-content-wrapper -->
</div>
</div>

<div class="modal fade" id="tambahKelas" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kelas Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('guru/kelas') ?>" method="POST">
                    <div class="form-group">
                        <label for="namaKelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="namaKelas" name="namaKelas" required>
                    </div>
                    <div class="form-group">
                        <label for="mataPelajaran">Mata Pelajaran</label>
                        <select id="mataPelajaran" class="form-control" name="mataPelajaran" required>
                            <option value="1">Basis Data</option>
                            <option value="2">Pemrograman Dasar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahunPeriode">Tahun Periode</label>
                        <input type="text" class="form-control" id="tahunPeriode" name="tahunPeriode" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>

</html>