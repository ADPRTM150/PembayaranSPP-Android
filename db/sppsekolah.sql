-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 18.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppsekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(8, 'admin', 'admin', 'Harya Asalah'),
(9, 'admin1', 'admin1', 'Agus Susanto'),
(10, 'user', 'user', 'Hari Aspriyono');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `buktii`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `buktii` (
`idadmin` int(5)
,`idsiswa` int(10)
,`username` varchar(20)
,`password` varchar(32)
,`namalengkap` varchar(40)
,`nis` varchar(10)
,`namasiswa` varchar(40)
,`kelas` varchar(10)
,`tahunajaran` varchar(10)
,`biaya` int(20)
,`idspp` int(100)
,`tglbayar` date
,`bktbayar` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `idguru` int(5) NOT NULL,
  `namaguru` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`idguru`, `namaguru`) VALUES
(1, 'BASUKI'),
(2, 'RAHMAT'),
(3, 'EMILIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(10) NOT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `namasiswa` varchar(40) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `tahunajaran` varchar(10) DEFAULT NULL,
  `biaya` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `nis`, `namasiswa`, `kelas`, `tahunajaran`, `biaya`) VALUES
(8, '2017100001', 'Eka Suryani S', 'A', '2017/2018', 250000),
(9, '2017100002', 'BAMBANG GENTOLET', 'A', '2017/2018', 250000),
(10, '2017100003', 'HANGGARA', 'A', '2017/2018', 250000),
(11, '2017100004', 'AHMAD', 'A', '2017/2018', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `idspp` int(100) NOT NULL,
  `idsiswa` int(10) DEFAULT NULL,
  `tglbayar` date DEFAULT NULL,
  `bktbayar` varchar(255) NOT NULL,
  `idadmin` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`idspp`, `idsiswa`, `tglbayar`, `bktbayar`, `idadmin`) VALUES
(1, 8, '2017-12-23', '', 8),
(2, 8, '2017-12-23', '', 8),
(3, 8, '2017-12-23', '', 8),
(4, 8, '2017-12-23', '', 8),
(5, 8, '2017-12-23', '', 8),
(6, 8, '2017-12-23', '', 8),
(7, 8, '2018-01-21', '', 8),
(8, 8, '2018-06-06', '', 8),
(9, 8, '2018-06-13', '', 8),
(10, 8, '1911-12-13', '', 8),
(11, 8, '2017-12-08', '', 8),
(12, 8, '2022-05-03', '', 8),
(13, 9, '2017-12-23', '', 9),
(14, 9, '2017-12-23', '', 9),
(15, 9, '2017-12-23', '', 9),
(16, 9, '2017-12-23', '', 9),
(17, 9, '2017-12-23', '', 9),
(18, 9, '2017-12-23', '', 9),
(19, 9, '1910-07-08', '', 9),
(20, 9, '2018-12-21', '', 9),
(21, 9, '2018-12-13', '', 9),
(22, 9, '1900-01-16', '', 9),
(23, 9, '2022-06-01', '', 9),
(24, 9, '2022-06-02', '', 9),
(25, 10, '2017-12-23', '', 8),
(26, 10, '2017-12-23', '', 8),
(27, 10, '2017-12-23', '', 8),
(28, 10, '2018-01-21', '', 8),
(29, 10, '2018-01-21', '', 8),
(30, 10, '2018-01-21', '', 8),
(31, 10, '2018-01-21', '', 8),
(32, 10, NULL, '', NULL),
(33, 10, NULL, '', NULL),
(34, 10, NULL, '', NULL),
(35, 10, NULL, '', NULL),
(36, 10, NULL, '', NULL),
(49, 8, '2022-06-06', 'Key Univers3@1000x-100.jpg', 8);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `user`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `user` (
`idadmin` int(5)
,`username` varchar(20)
,`password` varchar(32)
,`namalengkap` varchar(40)
,`idsiswa` int(10)
,`nis` varchar(10)
,`namasiswa` varchar(40)
,`kelas` varchar(10)
,`tahunajaran` varchar(10)
,`biaya` int(20)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `kelas` varchar(10) NOT NULL,
  `idguru` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`kelas`, `idguru`) VALUES
('A', 1),
('B', 2),
('C', 3);

-- --------------------------------------------------------

--
-- Struktur untuk view `buktii`
--
DROP TABLE IF EXISTS `buktii`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `buktii`  AS SELECT `user`.`idadmin` AS `idadmin`, `user`.`idsiswa` AS `idsiswa`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`namalengkap` AS `namalengkap`, `user`.`nis` AS `nis`, `user`.`namasiswa` AS `namasiswa`, `user`.`kelas` AS `kelas`, `user`.`tahunajaran` AS `tahunajaran`, `user`.`biaya` AS `biaya`, `spp`.`idspp` AS `idspp`, `spp`.`tglbayar` AS `tglbayar`, `spp`.`bktbayar` AS `bktbayar` FROM (`user` join `spp` on(`user`.`idadmin` = `spp`.`idadmin` and `user`.`idsiswa` = `spp`.`idsiswa`))  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `user`
--
DROP TABLE IF EXISTS `user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user`  AS SELECT `admin`.`idadmin` AS `idadmin`, `admin`.`username` AS `username`, `admin`.`password` AS `password`, `admin`.`namalengkap` AS `namalengkap`, `siswa`.`idsiswa` AS `idsiswa`, `siswa`.`nis` AS `nis`, `siswa`.`namasiswa` AS `namasiswa`, `siswa`.`kelas` AS `kelas`, `siswa`.`tahunajaran` AS `tahunajaran`, `siswa`.`biaya` AS `biaya` FROM (`admin` join `siswa` on(`admin`.`idadmin` = `siswa`.`idsiswa`))  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`),
  ADD KEY `fk_kelas` (`kelas`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`idspp`),
  ADD KEY `fk_admin` (`idadmin`),
  ADD KEY `fk_siswa` (`idsiswa`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`kelas`),
  ADD KEY `fk_guru` (`idguru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `idspp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`kelas`) REFERENCES `walikelas` (`kelas`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`idsiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `fk_guru` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
