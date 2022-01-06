-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamboree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employeed`
--

CREATE TABLE `employeed` (
  `id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `pro_u_id` int(11) DEFAULT NULL,
  `pro_u_name` varchar(100) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `pro_detail` varchar(1000) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `ev_descrip` varchar(1000) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `p_u_id` int(11) NOT NULL,
  `p_u_name` varchar(100) NOT NULL,
  `location` varchar(555) NOT NULL,
  `event_date` date NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeed`
--

INSERT INTO `employeed` (`id`, `proposal_id`, `pro_u_id`, `pro_u_name`, `bid`, `pro_detail`, `event_type`, `event_title`, `ev_descrip`, `post_id`, `p_u_id`, `p_u_name`, `location`, `event_date`, `date`, `time`) VALUES
(8, 38, 6, 'Ammar', 120002, 'hey there testing 2', ' birthday', 'birhtday', 'kuch b', 16, 1, ' hamza', ' PCSIR Phase 1, Lahore', '2020-05-20', '2020-06-19', '05:44:16'),
(9, 39, 5, 'shaz', 189991, 'by shaz testing', ' birthday', 'birhtday', 'kuch b', 16, 1, ' hamza', ' PCSIR Phase 1, Lahore', '2020-05-20', '2020-06-19', '05:47:12'),
(10, 44, 1, 'hamza', 12000, 'testing\r\n', ' birthday', 'Customized Birthday ', 'I need Birthday Party decorator ', 21, 9, ' Ahmad', ' PCSIR Phase 1, Lahore', '0000-00-00', '2020-10-27', '11:06:21'),
(11, 46, 1, 'hamzak14', 16000, 'hii i m birthday party organizer', ' birthday', 'Customized Birthday ', 'I need Birthday Party decorator ', 21, 9, ' Ahmad', ' PCSIR Phase 1, Lahore', '0000-00-00', '2020-10-27', '11:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `jamboree_account`
--

CREATE TABLE `jamboree_account` (
  `id` int(11) NOT NULL,
  `account_holder` varchar(100) NOT NULL,
  `current_balance` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamboree_account`
--

INSERT INTO `jamboree_account` (`id`, `account_holder`, `current_balance`, `date`, `time`) VALUES
(1, 'hamzak14', 18509, '2020-11-09', '09:54:16'),
(2, 'shaz16', 1, '2020-11-09', '10:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(33) NOT NULL,
  `reciever_name` varchar(33) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `reciever_name`, `message`, `date_time`) VALUES
