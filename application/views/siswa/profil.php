<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profil Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<?php include("header.php") ?>

<!-- isi halaman -->
<div class="container">
    <div class="row shadow-sm" style="padding: 25px">
        <div class="col-2">
            <img src="<?php echo base_url('assets/images/patrick.gif') ?>" class="shadow-sm rounded-circle src=" ./assets/images/patrick.gif" style=" width: 150px; height: 150px;">
        </div>
        <div class="col-10 my-auto">
            <h3>Nama Lengkap</h3>
            <p style="color: lightgray">
                Tambahkan bio singkat untuk memperkenalkan diri anda
            </p>
        </div>
    </div>
    <div class="row shadow-sm" style="padding: 25px">
        <div class="col-12">
            <p>
                NIS<br>
                Jabatan<br>
                Sekolah<br>
                Alamat<br>
                No. Telp/HP<br>
                Alamat email<br>
            </p>
        </div>
        <div class="row flex-row ml-md-auto d-md-flex">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#editProfil">
                Edit Profil Saya
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editPassword">
                Edit Password Saya
            </button>
        </div>
    </div>
</div>

<!-- Modal Edit Profil -->
<div class="modal fade" id="editProfil" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Profil Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="NIS">Nomor Induk Siswa (NIS)</label>
                        <input type="text" class="form-control" id="NIS" name="NIS">
                    </div>
                    <div class="form-group">
                        <label for="Sekolah">Sekolah</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea class="form-control" id="Alamat" name="Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="noTelp">No. Telp/HP</label>
                        <input type="text" class="form-control" id="noTelp" name="noTelp">
                    </div>
                    <div class="form-group">
                        <label for="Email">Alamat Email</label>
                        <input type="email" class="form-control" id="Email" name="Email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Password -->
<div class="modal fade" id="editPassword" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Password Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="passwordLama">Password Saat Ini</label>
                        <input type="password" class="form-control" id="passwordLama" name="passwordLama" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="passwordBaru">Password Baru</label>
                        <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" required>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasiPassword">Ketik Ulang Password Baru</label>
                        <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include("footer.php") ?>
<!-- /#page-content-wrapper -->
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