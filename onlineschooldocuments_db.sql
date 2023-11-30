-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 04:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineschooldocuments_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_decription` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_decription`, `date_created`) VALUES
(1, 'BS Computer Science', 'BS Computer Science', '2021-11-16 01:59:38'),
(2, 'BS Information Technology', 'BS Information Technology', '2021-11-16 01:59:38'),
(11, 'BS Accountancy', 'BS Accountancy', '2021-11-16 16:14:55'),
(12, 'bachelor of science in business administration', 'bachelor of science in business administration', '2021-11-19 02:30:51'),
(13, 'bachelor of science in hospitality management', 'bachelor of science in hospitality management', '2021-11-19 02:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `document_id` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_decription` varchar(255) NOT NULL,
  `image_size` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`document_id`, `document_name`, `document_decription`, `image_size`, `student_id`, `date_created`) VALUES
(15, 'student_uploads/GRADE.docx', 'sample1', '21098', 2, '2021-11-22 23:32:31'),
(16, 'student_uploads/Barangay-Information-System-in-PHP.docx', 'sample2', '743361', 2, '2021-11-22 23:32:45'),
(18, 'student_uploads/Report-2021-11-20-173623.doc', 'sampl6', '5560', 2, '2021-11-22 23:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documentrequest`
--

CREATE TABLE `tbl_documentrequest` (
  `request_id` int(11) NOT NULL,
  `control_no` varchar(255) NOT NULL,
  `studentID_no` varchar(255) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `no_ofcopies` varchar(255) NOT NULL,
  `date_request` varchar(255) NOT NULL,
  `date_releasing` varchar(255) NOT NULL,
  `processing_officer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_documentrequest`
--

INSERT INTO `tbl_documentrequest` (`request_id`, `control_no`, `studentID_no`, `document_name`, `no_ofcopies`, `date_request`, `date_releasing`, `processing_officer`, `status`, `remarks`, `student_id`, `notif`) VALUES
(1, 'CTRL-6922', 'STDNT-23983', 'TOR', '20 copies', '2021-11-23', '2021-11-26', 'Admin admin', 'Pending', '', 2, 1),
(2, 'CTRL-2902', 'STDNT-23983', 'DIPLOMA', '10 copies', '2021-11-22', '2021-11-29', 'Admin admin', 'Paid', '', 2, 1),
(3, 'CTRL-0335', 'STDNT-3363233', 'GRADING', '40 copies', '2021-11-24', '2021-11-26', 'Admin admin', 'Pending', '', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `control_no` text NOT NULL,
  `studentID_no` text NOT NULL,
  `document_name` text NOT NULL,
  `date_releasing` text NOT NULL,
  `ref_number` text NOT NULL,
  `total_amount` text NOT NULL,
  `amount_paid` text NOT NULL,
  `date_ofpayment` text NOT NULL,
  `proof_ofpayment` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `control_no`, `studentID_no`, `document_name`, `date_releasing`, `ref_number`, `total_amount`, `amount_paid`, `date_ofpayment`, `proof_ofpayment`, `student_id`, `status`) VALUES
(2, 'CTRL-0335', 'STDNT-23983', 'TOR', 'Nov 26, 2021', 'hbq0KQ8DlB', '3000', '5000', '2021-11-23', 'GCASH', 2, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `studentID_no` text NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `date_ofbirth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `complete_address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_status` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `studentID_no`, `first_name`, `middle_name`, `last_name`, `course`, `year_level`, `date_ofbirth`, `gender`, `complete_address`, `email_address`, `mobile_number`, `username`, `password`, `account_status`, `date_created`) VALUES
(2, 'STDNT-23983', 'maria cecilia', 'o', 'toledo', 'BS Accountancy', '1st Year', '2021-11-29', 'Female', 'mambugan', 'maria@gmail.com', '09365466666', 'maria', 'maria123', 'Active', '2021-11-18'),
(4, 'STDNT-0433220', 'emil', 'l', 'nario', 'BS Computer Science', '3rd Year', '2021-11-24', 'Male', 'francisville', 'nario@gmail.com', '09654646456', 'nario', 'nario', 'Active', '2021-11-18'),
(5, 'STDNT-3363233', 'angelica', 'f', 'altarejos', 'BS Computer Science', '4th Year', '2021-11-18', 'Female', 'bulacan', 'angel@gmail.com', '09756757777', 'angel', 'angel', 'Active', '2021-11-18'),
(6, 'STDNT-2300340', 'erlin', 's', 'nidea', 'bachelor of science in business administration', '4th Year', '2021-11-19', 'Female', 'quezon city', 'nidea@gmail.com', '09987979888', 'erlin', 'erlin', 'Active', '2021-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermanagement`
--

CREATE TABLE `tbl_usermanagement` (
  `user_id` int(11) NOT NULL,
  `complete_name` varchar(255) NOT NULL,
  `desgination` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usermanagement`
--

INSERT INTO `tbl_usermanagement` (`user_id`, `complete_name`, `desgination`, `email_address`, `phone_number`, `username`, `password`, `status`, `role`) VALUES
(1, 'admin admin', 'programmer', 'admin@gmail.com', '09978978999', 'admin', 'admin', 'Active', 'Administrator'),
(2, 'junil toledo', 'programmer', 'nel@gmail.com', '09686787888', 'nel', 'nel123', 'Active', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `tbl_documentrequest`
--
ALTER TABLE `tbl_documentrequest`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_usermanagement`
--
ALTER TABLE `tbl_usermanagement`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_documentrequest`
--
ALTER TABLE `tbl_documentrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_usermanagement`
--
ALTER TABLE `tbl_usermanagement`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
