<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Capaian Belajar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
  <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<?php include('header.php') ?>
<!-- isi halaman -->
<div class="m-3 bd-highlight">
  <div class="d-flex align-content-start flex-wrap">
    <?php foreach ($materi as $dat) { ?>
      <div class="px-1 mb-2 col-3">
        <div class="bg-white rounded shadow-sm d-flex flex-wrap">
          <div class="px-2 pt-3 col-12 rounded-top text-white bg-dark">
            <h4><?php echo $dat['mata_pelajaran'] ?></h4>
            <h5>
              <?php echo $dat['judul_materi'] ?>
            </h5>
          </div>
          <div class="col-12 px-2 py-3">
            <p class="px-2 py-1">
              Selamat!, Anda telah menyelesaikan materi ini pada tanggal: <br />
              <code><?php echo date_format(date_create($dat['created_at']), "d-m-Y H:i") ?></code>
            </p>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php foreach ($soal as $dat) { ?>
      <div class="px-1 mb-2 col-3">
        <div class="bg-white rounded shadow-sm d-flex flex-wrap">
          <div class="px-2 pt-3 col-12 rounded-top text-white bg-dark">
            <h4><?php echo $dat['mata_pelajaran'] ?></h4>
            <h5>
              <?php echo $dat['judul_materi'] ?>
            </h5>
          </div>
          <div class="col-12 px-2 py-3">
            <p class="px-2 py-1">
              Selamat!, Anda telah menyelesaikan soal pada materi ini pada tanggal: <br />
              <code><?php echo date_format(date_create($dat['created_at']), "d-m-Y H:i") ?></code>
            </p>
          </div>
        </div>
      </div>
    <?php } ?>
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