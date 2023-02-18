-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 10:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `id` int(11) NOT NULL,
  `user_sql` varchar(230) NOT NULL,
  `pass_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`id`, `user_sql`, `pass_sql`) VALUES
(29, 'soumo', '$2y$10$b9qakjno/.DEyuxN/k/DG.Lm9/aqslRYMfJDBIgYEDeaeuCxNqS6K');

-- --------------------------------------------------------

--
-- Table structure for table `cv_download_info`
--

CREATE TABLE `cv_download_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(230) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `agree` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graphics_uploadform`
--

CREATE TABLE `graphics_uploadform` (
  `id` int(11) NOT NULL,
  `Title_graphics` varchar(230) NOT NULL,
  `subtitle_graphics` varchar(230) NOT NULL,
  `Image_graphicsfile` varchar(230) NOT NULL,
  `project_information_sql` varchar(230) NOT NULL,
  `category_sql` varchar(230) NOT NULL,
  `client_sql` varchar(230) NOT NULL,
  `date_sql` varchar(230) NOT NULL,
  `url_sql` varchar(230) NOT NULL,
  `title_details_sql` varchar(230) NOT NULL,
  `details_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphics_uploadform`
--

INSERT INTO `graphics_uploadform` (`id`, `Title_graphics`, `subtitle_graphics`, `Image_graphicsfile`, `project_information_sql`, `category_sql`, `client_sql`, `date_sql`, `url_sql`, `title_details_sql`, `details_sql`) VALUES
(8, 'CafeteriaCafe ', ' Logo Design', 'graphics-07.png', '', '', '', '', '', '', ''),
(9, 'Cafeteria', ' Hodding', 'graphics-08.png', '', '', '', '', '', '', ''),
(10, 'Cafeteria', ' Visiting card', 'graphics-09.png', '', '', '', '', '', '', ''),
(20, 'Cafeteria', ' Dangler', 'graphics-12.png', '', '', '', '', '', '', ''),
(21, 'Cafeteria', ' Poster', 'graphics-11.png', '', '', '', '', '', '', ''),
(22, 'Cafeteria', ' Sticker', 'graphics-10.png', '', '', '', '', '', '', ''),
(23, 'Car Company', ' Logo', 'graphics-01.png', '', '', '', '', '', '', ''),
(24, 'Car Company', ' Hodding', 'graphics-02.png', '', '', '', '', '', '', ''),
(25, 'Car Company', ' Leaflet Design', 'graphics-03.png', '', '', '', '', '', '', ''),
(26, 'Car Company', ' Visiting card', 'graphics-04.png', '', '', '', '', '', '', ''),
(27, 'Car Company', ' Standee Design', 'graphics-18.png', '', '', '', '', '', '', ''),
(28, 'Car Company', ' Dangler', 'graphics-06.png', '', '', '', '', '', '', ''),
(29, 'Ice cream company', ' Logo Design', 'graphics-13.png', '', '', '', '', '', '', ''),
(30, 'Ice cream company', ' Calender Design', 'graphics-14.png', '', '', '', '', '', '', ''),
(31, 'Ice cream company', ' Visiting card', 'graphics-16.png', '', '', '', '', '', '', ''),
(32, 'Ice cream company', ' Envalope', 'graphics-17.png', '', '', '', '', '', '', ''),
(33, 'Ice cream company', ' Leaflet Design', 'graphics-15.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `motion_uploadform`
--

CREATE TABLE `motion_uploadform` (
  `id` int(11) NOT NULL,
  `Title_motion` varchar(230) NOT NULL,
  `subtitle_motion` varchar(230) NOT NULL,
  `Image_motionfile` varchar(230) NOT NULL,
  `project_information_sql` varchar(230) NOT NULL,
  `category_sql` varchar(230) NOT NULL,
  `client_sql` varchar(230) NOT NULL,
  `date_sql` varchar(230) NOT NULL,
  `url_sql` varchar(230) NOT NULL,
  `title_details_sql` varchar(230) NOT NULL,
  `details_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_uploadform`
--

CREATE TABLE `web_uploadform` (
  `id` int(11) NOT NULL,
  `Title_webimg` varchar(230) NOT NULL,
  `subtitle_web` varchar(230) NOT NULL,
  `Image_webfile` varchar(230) NOT NULL,
  `project_information_sql` varchar(230) NOT NULL,
  `category_sql` varchar(230) NOT NULL,
  `client_sql` varchar(230) NOT NULL,
  `date_sql` varchar(230) NOT NULL,
  `url_sql` varchar(230) NOT NULL,
  `title_details_sql` varchar(230) NOT NULL,
  `details_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_uploadform`
--

INSERT INTO `web_uploadform` (`id`, `Title_webimg`, `subtitle_web`, `Image_webfile`, `project_information_sql`, `category_sql`, `client_sql`, `date_sql`, `url_sql`, `title_details_sql`, `details_sql`) VALUES
(25, 'Landing Page ', 'Car company', 'webdesign-02.png', '', '', '', '', '', '', ''),
(26, 'Ice cream company', 'Landing Page ', 'webdesign-01.jpg', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_download_info`
--
ALTER TABLE `cv_download_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphics_uploadform`
--
ALTER TABLE `graphics_uploadform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motion_uploadform`
--
ALTER TABLE `motion_uploadform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_uploadform`
--
ALTER TABLE `web_uploadform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cv_download_info`
--
ALTER TABLE `cv_download_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `graphics_uploadform`
--
ALTER TABLE `graphics_uploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `motion_uploadform`
--
ALTER TABLE `motion_uploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `web_uploadform`
--
ALTER TABLE `web_uploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
