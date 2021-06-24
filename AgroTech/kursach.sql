-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2021 at 12:01 AM
-- Server version: 8.0.19
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursach`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corn`
--

CREATE TABLE `corn` (
  `id` int NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `harvester`
--

CREATE TABLE `harvester` (
  `id` int NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `harvester`
--

INSERT INTO `harvester` (`id`, `Name`, `Amount`, `Price`) VALUES
(1, 'Claas LEXION 8900', 76, 110000),
(2, 'New Holland TC5.30', 70, 80000),
(3, 'John Deere S700', 100, 150000),
(4, 'Case IH 8250 Axial-Flow', 88, 170000),
(5, 'AGCO Fendt IDEAL 9T', 47, 180000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `id_goods` int NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone Number` int NOT NULL,
  `Addres` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Check_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_goods`, `Name`, `Phone Number`, `Addres`, `Amount`, `Check_id`) VALUES
(1, 1, 'test', 997324124, 'alolllaa', 1, 1),
(3, 2, 'Лисенко О.О.', 997576146, '1-Травня, 12', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `soy`
--

CREATE TABLE `soy` (
  `id` int NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spares`
--

CREATE TABLE `spares` (
  `id` int NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spares`
--

INSERT INTO `spares` (`id`, `Name`, `Amount`, `Price`) VALUES
(1, 'Bolt', 1000, 20),
(2, 'female screw', 2000, 15),
(3, 'spanner', 2000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tractor`
--

CREATE TABLE `tractor` (
  `id` int NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tractor`
--

INSERT INTO `tractor` (`id`, `Name`, `Amount`, `Price`) VALUES
(1, 'Fendt 1050 Vario', 150, 140000),
(2, 'Fendt 500 Hp', 70, 110000),
(3, 'Fendt 1000 Vario', 100, 170000),
(4, 'Claas Xerion 5000', 106, 186000);

-- --------------------------------------------------------

--
-- Table structure for table `wheat`
--

CREATE TABLE `wheat` (
  `id` int NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount` int NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corn`
--
ALTER TABLE `corn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harvester`
--
ALTER TABLE `harvester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_goods` (`id_goods`);

--
-- Indexes for table `soy`
--
ALTER TABLE `soy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spares`
--
ALTER TABLE `spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tractor`
--
ALTER TABLE `tractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wheat`
--
ALTER TABLE `wheat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corn`
--
ALTER TABLE `corn`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `harvester`
--
ALTER TABLE `harvester`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soy`
--
ALTER TABLE `soy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spares`
--
ALTER TABLE `spares`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tractor`
--
ALTER TABLE `tractor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wheat`
--
ALTER TABLE `wheat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
