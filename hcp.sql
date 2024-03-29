-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 07:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `call_details`
--

CREATE TABLE `call_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `meeting_url` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call_details`
--

INSERT INTO `call_details` (`id`, `user_id`, `doctor_id`, `meeting_url`, `time`, `status`) VALUES
(27, 10, 18, 'https://zoom.us/s/99314182203?zak=eyJ6bV9za20iOiJ6bV9vMm0iLCJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJjbGllbnQiLCJ1aWQiOiJaS2RYcU5uVlExS1VocUVob1lqV2dRIiwiaXNzIjoid2ViIiwic3R5IjoxMDAsIndjZCI6ImF3MSIsImNsdCI6MCwic3RrIjoiX3dBTFJtb0MyWHVreVoxRk1oSG5zZk9xc3dzMTVpOXNhX05CVzcxTGEtTS5CZ1VnZVZkVmFESlBUamt2YUhoa2QxRlVSMFJJU2xWS2FqZFhjbkowTDJWeFpWbEFPV1ZoWldVeVpEWTNOelk1WkdRNE5tSTROelkyWldWbFpUQmhOV1l4TURWaVpqaGxObU0zTXpoaU1ERXlNMlkxTldRMFkyVmhPR1pqWWpWbU1tUXpaUUFNTTBOQ1FYVnZhVmxUTTNNOUFBTmhkekUiLCJleHAiOjE1OTUzNzc3NTgsImlhdCI6MTU5NTM3MDU1OCwiYWlkIjoiZ3c1TTI1UVdUNmFKSHJyLVZXUmhWQSIsImNpZCI6IiJ9.IcA01XVIHoLEAH63JbLzM8zWcAxRMzZHK14t2CpCawg', '2020-09-17 15:29:00', 1),
(30, 12, 7, 'https://zoom.us/s/91802685742?zak=eyJ6bV9za20iOiJ6bV9vMm0iLCJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJjbGllbnQiLCJ1aWQiOiJaS2RYcU5uVlExS1VocUVob1lqV2dRIiwiaXNzIjoid2ViIiwic3R5IjoxMDAsIndjZCI6ImF3MSIsImNsdCI6MCwic3RrIjoiX3dBTFJtb0MyWHVreVoxRk1oSG5zZk9xc3dzMTVpOXNhX05CVzcxTGEtTS5CZ1VnZVZkVmFESlBUamt2YUhoa2QxRlVSMFJJU2xWS2FqZFhjbkowTDJWeFpWbEFPV1ZoWldVeVpEWTNOelk1WkdRNE5tSTROelkyWldWbFpUQmhOV1l4TURWaVpqaGxObU0zTXpoaU1ERXlNMlkxTldRMFkyVmhPR1pqWWpWbU1tUXpaUUFNTTBOQ1FYVnZhVmxUTTNNOUFBTmhkekUiLCJleHAiOjE1OTU0MDk3NTQsImlhdCI6MTU5NTQwMjU1NCwiYWlkIjoiZ3c1TTI1UVdUNmFKSHJyLVZXUmhWQSIsImNpZCI6IiJ9.0Mgu-Uf_o6JSA9sGpit504w_PuRH9SwuDBRa4omoNQA', '2020-08-07 12:22:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `docavalibility`
--

CREATE TABLE `docavalibility` (
  `id` int(10) NOT NULL,
  `docid` int(10) NOT NULL,
  `time` varchar(150) NOT NULL,
  `days` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docavalibility`
--

INSERT INTO `docavalibility` (`id`, `docid`, `time`, `days`) VALUES
(1, 16, '23:12', 'Monday - saturday'),
(4, 19, '17:00', 'monday'),
(5, 20, '13:59', 'monday'),
(6, 25, '', ''),
(7, 18, '13:06', 'monday');

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
-- Table structure for table `front_end_management`
--

CREATE TABLE `front_end_management` (
  `id` int(11) NOT NULL,
  `animated_text` varchar(255) NOT NULL,
  `about_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `front_end_management`
--

INSERT INTO `front_end_management` (`id`, `animated_text`, `about_us`) VALUES
(2, 'We Health Consultancy Portal Aims,to provide an Online Platform ....!,To Find a Doctor For Your Queries,and Get an Appointment and Diagnose Your Problems Online, Search your Doctor....!', 'We are Health Consultancy Portal our Aim to Provide Best Platform For User to Book Consultancy Services and Online Appointments From Best Doctors Available and for Doctor To Provide their services and Earn Money.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `doctor_id`, `amount`) VALUES
(1, 10, 18, 80);

-- --------------------------------------------------------

--
-- Table structure for table `payment_hcp`
--

CREATE TABLE `payment_hcp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `card_number` bigint(20) NOT NULL,
  `cvc` bigint(11) NOT NULL,
  `payment_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_hcp`
--

INSERT INTO `payment_hcp` (`id`, `user_id`, `doctor_id`, `amount`, `name`, `card_number`, `cvc`, `payment_time`) VALUES
(17, 10, 18, 20, 'shah', 4242424242424242, 145, '2020-07-22 03:28:40'),
(18, 11, 7, 100, 'shah', 4242424242424242, 145, '2020-07-22 04:14:55'),
(19, 12, 7, 100, 'shah', 4242424242424242, 145, '2020-07-22 12:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `faname` varchar(255) NOT NULL,
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

INSERT INTO `tbldoctors` (`id`, `name`, `faname`, `email`, `contact`, `address`, `regno`, `qualification`, `degimage`, `certimage`, `city`, `country`, `specialization`, `password`, `gender`, `status`) VALUES
(1, 'Dr syed anwar ahmed  shah', '', 'syed123@gmail.com', '03012345654', 'karachi', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'eye specialiat', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(2, 'Dr nee ww', '', 's@s', '4344556', 'fds', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'eye specialiat', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(3, 'Syed Anwar Ahmed Shah', '', 'drtst@email.com', '2147483647', 'dcfgrfgrvggvgrvfrvcfcfrcef', '123443', 'MBBS', '72041755_2395208774072216_5816196432515825664_n.jpg', '81596780_585958348912912_8862971486982373376_n.jpg', 'karachi', 'pakistan', 'heart specialiat', '8b6fd8deee2043c99f337d093f51a90e', 'female', 2),
(4, 'Dr stat us', '', 'us@us.com', '03012134321', 'new user doc', '123', 'mbbs', '82220525_471175433817246_8914716381086220288_n.jpg', '72041755_2395208774072216_5816196432515825664_n.jpg', 'khi', 'pak', 'y', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(5, 'asxd fds', '', 'us@us.comw', '03012134321', 'dffdff', '123', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'f', 'r', 'f', '108bc7b6961e71b2e770387a378cbc10', 'male', 2),
(6, 'Dr statd fds', '', 'us@us.comss', '03012134321', 'sss', '123', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'khi', 'pak', 'y', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(7, 'Dr Danish Iqbal', '', 'drdanish@gmail.com', '03012134321', 'shahssdscdcds', '123', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'khi', 'pak', 'eye ', '202cb962ac59075b964b07152d234b70', 'male', 2),
(8, 'Dr statis tics', '', 'drdanishs@gmail.com', '03012134321', 'karachi', '123122', 'mbbs', '81596780_585958348912912_8862971486982373376_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'khi', 'pak', 'y', '202cb962ac59075b964b07152d234b70', 'male', 2),
(10, 'Syed Anwar Ahmed Shah', 'Syed Zia hussain shah', 'syedanwar016@gmail.com', '03012134321', 'Abdul Razzaq manzil sadar bar lane kalakot lyari karachi', '123122', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '72041755_2395208774072216_5816196432515825664_n (1).jpg', 'karachi', 'pakistan', 'eye specialist', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(11, 'Syed Anwar Ahmed Shah', 'Syed Zia hussain shah', 'syedanwar06@gmail.com', '03012134321', 'Abdul Razzaq manzil sadar bar lane kalakot lyari karachi', '123122', 'mbbs', '72041755_2395208774072216_5816196432515825664_n (1).jpg', '72041755_2395208774072216_5816196432515825664_n (1).jpg', 'karachi', 'pakistan', 'eye specialist', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(14, 'Syed Anwar Ahmed Shah', 'Syed Zia hussain shah', 'us@us.co', '03012134321', 'khi', '123122', 'mbbs', '72041755_2395208774072216_5816196432515825664_n.jpg', '81626197_845759099209945_1286228626525650944_n.jpg', 'karachi', 'pakistan', 'eye specialist', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(15, 'Syed Anwar Ahmed Shah', 'Syed Zia hussain shah', 'syed13@gmail.com', '03012134321', 'lyari karachi', '123122', 'mbbs', '81626197_845759099209945_1286228626525650944_n.jpg', '72041755_2395208774072216_5816196432515825664_n.jpg', 'karachi', 'pakistan', 'eye specialist', '202cb962ac59075b964b07152d234b70', 'male', 2),
(16, 'new doctor', 'doctor', 'doct@doct.com', '923133899568', 'shah', '1234cf', 'mbbs', '72041755_2395208774072216_5816196432515825664_n.jpg', '82220525_471175433817246_8914716381086220288_n.jpg', 'khi', 'pak ', 'y', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(17, 'dr tester tester', 'senior tester', 'sn.tester@gmail.com', '03018703123', 'address of the doctor is valid', '2233454', 'MBBS', 'as1.PNG', 'ld6.PNG', 'khi', 'pak', 'eye', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 'male', 2),
(18, 'test testing', 'greattesting', 'testing@testing', '03031233212', 'khi', '123445', 'mbbs', 'seeds.PNG', 'sendgridinputs.PNG', 'khi', 'pak', 'eye', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 'male', 2),
(25, 'test testing', 'dr testerd', 'testing@testingdrs11', '1234567', 'adswsdd', '12324566', 'mbbs', 'ebs4.PNG', 'ebs.PNG', 'khi', 'pak', 'eye', '1630937c3d00b4f4b153599d93469963', 'male', 2),
(26, 'test testing', 'greattesting', 'syedanwar015@gmail.com', '03018791382', 'address of doctor', '1238767', 'mbbs', 'ebs3.PNG', 'Capture3.PNG', 'khi', 'pak', 'eye', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 'male', 2);

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
(3, 'Syed Anwar Ahmed Shah', 'syedanwar016@gmail.com', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 2147481111, '81626197_845759099209945_1286228626525650944_n.jpg', 'Male', 1),
(4, 'test user', 'user@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 123, '81626197_845759099209945_1286228626525650944_n.jpg', 'Male', 2),
(7, 'danish Iqbal', 'danish@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, '72041755_2395208774072216_5816196432515825664_n (1).jpg', 'Male', 2),
(10, 'test final video', 'email@email', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 2147483647, 'Capture3.PNG', 'Male', 2),
(11, 'testfinal finally', 'finall@finally', 'cf43487cc21cd8ec0154bc3d4e5d3f23', 2147483647, 'ebs1.PNG', 'Male', 2),
(12, 'testuser5 last', 'last@gmail.com', 'f6b5c1e4f7d751d95c53d32b6161a6f7', 2147483647, 'ebs4.PNG', 'Male', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call_details`
--
ALTER TABLE `call_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docavalibility`
--
ALTER TABLE `docavalibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docstatus`
--
ALTER TABLE `docstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_end_management`
--
ALTER TABLE `front_end_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_hcp`
--
ALTER TABLE `payment_hcp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `call_details`
--
ALTER TABLE `call_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `docavalibility`
--
ALTER TABLE `docavalibility`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `docstatus`
--
ALTER TABLE `docstatus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front_end_management`
--
ALTER TABLE `front_end_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_hcp`
--
ALTER TABLE `payment_hcp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldoctors`
--
ALTER TABLE `tbldoctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
