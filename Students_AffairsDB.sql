-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 03:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StudentAffairs`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `Level_ID` int(11) NOT NULL,
  `Level_Name` varchar(60) NOT NULL,
  `Level_Tables` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
--
-- Table structure for table `level_department`
--

CREATE TABLE `level_department` (
  `Department_ID` int(11) NOT NULL,
  `Department_Name` varchar(60) NOT NULL,
  `Department_Title` varchar(60) NOT NULL,
  `Department_Description` text NOT NULL,
  `Department_File` varchar(60) NOT NULL,
  `Department_Level_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(11) NOT NULL,
  `News_Student_SSN` varchar(100) NOT NULL,
  `News_Title` varchar(150) NOT NULL,
  `News_Body` longtext NOT NULL,
  `News_Link` varchar(255) DEFAULT NULL,
  `News_Other_Link` varchar(255) DEFAULT NULL,
  `News_Image` varchar(255) DEFAULT NULL,
  `News_Visible` tinyint(4) NOT NULL DEFAULT '0',
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Request_ID` int(11) NOT NULL,
  `Request_Student_ID` int(11) NOT NULL,
  `Request_Student_Code` varchar(15) NOT NULL,
  `Requester_Email` varchar(150) NOT NULL,
  `Request_Level_ID` int(11) NOT NULL,
  `Request_Dept_ID` int(11) NOT NULL,
  `Request_Wish_ID` int(11) NOT NULL,
  `Request_Division` varchar(50) NOT NULL,
  `Request_Classification` int(100) NOT NULL,
  `Request_Other_Title` varchar(100) DEFAULT 'Nothing',
  `Request_Priority` varchar(50) NOT NULL,
  `Request_Organization` varchar(150) DEFAULT NULL,
  `Position_Recruitment` varchar(60) DEFAULT NULL,
  `Request_Body` text NOT NULL,
  `Request_Image` varchar(255) NOT NULL,
  `Request_Other_Image` varchar(255) DEFAULT NULL,
  `Request_Code` int(11) NOT NULL,
  `Request_Date` date NOT NULL,
  `Request_Status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `respons_to_request`
--

CREATE TABLE `respons_to_request` (
  `Respons_ID` int(11) NOT NULL,
  `Requester_Replay` varchar(255) NOT NULL,
  `Requester_message` text NOT NULL,
  `Request_Image` varchar(255) NOT NULL,
  `Respons_Request_ID` int(11) NOT NULL,
  `Respons_Staff_SSN` varchar(100) NOT NULL,
  `Response_Request_Code` int(11) NOT NULL,
  `Date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `File` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `Student_SSN` varchar(100) NOT NULL,
  `Student_Name` varchar(250) NOT NULL,
  `Student_Email` varchar(250) NOT NULL,
  `Student_Phone` int(11) NOT NULL,
  `Student_Code` varchar(20) DEFAULT NULL,
  `Student_Address` varchar(250) DEFAULT NULL,
  `Student_Type` varchar(50) NOT NULL,
  `Student_Level_ID` int(11) NOT NULL,
  `Student_Gender` varchar(10) NOT NULL,
  `Student_GPA` varchar(50) DEFAULT NULL,
  `Date` date NOT NULL,
  `Student_Accept` int(11) NOT NULL DEFAULT '0',
  `Student_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `wish_statment`
--

CREATE TABLE `wish_statment` (
  `Wish_ID` int(11) NOT NULL,
  `Wish_Name` varchar(60) NOT NULL,
  `Wish_File` varchar(255) NOT NULL,
  `Wish_Department_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`Level_ID`);


--
-- Indexes for table `level_department`
--
ALTER TABLE `level_department`
  ADD PRIMARY KEY (`Department_ID`),
  ADD KEY `Department_Level_ID` (`Department_Level_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`),
  ADD KEY `News_Student_SSN` (`News_Student_SSN`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `Request_Level_ID` (`Request_Level_ID`),
  ADD KEY `Request_Dept_ID` (`Request_Dept_ID`),
  ADD KEY `Request_Student_ID` (`Request_Student_ID`),
  ADD KEY `Wish_ID` (`Request_Wish_ID`),
  ADD KEY `Request_Classification` (`Request_Classification`);

--
-- Indexes for table `respons_to_request`
--
ALTER TABLE `respons_to_request`
  ADD PRIMARY KEY (`Respons_ID`),
  ADD KEY `Respons_Request_ID` (`Respons_Request_ID`),
  ADD KEY `Respons_Staff_SSN` (`Respons_Staff_SSN`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`),
  ADD UNIQUE KEY `Student_SSN` (`Student_SSN`),
  ADD UNIQUE KEY `Student_Email` (`Student_Email`),
  ADD KEY `Student_Level_ID` (`Student_Level_ID`);



--
-- Indexes for table `wish_statment`
--
ALTER TABLE `wish_statment`
  ADD PRIMARY KEY (`Wish_ID`),
  ADD KEY `Wish_Department_ID` (`Wish_Department_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `Level_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `levels_department`
--
ALTER TABLE `levels_department`
  MODIFY `Department_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `level_department`
--
ALTER TABLE `level_department`
  MODIFY `Department_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `respons_to_request`
--
ALTER TABLE `respons_to_request`
  MODIFY `Respons_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


--
-- AUTO_INCREMENT for table `wish_statment`
--
ALTER TABLE `wish_statment`
  MODIFY `Wish_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--


--
-- Constraints for table `level_department`
--
ALTER TABLE `level_department`
  ADD CONSTRAINT `level_department_ibfk_1` FOREIGN KEY (`Department_Level_ID`) REFERENCES `levels` (`Level_ID`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`News_Student_SSN`) REFERENCES `student` (`Student_SSN`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `Wish_ID` FOREIGN KEY (`Request_Wish_ID`) REFERENCES `wish_statment` (`Wish_ID`),
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`Request_Level_ID`) REFERENCES `levels` (`Level_ID`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`Request_Dept_ID`) REFERENCES `level_department` (`Department_ID`),
  ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`Request_Student_ID`) REFERENCES `student` (`Student_ID`),
  ADD CONSTRAINT `services_ID` FOREIGN KEY (`Request_Classification`) REFERENCES `services` (`ID`);

--
-- Constraints for table `respons_to_request`
--
ALTER TABLE `respons_to_request`
  ADD CONSTRAINT `respons_to_request_ibfk_1` FOREIGN KEY (`Respons_Request_ID`) REFERENCES `request` (`Request_ID`),
  ADD CONSTRAINT `respons_to_request_ibfk_2` FOREIGN KEY (`Respons_Staff_SSN`) REFERENCES `student` (`Student_SSN`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Student_Level_ID`) REFERENCES `levels` (`Level_ID`);

--
-- Constraints for table `wish_statment`
--
ALTER TABLE `wish_statment`
  ADD CONSTRAINT `wish_statment_ibfk_1` FOREIGN KEY (`Wish_Department_ID`) REFERENCES `level_department` (`Department_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;