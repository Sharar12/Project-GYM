-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 02:46 PM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Username`, `Password`) VALUES
(2, 'AAA', '111');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Schedule` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Profession` varchar(50) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `Name`, `Email`, `Password`, `Experience`, `Schedule`, `Age`, `Gender`, `Profession`, `Phone`, `Address`) VALUES
(1, 'pokemon', 'mia@gmail.com', 'szcvd', 'dvcdsvdsv', '9am-12pm', 33, 'male', 'Trainer', '02222222', '1e3wdefcefve'),
(2, 'scscs', 'dvsdvsdv@gmail.com', 'dcvdsvds', 'vdsvdsv', '9am-12pm', 11, '0', 'Trainer', NULL, NULL),
(3, 'Sharar', 'Doreamon@gmail.com', 'ascadscvdas', 'scscasc', '9am-12pm', 7, '0', 'Trainer', NULL, NULL),
(7, 'SS', 'S@gmail.com', 'AAAAAAAA', 'csdacdscdsc', '12pm-3pm', 15, 'male', 'Medic', NULL, NULL),
(8, 'SSS', 'SSS@gmail.com', 'SSSSSSSS', 'csdacdscdsc', '3pm-6pm', 15, 'male', 'Medic', NULL, NULL),
(9, 'SSSAAA', 'SSSAAA@gmail.com', 'Asadsdsds', 'csdacdscdsc', '12pm-3pm', 15, 'male', 'Medic', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Member_id` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Height` float NOT NULL,
  `Weight` float NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Membership` varchar(10) NOT NULL,
  `Facilities` varchar(200) NOT NULL,
  `PaymentMethod` varchar(50) NOT NULL,
  `ExpirationDate` date DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `payment_amount` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Member_id`, `Name`, `Email`, `Password`, `Height`, `Weight`, `Age`, `Gender`, `Membership`, `Facilities`, `PaymentMethod`, `ExpirationDate`, `Phone`, `Address`, `payment_amount`) VALUES
(56, 'Shara', 'ku@gmail.com', '123456789', 33, 33, 7, 'male', 'STANDARD', 'Unlimited equipments    No trainer included    No time restriction    1 Month Package    (no discounts).', '', NULL, '2222222', '1e3wdefcefve', NULL),
(58, 'Sharareeee', 'qdwwqd@gmail.com', '$2y$10$7nW0fa5xI7myG', 7, 55, 45, '0', 'PREMIUM', 'Unlimited equipment, Personal trainer, No time restriction, 1 Year Package, Discount: 44.4%', '', NULL, '2222222', '1e3wdefcefve', NULL),
(59, 'Sharareeee', 'asdasd@gmail.com', '$2y$10$e0Pl/mqYCBnBy', 11, 55, 11, '0', 'PREMIUM', 'Unlimited equipment, Personal trainer, No time restriction, 1 Year Package, Discount: 44.4%', '', NULL, NULL, NULL, NULL),
(60, 'pokemon', 'ssssss@gmail.com', '12345678', 45, 55, 33, '0', 'PREMIUM', 'Unlimited equipment, Personal trainer, No time restriction, 1 Year Package, Discount: 44.4%', '', NULL, NULL, NULL, NULL),
(62, 'po', 'sss@gmail.com', '99999', 45, 55, 77, 'male', 'STANDARD', 'Unlimited equipments\r\n    No trainer included\r\n    No time restriction\r\n    3 Month Package\r\n    (no discounts).', '', NULL, NULL, NULL, NULL),
(65, 'pokemo', 'yhyjyjn@gth.mmm', '777777777777', 11, 55, 11, '0', 'STANDARD', 'Unlimited Equipments\r\n    No trainer included\r\n    No time restriction\r\n    3 Month Package\r\n    (no discounts).', '', NULL, NULL, NULL, NULL),
(102, 'SS', 'S@gmail.com', 'AAAAAAAA', 123, 33, 15, 'male', 'PREMIUM', 'Unlimited Equipments\r\n    Personal trainer\r\n    No time restriction\r\n    1 Year Package\r\n    Discount: 44.4%', 'paypal', NULL, NULL, NULL, NULL),
(106, 'SA', 'SA@gmail.com', 'AAAAAAAA', 123, 33, 15, 'female', 'PREMIUM', 'Unlimited Equipments\r\n    No trainer included\r\n    No time restriction\r\n    1 Month Package\r\n    (no discounts).', 'debit_card', NULL, NULL, NULL, NULL),
(107, 'SAQQ', 'SAQQ@gmail.com', 'vdfvfvvfv', 123, 33, 15, 'male', 'PREMIUM', 'Unlimited Equipments\r\n    Personal trainer\r\n    No time restriction\r\n    1 Year Package\r\n    Discount: 44.4%', 'debit_card', '2026-01-01', NULL, NULL, NULL),
(116, 'SAQSA', 'QSS@gmail.com', 'QQQQQQQQQQQQQQ', 133, 20, 15, 'male', 'STANDARD', 'Unlimited Equipments\r\n    No trainer included\r\n    No time restriction\r\n    1 Month Package\r\n    (no discounts).', 'credit_card', '2026-01-02', '1232314234', 'dsdffdbfdgbbfbfb', 'Tk.3,000'),
(117, 'Sharar Hossain', 'E@gmail.com', 'Sharar12345', 111, 111, 111, 'male', 'STANDARD', 'Unlimited Equipments\r\n    No trainer included\r\n    No time restriction\r\n    3 Month Package\r\n    (no discounts).', 'credit_card', '2026-02-20', '23423432423', 'everv', 'Tk.5,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Member_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
