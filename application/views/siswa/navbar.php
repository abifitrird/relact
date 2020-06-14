<nav class="navbar navbar-expand-lg border-bottom shadow-sm d-flex flex-wrap col-12 justify-content-between">
    <div class="d-flex flex-wrap col-12 col-md-auto">
        <button class="btn shadow-none pr-3" id="menu-toggle"><svg style="width:24px; height:24px; color: white;" viewBox="0 0 24 24">
                <path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
        </button>
        <h5 style="color: white">Recording Learning Activities</h5>
    </div>
    <div class="col-12 col-md-auto">
        <ul class="navbar-nav flex-row ml-auto d-flex">
            <?php if ($this->uri->segment(1) == 'siswa' && $this->uri->segment(2) == 'kelas') { ?>
                <?php if ($this->uri->segment(3) == null) { ?>
                    <li>
                        <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#masukKelas">
                            Masuk Kelas
                        </button>
                    </li>
                <?php } ?>
                <?php if ($this->uri->segment(4) == 'materi' && $this->uri->segment(5) && !$this->uri->segment(6)) {
                        if ($status_soal) { ?>
                        <li>
                            <button type="button" class="btn btn-primary35 mr-1" disabled>
                                Kerjakan Soal
                            </button>
                        </li>
                    <?php } else { ?>

                        <li>
                            <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#kerjakanSoal">
                                Kerjakan Soal
                            </button>
                        </li>
                <?php }
                    } ?>
            <?php } ?>
            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                    <span class="text-white"><?php echo $this->session->userdata("nama"); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item" href="<?php echo base_url('faq') ?>">FAQ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('Login/Logout') ?>">Keluar</a>
                </div>
            </li>
        </ul>
    </div>
</nav>