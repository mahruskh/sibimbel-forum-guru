<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login/show'] = 'Login/_LoginController/index';
$route['login/auth'] = 'Login/_LoginController/auth';
$route['login/error'] = 'Login/_LoginController/alert_error';
$route['login/logout'] = 'Login/_LoginController/logout';

$route['dashboard/show'] = 'Dashboard/_DashboardController/index';

$route['data/siswa/show'] = 'Data/_SiswaBimbelController/index';
$route['data/siswa/show_data'] = 'Data/_SiswaBimbelController/show_data';
$route['data/siswa/trash'] = 'Data/_SiswaBimbelController/trash';

$route['data/siswa/daftar'] = 'Data/_SiswaBimbelController/registration_siswa';
$route['data/siswa/register_siswa'] = 'Data/_SiswaBimbelController/register_siswa';
$route['data/siswa/daftar/save_wali'] = 'Data/_SiswaBimbelController/save_wali';
$route['data/siswa/daftar/cari_wali'] = 'Data/_SiswaBimbelController/cari_wali';
$route['data/siswa/daftar/get_alamat_wali'] = 'Data/_SiswaBimbelController/get_alamat_wali';
$route['data/siswa/daftar/cari_kode_diskon'] = 'Data/_SiswaBimbelController/cari_kode_diskon';
$route['data/siswa/daftar/get_jml_diskon'] = 'Data/_SiswaBimbelController/get_jml_diskon';
$route['data/siswa/daftar/change_program_bimbel'] = 'Data/_SiswaBimbelController/change_program_bimbel';
$route['data/siswa/detail/(:any)'] = 'Data/_SiswaBimbelController/detail_siswa/$1';
$route['data/siswa/detail/update/siswa'] = 'Data/_SiswaBimbelController/update_siswa';


$route['data/wali/show'] = 'Data/_WaliController/index';
$route['data/wali/show_data_wali'] = 'Data/_WaliController/show_data_wali';
$route['data/wali/trash_wali'] = 'Data/_WaliController/trash_wali';
$route['data/wali/add_wali'] = 'Data/_WaliController/add_wali';
$route['data/wali/edit_wali'] = 'Data/_WaliController/edit_wali';
$route['data/wali/update_wali'] = 'Data/_WaliController/update_wali';
$route['data/wali/perwalian/(:any)'] = 'Data/_WaliController/perwalian/$1';

$route['data/tentor/show'] = 'Data/_TentorController/index';
$route['data/tentor/show_data_tentor'] = 'Data/_TentorController/show_data_tentor';
$route['data/tentor/trash_tentor'] = 'Data/_TentorController/trash_tentor';
$route['data/tentor/add_tentor'] = 'Data/_TentorController/add_tentor';
$route['data/tentor/edit_tentor'] = 'Data/_TentorController/edit_tentor';
$route['data/tentor/update_tentor'] = 'Data/_TentorController/update_tentor';
$route['data/tentor/count_tentor'] = 'Data/_TentorController/count_tentor';

$route['data/bimbel/show'] = 'Bimbel/_BimbelController/index';
$route['data/bimbel/show_data'] = 'Bimbel/_BimbelController/show_data';
$route['data/bimbel/trash_bimbel'] = 'Bimbel/_BimbelController/trash_bimbel';
$route['data/bimbel/add_bimbel'] = 'Bimbel/_BimbelController/add_bimbel';
$route['data/bimbel/edit_bimbel'] = 'Bimbel/_BimbelController/edit_bimbel';
$route['data/bimbel/update_bimbel'] = 'Bimbel/_BimbelController/update_bimbel';

$route['data/pembayaran/show'] = 'Pembayaran/_PembayaranController/index';
$route['data/pembayaran/show_data'] = 'Pembayaran/_PembayaranController/show_data';
$route['data/pembayaran/trash_pembayaran'] = 'Pembayaran/_PembayaranController/trash_pembayaran';
$route['data/pembayaran/detail/(:any)'] = 'Pembayaran/_PembayaranController/detail_pembayaran/$1';
$route['data/pembayaran/detail/trash/detail_pembayaran'] = 'Pembayaran/_PembayaranController/trash_detail_pembayaran';
$route['data/pembayaran/detail/add/detail_pembayaran'] = 'Pembayaran/_PembayaranController/add_detail_pembayaran';
$route['data/pembayaran/detail/edit/detail_pembayaran'] = 'Pembayaran/_PembayaranController/edit_detail_pembayaran';
$route['data/pembayaran/detail/update/detail_pembayaran'] = 'Pembayaran/_PembayaranController/update_detail_pembayaran';
$route['data/pembayaran/detail/(:any)/(:any)'] = 'Pembayaran/_PembayaranController/print_kwitansi/$1/$2';
$route['data/pembayaran/coba'] = 'Pembayaran/_PembayaranController/coba';

