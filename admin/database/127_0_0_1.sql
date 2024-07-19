-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 12:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--
CREATE DATABASE IF NOT EXISTS `election` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `election`;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `Cid` int(10) NOT NULL,
  `Cname` varchar(30) NOT NULL,
  `Cemail` varchar(30) NOT NULL,
  `Cphone` varchar(13) NOT NULL,
  `Cadress` varchar(100) NOT NULL,
  `Cdescription` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`Cid`, `Cname`, `Cemail`, `Cphone`, `Cadress`, `Cdescription`, `image`, `vote`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(7, 'Dany', 'abeldereje23@gmail.com', '+251925869067', ' fgdhght', ' rsgtrsshye', '../admin/image/ff355da914efed961cf686056e3adacebg-title-01.jpg', 'MQ==', '$2y$10$Lz7t0mo.Xr6qUk8/gpFhv.mJE0HCHdIXk3qelQLTnBkM4emstbNSm', '1e5eeb40a3fce716b244599862fd2200', 'not verified'),
(8, 'Abel', 'abeldereje23@gmail.com', '+251925869067', ' etgrgrtrhsth', ' ergtretre', '../admin/image/fd6aa3d49bf676c2912b47ca7afe1b5alogoo.png', '', '$2y$10$XF26xsJWZDkZ3FiM4VdJu.iyb73H6RZs2H2KbL0GdN.l78oQcaQRS', 'f7ff233e4ed3e6b13c5d5c7a9201e4ec', 'verified'),
(9, 'Abel', 'abeldereje23@gmail.com', '+251925869067', ' gfdbfgngh', ' bgfngfnh', '../admin/image/10a33464d54239779176eed37f1aa54alogo.jpg', '', 'MjE0MjAy', 'b603b38a17f369ddc973b3a9045943de', 'verified'),
(10, 'Dany', 'abeldereje23@gmail.com', '+251925869067', ' srgtfgh', ' ncgngnch', '../admin/image/c9ae881ef1792bc92b9deedb46e1aa07eb.jpg', '', 'NzMzMzE1MQ==', 'd7a84628c025d30f7b2c52c958767e76', 'verified'),
(11, 'Dany', 'hilu@gmail.com', '+251925869067', ' rdfgr', ' dzgzdfg', '../admin/image/0940faa09d3cac3f927a578edba926cblogin.jpg', '', 'Nzk4ODE1Ng==', 'f511186b08b671a4ad5a1deaae96e310', 'not verified');

-- --------------------------------------------------------

--
-- Table structure for table `cd`
--

