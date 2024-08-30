-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 05:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender`, `message`, `timestamp`) VALUES
(1, 'user ', 'hi', '2024-04-01 21:11:33'),
(2, 'user ', 'hi', '2024-04-01 21:12:00'),
(3, 'user ', 'hi', '2024-04-01 21:12:17'),
(4, '', 'hi', '2024-04-01 21:12:34'),
(5, 'admin', 'hi', '2024-04-01 21:13:22'),
(6, 'user ', 'hola', '2024-04-01 21:13:29'),
(7, 'user ', 'hi', '2024-04-01 21:16:06'),
(8, 'admin', 'holo k se ho app log', '2024-04-01 21:16:23'),
(9, 'user ', 'hum log thik hai', '2024-04-01 21:17:08'),
(10, 'user ', 'pani nahi aaya ga.....', '2024-04-01 21:22:00'),
(11, 'admin', 'fvx', '2024-04-01 21:26:40'),
(12, 'admin', 'dfvd', '2024-04-01 21:29:32'),
(13, 'admin', 'mujhe nahi', '2024-04-01 21:29:56'),
(14, 'admin', 'mujhe nahi pata hai mujhe chai pucho na kubciahsabksxaxbas', '2024-04-01 21:30:13'),
(15, 'admin', 'xbhsiucgsdc', '2024-04-01 21:30:14'),
(16, 'admin', 'sdcjshgckas', '2024-04-01 21:30:15'),
(17, 'admin', 'askxaxgisccas', '2024-04-01 21:30:16'),
(18, 'admin', 'hi', '2024-04-02 01:11:11'),
(19, 'user', 'hi', '2024-04-02 01:11:34'),
(20, 'admin', 'no mmeetting', '2024-04-02 01:11:46'),
(21, 'admin', 'csidyci', '2024-04-05 07:58:05'),
(22, 'admin', 'mjshciu', '2024-04-05 07:58:06'),
(23, 'admin', 'dnbcfisgc', '2024-04-05 07:59:24'),
(24, 'admin', 'cjsygdc', '2024-04-05 07:59:25'),
(25, 'admin', 'zmdchgic', '2024-04-05 07:59:26'),
(26, 'admin', 'c zhgcjhzcd', '2024-04-05 07:59:27'),
(27, 'admin', 'xc nxcgjxc', '2024-04-05 07:59:27'),
(28, 'admin', 'ngvhg', '2024-04-05 07:59:42'),
(29, 'admin', 'nvj', '2024-04-05 07:59:43'),
(30, 'admin', 'hcud', '2024-04-12 06:18:02'),
(31, 'admin', 'scjkshdbc', '2024-04-12 06:18:02'),
(32, 'admin', 'sdbcjhs', '2024-04-12 06:18:03'),
(33, 'admin', 'zhdbjchds', '2024-04-12 06:18:04'),
(34, 'admin', 'jzhdcbjs', '2024-04-12 06:18:05'),
(35, 'admin', 'bfis', '2024-04-12 06:19:29'),
(36, 'admin', 'cscsc', '2024-04-12 06:19:30'),
(37, 'admin', 'scsdcsc', '2024-04-12 06:19:31'),
(38, 'admin', 'sf', '2024-04-12 06:19:31'),
(39, 'admin', 'f', '2024-04-12 06:19:31'),
(40, 'admin', 'e', '2024-04-12 06:19:32'),
(41, 'admin', 'f', '2024-04-12 06:19:32'),
(42, 'admin', 'f', '2024-04-12 06:19:32'),
(43, 'admin', 'e', '2024-04-12 06:19:32'),
(44, 'admin', 'fe', '2024-04-12 06:19:33'),
(45, 'admin', 'fe', '2024-04-12 06:19:33'),
(46, 'admin', 'rf', '2024-04-12 06:19:33'),
(47, 'admin', 'e', '2024-04-12 06:19:33'),
(48, 'admin', 'fer', '2024-04-12 06:19:33'),
(49, 'admin', 'f', '2024-04-12 06:19:34'),
(50, 'admin', 'fd', '2024-04-12 06:58:18'),
(51, 'admin', 'sdfc', '2024-04-12 06:58:19'),
(52, 'admin', 'csdcsc', '2024-04-29 21:05:01'),
(53, 'admin', 'csdcs', '2024-04-29 21:05:01'),
(54, 'admin', 'sdcsdc', '2024-04-29 21:05:02'),
(55, 'admin', '........', '2024-04-29 21:05:06'),
(56, 'admin', 'sfcsdccd', '2024-04-29 21:05:15'),
(57, 'admin', 'fvdf', '2024-04-29 21:05:25'),
(58, 'admin', 'vdfvfv', '2024-04-29 21:05:25'),
(59, 'admin', 'cfvcfv', '2024-04-29 21:05:26'),
(60, 'admin', 'cvdbbf', '2024-04-29 21:05:28'),
(61, 'admin', 'guygjvjf', '2024-04-29 21:05:34'),
(62, 'admin', 'mhvjy', '2024-04-29 21:05:45'),
(63, 'admin', 'nvng', '2024-04-29 21:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `message`, `image_path`, `created_at`) VALUES
(2, 'podriufp', 'uploads/download.jpeg', '2024-05-02 04:31:59'),
(3, 'today\'s event', 'uploads/deewa1.png', '2024-05-02 04:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_description` text DEFAULT NULL,
  `uploader_username` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `image_name`, `image_description`, `uploader_username`, `image_path`) VALUES
