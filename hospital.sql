-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 06:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `dob` date NOT NULL,
  `eid` varchar(15) NOT NULL,
  `hid` varchar(15) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_role` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `duty_hours` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `doj` date NOT NULL,
  `spl` varchar(11) NOT NULL,
  `pexp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`dob`, `eid`, `hid`, `e_name`, `e_role`, `dept`, `contact_no`, `mail`, `duty_hours`, `gender`, `doj`, `spl`, `pexp`) VALUES
('2024-03-31', '1', '1', 'abc', 'surgeon', 'vet', 123, 'abc@gmail.com', 8, 'male', '2024-03-31', 'brain', 20),
('2024-03-31', '2', '1', 'xyz', 'driver', 'driving', 5678, 'xyz@gmail.com', 14, 'male', '2024-03-31', 'driving', 5);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `pid` varchar(11) NOT NULL,
  `hid` varchar(11) NOT NULL,
  `aid` varchar(11) NOT NULL,
  `a_date` date NOT NULL,
  `d_date` date NOT NULL,
  `wno` int(11) NOT NULL,
  `bed_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `pid`, `hid`, `aid`, `a_date`, `d_date`, `wno`, `bed_type`) VALUES
(1, '1', '1', '1', '2024-03-31', '2024-03-31', 1, 'Manual'),
(2, '2', '2', '2', '2024-03-31', '2024-03-31', 2, 'Fully_Electric'),
(4, '1', '1', '1', '2024-04-01', '2024-04-01', 1, 'Manual'),
(6, '3', '3', '3', '2024-03-31', '2024-03-31', 3, 'Semi_Electric');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `eid` varchar(15) NOT NULL,
  `hid` varchar(30) NOT NULL,
  `sal` int(10) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `eid`, `hid`, `sal`, `p_date`) VALUES
(1, '1', '1', 100, '2024-03-31'),
(2, '2', '2', 200, '2024-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid_rel` (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `eid_rel` FOREIGN KEY (`eid`) REFERENCES `emp_details` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
