-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2014 pada 04.11
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

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
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`kelas_kode` int(11) NOT NULL,
  `kelas_nm` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kelas_kode`, `kelas_nm`) VALUES
(5, 'Kelas XIII-A'),
(6, 'Kelas XIII-B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
`mapel_kode` int(11) NOT NULL,
  `mapel_nm` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`materi_kode` int(11) NOT NULL,
  `materi_nm` varchar(45) DEFAULT NULL,
  `materi_file` varchar(45) DEFAULT NULL,
  `mapel_mapel_kode` int(11) NOT NULL,
  `kelas_kelas_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`member_kode` int(11) NOT NULL,
  `member_username` varchar(45) DEFAULT NULL,
  `member_password` varchar(45) DEFAULT NULL,
  `member_nm` varchar(45) DEFAULT NULL,
  `member_email` varchar(45) DEFAULT NULL,
  `member_tgllahir` date DEFAULT NULL,
  `member_tmplahir` varchar(30) DEFAULT NULL,
  `member_jeniskelamin` enum('L','P') DEFAULT NULL,
  `member_tanggaljoin` date DEFAULT NULL,
  `member_photo` text,
  `member_agama` enum('islam','protestan','katolik','hindu','buddha') DEFAULT NULL,
  `member_alamat` text,
  `user_role_user_role_kode` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_kode`, `member_username`, `member_password`, `member_nm`, `member_email`, `member_tgllahir`, `member_tmplahir`, `member_jeniskelamin`, `member_tanggaljoin`, `member_photo`, `member_agama`, `member_alamat`, `user_role_user_role_kode`) VALUES
(1, 'bungkoko', '8c4799117527c7b40de8bf2f65257936', 'joko purwanto', 'joko.purwanto18@gmail.com', '1989-01-09', 'curup', 'L', NULL, NULL, 'islam', 'curup', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_has_materi`
--

CREATE TABLE IF NOT EXISTS `member_has_materi` (
  `member_member_kode` int(11) NOT NULL,
  `member_user_role_user_role_kode` int(11) NOT NULL,
  `materi_materi_kode` int(11) NOT NULL,
  `materi_kelas_kelas_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
`user_role_kode` int(11) NOT NULL,
  `user_role_type` enum('admin','guru','siswa') DEFAULT NULL
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
 ADD PRIMARY KEY (`materi_kode`,`kelas_kelas_kode`), ADD KEY `fk_materi_mapel1_idx` (`mapel_mapel_kode`), ADD KEY `fk_materi_kelas1_idx` (`kelas_kelas_kode`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`member_kode`,`user_role_user_role_kode`), ADD KEY `fk_member_user_role_idx` (`user_role_user_role_kode`);

--
-- Indexes for table `member_has_materi`
--
ALTER TABLE `member_has_materi`
 ADD PRIMARY KEY (`member_member_kode`,`member_user_role_user_role_kode`,`materi_materi_kode`,`materi_kelas_kelas_kode`), ADD KEY `fk_member_has_materi_materi1_idx` (`materi_materi_kode`,`materi_kelas_kelas_kode`), ADD KEY `fk_member_has_materi_member1_idx` (`member_member_kode`,`member_user_role_user_role_kode`);

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
MODIFY `kelas_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
MODIFY `mapel_kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `materi_kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
MODIFY `user_role_kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
ADD CONSTRAINT `fk_materi_kelas1` FOREIGN KEY (`kelas_kelas_kode`) REFERENCES `kelas` (`kelas_kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_materi_mapel1` FOREIGN KEY (`mapel_mapel_kode`) REFERENCES `mapel` (`mapel_kode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
ADD CONSTRAINT `fk_member_user_role` FOREIGN KEY (`user_role_user_role_kode`) REFERENCES `user_role` (`user_role_kode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `member_has_materi`
--
ALTER TABLE `member_has_materi`
ADD CONSTRAINT `fk_member_has_materi_materi1` FOREIGN KEY (`materi_materi_kode`, `materi_kelas_kelas_kode`) REFERENCES `materi` (`materi_kode`, `kelas_kelas_kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_member_has_materi_member1` FOREIGN KEY (`member_member_kode`, `member_user_role_user_role_kode`) REFERENCES `member` (`member_kode`, `user_role_user_role_kode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
