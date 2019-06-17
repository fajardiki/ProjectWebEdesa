-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2019 pada 22.37
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cetaksurat` (IN `nik` VARCHAR(16))  BEGIN
SELECT * FROM permohonan LEFT JOIN warga ON permohonan.nik = warga.nik LEFT JOIN kartu_keluarga ON warga.nkk = kartu_keluarga.nkk LEFT JOIN kode_pos ON kartu_keluarga.kode_pos = kode_pos.kode_pos LEFT JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE warga.nik=nik;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cetaksuratof` (IN `nik` VARCHAR(16))  BEGIN
SELECT * FROM warga LEFT JOIN kartu_keluarga ON warga.nkk = kartu_keluarga.nkk LEFT JOIN kode_pos ON kartu_keluarga.kode_pos = kode_pos.kode_pos WHERE warga.nik=nik;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletepengguna` (IN `user` VARCHAR(16), IN `pass` VARCHAR(16))  BEGIN
DELETE FROM pengguna WHERE username=user AND password=pass;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletpengumuman` (IN `id` INT(3))  BEGIN
DELETE FROM pengumuman WHERE id_pengumuman = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletslideshow` (IN `id` INT(3))  BEGIN
DELETE FROM slideshow WHERE id_slideshow = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `permohonanmasuk` ()  BEGIN
SELECT * FROM permohonan INNER JOIN warga ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan = 'Diajukan' LIMIT 10;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `statuspengajuanadmin` ()  BEGIN
SELECT * FROM permohonan LEFT JOIN warga ON permohonan.nik = warga.nik LEFT JOIN surat ON permohonan.kode_surat = surat.kode_surat LIMIT 10;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `statuspengajuanwarga` (IN `user` VARCHAR(16))  BEGIN
SELECT * FROM permohonan LEFT JOIN warga ON permohonan.nik = warga.nik LEFT JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE warga.username = user LIMIT 10;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambahkk` ()  BEGIN
INSERT INTO kartu_keluarga VALUES ('$nkk','$kepala','$tempat_lahirkk','$tanggal_lahirkk','$pekerjaankk', '$alamat', '$rt', '$rw', '$pos');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambahpengumuman` (IN `judul` VARCHAR(50), IN `isi` TEXT, IN `gambar` VARCHAR(50))  BEGIN
INSERT INTO pengumuman (id_pengumuman,judul_pengumuman,isi_pengumuman,gambar_pengumuman,waktu_pengumuman) VALUES (judul,isi,gambar);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL,
  `avatar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `status`, `avatar`) VALUES
('admin01', 'admin01', 'Abdurrahman', 'admin', 'admin01.jpg'),
('admin02', 'admin02', 'Sulastri', 'admin', 'admin02.jpg');

--
-- Trigger `admin`
--
DELIMITER $$
CREATE TRIGGER `insertadmin` AFTER INSERT ON `admin` FOR EACH ROW BEGIN
DECLARE sts VARCHAR(7);
SET sts = 'admin';
INSERT INTO pengguna (username,password,status_pengguna) VALUES (NEW.username, NEW.password,sts);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_permohonan`
--

CREATE TABLE `arsip_permohonan` (
  `id_arsip` int(4) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `foto_kk` varchar(30) NOT NULL,
  `foto_ktp` varchar(30) NOT NULL,
  `keperluan` text NOT NULL,
  `kode_surat` varchar(4) NOT NULL,
  `username` varchar(12) NOT NULL,
  `status_arsip` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_permohonan`
--

