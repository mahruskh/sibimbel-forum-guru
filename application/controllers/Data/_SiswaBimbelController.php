<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _SiswaBimbelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data/SiswaBimbelModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Data Siswa Bimbel";
        $this->load->view('DataSiswa/index',$data);
        $this->load->view('DataSiswa/modal-trash');

    }
    public function show_data()
    {
        if ($this->input->is_ajax_request()){
            echo $this->SiswaBimbelModel->show_data();
        }
    }
    public function trash()
    {
        if ($this->input->is_ajax_request()){
            echo $this->SiswaBimbelModel->trash($this->input->post('id_trash'));
        }
    }
    public function registration_siswa()
    {
        $data['title'] = "Pendaftaran Siswa Bimbel";
        $data['def_tahun_ajaran'] = $this->SiswaBimbelModel->def_tahun_ajaran();
        $data['def_program_bimbel'] = $this->SiswaBimbelModel->def_program_bimbel();
        $data['def_biaya_daftar'] = $this->SiswaBimbelModel->def_biaya_daftar();
        $this->load->view('DataSiswa/registration_siswa', $data);
        $this->load->view('DataSiswa/modal-add-wali');

    }
    public function register_siswa()
    {
        $daftar = $this->input->post('daftar');
        if (isset($daftar)) {
            var_dump($this->input->post());
            echo "<br><br>";
            $siswa['id_wali_siswa'] = "1"; //belum ada id nya
            $siswa['nama'] = $this->input->post('nama_siswa');
            $siswa['foto'] = "fotos"; //belum ada foto
            $siswa['tmpt_lahir'] = $this->input->post('tmpt_lahir');
            $siswa['tgl_lahir'] = date('Y-m-d', strtotime($this->input->post('tgl_lahir')));
            $siswa['asal_sekolah'] = $this->input->post('asal_sekolah');
            $siswa['alamat'] = $this->input->post('alamat_siswa');
            $siswa['telepon'] = $this->input->post('telepon_siswa');
            $siswa['catatan'] = $this->input->post('catatan');
            echo $this->SiswaBimbelModel->add_siswa($siswa);
        } else {
            redirect('data/siswa/daftar');
        }
    }
    public function save_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->SiswaBimbelModel->save_wali($this->input->post());
        }
    }
    public function cari_wali()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->SiswaBimbelModel->cari_wali($this->input->post('term')));
        }
    }
    public function get_alamat_wali()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->SiswaBimbelModel->get_alamat_wali($this->input->post('id_wali_siswa')));
        }
    }
    public function cari_kode_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->SiswaBimbelModel->cari_kode_diskon($this->input->post('term')));
        }
    }
    public function get_jml_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->SiswaBimbelModel->get_jml_diskon($this->input->post('id_diskon')));
        }
    }
    public function change_program_bimbel()
    {
        if ($this->input->is_ajax_request()){
           echo json_encode($this->SiswaBimbelModel->change_program_bimbel($this->input->post('id_program_bimbel')));
//            echo $this->SiswaBimbelModel->change_program_bimbel($this->input->post('id_program_bimbel'));
        }
    }
}

?>