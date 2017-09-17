<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login/show'] = 'Login/_LoginController/index';

$route['dashboard/show'] = 'Dashboard/_DashboardController/index';

$route['pendaftaran/siswa/show'] = 'Pendaftaran/_SiswaBimbelController/index';
$route['pendaftaran/siswa/show_data'] = 'Pendaftaran/_SiswaBimbelController/show_data';
$route['pendaftaran/siswa/trash'] = 'Pendaftaran/_SiswaBimbelController/trash';

$route['pendaftaran/wali/show'] = 'Pendaftaran/_WaliController/index';
$route['pendaftaran/wali/show_data_wali'] = 'Pendaftaran/_WaliController/show_data_wali';
$route['pendaftaran/wali/trash_wali'] = 'Pendaftaran/_WaliController/trash_wali';
$route['pendaftaran/wali/add_wali'] = 'Pendaftaran/_WaliController/add_wali';
$route['pendaftaran/wali/edit_wali'] = 'Pendaftaran/_WaliController/edit_wali';
$route['pendaftaran/wali/update_wali'] = 'Pendaftaran/_WaliController/update_wali';

$route['setup/biaya-diskon/show'] = 'Setup/_BiayaDiskonController/index';
$route['setup/biaya-diskon/show_biaya_daftar'] = 'Setup/_BiayaDiskonController/show_biaya_daftar';
$route['setup/biaya-diskon/update_biaya_daftar'] = 'Setup/_BiayaDiskonController/update_biaya_daftar';

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
$route['setup/program-pilihan/trash_pilihan'] = 'Setup/_ProgramPilihanController/trash_pilihan';
$route['setup/program-pilihan/add_pilihan'] = 'Setup/_ProgramPilihanController/add_pilihan';
$route['setup/program-pilihan/edit_pilihan'] = 'Setup/_ProgramPilihanController/edit_pilihan';
$route['setup/program-pilihan/update_pilihan'] = 'Setup/_ProgramPilihanController/update_pilihan';


$route['administrator/show'] = 'Administrator/_AdministratorController/index';
$route['administrator/profil'] = 'Administrator/_AdministratorController/profil';
$route['administrator/coba'] = 'Administrator/_AdministratorController/coba';


