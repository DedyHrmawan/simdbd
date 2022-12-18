<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'DepanController/Beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//admin
$route['home']                      = 'Welcome/Home';
$route['laporanharian']             = 'Welcome/LaporanHarian';
$route['laporanbulanan']            = 'Welcome/LaporanBulanan';

$route['datapasien']                = 'PasienController/DataPasien';
$route['datapasien/tambah']         = 'PasienController/store';
$route['datapasien/edit']           = 'PasienController/edit';
$route['datapasien/hapus']          = 'PasienController/delete';
$route['datapasien/ajxGet']         = 'PasienController/ajxGet';

$route['jentik']                    = 'PengamatanController/JentikBerkala';
$route['jentik/tambah']             = 'PengamatanController/store';
$route['jentik/edit']               = 'PengamatanController/edit';
$route['jentik/hapus']              = 'PengamatanController/delete';
$route['jentik/ajxGet']             = 'PengamatanController/ajxGet';

$route['epidemiologis']             = 'EpidemiologisController/Epidemiologis';
$route['epidemiologis/tambah']      = 'EpidemiologisController/store';
$route['epidemiologis/edit']        = 'EpidemiologisController/edit';
$route['epidemiologis/hapus']       = 'EpidemiologisController/delete';
$route['epidemiologis/ajxGet']      = 'EpidemiologisController/ajxGet';
$route['epidemiologis/ajxGetPasien']= 'EpidemiologisController/ajxGetPasien';

$route['info']                    = 'InformasiController/Info';
$route['info/tambah']             = 'InformasiController/store';
$route['info/edit']               = 'InformasiController/edit';
$route['info/hapus']              = 'InformasiController/delete';
$route['info/ajxGet']             = 'InformasiController/ajxGet';

$route['carousel']                = 'CarouselController/Carousel';
$route['carousel/tambah']         = 'CarouselController/store';
$route['carousel/edit']           = 'CarouselController/edit';
$route['carousel/hapus']          = 'CarouselController/delete';
$route['carousel/ajxGet']         = 'CarouselController/ajxGet';

$route['feedback']                = 'FeedbackController/Feedback';
$route['feedback/hapus']          = 'FeedbackController/delete';
$route['feedback/ajxGet']         = 'FeedbackController/ajxGet';

$route['email']                   = 'Welcome/email';

$route['kasus']                   = 'Welcome/PenangananKasus';

//depan
$route['beranda']               = 'DepanController/Beranda';
$route['login']                 = 'DepanController/Login';
$route['informasi']             = 'DepanController/InfoDepan';
$route['informasi/(:any)']      = 'DepanController/Informasi/$1';
$route['kirimfeedback']         = 'DepanController/kirimfeedback';

$route['auth']          = 'AuthController/auth';
$route['logout']        = 'AuthController/logout';