$route['data/penjadwalan/show'] = 'Penjadwalan/_PenjadwalanController/index';

$route['setup/biaya-diskon/show'] = 'Setup/_BiayaDiskonController/index';
$route['setup/biaya-diskon/show_biaya_daftar'] = 'Setup/_BiayaDiskonController/show_biaya_daftar';
$route['setup/biaya-diskon/update_biaya_daftar'] = 'Setup/_BiayaDiskonController/update_biaya_daftar';

$route['setup/biaya-diskon/show_data_diskon'] = 'Setup/_BiayaDiskonController/show_data_diskon';
$route['setup/biaya-diskon/add_diskon'] = 'Setup/_BiayaDiskonController/add_diskon';
$route['setup/biaya-diskon/edit_diskon'] = 'Setup/_BiayaDiskonController/edit_diskon';
$route['setup/biaya-diskon/update_diskon'] = 'Setup/_BiayaDiskonController/update_diskon';
$route['setup/biaya-diskon/trash_diskon'] = 'Setup/_BiayaDiskonController/trash_diskon';

$route['setup/tahun-ajaran/show'] = 'Setup/_TahunAjaranController/index';
$route['setup/tahun-ajaran/show_data_ajaran'] = 'Setup/_TahunAjaranController/show_data_ajaran';
$route['setup/tahun-ajaran/trash_ajaran'] = 'Setup/_TahunAjaranController/trash_ajaran';
$route['setup/tahun-ajaran/add_ajaran'] = 'Setup/_TahunAjaranController/add_ajaran';
$route['setup/tahun-ajaran/edit_ajaran'] = 'Setup/_TahunAjaranController/edit_ajaran';
$route['setup/tahun-ajaran/update_ajaran'] = 'Setup/_TahunAjaranController/update_ajaran';

$route['setup/program-pilihan/show'] = 'Setup/_ProgramPilihanController/index';
$route['setup/program-pilihan/show_data_program'] = 'Setup/_ProgramPilihanController/show_data_program';
$route['setup/program-pilihan/trash_program'] = 'Setup/_ProgramPilihanController/trash_program';
$route['setup/program-pilihan/add_program'] = 'Setup/_ProgramPilihanController/add_program';
$route['setup/program-pilihan/edit_program'] = 'Setup/_ProgramPilihanController/edit_program';
$route['setup/program-pilihan/update_program'] = 'Setup/_ProgramPilihanController/update_program';
$route['setup/program-pilihan/show_pilihan_program'] = 'Setup/_ProgramPilihanController/show_pilihan_program';
$route['setup/program-pilihan/halo'] = 'Setup/_ProgramPilihanController/halo'; //percobaan

$route['setup/program-pilihan/show_data_pilihan'] = 'Setup/_ProgramPilihanController/show_data_pilihan';
$route['setup/program-pilihan/add_pilihan'] = 'Setup/_ProgramPilihanController/add_pilihan';
$route['setup/program-pilihan/edit_pilihan'] = 'Setup/_ProgramPilihanController/edit_pilihan';
$route['setup/program-pilihan/update_pilihan'] = 'Setup/_ProgramPilihanController/update_pilihan';
$route['setup/program-pilihan/trash_pilihan'] = 'Setup/_ProgramPilihanController/trash_pilihan';

$route['laporan/bimbel-pembayaran'] = 'Laporan/_LaporanController/bimbel_pembayaran';
$route['laporan/bimbel-pembayaran/print'] = 'Laporan/_LaporanController/print_bimbel_pembayaran';


$route['administrator/show'] = 'Administrator/_AdministratorController/index';
$route['administrator/setup-akun'] = 'Administrator/_AdministratorController/setup_akun';
$route['administrator/detail_admin'] = 'Administrator/_AdministratorController/detail_admin';
$route['administrator/add-admin'] = 'Administrator/_AdministratorController/add_admin';
$route['administrator/add_new_admin'] = 'Administrator/_AdministratorController/add_new_admin';
$route['administrator/coba'] = 'Administrator/_AdministratorController/coba';