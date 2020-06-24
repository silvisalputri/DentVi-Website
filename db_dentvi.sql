-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 04:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dentvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `spesialisasi` varchar(128) NOT NULL,
  `bio` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `akses` varchar(100) NOT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `jk`, `spesialisasi`, `bio`, `no_telp`, `email`, `username`, `password`, `akses`, `gambar`) VALUES
(3, 'Ikhwan A Latif', 'Male', 'None At All', 'Be Yourself, ', '081275592024', 'asd@gmail.com', 'Ikhwan AL', '$2y$10$X1xk.brCLVC3Ur.9OA0DGu15N9s1qDWyYZmk3GCrFWWg0fA8xstEO', 'admin', '3.jpg'),
(4, 'Qweqwe', 'Male', 'qweqwe', 'qweqwewqewqewq', '1231231', 'qwe@gmail.com', 'asdasd', '$2y$10$v1CtA0Tavh3VqDRJ0OnmBOjGppEQIV.544T632uH/ojv9P49YyByu', '', '2.jpg'),
(5, 'Yyy', 'Male', 'lkase', '122312asfdsdf', '122212', 'email@gmail.com', 'user', '$2y$10$YcCIYUVKWI.DuaEWzqDHfeMH.YU1ThwxJSqkNWg.XKPh/96xXkaMS', '', NULL),
(6, 'Login', 'Male', 'login', 'login', '1223', 'login@gmail.com', 'login', '$2y$10$NX8ySf.jxg4oVfA./uHYTOdcsPTnjtlXvIqpYNZdEXZcNeZtc3cm6', '', NULL),
(7, 'Logout', 'Female', 'asd', 'asd', '123', 'logout@gmail.com', 'logout', '$2y$10$Kxtc3rOPwcBzilT9YHE0gOCdL8Kp7GxxtgVMDedHMBTWhhfqM3uXm', '', NULL),
(8, 'Www', 'Male', 'www', 'www', '111', 'www@gmail.com', 'www', '$2y$10$fwBaMi19N5r1g6PSFz5wJOcYVrW90Ax8u6IfE4zYHbjyy6Z8GLgAG', '', NULL),
(9, 'Fgh', 'Female', 'fgh', 'fgh', '1234', 'fgh@gmail.com', 'fgh', '$2y$10$KF1whEDZIUVr90m1IhCcrOdb6E.Gjq/sp6IeLQtmUGNwsnV4.vcFu', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'apa itu?', 'ntah'),
(2, 'asddd', 'weqwe');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `id_dokter`, `jam_mulai`, `jam_selesai`) VALUES
(23, 3, '00:12:00', '14:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `id_specialist` int(11) NOT NULL,
  `nama_specialist` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`id_specialist`, `nama_specialist`, `keterangan`, `harga`) VALUES
(2, 'Laser Densitry', 'I really Dont Know !!!!', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_testi` varchar(128) NOT NULL,
  `rating` float NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `nama_lengkap`, `jk`, `tanggal_lahir`, `umur`, `alamat`, `no_telp`, `gambar`) VALUES
(12, 'Sdf', 'sdd@gmail.com', '$2y$10$ujHidV7P/EdHU8Z6xdd.5OLebTqbjxU60Cl7sJNU90AjVkuqmc6JG', 'asdwer', 'Female', '2020-04-26', 22, 'sdasfw', '12231', NULL),
(13, 'Sdsad', 'qwe@gmail.com', '$2y$10$xspioSaugrya/kNHlNMzpOAdVohFYoYgGA1NTFKm0I/0aAxbK.mb2', 'asdasd', 'Female', '2020-05-10', 22, 'sdas', '123234345', NULL),
(14, 'Sad', 'weq@gami.com', '$2y$10$8mhWw/tKqahbMDhwlmnAmuDWSDKQQMRGDxz2ksRHoyKuTJlriPnqS', 'q12eqw', 'Female', '2020-05-10', 44, 'wqe23', 'q2e1', NULL),
(15, '2dwad', '2232sd@gmai.colm', '$2y$10$k4Wh53sGy9CN2eqiha8zlefyr5CZwER1Bj28cAoxXUhUcP9RkkbPy', 'd2dad32', 'Female', '2020-05-12', 33, 'qweasd', '23qwe', NULL),
(16, 'Sdasd', 'fag@bamil.com', '$2y$10$Pn/2X.UO7dAE/SHJ6xbdTeyp4ozauIz.Nd/T4UdiTpdiOoJF1tZzi', '2e12', 'Female', '2020-04-27', 21, '32wsae', '23w2qe', NULL),
(17, 'Dwda', 'admin@admin.com', '$2y$10$kcv5Bg4x2tB2b8h./BtCsOsnfosq5Ma.RWzRIdio.3t66LKzY.yMe', 'adada', 'Male', '2020-05-05', 23, 'dfssdf', '2wqeqq2', NULL),
(18, 'Busahdj', 'qweqwe@gmail.com', '$2y$10$IQ0P5O2jyP2oXHNMONmVsOPMsj0Xu/7z6hsh8p0vNM4ClbZWdzd3.', 'asdwdq', 'Male', '2020-05-18', 33, 'sadw', '123123', NULL),
(20, 'Ikhwan', 'ikhwan@gmail.com', '$2y$10$epW4FVP9dXKgpFCAP6KQsOlmUfiOrEaG.IsYI6sNty8EG7dgaiuDi', 'ikhwan', 'Male', '2020-05-04', 22, 'ASdasd', '1234', '3.jpg'),
(21, 'Gjhsdf', 'poasi@gmail.com', '$2y$10$TA6RcqmBnpVhVIaiJG0fOuzpdE3M.NkscAuJnl1J801qvQDlXV4MW', 'fffff', 'Female', '2020-04-27', 21, '1234 qwersa', '32134324', NULL),
(22, 'sdsd', 'asdasd@gmail.com', '111', 'rrrr', 'Female', '2020-05-18', 22, 'sadwd', '123213', NULL),
(23, 'hgj', 'sdfsdf@gmail.com', '2qwsd', '434213', 'Female', '2019-01-22', 51, 'asdwdasdwd', '12123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`id_specialist`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `specialist`
--
ALTER TABLE `specialist`
  MODIFY `id_specialist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD CONSTRAINT `jadwal_dokter_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
