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

<body>
  <div class="d-flex" id="wrapper">
    <?php include('sidebar.php') ?>
    <div id="page-content-wrapper">
      <?php include('navbar.php') ?>
      <!-- isi halaman -->
      <div class="m-3 bd-highlight">
        <div class="list-group">
          <?php foreach ($soal as $dat) { ?>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex flex-column">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"> <?php echo $dat['mata_pelajaran'] ?></h5>
                  <span>Nilai</span>
                </div>
                <div class="d-flex w-100 justify-content-between">
                  <div>
                    <h6>Soal <?php echo $dat['judul_materi'] ?></h6>
                    <p class="mb-0">Selesai pada: <code><?php echo date_format(date_create($dat['created_at']), "d-m-Y") ?></code> jam <code><?php echo date_format(date_create($dat['created_at']), "H:i") ?></code> WIB</p>
                  </div>
                  <div>
                    <code><?php echo isset($dat['nilai']) ? $dat['skor'] : " " ?></code>
                    <!-- <small class="text-muted"><?php echo isset($dat['nilai']) ? '' : '(Belum fix)' ?></small> -->
                  </div>
                </div>
              </div>
            </a>
          <?php } ?>
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