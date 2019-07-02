-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 06:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu_students_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `AUTHORITY_ID` int(10) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PHONE_NUMBER` varchar(20) DEFAULT NULL,
  `LIST_ACCEPTED_STD` varchar(20) DEFAULT NULL,
  `LIST_REJECTED_STD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

CREATE TABLE `installment` (
  `Installment_no` int(10) NOT NULL,
  `Late_ins_no` int(10) DEFAULT NULL,
  `Installment_period` varchar(25) NOT NULL,
  `Punishment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan_info`
--

CREATE TABLE `loan_info` (
  `Loan_type` varchar(10) NOT NULL,
  `Amount` int(20) DEFAULT NULL,
  `Installment` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students_account`
--

CREATE TABLE `students_account` (
  `STUDENT_ID` int(10) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PHONE_NUMBER` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Current_Trimester` int(10) NOT NULL,
  `Credit_Com` int(10) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_account`
--

INSERT INTO `students_account` (`STUDENT_ID`, `EMAIL`, `PHONE_NUMBER`, `Username`, `Password`, `Current_Trimester`, `Credit_Com`, `id`) VALUES
(11161040, 'sislam161040@bscse.uiu.ac', '01700864847', 'sadia', '1234567', 10, 78, 1),
(11161041, 'mhassan161041@bscse.uiu.a', '01778770533', 'Mamun', '54321', 10, 81, 2),
(11161132, 'datta161132@bscse.uiu.ac.', '01688158855', 'tithi', '123456', 10, 78, 3),
(11161161, 'mzbornav1@gmail.com', '01558016661', 'Bornav', '654321', 10, 78, 4),
(11161215, 'pps@gmail.com', '01676772959', 'pps', '987456', 10, 10, 21),
(11161231, 'partho_pps@outlook.com', '0', 'pps', '123', 10, 10, 5),
(111611201, 'partho@outlook.com', '0', 'pps', '852', 10, 10, 22),
(111611219, 'partho_pps@gmail.com', '0', 'pps', '123456789', 10, 10, 20),
(111611291, 'pps@outlook.com', '01676772959', 'pps', '753', 10, 10, 23),
(111621219, 'partho_pps@google.com', '01676772959', 'pps', '159', 10, 10, 24);

-- --------------------------------------------------------

--
-- Table structure for table `take_loan`
--

CREATE TABLE `take_loan` (
  `Serial` int(10) NOT NULL,
  `Loan_t` varchar(10) DEFAULT NULL,
  `Student_info` int(10) DEFAULT NULL,
  `Reason` varchar(25) NOT NULL,
  `Application_up` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`AUTHORITY_ID`);

--
-- Indexes for table `installment`
--
ALTER TABLE `installment`
  ADD PRIMARY KEY (`Installment_no`);

--
-- Indexes for table `loan_info`
--
ALTER TABLE `loan_info`
  ADD PRIMARY KEY (`Loan_type`),
  ADD KEY `Ins` (`Installment`);

--
-- Indexes for table `students_account`
--
ALTER TABLE `students_account`
  ADD PRIMARY KEY (`STUDENT_ID`),
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `Password_2` (`Password`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `take_loan`
--
ALTER TABLE `take_loan`
  ADD PRIMARY KEY (`Serial`),
  ADD KEY `L_T` (`Loan_t`),
  ADD KEY `S_I` (`Student_info`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_account`
--
ALTER TABLE `students_account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_info`
--
ALTER TABLE `loan_info`
  ADD CONSTRAINT `Ins` FOREIGN KEY (`Installment`) REFERENCES `installment` (`Installment_no`);

--
-- Constraints for table `take_loan`
--
ALTER TABLE `take_loan`
  ADD CONSTRAINT `L_T` FOREIGN KEY (`Loan_t`) REFERENCES `loan_info` (`Loan_type`),
  ADD CONSTRAINT `S_I` FOREIGN KEY (`Student_info`) REFERENCES `students_account` (`STUDENT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
