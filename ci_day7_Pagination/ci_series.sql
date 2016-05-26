-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2016 at 05:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_series`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `author`, `content`) VALUES
(2, 'My Freshly Updated Title', '', 'My Freshly Updated Content.............'),
(4, 'Amir Mustafa', '', 'Someday you will win too.'),
(7, 'Nasir Mustafa', '', 'Bro.......'),
(8, 'abc', 'abc', 'abc'),
(9, 'abc', 'abc', 'abc'),
(10, 'abc', 'abc', 'abc'),
(11, 'abc', 'Jefferway', 'abc'),
(12, 'Another Title', 'Jefferway', 'abc'),
(13, 'abc', 'Jefferway', 'abc'),
(14, 'abc', 'abc', 'abc'),
(15, 'abc', 'abc', 'abc'),
(16, 'abc', 'abc', 'abc'),
(17, 'abcabc', 'abcabc', 'abcabc'),
(18, 'abcabc', 'abcabc', 'abcabc'),
(19, 'abcabcabc', 'abcabcabc', 'abcabcabc'),
(20, 'abcabcabc', 'abcabcabc', 'abcabcabc'),
(21, 'xyz', 'xyz', 'xyz'),
(22, 'xyz', 'xyz', 'xyz'),
(23, 'xyzxyz', 'xyzxyz', 'xyzxyz'),
(24, 'xyzxyz', 'xyzxyz', 'xyzxyz'),
(25, 'xyzxyzxyz', 'xyzxyzxyz', 'xyzxyzxyz'),
(26, 'xyzxyzxyz', 'xyzxyzxyz', 'xyzxyzxyz'),
(27, 'xyz', 'xyz', 'xyz'),
(28, 'xyz', 'xyz', 'xyz'),
(29, 'xyzxyzxyz', 'xyzxyzxyz', 'xyzxyzxyz'),
(30, 'xyzxyzxyz', 'xyzxyzxyz', 'xyzxyzxyz'),
(31, 'asasasasasas', 'asasasasasas', 'asasasasasas'),
(32, 'asasasasasas', 'asasasasasas', 'asasasasasas'),
(33, 'asasasasasasasasasasasas', 'asasasasasasasasasasasas', 'asasasasasasasasasasasas'),
(34, 'asasasasasasasasasasasas', 'asasasasasasasasasasasas', 'asasasasasasasasasasasas'),
(35, 'qwerty', 'qwerty', 'qwerty'),
(36, 'qwerty', 'qwerty', 'qwerty'),
(37, 'qwerty', 'qwerty', 'qwerty'),
(38, 'qwerty', 'qwerty', 'qwerty'),
(39, 'qwertyqwerty', 'qwertyqwerty', 'qwertyqwerty'),
(40, 'qwertyqwerty', 'qwertyqwerty', 'qwertyqwerty'),
(41, 'qwertyqwertyqwerty', 'qwertyqwertyqwerty', 'qwertyqwertyqwerty'),
(42, 'qwertyqwertyqwerty', 'qwertyqwertyqwerty', 'qwertyqwertyqwerty'),
(43, 'qwerty', 'qwerty', 'v'),
(44, 'qwerty', 'qwerty', 'qwerty'),
(45, 'qwertyqwerty', 'qwertyqwerty', 'qwertyqwerty'),
(46, 'qwertyqwerty', 'qwertyqwerty', 'qwertyqwerty'),
(47, 'qwerty', 'qwerty', 'qwerty'),
(48, 'qwerty', 'qwerty', 'qwerty'),
(49, 'qwerty', 'qwerty', 'qwerty'),
(50, 'qwertyqwerty', 'qwertyqwerty', 'qwertyqwerty'),
(51, 'fdfdfd', 'dfdfdf', 'fgfgfgfg'),
(52, 'fgfgfgfg', 'fgfgfgfg', 'fgfgfgfg'),
(53, 'fgfgfgfg', 'fgfgfgfg', 'fgfgfgfg'),
(54, 'fgfgfgfg', 'fgfgfgfg', 'fgfgfgfg'),
(55, 'fgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfg'),
(56, 'fgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfg'),
(57, 'fgfgfgfgfgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfgfgfgfgfg'),
(58, 'fgfgfgfgfgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfgfgfgfgfg', 'fgfgfgfgfgfgfgfgfgfgfgfg'),
(59, 'sdsdsdsd', 'sdsdsdsd', 'sdsdsdsd'),
(60, 'sdsdsdsd', 'sdsdsdsd', 'sdsdsdsd'),
(61, 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd'),
(62, 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd'),
(63, 'sdsdsdsdsdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsdsdsdsdsd'),
(64, 'sdsdsdsdsdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsdsdsdsdsd'),
(65, 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd'),
(66, 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd'),
(67, 'sdsdsdsd', 'sdsdsdsd', 'sdsdsdsd'),
(68, 'sdsdsdsd', 'sdsdsdsd', 'sdsdsdsd'),
(69, 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj'),
(70, 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj'),
(71, 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj'),
(72, 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'vhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj'),
(73, 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj'),
(74, 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj', 'hjhjhjhjhjhjhjhjhjhjhjhjhjhj'),
(75, 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj'),
(76, 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj', 'hjhjhjhjhjhjhj');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `email_address`) VALUES
(1, 'Amir', 'Mustafa', 'amir_mustafa', 'da524677c53bd82bef39a8942bc53e73', 'amirengg15@gmail.com'),
(3, 'Rohit', 'Thakur', 'rohit', '2d235ace000a3ad85f590e321c89bb99', 'rohit@gmail.com'),
(4, 'Amir', 'Mustafa', 'amir123', '81dc9bdb52d04dc20036dbd8313ed055', 'amirmustafa777@gmail.com'),
(5, 'Amir', 'Mustafa', 'amir123', '81dc9bdb52d04dc20036dbd8313ed055', 'amirmustafa777@gmail.com'),
(6, 'Amir', 'Mustafa', 'amir123', 'e10adc3949ba59abbe56e057f20f883e', 'amir@gmail.com'),
(7, 'Amir', 'Mustafa', 'amir123', '81dc9bdb52d04dc20036dbd8313ed055', 'amir@gmail.com'),
(8, 'Amir', 'Mustafa', 'amir123', '81dc9bdb52d04dc20036dbd8313ed055', 'amir@gmail.com'),
(9, 'Nasir', 'Mustafa', 'nasir', '78e96b7de2cfaa6d3743781169c32680', 'nasir@gmail.com'),
(10, 'Nasir', 'Mustafa', 'nasir', '78e96b7de2cfaa6d3743781169c32680', 'nasir@gmail.com'),
(11, 'xyz', 'xyz', 'xyz1', '81dc9bdb52d04dc20036dbd8313ed055', 'x@gmail.com'),
(12, 'Farhin Naaz', 'Khan', 'farhin', '526e44ed1986416ae88e7f7512a95e74', 'farhin@gmail.com');
