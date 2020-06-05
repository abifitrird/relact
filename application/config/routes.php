<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = 'Home/page404';
$route['translate_uri_dashes'] = FALSE;

/* authentification */
$route['login']['get'] = "Login/index";             // view login
$route['login']['post'] = "Login/aksi_login";       // proses login
$route['logout']['get'] = 'Login/Logout';           // logout

$route['daftar']['get'] = "Signup/index";           // view daftar
$route['daftar']['post'] = "Signup/daftar";         // proses daftar

$route['profil/ubah/password']['post'] = "Profil/updatePassword"; // change password
$route['profil/ubah']['post'] = "Profil/updateProfil"; // update profil
$route['profil/ubah/foto']['post'] = 'Profil/ubahFotoProfil';


/* route guru */
$route['guru']['get'] = "Teacher/Guru";                     // view guru beranda
$route['guru/profil']['get'] = "Profil/guru";              // view profil guru
$route['guru/kelas']['get'] = "Teacher/Kelas";              // view guru kelas
$route['guru/capaian']['get'] = "Teacher/CapaianSiswa";     // view guru/capaian siswa
$route['guru/saran']['get'] = "Saran/guru";                 // kotak saran dari guru

/* route guru/kelas */
$route['guru/kelas']['post'] = 'Teacher/Kelas/saveKelas';                   // simpan kelas guru
$route['guru/kelas/(:any)']['get'] = "Teacher/Materi/getMateri/$1";          // getList Materi by Id
$route['guru/kelas/(:any)/materi']['post'] = "Teacher/Materi/saveMateri/$1";
// save mteri by kelas id
$route['guru/kelas/(:any)/materi/(:any)']['get'] = "Teacher/Materi/showSubMateri/$2"; // view submateri by materi kode 
$route['guru/kelas/(:any)/materi/(:any)/tambah']['get'] = "Teacher/Materi/viewTambahSub/$2";
$route['guru/kelas/(:any)/materi/(:any)/tambah']['post'] = "Teacher/Materi/saveTambahSub/$1/$2";

$route['guru/kelas/(:any)/materi/(:any)/sub/(:num)']['get'] = "Teacher/Materi/showSub/$2/$3";
$route['guru/kelas/(:any)/materi/(:any)/sub/(:num)/ubah']['get'] = "Teacher/Materi/viewUbahSub/$2/$3";
$route['guru/kelas/(:any)/materi/(:any)/sub/(:num)/ubah']['post'] = "Teacher/Materi/saveUbahSub/$1/$2/$3";

$route['guru/kelas/(:any)/materi/ubah/(:any)']['post'] = "Teacher/Materi/ubahMateri/$1/$2"; // save mteri by kelas id
$route['api/materi/delete/(:any)']['get'] = "Teacher/materi/deleteMateriAPI/$1";    // delete materi
$route['api/materi/sub/delete/(:any)/(:num)']['get'] = "Teacher/materi/deleteSubMateriAPI/$1/$2";    // delete materi
$route['api/materi/(:any)']['get'] = "Teacher/Materi/showMateriAPI/$1"; // view materi by id
$route['guru/kelas/(:any)/materi/(:any)/soal']['get'] = "Teacher/Soal/getSoal/$2"; // view soal by materi id
$route['guru/kelas/(:any)/materi/(:any)/soal']['post'] = "Teacher/Soal/addSoal/$2"; // add soal by materi kode
$route['guru/kelas/(:any)/tambah_materi']['get'] = "Teacher/Materi/viewAddMateri";
$route['guru/kelas/(:any)/materi/ubah/(:any)']['get'] = "Teacher/Materi/viewEditMateri";
$route['api/image']['post'] = "Teacher/Materi/saveImageAPI"; // uplaod image from wysiwyg

