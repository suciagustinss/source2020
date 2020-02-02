-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 15. Januari 2020 jam 03:20
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbperdata_source2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perdata`
--

CREATE TABLE IF NOT EXISTS `tbl_perdata` (
  `id_perkara` int(5) NOT NULL AUTO_INCREMENT,
  `no_perkara` varchar(25) NOT NULL,
  `para_pihak` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_perkara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_perdata`
--

INSERT INTO `tbl_perdata` (`id_perkara`, `no_perkara`, `para_pihak`, `tgl_masuk`, `keterangan`) VALUES
(1, '121/PDT.G/2019/PN.KIS', 'Agung , Nurainun , Suci', '2019-12-11', 'Perdata Gugatan Tanah'),
(2, '120/PDT.G/2019/PN.KIS', 'Yana,Tika', '2019-12-18', 'Perdata Gugatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama_lengkap`, `email`, `level`, `keterangan`) VALUES
('source2', '25d55ad283aa400af464c76d713c07ad', 'Royal Source 2', 'source2@gmail.com', 1, 'Staf Perdata');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
