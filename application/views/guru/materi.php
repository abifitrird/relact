<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Materi (Judul Materi)</title>
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
    <h1><?php echo $data['judul'] ?></h1>
    <div id="editor">
        <p><?php echo $data['konten'] ?></p>
    </div>
</div>

<!-- footer -->
<?php //include("footer.php") 
?>
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