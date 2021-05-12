-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 12:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_urms`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `email`) VALUES
('21443454543', 'kristia', 'kristia', '$2y$10$fCXJlT9jTJiHcC1HNJBqNuMOs', '087928473822', ''),
('25432156121', 'dio', 'dio', '27b205035c328b16d8c8329c4b41e87e', '0841316512313', 'dio@gmail.com'),
('2801', 'dummy', 'dummy', '275876e34cf609db118f3d84b799a790', '0854654156156', 'phantasma405@gmail.com'),
('28055', 'isa rohmadan', 'isa', '165a1761634db1e9bd304ea6f3ffcf2b', '0895378570007', 'isagaul1z2@gmail.com'),
('29049', 'ade', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', '2039842394329', 'ade123@gmail.com'),
('5621656123651', 'qqqqq', 'qqq', 'b2ca678b4c936f905fb82f2733f5297f', '2512126515156', 'qqq@qq.com'),
('684123198451231', 'dhizone', 'dhi', '3bfb36834fe84c43fcfdbebc29b02c4f', '0881929111', 'adhizone48@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `nik` char(16) DEFAULT NULL,
  `isi_laporan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('0','proses','selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(1, '2021-04-15', '21443454543', '65sfd51dfas1fsd321asfd53asfd123d1sadf', NULL, 'selesai'),
(2, '2021-04-15', '21443454543', 'dsafasfd', NULL, 'selesai'),
(15, '0000-00-00', '28055', 'saya orang jeelek', '60939cafc718e.png', 'proses'),
(16, '0000-00-00', '2801', 'test1', '6093ca693f60b.png', 'selesai'),
(17, '0000-00-00', '2801', 'test2', '6093caa663c46.png', 'selesai'),
(18, '0000-00-00', '2801', 'test3', '6093cbe857a59.png', 'proses'),
(19, '0000-00-00', '2801', 'test4', '6093cc0438bf9.png', '0'),
(20, '0000-00-00', '2801', 'asdfgh', '6093cc4f46cbe.png', '0'),
(21, '0000-00-00', '2801', 'kkkkkkkkkkkkkkk', '6093cd3d9076e.png', '0'),
(23, '2021-05-07', '2801', 'alamak', '6094ad51125a8.png', '0'),
(24, '2021-05-07', '2801', 'banyak bug', '6094bdfbc7b40.png', 'selesai'),
(25, '2021-05-07', '2801', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque purus mi, pharetra in mauris sit amet, porttitor suscipit odio. Quisque finibus bibendum ex, sed elementum massa viverra vitae. Proin faucibus ultrices ullamcorper. In tellus sapien, faucibus eu libero quis, accumsan faucibus orci. Mauris sit amet imperdiet neque. Maecenas id dui nec urna aliquet varius. Donec condimentum risus leo, sed pellentesque nisl accumsan in. Aenean semper sem quis porta pharetra. Donec tincidunt vel justo quis ullamcorper. Nulla commodo, sem eu interdum commodo, augue tortor pretium eros, sed venenatis purus metus sed metus. Duis id auctor magna.\r\n\r\nMaecenas elit felis, elementum eu euismod nec, pulvinar eget mauris. Quisque varius vel tortor aliquet varius. Etiam sit amet nibh sit amet ligula accumsan lobortis. Ut in lectus sit amet lacus porta malesuada eu id turpis. Aliquam tincidunt vitae mi vitae tristique. Suspendisse quis malesuada nisl, in vulputate felis. Pellentesque eu lacus a sem efficitur scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin non viverra eros. Suspendisse pretium facilisis leo, non vulputate mi consectetur congue. Phasellus placerat dui quis mauris iaculis ultricies. Nulla sit amet dolor posuere risus ultrices faucibus et at libero. Morbi ipsum est, euismod non arcu quis, vehicula imperdiet nisl.\r\n\r\nCurabitur fermentum pulvinar turpis quis fermentum. Sed quis risus laoreet sapien lobortis vestibulum. Nullam consectetur diam at lorem posuere, eu dapibus eros tincidunt. Nunc eu vulputate ipsum, et mattis metus. Nulla in elit elementum lectus porta ultrices. Curabitur molestie arcu tellus, vel faucibus mauris tristique vel. Donec orci risus, congue sit amet fermentum sagittis, egestas blandit sapien. Quisque mi sem, laoreet quis tempus a, egestas sit amet lacus. Duis hendrerit mauris vitae mi aliquam convallis. Maecenas ac lectus velit. Vivamus non eros vitae neque congue varius id sed odio. Duis a felis quis purus tristique viverra id et nulla. Nulla tincidunt blandit ornare. Mauris dictum nulla vitae nibh egestas, sit amet aliquam mi laoreet.\r\n\r\nSuspendisse velit nibh, mattis id auctor ac, elementum pharetra massa. Phasellus tristique, metus ut varius aliquam, sem est fringilla justo, sit amet porta est eros vel turpis. In at metus a ante tempus rutrum. Suspendisse mollis et metus pellentesque consequat. Pellentesque posuere diam quam, ac consectetur massa varius non. Vestibulum in aliquet neque, in mollis massa. Curabitur et ligula ac mauris porttitor faucibus et sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec vitae lacinia ante. Fusce et felis quis quam consectetur bibendum. Aliquam malesuada libero nec libero lobortis posuere. Suspendisse luctus sed felis eu pulvinar. Nulla facilisi.\r\n\r\nPraesent efficitur ante a est convallis, eget vulputate velit luctus. Nullam ullamcorper cursus eros sed ultrices. Phasellus mi nunc, ornare sit amet erat sed, dignissim finibus enim. Duis vitae lacus ultricies metus finibus suscipit in semper mauris. Sed tristique, elit non posuere sollicitudin, ligula leo pharetra nisl, in tincidunt lorem velit non ante. Nullam eget odio nec elit varius sagittis sit amet at quam. Sed vel aliquam sapien. Donec aliquet arcu vestibulum ipsum commodo, vitae blandit nisi vehicula. Maecenas ac turpis eu ex facilisis finibus vitae nec diam. Nam nisl diam, aliquam eget lorem id, consectetur interdum sem. Vivamus ullamcorper sit amet diam sit amet dictum. Quisque id turpis non ipsum ultrices eleifend.', '6094de9282ba8.png', 'selesai'),
(26, '2021-05-07', '2801', 'multiple files', '6094e32a55c7e.png', '0'),
(27, '2021-05-07', '28055', 'kemarin saya menang', '6094eff6e498f.png', 'selesai'),
(29, '2021-05-08', '2801', 'sadsadsaddas', '6096209ee7e25.jpg', '0'),
(30, '2021-05-11', '684123198451231', 'ulullluulululul', '609a2db349b56.png', 'selesai'),
(31, '2021-05-11', '28055', 'insyaalaah\r\n', '609a34151b721.png', 'selesai'),
(32, '2021-05-11', '29049', 'slkkdasl;dk', '609a355fd26ba.png', 'proses'),
(33, '2021-05-11', '25432156121', 'saya mau mengadukan tentang blabalabla', '609a3b8fb8a08.png', 'selesai'),
(34, '2021-05-11', '2801', 'pesan disini', '609a460f51314.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(5, 'M Riski', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', '081215951492', 'petugas'),
(6, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '081215951492', 'admin'),
(8, 'erorr', 'erorr', 'd41d8cd98f00b204e9800998ecf8427e', '', 'admin'),
(9, 'isa', 'isa', '165a1761634db1e9bd304ea6f3ffcf2b', '2', 'admin'),
(10, 'K', 'k', '8ce4b16b22b58894aa86c421e8759df3', '2541256156', 'petugas'),
(12, 'AGUNG', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', '08456561561', 'admin'),
(13, 'adhi', 'dhi', 'fcea920f7412b5da7be0cf42b8c93759', '0812299911', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(25) NOT NULL,
  `id_pengaduan` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `rate` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `id_pengaduan`, `username`, `pesan`, `rate`) VALUES
(1, 1, 'dummy', 'aaaaaaaaaa', '5'),
(2, 15, 'isa', 'B', '3'),
(3, 24, 'dummy', 'bug diperbaiki dengan cepat', '4'),
(4, 16, 'isa', 'lanjut', '4'),
(5, 17, 'dummy', 'hail hydra\r\n', '5'),
(6, 30, 'dhi', 'mntp', '5'),
(7, 31, 'isa', 'hai', '5'),
(8, 33, 'dio', 'okokok', '2'),
(9, 27, 'dummy', 'sudah bagus', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(2, 23, '2021-05-07', 'baik segera kami tindak lanjuti', 8),
(3, 23, '2021-05-07', 'siap laksanakan', 8),
(5, 18, '2021-05-07', 'ok', 8),
(8, 15, '2021-05-07', 'ya', 6),
(9, 17, '2021-05-07', 'hail hydra', 6),
(12, 1, '2021-05-07', 'blablabla', 9),
(14, 24, '2021-05-07', 'owh iya', 9),
(15, 25, '2021-05-07', '????', 6),
(16, 27, '2021-05-08', 'congratulations ', 10),
(17, 31, '2021-05-11', 'sudah\r\n', 9),
(19, 32, '2021-05-11', 'sudah saya tanggapi 2', 6),
(20, 15, '2021-05-11', 'sudah saya tanggapi', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
