<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");
?>
<table border="1">
    <thead>
        <tr>
            <th>Nama Siswa</th>
            <th>Asal Sekolah</th>
            <th>Tahun Ajaran</th>
            <th>Program Bimbel</th>
            <th>Total Biaya (Rp.)</th>
            <th>Status</th>
            <th>Tanggal Pendafataran</th>
            <th>Administrator</th>
        </tr>
    </thead>
    <tbody> <?php
    foreach ($laporan as $row) { ?>
        <tr>
            <td><?php echo $row->nama;?></td>
            <td><?php echo $row->asal_sekolah;?></td>
            <td><?php echo $row->tahun_ajaran;?></td>
            <td><?php echo $row->program_bimbel;?></td>
            <td><?php echo number_format($row->total_biaya,0,'','.')?></td>
            <td><?php echo $row->status;?></td>
            <td><?php echo date('d/m/Y', strtotime($row->tgl_pendaftaran));?></td>
            <td><?php echo $row->nama_admin;?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>