CREATE TABLE `cd` (
  `CDid` int(11) NOT NULL,
  `Cname` varchar(100) NOT NULL,
  `Cemail` varchar(100) NOT NULL,
  `Cphone` varchar(100) NOT NULL,
  `Cage` int(3) NOT NULL,
  `Cimage` varchar(100) NOT NULL,
  `CEL` varchar(100) NOT NULL,
  `Csex` varchar(100) NOT NULL,
  `Caddress` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd`
--

INSERT INTO `cd` (`CDid`, `Cname`, `Cemail`, `Cphone`, `Cage`, `Cimage`, `CEL`, `Csex`, `Caddress`, `image`, `vote`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(1, 'Dany', 'abeldereje23@gmail.com', '+251925869067', 23, '../image/ee71c9d2865902b0d8a00ac3254d61b2logoo.png', 'Degree', 'Male', ' dfgjl', '../image/ee71c9d2865902b0d8a00ac3254d61b2vote_logo.jpg', '', '$2y$10$823/PPTNpc7TA52Wy6W1eufFjVm46aka0lvqZ1to6g7j3XIQxaVMm', 'dbe1a0a2c9bd9241b3499318bf96f756', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `cd_register_user`
--

CREATE TABLE `cd_register_user` (
  `cd_register_user_id` int(100) NOT NULL,
  `CV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd_register_user`
--

INSERT INTO `cd_register_user` (`cd_register_user_id`, `CV_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(1, '', 'helu', 'helu19seni@gmail.com', '$2y$10$cgrWZnRp9.BH0JnwoeU2VeU1zMghGM9HeLPwaZY1Cjqrxmku1xu5e', 'eb69ec3b34db9fc42da12bd9c3a8ad37', 'verified'),
(6, '1443', 'v', 'hilu@gmail.com', '$2y$10$ew2goW68JUENt15ttIs.ou9wWG.11sJihwhYSPgJSIzDYtY8Zpv9S', '10b2b8698ea0385652248b0a93b86a57', 'not verified'),
(9, '1443', 'Abel', 'abeldereje23@gmail.com', 'MzI5NjE3MA==', '91299a41773c667d2ee8cddc3f6eeb64', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `check_student_data`
--

CREATE TABLE `check_student_data` (
  `SD_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  `Stuemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_student_data`
--

INSERT INTO `check_student_data` (`SD_id`, `name`, `M_name`, `L_name`, `Mom_name`, `age`, `sex`, `dep`, `club`, `address`, `votes`, `Stuemail`) VALUES
(1365, 'asd', 'Dereje', 'fdf', 'ssf', '45', 'female', 'CS', 'Red Cross', 'DDU', 'yes', 'mame@gmail.com'),
(1443, 'Abel', 'Dereje', 'Balcha', 'mami', '20', 'male', 'IS', 'Debube tamra', 'HU', 'yes', 'abeldereje23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `website` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Uid`, `name`, `email`, `phone`, `website`, `msg`) VALUES
(1, 'Helina', 'helina@gmail.com', '+251925869067', 'http://dani.com', 'gooood');

-- --------------------------------------------------------

--
-- Table structure for table `dh`
--

CREATE TABLE `dh` (
  `Did` int(100) NOT NULL,
  `Dname` varchar(100) NOT NULL,
  `Demail` varchar(100) NOT NULL,
  `Dphone` varchar(100) NOT NULL,
  `Dage` int(100) NOT NULL,
  `D_image` varchar(100) NOT NULL,
  `DEL` varchar(100) NOT NULL,
  `Dsex` varchar(100) NOT NULL,
  `Daddress` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dh`
--

INSERT INTO `dh` (`Did`, `Dname`, `Demail`, `Dphone`, `Dage`, `D_image`, `DEL`, `Dsex`, `Daddress`, `image`, `vote`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(3, 'ABEL', 'abeldereje23@gmail.com', '09345678911', 12, 'image/329676517dcd4e1043e9eb1b52314ebevote_logo.jpg', 'Master', 'Female', 'dfghj', '../admin/image/329676517dcd4e1043e9eb1b52314ebelogoo.png', '', '$2y$10$hUA4MqAfL0pk8P8GEoY0Se.OD.YZdMQvQzvNaI8xSPiaUO0dMtV2y', '1a3d6a5affbc4a3a84214366730c4a80', 'verified'),
(5, 'ABELll', 'abeldereje23@gmail.com', '09345678911', 32, 'image/30a3f6ea1e9207e0a7a2420a0d35979deb.jpg', 'Deploma', 'Female', ' rtyuil', '../admin/image/30a3f6ea1e9207e0a7a2420a0d35979dlogoo.png', '', '$2y$10$ePSfawxhjJVushkLWf5ejOC1.ByiHmKxebmGgT/h9gn9SPlUK9MOm', 'e2bc7a52e896193e43a2e15df870c4e2', 'verified'),
(6, 'Abell', 'haftom@gmail.com', '09345678911', 32, '../admin/image/306ee625eb2f0aa47fa6dc6a02502bc6eb.jpg', 'Degree', 'Female', ' cggxnx', '../admin/image/306ee625eb2f0aa47fa6dc6a02502bc6ffg.jpg', '', '$2y$10$/tOQqzED1DvO27XaSjCFwec2Z9BapgfaScr8ASsryqIv4XeWhBvhq', 'fd6b4b8075b32ba75ffe0c9694d2f9af', 'not verified'),
(7, 'Abell', 'abeldereje23@gmail.com', '09345678911', 32, '../admin/image/fc94290683350931b4e21dcfdc05ec34eb.jpg', 'Degree', 'Female', ' ', '../admin/image/fc94290683350931b4e21dcfdc05ec34ffg.jpg', '', '$2y$10$edO3KiZ8V4buz0l2XGB9HufNcx5x.cQIh4b1RlaiD9oul6waXwnrO', '51e6d6e679953c6311757004d8cbbba9', 'not verified');

-- --------------------------------------------------------

--
-- Table structure for table `dh_register_user`
--

CREATE TABLE `dh_register_user` (
  `dh_register_user_id` int(100) NOT NULL,
  `DV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dh_register_user`
--

INSERT INTO `dh_register_user` (`dh_register_user_id`, `DV_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(8, '1443', 'Abel', 'abeldereje23@gmail.com', 'Nzk4MDMwMA==', '37007545a7abc397017002fc9a713ea2', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `import_college_data`
--

CREATE TABLE `import_college_data` (
  `CV_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `bf` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  `Cemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import_college_data`
--

INSERT INTO `import_college_data` (`CV_id`, `name`, `M_name`, `L_name`, `Mom_name`, `age`, `sex`, `bf`, `status`, `address`, `votes`, `Cemail`) VALUES
(1365, 'asd', 'Dereje', 'fdf', 'ssf', '45', 'female', 'Helina', 'Engaged', 'Haramaya', 'yes', 'hilu12@gmail.com'),
(1443, 'Abel', 'Dereje', 'Balcha', 'mami', '20', 'male', 'Sami', 'unmarried', 'USA', 'yes', 'abeldereje23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `import_dep_data`
--

CREATE TABLE `import_dep_data` (
  `DV_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `aunt` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  `Demail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import_dep_data`
--

INSERT INTO `import_dep_data` (`DV_id`, `name`, `M_name`, `L_name`, `Mom_name`, `age`, `sex`, `aunt`, `status`, `address`, `votes`, `Demail`) VALUES
(1365, 'asd', 'Dereje', 'fdf', 'ssf', '45', 'female', 'Elsabet', 'Engaged', 'Haramaya', 'no', 'haftom@gmail.com'),
(1443, 'Abel', 'Dereje', 'Balcha', 'mami', '20', 'male', 'Felekech', 'unmarried', 'USA', 'yes', 'abeldereje23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `import_university_data`
--

CREATE TABLE `import_university_data` (
  `UV_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `E_level` varchar(100) NOT NULL,
  `house_num` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  `Uemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import_university_data`
--

INSERT INTO `import_university_data` (`UV_id`, `name`, `M_name`, `L_name`, `Mom_name`, `age`, `sex`, `E_level`, `house_num`, `address`, `votes`, `Uemail`) VALUES
(1365, 'asd', 'Dereje', 'fdf', 'ssf', '45', 'female', 'master', '13/98', 'gima', 'yes', 'abeldereje23@gmail.com'),
(1443, 'Abel', 'Dereje', 'Balcha', 'mami', '20', 'male', 'php', '14-04', 'sheger', 'yes', 'abeldereje23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manage_about_us`
--

CREATE TABLE `manage_about_us` (
  `about_id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `mission` varchar(300) NOT NULL,
  `vission` varchar(300) NOT NULL,
  `value` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_about_us`
--

INSERT INTO `manage_about_us` (`about_id`, `title`, `mission`, `vission`, `value`, `image`) VALUES
(1, 'Few words abou us', ' Our Mission is to sustain democratic election.   ', '  Our Vision is to sustain democratic election.   ', ' Our Value is to sustain democratic election.   ', 'image/317265b9510e3257af53acbb7d47ca74logoo.png');

-- --------------------------------------------------------

--
-- Table structure for table `manage_contact`
--

CREATE TABLE `manage_contact` (
  `MC_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `tele` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_contact`
--

INSERT INTO `manage_contact` (`MC_id`, `email`, `address`, `phone`, `tele`, `postal`) VALUES
(2, 'beti@gmail.com', 'hharamaya university y', '+251925869067', '+1134568711', '434345');

-- --------------------------------------------------------

--
-- Table structure for table `manage_duration`
--

CREATE TABLE `manage_duration` (
  `manage_duration_id` int(11) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_duration`
--

INSERT INTO `manage_duration` (`manage_duration_id`, `Sdate`, `Edate`, `txt`) VALUES
(8, '2019-02-23', '2020-03-02', 'good\r\ndvbgfh');

-- --------------------------------------------------------

--
-- Table structure for table `manage_duration_cd`
--

CREATE TABLE `manage_duration_cd` (
  `manage_duration_cd_id` int(11) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_duration_cd`
--

INSERT INTO `manage_duration_cd` (`manage_duration_cd_id`, `Sdate`, `Edate`, `txt`) VALUES
(2, '2019-03-01', '2019-03-05', 'aaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `manage_duration_dh`
--

CREATE TABLE `manage_duration_dh` (
  `manage_duration_dh_id` int(11) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_duration_dh`
--

INSERT INTO `manage_duration_dh` (`manage_duration_dh_id`, `Sdate`, `Edate`, `txt`) VALUES
(1, '2019-03-03', '2019-03-04', 'gff');

-- --------------------------------------------------------

--
-- Table structure for table `manage_duration_su`
--

CREATE TABLE `manage_duration_su` (
  `manage_duration_su_id` int(11) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_duration_su`
--

INSERT INTO `manage_duration_su` (`manage_duration_su_id`, `Sdate`, `Edate`, `txt`) VALUES
(1, '2019-03-03', '2020-03-04', 'vc');

-- --------------------------------------------------------

--
-- Table structure for table `manage_duration_up`
--

CREATE TABLE `manage_duration_up` (
  `manage_duration_up_id` int(11) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_duration_up`
--

INSERT INTO `manage_duration_up` (`manage_duration_up_id`, `Sdate`, `Edate`, `txt`) VALUES
(1, '2019-03-01', '2020-03-05', 'hdfhdt');

-- --------------------------------------------------------

--
-- Table structure for table `manage_homepage`
--

CREATE TABLE `manage_homepage` (
  `homepage_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `txt` varchar(3000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_homepage`
--

INSERT INTO `manage_homepage` (`homepage_id`, `title`, `txt`, `image`) VALUES
(2, 'Home', 'DangerWhy should I vote Danger alert preview. This fWhy should I vote Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. fWhy should I vote Danger alert preview. This fghgh alert preview. This fghgh 	\r\n\r\n              ', 'image/d041ba900903085b8641d50dd1834e28logoo.png');

-- --------------------------------------------------------

--
-- Table structure for table `post_info`
--

CREATE TABLE `post_info` (
  `Pid` int(11) NOT NULL,
  `Stime` varchar(100) NOT NULL,
  `Etime` varchar(100) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_info`
--

INSERT INTO `post_info` (`Pid`, `Stime`, `Etime`, `Sdate`, `Edate`, `txt`) VALUES
(18, '1:00:00', '8:00:00', '2019-05-05', '2019-05-14', 'national voting'),
(19, '1', '2', '2019-06-04', '2019-06-05', 'Up'),
(20, '2', '3', '2019-06-24', '2019-06-26', 'cd'),
(21, '3', '4', '2019-06-11', '2019-06-04', 'dh'),
(22, '5', '6', '2019-06-05', '2019-06-05', 'su');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `register_user_id` int(100) NOT NULL,
  `A_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`register_user_id`, `A_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(32, '14/091', 'Abel', 'abeldereje23@gmail.com', 'ODcyNzc1NQ==', '9ad97add7f3d9f29cd262159d4540c96', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `su`
--

CREATE TABLE `su` (
  `Sid` int(100) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Semail` varchar(100) NOT NULL,
  `Sphone` varchar(100) NOT NULL,
  `Sage` int(3) NOT NULL,
  `Sgrade` varchar(30) NOT NULL,
  `Syear` varchar(7) NOT NULL,
  `Sclub` varchar(30) NOT NULL,
  `Saddress` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `su`
--

INSERT INTO `su` (`Sid`, `Sname`, `Semail`, `Sphone`, `Sage`, `Sgrade`, `Syear`, `Sclub`, `Saddress`, `image`, `vote`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(14, 'abel', 'abeldereje23@gmail.com', '123456789', 23, '2.0', '2nd', 'Tigrigna', ' xgfhghhg', 'image/301686cedadd17ecdf5c91e74195c421eb.jpg', 'MQ==', '$2y$10$7CC8hS7133bNI8nLnaQ8P.wBFrIuAHP1E30CXIKeis5g1lkUcNEbO', 'b3f7e349cd770760805077c584b137b7', 'verified'),
(15, 'abel', 'abeldereje23@gmail.com', '12345678', 23, '2.0', '3rd', 'Sustain Dialogue', ' asdfghj.', '../admin/image/92198b0e5d513e6caa5840eeb0f31423vote_logo.jpg', '', '$2y$10$X0N1AsrOKxO97CS/7KU/.O08OIC9RqHXkDrImjBvM81vxrEoSdbou', '8fecb20817b3847419bb3de39a609afe', 'not verified'),
(16, 'abel', 'abeldereje23@gmail.com', '12345678', 23, '2.0', '2nd', 'Sustain Dialogue', ' werty', '../admin/image/cd6884a4153ab9244a8953a5abc3dae2logoo.png', '', '$2y$10$ZrUtXNkkFQ8bB41fK/PndOB8jYcHyHBlisa3AjA7lgzhrqAonb/K2', 'bef5b4d93c3ae02ace550506a9a936de', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `A_id` varchar(100) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `SL_name` varchar(255) NOT NULL,
  `SGF_name` varchar(200) NOT NULL,
  `SMom_name` varchar(30) NOT NULL,
  `Sage` int(11) NOT NULL,
  `Sbirth_place` varchar(200) NOT NULL,
  `Sbirth_year` varchar(100) NOT NULL,
  `Saddress` varchar(100) NOT NULL,
  `Ssex` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  `Semail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`A_id`, `S_name`, `SL_name`, `SGF_name`, `SMom_name`, `Sage`, `Sbirth_place`, `Sbirth_year`, `Saddress`, `Ssex`, `votes`, `Semail`) VALUES
('13/05', 'asd', 'Dereje', 'fdf', 'ssf', 45, 'ewew', '8786', 'cvc', 'female', 'no', 'abel25@gmail.com'),
('1365/05', 'asd', 'Dereje', 'fdf', 'ssf', 45, 'ewew', '8786', 'cvc', 'female', 'no', 'abel26@gmail.com'),
('14/091', 'Abel', 'Dereje', 'Balcha', 'mami', 20, 'Goggetti', '1987', 'Goggetti', 'Male', 'yes', 'abeldereje23@gmail.com'),
('1443/091', 'Abel', 'Dereje', 'Balcha', 'mami', 20, 'Goggetti', '1987', 'Goggetti', 'Male', 'no', 'abel24@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `su_register_user`
--

CREATE TABLE `su_register_user` (
  `su_register_user_id` int(100) NOT NULL,
  `SD_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `su_register_user`
--

INSERT INTO `su_register_user` (`su_register_user_id`, `SD_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(12, '1443', 'Abel', 'abeldereje23@gmail.com', 'NjUzNDkzOQ==', '8808eda0dd3dec4e4df50499f2fc75e8', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

CREATE TABLE `up` (
  `Pid` int(100) NOT NULL,
  `Pname` varchar(100) NOT NULL,
  `Pemail` varchar(100) NOT NULL,
  `Pphone` varchar(100) NOT NULL,
  `Page` int(3) NOT NULL,
  `exp_image` varchar(100) NOT NULL,
  `PEL` varchar(100) NOT NULL,
  `Psex` varchar(100) NOT NULL,
  `Paddress` varchar(100) NOT NULL,
  `Pdisc` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`Pid`, `Pname`, `Pemail`, `Pphone`, `Page`, `exp_image`, `PEL`, `Psex`, `Paddress`, `Pdisc`, `image`, `vote`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(26, 'Abel', 'abeldereje23@gmail.com', '234567890', 12, '../admin/image/953063b33770090345641a828907d105eb.jpg', 'Degree', 'Female', ' dsafewf', ' wefd', '../admin/image/953063b33770090345641a828907d105eb.jpg', '', '$2y$10$P4p6n7u8b4xJIn1P8h2Ir.o2d6ZxmGxIKt7PlGSxq.AhY6Fif5daG', '6a28eabcad1eff991e894e5f577e53e6', 'not verified'),
(27, 'fdhgf', 'abeldereje23@gmail.com', '1234567890123', 32, '../admin/image/77329253898ac942c45c622384c7d334logoo.png', 'Degree', 'Male', ' errgre', ' wrwe', '../admin/image/77329253898ac942c45c622384c7d334bg-title-01.jpg', 'MQ==', '$2y$10$TYH2plsFZF6TEK1cgdu.UuEDl82iF0/.O66/o7Zh9Cocnala4DxHe', 'c11a6c8821cdb24676ff61d9b59c10a0', 'verified'),
(28, 'AAA', 'abeldereje23@gmail.com', '+251925869067', 32, '../admin/image/c7bd257e0b0bf63a82233ad25c776ab2logo.jpg', 'Degree', 'Female', ' sdxvbgvnmn', ' gfnbgfng', '../admin/image/c7bd257e0b0bf63a82233ad25c776ab2logoo.png', '', '$2y$10$c5XP7EI.RGjkSxSzYBsV/uQZgO/gWDqxQg7PcYxs8JdReycghDfAS', '1a95a20ee480d3c53bd76874aaf30773', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `up_register_user`
--

CREATE TABLE `up_register_user` (
  `up_register_user_id` int(100) NOT NULL,
  `UV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_register_user`
--

INSERT INTO `up_register_user` (`up_register_user_id`, `UV_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`) VALUES
(6, '', 'helu', 'helu19seni@gmail.com', '$2y$10$nRQGEvG9MOtinKoqkRPg/uKzt3aUm4SFUCJF607.BgMinEA6qysFy', 'cd0cbcc668fe4bc58e0af3cc7e0a653d', 'verified'),
(22, '1365', 'Abel', 'man@gmail.com', '$2y$10$7ZlFK6.L/9uozTGHCD3c9O4yHc9c2UE0EG2UOm.AM3MfsMiIXkRXq', 'bc8a3b91b762ea06e9ca6d8e8e9caca0', 'not verified'),
(28, '1443', 'Abel', 'abeldereje23@gmail.com', 'MTY3NjE4MQ==', '93b5129e24b9c92e5b8e7115056b46bd', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` int(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `email`, `username`, `password`, `type`) VALUES
(1, 'admin@gmail.com', 'admin', '12345', 'admin'),
(2, 'eb@gmail.com', 'eb', '1212', 'eb'),
(3, 'hr@gmail.com', 'hr', '1234', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `users_email`
--

CREATE TABLE `users_email` (
  `Eid` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`CDid`);

--
-- Indexes for table `cd_register_user`
--
ALTER TABLE `cd_register_user`
  ADD PRIMARY KEY (`cd_register_user_id`);

--
-- Indexes for table `check_student_data`
--
ALTER TABLE `check_student_data`
  ADD PRIMARY KEY (`SD_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `dh`
--
ALTER TABLE `dh`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `dh_register_user`
--
ALTER TABLE `dh_register_user`
  ADD PRIMARY KEY (`dh_register_user_id`);

--
-- Indexes for table `import_college_data`
--
ALTER TABLE `import_college_data`
  ADD PRIMARY KEY (`CV_id`);

--
-- Indexes for table `import_dep_data`
--
ALTER TABLE `import_dep_data`
  ADD PRIMARY KEY (`DV_id`);

--
-- Indexes for table `import_university_data`
--
ALTER TABLE `import_university_data`
  ADD PRIMARY KEY (`UV_id`);

--
-- Indexes for table `manage_about_us`
--
ALTER TABLE `manage_about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `manage_contact`
--
ALTER TABLE `manage_contact`
  ADD PRIMARY KEY (`MC_id`);

--
-- Indexes for table `manage_duration`
--
ALTER TABLE `manage_duration`
  ADD PRIMARY KEY (`manage_duration_id`);

--
-- Indexes for table `manage_duration_cd`
--
ALTER TABLE `manage_duration_cd`
  ADD PRIMARY KEY (`manage_duration_cd_id`);

--
-- Indexes for table `manage_duration_dh`
--
ALTER TABLE `manage_duration_dh`
  ADD PRIMARY KEY (`manage_duration_dh_id`);

--
-- Indexes for table `manage_duration_su`
--
ALTER TABLE `manage_duration_su`
  ADD PRIMARY KEY (`manage_duration_su_id`);

--
-- Indexes for table `manage_duration_up`
--
ALTER TABLE `manage_duration_up`
  ADD PRIMARY KEY (`manage_duration_up_id`);

--
-- Indexes for table `manage_homepage`
--
ALTER TABLE `manage_homepage`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `post_info`
--
ALTER TABLE `post_info`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`register_user_id`);

--
-- Indexes for table `su`
--
ALTER TABLE `su`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `su_register_user`
--
ALTER TABLE `su_register_user`
  ADD PRIMARY KEY (`su_register_user_id`);

--
-- Indexes for table `up`
--
ALTER TABLE `up`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `up_register_user`
--
ALTER TABLE `up_register_user`
  ADD PRIMARY KEY (`up_register_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `users_email`
--
ALTER TABLE `users_email`
  ADD PRIMARY KEY (`Eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `Cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cd`
--
ALTER TABLE `cd`
  MODIFY `CDid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cd_register_user`
--
ALTER TABLE `cd_register_user`
  MODIFY `cd_register_user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dh`
--
ALTER TABLE `dh`
  MODIFY `Did` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dh_register_user`
--
ALTER TABLE `dh_register_user`
  MODIFY `dh_register_user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manage_about_us`
--
ALTER TABLE `manage_about_us`
  MODIFY `about_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_contact`
--
ALTER TABLE `manage_contact`
  MODIFY `MC_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_duration`
--
ALTER TABLE `manage_duration`
  MODIFY `manage_duration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manage_duration_cd`
--
ALTER TABLE `manage_duration_cd`
  MODIFY `manage_duration_cd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_duration_dh`
--
ALTER TABLE `manage_duration_dh`
  MODIFY `manage_duration_dh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_duration_su`
--
ALTER TABLE `manage_duration_su`
  MODIFY `manage_duration_su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_duration_up`
--
ALTER TABLE `manage_duration_up`
  MODIFY `manage_duration_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_homepage`
--
ALTER TABLE `manage_homepage`
  MODIFY `homepage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_info`
--
ALTER TABLE `post_info`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `register_user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `su`
--
ALTER TABLE `su`
  MODIFY `Sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `su_register_user`
--
ALTER TABLE `su_register_user`
  MODIFY `su_register_user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `up`
--
ALTER TABLE `up`
  MODIFY `Pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `up_register_user`
--
ALTER TABLE `up_register_user`
  MODIFY `up_register_user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_email`
--
ALTER TABLE `users_email`
  MODIFY `Eid` int(100) NOT NULL AUTO_INCREMENT;
--
-- Database: `hurms`
--
CREATE DATABASE IF NOT EXISTS `hurms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hurms`;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `jobNo` varchar(10) NOT NULL,
  `eduLevel` varchar(25) NOT NULL,
  `typeOfPosition` varchar(25) NOT NULL,
  `quantity` int(15) NOT NULL,
  `age` int(3) NOT NULL,
  `salary` varchar(25) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `termOfEmployee` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `sdate` date NOT NULL,
  `endDate` date NOT NULL,
  `remember` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`jobNo`, `eduLevel`, `typeOfPosition`, `quantity`, `age`, `salary`, `sex`, `termOfEmployee`, `department`, `sdate`, `endDate`, `remember`) VALUES
('', '', '', 0, 0, '', '0', '0', '', '0000-00-00', '0000-00-00', ''),
('1', 'msc', 'teacher', 23, 34, '2333', '1', '1', 'is', '2022-06-01', '2020-06-03', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`fname`, `email`, `date`, `comment`) VALUES
('helina', 'heli19embi@gmail.com', '2019-04-15', 'any vacancy yet?'),
('munteha', 'munti@gmail.com', '2019-05-14', 'please hvhfeyzjblkdmtkbn bnx,');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `appid` varchar(25) NOT NULL,
  `cgpa` double NOT NULL,
  `rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`fname`, `mname`, `lname`, `appid`, `cgpa`, `rank`) VALUES
('', '', '', '', 0, ''),
('helina', 'Embibel', 'Belete', '092', 32, '3'),
('helu', 'Embibel', 'Belete', '123', 2.3, '4'),
('hy', 'ii', 'jkk', '78', 6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `leave_type` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_reason` varchar(250) NOT NULL,
  `email_address` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`ID`, `name`, `department`, `user_id`, `leave_type`, `start_date`, `end_date`, `leave_reason`, `email_address`, `status`) VALUES
(1, '', '', '0', '', '0000-00-00', '0000-00-00', '', '', 'Approved'),
(5, 'Danay', 'is', '0', '', '2019-06-28', '2019-06-10', 'fdvfd', 'abeldereje23@gmail.com', 'Approved'),
(6, 'Abel', 'dsad', '12', '', '2019-06-03', '2019-06-17', 'bbbb', 'abelddjhgfgfejgfzreje23@gmail.com', 'Approved'),
(8, 'Abel', 'IS', '121', '2', '2019-06-17', '2019-06-20', 'tggtrgrg', 'abeldereje23@gmail.com', ''),
(9, '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `leave_approval`
--

CREATE TABLE `leave_approval` (
  `emp_id` int(25) NOT NULL,
  `leave_Date` date NOT NULL,
  `approve_number` int(25) NOT NULL,
  `approve` varchar(25) NOT NULL,
  `approved_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_approval`
--

INSERT INTO `leave_approval` (`emp_id`, `leave_Date`, `approve_number`, `approve`, `approved_Date`) VALUES
(123, '0000-00-00', 0, 'Approved', '0000-00-00'),
(123, '0000-00-00', 0, 'Approved', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `P_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `empid` varchar(10) NOT NULL,
  `term` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `email_address` varchar(25) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `contactperson` varchar(25) NOT NULL,
  `employeestatus` varchar(300) NOT NULL,
  `salary` varchar(25) NOT NULL,
  `sdate` date NOT NULL,
  `experiance` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`P_id`, `date`, `fname`, `lname`, `sex`, `empid`, `term`, `department`, `email_address`, `phone_number`, `contactperson`, `employeestatus`, `salary`, `sdate`, `experiance`) VALUES
(13, '2019-06-10', 'Abel', 'Dereje', '1', '12', 'is', '0', 'abeldgfereje23@gmail.com', '0925869067', 'dsfdsf', 'frtyjk', '2345678', '2019-06-03', 'dfghjkl'),
(14, '2019-05-27', 'Abel', 'Balcha', '1', '34', '1', 'IS', 'abeldgfereje23@gmail.com', '234567890', 'dsfdsf', '2345678', 'dfghgmj', '2019-06-03', 'cghnchgn'),
(15, '2019-06-18', 'Abel', 'Dereje', 'Male', '54', '1', 'CCI', 'abeldgfereje23@gmail.com', '34657689', 'dereje', 'dhjhj', '2345678', '2019-06-11', 'dtjh'),
(16, '2019-06-10', 'sadsadd', 'fdfv', 'Male', '543', 'Permanent', 'hfghfg', 'ngngbfg@v', '4567898', 'dereje', 'xcdvfgh', '2345678', '2019-06-05', 'xsdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `regestration`
--

CREATE TABLE `regestration` (
  `apid` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `cgpa` varchar(340) NOT NULL,
  `sex` varchar(600) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regestration`
--

INSERT INTO `regestration` (`apid`, `fname`, `mname`, `lname`, `cgpa`, `sex`, `email`, `image`, `image1`, `status`) VALUES
('3', 'AS', 'AA', 'AZ', '3.84', '1', 'abeldereje23@gmail.com', './image/98d0ca0c1d707aaf1bf4083fcc920908login.jpg', './image/98d0ca0c1d707aaf1bf4083fcc920908login.jpg', 'Approved'),
('43', 'abel', 'abel', 'assa', '232', '1', 'abeldgfewejgfzreje23@gmail.com', './image/0d105db4984035f393b6c87dfcd44675bg-title-01.jpg', './image/0d105db4984035f393b6c87dfcd44675bg-title-02.jpg', 'Approved'),
('433', 'dfedf', 'ewfds', 'ewfdsc', '44', '2', 'abeldereje23@gmail.com', './image/896d830addd1d9dd6c5eaa7766f820c2eb.jpg', './image/896d830addd1d9dd6c5eaa7766f820c2eb.jpg', 'Approved'),
('54', 'Dany', 'Hadis', 'Gebru', '3.00', '1', 'danay13@gmail.com', './image/10c89dc2bd73cc3bdeff7a0a6b4581b9bg-title-01.jpg', './image/10c89dc2bd73cc3bdeff7a0a6b4581b9login.jpg', 'Approved'),
('614', 'Helina', 'Embibel', 'Belete', '3.84', '2', 'mnmnm@fgfh.com', './image/f9e4a1b924c51a38b3118ca0be2ae2efbg-title-02.jpg', './image/f9e4a1b924c51a38b3118ca0be2ae2efeb.jpg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `requisition`
--

CREATE TABLE `requisition` (
  `requisitionDate` date NOT NULL,
  `requisitionNumber` varchar(27) NOT NULL,
  `typeOfPosition` varchar(60) NOT NULL,
  `department` varchar(50) NOT NULL,
  `edu_level` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `termOfEmploye` varchar(58) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition`
--

INSERT INTO `requisition` (`requisitionDate`, `requisitionNumber`, `typeOfPosition`, `department`, `edu_level`, `quantity`, `termOfEmploye`, `sex`) VALUES
('2019-05-26', '', '', '', '', '', 'Permanent', 'Both'),
('2019-05-27', '1', 'ee', 'dsad', 'msc', '1', '3', '1'),
('2019-04-30', '1234', 'teacher', 'is', 'degree', '4', 'temporary', 'both'),
('2019-06-03', '21', 'dr', 'is', 'msc', '12', '1', '1'),
('2019-05-26', '2345', 'teacher', '', 'msc', '3', 'Permanent', 'Male'),
('2019-05-28', '32', 'dd', 'frrrwg', 'rfd', '111', '1', '1'),
('2019-05-26', '34444', 'secretary', '', '', '', 'select', 'select'),
('2019-05-28', 'dfgh', 'sdfgn,', 'asdfgn', 'dfbn', 'zsdcb', '2', '1'),
('0000-00-00', 'vvvvvv', '', '', '', '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `date` date NOT NULL,
  `joanumber` varchar(25) NOT NULL,
  `writtenexamdate` date NOT NULL,
  `examtime` varchar(25) NOT NULL,
  `practicalexamdate` date NOT NULL,
  `ptime` varchar(25) NOT NULL,
  `interviewexamdate` date NOT NULL,
  `Time` varchar(25) NOT NULL,
  `Place` varchar(25) NOT NULL,
  `remember` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`date`, `joanumber`, `writtenexamdate`, `examtime`, `practicalexamdate`, `ptime`, `interviewexamdate`, `Time`, `Place`, `remember`) VALUES
('2019-06-11', '45', '2019-06-05', '9:00', '2019-06-13', '5:00', '2019-06-20', '17:00', 'df', 'fgbfd');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

CREATE TABLE `screening` (
  `apid` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `cgpa` varchar(25) NOT NULL,
  `sex` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screening`
--

INSERT INTO `screening` (`apid`, `fname`, `mname`, `lname`, `cgpa`, `sex`) VALUES
('1234', '', '', '', 'select', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(25) NOT NULL,
  `accounttype` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `accounttype`, `email`, `username`, `password`) VALUES
('00000', 'admin', 'heli19embi@gmail.com', 'hi', '1234'),
('012345', 'dep', 'heli19embi@gmail.com', 'abe', '1234'),
('0978', 'manager', 'heli19embi@gmail.com', 'helina', '1234'),
('12', 'employe', 'abelder@gmail.com', 'abu', '4444'),
('646', 'employe', 'ghg', 'username', 'kkj'),
('76mb', ' b v', 'nv', 'bvb', '54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`jobNo`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `regestration`
--
ALTER TABLE `regestration`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `requisition`
--
ALTER TABLE `requisition`
  ADD PRIMARY KEY (`requisitionNumber`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`joanumber`);

--
-- Indexes for table `screening`
--
ALTER TABLE `screening`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"election\",\"table\":\"users\"},{\"db\":\"election\",\"table\":\"candidate\"},{\"db\":\"election\",\"table\":\"dh_register_user\"},{\"db\":\"election\",\"table\":\"su_register_user\"},{\"db\":\"election\",\"table\":\"users_email\"},{\"db\":\"election\",\"table\":\"subject\"},{\"db\":\"election\",\"table\":\"check_student_data\"},{\"db\":\"election\",\"table\":\"import_university_data\"},{\"db\":\"election\",\"table\":\"register_user\"},{\"db\":\"election\",\"table\":\"dh\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'election', 'candidate', '{\"sorted_col\":\"`candidate`.`Cid`  ASC\"}', '2019-06-14 23:11:53'),
('root', 'election', 'check_student_data', '{\"sorted_col\":\"`check_student_data`.`SD_id` ASC\"}', '2019-06-01 16:39:47'),
('root', 'election', 'import_college_data', '{\"sorted_col\":\"`import_college_data`.`CV_id`  DESC\"}', '2019-06-01 15:29:38'),
('root', 'election', 'import_dep_data', '{\"sorted_col\":\"`import_dep_data`.`DV_id` ASC\"}', '2019-06-01 16:22:10'),
('root', 'election', 'import_university_data', '{\"sorted_col\":\"`UV_id` ASC\"}', '2019-06-15 03:23:41'),
('root', 'election', 'register_user', '{\"sorted_col\":\"`register_user_id` ASC\"}', '2019-06-19 21:38:48'),
('root', 'election', 'su', '{\"sorted_col\":\"`Sid` ASC\"}', '2019-06-15 13:03:52'),
('root', 'election', 'subject', '{\"sorted_col\":\"`SMom_name` ASC\"}', '2019-05-26 16:41:08'),
('root', 'election', 'users', '{\"sorted_col\":\"`users`.`Uid` ASC\"}', '2019-06-08 13:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-06-23 10:21:20', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":255}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `vehicle_management_system`
--
CREATE DATABASE IF NOT EXISTS `vehicle_management_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vehicle_management_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(100) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `U_name` varchar(20) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `F_Name`, `L_name`, `U_name`, `Email`, `password`) VALUES
(1, 'mersiehazen', 'Fente', 'merciy', 'mercy@gmail.com', 'asdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Post_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `sender` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `Body` varchar(60000) NOT NULL,
  `status` varchar(2000) NOT NULL DEFAULT 'Posted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`Post_ID`, `date`, `receiver`, `sender`, `title`, `Body`, `status`) VALUES
(1, '2018-12-13', 'All guards', ' vehicle manager', 'strict iform', 'ahsjgkh jahdsjgh jkhg kjhjghsjkdhjkhdgjk hjkhdjkahg', 'Denied'),
(2, '2018-12-19', 'All office', 'vehicle manager', 'strict iform', 'ahsjgkh jahdsjgh jkhg kjhjghsjkdhjkhdgjk hjkhdjkahg', 'Denied'),
(3, '2018-06-06', 'ALL offices ', 'tade', 'to inform service', 'hdjhf jdhjfh jkahfjkahs jshdfjakhsfa kjdkjfh ajksdhfak hkajhdfjkah kajshdfjkah kjshdfjkashdfjkasdhf jkasdhfkjashdfjk hjkdshfjkasdh fjksdhfj kahsdfjkh ajkhd kjhdf akjhdsfjka hjdskhf kajhdkj fhdjkhfajkdhf jkadshfjkdh jakh khjfghajkdhjkwhgjhfklgjn jhfkghkgb', 'Posted'),
(4, '2018-06-07', 'hhhhjjjkkk', 'tadey', 'jiuoi', '', 'Posted'),
(5, '2018-06-07', 'hjh', 'tadey', 'ji', '', 'Posted'),
(6, '2018-06-14', 'computer science stuff', 'tadeyy', 'to inform our service delivery', 'toass     sdjsj  sd jewoier ncn,xviwoj   m,nvaaodjg         m,nfak gnsugia nnn jngjkssjganjsdnggnsdg            jgnjngsajjakl jlksjklsjflsdjowijkgjsjasdfj jgsjkdfsdjf jksdjfsdfsjdfjshgj jk j  jjgjgjgj j jgjgj j jadjfafdsjwioejajd   oijdjfksjfsjdfjas jiosdfjskdjfiowejfklasjfdklsjdklfjklsd kls jlksjdkfjksjfdklaj kjskdl lsjfklsjdklfjslkdfjowaiej alkwajdfklasdjfiowef jao jow sk jf wasjfow    we wosdklf awweajsf ajiowja ioj ls;daf joweijlakwejroewa lswkljalksm,xv ejweldgawtsgnnnn slgnw asldjkls scmvoi mmiowejkllkwej lsdfmwoiejrklw mfdsmwioe  we iwfsklmdfsdmf wefm dsklf weoi wdmsfwejao  we owjafksd  ghuowjeaefsd sdfm,n ,svacuwefn m,wen rjwwre2k3w najkdsnffffmnv iw wneosjdfslljklfk j jjasdf kds .', 'Posted'),
(7, '2018-06-16', 'ALL Drivers', 'tadeyy', 'Order have been postponed for 2018-1-23', 'how to drive safely\r\nWhen youâ€™re behind the wheel of a car â€“ whether alone or with passengers â€“ driving safely should always be your top concern. Weâ€™re more distracted than ever, so itâ€™s crucial to know the basics of safe driving and practice them every time youâ€™re on the road. Here are some safe driving tips:', 'Posted'),
(8, '2018-06-22', 'All offices', 'tadefig', 'to notify services ', 'as known we deserve to any sj for tje j perpara t ion of su', 'Posted'),
(9, '2018-06-24', 'to gurds', 'tadefigo', 'zare mekina aywotam', 'kjdahjk hjkshjkh jkhsdkjfh jkhadskjh kjhsjkh jkhjkfdshkajhfjkash jkhk hjk', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `U_name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone_number` int(15) NOT NULL,
  `plate` varchar(100) DEFAULT NULL,
  `Licence` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Free',
  `stat` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `Fname`, `Mname`, `Lname`, `U_name`, `Email`, `Phone_number`, `plate`, `Licence`, `Password`, `status`, `stat`) VALUES
(6, 'ghjgas', 'middle', 'Amare', 'alemie', 'tade@gmail.com', 912345678, 'AA3409', 'AA234-A456-6777-45hg', '123456', 'assigned', 'active'),
(7, 'Abebe', 'Mulatu', 'Nega', 'amare', 'ame@yahoo.com', 987654304, 'ET5609', 'AA56-Rf56-6777-33hg', '123456', 'assigned', 'active'),
(10, 'Amina', 'Ezedin', 'Oesman', 'amina', 'Amin@gmail.com', 11278398, 'HR3098', 'LO34-PO09-FB87-PM82', '12qwas', 'assigned', 'active'),
(12, 'Driver', 'Driver', 'Driver', 'driver', 'Drier@gmail.com', 945674323, NULL, 'DB56-hu80-DFGH-78HJ', 'asdfgh', 'Free', 'active'),
(9, 'Ismael', 'Jemal', 'Kedir', 'esami', 'esam@gmail.com', 945369834, 'HR0089', 'KI34-km09-NM87-PG80', '12qwas', 'assigned', 'active'),
(8, 'Kefelegn', 'Teka', 'Aman', 'Kefele', 'kefl@gmail.com', 912345678, 'DD5679', 'HR34-km09-FB87-PM79', '12qwas', 'assigned', 'active'),
(13, 'mekuanint', 'Tsegaye', 'belay', 'mekuy', 'meku@gmail.com', 923874997, NULL, 'BR34-MJ809-FY87-PL83', '12qwas', 'Free', 'active'),
(11, 'mekuanint', 'Tsegaye', 'belay', 'mekuyy', 'meku@gmail.com', 923874997, 'HU3498', 'BR34-MJ809-FY87-PL83', '123456', 'assigned', 'active'),
(5, 'Mohammod', 'Mftah', 'Ahmed', 'mohammed', 'mohe@gmail.com', 987654321, 'AA1022', 'AA234-A456-6gh7-gt56', '123456', 'assigned', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `getpass`
--

CREATE TABLE `getpass` (
  `number` int(10) NOT NULL,
  `date` date NOT NULL,
  `out_time` time(6) NOT NULL,
  `goto` varchar(1000) NOT NULL,
  `plate` varchar(20) NOT NULL,
  `out_date` date NOT NULL,
  `rdate` date DEFAULT NULL,
  `rtime` time(6) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'in'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `getpass`
--

INSERT INTO `getpass` (`number`, `date`, `out_time`, `goto`, `plate`, `out_date`, `rdate`, `rtime`, `status`) VALUES
(32, '2018-06-24', '02:00:00.000000', 'Diredawa', 'HU3498', '2018-06-27', '2018-05-25', '03:40:00.000000', 'Returned'),
(35, '2018-06-27', '09:30:00.000000', 'harr', 'AA3409', '2018-06-27', '2018-06-25', '22:29:00.000000', 'Returned'),
(37, '2018-06-27', '06:44:00.000000', 'Harar', 'HR3098', '2018-06-27', '2018-06-13', '05:01:00.000000', 'in'),
(36, '2018-06-25', '03:17:00.000000', 'Haramaya', 'HR0089', '2018-06-27', '2018-06-19', '04:45:00.000000', 'in'),
(38, '2018-06-25', '04:53:00.000000', 'Dire Dawa', 'AA1022', '2018-06-27', '2018-06-20', '06:49:00.000000', 'in'),
(39, '2018-06-28', '02:00:00.000000', 'Diredawa', 'DD5679', '2018-06-27', '2018-06-30', '03:40:00.000000', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE `guard` (
  `id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `U_name` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `working_area` varchar(2000) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`id`, `Fname`, `Lname`, `U_name`, `Phone`, `working_area`, `Password`, `status`) VALUES
(14, 'hjka', '09876543', 'adjfsh', '+25187897', 'Station', 'jkhakjhs', 'deactive'),
(11, 'tadesse', 'shimels', 'AJKSDHFF', '251456789374543', 'AHJKDjsjf', 'KJAHSFKJ', 'active'),
(13, 'Mohammod', 'mitahi', 'Guard', '+2519234567890', 'gendejey', 'Aa1234', 'active'),
(12, 'TADESSSE', 'HAJKHSA', 'KJJTWEWJK', '+2513252432', 'HJKHADSJKFajskdfasdf', 'AKJDSKJF', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(100) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `U_name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Office_no` varchar(20) NOT NULL,
  `Password` varchar(20) CHARACTER SET macce COLLATE macce_bin NOT NULL,
  `status` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `F_Name`, `L_name`, `U_name`, `Email`, `Phone_no`, `Office_no`, `Password`, `status`) VALUES
(6, 'Tidesse', 'Shimels', 'tadefigo', 'teme@me.com', '091478653', '79', 'asdfh', 'active'),
(7, 'Temesgen', 'Molla', 'temila', 'teme@me.com', '091478653', '74', 'temila', 'active'),
(8, 'oesman', 'amre', 'gahfj', 'oes@jha', '0987665675', '56', 'kjahjskdhf', 'active'),
(9, 'Eden', 'sefera', 'eden', 'emal@gmail.com', '98765432', '456', '12345', 'active'),
(10, 'Feruza', 'Elmo', 'feruza', 'mail@mail.com', '123456789', '87', 'Feruza@1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `sender` varchar(100) NOT NULL,
  `reciever` varchar(1000) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `date`, `sender`, `reciever`, `body`, `status`) VALUES
(2, '2018-06-19', 'Vehicle service manager', 'mekuyy', 'Hey your permission is allowed pleace be patient to return on time unless you will be penalize for it', '0'),
(11, '2018-06-24', 'alemie', 'amina', 'Please come back with the meaning of the following managments\r\n', '1'),
(6, '2018-06-21', 'amina', 'alemie', 'we will have the following settings we will have the following settings we will have the following settings we will have the following settings', '1'),
(12, '2018-06-24', 'amina', 'alemie', 'no no way this is all about business', '1'),
(13, '2018-06-24', 'alemie', 'amina', 'egna bizum anaweram eshi', '1'),
(14, '2018-06-24', 'Vehicle service manager', 'alemie', 'Hey your permission is allowed pleace be patient to return on time unless you will be penalize for it', '1'),
(15, '2018-06-24', 'alemie', 'Vehicle service manager', 'ok', '0'),
(16, '2018-06-24', 'Vehicle service manager', 'alemie', 'Hey your permission is allowed pleace be patient to return on time unless you will be penalize for it', '1'),
(17, '2018-06-24', 'alemie', 'Vehicle service manager', 'ok', '0'),
(18, '2018-06-24', 'alemie', 'amina', 'hey you are blessed', '1'),
(19, '2018-06-24', 'amina', 'alemie', 'awo', '1'),
(20, '2018-06-24', 'alemie', 'isc', 'hey you are blessed', '1'),
(21, '2018-06-24', 'isc', 'alemie', 'hgajhsgdfhjbh jgjhgdhjasgdhj ghjsdb hja gsdjf hjansdgfhj adf ghjsadgfja sjhsdgf jadsf ajhdfhj hajdsf jha ds hjasdfj hjadfjakdfsjka w sdfk akfadska gjkdgfjag ahdjsagfjh gjdgf jadgsf jhasdfghjsdgf jajajsdjhdsgf hhjsdfg hjg s', '1'),
(22, '2018-06-24', 'amina', 'cs', 'ok', '0'),
(23, '2018-06-24', 'alemie', 'cscience', 'sssss', '1'),
(24, '2018-06-24', 'alemie', 'cscience', 'ensra', '0'),
(25, '2018-06-24', 'cscience', 'amina', '', '1'),
(26, '2018-06-24', 'amina', 'cscience', 'beka dershalehu', '1'),
(27, '2018-06-24', 'cscience', 'amina', '', '1'),
(28, '2018-06-24', 'cscience', 'amina', '', '0'),
(29, '2018-06-24', 'amina', 'cscience', 'áŠ§áˆ¨ á‰ áŠ“á‰µáˆ… áˆáŠ•áˆ áˆ›á‹µáˆ¨áŒ áŠ áˆá‰½áˆáˆ ', '1'),
(30, '2018-06-24', 'cscience', 'alemie', '', '0'),
(31, '2018-06-24', 'cscience', 'amina', '', '0'),
(32, '2018-06-24', 'Vehicle service manager', 'alemie', 'Hey your permission is allowed pleace be patient to return on time unless you will be penalize for it', '0'),
(33, '2018-06-24', 'cscience', 'amina', '', '1'),
(34, '2018-06-24', 'alemie', 'amina', 'hjksahfj kjkdhfsjk hjkshdjkf hjksdhjkf hadsjfh jaksfd', '0'),
(35, '2018-06-24', 'amina', 'cscience', 'fkhajk jkdhjfkh ajkfds', '0');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `ID` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `head` varchar(1000) NOT NULL,
  `building` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `office_no` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`ID`, `name`, `head`, `building`, `email`, `phone_no`, `office_no`, `U_name`, `Password`, `status`) VALUES
(4, 'information science', 'zekarias teferi', '234', 'zak@gmail.com', 98765432, '87', 'isc', '123', 'active'),
(3, 'Information system', 'Hailay alemayehu', '500', 'dfghj@gmail.com', 98765432, '76', 'infosys', 'zxc', 'active'),
(5, 'Computer Science ', 'Abdulnasir', '513', 'cs@gmail.com', 97863234, '09', 'csciences', '123456', 'active'),
(6, 'STAT', 'mekonnen', '65', 'amareelias@gmail.com', 987654321, '66', 'stat', '123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `Per_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `Reason` varchar(5000) NOT NULL,
  `Idate` date NOT NULL,
  `Rdate` date NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`Per_id`, `date`, `reciever`, `fname`, `uname`, `type`, `Reason`, `Idate`, `Rdate`, `Status`) VALUES
(5, '2018-06-24', 'Vehicle service office', 'Alemayehu Amare ', 'alemie', 'Emergency', 'I got an emerency on today and i want to have rest for two days', '2018-06-24', '2018-06-26', 'Allowed'),
(6, '2018-06-24', 'Vehicle service office', 'Alemayehu Amare ', 'alemie', 'enter password', 'fotthe word i have done all user sh', '2018-06-25', '2018-06-26', 'Pending'),
(4, '2018-06-19', 'Vehicle service office', 'mekuanint belay ', 'mekuyy', 'Vacation', 'I got a vacation for jlksjj kjkjf kljasd', '2018-06-29', '2018-06-30', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Req_ID` int(100) NOT NULL,
  `receiver` varchar(1000) NOT NULL,
  `office` varchar(2099) NOT NULL,
  `date` date NOT NULL,
  `place_go` varchar(2000) NOT NULL,
  `vehicle` varchar(2000) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `issue_date` date NOT NULL,
  `issue_time` time(6) NOT NULL,
  `return_date` date NOT NULL,
  `return_time` time(6) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Pending',
  `plate` varchar(100) DEFAULT NULL,
  `denyreason` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Req_ID`, `receiver`, `office`, `date`, `place_go`, `vehicle`, `reason`, `name`, `issue_date`, `issue_time`, `return_date`, `return_time`, `Status`, `plate`, `denyreason`) VALUES
(1, 'Vehicle office', 'Information science', '2018-05-24', 'Diredawa', 'land cruiser', 'Emergency', 'tadesse', '2018-06-27', '02:00:00.000000', '2018-06-30', '03:40:00.000000', 'Allowed', 'DD5679', NULL),
(3, 'Vehicle service office', 'Computer Science ', '2018-06-09', 'Dire dawa', 'corola', 'To bring lecturers', 'Alemayehu ', '2018-06-20', '03:05:00.000000', '2018-06-21', '05:31:00.000000', 'Denied', NULL, NULL),
(5, 'Vehicle service office', 'information science', '2018-06-09', 'Harar', 'Land cruiser', 'For vacation of different purpose', 'Zekarias Teferi', '2018-06-12', '06:44:00.000000', '2018-06-13', '05:01:00.000000', 'Allowed', 'HR3098', NULL),
(6, 'Vehicle service office', 'Computer Science ', '2018-06-10', 'Haramaya', 'Land cruiser', 'To buy infrustructures', 'Alemu mulatu', '2018-06-19', '03:17:00.000000', '2018-06-19', '04:45:00.000000', 'Allowed', 'HR0089', NULL),
(7, 'Vehicle service office', 'Computer Science', '2018-06-14', 'Dire Dawa', 'Corola', 'have meeting', 'Gemechu', '2018-06-27', '02:00:00.000000', '2018-06-27', '12:59:00.000000', 'Denied', NULL, 'no cars like tht'),
(8, 'Vehicle service office', 'Computer Science  ', '2018-06-16', 'Dire Dawa', 'Corola', 'To bring lecturer', 'Zekarias Teferi', '2018-06-18', '04:53:00.000000', '2018-06-20', '06:49:00.000000', 'Allowed', 'AA1022', NULL),
(9, 'Vehicle service office', 'Computer Science  ', '2018-06-21', 'harar', 'lannd cruiser', 'for emergenccy case', 'zekarias', '2018-06-22', '13:21:00.000000', '2018-06-26', '08:18:00.000000', 'Denied', NULL, 'jsadh jhjkh djskhjhsss '),
(10, 'Vehicle service office', 'Computer Science  ', '2018-06-24', 'Harar', 'excutive', 'jkshjkfh jjkahjk', 'zekarias', '2018-06-28', '09:30:00.000000', '2018-06-25', '22:29:00.000000', 'Allowed', 'AA3409', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `Created_date` date NOT NULL,
  `Plate` varchar(10) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Max_km` varchar(10) NOT NULL,
  `Driver` varchar(20) NOT NULL,
  `seat` int(100) NOT NULL,
  `Fuel` varchar(20) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`Created_date`, `Plate`, `Type`, `Max_km`, `Driver`, `seat`, `Fuel`, `brand`, `Status`) VALUES
('2018-06-16', 'AA1022', 'Corola', '500', 'mohammed', 5, 'Gasoline', 'Toyota', 'Not Available'),
('2018-06-16', 'AA3409', 'Corola', '500', 'alemie', 4, 'Gasoline', 'Toyota', 'Available'),
('2018-06-20', 'DD5679', 'Corola', '890', 'Kefele', 7, 'Naftaline', 'Toyota', 'Not Available'),
('2018-06-20', 'ET5609', 'Excutive', '900', 'amare', 4, 'Gasoline', 'Toyota', 'Available'),
('2018-06-24', 'HR0089', 'land cruiser', '1234', 'esami', 5, 'Gasoline', 'Toyota', 'Not Available'),
('2018-06-19', 'HR3098', 'Land cruiser', '1080', 'amina', 5, 'Gasoline', 'Chevrolet', 'Not Available'),
('2018-06-20', 'HU3498', 'Land cruiser', '900', 'mekuyy', 5, 'Gasoline', 'Chevrolet', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`U_name`),
  ADD UNIQUE KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`Post_ID`),
  ADD UNIQUE KEY `ID` (`Post_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`U_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `getpass`
--
ALTER TABLE `getpass`
  ADD PRIMARY KEY (`number`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
  ADD PRIMARY KEY (`U_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`U_name`),
  ADD UNIQUE KEY `U_name` (`U_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`U_name`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`Per_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Req_ID`),
  ADD UNIQUE KEY `Req_ID` (`Req_ID`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`Plate`),
  ADD UNIQUE KEY `Plate` (`Plate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `Post_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `getpass`
--
ALTER TABLE `getpass`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `guard`
--
ALTER TABLE `guard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `Per_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Req_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `voting`
--
CREATE DATABASE IF NOT EXISTS `voting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voting`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

CREATE TABLE `nominees` (
  `id` int(11) NOT NULL,
  `org` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `year` varchar(3) NOT NULL,
  `stud_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`id`, `org`, `pos`, `name`, `course`, `year`, `stud_id`) VALUES
(1, 'SPORTS CLUB', 'President', 'Zuckerberg, Mark M.', 'BSIT', 'IV', '10006'),
(2, 'SPORTS CLUB', 'President', 'Gates, Bill M.', 'BEE', 'III', '10003'),
(3, 'SPORTS CLUB', 'Vice-President', 'Carter, Vince M.', 'BSE', 'II', '10001'),
(4, 'SPORTS CLUB', 'Vice-President', 'Cruz, Juan D.', 'BSF', 'III', '10002'),
(5, 'SPORTS CLUB', 'Secretary', 'Winslet, Kate L.', 'COE', 'III', '10005'),
(6, 'SPORTS CLUB', 'Secretary', 'Guivara, Jake S.', 'BEE', 'II', '10004'),
(7, 'SPORTS CLUB', 'Vice-President', 'danay', 'BSIT', 'III', '456');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `org` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `org`) VALUES
(1, 'SPORTS CLUB'),
(2, 'IT CLUB');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `org` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `org`, `pos`) VALUES
(1, 'SPORTS CLUB', 'President'),
(2, 'SPORTS CLUB', 'Vice-President'),
(3, 'SPORTS CLUB', 'Secretary'),
(4, 'IT CLUB', 'Chancellor'),
(5, 'IT CLUB', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `year` varchar(2) NOT NULL,
  `stud_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `name`, `course`, `year`, `stud_id`) VALUES
(1, 'Victor T. Grammer', 'BSIT', 'IV', '1004'),
(2, 'Brandon R. Hellwig', 'COE', 'II', '1002'),
(3, 'Robin T. Lee', 'COE', 'II', '1003'),
(4, 'Anthony J. Rasmussen', 'MIT', '14', '1001');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `org` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `org`, `pos`, `candidate_id`, `voters_id`) VALUES
(1, 'SPORTS CLUB', 'President', 1, 1),
(2, 'SPORTS CLUB', 'Vice-President', 4, 1),
(3, 'SPORTS CLUB', 'Secretary', 5, 1),
(4, 'SPORTS CLUB', 'President', 1, 2),
(5, 'SPORTS CLUB', 'Vice-President', 3, 2),
(6, 'SPORTS CLUB', 'Secretary', 5, 2),
(7, 'SPORTS CLUB', 'President', 1, 3),
(8, 'SPORTS CLUB', 'Vice-President', 3, 3),
(9, 'SPORTS CLUB', 'Secretary', 5, 3),
(10, 'SPORTS CLUB', 'President', 1, 4),
(11, 'SPORTS CLUB', 'Vice-President', 4, 4),
(12, 'SPORTS CLUB', 'Secretary', 5, 4),
(13, 'IT CLUB', 'Chancellor', 0, 1),
(14, 'IT CLUB', 'f', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominees`
--
ALTER TABLE `nominees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nominees`
--
ALTER TABLE `nominees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
