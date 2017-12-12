-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 04:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolektor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nama_` varchar(20) NOT NULL,
  `email_` varchar(20) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `nama_`, `email_`, `subjek`, `pesan`) VALUES
(2, '', '', '', ''),
(4, 'ro', 'ro@yahoo.com', 'keluhan', 'bagaimana ini p'),
(5, 'adip', 'asip@fmfmf.co', 'sadsa', 'sadfsafsafs mau daftar dibg'),
(6, 'erik', 'erik@gege.col', 'ph', 'ihh mau daftar');

-- --------------------------------------------------------

--
-- Table structure for table `upload_barang`
--

CREATE TABLE `upload_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tgl_barang` date NOT NULL,
  `harga_brg` int(100) NOT NULL,
  `deskripsi_brg` varchar(100) NOT NULL,
  `file_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_barang`
--

INSERT INTO `upload_barang` (`id_barang`, `nama_barang`, `tgl_barang`, `harga_brg`, `deskripsi_brg`, `file_img`) VALUES
(4, 'tungku langka', '1980-12-11', 340000, 'bagus mulus', 'CHI.png'),
(5, 'tungku langka', '1980-12-11', 340000, 'bagus mulus', 'CHI.png'),
(6, 'f1 langka diecast', '1999-12-12', 77888888, 'bagus', 'fi-edit.jpg'),
(7, 'asdas', '2017-12-13', 123213, 'weqwe', 'Capture.JPG'),
(8, 'kai langka', '2017-12-01', 90000, 'bagus', 'jadwal-kereta-api_20170316_162234.jpg'),
(9, 'toyota', '1955-12-09', 90000000, 'bagus mulus', 'lamborghini estoque.jpg'),
(10, 'kond', '1780-09-29', 900000000, 'bagus mulus', 'AC2_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlp` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `tanggal_lahir`, `alamat`, `tlp`, `username`, `email`, `password`) VALUES
(1, 'asep', '0000-00-00', '0', 0, '', 'asep@gmail.com', 'admin'),
(2, 'asepa', '0000-00-00', '0', 0, '', 'asepa@gmail.com', '123qwe'),
(3, 'asepaa', '0000-00-00', '0', 0, '', 'asepaa@yahoo.com', '1234'),
(4, 'Abraham dwi', '0000-00-00', '0', 0, '', 'abraham@gmail.com', '1234qw'),
(5, 'Abraham dwi', '0000-00-00', '0', 0, '', 'abraham@gmail.com', '1234'),
(6, 'Abraham dwi', '0000-00-00', '0', 0, '', 'abraham@gmail.com', '1234'),
(7, 'adi', '0000-00-00', '0', 0, '', 'adi@gmail.com', '123'),
(8, 'Abraham dwi', '0000-00-00', '0', 0, '', 'abraham@gmail.com', '1234'),
(9, 'Abraham dwi', '0000-00-00', '0', 0, '', 'abraham@gmail.com', '1234'),
(10, 'erik', '0000-00-00', '0', 0, '', 'erik@yahoo.co', '1234'),
(11, 'erik tohir', '0000-00-00', '0', 0, '', 'erik10@yahoo.com', '1234'),
(12, 'wayys', '0000-00-00', '0', 0, '', 'wayss@gmail.com', '1234'),
(13, 'arbi', '0000-00-00', '0', 0, '', 'arbi@gmail.com', '1234qw'),
(14, 'hjk', '0000-00-00', '0', 0, '', 'hjk@gmail.com', '1234'),
(15, 'abraham qwe', '0000-00-00', '0', 0, '', 'abrahaaaa@gmail.com', '12345'),
(16, 'Bramaja', '1996-05-29', '0', 0, 'Abraham Kurniawan', 'Abrahamdwi@gmail.com', '1234qwer'),
(17, 'Kurnia mega H', '1996-05-29', '0', 0, 'mega_09', 'mega@yahoo.com', '1234qwer'),
(18, 'abraham d d', '1996-05-29', 'Jalan jakarta bandung', 2147483647, 'Bramsookk', 'abrahamdwi@gmail.com', 'qwer12'),
(19, 'adip be', '1990-02-28', 'bandug', 2147483647, 'adip', 'adip@Gm.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_barang`
--
ALTER TABLE `upload_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `upload_barang`
--
ALTER TABLE `upload_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
