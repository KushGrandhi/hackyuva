-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 08:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackyuva`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `gender`) VALUES
(17, 'Ram', 'ram_charan', 'Yashrdr111@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-09-10', '', ''),
(18, 'Pankaj', 'pankaj_tripathi', 'Pankaj@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-09-10', '', ''),
(19, 'Yash', 'yash_yadav', 'Yashrdr@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-09-11', '', ''),
(20, 'Ved', 'ved_patel', 'Vedpatel@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-09-17', '', ''),
(21, 'Abhigyan', 'abhigyan_singh', 'Abhigyan@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-10-05', '', ''),
(22, 'Devesh', 'devesh_teotia', 'Dev@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-10-06', '', ''),
(23, 'Joshi', 'joshi_joshi', 'Joshi@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-10-15', '', ''),
(24, 'Chirag', 'chirag_yadav', 'Chirag@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-10-22', '', ''),
(25, 'Payel', 'payel_paul', 'Payel@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-10-30', '', ''),
(26, '', '_', 'Yashrdr1123@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-11-01', 'assets/images/profile_pics/defaults/head_emerald.png', ''),
(27, '', 'yogesh', 'Yashrdr11234@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-11-01', 'assets/images/profile_pics/defaults/head_deep_blue.png', ''),
(28, '', 'yogesh_1', 'Yashrdr01@gmail.com', 'dfbb2136a2b5a5609ca862c5cc9b0782', '2020-11-01', 'assets/images/profile_pics/defaults/head_deep_blue.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