$route['guru/kelas/(:any)/materi/(:any)/soal/(:num)']['post'] = "Teacher/Soal/savePilihanJawaban/$3"; // save pilihan jawaban
$route['guru/kelas/(:any)/materi/(:any)/soal/delete/(:num)']['post'] = "Teacher/Soal/deleteSoal/$3"; // hapus soal
$route['guru/kelas/(:any)/materi/(:any)/soal/esai/(:num)']['post'] = "Teacher/Soal/editSoal/$3"; // save pilihan 

$route['api/soal/(:num)']['get'] = "Teacher/Soal/getSoalJson/$1"; // get JSON API
$route['api/soal/pilihan/delete/(:num)']['get'] = "Teacher/Soal/deletePilihan/$1";
$route['api/soal/pilihan/(:num)']['get'] = "Teacher/Soal/getPilihanJawabanBySoalId/$1"; // getpilihan jawbaban as JSON

/* route guru/hasil */
$route['guru/hasil']['get'] = "Teacher/Hasil/viewHasilKerja";
$route['guru/hasil/(:any)']['get'] = "Teacher/Hasil/viewHasilPerKelas/$1";
$route['guru/hasil/(:any)/materi/(:any)']['get'] = "Teacher/Hasil/viewHasilPerMateri/$2";
$route['guru/hasil/(:any)/materi/(:any)/PG/(:num)']['get'] = "Teacher/Hasil/viewJawabanSiswa/PG/$3/$2";
$route['guru/hasil/(:any)/materi/(:any)/Esai/(:num)']['get'] = "Teacher/Hasil/viewJawabanSiswa/Esai/$3/$2";
$route['api/simpan_nilai_esai/(:num)']['post'] = "Teacher/Hasil/postNilaiSiswa/$1";

/* route guru/capaian */
$route['guru/capaian']['get'] = "Teacher/Capaian/capaianSiswa";
$route['guru/capaian/(:any)']['get'] = "Teacher/Capaian/capaianSiswaDetail/$1";

/* route guru/aktivitas */
$route['guru/aktivitas']['get'] = "Teacher/Aktivitas/viewAktivitas";
$route['guru/aktivitas/(:any)']['get'] = "Teacher/Aktivitas/viewDetailAktivitas/$1";
$route['guru/aktivitas/(:any)/detail/(:any)']['get'] = "Teacher/Aktivitas/viewAktivitasSiswa/$1/$2";


/* route siswa */
$route['siswa']['get'] = "Student/Siswa/index"; // beranda siswa
$route['siswa/profil']['get'] = "Profil/siswa";  // profil siswa
$route['siswa/kelas']['get'] = "Student/Kelas/index"; // kelas siswa yang tersedia
$route['siswa/capaian']['get'] = "Student/Capaian/index"; // capaian belajar siswa
$route['siswa/saran']['get'] = "Saran/siswa"; // kotak saran dari siswa

/* route siswa/kelas */
$route['siswa/kelas/kode']['post'] = "Student/Kelas/masukKelas";  // route masuk kelas dengan kode kelas
$route['siswa/kelas/(:any)']['get'] = "Student/Materi/index/$1";  // get list materi by kode kelas
$route['siswa/kelas/(:any)/materi/(:any)']['get'] = "Student/Materi/showSubMateri/$2";  // show matery by kode materi
$route['siswa/kelas/(:any)/materi/(:any)/sub/(:num)']['get'] = "Student/Materi/showMateri/$2/$3";  // show matery by kode materi

/* route siswa/soal */
$route['siswa/soal/(:any)']['post'] = "Student/Soal/showSoal/$1"; // kerjakan soal
$route['siswa/soal/(:any)/getSoal']['get'] = "Student/Soal/getSoalAPI/$1"; // get kode
$route['siswa/soal/(:any)/saveJawaban']['post'] = "Student/Soal/saveJawaban"; // kerjakan soal
$route['siswa/soal/(:any)/check']['get'] = "Student/Soal/checkTimestamp"; // kerjakan soal
$route['siswa/soal/(:any)/selesai']['post'] = "Student/Soal/selesai/$1"; // selesai dengan tombol/timeout
