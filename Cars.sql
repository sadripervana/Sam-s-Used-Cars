-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2021 at 11:17 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `VIN` int NOT NULL,
  `ImageFile` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`VIN`, `ImageFile`) VALUES
(51533235, 'car.jpg'),
(85346538, 'audi.jpeg'),
(85346538, 'audi2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `INVENTORY`
--

CREATE TABLE `INVENTORY` (
  `VIN` varchar(17) NOT NULL,
  `YEAR` int DEFAULT NULL,
  `Make` varchar(50) DEFAULT NULL,
  `Model` varchar(100) DEFAULT NULL,
  `TRIM` varchar(50) DEFAULT NULL,
  `EXT_COLOR` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `INT_COLOR` varchar(50) DEFAULT NULL,
  `ASKING_PRICE` decimal(10,2) DEFAULT NULL,
  `SALE_PRICE` decimal(10,2) DEFAULT NULL,
  `PURCHASE_PRICE` decimal(10,2) DEFAULT NULL,
  `MILEAGE` int DEFAULT NULL,
  `TRANSMISSION` varchar(50) DEFAULT NULL,
  `PURCHASE_DATE` date DEFAULT NULL,
  `SALE_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `INVENTORY`
--

INSERT INTO `INVENTORY` (`VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`, `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`, `SALE_DATE`) VALUES
('486513', NULL, 'BENZ', '220', NULL, NULL, NULL, '3020.00', NULL, NULL, NULL, NULL, NULL, NULL),
('4T4BF3EK5AR031954', 2010, 'Toyota', 'Camry', 'LE', 'Magnetic Gray Metallic', 'Tan cloth', '16977.00', '0.00', '14250.00', 32673, '6 Speed Automatic', '2012-11-08', '2021-07-21'),
('5FNYF4H91CB054036', 2012, 'Honda', 'Pilot', 'Touring', 'White Diamond Perl', 'Leather', '37807.00', '0.00', '34250.00', 7076, 'Automatic', '2012-11-08', '2021-07-13'),
('8534653', NULL, 'BMW', 'M4', NULL, NULL, NULL, '500000.00', NULL, NULL, NULL, NULL, NULL, NULL),
('85346538', NULL, 'Audi', 'R8', NULL, NULL, NULL, '100000.00', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `INVENTORY`
--
ALTER TABLE `INVENTORY`
  ADD PRIMARY KEY (`VIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
