<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body>

    <div class="container-fluid shadow-sm" style="padding: 25px">
        <div class="row justify-content-md-center">
            <div class="d-flex flex-wrap col-12 col-md-8 justify-content-center">
                <div class="col-12 col-md-8">
                    <h4 class="font-weight-bold">Soal</h4>
                    <div id="pertanyaan"></div>
                    <h5 class="my-2 font-weight-bold">Pilihan Jawaban</h5>
                    <div class="col-12">
                        <form id="pilihanJawaban"></form>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">
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
                    <div class="col-12 d-flex flex-column">
                        <div class="my-1 mx-1 btn-group " role="group" aria-label="Nomor Soal">
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-dark">2</button>
                            <button type="button" class="btn btn-secondary">3</button>
                            <button type="button" class="btn btn-dark">4</button>
                            <button type="button" class="btn btn-secondary">5</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<script>
$('document').ready(function() {
    checkTimestamp()
    // setInterval(checkTimestamp(), 5000)
    const url = window.location.href
    fetch(url + '/getSoal')
        .then(response => response.json())
        .then(function(data) {
            if (!localStorage.getItem('soal_populated')) {
                localStorage.setItem('soal', JSON.stringify(data));
            }
            localStorage.setItem('soal_populated', true);
            populateBtnSoal();
            setBtnSoal(0);
        })

    function populateBtnSoal() {
        const soal = JSON.parse(localStorage.getItem('soal'));
        const jumlah_soal = soal.length;
        let j = 1;
        for (let i = 0; i < jumlah_soal; i++) {
            if (i == 1) {
                $('#btnIndexSoal').append(`
                <div id="box-${j}" class="my-1 mx-1 btn-group " role="group" aria-label="Nomor Soal">
                `)
                j++;
            } else if (i % 5 == 0) {
                $('#btnIndexSoal').append(`
                <div id="box-${j}" class="my-1 mx-1 btn-group " role="group" aria-label="Nomor Soal">
                `)
                j++;
            }
        }
        j = 1;
        for (let i = 0; i < jumlah_soal; i++) {
            if (i % 2 == 0) {
                $(`#box-${j}`).append(`
                <button type="button" onclick="setBtnSoal(${i})" class="btn btn-dark">${i+1}</button>
                `)
            } else {
                $(`#box-${j}`).append(`
                <button type="button" onclick="setBtnSoal(${i})" class="btn btn-secondary">${i+1}</button>
                `)
            }
            if (i == 4) {
                j++;
            }
        }
    }

    $('#pilihanJawaban').change(function() {
        let pilihan_soal_id = $('input[name="pilihanJawaban"]:checked').val()
        let soal_id = $('input[name="pilihanJawaban"]:checked').data('soal_id')
        updateJawabanUser(soal_id, pilihan_soal_id)
    })
})

function setBtnSoal(index) {
    const soal = JSON.parse(localStorage.getItem('soal'))[index];
    document.getElementById("pertanyaan").innerHTML = soal.pertanyaan;
    populatePilihanJawaban(index);
}

function populatePilihanJawaban(index) {
    const soal = JSON.parse(localStorage.getItem('soal'))[index];
    const pilihan = soal.pilihan;
    const jumlah_pilihan = pilihan.length;
    let jawaban = JSON.parse(localStorage.getItem('jawaban'));
    let pilihan_index = jawaban.findIndex(el => el.soal_id == soal.id);
    let jawaban_sebelumnya;
    if (pilihan_index >= 0) {
        jawaban_sebelumnya = jawaban[pilihan_index].pilihan_soal_id;
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
    $(`#pilihanJawaban${jawaban_sebelumnya}`).prop('checked', true);
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

// TODO: save data jawaban user to database every 1 or 2 minutes

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
    let data = {
        timestamp: timestamp,
        jawaban: jawaban
    }
    const form = new FormData();
    form.append('timestamp', timestamp);
    form.append('jawaban', jawaban);
    fetch(url + '/saveJawaban', {
        method: "POST",
        body: form
    }).then(response => response.json()).then(data => console.log("suka es"));
}
</script>