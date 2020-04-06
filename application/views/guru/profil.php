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
<div class="container-fluid">
    <div class="row shadow-sm" style="padding: 25px">
        <div class="col-2">
            <img src="<?php echo base_url('assets/images/patrick.gif') ?>" class="shadow-sm rounded-circle src=" ./assets/images/patrick.gif" style=" width: 150px; height: 150px;">
        </div>
        <div class="col-10 my-auto">
            <h2><?php echo $data['nama_lengkap'] ?></h2>
            <p style="color: gray">
                NIP : <?php echo $data['nomor_induk'] ?>
            </p>
        </div>
    </div>
    <div class="row shadow-sm" style="padding: 25px">
        <div class="col-12">
            <table>
                <tr>
                    <th>Jabatan</th>
                    <td>: <?php echo $this->session->userdata('role') ?></td>
                </tr>
                <tr>
                    <th>Sekolah</th>
                    <td>: <?php echo $data['nama_sekolah'] ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: <?php echo $data['alamat'] ?></td>
                </tr>
                <tr>
                    <th>No. Telp/HP</th>
                    <td>: <?php echo $data['no_hp'] ?></td>
                </tr>
            </table>
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
                <form action="<?php echo base_url('Profil/updateProfil') ?>" method="POST">
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
                    </div>
                    <div class="form-group">
                        <label for="nomorInduk">Nomor Induk Pegawai (NIP)</label>
                        <input type="text" class="form-control" id="nomorInduk" name="nomorInduk">
                    </div>
                    <div class="form-group">
                        <label for="sekolah">Sekolah</label>
                        <select id="sekolah" class="form-control" name="sekolah" required>
                            <option value="1">SMKN 1 Cimahi</option>
                            <option value="2">SMKN 1 Bandung</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea class="form-control" id="Alamat" name="Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="noTelp">No. Telp/HP</label>
                        <input type="text" class="form-control" id="noTelp" name="noTelp">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
            </form>
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
<?php //include("footer.php") 
?>
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