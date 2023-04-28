-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 08:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `bookNo` int(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `book_edition` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`bookNo`, `tittle`, `authorName`, `department`, `book_edition`, `quantity`) VALUES
(1, 'Computer', 'moore mile', 'ICT', '1200', 2),
(2, 'java', 'Herbert schildt', 'ict', '500', 3),
(3, 'Database system', 'Thomas Connolly', 'ICT', '1500', 4),
(13, 'Theory of automata', 'moore mile', 'ICT', '7th', 6),
(18, 'anatomy', 'lan Sommerville', 'dpt', '10th', 3),
(19, 'DMA', 'Herbert schildt', 'ICT', '5th', 4);

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `studname` varchar(255) NOT NULL,
  `enrollno` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `issueDate` date NOT NULL,
  `returnDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`studname`, `enrollno`, `program`, `title`, `issueDate`, `returnDate`) VALUES
('Muskan', 'bscs/1-21/019', 'bscs', 'computer', '0000-00-00', '0000-00-00'),
('versha', 'bscs/1-21/045', 'bscs', 'anatomy', '2022-09-10', '2022-09-15'),
('Elsa', 'bscs/3-20/009', 'bscs', 'Database system', '2022-09-08', '2022-09-15'),
('Mujiba', 'bscs/3-20/010', 'bscs', 'java', '2022-08-04', '2022-08-10'),
('Muskan', 'bscs/3-20/0899', 'bscs', 'Computer', '2022-09-07', '2022-09-17'),
('Aria', 'bscs/3-20/099', 'dpt', 'anatomy', '2022-09-09', '2022-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`uname`, `email`, `password`, `cpassword`, `institute`) VALUES
('Muskan', '', 'muskan@123', 'muskan@123', 'bnbwu'),
('Muskan', 'muskantejwani@gmail.com', 'muskan@88', 'muskan@88', 'bnbwu'),
('Muskan', 'muskan1.21cs019@gmil.com', 'muskan', 'muskan', 'bnb');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`bookNo`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`enrollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `bookNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
