<html>
<title>Kwitansi Bukti Pembayaran</title>
<head></head>
<body>
<center>
    <font size="5"><b>BIMBEL FORUM GURU MALANG</b></font><br>
    Jln. Padjajaran No.16 Malang, Telp. 08224590193
</center>
<hr>
<center>
    <font size="3"><b>KWITANSI BUKTI PEMBAYARAAN</b></font>
</center>
<?php
foreach ($pembayaran as $row) { ?>
<table>
        <tr>
            <td width="100px">Nama</td>
            <td>:</td>
            <td width="400px"><?php echo $row->nama;?></td>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?php echo $row->tahun_ajaran;?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?php echo $row->asal_sekolah;?></td>
            <?php
            foreach ($detail_pembayaran as $item) { ?>
                <td>Tgl. Bayar</td>
                <td>:</td>
                <td><?php echo date('d/m/Y', strtotime($item->tgl_pembayaran));?></td>
        </tr>
</table>
<br>
<table rules="all" width="100%">
    <thead>
    <tr>
        <th align="center">Uraian</th>
        <th align="center">Jumlah Bayar</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td align="center">Angsuran Pembayaran Program Bimbel</td> <!-- Masih belum, seharusnya "Angsuran Pembayaran ke-5"-->
        <td align="center">Rp. <?php echo number_format($item->jml_pembayaran,0,'','.');?></td>
    </tr>
    </tbody>
</table>
<br>
<table>
    <tr>
        <td width="100px">Program Bimbel : <?php echo $row->program_bimbel;?></td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td align="left">Biaya Program : Rp. <?php echo number_format($row->total_biaya,0,'','.');?></td>
        <td align="center">Total Terbayar : Rp. <?php echo number_format($row->total_transaksi,0,'','.');?></td>
        <td align="right">Status : <font color="red"><?php echo $row->status;?></font></td>
    </tr>
</table>
<br>
<table width="100%">
    <tr>
        <td align="center">
            Penyetor <br><br><br><br>
            (................................................)

        </td>
        <td align="center">
            Administrator <br><br><br><br>
            (<?php echo $item->admin;?>)
        </td>
    </tr>
            <?php
            }
            ?>
</table>
<?php
} ?>
</body>
</html>