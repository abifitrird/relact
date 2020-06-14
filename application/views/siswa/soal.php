<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/images/logoTab_Relact.png') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php include('sidebar.php') ?>
        <div id="page-content-wrapper">
            <?php include('navbar.php') ?>
            <div class="container-fluid mt-3">
                <div class="row justify-content-md-center">
                    <div class="d-flex flex-wrap col-12 col-md-8 justify-content-center">
                        <div class="col-12 col-md-8">
                            <h4 class="font-weight-bold">Soal</h4>
                            <div id="pertanyaan"></div>
                            <div id="boxJawabanPG">
                                <h5 class="my-2 font-weight-bold">Pilihan Jawaban</h5>
                                <div class="col-12">
                                    <form id="pilihanJawaban"></form>
                                </div>
                            </div>
                            <div id="boxJawabanEsai">
                                <h5 class="my-2 font-weight-bold">Jawaban</h5>
                                <div class="col-12">
                                    <form id="jawabanEsai"></form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="col-12 mb-3 bg-warning text-dark">
                            <h4 id="counterWaktu">0:00 detik</h4>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="col-form-label">
                                <h6>Pilihan Ganda</h6>
                            </label>
                            <div id="btnIndexSoal" class="col-12 d-flex flex-column">

                            </div>
                        </div>
                        <div class="col-12 ">
                            <label class="col-form-label">
                                <h6>Esai</h6>
                            </label>
                            <div id="btnIndexSoalEsai" class="col-12 d-flex flex-column">

                            </div>
                        </div>
                        <div class="col-12 text-right mt-5">
                            <button class="btn btn-success col-12 col-md-6 col-xl-4 mr-3" data-toggle="modal" data-target="#modalSelesai">Selesai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSelesai" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Selesai?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Anda yakin untuk selesai mengerjakan ini?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSelesai" class="btn btn-danger">Selesai</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('document').ready(function() {
            let time_limit = 2700 // on second
            let x = setInterval(function() {
                time_limit -= 1
                let menit = Math.floor((time_limit / 60) % 60);
                let detik = Math.floor(time_limit % 60);
                document.getElementById("counterWaktu").innerHTML = `${menit}:${detik} detik lagi`
                if (time_limit <= 0) {
                    clearInterval(x);
                    console.log("waktumu sudah habis subur !!");
                    alert("Waktu anda telah habis, jawaban sudah tersimpan.");
                    selesai();
                }
            }, 1000)
            checkTimestamp()
            $('#boxJawabanPG').addClass('d-none');
            $('#boxJawabanPG').addClass('d-none');
            // setInterval(checkTimestamp(), 5000)
            const url = window.location.href
            fetch(url + '/getSoal')
                .then(response => response.json())
                .then(function(data) {
                    if (!localStorage.getItem('soal_populated')) {
                        localStorage.setItem('soal_pg', JSON.stringify(data.pg));
                        localStorage.setItem('soal_esai', JSON.stringify(data.esai));
                    }
                    localStorage.setItem('soal_populated', true);
                    populateBtnSoal();
                    setBtnSoal(0);
                })

            function populateBtnSoal() {
                const soal = JSON.parse(localStorage.getItem('soal_pg'));
                const jumlah_soal = soal.length;
                let j = 1;
                for (let i = 0; i < jumlah_soal; i++) {
                    if (i % 5 == 0) {
                        $('#btnIndexSoal').append(`<div id="box-${j}" class="my-1 mx-1 btn-group " role="group" aria-label="Nomor Soal"></div>`)
                        j++;
                    }
                }
                j = 1;
                for (let i = 0; i < jumlah_soal; i++) {
                    if (i % 2 == 0) {
                        $(`#box-${j}`).append(`<button type="button" onclick="setBtnSoal(${i})" class="btn btn-dark">${i+1}</button`)
                    } else {
                        $(`#box-${j}`).append(`<button type="button" onclick="setBtnSoal(${i})" class="btn btn-secondary">${i+1}</button>`)
                    }
                    if ((i + 1) % 5 == 0 && i != 0) {
                        j++;
                    }
                }

                let k = j;
                const soal_esai = JSON.parse(localStorage.getItem('soal_esai'));
                const jumlah_soal_esai = soal_esai.length;
                for (let i = 0; i < jumlah_soal_esai; i++) {
                    if (i % 5 == 0) {
                        $('#btnIndexSoalEsai').append(`<div id="box-${k}" class="my-1 mx-1 btn-group " role="group" aria-label="Nomor Soal"></div>`)
                        k++;
                    }
                }
                k = j;
                for (let i = 0; i < jumlah_soal_esai; i++) {
                    if (i % 2 == 0) {
                        $(`#box-${k}`).append(`<button type="button" onclick="setBtnSoalEsai(${i})" class="btn btn-dark">${i+1}</button>`)
                    } else {
                        $(`#box-${k}`).append(`<button type="button" onclick="setBtnSoalEsai(${i})" class="btn btn-secondary">${i+1}</button>`)
                    }
                    if ((i + 1) % 5 == 0 && i != 0) {
                        k++;
                    }
                }
            }

            $('#pilihanJawaban').change(function() {
                let pilihan_soal_id = $('input[name="pilihanJawaban"]:checked').val()
                let soal_id = $('input[name="pilihanJawaban"]:checked').data('soal_id')
                updateJawabanUser(soal_id, pilihan_soal_id)
            })

            $('#jawabanEsai').change(function() {
                let soal_id = $('textarea#jawabanEsaiUser').data('soal_id');
                updateJawabanEsai(soal_id);
            })

            $('#btnSelesai').on('click', function() {
                selesai();
            })
        })

        function setBtnSoal(index) {
            const soal = JSON.parse(localStorage.getItem('soal_pg'))[index];
            document.getElementById("pertanyaan").innerHTML = soal.pertanyaan;
            $('#boxJawabanPG').removeClass('d-none');
            $('#boxJawabanEsai').addClass('d-none');
            populatePilihanJawaban(index);
        }

        function setBtnSoalEsai(index) {
            const soal = JSON.parse(localStorage.getItem('soal_esai'))[index];
            document.getElementById("pertanyaan").innerHTML = soal.pertanyaan;
            $('#boxJawabanEsai').removeClass('d-none');
            $('#boxJawabanPG').addClass('d-none');
            populateJawabanEsai(index);
        }

        function populateJawabanEsai(index) {
            const soal = JSON.parse(localStorage.getItem('soal_esai'))[index];
            $('#pilihanJawaban').empty();
            $('#jawabanEsai').empty();

            let jawaban = JSON.parse(localStorage.getItem('jawaban_esai'));
            let jawaban_sebelumnya = "";
            if (jawaban) {
                let jawab_index = jawaban.findIndex(el => el.soal_id == soal.id);
                if (jawab_index >= 0) {
                    jawaban_sebelumnya = jawaban[jawab_index].jawaban;
                }
            }

            $('#jawabanEsai').append(`<textarea class="form-control" data-soal_id="${soal.id}" id="jawabanEsaiUser" rows="5">${jawaban_sebelumnya}</textarea>`);
        }

        function populatePilihanJawaban(index) {
            const soal = JSON.parse(localStorage.getItem('soal_pg'))[index];
            const pilihan = soal.pilihan;
            const jumlah_pilihan = pilihan.length;
            let jawaban = JSON.parse(localStorage.getItem('jawaban'));
            let jawaban_sebelumnya;
            if (jawaban) {
                let pilihan_index = jawaban.findIndex(el => el.soal_id == soal.id);
                if (pilihan_index >= 0) {
                    jawaban_sebelumnya = jawaban[pilihan_index].pilihan_soal_id;
                }
            }

            $('#pilihanJawaban').empty();
            pilihan.forEach(el => {
                $('#pilihanJawaban').append(`
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pilihanJawaban" id="pilihanJawaban${el.id}"
                        value="${el.id}" data-soal_id="${el.soal_id}" />
                    <label class="form-check-label" for="pilihanJawaban${el.id}">${el.pilihan}</label>
                </div>
                <hr />
                `)
            })
            if (jawaban) {
                $(`#pilihanJawaban${jawaban_sebelumnya}`).prop('checked', true);
            }
        }

        let jawaban = [];

        function updateJawabanUser(soal_id, jawaban_id) {
            if (!localStorage.getItem('jawaban')) {
                jawaban.push({
                    'soal_id': soal_id,
                    'pilihan_soal_id': jawaban_id
                });
                localStorage.setItem('jawaban', JSON.stringify(jawaban));
            } else {
                let jawaban_user = JSON.parse(localStorage.getItem('jawaban'));
                let changePilihanIndex = jawaban_user.findIndex(obj => obj.soal_id === soal_id);
                if (changePilihanIndex < 0) {
                    jawaban_user.push({
                        'soal_id': soal_id,
                        'pilihan_soal_id': jawaban_id
                    });
                } else {
                    jawaban_user[changePilihanIndex].pilihan_soal_id = jawaban_id
                }
                localStorage.setItem('jawaban', JSON.stringify(jawaban_user));
            }
            localStorage.setItem('timestamp', new Date().valueOf());
        }

        let jawaban_esai = [];

        function updateJawabanEsai(soal_id) {
            if (!localStorage.getItem('jawaban_esai')) {
                jawaban_esai.push({
                    'soal_id': soal_id,
                    'jawaban': $('#jawabanEsaiUser').val()
                });
                localStorage.setItem('jawaban_esai', JSON.stringify(jawaban_esai))
            } else {
                let jawaban_esai = JSON.parse(localStorage.getItem('jawaban_esai'));
                let jawabanEsaiIndex = jawaban_esai.findIndex(obj => obj.soal_id === soal_id);
                if (jawabanEsaiIndex < 0) {
                    jawaban_esai.push({
                        'soal_id': soal_id,
                        'jawaban': $('#jawabanEsaiUser').val()
                    })
                } else {
                    jawaban_esai[jawabanEsaiIndex].jawaban = $('textarea#jawabanEsaiUser').val()
                }
                localStorage.setItem('jawaban_esai', JSON.stringify(jawaban_esai));
            }
            localStorage.setItem('timestamp', new Date().valueOf());
        }


        function checkTimestamp() {
            const url = window.location.href
            fetch(url + '/check')
                .then(response => response.json())
                .then(data => {
                    if (data.timestamp != localStorage.getItem('timestamp')) {
                        sendJawabanToDatabase();
                    }
                    setTimeout(() => checkTimestamp(), 5000);
                })
        }

        function sendJawabanToDatabase() {
            const url = window.location.href
            const timestamp = localStorage.getItem('timestamp');
            const jawaban = localStorage.getItem('jawaban');
            const jawaban_esai = localStorage.getItem('jawaban_esai');
            const form = new FormData();
            form.append('timestamp', timestamp);
            form.append('jawaban', jawaban);
            form.append('jawaban_esai', jawaban_esai);
            if (jawaban) {
                fetch(url + '/saveJawaban', {
                    method: "POST",
                    body: form
                }).then(response => response.json()).then(data => console.log("suka es"));
            }
        }

        function selesai() {
            const url = window.location.href
            const timestamp = localStorage.getItem('timestamp');
            const jawaban = localStorage.getItem('jawaban');
            const jawaban_esai = localStorage.getItem('jawaban_esai');

            const form = new FormData();
            form.append('timestamp', timestamp);
            form.append('jawaban', jawaban);
            form.append('jawaban_esai', jawaban_esai);
            fetch(url + '/selesai', {
                method: "POST",
                body: form
            }).then(response => response.json()).then(data => {
                localStorage.clear();
                alert("Jawaban anda sudah disimpan, skor pilihan ganda anda: " + data.skor);
                window.location.assign('/');
            });
        }
    </script>
</body>