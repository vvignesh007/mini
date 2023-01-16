-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 05:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `username`, `password`) VALUES
(1, 'Vignesh', '3701'),
(2, 'Vaishnavi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `uId` int(11) NOT NULL,
  `acc_no` int(20) NOT NULL,
  `IFSC` varchar(20) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `S_id` int(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `S_uname` varchar(20) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phno` bigint(25) NOT NULL,
  `Salary` int(20) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_id`, `Fname`, `Lname`, `S_uname`, `Sex`, `Address`, `Phno`, `Salary`, `type`) VALUES
(111, 'tejaswini', 'gowda', 'teju', 'female', 'ankola', 78548484, 10, 'savate'),
(112, 'sahana', 'devadiga', 'sahana', 'male', 'hebri', 93553533, 0, 'sanda'),
(113, 'shivaraj', 'shetty', 'shiva', 'male', 'ajekar', 4528689645, 1000, 'professional Boxing'),
(114, 'sathwik', 'rao', 'sathwik', 'male', 'belvai', 786524253, 1000, 'kickboxing'),
(115, 'santhosh', 'roy', 'santhu', 'male', 'chennai', 369852147, 1000, 'muay thai');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `user_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`user_id`, `username`, `password`) VALUES
(16, 'teju', '123'),
(17, 'sahana', '123'),
(18, 'shiva', '123'),
(19, 'sathwik', '123'),
(20, 'santhu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SSN` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Art_form` varchar(20) NOT NULL,
  `Blood` varchar(20) NOT NULL,
  `St_uname` varchar(20) NOT NULL,
  `Phno` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SSN`, `Fname`, `Lname`, `Sex`, `Art_form`, `Blood`, `St_uname`, `Phno`, `Address`) VALUES
('1074516547', 'shreya', 'poojary', 'female', 'savate', 'O+', 'shreya _poojary', '5589896555', 'kundapur'),
('1131915353', 'dhanush', 'prabhu', 'male', 'sanda', 'O+', 'dhanush_prabhu', '7896554125', 'mangalore'),
('1252185335', 'sweedal', 'dzouza', 'female', 'kickboxing', 'O+', 'sweedal_dzouza', '5187496265', 'udupi'),
('1483334822', 'ajith', 'kumar', 'male', 'muay thai', 'O+', 'ajith_kumar', '2841985956', 'chennai'),
('1528585552', 'surya', 'sivakumar', 'male', 'sanda', 'O+', 'surya_sivakumar', '789456123', 'chennai'),
('1678221802', 'vishal', 'kumar', 'male', 'sanda', 'AB-', 'vishal_kumar', '58587545515', 'bangalore'),
('1705453581', 'rakshan', 'nayak', 'male', 'professional Boxing', 'A+', 'rakshan_nayak', '2558388689', 'hebri'),
('1864689015', 'vinayak', 'nayak', 'male', 'savate', 'A+', 'vinayak_nayak', '4528896986', 'kundapur'),
('2039230375', 'sannidhi', 'mahesh', 'female', 'professional Boxing', 'A-', 'sannidhi_mahesh', '5253238638', 'koppa'),
('2099551387', 'yashas', 'gowda', 'male', 'professional Boxing', 'B+', 'yashas_gowda', '45227528636', 'gulbarga'),
('53185593', 'sourabha', 'jain', 'female', 'kickboxing', 'B+', 'sourabha_jain', '12455785896', 'moodubidri'),
('649715625', 'shravya', 'kotian', 'female', 'muay thai', 'AB+', 'shravya_kotian', '3688968825', 'kinigoli'),
('740231487', 'sai', 'krishna', 'male', 'kickboxing', 'AB+', 'sai_krishna', '14287586892', 'kasargood'),
('942528990', 'vijay', 'joseph', 'male', 'muay thai', 'O-', 'vijay_joseph', '56184896665', 'chennai'),
('95177267', 'anusha', 'devadiga', 'female', 'savate', 'AB+', 'anusha_devadiga', '2565328668', 'belthangadi');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `use_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`use_id`, `username`, `password`) VALUES
(53185593, 'sourabha_jain', '123'),
(95177267, 'anusha_devadiga', '123'),
(649715625, 'shravya_kotian', '123'),
(740231487, 'sai_krishna', '123'),
(942528990, 'vijay_joseph', '123'),
(1074516547, 'shreya _poojary', '123'),
(1131915353, 'dhanush_prabhu', '123'),
(1252185335, 'sweedal_dzouza', '123'),
(1483334822, 'ajith_kumar', '123'),
(1528585552, 'surya_sivakumar', '123'),
(1678221802, 'vishal_kumar', '123'),
(1705453581, 'rakshan_nayak', '123'),
(1864689015, 'vinayak_nayak', '123'),
(2039230375, 'sannidhi_mahesh', '123'),
(2099551387, 'yashas_gowda', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_desc` text NOT NULL,
  `t_type` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `t_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`t_id`, `t_name`, `t_desc`, `t_type`, `venue`, `date`, `t_img`) VALUES
(15, 'GOLDEN GLOVES ASSOCIATION', 'tournament for amateur', 'savate', 'karkala', '2023-01-13', 'IMG-63c13329c46820.98116747.jpg'),
(16, 'WORLD BOXING ASSOCIATION', 'open to all', 'sanda', 'udupi', '2023-01-13', 'IMG-63c135391925e6.97660430.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_regs`
--

CREATE TABLE `tour_regs` (
  `t_id` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`,`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`uId`,`acc_no`),
  ADD UNIQUE KEY `uId_UNIQUE` (`uId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`user_id`,`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tour_regs`
--
ALTER TABLE `tour_regs`
  ADD PRIMARY KEY (`t_id`,`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `S_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `use_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2099551388;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
