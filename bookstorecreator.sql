-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 07:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `bookId` int(10) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`bookId`, `bookName`, `quantity`, `image`) VALUES
(1, 'PHP 6.0', 9, 'php.jpg'),
(2, 'Android Programming', 3, 'android.jpg'),
(3, 'Eloquent JavaScript', 6, 'img1.jpg'),
(4, 'HTML and CSS', 10, 'html.jpg'),
(5, 'ASP.NET', 9, 'asp.jpg'),
(6, 'Web Security', 6, 'web.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `PaymentMethod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `ProductId`, `PaymentMethod`) VALUES
(1, 'gurjit', 'kaur', 2, 'credit'),
(2, 'mandeep', 'kaur', 3, 'debit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `bookId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
