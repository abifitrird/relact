<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Capaian Siswa</title>
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
        <h2>Pilih kelas untuk melihat capaian siswa</h2>
        <br>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jumlah siswa</th>
                <th scope="col">Kode</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>34</td>
                <td>abcd3F</td>
                <td style="text-align: center; white-space: nowrap; width: 1%">
                  <a href="<?php echo base_url('Teacher/CapaianSiswa/logSiswa') ?>"><button class="btn btn-success">Lihat</button></a>
                  <a href="#"><button class="btn btn-danger">Hapus</button></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

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