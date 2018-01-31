<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanModel extends CI_Model
{
    //filter dijadikan satu function belum berhasil
    public function filter_tahun_ajaran()
    {
        $this->db->order_by('tahun_ajaran', 'DESC');
        return $this->db->get('tb_tahun_ajaran')->result();
    }
    public function filter_program_bimbel()
    {
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->order_by('id_program_bimbel', 'DESC');
        return $this->db->get('tb_program_bimbel')->result();
    }
    public function filter_admin()
    {
        $this->db->select('id_admin,nama');
        return $this->db->get('tb_admin')->result();
    }
    public function print_bimbel_pembayaran_pdf($filter,$filter_tanggal)
    {
        $this->db->select('tb_siswa.nama as nama,asal_sekolah,tahun_ajaran,program_bimbel,total_biaya,tb_bimbel.status as status,tgl_pendaftaran,tb_admin.nama as nama_admin');
        $this->db->from('tb_bimbel');
        $this->db->join('tb_siswa','tb_bimbel.nis_bimbel = tb_siswa.nis_bimbel','left');
        $this->db->join('tb_tahun_ajaran','tb_bimbel.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran','left');
        $this->db->join('tb_program_bimbel','tb_bimbel.id_program_bimbel = tb_program_bimbel.id_program_bimbel','left');
        $this->db->join('tb_admin','tb_bimbel.id_admin = tb_admin.id_admin','left');
        if (!empty($filter)){
            foreach ($filter as $tabel => $id) {
                $this->db->where('tb_bimbel.'. $tabel, $id);
            }
        }
        $this->db->where($filter_tanggal);
        $this->db->order_by('tahun_ajaran DESC,tgl_pendaftaran ASC');
        return $this->db->get()->result();
    }

}