-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 05:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `ktp` char(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `penghasilan` int(1) NOT NULL,
  `tanggungan` int(1) NOT NULL,
  `lokasi` int(1) NOT NULL,
  `listrik` int(1) NOT NULL,
  `jns_brg` int(1) NOT NULL,
  `kerja` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `ktp`, `alamat`, `penghasilan`, `tanggungan`, `lokasi`, `listrik`, `jns_brg`, `kerja`, `updated_at`, `created_at`) VALUES
(2, 'aaa', '3253423254', 'asdasd', 1, 3, 1, 3, 0, 'asdasd', '2021-05-14 09:00:02', '2021-05-14 09:00:02'),
(3, 'wqweqwqeewq', '324324342', 'fsdfsf', 1, 9, 1, 1, 0, 'tyryr', '2021-05-14 09:01:01', '2021-05-14 09:01:01'),
(4, 'aaaaa', '46656456', 'fsfdsfd', 9, 1, 6, 1, 1, 'wewewew', '2021-05-14 09:02:18', '2021-05-14 09:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `norm`
--

CREATE TABLE `norm` (
  `id` int(3) NOT NULL,
  `peng` decimal(4,3) NOT NULL,
  `tang` decimal(4,3) NOT NULL,
  `lok` decimal(4,3) NOT NULL,
  `list` decimal(4,3) NOT NULL,
  `sum` decimal(3,2) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `norm`
--

INSERT INTO `norm` (`id`, `peng`, `tang`, `lok`, `list`, `sum`, `updated_at`, `created_at`) VALUES
(2, '0.044', '0.100', '0.033', '0.050', '0.23', '2021-05-15 08:23:19', '2021-05-15 08:23:19'),
(3, '0.044', '0.033', '0.033', '0.017', '0.13', '2021-05-15 08:23:19', '2021-05-15 08:23:19'),
(4, '0.400', '0.300', '0.200', '0.017', '0.92', '2021-05-15 08:23:20', '2021-05-15 08:23:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `norm`
--
ALTER TABLE `norm`
  ADD KEY `FK_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `norm`
--
ALTER TABLE `norm`
  ADD CONSTRAINT `FK_id` FOREIGN KEY (`id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
