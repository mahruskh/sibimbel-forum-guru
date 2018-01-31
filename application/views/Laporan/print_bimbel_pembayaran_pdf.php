<html>
<title>Laporan Data Bimbel & Pembayaran</title>
<head></head>
<body>
<center>
    <font size="5"><b>BIMBEL FORUM GURU MALANG</b></font><br>
    Jln. Padjajaran No.16 Malang, Telp. 08224590193
</center>
<hr>
<center>
    <font size="3"><b>LAPORAN DATA BIMBEL & PEMBAYARAN</b></font>
</center><br>
<table rules="all" width="100%">
    <thead>
        <tr>
            <th align="center">Nama Siswa</th>
            <th align="center">Asal Sekolah</th>
            <th align="center">Tahun Ajaran</th>
            <th align="center">Program Bimbel</th>
            <th align="center">Total Biaya (Rp.)</th>
            <th align="center">Status</th>
            <th align="center">Tgl Daftar</th>
            <th align="center">Admin</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($laporan as $row) { ?>
            <tr>
                <td><?php echo $row->nama;?></td>
                <td align="center"><?php echo $row->asal_sekolah;?></td>
                <td align="center"><?php echo $row->tahun_ajaran;?></td>
                <td align="center"><?php echo $row->program_bimbel;?></td>
                <td align="center"><?php echo number_format($row->total_biaya,0,'','.')?></td>
                <td align="center"><?php echo $row->status;?></td>
                <td align="center"><?php echo date('d/m/Y', strtotime($row->tgl_pendaftaran));?></td>
                <td align="center"><?php echo $row->nama_admin;?></td>
            </tr>
        <?php }?>
    </tbody>

</table>

</body>
</html>