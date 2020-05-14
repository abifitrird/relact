<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
        <!-- Logo dan nama aplikasi -->
        <div class="sidebar-heading" style="text-align: center;">LOGO</div>
            <div class="list-group list-group-flush">
                <a href="<?php echo site_url("siswa") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,3L20,9V21H15V14H9V21H4V9L12,3Z" /></svg>
                    Beranda
                </a>
                <a href="<?php echo site_url("siswa/profil") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" /></svg>
                    Profil Saya
                </a>
                <a href="<?php echo site_url("siswa/kelas") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M23,2H1A1,1 0 0,0 0,3V21A1,1 0 0,0 1,22H23A1,1 0 0,0 24,21V3A1,1 0 0,0 23,2M22,20H20V19H15V20H2V4H22V20M10.29,9.71A1.71,1.71 0 0,1 12,8C12.95,8 13.71,8.77 13.71,9.71C13.71,10.66 12.95,11.43 12,11.43C11.05,11.43 10.29,10.66 10.29,9.71M5.71,11.29C5.71,10.58 6.29,10 7,10A1.29,1.29 0 0,1 8.29,11.29C8.29,12 7.71,12.57 7,12.57C6.29,12.57 5.71,12 5.71,11.29M15.71,11.29A1.29,1.29 0 0,1 17,10A1.29,1.29 0 0,1 18.29,11.29C18.29,12 17.71,12.57 17,12.57C16.29,12.57 15.71,12 15.71,11.29M20,15.14V16H16L14,16H10L8,16H4V15.14C4,14.2 5.55,13.43 7,13.43C7.55,13.43 8.11,13.54 8.6,13.73C9.35,13.04 10.7,12.57 12,12.57C13.3,12.57 14.65,13.04 15.4,13.73C15.89,13.54 16.45,13.43 17,13.43C18.45,13.43 20,14.2 20,15.14Z" /></svg>
                    Kelas
                </a>
                <a href="<?php echo site_url("siswa/capaian") ?>" class="list-group-item list-group-item-action mb-2">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M17 4V2H7V4H2V11C2 12.1 2.9 13 4 13H7.1C7.5 14.96 9.04 16.5 11 16.9V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V16.9C14.96 16.5 16.5 14.96 16.9 13H20C21.1 13 22 12.1 22 11V4H17M4 11V6H7V11L4 11M20 11L17 11V6H20L20 11Z" /></svg>
                    Capaian Belajar
                </a>
                <a href="<?php echo site_url("siswa/saran") ?>" class="list-group-item list-group-item-action mb-2">
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
            <?php if ($this->uri->segment(1) == 'siswa' && $this->uri->segment(2) == 'kelas' && $this->uri->segment(3) == null) { ?>
                <li>
                    <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#masukKelas">
                        Masuk Kelas
                    </button>
                </li>
            <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        <span class="text-white"><?php echo $this->session->userdata("nama"); ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        <a class="dropdown-item" href="#">Bantuan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('Login/Logout')?>">Keluar</a>
                    </div>
                </li>
            </ul>
        </nav>