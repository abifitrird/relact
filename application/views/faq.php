<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/faq.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg border-bottom shadow-sm">
        <a href="<?php echo base_url() ?>">
            <h5 style="color: white">Recording Learning Activities</h5>
        </a>
    </nav>

    <header>
        <h3>Pertanyaan yang sering diajukan</h3>
    </header>
    <div class="container-fluid justify-content-center row pt-5">
        <div class="col-md-8">
            <div class="panel-group margin_0" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                <i class="rt-icon2-bubble highlight"></i>
                                Login atau pendaftaran
                            </a>
                        </h5>
                    </div>
                    <div style="height: 0px;" id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <strong>Login</strong>
                            <p>
                                Login dapat dilakukan dengan mengakses halaman <a href="http://relact.codes">relact.codes</a> kemudian mengisi <mark>Username</mark> dan <mark>Password</mark> yang valid.
                            </p>
                            <br>
                            <strong>Pendaftaran</strong>
                            <p>
                                Jika anda belum memiliki akun atau belum terdaftar, maka anda bisa menuju halaman <a href="http://relact.codes">relact.codes</a> dan pilih menu <mark>Daftar</mark>. Setelah itu anda dapat mengisi form yang disediakan. Klik tombol <button class="btn btn-primary">DAFTAR</button> dan anda akan diarahkan ke halaman Login.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                <i class="rt-icon2-bubble highlight"></i>
                                Membuat, mengatur, dan bergabung dengan kelas
                            </a>
                        </h5>
                    </div>
                    <div style="height: 0px;" id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <strong>Membuat kelas</strong>
                            <p>
                                Dalam sistem ini, fitur untuk membuat kelas dikhususkan untuk pengguna dari pihak guru. Caranya adalah dengan mendaftarkan akun guru ke pihak operator, kemudian memilih menu <mark>Kelas</mark> di bagian navigasi. Pengguna akan menemukan tampilan daftar kelas yang sudah dibuat. Anda dapat menemukan tombol <button class="btn btn-success">Tambah Kelas</button> di sudut kanan atas halaman.
                            </p>
                            <br>
                            <strong>Mengatur kelas</strong>
                            <p>
                                Pengguna dari pihak guru dapat mengatur kelas dengan menambahkan, mengubah, atau menghapus materi pada kelas yang telah dibuat.
                            </p>
                            <br>
                            <strong>Bergabung dengan kelas</strong>
                            <p>
                                Bergabung dengan kelas merupakan fitur yang tersedia untuk pengguna dari pihak siswa. Caranya adalah dengan masuk ke dalam menu <mark>Kelas</mark> pada bagian navigasi, kemudian pengguna akan menemukan tombol <button class="btn btn-primary">Masuk Kelas</button>. Pengguna dapat memasukkan kode kelas yang valid sesuai dengan kode kelas yang dibuat oleh guru yang bersangkutan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                <i class="rt-icon2-bubble highlight"></i>
                                Membuat dan menilai tugas
                            </a>
                        </h5>
                    </div>
                    <div style="height: 0px;" id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <strong>Membuat tugas</strong>
                            <p>
                                Pada sistem ini, fitur tugas yang disediakan adalah berbentuk soal pilihan ganda dan esai yang dapat disusun oleh pengguna dari pihak guru. Menu untuk menambahkan soal terdapat pada halaman <a href="">Materi</a>, tepatnya di sudut kanan atas halaman anda dapat menemukan tombol <button class="btn btn-success">Lihat Soal</button>
                                <br>Jenis soal, jumlah soal, pilihan jawaban, kunci jawaban dan skor dapat diatur secara manual oleh guru yang bersangkutan sesuai dengan kebutuhan kegiatan belajar mengajar.
                            </p>
                            <br>
                            <strong>Menilai tugas</strong>
                            <p>
                                Soal berbentuk pilihan ganda akan diperiksa otomatis oleh sistem sesuai kunci jawaban yang diberikan oleh guru. Sedangkan untuk soal esai akan diperiksa langsung oleh guru yang bersangkutan dengan kriteria penilaian yang sesuai dengan ketentuan dari guru tersebut. Nilai keseluruhan masing-masing siswa merupakan gabungan dari nilai soal pilihan ganda dan esai.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                <i class="rt-icon2-bubble highlight"></i>
                                Menyerahkan dan melihat hasil tugas
                            </a>
                        </h5>
                    </div>
                    <div style="height: 0px;" id="collapse4" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <strong>Menyerahkan tugas</strong>
                            <p>
                                Tugas berbentuk soal pilihan ganda maupun esai dapat dikerjakan oleh pengguna dari pihak siswa dalam rentang waktu tertentu setelah menyelesaikan proses pembelajarannya. Hal ini bertujuan untuk melatih kemampuan kognitif siswa setelah belajar dengan materi yang tersedia.
                            </p>
                            <br>
                            <strong>Melihat hasil tugas</strong>
                            <p>
                                Tugas yang telah selesai dikerjakan oleh siswa dapat dilihat pada halaman <mark>Capaian Belajar</mark>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse5" class="collapsed">
                                <i class="rt-icon2-bubble highlight"></i>
                                Aktivitas Siswa
                            </a>
                        </h5>
                    </div>
                    <div style="height: 0px;" id="collapse5" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>
                                Aktivitas belajar siswa dapat dilihat oleh pihak guru dengan cara klik menu <mark>Aktivitas Siswa</mark> pada bagian navigasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse6" class="collapsed">
                            <i class="rt-icon2-bubble highlight"></i>
                            Informasi web
                        </a>
                    </h5>
                </div>
                <div style="height: 0px;" id="collapse6" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>
                            Informasi mengenai web ini dapat ditemukan pada menu yang tertera di bagian footer halaman Login maupun Beranda. Menu yang tersedia adalah <mark>Tentang</mark>, <mark>Hubungi Kami</mark>, dan <mark>Frequently Asked Question (FAQ)</mark>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>