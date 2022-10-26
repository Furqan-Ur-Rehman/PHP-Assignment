-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 11:12 PM
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
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `EmpID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `ChoosePhoto` varchar(450) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CNIC` varchar(50) NOT NULL,
  `Education` varchar(50) NOT NULL,
  `Desgination` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Salary` decimal(15,2) NOT NULL,
  `DOB` date NOT NULL,
  `EmployeeEmail` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `DateofAppoint` date NOT NULL,
  `DateofJoin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`EmpID`, `FirstName`, `LastName`, `ChoosePhoto`, `Gender`, `CNIC`, `Education`, `Desgination`, `City`, `Salary`, `DOB`, `EmployeeEmail`, `Address`, `ContactNo`, `DateofAppoint`, `DateofJoin`) VALUES
(7, 'Azhar', 'Ahmed', 'images/gentle man6.jpg', 'Male', '4521-7845-2', 'Middle', 'Driver', 'Lahore', '45000.00', '2022-10-21', 'azhar675@gmail.com', 'L-265 Liaquatabad', '03427896541', '2022-10-21', '2022-10-21'),
(31, 'Sabir', 'Ansari', 'images/IMG-20210910-WA0018.jpg', 'Male', '4215-458652-2', 'BCS', 'Software Engineer', 'Karachi', '135000.00', '2022-10-25', 'sabiransari145@gmail.com', '452-A Gulberg, Karachi.', '03427896541', '2022-10-25', '2022-10-25'),
(32, 'Ehsan', 'Rehman', 'images/gentle man3.jpg', 'Male', '45678791254', 'BCS', 'Senior Software Engineer', 'Karachi', '250000.00', '2022-10-25', 'Ehsan@gmail.com', 'A-35, Block-8 Gulistan-e-Johar, Karachi.', '03427896541', '2022-10-25', '2022-10-25'),
(35, 'Muniba', 'Javed Khan', 'images/girl.jpg', 'Female', '4521-458765-5', 'BSSE', 'Senior Software Engineer', 'Karachi', '200000.00', '2022-10-26', 'Munibakhan430@gmail.com', 'N-928 Block-H North Nazimabad', '03467896324', '2022-10-26', '2022-10-26'),
(36, 'Furqan', 'Rehman', 'images/gentle man.jpg', 'Male', '4521-458765-5', 'BCS', 'Software Engineer', 'Karachi', '185000.00', '2022-10-26', 'furqan123@gmail.com', '452-A Gulberg, Karachi.', '03462584736', '2022-10-26', '2022-10-26'),
(37, 'Adnan', 'Rehman', 'images/gentle man3.jpg', 'Male', '4521-458765-5', 'DISM', 'Web Developer', 'Karachi', '175000.00', '2022-10-26', 'adnan@gmail.com', 'N-928 Sector 7/C', '03467896324', '2022-10-26', '2022-10-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`EmpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
