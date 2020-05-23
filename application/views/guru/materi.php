<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Materi (Judul Materi)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/summernote-bs4.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<?php include('header.php') ?>

<!-- isi halaman -->
<div class="container-fluid shadow-sm" style="padding: 25px">
    <h1><?php echo $data['judul'] ?></h1>
    <div>
        <p><?php echo $data['konten'] ?></p>
    </div>
</div>


<div class="modal fade" id="ubahMateri" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ubah Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('guru/kelas/' . $this->uri->segment(3) . '/materi/ubah/' . $this->uri->segment(5)) ?>" method="POST" id="ubahMateriForm">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required value="<?php echo $data['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="summernote">Konten</label>
                        <textarea class="summernote form-control" id="summernote" name="konten" data-konten="<?php echo $data['konten'] ?>"></textarea>
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
<?php //include("footer.php") 
?>
<!-- /#page-content-wrapper -->
</div>
</div>

<!-- Menu Toggle Script -->
<script src="<?php echo base_url('assets/js/summernote-bs4.min.js') ?>"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function() {
        fetch('/api/materi/<?php echo $this->uri->segment(5) ?>').then(response => response.json())
            .then(data => console.log(data.konten))
        var konten = $('#ubahMateri .modal-body #summernote').data('konten')
        $('#summernote').summernote('code', konten, {
            dialogsInBody: true,
        })
        $('#summernote').each(function() {
            $(this).val($(this).summernote('code'));
        })
    })
</script>
</body>

</html>