INSERT INTO `arsip_permohonan` (`id_arsip`, `nik`, `tanggal_pengajuan`, `tanggal_selesai`, `foto_kk`, `foto_ktp`, `keperluan`, `kode_surat`, `username`, `status_arsip`) VALUES
(76, '111', '2019-01-08', '0000-00-00', 'img1.jpg', 'img2.jpg', 'aku ', '0001', 'admin', 'Selesai'),
(77, '12321', '2019-01-08', '0000-00-00', 'bg.jpg', 'bg.jpg', 'aaaaaa', '0003', 'admin', 'Selesai'),
(78, '12321', '2019-01-08', '0000-00-00', 'bg.jpg', 'bg.jpg', 'aaaaaa', '0003', 'admin', 'Selesai'),
(79, '111', '2019-01-08', '0000-00-00', 'img1.jpg', 'img2.jpg', 'aku ', '0001', 'admin', 'Selesai'),
(80, '1234567', '2019-01-09', '0000-00-00', 'kk1.jpg', 'ktp.jpg', 'Menikah', '0001', 'admin01', 'Selesai'),
(81, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(82, '12345678', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(83, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(84, '12345678', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(85, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(86, '12345678', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(87, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(88, '12345678', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(89, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(90, '12345678', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(91, '1234567', '2019-01-09', '0000-00-00', 'kk1.jpg', 'ktp.jpg', 'Menikah', '0001', 'admin01', 'Selesai'),
(92, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(93, '12345678', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(94, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(95, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(96, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin', 'Selesai'),
(97, '12345', '0000-00-00', '0000-00-00', '', '', '', '0001', 'admin', 'Selesai'),
(98, '12345', '0000-00-00', '0000-00-00', '', '', '', '0003', 'admin', 'Selesai'),
(99, '12345', '0000-00-00', '0000-00-00', '', '', '', '0002', 'admin', 'Selesai'),
(100, '1234567', '2019-01-09', '0000-00-00', 'kk1.jpg', 'ktp.jpg', 'Menikah', '0001', 'admin01', 'Selesai'),
(101, '1234567', '2019-01-09', '0000-00-00', 'kk1.jpg', 'ktp.jpg', 'Menikah', '0001', 'admin01', 'Selesai'),
(102, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(103, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(104, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(105, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(106, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin', 'Selesai'),
(107, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(108, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(109, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(110, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(111, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(112, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(113, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(114, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(115, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(116, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(117, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(118, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(119, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(120, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(121, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(122, '12345678', '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'aaaaaaaaaa', '0003', 'admin01', 'Selesai'),
(123, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(124, '123456', '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pindah rumah', '0003', 'admin01', 'Selesai'),
(125, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(126, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(127, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(128, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(129, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(130, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(131, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(132, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(133, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(134, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(135, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(136, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(137, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(138, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(139, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(140, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(141, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(142, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(143, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(144, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(145, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(146, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(147, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(148, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(149, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(150, '12345', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(151, '1234', '0000-00-00', '0000-00-00', 'ktp.JPG', 'ktp.JPG', 'nikah', '0001', 'admin01', 'Selesai'),
(152, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(153, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(154, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(155, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(156, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(157, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0002', 'admin01', 'Selesai'),
(158, '12345', '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'nnnnnnnn nnnn n', '0005', 'admin01', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `databackup`
--

CREATE TABLE `databackup` (
  `idbackup` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `penyimpanan` varchar(50) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `databackup`
--

INSERT INTO `databackup` (`idbackup`, `nama`, `penyimpanan`, `waktu`) VALUES
(1, 'northh', 'filebackup', '2019-01-06'),
(2, '', 'filebackup', '2019-01-06'),
(3, 'xxx', 'filebackup', '2019-01-06'),
(4, 'QQ', 'filebackup', '2019-01-08'),
(5, 'desa', 'filebackup', '2019-01-08'),
(6, 'iiidesa', 'filebackup', '2019-01-08'),
(7, 'iiidesa', 'filebackup', '2019-01-08'),
(8, 'iiidesa', 'filebackup', '2019-01-08'),
(9, 'desa', 'filebackup', '2019-01-08'),
(10, 'database_desa', 'filebackup', '2019-01-09'),
(11, 'coba', '../filebackup', '2019-06-17'),
(12, 'coba2', 'filebackup', '2019-06-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datarestore`
--

CREATE TABLE `datarestore` (
  `idrestore` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `penyimpanan` varchar(50) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datarestore`
--

INSERT INTO `datarestore` (`idrestore`, `nama`, `penyimpanan`, `waktu`) VALUES
(12, 'desa (1).sql', 'C:xampp	mpphp62A7.tmp', '2019-01-06'),
(13, '', '', '2019-01-06'),
(14, 'northh.sql', 'C:xampp	mpphp4DB4.tmp', '2019-01-06'),
(15, 'ahp.sql', 'C:xampp	mpphp1EC3.tmp', '2019-01-07'),
(16, 'ahp.sql', 'C:xampp	mpphp8B9D.tmp', '2019-01-07'),
(17, 'ahp.sql', 'C:xampp	mpphpDFC4.tmp', '2019-01-07'),
(18, 'ahp.sql', 'C:xampp	mpphpBDF1.tmp', '2019-01-07'),
(19, '', '', '2019-01-07'),
(20, 'ahp.sql', 'C:xampp	mpphp6057.tmp', '2019-01-07'),
(21, 'ahp.sql', 'C:xampp	mpphp4064.tmp', '2019-01-07'),
(22, 'ahp.sql', 'C:xampp	mpphp66F3.tmp', '2019-01-07'),
(23, 'ahp.sql', 'C:xampp	mpphp51B9.tmp', '2019-01-07'),
(24, 'QQ.sql', 'C:xampp	mpphp6E56.tmp', '2019-01-08'),
(25, 'desa (1).sql', 'C:xampp	mpphpF4EF.tmp', '2019-01-08'),
(26, 'desa (1).sql', 'C:xampp	mpphp82D8.tmp', '2019-01-08'),
(27, 'desa.sql', 'C:xampp	mpphpFFC1.tmp', '2019-01-08'),
(28, 'northh.sql', 'C:xampp	mpphpD73.tmp', '2019-01-08'),
(29, 'QQ.sql', 'C:xampp	mpphp72F5.tmp', '2019-01-08'),
(30, 'QQ.sql', 'C:xampp	mpphpA56B.tmp', '2019-01-08'),
(31, 'iiidesa.sql', 'C:xampp	mpphpAAA7.tmp', '2019-01-08'),
(32, 'iiidesa.sql', 'C:xampp	mpphp5FDE.tmp', '2019-01-08'),
(33, 'iiidesa.sql', 'C:xampp	mpphp761D.tmp', '2019-01-08'),
(34, 'QQ.sql', 'C:xampp	mpphpA6DE.tmp', '2019-01-08'),
(35, '', 'filebackup', '2019-01-08'),
(36, 'iiidesa.sql', 'C:xampp	mpphp3AFE.tmp', '2019-01-08'),
(37, 'desa.sql', 'C:xampp	mpphpEC94.tmp', '2019-01-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dokumentasi` int(3) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `waktu` date NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dokumentasi`, `foto`, `waktu`, `jenis`) VALUES
(8, 'hut desa 1.jpg', '0000-00-00', 'hut desa'),
(9, 'hut desa 2.jpeg', '0000-00-00', 'hut desa'),
(10, 'hut desa 3.jpg', '0000-00-00', 'hut desa'),
(11, 'rapat 1.jpg', '0000-00-00', 'rapat bulanan'),
(12, 'rapat 2.JPG', '0000-00-00', 'rapat bulanan'),
(14, 'rapat 3.JPG', '0000-00-00', 'rapat bulanan'),
(15, 'lomba 1.jpg', '0000-00-00', 'lomba agustusan'),
(16, 'lomba 2.jpeg', '0000-00-00', 'lomba agustusan'),
(17, 'lomba 3.jpg', '0000-00-00', 'lomba agustusan'),
(18, 'posyandu 1.jpg', '0000-00-00', 'posyandu'),
(19, 'posyandu 2.jpeg', '0000-00-00', 'posyandu'),
(20, 'posyandu 3.jpg', '0000-00-00', 'posyandu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `nkk` varchar(16) NOT NULL,
  `kepala_keluarga` varchar(30) NOT NULL,
  `tempat_lahirkk` varchar(30) NOT NULL,
  `tanggal_lahirkk` date NOT NULL,
  `pekerjaankk` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `kode_pos` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`nkk`, `kepala_keluarga`, `tempat_lahirkk`, `tanggal_lahirkk`, `pekerjaankk`, `alamat`, `rt`, `rw`, `kode_pos`) VALUES
('111', 'merry', 'mmmm', '0000-00-00', 'mfgf', 'mmmm', 'mmm', 'mmm', 'mmm'),
('1234567890', 'aa', 'aaa', '2019-01-04', 'cdcd', 'cdcd', 'cdcd', 'cdcd', '68354'),
('1357', 'aaa', 'aaa', '1999-12-01', 'aaa', 'aaa', '001', '001', '68353'),
('3512040511052715', 'Subandi', '', '0000-00-00', '', 'Kp Trebungan Barat', '001', '001', '68353'),
('3512040511052717', 'Mahat', '', '0000-00-00', '', 'Kp Trebungan Barat', '003', '002', '68353'),
('3512040511052720', 'Karsono', '', '0000-00-00', '', 'Kp Trebungan Barat', '003', '006', '68353'),
('3512040511052721', 'Kartolo', '', '0000-00-00', '', 'Kp Trebungan barat', '003', '003', '68353'),
('3512040511052722', 'Handoko', '', '0000-00-00', '', 'Kp Trebungan barat', '001', '003', '68353'),
('3512040511052723', 'Abd Muis', '', '0000-00-00', '', 'Kp Trebungan barat', '002', '003', '68353'),
('8989', 'ss', 'sss', '2019-11-06', 'aaaaaaaaa', 'aaaaaa', '09', '09', '68353'),
('999', 'aa', 'siy', '2019-01-03', 'aa', 'aa', 'aa', 'aa', '68356');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_pos`
--

CREATE TABLE `kode_pos` (
  `kode_pos` varchar(6) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_pos`
--

INSERT INTO `kode_pos` (`kode_pos`, `desa`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
('68353', 'Trebungan', 'Mlandingan', 'Situbondo', 'Jawa Timur'),
('68354', 'Buduan', 'Suboh', 'Situbondo', 'Jawa Timur'),
('68356', 'Demung', 'Besuki', 'Situbondo', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `status_pengguna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `status_pengguna`) VALUES
(10, '666', '999', 'warga'),
(12, 'admin01', 'admin01', 'admin'),
(13, 'admin02', 'admin02', 'admin'),
(15, '11223344', '123456789', 'warga'),
(16, '123456', '123456789', 'warga'),
(17, '1234567', '123456789', 'warga'),
(18, '12345678', '123456789', 'warga'),
(19, 'Fajar', 'fajar123', 'warga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(3) NOT NULL,
  `judul_pengumuman` varchar(50) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `gambar_pengumuman` varchar(50) NOT NULL,
  `waktu_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `gambar_pengumuman`, `waktu_pengumuman`) VALUES
(15, 'lomba agustusan', 'dalam rangka memperingati hut ri ke 756 ayo rame-rame ikuti dan saksikan lomba agustusan di halaman rumah bapak rw', 'lomba 1.jpg', '2019-01-09'),
(16, 'POSYANDU', 'akan diadakan posyandu di rumah bapak rt siang ini jam 13.00', 'posyandu 3.jpg', '2019-01-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan`
--

CREATE TABLE `permohonan` (
  `nik` varchar(16) NOT NULL,
  `no_permohonan` int(10) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `foto_kk` varchar(30) NOT NULL,
  `foto_ktp` varchar(30) NOT NULL,
  `keperluan` text NOT NULL,
  `kode_surat` varchar(4) NOT NULL,
  `username` varchar(12) NOT NULL,
  `status_pengajuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonan`
--

INSERT INTO `permohonan` (`nik`, `no_permohonan`, `tanggal_pengajuan`, `tanggal_selesai`, `foto_kk`, `foto_ktp`, `keperluan`, `kode_surat`, `username`, `status_pengajuan`) VALUES
('1234567', 1, '2019-01-09', '0000-00-00', 'kk1.jpg', 'ktp.jpg', 'Melamar Pekerjaan', '0001', 'admin01', 'Diajukan'),
('123456', 2, '2000-01-07', '0000-00-00', '20170607141010_00001.jpg', 'ktp.JPG', 'Pendaftaran Beasiswa', '0002', 'admin01', 'Diajukan'),
('1234', 3, '0000-00-00', '0000-00-00', '20170323001055_00007.jpg', '20170323001055_00008.jpg', 'Perubahan KTP', '0003', '1234', 'Diproses'),
('12345678', 4, '2019-01-08', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'Membangun Usaha Menengah', '0004', 'admin01', 'Ditolak'),
('12345', 5, '2019-01-09', '0000-00-00', 'hut lansia 02-722261.JPG', 'bagiair2.jpg', 'Kehilangan KK', '0005', 'admin01', 'Selesai');

--
-- Trigger `permohonan`
--
DELIMITER $$
CREATE TRIGGER `pengajuanselesai` AFTER UPDATE ON `permohonan` FOR EACH ROW BEGIN
IF NEW.status_pengajuan = 'Selesai' THEN
INSERT INTO arsip_permohonan (nik,tanggal_pengajuan,foto_kk,foto_ktp,keperluan,kode_surat,username,status_arsip) VALUES (OLD.nik,OLD.tanggal_pengajuan,OLD.foto_kk,OLD.foto_ktp,OLD.keperluan,OLD.kode_surat,OLD.username,NEW.status_pengajuan);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE `slideshow` (
  `id_slideshow` int(11) NOT NULL,
  `nama_slideshow` varchar(30) NOT NULL,
  `keterangan_slideshow` text NOT NULL,
  `gambar_slideshow` varchar(50) NOT NULL,
  `waktu_slideshow` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slideshow`
--

INSERT INTO `slideshow` (`id_slideshow`, `nama_slideshow`, `keterangan_slideshow`, `gambar_slideshow`, `waktu_slideshow`) VALUES
(6, 'posyandu', 'posyandu 1 januari 2019', 'posyandu 1.jpg', '2019-01-09'),
(7, 'lomba agustusan', 'hut ri ke 765', 'lomba 2.jpeg', '2019-01-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `kode_surat` varchar(4) NOT NULL,
  `nama_surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`kode_surat`, `nama_surat`) VALUES
('0001', 'Surat Kelakuan Baik'),
('0002', 'Surat Keterangan Tidak Mampu'),
('0003', 'Surat Keterangan Domisili'),
('0004', 'Surat Keterangan Usaha'),
('0005', 'Surat Keterangan Kehilangan KK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `nkk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(4) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `perkawinan` varchar(30) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` varchar(5) NOT NULL,
  `avatar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`nkk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `pendidikan`, `perkawinan`, `agama`, `pekerjaan`, `username`, `password`, `status`, `avatar`) VALUES
('123456789', '1234', 'Fajar Sidiqi Putu Saed', 'SItubondo', '1998-06-30', 21, 'Laku-Laki', 'D3', 'Belum Menikah', 'Islam', 'Mahasiswa', '1234', '123456789', 'warga', 'user.jpg'),
('123456789', '12345', 'Ahmad Faqih Hamdani', 'Situbondo', '1999-01-01', 20, 'Laki-Laki', 'D3', 'Belum Kawin', 'Islam', 'Mahasiswa', '11223344', '123456789', 'warga', 'user.jpg'),
('123456789', '123456', 'M. Robit Fajrul Kirom', 'Kencong', '1999-02-09', 20, 'Laki-Laki', 'D3', 'Belum Kawin', 'Islam', 'Mahasiswa', '123456', '123456789', 'warga', 'user.jpg'),
('123456789', '1234567', 'Risma Dwi Utami', 'Lumajang', '1998-06-30', 20, 'Perempuan', 'D3', 'Belum Kawin', 'Islam', 'Mahasiswa', '1234567', '123456789', 'warga', 'user2.png'),
('123456789', '12345678', 'Sita Maryam Qodzarin', 'Probolinggo', '2000-01-28', 19, 'Perempuan', 'D3', 'Belum Kawin', 'Islam', 'Mahasiswa', '12345678', '123456789', 'warga', 'user.jpg');

--
-- Trigger `warga`
--
DELIMITER $$
CREATE TRIGGER `insertpengguna` AFTER INSERT ON `warga` FOR EACH ROW BEGIN
DECLARE sts VARCHAR(7);
SET sts = 'warga';
INSERT INTO pengguna (username,password,status_pengguna) VALUES (NEW.username, NEW.password,sts);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `arsip_permohonan`
--
ALTER TABLE `arsip_permohonan`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indeks untuk tabel `databackup`
--
ALTER TABLE `databackup`
  ADD PRIMARY KEY (`idbackup`);

--
-- Indeks untuk tabel `datarestore`
--
ALTER TABLE `datarestore`
  ADD PRIMARY KEY (`idrestore`);

--
-- Indeks untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`nkk`),
  ADD KEY `kode_pos` (`kode_pos`);

--
-- Indeks untuk tabel `kode_pos`
--
ALTER TABLE `kode_pos`
  ADD PRIMARY KEY (`kode_pos`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`no_permohonan`),
  ADD KEY `INDEX4` (`kode_surat`),
  ADD KEY `nik1` (`nik`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id_slideshow`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`kode_surat`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `kk` (`nkk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip_permohonan`
--
ALTER TABLE `arsip_permohonan`
  MODIFY `id_arsip` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT untuk tabel `databackup`
--
ALTER TABLE `databackup`
  MODIFY `idbackup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `datarestore`
--
ALTER TABLE `datarestore`
  MODIFY `idrestore` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dokumentasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `no_permohonan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id_slideshow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
