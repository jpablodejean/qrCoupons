-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql.badablu.com
-- Generation Time: May 08, 2024 at 11:48 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdbqrgenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int NOT NULL,
  `Code` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Date` date NOT NULL,
  `Hour` time NOT NULL,
  `is_used` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `Code`, `Date`, `Hour`, `is_used`) VALUES
(72, 'zYZO4mXWCcbWUJx', '2023-09-14', '07:55:14', 0),
(88, 'qYlK1oD9S0U9v8R', '2023-09-15', '08:18:41', 0),
(89, 'U0M0fvEXIlc7eeC', '2023-09-16', '12:47:19', 1),
(90, 'Er1sJ8kf8euno2R', '2023-09-16', '14:49:11', 0),
(91, 'e8vai6MnuPJWFbF', '2023-09-16', '14:49:14', 0),
(92, 'X3Sx9w33sjNW6wb', '2023-09-16', '14:49:15', 0),
(93, 'KBTsWbyZSc42T3f', '2023-09-16', '14:49:15', 0),
(94, 'eT7FQ45RTUzWlq4', '2023-09-16', '14:49:16', 0),
(95, 'CI14Lh3M69nn4Eg', '2023-09-16', '14:49:16', 0),
(96, 'fUchROHE1aHeqBJ', '2023-09-16', '14:49:17', 0),
(97, 'kf1Yu8K1VTSsuND', '2023-09-16', '14:49:17', 0),
(98, 'uJpN8Pvxp2iDTNi', '2023-09-16', '14:49:18', 0),
(99, 'GILceDRiSObZc5r', '2023-09-16', '14:49:18', 0),
(100, 'AyVevHSEAwJfNZF', '2023-09-16', '14:49:18', 0),
(101, 'V2Zi3Be74IskzIA', '2023-09-16', '14:49:19', 0),
(102, 'iGbALHKWIcoDlOn', '2023-09-16', '14:49:19', 0),
(103, '9rrT6tdQ5CCYtmT', '2023-09-16', '14:49:20', 0),
(104, 'e4MA5vEMOCSWSQI', '2023-09-16', '14:49:20', 0),
(105, 'gdOLnxH4fGsYaHv', '2023-09-16', '17:13:21', 0),
(106, '9HIvBnTUzb4e9KG', '2023-09-16', '17:14:06', 0),
(107, '8I8Rswby1fE4UnT', '2023-09-16', '17:14:28', 1),
(108, 'MXDqnGQATHNyGff', '2023-09-16', '17:23:27', 0),
(109, 'couZhEaLb43yYph', '2023-09-18', '05:16:35', 0),
(110, 'HOgFAqxsaxxsdfl', '2023-10-19', '06:37:00', 0),
(111, '33440760', '2023-10-19', '06:37:35', 0),
(112, '46709999', '2023-10-19', '06:37:39', 0),
(113, 'uozhNbnjULlGF4y', '2023-10-19', '06:37:46', 0),
(114, 'tr3rCd6IjDCu4w4', '2023-10-19', '06:38:39', 0),
(115, '2Nzxbmtq0zuNDVs', '2023-10-19', '06:49:10', 1),
(116, 'LD4KC5VG2yb5yEG', '2023-10-19', '06:50:01', 1),
(117, '7gZkMoNbeaJPfcf', '2023-10-19', '07:51:09', 0),
(118, 'zBhTx7BqBnGC5Mx', '2023-10-19', '07:56:33', 0),
(119, '1rgrdRWnJK1SsWq', '2023-10-19', '07:57:32', 0),
(120, 'jwBs90T39NrOtr1', '2023-10-19', '12:00:45', 0),
(121, '51586808', '2024-05-08', '09:48:01', 0),
(122, '54252656', '2024-05-08', '09:48:06', 1),
(123, '27588199', '2024-05-08', '09:48:58', 1),
(124, '93807978', '2024-05-08', '09:49:05', 1),
(125, 'RlMaIJo4urHcbFo', '2024-05-08', '13:51:01', 0),
(126, 'W4yzcCbDWXjcbUw', '2024-05-08', '13:51:46', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
