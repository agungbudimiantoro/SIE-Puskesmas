-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 04:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kode_dokter` varchar(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `kode_pasien` varchar(5) NOT NULL,
  `hasil_diaknosa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `kode_pasien`, `hasil_diaknosa`) VALUES
('DO001', 'asd121', 'PA001', 'asd2');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `kode_kamar` varchar(5) NOT NULL,
  `nama_kamar` varchar(6) NOT NULL,
  `jenis_kamar` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kode_kamar`, `nama_kamar`, `jenis_kamar`) VALUES
('KA001', 'kamar1', 'icu 1');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `kode_kunjungan` varchar(5) NOT NULL,
  `kode_pasien` varchar(5) NOT NULL,
  `tgl_kunjungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`kode_kunjungan`, `kode_pasien`, `tgl_kunjungan`) VALUES
('KU001', 'PA001', '2022-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `jenis_obat` varchar(10) NOT NULL,
  `jumlah` varchar(3) NOT NULL,
  `tgl_masuk_obat` date NOT NULL,
  `tgl_keluar_obat` date NOT NULL,
  `kd_dokter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `jumlah`, `tgl_masuk_obat`, `tgl_keluar_obat`, `kd_dokter`) VALUES
('OB001', 'sda', 'asd', '23', '2022-06-08', '2022-06-27', 'DO001');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `kode_pasien` varchar(5) NOT NULL,
  `nama_pasien` varchar(25) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat_pasien` text NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kode_pasien`, `nama_pasien`, `umur`, `alamat_pasien`, `pekerjaan`, `keluhan`) VALUES
('PA001', 'asd', '213', 'asd', 't', 'sda');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE IF NOT EXISTS `rawat_inap` (
  `kode_rawat_inap` varchar(5) NOT NULL,
  `kode_pasien` varchar(5) NOT NULL,
  `kode_dokter` varchar(5) NOT NULL,
  `kode_kamar` varchar(5) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `tgl_masuk_rawat` date NOT NULL,
  `tgl_keluar_rawat` date NOT NULL,
  `biaya_rawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`kode_rawat_inap`, `kode_pasien`, `kode_dokter`, `kode_kamar`, `kode_obat`, `tgl_masuk_rawat`, `tgl_keluar_rawat`, `biaya_rawat`) VALUES
('RI001', 'PA001', 'DO001', 'KA001', 'OB001', '2022-06-14', '2022-06-14', 65765),
('RI002', 'PA001', 'DO001', 'KA001', 'OB001', '2022-06-08', '2022-06-09', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE IF NOT EXISTS `rawat_jalan` (
  `kode_rawat_jalan` varchar(5) NOT NULL,
  `kode_pasien` varchar(5) NOT NULL,
  `kode_kunjungan` varchar(5) NOT NULL,
  `kode_dokter` varchar(5) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `tgl_berobat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`kode_rawat_jalan`, `kode_pasien`, `kode_kunjungan`, `kode_dokter`, `kode_obat`, `tgl_berobat`) VALUES
('RJ001', 'PA001', 'KU001', 'DO001', 'OB001', '2022-01-01'),
('RJ002', 'PA001', 'KU001', 'DO001', 'OB001', '2022-02-01'),
('RJ003', 'PA003', 'KU003', 'DO003', 'OB003', '2022-03-01'),
('RJ004', 'PA004', 'KU004', 'DO004', 'OB004', '2022-04-01'),
('RJ005', 'PA005', 'KU005', 'DO005', 'OB005', '2022-05-01'),
('RJ006', 'PA006', 'KU006', 'DO006', 'OB006', '2022-06-01'),
('RJ007', 'PA001', 'KU001', 'DO001', 'OB001', '2022-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
('US001', 'admin', 'admin', 'admin'),
('US002', 'pimpinan', '123', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`kode_kamar`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`kode_pasien`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
 ADD PRIMARY KEY (`kode_rawat_inap`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
 ADD PRIMARY KEY (`kode_rawat_jalan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
