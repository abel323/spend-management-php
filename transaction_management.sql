-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 08:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaction_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `ID` int(11) NOT NULL,
  `Payment_Type` varchar(30) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`ID`, `Payment_Type`, `Created_At`, `Updated_At`) VALUES
(1, 'Telebirr', '2024-03-17 17:06:23', '2024-03-17 17:06:23'),
(2, 'CBE Birr', '2024-03-17 17:07:26', '2024-03-17 17:07:26'),
(3, 'CBE Mobile Banking', '2024-03-17 17:08:04', '2024-03-17 17:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `Transaction_ID` int(11) NOT NULL,
  `Reason_For_Transaction` varchar(50) NOT NULL,
  `Transaction_Type` int(11) NOT NULL,
  `Transaction_Date` date DEFAULT curdate(),
  `Payment_Type` int(11) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`Transaction_ID`, `Reason_For_Transaction`, `Transaction_Type`, `Transaction_Date`, `Payment_Type`, `Amount`, `User_ID`, `Created_At`, `Updated_At`) VALUES
(1, 'Electric Bill', 1, '2024-04-14', 1, 117.43, 1, '2024-04-15 11:14:27', '2024-04-15 11:14:27'),
(2, 'Fuel Payment', 1, '2024-04-05', 1, 800.00, 1, '2024-04-15 11:16:04', '2024-04-15 11:16:04'),
(3, 'Tele Landline Bill 16', 1, '2024-04-18', 1, 9.00, 1, '2024-04-19 08:34:48', '2024-04-19 08:34:48'),
(4, 'Tele Landline Bill 66', 1, '2024-04-19', 1, 10.50, 1, '2024-04-19 08:35:12', '2024-04-19 08:35:12'),
(5, 'Wifi Bill', 1, '2024-04-18', 1, 499.00, 1, '2024-04-19 08:35:32', '2024-04-19 08:35:32'),
(6, 'Deposite', 2, '2024-03-09', 1, 3000.00, 1, '2024-04-21 16:54:24', '2024-04-21 16:54:24'),
(7, 'Electric Bill', 1, '2024-05-11', 1, 121.26, 1, '2024-05-12 19:03:16', '2024-05-12 19:03:16'),
(8, 'Fuel Payment', 1, '2024-05-17', 1, 800.00, 1, '2024-05-17 09:12:37', '2024-05-17 09:12:37'),
(9, 'Wi-Fi Bill', 1, '2024-05-14', 1, 499.00, 1, '2024-05-17 09:13:59', '2024-05-17 09:13:59'),
(10, 'Tele Landline Bill 16', 1, '2024-05-14', 1, 9.69, 1, '2024-05-17 09:14:39', '2024-05-17 09:14:39'),
(11, 'Tele Landline Bill 66', 1, '2024-05-14', 1, 9.00, 1, '2024-05-17 09:14:58', '2024-05-17 09:14:58'),
(12, 'Water Bill', 1, '2024-05-14', 1, 41.36, 1, '2024-05-17 09:17:04', '2024-05-17 09:17:04'),
(13, 'Deposite', 2, '2024-05-17', 1, 2500.00, 1, '2024-05-17 09:24:22', '2024-05-17 09:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `MName` varchar(30) DEFAULT NULL,
  `Phone` varchar(15) NOT NULL,
  `EMail` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FName`, `LName`, `MName`, `Phone`, `EMail`, `Password`) VALUES
(1, 'Abel', 'Gebremeskel', 'Mesay', '951078852', 'abelmesay49@gmail.com', 'b3204015b874f4990219720da035f697'),
(2, 'Abel', 'Gebremeskel', 'Mesay', '0987303695', 'abelmesay830@gmail.com', 'b3204015b874f4990219720da035f6');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `ID` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_type`
--

INSERT INTO `transaction_type` (`ID`, `Type`, `Created_At`, `Updated_At`) VALUES
(1, 'Debit', '2024-03-18 16:27:32', '2024-03-18 16:27:32'),
(2, 'Credit', '2024-03-18 16:34:21', '2024-03-18 16:34:21'),
(3, 'Transfer', '2024-03-18 16:34:47', '2024-03-18 16:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Payment_Type` (`Payment_Type`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`Transaction_ID`),
  ADD KEY `Payment_Type` (`Payment_Type`),
  ADD KEY `Transaction_Type` (`Transaction_Type`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `EMail` (`EMail`);

--
-- Indexes for table `transaction_type`
--
ALTER TABLE `transaction_type`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Type` (`Type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `Transaction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD CONSTRAINT `tbltransaction_ibfk_1` FOREIGN KEY (`Payment_Type`) REFERENCES `payment_type` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbltransaction_ibfk_2` FOREIGN KEY (`Transaction_Type`) REFERENCES `transaction_type` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbltransaction_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `tbluser` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
