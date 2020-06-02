<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper" style="background-color: #f7f7f7">
            <!-- Logo dan nama aplikasi -->
            <div class="sidebar-heading" style="text-align: center;">
                <a href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url('assets/images/logoNav_Relact.png') ?>" height="34">
                </a>
            </div>
            <div class="list-group list-group-flush">
                <a href="<?php echo site_url("guru") ?>" class="list-group-item list-group-item-action mb-2 bg-light">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,3L20,9V21H15V14H9V21H4V9L12,3Z" /></svg>
                    Beranda
                </a>
                <a href="<?php echo site_url("guru/profil") ?>" class="list-group-item list-group-item-action mb-2 bg-light">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" /></svg>
                    Profil Saya
                </a>
                <a href="<?php echo site_url("guru/kelas") ?>" class="list-group-item list-group-item-action mb-2 bg-light">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M23,2H1A1,1 0 0,0 0,3V21A1,1 0 0,0 1,22H23A1,1 0 0,0 24,21V3A1,1 0 0,0 23,2M22,20H20V19H15V20H2V4H22V20M10.29,9.71A1.71,1.71 0 0,1 12,8C12.95,8 13.71,8.77 13.71,9.71C13.71,10.66 12.95,11.43 12,11.43C11.05,11.43 10.29,10.66 10.29,9.71M5.71,11.29C5.71,10.58 6.29,10 7,10A1.29,1.29 0 0,1 8.29,11.29C8.29,12 7.71,12.57 7,12.57C6.29,12.57 5.71,12 5.71,11.29M15.71,11.29A1.29,1.29 0 0,1 17,10A1.29,1.29 0 0,1 18.29,11.29C18.29,12 17.71,12.57 17,12.57C16.29,12.57 15.71,12 15.71,11.29M20,15.14V16H16L14,16H10L8,16H4V15.14C4,14.2 5.55,13.43 7,13.43C7.55,13.43 8.11,13.54 8.6,13.73C9.35,13.04 10.7,12.57 12,12.57C13.3,12.57 14.65,13.04 15.4,13.73C15.89,13.54 16.45,13.43 17,13.43C18.45,13.43 20,14.2 20,15.14Z" /></svg>
                    Kelas
                </a>
                <a href="<?php echo site_url("guru/hasil") ?>" class="list-group-item list-group-item-action mb-2 bg-light">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M16.84,2.73C16.45,2.73 16.07,2.88 15.77,3.17L13.65,5.29L18.95,10.6L21.07,8.5C21.67,7.89 21.67,6.94 21.07,6.36L17.9,3.17C17.6,2.88 17.22,2.73 16.84,2.73M12.94,6L4.84,14.11L7.4,14.39L7.58,16.68L9.86,16.85L10.15,19.41L18.25,11.3M4.25,15.04L2.5,21.73L9.2,19.94L8.96,17.78L6.65,17.61L6.47,15.29" />
                    </svg>
                    Hasil Kerja Siswa
                </a>
                <a href="<?php echo site_url("guru/aktivitas") ?>" class="list-group-item list-group-item-action mb-2 bg-light">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 9C11 10.66 9.66 12 8 12C6.34 12 5 10.66 5 9C5 7.34 6.34 6 8 6C9.66 6 11 7.34 11 9M14 20H2V18C2 15.79 4.69 14 8 14C11.31 14 14 15.79 14 18M22 12V14H13V12M22 8V10H13V8M22 4V6H13V4Z" /></svg>
                    Aktivitas Siswa
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
                <h5 style="color: white">Recording Learning Activities</h5>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <?php if ($this->uri->segment(2) == 'kelas') { ?>
                        <?php if ($this->uri->segment(3)) { ?>
                            <?php if (!$this->uri->segment(4)) { ?>
                                <li>
                                    <a class="btn btn-secondary" href="<?php echo site_url('guru/kelas/' . $this->uri->segment(3) . '/tambah_materi') ?>">Tambah Materi</a>
                                    <!-- <button type="button" class="btn btn-secondary mr-1" data-toggle="modal" data-target="#tambahMateri">
                                        Tambah Materi
                                    </button> -->
                                </li>

                            <?php }
                                    if ($this->uri->segment(4) == 'materi' && $this->uri->segment(5) && !$this->uri->segment(6) == 'soal') { ?>
                                <li class="mr-2">
                                    <a class="btn btn-success" href="<?php echo base_url('guru/kelas/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/soal') ?>" role="button">Lihat Soal</a>
                                </li>
                                <li class="mr-2">
                                    <a class="btn btn-secondary" href="<?php echo site_url('guru/kelas/' . $this->uri->segment(3) . '/materi/ubah/' . $this->uri->segment(5)) ?>">Ubah Materi</a>
                                    <!-- <a type="button" class="btn btn-secondary text-white" data-toggle="modal" data-target="#ubahMateri">Edit Materi</a> -->
                                </li>
                                <li class="mr-2">
                                    <a type="button" class="btn btn-danger text-white" data-toggle="modal" data-target="#deleteMateri">Hapus Materi</a>
                                </li>
                            <?php } else if ($this->uri->segment(4) == 'materi' && $this->uri->segment(5) && $this->uri->segment(6) == 'soal') { ?>
                                <li>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahSoal">Tambah Soal</button>
                                </li>
                            <?php }
                                } else { ?>
                            <li>
                                <button type="button" class="btn btn-success mr-1" data-toggle="modal" data-target="#tambahKelas">
                                    Tambah Kelas
                                </button>
                            </li>
                    <?php
                        }
                    } ?>
                    <li class="nav-item dropdown">
                        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <span class="text-white"><?php echo $this->session->userdata("nama"); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                            <a class="dropdown-item" href="<?php echo base_url('faq') ?>">FAQ</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('Login/Logout') ?>">Keluar</a>
                        </div>
                    </li>
                </ul>
            </nav>