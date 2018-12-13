-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 05:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `riddikulus`
--

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
`issues_id` int(9) NOT NULL,
  `category` varchar(25) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `image` longblob,
  `sound` varchar(20) DEFAULT NULL,
  `loc_latitude` double DEFAULT NULL,
  `loc_longitude` double DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_issue` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_action` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_resolved` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `upvote` int(11) DEFAULT NULL,
  `downvote` int(11) DEFAULT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issues_id`, `category`, `contact_no`, `description`, `image`, `sound`, `loc_latitude`, `loc_longitude`, `status`, `date_issue`, `date_action`, `date_resolved`, `upvote`, `downvote`, `comments`) VALUES
(17, 'Women safety', '1111111111', 'Qwesdfrd', '', 'medium', 18.957732932266254, 72.8094513762951, 'Resolved', '2018-10-06 06:00:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, 1, 'place not safe foe women'),
(18, 'Crime safety', '1212121212', 'avrertj rynxd', '', 'normal', 19.013995660302193, 72.8649243569696, 'Resolved', '2018-10-06 06:00:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 2, 'chain Snatching a common thing'),
(19, 'Women safety', '1212121212', 'umtnyhbgfvd', '', 'high', 18.972216956349612, 72.8301280449291, 'Not resolved', '2018-10-06 06:02:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 17, 0, 'unsafe at night time'),
(20, 'Noise Pollution', '1111111111', 'mtynrtbgrv', '', 'medium', 18.987287057145863, 72.83754207804418, 'Not resolved', '2018-10-06 06:02:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 37, 1, 'too Overcrowded with hawkers'),
(22, 'Damaged Infrastructure', '9988776655', 'i6ujyhtbg', '', 'Extreamly high', 18.977646147061236, 72.84399032592773, 'Not resolved', '2018-10-06 06:02:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 5, 'cracks under flyover'),
(23, 'Garbage', '9988776655', 'koiujyhtgrf', '', 'normal', 19.03161239237521, 72.85866737365723, 'Not resolved', '2018-10-06 06:03:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 25, 'foul smell affecting small childern near garden'),
(26, 'Damaged Infrastructure', '9988776655', 'oukjyuhgf', '', 'medium', 19.02559691196033, 72.88551726126877, 'Not resolved', '2018-10-06 06:03:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 24, 3, 'fallen tree'),
(27, 'Potholes', '9988776655', 'nbgvfdc', '', 'medium', 18.96234222952174, 72.81857886774719, 'Not resolved', '2018-10-06 06:03:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 21, 7, 'accidents due to potholes'),
(28, 'Potholes', '9988776655', 'nbgvfdc', '', 'medium', 18.96234222952174, 72.81857886774719, 'Not resolved', '2018-10-06 06:03:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 0, 'repairing of roads is needed'),
(29, 'Damaged Infrastructure', '1111111111', 'nbgvfdc', '', 'Extreamly high', 18.96234222952174, 72.81857886774719, 'Not resolved', '2018-10-06 06:04:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 0, 'broken bridge'),
(30, 'Damaged Infrastructure', '9988776655', 'nbgvfdc', '', 'medium', 18.96234222952174, 72.81857886774719, 'Not resolved', '2018-10-06 06:05:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, 2, 'old tree about to fall'),
(31, 'Potholes', '1111111111', 'nbgvfdc', '', 'high', 18.96234222952174, 72.81857886774719, 'Not resolved', '2018-10-06 06:05:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 'huge pothole in the playground dangerous for children'),
(32, 'Noise Pollution', '9988776655', 'qwerty', '', 'medium', 18.953187064597152, 72.82790497431756, 'Not resolved', '2018-10-06 04:14:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, ''),
(33, 'Women safety', '9988776655', 'sxdcfvgh', '', 'normal', 18.95627177402501, 72.84155205378534, 'Not resolved', '2018-10-06 04:55:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `contact_no` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email_id` varchar(75) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`contact_no`, `user_name`, `email_id`, `password`) VALUES
('1111111111', 'mehul', 'qwerty@123', 'qwerty'),
('1212121212', 'mona', 'qwerty@123', 'qwerty'),
('9826806507', 'Unnati Mistry', 'unnati.mistry@somaiya.edu', 'unnati@123'),
('9876543210', 'Abc xyz', 'abc@gmail.com', 'admin'),
('9988776655', 'Bhakti Kantariya', 'bhakti.kantariya@somaiya.edu', 'bhakti@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
 ADD PRIMARY KEY (`issues_id`), ADD KEY `contact_no` (`contact_no`), ADD KEY `contact_no_2` (`contact_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`contact_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
MODIFY `issues_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
ADD CONSTRAINT `issues_ibfk_1` FOREIGN KEY (`contact_no`) REFERENCES `users` (`contact_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
