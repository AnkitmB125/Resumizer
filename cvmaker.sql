-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 08:40 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `objective` varchar(1000) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `percent_10` varchar(10) NOT NULL,
  `school_exam` varchar(20) NOT NULL,
  `school_yop` varchar(10) NOT NULL,
  `h_school_name` varchar(100) NOT NULL,
  `percent_12` varchar(10) NOT NULL,
  `h_school_exam` varchar(20) NOT NULL,
  `h_school_yop` varchar(10) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `cpi` varchar(10) NOT NULL,
  `college_exam` varchar(100) NOT NULL,
  `college_yop` varchar(10) NOT NULL,
  `project1` varchar(1000) NOT NULL,
  `project2` varchar(1000) NOT NULL,
  `project3` varchar(1000) NOT NULL,
  `project4` varchar(1000) NOT NULL,
  `project5` varchar(1000) NOT NULL,
  `project6` varchar(1000) NOT NULL,
  `skill1` varchar(1000) NOT NULL,
  `s_detail1` varchar(1000) NOT NULL,
  `skill2` varchar(1000) NOT NULL,
  `s_detail2` varchar(1000) NOT NULL,
  `skill3` varchar(1000) NOT NULL,
  `s_detail3` varchar(1000) NOT NULL,
  `skill4` varchar(1000) NOT NULL,
  `s_detail4` varchar(1000) NOT NULL,
  `skill5` varchar(1000) NOT NULL,
  `s_detail5` varchar(1000) NOT NULL,
  `skill6` varchar(1000) NOT NULL,
  `s_detail6` varchar(1000) NOT NULL,
  `achievement1` varchar(1000) NOT NULL,
  `achievement2` varchar(1000) NOT NULL,
  `achievement3` varchar(1000) NOT NULL,
  `achievement4` varchar(1000) NOT NULL,
  `activity1` varchar(1000) NOT NULL,
  `activity2` varchar(1000) NOT NULL,
  `activity3` varchar(1000) NOT NULL,
  `activity4` varchar(1000) NOT NULL,
  `activity5` varchar(1000) NOT NULL,
  `strong1` varchar(1000) NOT NULL,
  `strong2` varchar(1000) NOT NULL,
  `strong3` varchar(1000) NOT NULL,
  `strong4` varchar(1000) NOT NULL,
  `strong5` varchar(1000) NOT NULL,
  `api1` varchar(1000) NOT NULL,
  `api2` varchar(1000) NOT NULL,
  `api3` varchar(1000) NOT NULL,
  `api4` varchar(1000) NOT NULL,
  `api5` varchar(1000) NOT NULL,
  `past1` varchar(1000) NOT NULL,
  `past2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `email`, `contact_number`, `dob`, `address`, `linkedin`, `facebook`, `objective`, `school_name`, `percent_10`, `school_exam`, `school_yop`, `h_school_name`, `percent_12`, `h_school_exam`, `h_school_yop`, `college_name`, `cpi`, `college_exam`, `college_yop`, `project1`, `project2`, `project3`, `project4`, `project5`, `project6`, `skill1`, `s_detail1`, `skill2`, `s_detail2`, `skill3`, `s_detail3`, `skill4`, `s_detail4`, `skill5`, `s_detail5`, `skill6`, `s_detail6`, `achievement1`, `achievement2`, `achievement3`, `achievement4`, `activity1`, `activity2`, `activity3`, `activity4`, `activity5`, `strong1`, `strong2`, `strong3`, `strong4`, `strong5`, `api1`, `api2`, `api3`, `api4`, `api5`, `past1`, `past2`) VALUES
(10, 1, 'Ankit', 'Bhadage', '', 'abhadage@gmail.com', '08879042547', '', '23 A/403, Bimbisar Nagar, W.E.highway,\r\nGoregaon(east), Mumbai-400065.', '', '', 'To give my best in my professional pursuit for overall benefit and growth of the company that I serve by facing the challenges. I will show my caliber and gain some experience.', 'St. Thomas High School', '94', 'SSC', '2014', 'Nirmala foundation', '86', 'HSC', '2016', 'MNNIT, Allahabad', '7.88', 'B.Tech, IT', '2020', 'abc', 'xtyou', 'lkdvkjbk', 'jbkdbacvkb', '', '', 'Programming', 'C, c++, java', 'web- designing languages', 'html, css, js, php, sql', 'designing tools', 'matlab, scilab', 'other skills', 'embedded and networking', '', '', '', '', 'abcgfgjvhkdfjlshv knf hfv nreliuvhjn idfvb jrembv jhv sfjgv b aiufkvh bciune7yrc ', 'iuufe hi4t8giu3rt43ofy  43898 843y97rtvo9ducfuw 08y', 'p9we 984yrg09 rugkyt539fuvolt', '', 'cricket', 'football', 'ninja techniques', 'sleeping', '', 'sleeping', 'more sleeping', 'even more sleeping', 'ninja technique', '', 'cooking', 'cryptocurrency', 'chutiya banana', '', '', 'Ruler of the seven kingdoms', 'meth cook'),
(11, 2, 'venkatesh', 'deore', 'Male', 'deore.venkatesh@gmail.com', '8796462589', '2017-10-01', 'Murkute colony, gangpur road, nashik-69.', '', '', 'mera naam hai bulla, rakhta hu khulla', 'jai hind high scchool', '93.8', 'SSC', '2014', 'Pace Junior clg', '87', 'HSC', '2016', 'MNNIT', '8.42', 'B.Tech, CSE', '2020', 'Codewarriors', 'created a software for elliot alderson', 'Cooked meth for heisenberg', '', '', '', 'Programiing skills', 'c, c++, java', 'web development', 'html, javascript, css, jquery', 'software development', 'Android studio, netbeans', 'Shell programming', 'BASH', '', '', '', '', 'single till date', 'Asked for nudes', 'Bought a condom', '', 'sleeping', 'fucking', 'waking up 5minsbefore lecture', '', '', 'sleeping', 'japanese', 'bulla', 'Betibaba', '', 'Chutiyapa', 'Bulla', 'beti', '', '', 'Worked as betiBaba', ''),
(18, 4, 'abc', 'xyz', 'Male', 'abc@xyz.com', '1234567890', '2013-11-01', 'Room No.:00, Tagore hostel, MNNIT Allahabad.', 'abc', 'xyz', 'To give my best in my professional pursuit for overall benefit and growth of the company that I serve by facing the challenges. I will show my caliber and gain some experience.', 'school1', '90', 'SSC', '2014', 'High school1', '90', 'HSC', '2016', 'MNNIT, Allahabad', '9.0', 'B.Tech, IT', '2020', 'Project 1', 'Project 2', 'Project 3', 'Project 4', '', '', 'Skill1', 'Detail1', 'Skill2', 'Detail2', 'Skill3', 'Detail3', 'Skill4', 'Detail4', 'Skill5', 'Detail5', '', '', 'Achievement1', 'Achievement2', 'Achievement3', 'Achievement4', 'Activity4', 'Activity3', 'Activity2', 'Activity1', '', 'Strong1', 'Strong2', 'Strong3', 'Strong4', '', 'Interest1', 'Interest2', 'Interest3', '', '', 'Past Experience1', 'Past Experience2'),
(21, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `email`, `password`, `last_name`) VALUES
(1, 'Ankit', 'abhadage@gmail.com', 'abc', 'Bhadage'),
(2, 'venkatesh', 'deore.venkatesh@gmail.com', 'abc', 'deore'),
(4, 'abc', 'abc@xyz.com', 'abc', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
