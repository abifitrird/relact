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

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <!-- Logo dan nama aplikasi -->
            <div class="sidebar-heading" style="text-align: center;">LOGO</div>
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url("Teacher/Guru") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,3L20,9V21H15V14H9V21H4V9L12,3Z" /></svg>
                    Beranda
                </a>
                <a href="<?php echo base_url("Profil") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" /></svg>
                    Profil Saya
                </a>
                <a href="<?php echo base_url("Teacher/Kelas") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M23,2H1A1,1 0 0,0 0,3V21A1,1 0 0,0 1,22H23A1,1 0 0,0 24,21V3A1,1 0 0,0 23,2M22,20H20V19H15V20H2V4H22V20M10.29,9.71A1.71,1.71 0 0,1 12,8C12.95,8 13.71,8.77 13.71,9.71C13.71,10.66 12.95,11.43 12,11.43C11.05,11.43 10.29,10.66 10.29,9.71M5.71,11.29C5.71,10.58 6.29,10 7,10A1.29,1.29 0 0,1 8.29,11.29C8.29,12 7.71,12.57 7,12.57C6.29,12.57 5.71,12 5.71,11.29M15.71,11.29A1.29,1.29 0 0,1 17,10A1.29,1.29 0 0,1 18.29,11.29C18.29,12 17.71,12.57 17,12.57C16.29,12.57 15.71,12 15.71,11.29M20,15.14V16H16L14,16H10L8,16H4V15.14C4,14.2 5.55,13.43 7,13.43C7.55,13.43 8.11,13.54 8.6,13.73C9.35,13.04 10.7,12.57 12,12.57C13.3,12.57 14.65,13.04 15.4,13.73C15.89,13.54 16.45,13.43 17,13.43C18.45,13.43 20,14.2 20,15.14Z" /></svg>
                    Kelas
                </a>
                <a href="<?php echo base_url("Teacher/CapaianSiswa") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M17 4V2H7V4H2V11C2 12.1 2.9 13 4 13H7.1C7.5 14.96 9.04 16.5 11 16.9V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V16.9C14.96 16.5 16.5 14.96 16.9 13H20C21.1 13 22 12.1 22 11V4H17M4 11V6H7V11L4 11M20 11L17 11V6H20L20 11Z" /></svg>
                    Capaian Siswa
                </a>
                <a href="<?php echo base_url("Maintenances") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4C22,2.89 21.1,2 20,2Z" /></svg>
                    Kotak Saran
                </a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg border-bottom shadow-sm">
                <button class="btn shadow-none pr-3" id="menu-toggle"><svg style="width:24px; height:24px; color: white;" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
                </button>
                <h5 style="color: white">RELACT</h5>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li>
                        <button type="button" class="btn btn-success mr-1" data-toggle="modal" data-target="#tambahKelas">
                            Tambah Kelas
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <span class="text-white"><?php echo $this->session->userdata("nama"); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                            <a class="dropdown-item" href="#">Bantuan</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('Login/Logout') ?>">Keluar</a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- isi halaman -->
            <div class="m-3 bd-highlight">
                <div class="d-flex align-content-start flex-wrap">
                    <?php foreach ($data as $dat) { ?>
                        <div class="px-1 mb-2 col-3">
                            <div class="bg-white rounded shadow-sm d-flex flex-wrap">
                                <div class="px-2 pt-3 col-12 rounded-top text-white bg-dark">
                                    <a href="<?php echo base_url('Teacher/Kelas/listMateri') ?>" class="text-white">
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

            <!-- Modal Tambah Kelas -->
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
                            <form action="<?php echo base_url('Teacher/Kelas/saveKelas') ?>" method="POST">
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