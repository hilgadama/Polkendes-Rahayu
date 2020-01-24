-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2019 pada 07.48
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polkendes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
`id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(2, 'Belum / Tidak Bekerja'),
(3, 'Mengurus Rumah Tangga'),
(4, 'Pelajar / Mahasiswa'),
(5, 'Pensiunan'),
(6, 'Pegawai Negeri Sipil'),
(7, 'Tentara Nasional Indonesia'),
(8, 'Kepolisian RI'),
(9, 'Perdagangan'),
(10, 'Petani / Pekebun'),
(11, 'Peternak'),
(12, 'Nelayan / Perikanan'),
(13, 'Industri'),
(14, 'Konstruksi'),
(15, 'Transportasi'),
(16, 'Karyawan Swasta'),
(17, 'Karyawan BUMN'),
(18, 'Karyawan Pabrik'),
(19, 'Karyawan Honorer'),
(20, 'Buruh Harian Lepas'),
(21, 'Buruh Tani / Perkebunan'),
(22, 'Buruh Nelayan / Perikanan'),
(23, 'Buruh Peternakan'),
(24, 'Pembantu Rumah Tangga'),
(25, 'Tukang Cukur'),
(26, 'Tukang Listrik'),
(27, 'Tukang Batu'),
(28, 'Tukang Kayu'),
(29, 'Tukang Sol Sepatu'),
(30, 'Tukang Las / Pandai Besi'),
(31, 'Tukang Jahit'),
(32, 'Penata Rambut'),
(33, 'Penata Rias'),
(34, 'Penata Busana'),
(35, 'Mekanik'),
(36, 'Tukang Gigi'),
(37, 'Seniman'),
(38, 'Tabib'),
(39, 'Paraji'),
(40, 'Perancang Busana'),
(41, 'Penterjemah'),
(42, 'Imam Masjid'),
(43, 'Pendeta'),
(44, 'Pastur'),
(45, 'Wartawan'),
(46, 'Ustadz / Mubaligh'),
(47, 'Juru Masak'),
(48, 'Promotor Acara'),
(49, 'Anggota DPR-RI'),
(50, 'Anggota DPD'),
(51, 'Anggota BPK'),
(52, 'Presiden'),
(53, 'Wakil Presiden'),
(54, 'Anggota Mahkamah Konstitusi'),
(55, 'Anggota Kabinet / Kementerian'),
(56, 'Duta Besar'),
(57, 'Gubernur'),
(58, 'Wakil Gubernur'),
(59, 'Bupati'),
(60, 'Wakil Bupati'),
(61, 'Walikota'),
(62, 'Wakil Walikota'),
(63, 'Anggota DPRD Propinsi'),
(64, 'Anggota DPRD Kabupaten / Kota'),
(65, 'Dosen'),
(66, 'Guru'),
(67, 'Pilot'),
(68, 'Pengacara'),
(69, 'Notaris'),
(70, 'Arsitek'),
(71, 'Akuntan'),
(72, 'Konsultan'),
(73, 'Dokter'),
(74, 'Bidan'),
(75, 'Perawat'),
(76, 'Apoteker'),
(77, 'Psikiater / Psikolog'),
(78, 'Penyiar Televisi'),
(79, 'Penyiar Radio'),
(80, 'Pelaut'),
(81, 'Peneliti'),
(82, 'Sopir'),
(83, 'Pialang'),
(84, 'Paranormal'),
(85, 'Pedagang'),
(86, 'Perangkat Desa'),
(87, 'Kepala Desa'),
(88, 'Biarawati'),
(89, 'Wiraswasta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
 ADD PRIMARY KEY (`id_pekerjaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
