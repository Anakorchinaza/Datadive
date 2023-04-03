-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 05:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'superadmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `email`, `phoneno`, `message`, `created_at`) VALUES
(1, 'Chinaza', 'Anakor', 'chi@gmail.com', '9707966666666666', 'hello', '2023-01-12 10:36:44'),
(2, 'Newname', 'Lastname', 'newname@gmail', '0908774564', 'dndhdhj                                   hello there', '2023-01-20 09:25:11'),
(5, 'Chinaza', 'Damila', 'joy@gmail.com', '0908774564', '//////////////// hlnln       jhgjhggjgggggghello there', '2023-01-20 09:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `package` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `price`, `package`, `body`, `created_at`) VALUES
(1, 'basic', 34, 'Monthly Pack', '<ul><li>Consumer Intelligence</li><li>Social Intelligence</li></ul><p>&nbsp;</p>', '2023-01-20 10:30:23'),
(2, 'pro', 100, 'Monthly Pack', '<ul><li>Consumer Intelligence</li><li>Social Intelligence</li></ul>', '2023-01-20 10:35:00'),
(3, 'enterprise', 345, 'Monthly Pack', '<ul><li>Consumer Intelligence</li><li>Social Intelligence</li></ul>', '2023-01-20 11:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `header` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `images`, `body`, `header`, `created_at`, `updated_at`) VALUES
(1, 'img/1673880206DAggregate.png', '<p>&nbsp;</p><p>Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.</p>', 'Top Businesses', '2023-01-19 20:35:17', '2023-01-19 20:35:17'),
(2, 'img/1673880263001.png', 'Learn About The Olin&nbsp;Business&nbsp;School &amp; The&nbsp;Top-Ranked Full-Time MBA Specialties. Make an impact with a truly global full-time MBA. Pioneer change, for good. Team-Based Approach. Collaborative Atmosphere. Global Alumni Network. Experiential Learning.', 'D-Aggregate Datadive', '2023-01-16 14:44:23', '2023-01-16 14:44:23'),
(3, 'img/1673882218002.png', 'There will be a point in your new pursuit where the learning and processes gets overwhelming and you&#39;d start nursing thoughts of giving up.Know this:▪︎ What will pay you will cost you,▪︎ Remind yourself why you started,▪︎ Share your challenge(s) with someone that has interest in your growth,▪︎ You can take a little break, engage your mind and pray.It&#39;s a new week guys, let&#39;s make the best out of it.', 'Slider 1', '2023-01-16 15:16:58', '2023-01-16 15:16:58'),
(4, 'img/16738823971659604294case.jpg', 'What is the #1 business school in the world?Rather than weighing school-supplied data, the ranking combines publicly-available data with survey responses ranging from academic reputation to recruiter feedback. This year, the&nbsp;Wharton School&nbsp;ranked #1 with CEOWORLD.4 Jan 2023', 'Slider 2', '2023-01-16 15:19:57', '2023-01-16 15:19:57'),
(5, 'img/16738824611659604705case1.jpg', 'Using data collected during our MBA ranking process, Fortune has compiled the top five MBA programs with the highest mean starting salaries, based on 2022 data.Stanford Graduate School of Business.New York University (Stern)University of Chicago (Booth)University of Pennsylvania (Wharton)Harvard Business School.6 Oct 2022&nbsp;The top 5 full-time MBA programs with the highest starting salaries - Fortunehttps://fortune.com&nbsp;&rsaquo; education &rsaquo; articles &rsaquo; the-top-5-full-t...Search for:&nbsp;Which Business School has highest salary?', 'Slider 3', '2023-01-16 15:21:01', '2023-01-16 15:21:01'),
(6, 'img/16738849501670988034landscape2.jpg', '<p>Is fashion school profitable?Fashion School Business Plan is a lucrative business that needs a lot of strategic Planning to start and a business coach like Dayo Adetiloye to help you start the Implementation.Is fashion school profitable?Fashion School Business Plan is a lucrative business that needs a lot of strategic Planning to start and a business coach like Dayo Adetiloye to help you start the Implementation.</p>', 'Fashion Product', '2023-01-16 16:02:30', '2023-01-16 16:02:30'),
(7, 'img/16738850601670908535landscape6.jpg', '<p>&nbsp;</p><p>Can a fashion business make money?&nbsp;You can make serious cash (while doing work you love) as a Successful Fashion Freelancer. Confidently presenting yourself and setting competitive rates is one key to getting there. But beyond confidence, there is another factor that can affect how much money you&#39;ll make freelancing in fashion.</p>', 'Marketing Trend', '2023-01-19 20:34:34', '2023-01-19 20:34:34'),
(8, 'img/16738828041660296730img1.png', 'Can a fashion business make money?&nbsp;You can make serious cash (while doing work you love) as a Successful Fashion Freelancer. Confidently presenting yourself and setting competitive rates is one key to getting there. But beyond confidence, there is another factor that can affect how much money you&#39;ll make freelancing in fashion.', 'Testing 1', '2023-01-16 15:26:44', '2023-01-16 15:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phoneno`, `password`, `created_at`) VALUES
(6, 'David', 'Wiliams', 'dave@gmail.com', '0908736253', '25d55ad283aa400af464c76d713c07ad', '2023-01-10 15:22:56'),
(20, 'Samuel', 'TeamLead', 'sammy@gmail.com', '0908774564', 'd41d8cd98f00b204e9800998ecf8427e', '2023-01-20 16:42:00'),
(21, 'test', 'tester', 'test@gmail.com', '0908774564', 'd41d8cd98f00b204e9800998ecf8427e', '2023-01-20 16:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admini_email` (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
