-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 12:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysarchact`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `diaryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `diaryCreated` datetime NOT NULL,
  `diaryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`diaryID`, `userID`, `status`, `diaryCreated`, `diaryName`) VALUES
(9, 12, 'Active', '2023-04-26 00:00:00', 'Diary Ni Elei'),
(26, 14, 'Inactive', '2023-04-29 16:27:49', 'Diary ni Seth Nimrod'),
(27, 1, 'Active', '2023-05-02 10:22:25', 'Test Diary');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `storyID` int(11) NOT NULL,
  `diaryID` int(11) NOT NULL,
  `storyDate` varchar(50) NOT NULL,
  `storyMessage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`storyID`, `diaryID`, `storyDate`, `storyMessage`) VALUES
(14, 9, '2023-04-28 21:43:11', 'Kapoy na mag IT. Pero syempre kasalanan ko to.'),
(24, 27, '2023-05-02 10:56:07', 'This is a test Story.'),
(25, 27, '2023-05-02 10:56:48', 'Dearest love of mine, there is not a star in the expanse of the universe that could shine as bright as you do. I hope that you have the best possible day and the sweetest dreams tonight.\r\n\r\nLoving you is like an addiction to me. Every moment I spend loving you is like the moments I spend in heaven. The day I will stop loving you is the day I die. I love you more than myself. keep up that sweet smile on your face always!\r\n\r\nYou are astonishing. Every time I look at you, I am breathless. You fill me with a euphoric feeling, and I can exhale again. I hope to have my breath taken away every day for the rest of my life.\r\n\r\nI want to take this opportunity to thank you, sweetheart. Thank you for everything you have ever done for me. Thank you for choosing me over a billion others. Thank you for accepting and loving me unconditionally. Thank you for your attention. Thank you for the laughs we share every time we are together. Thank you for being my rock in my most challenging times. Thank you for being my sunshine when I was in the shade. I treasure and cherish you.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `lastLoginDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userPassword`, `firstName`, `lastName`, `lastLoginDate`) VALUES
(1, 'emman', 'emman', 'Emmanuel', 'Espinosa', '2023-04-19 18:22:14'),
(2, 'wennacakes', 'gwapako123', 'Winna', 'Velignaio', '2023-04-19 18:22:37'),
(4, 'elei', 'elei', 'Elei', 'Tatad', '2023-04-20 11:13:30'),
(6, 'Charles_c', '1234', 'Shio', 'xcx', '2023-04-20 11:24:00'),
(12, 'matio', '123456', 'elei', 'tatad', '2023-04-26 13:11:56'),
(14, 'seth123', '12345', 'Seth Nimrod 12', 'Gilbuena', '2023-04-29 16:27:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`diaryID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`storyID`),
  ADD KEY `diaryID` (`diaryID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `diaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `storyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diary`
--
ALTER TABLE `diary`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `diaryID` FOREIGN KEY (`diaryID`) REFERENCES `diary` (`diaryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
