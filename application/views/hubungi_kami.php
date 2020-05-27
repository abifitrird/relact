<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hubungi Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/contact_us.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/contact_us.js') ?>"></script>
</head>
<!-- navbar -->
<nav class="navbar navbar-expand-lg border-bottom shadow-sm">
    <a href="<?php echo base_url() ?>">
        <h5 style="color: white">Recording Learning Activities</h5>
    </a>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
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

<header>
    <h2>Hubungi Kami</h2>
</header>

<div id="form">

    <div class="letter" id="letter"></div>
    <div class="letter" id="letter2"></div>

    <form id="waterform" method="post">

        <div class="formgroup" id="name-form">
            <label for="name">Nama Lengkap*</label>
            <input type="text" id="name" name="name" />
        </div>

        <div class="formgroup" id="email-form">
            <label for="email">Alamat E-mail*</label>
            <input type="email" id="email" name="email" />
        </div>

        <div class="formgroup">
            <label for="jenisPertanyaan">Jenis Pertanyaan</label>
            <select id="jenisPertanyaan" name="jenisPertanyaan" required>
                <option value="Pendaftaran">Pendaftaran</option>
                <option value="Fitur Sistem">Fitur Sistem</option>
                <option value="Kritik dan Saran">Kritik dan Saran</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>

        <div class="formgroup" id="message-form">
            <label for="message">Pesan</label>
            <textarea id="message" name="message"></textarea>
        </div>

        <input type="submit" value="Kirim" />
    </form>
</div>