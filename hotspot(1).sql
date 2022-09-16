-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2016 at 05:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `ann_user` varchar(30) NOT NULL,
  `announce` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`ann_user`, `announce`) VALUES
('tomg', 'thinking about a party'),
('tomg', 'thinking about a party'),
('terica', 'yo'),
('terica', 'THROWING A PARTY SOON');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `event_number` int(7) NOT NULL,
  `user_attendee` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `user` varchar(30) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user`, `comments`) VALUES
('tomg', 'hey'),
('tomg', 'yo'),
('tomg', 'this is just a test'),
('terica', 'great party'),
('terica', 'IM THERE');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`event_id` int(7) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `event_date` varchar(12) DEFAULT NULL,
  `event_address` varchar(30) DEFAULT NULL,
  `event_city` varchar(30) DEFAULT NULL,
  `event_state` varchar(30) DEFAULT NULL,
  `event_zip` varchar(12) DEFAULT NULL,
  `event_time` varchar(7) DEFAULT NULL,
  `event_price` varchar(7) DEFAULT NULL,
  `event_private` char(1) DEFAULT NULL,
  `smoking_permitted` char(1) DEFAULT NULL,
  `drinks_provided` char(1) DEFAULT NULL,
  `food_provided` char(1) DEFAULT NULL,
  `music_type` varchar(25) NOT NULL,
  `event_organizer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_type`, `event_date`, `event_address`, `event_city`, `event_state`, `event_zip`, `event_time`, `event_price`, `event_private`, `smoking_permitted`, `drinks_provided`, `food_provided`, `music_type`, `event_organizer`) VALUES
(4, 'the turn up', 'pool party', '2016-04-30', '715 SMITH WAY', 'tallahassee', 'fla', '32351', '5pm', 'free', 'y', 'y', 'y', 'y', 'all', 'tomg'),
(8, 'turn up', 'pool party', '2016-04-30', '434 wahnish way', 'tallahassee', 'fl', '32307', '5pm', 'free', 'y', 'y', 'y', 'y', 'all', 'terica'),
(9, 'prince party', 'bbq', '2016-04-30', '715 prince drive', 'minneapolis', 'fla', '32307', '5pm', 'free', 'y', 'y', 'y', 'y', 'trap', 'bettysue'),
(10, 'tryout', 'afterparty', '2016-04-28', '715 smith street', 'quincy', 'fl', '32351', '2am', 'free', 'n', 'y', 'y', 'y', 'all', 'terica');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`group_id` int(7) NOT NULL,
  `group_name` varchar(40) NOT NULL,
  `group_creator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invite`
--

CREATE TABLE IF NOT EXISTS `invite` (
  `invite_id` int(7) NOT NULL,
  `invitee` varchar(30) NOT NULL DEFAULT '',
  `invite_ename` varchar(30) DEFAULT NULL,
  `attendance` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite`
--

INSERT INTO `invite` (`invite_id`, `invitee`, `invite_ename`, `attendance`) VALUES
(4, 'terica', 'tomg', ''),
(8, 'tomg', 'terica', '');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `group_number` int(7) NOT NULL,
  `group_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sender`, `receiver`, `content`) VALUES
('terica', 'tomg', 'hey'),
('tomg', 'terica', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `system_vers` varchar(15) NOT NULL,
  `system_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(30) NOT NULL DEFAULT '',
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `dob` varchar(12) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `first_name`, `last_name`, `dob`, `password`, `user_type`, `user_email`) VALUES
('admin', 'pat', 'smith', '', 'admin', 'admin', ''),
('bettysue', 'betty', 'sue', '1988-04-11', 'bettysue', 'socialyte', 'beety@sue.com'),
('john', 'tommy', 'gates', '2016-04-14', 'john', 'socialyte', 'a@mmg.com'),
('pat', 'patrick', 'smith', '1995-06-19', 'pat', 'socialyte', 'p@j.com'),
('pmanning', 'denver', 'bronco', '1993-05-12', 'pmanning', 'socialyte', 'manning@denver.com'),
('terica', 'tony', 'dawg', '1993-04-12', 'terica', 'socialyte', 'terica@gmail.com'),
('tomg', 'tom', 'gunz', '1992-01-03', 'tomg', 'socialyte', '2@tampa.com'),
('tony', 'tony', 'way', '1989-04-12', 'tony', 'socialyte', '1@j.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
 ADD KEY `ann_user` (`ann_user`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD KEY `event_number` (`event_number`), ADD KEY `user_attendee` (`user_attendee`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD KEY `user` (`user`), ADD KEY `user_2` (`user`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`event_id`), ADD KEY `event_organizer` (`event_organizer`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`group_id`), ADD KEY `group_creator` (`group_creator`);

--
-- Indexes for table `invite`
--
ALTER TABLE `invite`
 ADD PRIMARY KEY (`invite_id`,`invitee`), ADD UNIQUE KEY `invite_ename` (`invite_ename`), ADD KEY `invitee` (`invitee`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
 ADD PRIMARY KEY (`group_number`), ADD KEY `group_number` (`group_number`), ADD KEY `group_member` (`group_member`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD UNIQUE KEY `sender` (`sender`), ADD UNIQUE KEY `receiver` (`receiver`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_name`), ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `event_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `group_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`ann_user`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`user_attendee`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`event_number`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`event_organizer`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`group_creator`) REFERENCES `users` (`user_name`),
ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invite`
--
ALTER TABLE `invite`
ADD CONSTRAINT `invite_ibfk_1` FOREIGN KEY (`invite_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `invite_ibfk_2` FOREIGN KEY (`invitee`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`group_number`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`group_member`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
