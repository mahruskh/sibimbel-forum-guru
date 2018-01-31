<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaBimbelModel extends CI_Model
{
    private $tools_siswa = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li><a href="detail/$1">Detail & Edit</a></li>                     
            <li onclick="del($1)"><a href="#">Hapus !</a></li>
        </ul>
       </div>';

    public function show_data()
    {
        $this->datatables->select('id_siswa,nis_bimbel,nama,asal_sekolah');
        $this->datatables->from('tb_siswa');
        $this->datatables->add_column('tools', $this->tools_siswa, 'id_siswa');
        return $this->datatables->generate();
    }
    public function trash($id_siswa)
    {
        $this->db->where('id_siswa  ', $id_siswa);
        return $this->db->delete('tb_siswa');
    }
    public function add_siswa($siswa)
    {
        return $this->db->insert('tb_siswa', $siswa);
    }
    public function add_bimbel($bimbel)
    {
        return $this->db->insert('tb_bimbel', $bimbel);
    }
    public function save_wali($data)
    {
        return $this->db->insert('tb_wali_siswa', $data);
    }
    public function cari_wali($term)
    {
        $this->db->select('id_wali_siswa,nama_wali');
        $this->db->like('nama_wali',$term);
        return $this->db->get('tb_wali_siswa')->result();
    }
    public function get_alamat_wali($id_wali_siswa)
    {
        $this->db->select('alamat_wali');
        $this->db->where('id_wali_siswa', $id_wali_siswa);
        return $this->db->get('tb_wali_siswa')->row();
    }
    public function cari_kode_diskon($term)
    {
        $this->db->select('id_diskon,kode_diskon');
        $this->db->like('kode_diskon',$term);
        return $this->db->get('tb_diskon')->result();
    }
    public function get_jml_diskon($id_diskon)
    {
        $this->db->select('jml_diskon');
        $this->db->where('id_diskon', $id_diskon);
        return $this->db->get('tb_diskon')->row();
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
        $this->db->select('id_program_bimbel,program_bimbel,pilihan_program');
        $this->db->from('tb_program_bimbel');
        $this->db->join('tb_pilihan_program','tb_program_bimbel.id_pilihan_program = tb_pilihan_program.id_pilihan_program','left');
        $this->db->order_by('program_bimbel','ASC');
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
    public function detail_siswa($id_siswa)
    {
        $this->db->select('id_siswa,nis_bimbel,tb_siswa.id_wali_siswa as id_wali_siswa,alamat_wali,nama_wali,nama,foto,tmpt_lahir,tgl_lahir,asal_sekolah,alamat,telepon,catatan');
        $this->db->from('tb_siswa');
        $this->db->join('tb_wali_siswa','tb_siswa.id_wali_siswa = tb_wali_siswa.id_wali_siswa','left');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->result();
    }
    public function update_siswa($siswa)
    {
        $this->db->where('id_siswa', $siswa['id_siswa']);
        $this->db->where('nis_bimbel', $siswa['nis_bimbel']);
        return $this->db->update('tb_siswa', $siswa);

    }
}