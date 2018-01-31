-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2018 at 07:40 PM
-- Server version: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibimbel_forum_guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` smallint(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_data_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `foto`, `alamat`, `telepon`, `last_login`, `last_data_update`, `status`) VALUES
(1, 'pakmus', '123456', 'Mokhamad Muslik, S.H, S.Pd', 'pakmus.png', 'Sawojajar, Malang', '089764435647', '2018-01-14 17:00:00', '2018-01-16 07:38:24', 1),
(2, 'okky', '123456', 'Okky Hendra Setiyawan', 'okkyhendra.png', 'Malang', '08965833884', '2017-12-27 17:00:00', '2018-01-16 07:38:29', 1),
(3, 'raniayu', '123456', 'Rani Putri Ayu', 'raniputri.png', 'Sukun, Malang', '08965833884', '2017-12-25 17:00:00', '2018-01-16 07:38:35', 0),
(4, 'mahrus_kh', 'qwerty123', 'Mahrus Khomaini', 'mahruskh.jpg', 'Jln.S.Supriadi No.28 Kasin Gg.Kramat A Malang', '089648399003', '2018-01-13 21:20:36', '2018-01-16 02:58:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya_daftar`
--

CREATE TABLE IF NOT EXISTS `tb_biaya_daftar` (
  `id_biaya_daftar` tinyint(4) NOT NULL,
  `biaya_daftar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biaya_daftar`
--

INSERT INTO `tb_biaya_daftar` (`id_biaya_daftar`, `biaya_daftar`) VALUES
(1, '150000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bimbel`
--

CREATE TABLE IF NOT EXISTS `tb_bimbel` (
  `id_bimbel` int(11) NOT NULL,
  `nis_bimbel` varchar(15) NOT NULL,
  `id_tahun_ajaran` tinyint(4) NOT NULL,
  `id_program_bimbel` tinyint(4) NOT NULL,
  `total_biaya` varchar(255) NOT NULL,
  `total_transaksi` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_admin` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bimbel`
--

INSERT INTO `tb_bimbel` (`id_bimbel`, `nis_bimbel`, `id_tahun_ajaran`, `id_program_bimbel`, `total_biaya`, `total_transaksi`, `status`, `tgl_pendaftaran`, `id_admin`) VALUES
(1, 'HER180105124344', 2, 3, '3500000', '3250000', 'Belum Lunas', '2018-01-07', 2),
(4, 'EKA180106122144', 1, 3, '4300000', '4300000', 'Lunas', '2018-01-08', 3),
(5, 'DAN180106054107', 2, 1, '2900000', '2500000', 'Belum Lunas', '2018-01-06', 1),
(6, 'FAR180106054540', 2, 3, '5300000', '3552532', 'Belum Lunas', '2018-01-06', 1),
(7, 'HEN180108075212', 2, 1, '3100000', '0', 'Belum Lunas', '2018-01-08', 2),
(8, 'IKA180116084214', 2, 7, '3800000', '0', 'Belum Lunas', '2018-01-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_detail_pembayaran` (
  `id_detail_pembayaran` int(11) NOT NULL,
  `id_bimbel` int(11) NOT NULL,
  `id_admin` tinyint(4) NOT NULL,
  `jml_pembayaran` varchar(255) NOT NULL,
  `tgl_pembayaran` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pembayaran`
--

INSERT INTO `tb_detail_pembayaran` (`id_detail_pembayaran`, `id_bimbel`, `id_admin`, `jml_pembayaran`, `tgl_pembayaran`) VALUES
(1, 4, 1, '2000000', '2017-12-25'),
(24, 4, 2, '700000', '2017-12-26'),
(28, 4, 2, '500000', '2017-12-26'),
(36, 4, 1, '600000', '2017-12-26'),
(40, 1, 4, '1000000', '2017-12-26'),
(41, 1, 4, '500000', '2017-12-26'),
(56, 1, 2, '450000', '2017-12-26'),
(57, 1, 3, '800000', '2017-12-26'),
(59, 4, 1, '500000', '2017-12-28'),
(62, 6, 2, '3152532', '2018-01-06'),
(64, 5, 3, '1500000', '2018-01-07'),
(65, 5, 1, '500000', '2018-01-09'),
(66, 5, 1, '500000', '2018-01-10'),
(67, 1, 1, '500000', '2018-01-12'),
(68, 6, 0, '400000', '2018-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskon`
--

CREATE TABLE IF NOT EXISTS `tb_diskon` (
  `id_diskon` smallint(6) NOT NULL,
  `kode_diskon` varchar(255) NOT NULL,
  `jml_diskon` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diskon`
--

INSERT INTO `tb_diskon` (`id_diskon`, `kode_diskon`, `jml_diskon`) VALUES
(1, 'daftarcepat', '250000'),
(2, 'pastilulus', '450000'),
(3, 'LULUS', '100000'),
(4, 'bonus', '350000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilihan_program`
--

CREATE TABLE IF NOT EXISTS `tb_pilihan_program` (
  `id_pilihan_program` tinyint(4) NOT NULL,
  `pilihan_program` varchar(50) NOT NULL,
  `keterangan_pilihan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilihan_program`
--

INSERT INTO `tb_pilihan_program` (`id_pilihan_program`, `pilihan_program`, `keterangan_pilihan`) VALUES
(1, 'REGULER', '-'),
(2, 'DOUBLE PROGRAM', '-'),
(3, 'INTENSIF SABTU-MINGGU', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program_bimbel`
--

CREATE TABLE IF NOT EXISTS `tb_program_bimbel` (
  `id_program_bimbel` smallint(6) NOT NULL,
  `program_bimbel` varchar(50) NOT NULL,
  `biaya_program` varchar(255) NOT NULL,
  `id_pilihan_program` tinyint(4) NOT NULL,
  `materi_ajar` varchar(100) NOT NULL,
  `lama_belajar` varchar(255) NOT NULL,
  `jumlah_pertemuan` varchar(255) NOT NULL,
  `hari_pertemuan` varchar(255) NOT NULL,
  `jam_pertemuan` varchar(255) NOT NULL,
  `keterangan_program` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_program_bimbel`
--

INSERT INTO `tb_program_bimbel` (`id_program_bimbel`, `program_bimbel`, `biaya_program`, `id_pilihan_program`, `materi_ajar`, `lama_belajar`, `jumlah_pertemuan`, `hari_pertemuan`, `jam_pertemuan`, `keterangan_program`) VALUES
(1, 'SMA/MA Kelas 10,11,12 IPA/IPS', '3500000', 1, 'TEMAh', 's.d. kenaikan kelas', '2-3 kali @90 menit', 'Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu', '16.00 - 17.30', '-'),
(2, 'SMP/MTs Kelas 7,8,9', '5800000', 2, 'MATERI AJAR', 's.d. lulus', '2-3', 'Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu', '17.30-18.00', 'KETERANGAN'),
(3, 'SD/MI Kelas 4,5,6', '3000000', 1, 'AJARR rrrr', 'lulus dddd', 'sasa', 'Senin,Selasa,Kamis,Jumat,Sabtu,Minggu', '18:00-19:30', 'MANTAPsa'),
(4, 'SMP/MTs Kelas 7,8,9', '3300000', 1, 'Materrii Ajar', 'Lama 3', '2 - 3', 'Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu', '', 'keterangannyaaaa'),
(5, 'SD/MI Kelas 4,5,6', '5500000', 2, '', '', '', 'Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu', '', ''),
(6, 'SMA/MA Kelas 10,11,12 IPA/IPS', '6200000', 2, '', '', '', '', '', ''),
(7, 'SMA/SMK/MA Kelas 10,11,12', '4100000', 1, 'TEMATIK', '90 Menit', '2', 'Sabtu,Minggu', '10:00 - 11:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis_bimbel` varchar(15) NOT NULL,
  `id_wali_siswa` smallint(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis_bimbel`, `id_wali_siswa`, `nama`, `foto`, `tmpt_lahir`, `tgl_lahir`, `asal_sekolah`, `alamat`, `telepon`, `catatan`) VALUES
(14, 'DAN180106054107', 24, 'DANI SATRIO', 'fotos', 'Bandung', '1996-05-07', 'SMAN 3 Malang', 'Sukun, Malang', '081234735232', 'Cepat Tanggap Pelajaran'),
(3, 'EKA180106122144', 23, 'EKA PUTRI MURI', 'fotos', 'Malang', '2002-02-05', 'SMPN 5 Malang', 'Sawojajar, Malang', '081212323223', 'dsd'),
(15, 'FAR180106054540', 24, 'FARAH RIFDA', 'fotos', 'Blitar', '2002-04-01', 'SMPN 7 Malang', 'Sukun, Malang', '089654454554', ''),
(16, 'HEN180108075212', 25, 'Hendra Sasmita', 'fotos', 'Malang', '1999-07-07', 'SMA LABORATORIUM Malang', 'Oro - Oro Dowo, Malang', '082121232334', 'Pintar & BErgaul'),
(4, 'HER180105124344', 21, 'Heru Sasmita', 'fotos', 'Malang', '1999-01-04', 'SMAN 3 Malang', 'Sawojajar, Malang', '081221222112', ''),
(17, 'IKA180116084214', 30, 'Ika Putri Ratnasari', 'fotos', 'Malang', '1999-06-21', 'SMAN 1 Malang', 'Sulfat, Malang', '089645566776', ''),
(13, 'MAH180105124344', 7, 'Mahrus Khomaini', '', 'Sungai Durian', '1996-05-03', 'SMA ''ISLAM'' Terakreditasi A Malang', 'Jln. S.Supriadi No.02 Kasin Malang', '089648399003', 'Oke'),
(12, 'YEN180105081820', 23, 'YENI DWI PUTRI', 'fotos', 'Malang', '1999-11-23', 'SMAN 1 Malang', 'Sawojajar, Malang', '081243455665', 'Pintar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tb_tahun_ajaran` (
  `id_tahun_ajaran` tinyint(4) NOT NULL,
  `tahun_ajaran` varchar(59) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
(1, '2017/2018'),
(2, '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentor`
--

CREATE TABLE IF NOT EXISTS `tb_tentor` (
  `id_tentor` smallint(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tentor`
--

INSERT INTO `tb_tentor` (`id_tentor`, `nama`, `status`, `pekerjaan`, `alamat`, `telepon`, `keterangan`) VALUES
(1, 'Drs. Sugeng Raharjo', 'Aktif', '', 'Malang', '089745993323', '-'),
(3, 'Suhardi, S.Pd., M.Pd.', 'Aktif', 'gfg', 'ghfg', '081232322771', 'vbb'),
(9, 'Heni Suliswati, S.Pd., M.Pd.', 'Aktif', '', '', '085832333223', ''),
(18, 'Dedi Suherman, S.Pd.', 'Aktif', 'Guru SMAN 3 Malang', 'Sawojajar, Malang', '089568455992', ''),
(19, 'Dra. Setyowati', 'Aktif', '', '', '089632338893', ''),
(20, 'Doni Prasetyo', 'Aktif', 'Mahasiswa Akhir', '', '081221222992', ''),
(21, 'Budi Hendrawan', 'Aktif', 'Mahasiswa S2', '', '081278339933', ''),
(22, 'Robiyah, S.Pd.', 'Tidak Aktif', '', '', '081289222002', ''),
(23, 'Deni Santoso, S.Pd., M.Pd.', 'Aktif', '', '', '081248499212', ''),
(24, 'Suroso, S.Pd.', 'Tidak Aktif', '', '', '089634243243', ''),
(25, 'Drs. Eko Suprianto', 'Aktif', '', '', '082279824112', ''),
(26, 'Dra. Dina Setyaningsih', 'Aktif', '', '', '082241421231', ''),
(27, 'Yeni Dwi Putri', 'Aktif', 'Mahasiswa S2', '', '083831213212', ''),
(28, 'Dwi Yuliani, S.Pd.', 'Tidak Aktif', '', '', '081241214214', ''),
(29, 'Putri Ratna Sari, S.Pd., M.Pd.', 'Aktif', 'Guru SMAN 3 Malang', 'Jln. Danau Maninjau, Sawojajar - Malang', '089645883339', ''),
(32, 'Aji Dwi Pambudi, S.Pd., M.Pd.', 'Aktif', 'Guru SMAN 1 Malang', 'Jln. Danau Samping, Sawojajar -  Malang', '081267899554', 'Bisa mengajar sabtu minggu'),
(33, 'Devi Murtyaningsih', 'Aktif', 'Guru SMAN 1 Malang', 'Jln. Danau Maninjau, Sawojajar - Malang', '081267666772', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_wali_siswa` (
  `id_wali_siswa` int(11) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `telepon_wali` varchar(12) NOT NULL,
  `keterangan_wali` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wali_siswa`
--

INSERT INTO `tb_wali_siswa` (`id_wali_siswa`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `telepon_wali`, `keterangan_wali`) VALUES
(7, 'Muhammad Makky', 'Karyawan Swasta', 'Kalimantan Selatan', '08964839213', 'Mampu Membayar'),
(10, 'Hermansyah', 'Guru', 'Batu', '', ''),
(21, 'Sugeng Warmadi', '', 'Sawojajar, Malang', '', ''),
(22, 'Sukirman', 'Satpam', 'Jln. Kanan Kiri, Malang', '008978685', 'ruwet'),
(23, 'Heniwati', 'GURU', 'Sawojajar, Malang', '081274888994', '-'),
(24, 'Yodi Supardi', 'PNS', 'Sukun, Malang', '08974544343', ''),
(25, 'Suciwati Rahma', 'PNS', 'Oro - Oro Dowo, Malang', '081232123213', ''),
(26, 'Sukirman', '', 'Kasin, Malang', '', ''),
(27, 'Suciwati', '', 'Sawojajar, Malang', '', ''),
(28, 'Eko Darmaji', '', 'Sawojajar, Malang', '', ''),
(29, 'Wati Yana', '', 'Sulfat, Malang', '', ''),
(30, 'Suliswati', 'PNS', 'Sulfat, Malang', '081289777334', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_biaya_daftar`
--
ALTER TABLE `tb_biaya_daftar`
  ADD PRIMARY KEY (`id_biaya_daftar`);

--
-- Indexes for table `tb_bimbel`
--
ALTER TABLE `tb_bimbel`
  ADD PRIMARY KEY (`id_bimbel`);

--
-- Indexes for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  ADD PRIMARY KEY (`id_detail_pembayaran`);

--
-- Indexes for table `tb_diskon`
--
ALTER TABLE `tb_diskon`
  ADD PRIMARY KEY (`id_diskon`),
  ADD UNIQUE KEY `nama_diskon` (`kode_diskon`);

--
-- Indexes for table `tb_pilihan_program`
--
ALTER TABLE `tb_pilihan_program`
  ADD PRIMARY KEY (`id_pilihan_program`);

--
-- Indexes for table `tb_program_bimbel`
--
ALTER TABLE `tb_program_bimbel`
  ADD PRIMARY KEY (`id_program_bimbel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis_bimbel`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `tb_tentor`
--
ALTER TABLE `tb_tentor`
  ADD PRIMARY KEY (`id_tentor`);

--
-- Indexes for table `tb_wali_siswa`
--
ALTER TABLE `tb_wali_siswa`
  ADD PRIMARY KEY (`id_wali_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_biaya_daftar`
--
ALTER TABLE `tb_biaya_daftar`
  MODIFY `id_biaya_daftar` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_bimbel`
--
ALTER TABLE `tb_bimbel`
  MODIFY `id_bimbel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  MODIFY `id_detail_pembayaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `tb_diskon`
--
ALTER TABLE `tb_diskon`
  MODIFY `id_diskon` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pilihan_program`
--
ALTER TABLE `tb_pilihan_program`
  MODIFY `id_pilihan_program` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_program_bimbel`
--
ALTER TABLE `tb_program_bimbel`
  MODIFY `id_program_bimbel` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id_tahun_ajaran` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_tentor`
--
ALTER TABLE `tb_tentor`
  MODIFY `id_tentor` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tb_wali_siswa`
--
ALTER TABLE `tb_wali_siswa`
  MODIFY `id_wali_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
