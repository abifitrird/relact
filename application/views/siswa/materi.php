<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Materi <?php echo $data['judul'] ?></title>
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
      <div class="container-fluid shadow-sm" style="padding: 25px">
        <h1><?php echo $data['judul'] ?></h1>
        <div>
          <p><?php echo $data['konten'] ?></p>
        </div>
      </div>

      <div class="modal fade" id="kerjakanSoal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Mengerjakan Soal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6>Apa anda yakin sudah siap mengerjakan soal?</h6>
            </div>
            <div class="modal-footer">
              <form action="<?php echo site_url('siswa/soal/' . urlencode(base64_encode($this->uri->segment(5) . '.' . $this->session->userdata('user_id')))) ?>" method="POST">
                <button type="submit" class="btn btn-primary">Yakin</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </form>
            </div>
          </div>
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