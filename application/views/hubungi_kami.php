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

<header>
    <h1>Hubungi Kami</h1>
</header>

<div id="form">

    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>

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