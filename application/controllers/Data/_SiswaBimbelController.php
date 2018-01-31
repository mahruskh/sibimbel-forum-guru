<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _SiswaBimbelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('CheckSession');
        $this->checksession->check_session($this->session->id_admin,$this->session->nama);
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
            $siswa = array(
                "nis_bimbel" => $this->generate_nisb($this->input->post('nama_siswa')),
                "id_wali_siswa" => $this->input->post('id_wali_siswa'),
                "nama" => $this->input->post('nama_siswa'),
                "foto" => "fotos", //foto belum ada
                "tmpt_lahir" => $this->input->post('tmpt_lahir'),
                "tgl_lahir" => date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
                "asal_sekolah" => $this->input->post('asal_sekolah'),
                "alamat" => $this->input->post('alamat'),
                "telepon" => $this->input->post('telepon_siswa'),
                "catatan" => $this->input->post('catatan')
            );
            $this->SiswaBimbelModel->add_siswa($siswa);

            $bimbel = array (
                "nis_bimbel" => $siswa['nis_bimbel'],
                "id_tahun_ajaran" => $this->input->post('id_tahun_ajaran'),
                "id_program_bimbel" => $this->input->post('id_program_bimbel'),
                "total_biaya" => $this->input->post('total_biaya'),
                "total_transaksi" => 0,
                "status" => "Belum Lunas",
                "tgl_pendaftaran" => date('Y-m-d')
            );
            $this->SiswaBimbelModel->add_bimbel($bimbel);
            redirect('data/siswa/show');
        } else {
            redirect('data/siswa/daftar');
        }
    }
    private function generate_nisb($nama) //generate nis bimbel dari beberapa data
    {
        return $nisb = substr(strtoupper($nama),0,3) . date('ymdhis');
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
        }
    }
    public function detail_siswa($id_siswa)
    {
        $data['siswa'] = $this->SiswaBimbelModel->detail_siswa($id_siswa);
        if (!empty($data['siswa'])) {
            $data['title'] = "Detail Data Siswa";
            $this->load->view('DataSiswa/detail_siswa', $data);

        } else {
            redirect(base_url('data/siswa/show'));
        }
    }
    public function update_siswa()
    {
        $update = $this->input->post('update_siswa');
        if (isset($update)) {
            $siswa['id_siswa'] = $this->input->post('id_siswa');
            $siswa['nis_bimbel'] = $this->input->post('nis_bimbel');
            $siswa['id_wali_siswa'] = $this->input->post('id_wali_siswa');
            $siswa['nama'] = $this->input->post('nama_siswa');
            $siswa['foto'] = "fotos"; //belum fotonya
            $siswa['tmpt_lahir'] = $this->input->post('tmpt_lahir');
            $siswa['tgl_lahir'] = date('Y-m-d', strtotime($this->input->post('tgl_lahir')));
            $siswa['asal_sekolah'] = $this->input->post('asal_sekolah');
            $siswa['alamat'] = $this->input->post('alamat');
            $siswa['telepon'] = $this->input->post('telepon_siswa');
            $siswa['catatan'] = $this->input->post('catatan');
            $this->SiswaBimbelModel->update_siswa($siswa);
            redirect('data/siswa/show');
        } else {
            redirect('data/siswa/daftar');
        }
    }
}
?>