(62, 'hamzak14', 'shaz16', 'hi hamza shaz', '2020-06-18 07:26:50'),
(63, 'shaz16', 'hamzak14', 'hi hazma kamboh', '2020-06-18 07:27:03'),
(64, 'hamzak14', 'shaz16', 'how r u?', '2020-06-18 07:27:17'),
(65, 'hamzak14', 'awais123', 'hi', '2020-06-18 08:15:32'),
(66, 'hamzak14', 'alishar123', 'y', '2020-06-18 08:15:44'),
(67, 'hamzak14', 'shaz16', 'where r u', '2020-06-18 08:16:28'),
(68, 'alishar123', 'hamzak14', 'IDK y', '2020-06-18 08:26:45'),
(69, 'alishar123', 'hamzak14', 'hahah', '2020-06-18 08:26:56'),
(73, 'ammar12', 'hamzak14', 'hi hamza', '2020-06-18 07:09:59'),
(74, 'hamzak14', 'ammar12', 'hi ammar\n', '2020-06-18 07:10:34'),
(75, 'hamzak14', 'awais121', 'hi sunny', '2020-06-19 05:58:43'),
(76, 'ammar12', 'shaz16', 'hi', '2020-06-19 06:13:53'),
(77, 'ammar12', 'shaz16', 'han', '2020-06-19 06:15:10'),
(78, 'ammar12', 'awais121', 'hello', '2020-06-19 06:16:19'),
(79, 'ammar12', 'shaz16', 'han yahan sy sae ayga ', '2020-06-19 06:19:29'),
(80, 'hamzak14', 'awais123', 'hi\n\n', '2020-08-06 11:00:46'),
(81, 'hamzak14', 'Ammar12', 'oye\r\n', '2020-08-06 11:02:00'),
(82, 'hamzak14', 'hamzak14', 'hi ', '2020-10-09 03:06:45'),
(83, 'hamzak14', 'hamzak14', 'hi too', '2020-10-09 03:06:52'),
(84, 'hamzak14', 'ammar12', 'han bool', '2020-10-09 03:07:23'),
(85, 'hamzak14', 'ammar12', 'a>?\n', '2020-10-09 03:07:36'),
(86, 'hamzak14', 'ahmad21', 'hi', '2020-10-27 11:00:56'),
(87, 'ahmad21', 'hamzak14', 'hi', '2020-10-27 11:01:10'),
(88, 'hamzak14', 'hamzak14', 'hi', '2020-11-06 10:38:48'),
(89, 'hamzak14', 'hamzak14', 'helo', '2020-11-06 10:38:54'),
(90, 'ammar12', 'ahmad21', 'hi', '2020-11-07 05:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `u_id`, `image`, `description`) VALUES
(9, 7, '2.jpg', ''),
(16, 6, '1sr KPGC10.jpeg', ''),
(17, 6, 'nismoe.jpeg', ''),
(19, 6, 'FB_IMG_1494745237780.jpg', ''),
(20, 6, 'FB_IMG_1494745240206.jpg', ''),
(23, 1, 'IMG-20191110-WA0102.jpg', 'Pilot theme Birthday Organized By Craft Studio'),
(24, 1, 'IMG-20191101-WA0067.jpg', 'A Event Held At Superior University'),
(32, 1, 'IMG-20191031-WA0084.jpg', 'Jamboree at Superior'),
(33, 9, 'IMG-20190603-WA0027.jpg', 'I organized this event'),
(34, 9, 'FB_IMG_1481946581117.jpg', 'I can play for you as well as manage field for you');

-- --------------------------------------------------------

--
-- Table structure for table `postevent`
--

CREATE TABLE `postevent` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `event_title` varchar(100) DEFAULT NULL,
  `event_type` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `budgetmin` int(11) DEFAULT NULL,
  `budgetmax` int(11) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_descrip` varchar(1000) DEFAULT NULL,
  `currentdate` date NOT NULL,
  `currenttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postevent`
--

INSERT INTO `postevent` (`id`, `u_id`, `u_name`, `event_title`, `event_type`, `city`, `location`, `budgetmin`, `budgetmax`, `event_date`, `event_descrip`, `currentdate`, `currenttime`) VALUES
(12, 5, 'shaz16', 'birhtday', ' birthday', 'Bahawalpur', ' PCSIR Phase 1', 15000, 15000, '2020-01-30', 'hiiii', '2020-05-13', '12:38:05'),
(19, 1, 'hamzak14', 'Hi I need a photographer', ' custom', 'Lahore', ' nawab town', 15000, 20000, '2020-06-03', 'Testing kr rha hun bhai :D', '2020-06-02', '01:08:31'),
(20, 6, '	\nammar12', 'wedding Planner required', ' marriage', 'Lahore', ' New Muslim Town', 15000, 20000, '2020-06-03', 'krwa do shadi gareeb hu me', '2020-06-02', '04:13:47'),
(21, 9, 'ahmad21', 'Customized Birthday ', ' birthday', 'Lahore', ' PCSIR Phase 1', 10000, 15000, '2020-06-03', 'I need Birthday Party decorator ', '2020-06-03', '01:46:39'),
(44, 1, 'hamzak14', 'Test Event', ' birthday', 'Multan', ' Summar Mubarak Road', 10000, 200000, '2010-12-10', 'test run from multan', '2020-10-11', '06:55:02'),
(45, 1, 'hamzak14', 'birhtday', ' birthday', 'Lahore', ' PCSIR Phase 1', 15000, 200000, '2020-04-02', 'testing from mutan', '2020-10-27', '02:55:14'),
(46, 6, 'ammar12', 'Test Event', ' custom', 'Bahawalpur', ' Hashmi Garden', 10000, 120000, '2020-11-10', 'Testing ammar Account', '2020-11-07', '09:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `pro_u_id` int(11) DEFAULT NULL,
  `pro_u_name` varchar(100) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `pro_detail` varchar(1000) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `ev_descrip` varchar(1000) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `p_u_id` int(11) NOT NULL,
  `p_u_name` varchar(100) NOT NULL,
  `location` varchar(555) NOT NULL,
  `event_date` date NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `pro_u_id`, `pro_u_name`, `bid`, `pro_detail`, `event_type`, `event_title`, `ev_descrip`, `post_id`, `p_u_id`, `p_u_name`, `location`, `event_date`, `date`, `time`) VALUES
(37, 6, 'Ammar', 120001, 'Hey there i m testing', ' birthday', 'birthday party', 'hiiii', 12, 5, ' shaz', 'lahore', '2020-05-13', '2020-05-31', '09:57:17'),
(40, 1, 'hamza', 12000, 'testing shaz bid \nsdasnd,asdnaskjdn askdn akdn kasdkjnas kdnasjkdn akasnd akehefn sek fsdkfn sknef fnksdfn sk fnwehigbwwekfn dks isdf wern fksd', ' birthday', 'birhtday', 'hiiii', 12, 5, ' shaz', ' PCSIR Phase 1, Bahawalpur', '2020-05-13', '2020-06-01', '07:22:13'),
(41, 5, 'shaz', 189992, 'krdo ga bhai abi testing chal rhi', ' custom', 'Hi I need a photographer', 'Testing kr rha hun bhai :D', 19, 1, ' hamza', ' nawab town, Lahore', '2020-06-02', '2020-06-01', '11:51:17'),
(42, 5, 'shaz', 189990, 'me krwata hu teri shadi heheeh', ' marriage', 'wedding Planner required', 'krwa do shadi gareeb hu me', 20, 6, ' Ammar', ' New Muslim Town, Lahore', '2020-06-02', '2020-06-02', '01:14:34'),
(43, 9, 'Ahmad', 12000, 'Hi I m a birthday party decorator i can do your event', ' marriage', 'wedding Planner required', 'krwa do shadi gareeb hu me', 20, 6, ' Ammar', ' New Muslim Town, Lahore', '0000-00-00', '2020-06-02', '10:52:59'),
(45, 1, 'hamza', 12500, 'me ye krdu ga ye to huga', ' marriage', 'wedding Planner required', 'krwa do shadi gareeb hu me', 20, 6, ' Ammar', ' New Muslim Town, Lahore', '0000-00-00', '2020-06-11', '02:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `skills` varchar(555) NOT NULL,
  `portfolio` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `username`, `address`, `gender`, `image`, `title`, `description`, `skills`, `portfolio`) VALUES
(1, 'hamza', 'safdar', 'hamza@gmail.com', 'hamza', 'hamzak14', 'Multan, Pakistan', 'male', 'hamza2.jpg', 'I m a party decorator ', 'Birthday Party Organizer', 'customized Theme, Birthday party Organizer, etc', '114fb50e228758d7c5d62a0576f8d900.jpg'),
(5, 'shaz', 'beta', 'shaz1@gmail.com', 'shaz', 'shaz16', 'Bahawalpur, Pakistan', 'male', 'B612_20170127_172204.jpg', 'PhotoGrapher And Decorator.', 'I M Good At Photoshots. See My Insta.\r\n', 'mjh kuch ni ata , per ye to huga :D', ''),
(6, 'Ammar', 'younis', 'ammar@gmail.com', 'ammar', 'ammar12', 'Hashmi Garden Bahawalpur, Pakistan', 'male', 'IMG-20190411-WA0091.jpg', 'Photographer!', 'Good at video editing, ', 'Photo Grapher', ''),
(7, 'sunny', 'kamboh', 'kamboh@gmail.com', 'haji123', 'awais121', 'bwp  bacha', 'male', 'IMG_20190810_153325.jpg', 'event organizer', 'I m event organizer', '', ''),
(8, 'sharif', 'yonis', 'sharif@gmail.com', 'sharif', 'sharif12', 'Hashmi town, Bahawalpur', 'male', 'c2.jpg', 'Kuch b ni', 'Photographer', 'aviator', '4.png'),
(9, 'Ahmad', 'Hussnain', 'Ahmad@gmail.com', 'ahmad', 'ahmad21', 'Multan, Pakistan', 'male', '6.png', 'I m a Footballer', 'Well i Can organize and manage football tournaments  ', 'Footballer, Dribbling, dodger, Referee, management ', ''),
(12, 'alpha', 'beta', 'alpha@beta.com', 'alpha', 'alpha007', 'Multan, Pakistan', 'male', '', 'acha', '', '', ''),
(14, 'ali', 'shar', 'ali2@gmail.com', 'ali', 'alishar123', 'Bahawalpur, Pakistan', 'male', 'IMG-20180629-WA0068.jpg', 'photographer', 'designer', 'farigh rhna', ''),
(17, 'awais', 'kamboh', 'awais@gmail.com', 'awais', 'awais123', 'Multan Pakistan', 'male', 'eventpostlogo.png', 'Velaaaa', 'Bot e vela hu', 'Farigh tareen insan', '');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `w_user` varchar(55) NOT NULL,
  `name_on_card` varchar(55) NOT NULL,
  `card_number` int(14) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `valid_from` varchar(100) NOT NULL,
  `until_valid` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `w_user`, `name_on_card`, `card_number`, `amount`, `valid_from`, `until_valid`, `date`, `time`) VALUES
(1, 'hamzak14', 'Muhammad Hamza Safd', 2147483647, '500', '0000-00-00', '0000-00-00', '2020-11-08', '11:51:12'),
(2, 'hamzak14', 'Muhammad Hamza Safd', 2147483647, '500', '0000-00-00', '0000-00-00', '2020-11-08', '12:02:09'),
(3, 'hamzak14', 'Muhammad Hamza Safd', 2147483647, '500', ' 12/2020', '12/2025', '2020-11-09', '07:08:37'),
(10, 'shaz16', 'Hamza Shaz', 2147483647, '2', ' 12/2020', '12/2025', '2020-11-09', '11:15:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeed`
--
ALTER TABLE `employeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamboree_account`
--
ALTER TABLE `jamboree_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postevent`
--
ALTER TABLE `postevent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employeed`
--
ALTER TABLE `employeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jamboree_account`
--
ALTER TABLE `jamboree_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `postevent`
--
ALTER TABLE `postevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `postevent`
--
ALTER TABLE `postevent`
  ADD CONSTRAINT `postevent_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `postevent` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
