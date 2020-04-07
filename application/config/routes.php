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


/* route guru */
$route['guru']['get'] = "Teacher/Guru";                 // view guru beranda
$route['guru/profil']['get'] = "Profil/index";         // view profil guru
$route['guru/kelas']['get'] = "Teacher/Kelas";          // view guru kelas
$route['guru/capaian']['get'] = "Teacher/CapaianSiswa"; // view guru/capaian siswa
$route['guru/saran']['get'] = "Maintenances";           // view untuk saran

/* route guru/kelas */
$route['guru/kelas']['post'] = 'Teacher/Kelas/saveKelas';                   // simpan kelas guru
$route['guru/kelas/(:any)']['get'] = "Teacher/Kelas/getMateri/$1";          // getList Materi by Id
$route['guru/kelas/(:any)/materi']['post'] = "Teacher/Kelas/saveMateri/$1"; // save mteri by kelas id
$route['guru/kelas/(:any)/materi/(:num)']['get'] = "Teacher/Kelas/showMateri/$1/$2"; // view materi by materi id and kelas id
$route['guru/kelas/(:any)/materi/(:num)/soal']['get'] = "Teacher/Kelas/showSoalByMateri/$1/$2"; // view soal by materi id
