<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login/show'] = 'Login/_LoginController/index';

$route['dashboard/show'] = 'Dashboard/_DashboardController/index';

$route['data/siswa/show'] = 'Data/_SiswaBimbelController/index';
$route['data/siswa/show_data'] = 'Data/_SiswaBimbelController/show_data';
$route['data/siswa/trash'] = 'Data/_SiswaBimbelController/trash';

$route['data/wali/show'] = 'Data/_WaliController/index';
$route['data/wali/show_data_wali'] = 'Data/_WaliController/show_data_wali';
$route['data/wali/trash_wali'] = 'Data/_WaliController/trash_wali';
$route['data/wali/add_wali'] = 'Data/_WaliController/add_wali';
$route['data/wali/edit_wali'] = 'Data/_WaliController/edit_wali';
$route['data/wali/update_wali'] = 'Data/_WaliController/update_wali';

$route['data/tentor/show'] = 'Data/_TentorController/index';
$route['data/tentor/show_data_tentor'] = 'Data/_TentorController/show_data_tentor';
$route['data/tentor/trash_tentor'] = 'Data/_TentorController/trash_tentor';
$route['data/tentor/add_tentor'] = 'Data/_TentorController/add_tentor';
$route['data/tentor/edit_tentor'] = 'Data/_TentorController/edit_tentor';
$route['data/tentor/update_tentor'] = 'Data/_TentorController/update_tentor';

$route['data/bimbel/show'] = 'Bimbel/_BimbelController/index';
$route['data/bimbel/show_data_bimbel'] = 'Bimbel/_BimbelController/show_data_bimbel';
$route['data/bimbel/trash_bimbel'] = 'Bimbel/_BimbelController/trash_bimbel';
$route['data/bimbel/add_bimbel'] = 'Bimbel/_BimbelController/add_bimbel';
$route['data/bimbel/edit_bimbel'] = 'Bimbel/_BimbelController/edit_bimbel';
$route['data/bimbel/update_bimbel'] = 'Bimbel/_BimbelController/update_bimbel';

$route['data/pembayaran/show'] = 'Pembayaran/_PembayaranController/index';
$route['data/pembayaran/show_data'] = 'Pembayaran/_PembayaranController/show_data';
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


$route['administrator/show'] = 'Administrator/_AdministratorController/index';
$route['administrator/profil'] = 'Administrator/_AdministratorController/profil';
$route['administrator/coba'] = 'Administrator/_AdministratorController/coba';