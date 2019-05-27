-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 02:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `lvl`
--

CREATE TABLE `lvl` (
  `id` int(11) NOT NULL,
  `lvlName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lvl`
--

INSERT INTO `lvl` (`id`, `lvlName`) VALUES
(1, 'admin'),
(2, 'non-admin');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectName` varchar(255) DEFAULT NULL,
  `projectType` varchar(255) DEFAULT NULL,
  `realisationDate` date DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `projectOnwer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectName`, `projectType`, `realisationDate`, `link`, `projectOnwer`) VALUES
(8, 'dice-Game', 'Game', '2018-02-20', 'https://github.com/44a6z22/Dice-Game', 2),
(9, 'learning php', 'website', '2019-05-02', 'https://github.com/44a6z22/learning-php', 2),
(10, 'group generator', 'website', '2019-03-22', 'https://github.com/44a6z22/groups-creator', 2);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skillName` varchar(255) DEFAULT NULL,
  `skillType` varchar(255) DEFAULT NULL,
  `persentage` int(11) DEFAULT NULL,
  `skillPicture` varchar(255) NOT NULL,
  `skillOwner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skillName`, `skillType`, `persentage`, `skillPicture`, `skillOwner`) VALUES
(3, 'PHP', 'backEnd', 90, 'kdflsd.SDfsd', 2),
(4, 'CSS', 'FrontEnd', 80, 'wfdsfds', 2),
(5, 'HTML', 'FrontEnd', 95, 'wfdsfds', 2),
(6, 'JavaScript', 'FrontEnd', 60, 'wfdsfds', 2),
(7, 'MySQL', 'backEnd', 70, 'wfdsfds', 2),
(8, 'SASS', 'frontEnd', 70, 'sdjfmjsd', 2),
(9, 'Python', 'backEnd', 30, 'lsdhflsdfsd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id` int(11) NOT NULL,
  `statName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`id`, `statName`) VALUES
(1, 'busy'),
(2, 'avaliable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pasword` varchar(255) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `birthDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `description`, `email`, `pasword`, `stat`, `lvl`, `birthDate`) VALUES
(2, 'HAMDAOUI HAMZA', 'I\'m a full stack developper for the last 2 years. in each new project i apply new techenologies for a more effective workflow', 'hhamdaoui31@gmail.com', '--__--__--', 2, 1, '1996-09-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lvl`
--
ALTER TABLE `lvl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`projectOnwer`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skilluser` (`skillOwner`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lvl` (`lvl`),
  ADD KEY `fk_stat` (`stat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lvl`
--
ALTER TABLE `lvl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`projectOnwer`) REFERENCES `users` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_skilluser` FOREIGN KEY (`skillOwner`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_lvl` FOREIGN KEY (`lvl`) REFERENCES `lvl` (`id`),
  ADD CONSTRAINT `fk_stat` FOREIGN KEY (`stat`) REFERENCES `stat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
