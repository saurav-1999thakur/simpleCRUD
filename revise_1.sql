-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 09:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revise`
--

-- --------------------------------------------------------

--
-- Table structure for table `revise_1`
--

CREATE TABLE `revise_1` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0="off", 1="On"',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revise_1`
--

INSERT INTO `revise_1` (`id`, `first_name`, `last_name`, `company`, `email`, `contact`, `picture`, `status`, `created_at`) VALUES
(1, 'yash', 'penday', 'Google', 'yash@gamil.com', '6383494', 'Screenshot 2023-07-18 235526.png', 1, '2023-07-30 18:52:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `revise_1`
--
ALTER TABLE `revise_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `revise_1`
--
ALTER TABLE `revise_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
