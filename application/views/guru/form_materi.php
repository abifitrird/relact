<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $head ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/summernote-bs4.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <div class="container">
        <div class="row flex-wrap justify-content-center">
            <div class="col-12 col-md-8 mt-3">
                <a class="btn btn-info" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Kembali</a>
            </div>
            <div class="col-12 col-md-8 mt-2">
                <form id="form_kirim" method="POST" action="">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="summernote">Konten</label>
                        <textarea class="summernote form-control" id="summernote" name="konten"></textarea>
                    </div>
            </div>
            <div class="col-12 col-md-8">
                <button type="submit" class="btn btn-primary">Simpan</button>
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
                callbacks: {
                    onImageUpload: function(files) {
                        if (!files.length) return;
                        for (let i = 0; i < files.length; i++) {
                            uploadImage(files[i])
                        }
                    }
                }
            })

            // if data is edit_materi
            let url = $(location).attr('href');
            let check_uri = url.split('/').reverse()[0];
            if (check_uri == 'tambah_materi') {
                let kode_kelas = url.split('/').reverse()[1];
                $('#form_kirim').attr('action', `<?php echo site_url('guru/kelas/') ?>${kode_kelas}/materi`)
            } else {
                let kode_kelas = url.split('/').reverse()[2];
                let kode_materi = url.split('/').reverse()[0];
                fetch('/api/materi/' + kode_materi).then(response => response.json())
                    .then(data => {
                        $('#summernote').summernote('code', data.konten);
                        $('#summernote').each(function() {
                            $(this).val($(this).summernote('code'));
                        })
                        $("#judul").val(data.judul)
                    })

                $('#form_kirim').attr('action', `<?php echo site_url('guru/kelas/') ?>${kode_kelas}/materi/ubah/${kode_materi}`)
            }

            function uploadImage(file) {
                let data = new FormData();
                data.append('file', file);
                fetch('/api/image', {
                    method: "POST",
                    body: data
                }).then(response => response.json()).then(data => {
                    // console.log(data);
                    $('#summernote').summernote('insertImage', data.path);
                });
            }
        })
    </script>
</body>

</html>