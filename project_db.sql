-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`) VALUES
('admin101', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointbooking`
--

CREATE TABLE `appointbooking` (
  `name` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `adate` date NOT NULL,
  `time` time NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointbooking`
--

INSERT INTO `appointbooking` (`name`, `phno`, `adate`, `time`, `msg`) VALUES
('Satyam', 8564701234, '2022-10-28', '17:11:00', 'I have fever and cold');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(30) NOT NULL,
  `fullName` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `fullName`, `email`, `password`) VALUES
('docto1', 'Doctor', 'doctor@gmail.com', '12345'),
('harish12@gmail.com', 'Harish Verma', 'harish@gmail.com', '3274'),
('lokesh690', 'Lokesh Gupta', 'lokesh@gmailcom', '37842'),
('manoj231', 'Manoj Singh', 'manoj@yahoo.com', '89432'),
('rahul2022', 'Dr Rahul Kumar', 'rahul2022@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `message`) VALUES
('Satyam', '1209satyam@gmail.com', 7382948493, 'I am facing some problem while logging to the system');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(30) NOT NULL,
  `fullName` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phoneNo` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `fullName`, `email`, `password`, `phoneNo`, `address`) VALUES
('kamlesh21', 'Kamlesh Kumar', 'kamlesh@gmail.com', '65749', 8574112341, 'Chappara, Bihar'),
('manoj2093', 'Manoj Pandey', 'manoj387@gmail.com', '894323', 8564307481, 'Birla Nagar, Near Bhonalya, Pakistan, India'),
('satyam12', 'Satyam', '1209satyam@gmail.com', '12345', 7586903492, 'XYZ Street, Near Maurya Market, India');

-- --------------------------------------------------------

--
-- Table structure for table `uploadtestresult`
--

CREATE TABLE `uploadtestresult` (
  `username` varchar(30) NOT NULL,
  `Pname` text NOT NULL,
  `Test` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploadtestresult`
--

INSERT INTO `uploadtestresult` (`username`, `Pname`, `Test`, `Description`) VALUES
('satyam12', 'Satyam', 'Blood Test', 'Nothing is there in the report that you have to worry about'),
('satyam12', 'Satyam', 'MRI', 'MUSCLE SPASMS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_username`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
