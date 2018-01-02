<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaBimbelModel extends CI_Model
{
    private $tools_siswa = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li><a href="#">Detail & Edit</a></li>
            <li><a href="#">Rincian Pembayaran</a></li>                     
            <li onclick="del($1)"><a href="#">Hapus !</a></li>
        </ul>
       </div>';

    public function show_data()
    {
        $this->datatables->select('id_siswa,nama,asal_sekolah');
        $this->datatables->from('tb_siswa');
        $this->datatables->add_column('tools', $this->tools_siswa, 'id_siswa');
        return $this->datatables->generate();
    }
    public function trash($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->delete('tb_siswa');
    }
    public function add_siswa($data)
    {
        return $this->db->insert('tb_siswa', $data);
    }
    public function save_wali($data)
    {
        return $this->db->insert('tb_wali_siswa', $data);
    }
    public function cari_wali($term)
    {
        $this->db->select('nama_wali');
        $this->db->like('nama_wali',$term,'after');
        return $this->db->get('tb_wali_siswa')->result();
    }
    public function pilihan_default() //belum berhasil
    {
        $this->db->select('id_tahun_ajaran,tahun_ajaran');
        $this->db->order_by('tahun_ajaran', 'DESC');
        $data ['mahrus'] = $this->db->get('tb_tahun_ajaran')->result();
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->order_by('id_program_bimbel', 'DESC');
        $data ['program_bimbel'] = $this->db->get('tb_program_bimbel')->result();
        return $data;
    }
    public function def_tahun_ajaran()
    {
        $this->db->select('id_tahun_ajaran,tahun_ajaran');
        $this->db->order_by('tahun_ajaran','DESC');
        return $this->db->get('tb_tahun_ajaran')->result();
    }

    public function def_program_bimbel()
    {
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->from('tb_program_bimbel');
        return $this->db->get()->result();
    }
    public function def_biaya_daftar()
    {
        $this->db->select('biaya_daftar');
        return $this->db->get('tb_biaya_daftar')->result();
    }
    public function change_program_bimbel($id_program_bimbel)
    {
        $this->db->select('biaya_program');
        $this->db->from('tb_program_bimbel');
        $this->db->where('id_program_bimbel', $id_program_bimbel);
        return $this->db->get()->row();
    }
}