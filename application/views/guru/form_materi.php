<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $head ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/summernote-bs4.min.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-wrap justify-content-center">
            <div class="col-12 col-md-8 mt-3">
                <form method="POST" action="<?php echo site_url(uri_string()) ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required value="<?php echo isset($judul) ? $judul : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="summernote">Konten</label>
                        <textarea class="summernote form-control" id="summernote" name="konten"></textarea>
                    </div>
            </div>
            <div class="col-12 col-md-8">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-info" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/summernote-bs4.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            const editor = $('#summernote').summernote({
                dialogsInBody: true,
                disableDragAndDrop: true,
                spellcheck: false,
                height: 350,
                callbacks: {
                    onImageUpload: function(files) {
                        if (!files.length) return;
                        for (let i = 0; i < files.length; i++) {
                            uploadImage(files[i])
                        }
                    }
                }
            })
            let konten = "<?php echo isset($konten) ? $konten : '' ?>";
            if (konten) {
                $('#summernote').summernote('code', konten);
            }


            function uploadImage(file) {
                let data = new FormData();
                data.append('file', file);
                fetch("<?php echo site_url('/api/image') ?>", {
                    method: "POST",
                    body: data
                }).then(response => response.json()).then(data => {
                    console.log(data);
                    $('#summernote').summernote('insertImage', data.path);
                });
            }
        })
    </script>
</body>

</html>