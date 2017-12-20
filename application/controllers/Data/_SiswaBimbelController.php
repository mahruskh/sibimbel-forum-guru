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
        $data['default'] = $this->SiswaBimbelModel->pilihan_default();
        $this->load->view('DataSiswa/registration_siswa', $data);
        $this->load->view('DataSiswa/modal-add-wali');

//        foreach ($data['default'] as $row){
//
//            foreach ($row as $tiw){
//                var_dump($tiw);
//            }
//        }
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
       // if ($this->input->is_ajax_request()){
            echo json_encode($this->SiswaBimbelModel->cari_wali("muh"));
       // }
    }
}

?>