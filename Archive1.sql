-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2020 at 05:09 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indieliv_Streams`
--

-- --------------------------------------------------------

--
-- Table structure for table `Archive`
--

CREATE TABLE `Archive` (
  `ID` int(11) NOT NULL,
  `artistName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `streamDate` date NOT NULL,
  `streamTime` text NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Archive`
--

INSERT INTO `Archive` (`ID`, `artistName`, `streamDate`, `streamTime`, `link`, `genre`, `platform`) VALUES
(12, 'Juke Knobz', '2020-07-01', '18:00:00', 'https://www.youtube.com/partyguruTV', 'DJ/House/Trap', 'YouTube'),
(16, 'Ebenezer Jay Ingalsbe', '2020-05-28', '06:30:00', 'https://www.facebook.com/events/707343396694414/', 'Indie Folk', 'Facebook'),
(17, 'Ebenezer Jay Ingalsbe', '2020-06-03', '06:00:00', 'https://www.facebook.com/events/707343396694414/', 'Indie Folk', 'Facebook'),
(21, 'XOA (Jamcast)', '2020-05-29', '04:00:00', 'https://www.jamcastnetwork.com/', 'Prog/Jam/Dance', 'jamcast network'),
(22, 'XOA (Jamcast)', '2020-05-30', '04:00:00', 'https://www.jamcastnetwork.com/', 'Prog/Jam/Dance', 'jamcast network'),
(23, 'XOA (Jamcast)', '2020-05-31', '04:00:00', 'https://www.jamcastnetwork.com/', 'Prog/Jam/Dance', 'jamcast network');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Archive`
--
ALTER TABLE `Archive`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Archive`
--
ALTER TABLE `Archive`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
