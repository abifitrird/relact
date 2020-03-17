<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda - Guru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<?php include('header.php') ?>
<!-- isi halaman -->
        <div class="container-fluid shadow-sm" style="padding: 25px">
            <h1>Soal</h1>
            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Kunci Jawaban</th>
                <th scope="col">Tipe Soal</th>
                <th scope="col">Bobot</th>
                <th scope="col" style="text-align: center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Fungsi yang menggunakan pemilihan keputusan dalam pemrograman dasar disebut dengan fungsi</td>
                <td>Percabangan</td>
                <td>Pilihan Ganda</td>
                <td>10</td>
                <td style="text-align: center; white-space: nowrap; width: 1%">
                  <a href="#"><button class="btn btn-success">Edit</button></a>
                  <a href="#"><button class="btn btn-danger">Hapus</button></a>
                </td>
                </tr>
            </tbody>
        </table>
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