<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda - Guru</title>
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
            <h1>Soal</h1>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pg-tab" data-toggle="tab" href="#pg" role="tab" aria-controls="pilihan ganda" aria-selected="true">Pilihan Ganda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="esai-tab" data-toggle="tab" href="#esai" role="tab" aria-controls="esai" aria-selected="false">Esai</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="pg" role="tabpanel" aria-labelledby="pg-tab">
              <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Kunci Jawaban</th>
                    <th scope="col">Bobot</th>
                    <th scope="col" style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($soal as $soa) {
                  if ($soa['tipe'] == 'pg') { ?>
                    <tr>
                      <th scope="row"><?php echo $i ?></th>
                      <td><?php echo $soa['pertanyaan'] ?></td>
                      <td>Percabangan</td>
                      <td><?php echo $soa['bobot'] ?></td>
                      <td style="text-align: center; white-space: nowrap; width: 1%">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubahSoal" data-soalid="<?php echo $soa['id'] ?>" data-soaljenis="<?php echo $soa['tipe'] ?>">Ubah</button>
                        <button class="btn btn-danger">Hapus</button> <!-- FIXME: hapus soal -->
                      </td>
                    </tr>
                <?php } } ?>
                </tbody>
              </table>
              </div>
              <div class="tab-pane fade" id="esai" role="tabpanel" aria-labelledby="esai-tab">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Bobot</th>
                    <th scope="col" style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($soal as $soa) {
                  if ($soa['tipe'] == 'esai') { ?>
                    <tr>
                      <th scope="row"><?php echo $i ?></th>
                      <td><?php echo $soa['pertanyaan'] ?></td>
                      <td><?php echo $soa['bobot'] ?></td>
                      <td style="text-align: center; white-space: nowrap; width: 1%">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubahSoal" data-soalid="<?php echo $soa['id'] ?>" data-soaljenis="<?php echo $soa['tipe'] ?>">Ubah</button>
                        <button class="btn btn-danger">Hapus</button> <!-- FIXME: hapus soal -->
                      </td>
                    </tr>
                <?php }} ?>
                </tbody>
              </table>
              </div>
            </div>
        </div>
        
        <!-- footer -->
        <?php //include("footer.php") ?>
    <!-- /#page-content-wrapper -->
    </div>
</div>

<div class="modal fade" id="tambahSoal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Soal Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('guru/kelas/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/soal') ?>" method="POST">
                    <div class="form-group">
                        <label for="tipeSoal">Tipe Soal</label>
                        <select class="form-control" id="tipeSoal" name="tipeSoal" required>
                          <option default value="pg">Pilihan Ganda</option>
                          <option value="esai">Esai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kodeMateri">Kode Materi</label>
                        <input type="text" class="form-control" id="kodeMateri" name="kodeMateri" value="<?php echo $this->uri->segment(5) ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" rows="6" name="pertanyaan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bobotSoal">Bobot Soal</label>
                        <input type="number" class="form-control" id="bobotSoal" name="bobotSoal" min="0" required placeholder="10">
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

<!-- TODO: buat modal untuk tambah pilihan jawaban. Terdapat penambahan pilihan ganda, penambahan kunci jawaban, dan level bloom -->

<div class="modal fade" id="ubahSoal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ubah Soal Pilihan Ganda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group"> 
                        <label for="pertanyaan">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" rows="6" name="pertanyaan" required></textarea>
                    </div>
                    <div id="pilihanGanda">
                    <h5 class="modal-title">Pilihan Jawaban</h5>
                    <table class="table">
                      <thead class="text-center">
                        <th>Pilihan</th>
                        <th >Kunci</th>
                      </thead>
                      <tbody class="text-center">
                      
                      </tbody>
                    </table>
                    </div>

            </div>
            <div class="modal-footer">
                <div class="text-left">
                    <button type="button" id="btnHapusPilihan" class="btn btn-danger">Hapus Pilihan</button>
                    <button type="button" id="btnTambahPilihan" class="btn btn-info">Tambah Pilihan</button>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" >Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetTableRow()">Batal</button>
                </div>
                
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Menu Toggle Script -->
  <script>
  
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $('#ubahSoal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var soal_id = button.data('soalid')
      var soal_jenis = button.data('soaljenis')
      $('.modal-body form').attr('action', '<?php echo site_url('guru/kelas/' . $this->uri->segment(3) . '/materi/' . $this->uri->segment(5) . '/soal/') ?>' + soal_id);
      var modal = $(this)
      fetch('<?php echo site_url('api/soal/') ?>' + soal_id)
        .then(response => response.json())
        .then(data => {
          var pertanyaan = data.pertanyaan
          modal.find('.modal-body #pertanyaan').val(pertanyaan)
          // console.log(pertanyaan)
        });
        
        fetch('<?php echo site_url('api/soal/pilihan/') ?>' + soal_id)
        .then(response => response.json())
        .then(function(data) {
          console.log(data)
          this.appendPilihan(data)
        })

        if (soal_jenis == 'pg') {
          modal.find('.modal-body #pilihanGanda').removeClass('d-none');
          modal.find('.modal-footer #btnTambahPilihan').removeClass('d-none');
        } else if (soal_jenis == 'esai') {
          modal.find('.modal-body #pilihanGanda').addClass('d-none');
          modal.find('.modal-footer #btnTambahPilihan').addClass('d-none');
        }
    });

    $('#btnTambahPilihan').click(function() {
      data = [
        {
          id: "",
          soal_id: "",
          pilihan: "",
          kunci_id: ""
        }
      ]
      appendPilihan(data)
    })

    let i = 0;
    function appendPilihan(data) {
      data.forEach(el => {
        $("#pilihanGanda tbody")
        .append(`
        <tr>
          <td><input type="text" name="pilihan[` + i + `]" class="form-control" aria-label="Pilihan Jawaban" value="`+ el.pilihan +`"></td>
          <td>
            <input class="form-check-input" type="checkbox" name="kunci[` + i + `]" value="1" id="checkKunci` + i + `" onclick="selectOnlyThis(this.id)">
            <label for="checkKunci` + i + `">Kunci</label>
            <input type="hidden" name="id[`+ i +`]" value="` + el.id + `">
          </td>
        </tr>
        `)
        if (el.kunci_id) {
          $("#checkKunci" + i).prop('checked', true)
        }
        i++;
      });
    }

    function resetTableRow() {
      $('#pilihanGanda tbody tr').remove();
      i = 0;
    }

    function selectOnlyThis(id) {
        for (var j = 0;j <= i; j++)
        {
            $("#checkKunci" + j).prop("checked", false)
        }
        $("#" + id).prop("checked", true)
    }

// FIXME: need to fix this, when data exist, how to make data removed from database
    $('#btnHapusPilihan').click(function() {
      $("#pilihanGanda tbody tr").last().remove();
      i--;
    })
  </script>
</body>
</html>