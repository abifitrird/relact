<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Materi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/pell.css') ?>">
  <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<?php include("header.php") ?>
<div class="container-fluid shadow-sm" style="padding: 25px">
  <h3>Berikut adalah daftar materi dalam kelas Pemrograman Dasar</h3>
  <br>
  <div class="list-group">
    <?php foreach ($data as $dat) { ?>
      <a href="<?php echo base_url('guru/kelas/' . $this->uri->segment(3) . '/materi/' . $dat['kode']) ?>" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?php echo $dat['judul'] ?></h5>
        </div>
        <p class="mb-1 text-truncate"><?php echo str_replace(['<p>', '</p>'], " ", substr($dat['konten'], 0, 160)) ?></p>
      </a>
    <?php } ?>
  </div>
</div>


<!-- footer -->
<?php //include("footer.php") 
?>
<!-- /#page-content-wrapper -->

<div class="modal fade" id="tambahMateri" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Materi Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('guru/kelas/' . $this->uri->segment(3) . '/materi') ?>" method="POST">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
          </div>
          <div class="form-group">
            <label for="editor">Konten</label>
            <div id="editor" class="pell"></div>
            <!-- <textarea name="konten" id="html-editor"></textarea> -->
            <input type="hidden" id="html-editor" name="konten" />
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

<!-- Menu Toggle Script -->
<script src="<?php echo base_url('assets/js/pell.js') ?>"></script>
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  var editor = pell.init({
    element: document.getElementById('editor'),
    defaultParagraphSeparator: 'p',
    onChange: function(html) {
      $("#html-editor").val(html)
      // document.getElementById('html-editor').textContent = html
    }
  })
</script>
</body>

</html>