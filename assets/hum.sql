-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 10:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hum`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_members`
--

CREATE TABLE `active_members` (
  `ID` int(11) NOT NULL,
  `members` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_members`
--

INSERT INTO `active_members` (`ID`, `members`) VALUES
(1, 'Dr. Asma Begum'),
(2, 'Md. Murshikul Alam'),
(3, 'Dr. Shahnaz Pervin'),
(4, 'Dr. Md. Abdur Rouf'),
(5, 'Hosne Jahan'),
(6, 'Khanam Nargis Sultana'),
(7, 'Syed Mahbub Rahman'),
(8, 'Dr. Mizanur Rahman'),
(9, 'Md. Rafiuz Zaman'),
(10, 'Nishat Sultana'),
(11, 'Dr. Sharmin Chowdhury'),
(12, 'Farhana Habib'),
(13, 'Nazmul Huda'),
(14, 'Sabrina Yousuf'),
(15, 'Mosammat Fariha');

-- --------------------------------------------------------

--
-- Table structure for table `dept_head`
--

CREATE TABLE `dept_head` (
  `ID` int(11) NOT NULL,
  `sl` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tenure` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `name`, `profession`, `field`, `contact`, `email`, `email2`, `cv`, `website`, `img`) VALUES
(13, 'Dr. Asma Begum', 'Professor (Sociology)', 'Gender, Environment', '', 'abegum@hum.buet.ac.bd', '', '', 'https://abegum.buet.ac.bd/', 'Dr.Asma_Begum.jpg'),
(14, 'Md. Murshikul Alam', 'Associate Professor (English)', 'English for Specific Purposes (ESP), especially Academic Writing; Grammar; Victorian Novel, especially Thomas Hardy.', '', 'malam@hum.buet.ac.bd', '', '', 'https://malam.buet.ac.bd/', 'Md-Murshikul-Alam.png'),
(15, 'Dr. Shahnaz Pervin', 'Associate Professor & Head (Political Science)', 'Local Government, Civil Society, Governance and Development, Public Policy.', '', 'shahnazpervin@hum.buet.ac.bd', '', '', 'https://shahnazpervin.buet.ac.bd//', 'Dr._Shahanaz_Pervin.jpg'),
(16, 'Hosne Jahan', 'Assistant Professor (Accounting)', '', '', 'hjahan@hum.buet.ac.bd', '', '', 'https://jahan.buet.ac.bd/', 'No_Picture_Available.png'),
(17, 'Khanam Nargis Sultana', 'Assistant Professor (English)', '', '', 'sultana@hum.buet.ac.bd', 'khanamnargissultana@gmail.com', '', 'https://sultana.buet.ac.bd/', 'Khanam_Nargis_Sultana.JPG'),
(18, 'Dr. Md. Abdur Rouf', 'Associate Professor (Economics)', 'Microeconomics, Applied Econometrics,Macroeconomic Policy Instruments and Economic Modelling,Project Evaluation', '', 'arouf@hum.buet.ac.bd', '', '', 'https://arouf.buet.ac.bd/', 'md_abdur_rouf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_2`
--

CREATE TABLE `faculty_2` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_3`
--

CREATE TABLE `faculty_3` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`ID`, `name`, `image`) VALUES
(2, 'Dr. Shahnaz Pervin', 'Head_Of_The_Department.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hum_admin`
--

CREATE TABLE `hum_admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hum_admin`
--

INSERT INTO `hum_admin` (`ID`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hum_news`
--

CREATE TABLE `hum_news` (
  `ID` int(11) NOT NULL,
  `news` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hum_news`
--

INSERT INTO `hum_news` (`ID`, `news`, `status`) VALUES
(4, 'news has been added', '1'),
(6, 'News 2 is going here', ''),
(7, 'news has been added', '');

-- --------------------------------------------------------

--
-- Table structure for table `inactive_members`
--

CREATE TABLE `inactive_members` (
  `ID` int(11) NOT NULL,
  `member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inactive_members`
--

INSERT INTO `inactive_members` (`ID`, `member`) VALUES
(3, 'Nazmul Islam');

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `ID` int(11) NOT NULL,
  `info` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_members`
--
ALTER TABLE `active_members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dept_head`
--
ALTER TABLE `dept_head`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty_2`
--
ALTER TABLE `faculty_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty_3`
--
ALTER TABLE `faculty_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hum_admin`
--
ALTER TABLE `hum_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hum_news`
--
ALTER TABLE `hum_news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inactive_members`
--
ALTER TABLE `inactive_members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_members`
--
ALTER TABLE `active_members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dept_head`
--
ALTER TABLE `dept_head`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `faculty_2`
--
ALTER TABLE `faculty_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_3`
--
ALTER TABLE `faculty_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hum_admin`
--
ALTER TABLE `hum_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hum_news`
--
ALTER TABLE `hum_news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inactive_members`
--
ALTER TABLE `inactive_members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `office_staff`
--
ALTER TABLE `office_staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
