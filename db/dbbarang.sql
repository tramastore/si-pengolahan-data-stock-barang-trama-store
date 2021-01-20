-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2021 pada 11.01
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kebutuhanrumahtangga`
--

CREATE TABLE IF NOT EXISTS `tbl_kebutuhanrumahtangga` (
`id_barang` int(5) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `stock_barang` int(5) NOT NULL,
  `harga` bigint(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=701 ;

--
-- Dumping data untuk tabel `tbl_kebutuhanrumahtangga`
--

INSERT INTO `tbl_kebutuhanrumahtangga` (`id_barang`, `nama_barang`, `stock_barang`, `harga`) VALUES
(556, 'pengepel', 400, 20000),
(600, 'lidi', 500, 20000),
(700, 'Kipas angin', 200, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kosmetik`
--

CREATE TABLE IF NOT EXISTS `tbl_kosmetik` (
`id_kosmetik` int(20) NOT NULL,
  `nama_kosmetik` varchar(50) NOT NULL,
  `stock_kosmetik` int(20) NOT NULL,
  `harga` bigint(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data untuk tabel `tbl_kosmetik`
--

INSERT INTO `tbl_kosmetik` (`id_kosmetik`, `nama_kosmetik`, `stock_kosmetik`, `harga`) VALUES
(3, 'bulu mata', 8, 20000),
(6, 'lipstik', 8, 35000),
(8, 'Maskara', 9, 100000),
(145, 'liptin', 5, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perlengkapanatk`
--

CREATE TABLE IF NOT EXISTS `tbl_perlengkapanatk` (
`id_atk` int(5) NOT NULL,
  `nama_atk` varchar(50) NOT NULL,
  `stock_atk` int(20) NOT NULL,
  `harga` bigint(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=335 ;

--
-- Dumping data untuk tabel `tbl_perlengkapanatk`
--

INSERT INTO `tbl_perlengkapanatk` (`id_atk`, `nama_atk`, `stock_atk`, `harga`) VALUES
(3, 'tipek', 15, 5000),
(4, 'kertas', 13, 5000),
(89, 'print', 3, 1000000),
(334, 'penggaris', 60, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'mila@gmail.com', 'Trama Store', 1, 'Karyawan Trama Store'),
('faa', '827ccb0eea8a706c4c34a16891f84e7b', 'fitriaariesadhani@gmail.com', 'Trama Store', 2, 'karyawan Trama Store'),
('yanti', '827ccb0eea8a706c4c34a16891f84e7b', 'nurhidayanti87@gmail.com', 'Trama Store', 3, 'karyawan Trama Store');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kebutuhanrumahtangga`
--
ALTER TABLE `tbl_kebutuhanrumahtangga`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kosmetik`
--
ALTER TABLE `tbl_kosmetik`
 ADD PRIMARY KEY (`id_kosmetik`);

--
-- Indexes for table `tbl_perlengkapanatk`
--
ALTER TABLE `tbl_perlengkapanatk`
 ADD PRIMARY KEY (`id_atk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kebutuhanrumahtangga`
--
ALTER TABLE `tbl_kebutuhanrumahtangga`
MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=701;
--
-- AUTO_INCREMENT for table `tbl_kosmetik`
--
ALTER TABLE `tbl_kosmetik`
MODIFY `id_kosmetik` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `tbl_perlengkapanatk`
--
ALTER TABLE `tbl_perlengkapanatk`
MODIFY `id_atk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=335;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
