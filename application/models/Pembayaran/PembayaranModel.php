<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranModel extends CI_Model
{
    private $tools_pembayaran = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li><a href="detail/$1">Pembayaran</a></li>
            <li><a href="#">?????</a></li>                    
            <li onclick="del_pembayaran($1)"><a href="#">Hapus !</a></li>
        </ul>
       </div>';

    public function filter_tahun_ajaran()
    {
        $this->db->select('id_tahun_ajaran,tahun_ajaran');
        $this->db->order_by('tahun_ajaran', 'DESC');
        return $this->db->get('tb_tahun_ajaran')->result();
    }
    public function filter_program_bimbel()
    {
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->order_by('id_program_bimbel', 'DESC');
        return $this->db->get('tb_program_bimbel')->result();
    }
    public function filter_pembayaran() //belum berhasil
    {
        $this->db->select('id_tahun_ajaran,tahun_ajaran');
        $this->db->order_by('tahun_ajaran', 'DESC');
        $data ['tahun_ajaran'] = $this->db->get('tb_tahun_ajaran')->result();
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->order_by('id_program_bimbel', 'DESC');
        $data ['program_bimbel'] = $this->db->get('tb_program_bimbel')->result();
        return $data;
    }
    public function show_data($filter)
    {
        $this->datatables->select('id_bimbel,nama,tahun_ajaran,program_bimbel,status');
        $this->datatables->from('tb_bimbel');
        $this->datatables->join('tb_siswa','tb_bimbel.id_siswa = tb_siswa.id_siswa','left');
        $this->datatables->join('tb_tahun_ajaran','tb_bimbel.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran','left');
        $this->datatables->join('tb_program_bimbel','tb_bimbel.id_program_bimbel = tb_program_bimbel.id_program_bimbel','left');
        if (!empty($filter)){
            foreach ($filter as $tabel => $id){
                $this->datatables->where('tb_bimbel.'. $tabel, $id);
            }
        }
        $this->datatables->add_column('tools_pembayaran',$this->tools_pembayaran,'id_bimbel');
        return $this->datatables->generate();
    }

    public function trash_pembayaran($id_bimbel)
    {
        $this->db->where('id_bimbel', $id_bimbel);
        $this->db->delete('tb_bimbel');
        $this->db->where('id_bimbel', $id_bimbel);
        $this->db->delete('tb_detail_pembayaran');
        return TRUE;
    }
    public function data_pembayaran($id_detail)
    {
        $this->db->select('id_bimbel,nama,tahun_ajaran,program_bimbel,total_biaya,total_transaksi,status');
        $this->db->from('tb_bimbel');
        $this->db->join('tb_siswa','tb_bimbel.id_siswa = tb_siswa.id_siswa','left');
        $this->db->join('tb_tahun_ajaran','tb_bimbel.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran','left');
        $this->db->join('tb_program_bimbel','tb_bimbel.id_tahun_ajaran = tb_program_bimbel.id_program_bimbel','left');
        $this->db->where('id_bimbel', $id_detail);
        return $this->db->get()->result();
    }
    public function rincian_pembayaran($id_detail)
    {
        $this->db->select('id_detail_pembayaran,tb_admin.nama as admin,jml_pembayaran,tgl_pembayaran');
        $this->db->from('tb_detail_pembayaran');
        $this->db->join('tb_admin','tb_detail_pembayaran.id_admin = tb_admin.id_admin','left');
        $this->db->where('id_bimbel', $id_detail);
        $this->db->order_by('tgl_pembayaran','DESC');
        return $this->db->get()->result();
    }
    public function print_pembayaran($id_detail)
    {
        $this->db->select('nama,asal_sekolah,tahun_ajaran,program_bimbel,total_biaya,total_transaksi,status');
        $this->db->from('tb_bimbel');
        $this->db->join('tb_siswa','tb_bimbel.id_siswa = tb_siswa.id_siswa','left');
        $this->db->join('tb_tahun_ajaran','tb_bimbel.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran','left');
        $this->db->join('tb_program_bimbel','tb_bimbel.id_tahun_ajaran = tb_program_bimbel.id_program_bimbel','left');
        $this->db->where('id_bimbel', $id_detail);
        return $this->db->get()->result();
    }
    public function print_rincian_pembayaran($id_bimbel, $id_detail_pembayaran)
    {
        $this->db->select('tb_admin.nama as admin,jml_pembayaran,tgl_pembayaran');
        $this->db->from('tb_detail_pembayaran');
        $this->db->join('tb_admin','tb_detail_pembayaran.id_admin = tb_admin.id_admin','left');
        $this->db->where('id_detail_pembayaran', $id_detail_pembayaran);
        $this->db->where('id_bimbel', $id_bimbel);
        return $this->db->get()->result();
    }
    public function count_total_transaksi($id_bimbel) {
        $this->db->select('SUM(jml_pembayaran) AS total_transaksi');
        $this->db->from('tb_detail_pembayaran');
        $this->db->where('id_bimbel', $id_bimbel);
        foreach ($this->db->get()->result() as $row) {
            $data['total_transaksi'] = $row->total_transaksi;
        }

        $this->db->select('total_biaya');
        $this->db->from('tb_bimbel');
        $this->db->where('id_bimbel', $id_bimbel);
        foreach ($this->db->get()->result() as $row) {
            $total_biaya = $row->total_biaya;
        }
        if ($data['total_transaksi'] == $total_biaya) {
            $data['status'] = "Lunas";
        } else if ($data['total_transaksi'] < $total_biaya) {
            $data['status'] = "Belum Lunas";
        }

        $this->db->where('id_bimbel', $id_bimbel);
        $this->db->update('tb_bimbel', $data);
    }
    public function add_detail_pembayaran($data)
    {
        return $this->db->insert('tb_detail_pembayaran', $data);
    }
    public function edit_detail_pembayaran($id_detail_pembayaran)
    {
        $this->db->select('jml_pembayaran');
        $this->db->from('tb_detail_pembayaran');
        $this->db->where('id_detail_pembayaran', $id_detail_pembayaran);
        return $this->db->get()->row();
    }
    public function update_detail_pembayaran($data)
    {
        $this->db->where('id_detail_pembayaran', $data['id_detail_pembayaran']);
        return $this->db->update('tb_detail_pembayaran', $data);
    }
    public function trash_detail_pembayaran($id_detail_pembayaran)
    {
        $this->db->where('id_detail_pembayaran', $id_detail_pembayaran);
        return $this->db->delete('tb_detail_pembayaran');

    }

}
?>