(30, 'pic.png', 'AI', 'admin', 'uploads/663314a52df04.png'),
(31, 'rd1.webp', 'deewa', 'admin', 'uploads/663314bc29ae4.webp'),
(32, 'IMG_20210915_113211.jpg', 'deewa1\r\n', 'admin', 'uploads/663314d20fa66.jpg'),
(33, 'png_20220807_152824_0000.png', 'deewa2', 'admin', 'uploads/663314e3d197f.png'),
(34, 'png_20220807_152824_0000.png', 'deeewa3', 'admin', 'uploads/663314f2b4bb1.png'),
(35, 'IMG-20230108-WA0005.jpg', 'yep', 'admin', 'uploads/663315094a516.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `created_at`) VALUES
(9, 'drbffiaueuhfkhs', '2024-05-02 04:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `seller_username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `price`, `duration`, `image_path`, `contact_number`, `seller_username`) VALUES
(13, 'image', 'AI image', 2.00, 1, 'uploads/pic.png', '1234567894', 'admin'),
(14, 'fruit', 'barry', 1.00, 1, 'uploads/download.jpeg', '4631236547', 'admin'),
(15, 'game', 'game', 3.00, 1, 'uploads/Elegant Education Technology Logo Template (2).png', '4563217896', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `work` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `shopname`, `address`, `phone_no`, `work`, `password`) VALUES
(1, 'hjbg', 'jvj', 'gjg', 'vgj', 'v', '$2y$10$Uf74QCCKm02yI33l4q8z5uSBGCyD7IwNHdTE4mxyFz8se8bOtsW5q'),
(2, 'kjhuk', 'jbk', 'hgkb', 'jkg', 'jhvjh', '$2y$10$PvRQXcwRzD57QVMrrUMi/.Z.fCxC.79D2yuD8.ZcPLo.4vOuMBLP.'),
(3, 'Bhavesh Dubey', 'dffvdssdc', 'Muncipal Colony, Sector B, Goregaon', '09372669164', 'svd', '$2y$10$72KY3rrFV6hDCswAgVUwi.XpdW.dcIXpLd88lY1YBPJxXtsailUOC'),
(4, 'hbj', 'hvj', 'gvj', 'hvj', 'vj', '$2y$10$.hT8Z242DcTinUAgBBAtI.IqV1JuZBuVPXXxuDdYLYSc/CUNHqF1i'),
(5, 'Bhavesh Dubey', '1561684', 'Muncipal Colony, Sector B, Goregaon', '09372669164', '6987964', '$2y$10$.CNvedC6R8yY6jhqpAx0L.Zd4uce06fNLhnfs4M6C7o8d2gUhHEIe'),
(6, 'Deewanahu Yadav', 'paint', 'Nav tarun seva mandal , Santosh nagar, goregaon East.', '07715987117', 'painter', '$2y$10$mXeC1eFNDmxl.pMIxsVm6uWAi.LFLBq3jgbulMCh2LIEj8M2LiUTW'),
(7, 'Deewanahu Yadav', 'paint', 'Nav tarun seva mandal , Santosh nagar, goregaon East.', '07715987117', 'painter', '$2y$10$vRvXs38U6PGqBp2fA2cfJO2BgNaXShsuhtg/FMgBymaGkffNDnQLi'),
(8, 'Deewanahu Yadav', 'paint', 'Nav tarun seva mandal , Santosh nagar, goregaon East.', '07715987117', 'painter', '$2y$10$bora2tkeDq5GRiYEgYwcW.e3KzwT6S2/mhBZaUjZxXCSd.fLhfgKO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `wing` varchar(10) NOT NULL,
  `phone_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `name`, `room_no`, `wing`, `phone_no`) VALUES
(40, 'shop', '$2y$10$y4B6cjyI9dnuKJ7qPVZKE.PTv/JsxMSEUCdqH2spg/Cd63SudtlUO', 'shop', '', '', '', ''),
(41, 'admin', '$2y$10$xp8rbxDz.R7RznkPkakdPuJRPAIiSvmky58DBuHOja.jOpWRFiPfe', 'admin', 'Deewanahu Yadav', '2172', 'A', '7715987117'),
(42, 'user', '$2y$10$/Pd76f5Io07c4CdEgU9V2.XVtL9nX6PKm5S0HtDna4zSLYcSL3UD.', 'user', 'deewa', '2173', 'A', '7715987654'),
(43, 'user', '$2y$10$NT545aKCPS4EMEAeEbJhoeaF2Os1NMPP.eUVCeSN2YNPVwOO5t0Ri', 'user', 'ram', '100', 'B', '5513253203'),
(44, 'user', '$2y$10$0JO4noTdFYeTsDm3S1WlQ.gfUUM2chqt7YuVCEveEy2mm6FeZhiqi', 'user', 'sam', '101', 'B', '1345654123'),
(45, 'user', '$2y$10$yvxt6/A0eVjWghsXQYHE7.zz4BR2IQ2tdXiI5RKW9mmVaTA0JcDKS', 'user', 'mathur', '102', 'C', '1236542789'),
(46, 'superadmin', '$2y$10$tJ3IPCQ0JyFLp4H9bha5T.vPJU4eeg9/NWQ42ox5/2s0oGnJyKxjG', 'superadmin', '', '', '', ''),
(47, 's', '$2y$10$k8uYzO3CHwac3wtc5K6ObuPNxIbbH7slmGGgzsVQt.Ca4wzBA39IG', 'superadmin', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
