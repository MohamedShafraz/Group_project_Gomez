-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2023 at 08:09 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomez_hc`
--

-- --------------------------------------------------------

--
-- Table structure for table `gm_admin`
--

DROP TABLE IF EXISTS `gm_admin`;
CREATE TABLE IF NOT EXISTS `gm_admin` (
  `GM_AD_ID` int NOT NULL AUTO_INCREMENT,
  `GM_AD_Name` varchar(45) NOT NULL,
  `GM_AD_Phone_Number` int NOT NULL,
  `GM_AD_User_Name` varchar(45) NOT NULL,
  `GM_APP_ID` varchar(10) NOT NULL,
  `GM_LAB_ID` varchar(10) NOT NULL,
  `GM_PAT_ID` varchar(10) NOT NULL,
  `GM_AD_Profile_Picture` mediumblob NOT NULL,
  `GM_AD_Security_Question` text NOT NULL,
  `GM_DOC_ID` varchar(10) NOT NULL,
  `GM_AD_Email` varchar(45) NOT NULL,
  `GM_Activity_log_ID` varchar(10) NOT NULL,
  `GM_User_Access_Level_ID` varchar(10) NOT NULL,
  `GM_AD_Password` varchar(64) NOT NULL,
  `GM_AD_Security_Question_Answer` text NOT NULL,
  PRIMARY KEY (`GM_AD_ID`),
  UNIQUE KEY `GM_DOC_ID` (`GM_DOC_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

DROP TABLE IF EXISTS `user_db`;
CREATE TABLE IF NOT EXISTS `user_db` (
  `User_Id` int NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  PRIMARY KEY (`User_Id`),
  UNIQUE KEY `User_Id` (`User_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`User_Id`, `Username`, `Password`, `Email`, `usertype`) VALUES
(1, 'Shaf', 'Shaf@234', 'Shaf@live.com', 'Admin'),
(2, 'Sam', 'Sam@123', 'Sam@live.com', 'Patient'),
(3, 'Saj', 'Saj@789', 'Saj@live.com', 'Doctor'),
(4, 'Malsh', 'Malsh@820', 'Malsh@live.com', 'Nurse'),
(5, 'Tharo', 'Tharo@875', 'Tharo@live.com', 'Receiptionist'),
(6, 'Bhag', 'Bhag@245', 'Bhag@live.com', 'Lab-Assistant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
