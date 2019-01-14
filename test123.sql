-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 12:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test123`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan_kami`
--

CREATE TABLE `layanan_kami` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_kami`
--

INSERT INTO `layanan_kami` (`id`, `title`, `gambar`) VALUES
(47, 'Signage / Letter Emboss', 'Signage Letter Emboss.jpg'),
(48, 'Acrylic', 'Acrylic.jpg'),
(49, 'Display', 'Display.jpg'),
(50, 'Stainless Steel', 'Stainless Steel.jpg'),
(51, 'Metal Works', 'Metal Works.jpg'),
(52, 'Furniture', 'Furniture.jpg'),
(53, 'Neon Box', 'Neon Box.jpg'),
(54, 'Booth', 'Booth.jpg'),
(55, 'Digital Printing', 'Digital Printing.jpg'),
(56, 'Sandblast Vinyl', 'Sandblast Vinyl.jpg'),
(57, 'Cutting Sticker', 'Cutting Sticker.jpg'),
(58, 'Laser & CNC', 'Laser & CNC.jpg'),
(59, 'Neon Sign & Led Tube', 'Neon Sign & Led Tube.jpg'),
(61, 'Alumunium Composite Panel', 'Alumunium Composite Panel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usr` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usr`, `pass`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `single_content`
--

CREATE TABLE `single_content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single_content`
--

INSERT INTO `single_content` (`id`, `title`, `descrip`) VALUES
(1, 'beranda', ''),
(2, 'tentang kami', ''),
(3, 'alamat', ''),
(4, 'phone_top', ''),
(5, 'email_top', ''),
(6, 'password', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan_kami`
--
ALTER TABLE `layanan_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_content`
--
ALTER TABLE `single_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan_kami`
--
ALTER TABLE `layanan_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `single_content`
--
ALTER TABLE `single_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
