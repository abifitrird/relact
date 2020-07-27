<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Teacher/Base.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Aktivitas extends Base
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel', 'Kelas');
        $this->load->model('Guru/AktivitasModel', 'Aktivitas');
    }
    public function viewAktivitas()
    {
        $data['data'] = $this->Kelas->getKelas();
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Aktivitas', '/guru/aktivitas');
        $this->load->view('guru/aktivitas', $data);
    }

    public function viewDetailAktivitas($kode_kelas)
    {
        $data['kelas'] = $this->Kelas->getKelasByKode($kode_kelas);
        $data['data'] = $this->Aktivitas->getSiswaPerKelas($kode_kelas);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Aktivitas', '/guru/aktivitas');
        $this->breadcrumb->push($data['kelas']['mapel'], '/guru/aktivitas/' . $kode_kelas);
        $this->breadcrumb->push("Daftar Siswa", "#");
        $this->load->view('guru/aktivitas_detail', $data);
    }

    public function viewAktivitasSiswa($kelas_kode, $username)
    {
        $data['user'] = $this->Aktivitas->getDataSiswa(urldecode($username));
        $data['data'] = $this->Aktivitas->getDataAktivitas($kelas_kode, urldecode($username));
        $kelas = $this->Kelas->getKelasByKode($kelas_kode);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Aktivitas', '/guru/aktivitas');
        $this->breadcrumb->push($kelas['mapel'], '/guru/aktivitas/' . $kelas_kode);
        $this->breadcrumb->push("Daftar Aktivitas", "#");
        $this->load->view('guru/aktivitas_detail_siswa', $data);
    }

    public function generateAktivitasSiswa($kelas_kode, $username)
    {
        $user = $this->Aktivitas->getDataSiswa(urldecode($username));
        $data = $this->Aktivitas->getDataAktivitas($kelas_kode, urldecode($username));
        $kelas = $this->Kelas->getKelasByKode($kelas_kode);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $spreadsheet->getActiveSheet()->setCellValue("A1", "Materi");
        $spreadsheet->getActiveSheet()->setCellValue("B1", "Submateri");
        $spreadsheet->getActiveSheet()->setCellValue("C1", "Jam Mulai");
        $spreadsheet->getActiveSheet()->setCellValue("D1", "Jam Akhir");
        $spreadsheet->getActiveSheet()->setCellValue("E1", "Durasi");

        $i = 2;
        foreach ($data as $dat) {
            $spreadsheet->getActiveSheet()->setCellValue("A" . $i, $dat['materi']);
            $spreadsheet->getActiveSheet()->setCellValue("B" . $i, $dat['submateri']);
            $spreadsheet->getActiveSheet()->setCellValue("C" . $i, $dat['mulai']);
            $spreadsheet->getActiveSheet()->setCellValue("D" . $i, $dat['akhir']);
            $spreadsheet->getActiveSheet()->setCellValue("E" . $i, $dat['durasi']);
            $i++;
        }

        $filename = $user['nama'] . " - " . $kelas['nama'] . " - " . $kelas['mapel'] . ".xlsx";
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename);
        header('Cache-Control: max-age=0');

        $writer->save('php://output'); // download file 
    }
}
