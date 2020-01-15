-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 12:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctors`
--

CREATE TABLE `tbldoctors` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `degimage` varchar(255) NOT NULL DEFAULT 'image.jpg',
  `certimage` varchar(255) NOT NULL DEFAULT 'image.jpg',
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldoctors`
--

INSERT INTO `tbldoctors` (`id`, `name`, `email`, `contact`, `address`, `regno`, `qualification`, `degimage`, `certimage`, `city`, `country`, `specialization`, `password`, `gender`) VALUES
(1, 'Dr syed anwar ahmed  shah', 'syed123@gmail.com', '03012345654', 'karachi', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'eye specialiat', '1630937c3d00b4f4b153599d93469963', 'male'),
(2, 'Dr nee ww', 's@s', '4344556', 'fds', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'eye specialiat', '1630937c3d00b4f4b153599d93469963', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'image.jpg',
  `gender` varchar(255) NOT NULL,
  `role` int(10) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `email`, `password`, `contact`, `image`, `gender`, `role`) VALUES
(3, 'Syed Anwar Ahmed Shah', 'syedanwar016@gmail.com', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 2147483647, '81626197_845759099209945_1286228626525650944_n.jpg', 'Male', 1),
(4, 'test user', 'user@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 123, '81626197_845759099209945_1286228626525650944_n.jpg', 'Male', 2),
(5, 'test user2', 'user2@email.com', '1630937c3d00b4f4b153599d93469963', 123, '82220525_471175433817246_8914716381086220288_n.jpg', 'Male', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldoctors`
--
ALTER TABLE `tbldoctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldoctors`
--
ALTER TABLE `tbldoctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
