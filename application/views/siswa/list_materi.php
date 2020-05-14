<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Materi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<?php include("header.php") ?>
<div class="container-fluid shadow-sm" style="padding: 25px">
<?php if (!$data) { ?>
<div class="alert alert-danger col-12" role="alert">
        <h4 class="alert-heading">Tidak ada materi!</h4>
        <hr />
        <p class="mb-0">
            Silahkan hubungi guru pengampu untuk menambahkan materi.
        </p>
        </div>
<?php } else { ?>
  <h3>Berikut adalah daftar materi dalam kelas <?php echo $data[0]['nama_mapel'] ?></h3>
  <br>
  <div class="list-group">
    <?php foreach ($data as $dat) { ?>
      <a href="<?php echo base_url('siswa/kelas/' . $this->uri->segment(3) . '/materi/' . $dat['kode']) ?>" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?php echo $dat['judul'] ?></h5>
        </div>
        <p class="mb-1 text-truncate"><?php echo str_replace(['<p>', '</p>', '<br>'], " ", substr($dat['konten'], 0, 160)) ?></p>
      </a>
    <?php }} ?>
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