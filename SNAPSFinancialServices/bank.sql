-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 08:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `accnumber` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `phone`, `address`, `accnumber`, `username`, `password`, `email`) VALUES
('KALYAN', 2147483647, 'Kovvur West godavari', '123568970', 'kalyan1', 'saiprasad98', 'sismo98@gmail.com'),
('MOHAN', 78975785, 'Kovvur West godavari', '12687', 'Mohan', 'Saiprasad98', 'saiprasadsomanchi@gmail.com'),
('SaiNihith1', 2147483647, 'thunderstones', '43763737', 'Nihith', 'Nihith98', 'sainihith@gmail.com'),
('nishinth', 2147483647, 'kollam', '58585858', 'nishanth', 'Nishanth98', 'sainihith@gmail.com'),
('Saiprasad Somanchi', 2147483647, 'hyd', '62471655585', 'Saiprasad98', 'Saiprasad98', 'saiprasadsomanchi@gmail.com'),
('Saiprasad', 2147483647, 'Kovvur West godavari', '88875987', 'Alex2', '12356789', 'saiprasadsomanchi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `accountdetails`
--

CREATE TABLE `accountdetails` (
  `accountnumber` varchar(15) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountdetails`
--

INSERT INTO `accountdetails` (`accountnumber`, `balance`) VALUES
('123568970', 486100),
('12687', 293130),
('166555565565165', 30000),
('43763737', 91500),
('62471655585', 10000),
('88875987', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminuser` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminuser`, `pass`, `email`) VALUES
('ak', '123', 'sismo98@gmail.com'),
('sp', '127', 'saiprasadsomanchi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`Name`, `Designation`, `username`) VALUES
('Sai Prasad Somanchi', 'Manager', 'ak');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ID` int(10) NOT NULL,
  `accountnumber` varchar(15) NOT NULL,
  `complaint` varchar(250) NOT NULL,
  `complainttype` varchar(50) NOT NULL,
  `response` varchar(100) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ID`, `accountnumber`, `complaint`, `complainttype`, `response`, `Name`, `Designation`) VALUES
(27, '12687', 'not working', 'ATM Related', 'we will figure out this issue', 'Sai Prasad Somanchi', 'Manager'),
(28, '12687', 'My balance deducted twice', 'ATM Related', 'meet in bank', 'Sai Prasad Somanchi', 'Manager'),
(29, '123568970', 'atm card missing', 'ATM Related', 'null', 'null', 'null'),
(31, '62471655585', 'amount deducted twice', 'General Banking', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `loanpending`
--

CREATE TABLE `loanpending` (
  `accountnumber` varchar(15) NOT NULL,
  `balanceamount` int(11) NOT NULL,
  `Id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanpending`
--

INSERT INTO `loanpending` (`accountnumber`, `balanceamount`, `Id`) VALUES
('12687', 670, 54),
('43763737', 500, 55);

-- --------------------------------------------------------

INSERT INTO `cardspending` (`accountnumber`, `balanceamount`, `Id`) VALUES
('12687', 670, 1),
('43763737', 500, 6);


--
-- Table structure for table `loanrequests`
--

CREATE TABLE `loanrequests` (
  `id` int(100) NOT NULL,
  `accountnumber` varchar(15) NOT NULL,
  `loantype` varchar(50) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `response` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanrequests`
--

INSERT INTO `loanrequests` (`id`, `accountnumber`, `loantype`, `amount`, `response`) VALUES
(27, '12687', 'Vehicle Loan', 100000, 's'),
(28, '12687', 'Vehicle Loan', 100, 's'),
(30, '12687', 'Education Loan', 50000, 's'),
(31, '123568970', 'Education Loan', 100000, 's'),
(33, '62471655585', 'Education Loan', 1000, 's'),
(39, '123568970', 'Education Loan', 10000, 's'),
(51, '62471655585', 'Education Loan', 1000, 's'),
(52, '12687', 'Education Loan', 100, 's'),
(53, '12687', 'Education Loan', 10000, 's'),
(54, '12687', 'Education Loan', 1000, 's'),
(55, '43763737', 'Education Loan', 1000, 's');

INSERT INTO `cardrequests` (`id`, `accountnumber`, `cardtype`, `amount`, `response`) VALUES
(1, '12687', 'Coroporate Card', 100000, 's'),
(2, '12687', 'Credit Card', 100, 's'),
(3, '12687', 'Debit Card', 50000, 's'),
(4, '123568970', 'Debit Card', 100000, 's'),
(5, '62471655585', 'Debit Card', 1000, 's'),
(6, '123568970', 'Credit Card', 10000, 's')

-- --------------------------------------------------------

--
-- Table structure for table `loans_types`
--

CREATE TABLE `loans_types` (
  `Loanname` varchar(50) NOT NULL,
  `Range_of_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loans_types`
--

INSERT INTO `loans_types` (`Loanname`, `Range_of_amount`) VALUES
('Education Loan', '1000000'),
('Housing Loan', '100000'),
('Personal Loan', '100000'),
('Vehicle Loan', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('2588', '2355'),
('555', '555'),
('789', '789'),
('Alex123', '789456123'),
('sp', '1235');

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `ID` int(254) NOT NULL,
  `Sender_accnum` varchar(12) NOT NULL,
  `Receiver_accnum` varchar(12) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`ID`, `Sender_accnum`, `Receiver_accnum`, `amount`) VALUES
(1, '12867', '12365789', 10000),
(2, '12687', '123568970', 50000),
(3, '123568970', '12687', 50000),
(4, '123568970', '123568970', 100),
(5, '12687', '123568970', 100000),
(6, '12687', '123568970', 100000),
(7, '12687', '123568970', 100000),
(8, '12687', '123568970', 1000),
(9, '62471655585', '12687', 1000),
(10, '62471655585', '123568970', 50000),
(11, '62471655585', '12687', 1000),
(12, '12687', '123568970', 5000),
(13, '12687', '12687', 5000),
(14, '43763737', '123568970', 10000),
(15, '43763737', '43763737', 100),
(16, '43763737', '43763737', 1000),
(17, '12687', 'null', 10),
(18, '12687', 'null', 100),
(19, '12687', 'null', 10),
(20, '12687', 'null', 10),
(21, '12687', 'null', 900),
(22, '12687', 'null', 100),
(23, '12687', 'null', 100),
(24, '12687', 'null', 800),
(25, '12687', 'null', 800),
(26, '12687', 'null', 800),
(27, '12687', 'null', 800),
(28, '12687', 'null', 800),
(29, '12687', 'null', 800),
(30, '12687', 'null', 800),
(31, '12687', 'null', 800),
(32, '12687', 'null', 800),
(33, '12687', 'null', 800),
(34, '12687', 'null', 800),
(35, '12687', 'null', 800),
(36, '12687', 'null', 800),
(37, '12687', 'null', 10),
(38, '12687', 'null', 10),
(39, '12687', 'null', 10),
(40, '12687', 'null', 10),
(41, '12687', 'null', 10),
(42, '12687', 'null', 10),
(43, '12687', 'null', 10),
(44, '12687', 'null', 10),
(45, '12687', 'null', 10),
(46, '12687', 'null', 10),
(47, '12687', 'null', 10),
(48, '12687', 'null', 100),
(49, '12687', 'null', 100),
(50, '43763737', 'null', 100),
(51, '43763737', 'null', 100),
(52, '12687', 'null', 10),
(53, '12687', '43763737', 100),
(54, '43763737', '12687', 100),
(55, '43763737', 'null', 100),
(56, '43763737', 'null', 100),
(57, '43763737', 'null', 100),
(58, '43763737', 'null', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accnumber`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `accountdetails`
--
ALTER TABLE `accountdetails`
  ADD PRIMARY KEY (`accountnumber`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminuser`,`pass`);

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `accountnumber` (`accountnumber`);

--
-- Indexes for table `loanpending`
--
ALTER TABLE `loanpending`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `loanrequests`
--
ALTER TABLE `loanrequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accountnumber` (`accountnumber`);

--
-- Indexes for table `loans_types`
--
ALTER TABLE `loans_types`
  ADD PRIMARY KEY (`Loanname`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `loanrequests`
--
ALTER TABLE `loanrequests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `ID` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD CONSTRAINT `admindetails_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`adminuser`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`accountnumber`) REFERENCES `account` (`accnumber`);

--
-- Constraints for table `loanpending`
--
ALTER TABLE `loanpending`
  ADD CONSTRAINT `loanpending_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `loanrequests` (`ID`);
  
ALTER TABLE `cardspending`
  ADD CONSTRAINT `cardspending_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `cardrequests` (`ID`);


ALTER TABLE `cardrequests`
  ADD CONSTRAINT `cardrequests_ibfk_1` FOREIGN KEY (`accountnumber`) REFERENCES `accountdetails` (`accountnumber`);
COMMIT;
--
-- Constraints for table `loanrequests`
--
ALTER TABLE `loanrequests`
  ADD CONSTRAINT `loanrequests_ibfk_1` FOREIGN KEY (`accountnumber`) REFERENCES `accountdetails` (`accountnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
