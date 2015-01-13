-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jan 2015 pada 08.07
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `guru_nip` varchar(19) NOT NULL,
  `guru_nm` varchar(45) DEFAULT NULL,
  `guru_username` varchar(45) DEFAULT NULL,
  `guru_password` varchar(45) DEFAULT NULL,
  `guru_email` varchar(45) DEFAULT NULL,
  `guru_tmplahir` varchar(45) DEFAULT NULL,
  `guru_tgllahir` date DEFAULT NULL,
  `guru_tanggaljoin` date DEFAULT NULL,
  `guru_agama` varchar(45) DEFAULT NULL,
  `guru_alamat` text,
  `guru_jabatan` varchar(25) DEFAULT NULL,
  `guru_jeniskelamin` enum('L','P') DEFAULT NULL,
  `guru_photo` text,
  `user_role_user_role_kode` int(11) NOT NULL,
  `mapel_mapel_kode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`guru_nip`, `guru_nm`, `guru_username`, `guru_password`, `guru_email`, `guru_tmplahir`, `guru_tgllahir`, `guru_tanggaljoin`, `guru_agama`, `guru_alamat`, `guru_jabatan`, `guru_jeniskelamin`, `guru_photo`, `user_role_user_role_kode`, `mapel_mapel_kode`) VALUES
('19024756879782', 'Sigit Marteja', 'sigit', '223a0fa8f15933d622b3c7a13f186027', 'Sigitmarteja@gmail.com', 'Curup', '1970-12-21', '2014-12-21', 'islam', 'Air BAng', 'Wakil Kepala Sekolah bid.', 'L', '/upload/profile/cb6cc74b0dd285ea4d4464281a1c4d16.jpg', 2, 1),
('199283900999', 'Ronald', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@learningmanyaran.com', 'wonogiri', '1990-05-18', '2014-05-18', 'Islam', 'Wonogiri', 'Guru Mata Pelajaran', 'L', NULL, 1, 2),
('190345689038', 'Nopriyanto', 'Nopri', '89ccfac87d8d06db06bf3211cb2d69ed', 'Nopri@yahoo.com', 'Curup', '1960-01-01', '2015-01-02', 'islam', 'curp', 'Kepala Sekolah', 'L', '/upload/profile/9db9ca2cec09f14c751a158ceeafb643.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`kelas_kode` int(11) NOT NULL,
  `kelas_nm` varchar(45) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kelas_kode`, `kelas_nm`) VALUES
(1, 'Kelas IX A'),
(2, 'Kelas VIII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
`mapel_kode` int(11) NOT NULL,
  `mapel_nm` varchar(30) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`mapel_kode`, `mapel_nm`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`materi_kode` int(11) NOT NULL,
  `materi_nm` varchar(45) DEFAULT NULL,
  `materi_file` text,
  `materi_jenis` enum('tugas','materi') DEFAULT NULL,
  `materi_tanggalupload` date DEFAULT NULL,
  `mapel_mapel_kode` int(11) NOT NULL,
  `kelas_kelas_kode` int(11) NOT NULL,
  `guru_guru_nip` varchar(19) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`materi_kode`, `materi_nm`, `materi_file`, `materi_jenis`, `materi_tanggalupload`, `mapel_mapel_kode`, `kelas_kelas_kode`, `guru_guru_nip`) VALUES
(5, 'Petunjuk Proposal', '/upload/materi/Petunjuk-Pembuatan-Proposal-TA.pdf', 'materi', '2014-12-23', 1, 1, '19024756879782');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `siswa_nis` varchar(6) NOT NULL,
  `siswa_nm` varchar(45) DEFAULT NULL,
  `siswa_username` varchar(45) DEFAULT NULL,
  `siswa_password` varchar(45) DEFAULT NULL,
  `siswa_email` varchar(45) DEFAULT NULL,
  `siswa_tmplahir` varchar(45) DEFAULT NULL,
  `siswa_tgllahir` date DEFAULT NULL,
  `siswa_tanggaljoin` date DEFAULT NULL,
  `siswa_agama` enum('islam','protestan','katolik','hindu','buddha') DEFAULT NULL,
  `siswa_jeniskelamin` enum('L','P') DEFAULT NULL,
  `siswa_alamat` text,
  `siswa_about` text,
  `siswa_photo` text,
  `user_role_user_role_kode` int(11) NOT NULL,
  `kelas_kelas_kode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`siswa_nis`, `siswa_nm`, `siswa_username`, `siswa_password`, `siswa_email`, `siswa_tmplahir`, `siswa_tgllahir`, `siswa_tanggaljoin`, `siswa_agama`, `siswa_jeniskelamin`, `siswa_alamat`, `siswa_about`, `siswa_photo`, `user_role_user_role_kode`, `kelas_kelas_kode`) VALUES
('060221', 'Joko Purwanto', 'bungkoko', '8c4799117527c7b40de8bf2f65257936', 'bungkoko18@gmail.com', 'Curup', '2000-01-01', '2014-12-20', 'islam', 'L', 'Ambarukmo', 'Bersahaja, Tenang', '/upload/profile/92a75371af856ad4cad17ff63c1d1a68.jpeg', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_has_materi`
--

CREATE TABLE IF NOT EXISTS `siswa_has_materi` (
  `siswa_siswa_nis` varchar(6) NOT NULL,
  `materi_materi_kode` int(11) NOT NULL,
  `materi_kelas_kelas_kode` int(11) NOT NULL,
  `materi_mapel_mapel_kode` int(11) NOT NULL,
  `tugas_upload` text,
  `tugas_tanggalupload` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa_has_materi`
--

INSERT INTO `siswa_has_materi` (`siswa_siswa_nis`, `materi_materi_kode`, `materi_kelas_kelas_kode`, `materi_mapel_mapel_kode`, `tugas_upload`, `tugas_tanggalupload`) VALUES
('060221', 5, 1, 1, '/upload/tugas/Laporan_Desain_Web_Elearning-13.52_.0408-Joko_Purwanto_.pdf', '2015-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
`user_role_kode` int(11) NOT NULL,
  `user_role_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`user_role_kode`, `user_role_type`) VALUES
(1, 'admin'),
(2, 'guru'),
(3, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`guru_nip`), ADD KEY `fk_guru_user_role1_idx` (`user_role_user_role_kode`), ADD KEY `fk_guru_mapel1_idx` (`mapel_mapel_kode`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kelas_kode`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`mapel_kode`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
 ADD PRIMARY KEY (`materi_kode`,`kelas_kelas_kode`), ADD KEY `fk_materi_mapel1_idx` (`mapel_mapel_kode`), ADD KEY `fk_materi_kelas1_idx` (`kelas_kelas_kode`), ADD KEY `fk_materi_guru1_idx` (`guru_guru_nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`siswa_nis`), ADD KEY `fk_Siswa_user_role1_idx` (`user_role_user_role_kode`), ADD KEY `fk_siswa_kelas1_idx` (`kelas_kelas_kode`);

--
-- Indexes for table `siswa_has_materi`
--
ALTER TABLE `siswa_has_materi`
 ADD PRIMARY KEY (`siswa_siswa_nis`,`materi_materi_kode`,`materi_kelas_kelas_kode`), ADD KEY `fk_siswa_has_materi_materi1_idx` (`materi_materi_kode`,`materi_kelas_kelas_kode`), ADD KEY `fk_siswa_has_materi_siswa1_idx` (`siswa_siswa_nis`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
 ADD PRIMARY KEY (`user_role_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `kelas_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
MODIFY `mapel_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `materi_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
MODIFY `user_role_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
