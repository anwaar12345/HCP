-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 06:24 AM
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
-- Table structure for table `docstatus`
--

CREATE TABLE `docstatus` (
  `id` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docstatus`
--

INSERT INTO `docstatus` (`id`, `status`) VALUES
(1, 'pending'),
(2, 'approved'),
(3, 'blocked');

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
  `gender` varchar(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldoctors`
--

INSERT INTO `tbldoctors` (`id`, `name`, `email`, `contact`, `address`, `regno`, `qualification`, `degimage`, `certimage`, `city`, `country`, `specialization`, `password`, `gender`, `status`) VALUES
(1, 'Dr syed anwar ahmed  shah', 'syed123@gmail.com', '03012345654', 'karachi', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'eye specialiat', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(2, 'Dr nee ww', 's@s', '4344556', 'fds', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'eye specialiat', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(3, 'dr test testing', 'drtst@email.com', '03012342654', 'dcfgrfgrvggvgrvfrvcfcfrcef', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'heart specialiat', '1630937c3d00b4f4b153599d93469963', 'female', 2),
(4, 'Dr stat us', 'us@us.com', '03012134321', 'new user doc', '123', 'mbbs', '82220525_471175433817246_8914716381086220288_n.jpg', '72041755_2395208774072216_5816196432515825664_n.jpg', 'khi', 'pak', 's', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(5, 'asxd fds', 'us@us.comw', '03012134321', 'dffdff', '123', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'f', 'r', 'f', '108bc7b6961e71b2e770387a378cbc10', 'male', 2),
(6, 'Dr statd fds', 'us@us.comss', '03012134321', 'sss', '123', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'khi', 'pak', 's', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(7, 'Dr Danish Iqbal', 'drdanish@gmail.com', '03012134321', 'shahssdscdcds', '123', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'khi', 'pak', 'eye ', '202cb962ac59075b964b07152d234b70', 'male', 2);

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
(5, 'test user2', 'user2@email.com', '1630937c3d00b4f4b153599d93469963', 123, '82220525_471175433817246_8914716381086220288_n.jpg', 'Male', 2),
(6, 'usertest1 test', 'ut@email.com', '1630937c3d00b4f4b153599d93469963', 2147483647, '81596780_585958348912912_8862971486982373376_n.jpg', 'Male', 2),
(7, 'danish Iqbal', 'danish@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, '72041755_2395208774072216_5816196432515825664_n (1).jpg', 'Male', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docstatus`
--
ALTER TABLE `docstatus`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `docstatus`
--
ALTER TABLE `docstatus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldoctors`
--
ALTER TABLE `tbldoctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
