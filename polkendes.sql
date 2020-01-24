-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2020 pada 13.07
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
-- Struktur dari tabel `datadx`
--

CREATE TABLE IF NOT EXISTS `datadx` (
`id_datadx` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datadx`
--

INSERT INTO `datadx` (`id_datadx`, `nama_penyakit`) VALUES
(1, 'ALERGI MAKANAN '),
(2, 'ANEMIA'),
(3, 'APENDISITIS'),
(4, 'ASMA BRONKIAL'),
(5, 'BELL''S PALSY'),
(6, 'BRONKITIS AKUT'),
(7, 'BUTA SENJA'),
(8, 'CARDIORESPIRATORY ARREST'),
(9, 'CUTANEUS LARVA MIGRAN'),
(10, 'DEMAM DENGUE'),
(11, 'DERMATITIS'),
(13, 'DIABETES'),
(14, 'DISENTRI'),
(15, 'DISLIPIDEMIA'),
(16, 'EPILEPSI'),
(17, 'FARINGITIS'),
(18, 'GAGAL JANTUNG'),
(19, 'GONORE'),
(20, 'HEPATITIS A'),
(21, 'HEPATITIS B'),
(22, 'HIPERTENSI'),
(23, 'INFLUENZA'),
(24, 'INSOMNIA'),
(25, 'KATARAK'),
(26, 'KEJANG DEMAM'),
(27, 'KERACUNAN MAKANAN'),
(28, 'KETUBAN PECAH DINI (KPD)'),
(29, 'MALARIA'),
(30, 'TETANUS'),
(12, 'TINEA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtpasien`
--

CREATE TABLE IF NOT EXISTS `dtpasien` (
  `nik` varchar(100) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `no_bpjs` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtpasien`
--

INSERT INTO `dtpasien` (`nik`, `nama_pasien`, `tgl_lahir`, `pekerjaan`, `nama_wali`, `alamat`, `no_kk`, `no_bpjs`, `jk`, `no_telp`) VALUES
('3507130406652', 'Sutijah', '1965-08-07', 'Petani / Perkebunan', 'Marni', 'Kepanjen', '3007130406650002', '63754988998120000', 'Perempuan', '087790995453'),
('3507130908672', 'Robby Almandani', '1967-08-09', 'Pegawai Negeri Sipil', 'Joko', 'Kepanjen', '3007130908670002', '6372021412900000', 'Perempuan', '087665080722'),
('350713220582', 'Fajeri Akhmad', '1988-05-24', 'Guru', 'Ilham', 'Kepanjen', '3007132205880002', '6372020905080000', 'Laki - Laki', '083345778941'),
('3507135766092', 'Putra Sanjaya', '1997-08-09', 'Pelajar', 'Bambang', 'Kepanjen', '3007135766090002', '6372022998340000', 'Laki - Laki', '085664768788'),
('3507136504982', 'Kayla Putri', '1998-05-27', 'Pelajar', 'Sumarni', 'Kepanjen', '3007136504980002', '63799373542120000', 'Perempuan', '087796955487'),
('3507136509792', 'Irfan Maulana', '1979-09-25', 'Pensiunan', 'Budi', 'Kepanjen', '3007136509790002', '6372021212120000', 'Laki - Laki', '087998230533'),
('3507136708772', 'Alfiya Gina', '1997-07-06', 'Pedagang', 'Kartolo', 'Kepanjen', '3007136708770002', '6372022502980000', 'Perempuan', '089965787559'),
('3507136804662', 'Aditya Firnanda', '1966-04-28', 'Petani / Perkebunan', 'Hernani', 'Kepanjen', '3012868049900002', '6372022501990000', 'Laki-Laki', '082234561187'),
('3507136804982', 'Aska Ilham', '1998-01-16', 'Notaris', 'Firman ', 'Banjar', '3007136804980002', '6372021601980000', 'Laki - Laki', '081178699872'),
('3507136807932', 'Angeline', '1999-09-01', 'Perawat', 'Muradi', 'Kepanjen', '3007136807930002', '6372021412900000', 'Perempuan', '087654323488'),
('3507138890772', 'Kartini', '1988-04-21', 'Pegawai Negeri Sipil', 'Marsinah', 'Kepanjen', '3007138890770002', '6372094334080000', 'Perempuan', '081266934277'),
('3507167544352', 'Fikri Aditya', '1999-09-08', 'Pelajar', 'Harsono', 'Kepanjen', '300716754435000', '6372089776980000', 'Laki - Laki', '081340934277'),
('3507188907692', 'Muhammad Izzul', '1998-07-06', 'Pelajar', 'Maemunah', 'Kepanjen', '3007188907690002', '6372076332000000', 'Laki - Laki', '085778334980');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id_login` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(15) NOT NULL,
  `foto_login` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nama_lengkap`, `username`, `password`, `hak_akses`, `foto_login`) VALUES
(1, 'Hilga Damayanti', 'hilga', 'hilga', 'admin', ''),
(2, 'Lifera Miftahul Jannah', 'lifera', 'lifera', 'bidan', 'foto.jpg'),
(3, 'M. Aditya ', 'aditya', 'aditya', 'bidan', '2.jpg'),
(4, 'M. Aynur Roviqoh\r\n', 'aynur', 'aynur', 'admin', ''),
(9, 'budi', 'bud', 'bud', 'bidan', 'D0QFbXVUUAEQqoD.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
`id_obat` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok`) VALUES
(1, 'DECADRYL DHB SIRUP 120 ML', 88),
(2, 'DECADRYL EKP SIRUP 120 ML', 8),
(3, 'PANKREOFLAT TABLET', 90),
(4, 'GASTRINAL 250 MG SIRUP 120 ML', 20),
(5, 'ANDANTOL JELLY 10 G', 19),
(6, 'BALPIRIK BALSEM EXT KUAT 20 G ', 27),
(7, 'ALLERIN 120 CC', 0),
(8, 'BECOMBION 110 ML', 3),
(9, 'BECOMBION 60 ML', 0),
(10, 'BETADINE VAG PLUS', 5),
(11, 'KOMIX', 11),
(12, 'DIAZEPAM', 3),
(13, 'PETIDIN', 0),
(14, 'AMOXCILLIN', 74),
(15, 'ANTIMO', 40),
(16, 'PARACETAMOL', 99),
(17, 'PARACETAMOL KIDS', 118),
(18, 'OBH COMBI PLUS', 39),
(19, 'PANADOL', 20),
(20, 'HUFAGRIP', 97),
(21, 'NEUROTROPIN', 15),
(22, 'POLYSILANE', 24),
(23, 'BIOGESIC', 10),
(24, 'BENADRYL', 10),
(25, 'DULCOLAX', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_keluar`
--

CREATE TABLE IF NOT EXISTS `obat_keluar` (
`id_obat_keluar` int(20) NOT NULL,
  `id_obat` varchar(10) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat_keluar`, `id_obat`, `jumlah`, `nik`, `tanggal`) VALUES
(1, '1', 1, '9090909909090', '2019-05-13'),
(2, '20', 1, '898989', '2019-05-13'),
(3, '11', 1, '9090909909090', '2019-05-13'),
(4, '24', 3, '3507136807932', '2019-05-13'),
(5, '1', 1, '3507136807932', '2019-05-13'),
(6, '1', 1, '3507130406650002', '2019-05-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
`id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(2, 'Belum / Tidak Bekerja'),
(3, 'Mengurus Rumah tangga'),
(4, 'Pelajar / Mahasiswa'),
(5, 'Pensiunan'),
(6, 'Pegawai Negeri Sipil'),
(7, 'Tentara Nasional Indonesia'),
(8, 'Kepolisian RI'),
(10, 'Petani / Pekebun'),
(11, 'Peternak'),
(12, 'Nelayan / Perikanan'),
(16, 'Karyawan Swasta'),
(24, 'Pembantu Rumah Tangga'),
(65, 'Dosen'),
(66, 'Guru'),
(67, 'Pilot'),
(73, 'Dokter'),
(74, 'Bidan'),
(75, 'Perawat'),
(85, 'Pedagang'),
(87, 'Kepala Desa'),
(90, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmpasien`
--

CREATE TABLE IF NOT EXISTS `rmpasien` (
`id_rmpasien` int(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `t_darah` varchar(6) NOT NULL,
  `b_badan` int(3) NOT NULL,
  `t_badan` int(3) NOT NULL,
  `anamnese` varchar(255) NOT NULL,
  `dx` varchar(100) NOT NULL,
  `tx` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmpasien`
--

INSERT INTO `rmpasien` (`id_rmpasien`, `nik`, `tanggal`, `t_darah`, `b_badan`, `t_badan`, `anamnese`, `dx`, `tx`) VALUES
(1, '9090909909090', '', '160/90', 60, 180, 'jdjhd', 'ALERGI MAKANAN', 'hjfhsfh'),
(2, '', '', '', 0, 0, '', '', ''),
(3, '3507130406650002', '2019-05-13', '11', 11, 11, '11 ', 'ANEMIA', '1 '),
(4, '898989', '2019-05-13', '11', 22, 44, 'mm ', 'ANEMIA', 'nn '),
(5, '9090909909090', '2019-05-13', '1', 1, 1, 'mm', 'EPILEPSI', '1'),
(6, '3507136807932', '', '160/90', 60, 180, 'Batuk Kering, Pusing, Demam', 'FARINGITIS', 'Memberi Obat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadx`
--
ALTER TABLE `datadx`
 ADD PRIMARY KEY (`id_datadx`), ADD UNIQUE KEY `nama_penyakit` (`nama_penyakit`);

--
-- Indexes for table `dtpasien`
--
ALTER TABLE `dtpasien`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
 ADD PRIMARY KEY (`id_obat_keluar`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
 ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `rmpasien`
--
ALTER TABLE `rmpasien`
 ADD PRIMARY KEY (`id_rmpasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadx`
--
ALTER TABLE `datadx`
MODIFY `id_datadx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
MODIFY `id_obat_keluar` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `rmpasien`
--
ALTER TABLE `rmpasien`
MODIFY `id_rmpasien` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
