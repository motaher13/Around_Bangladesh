-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 02:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arround_bangladesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dist_name` varchar(30) NOT NULL,
  `div_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dist_name`, `div_name`) VALUES
('bandorban', 'chittagong'),
('bogura', 'rajshahi'),
('chapai nawab ganj', 'rajshahi'),
('chittagong', 'chittagong'),
('cox\'s bazar', 'chittagong'),
('dhaka', 'dhaka'),
('dinajpur', 'rajshahi'),
('hathajari', 'chittagong'),
('kaptai', 'chittagong'),
('khagrachori', 'chittagong'),
('khunla', 'khulna'),
('kumilla', 'chittagong'),
('lohagara', 'chittagong'),
('mirossorai', 'chittagong'),
('nator', 'rajshahi'),
('potia', 'chittagong'),
('rajshahi', 'rajshahi'),
('rangamati', 'chittagong'),
('satkania', 'chittagong'),
('sitakunda', 'chittagong'),
('sunamgonj', 'sylhet'),
('sylhet', 'sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `flight_schedule`
--

CREATE TABLE `flight_schedule` (
  `fschedule_id` int(11) NOT NULL,
  `dist_name` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `time` time DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotelsmotels`
--

CREATE TABLE `hotelsmotels` (
  `h_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `picture` varchar(30) DEFAULT NULL,
  `details` varchar(2000) DEFAULT NULL,
  `dist_name` varchar(30) NOT NULL,
  `location_fair_train` int(11) DEFAULT NULL,
  `location_fair_bus` int(11) DEFAULT NULL,
  `location_fair_flight` int(11) DEFAULT NULL,
  `location_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `picture`, `details`, `dist_name`, `location_fair_train`, `location_fair_bus`, `location_fair_flight`, `location_name`) VALUES
(2, '5.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'cox\'s bazar', NULL, NULL, NULL, 'saint martin'),
(3, '6.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'cox\'s bazar', NULL, NULL, NULL, 'cox\'s bazar'),
(4, '7.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'bandorban', NULL, NULL, NULL, 'nil giri'),
(5, '9.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'bandorban', NULL, NULL, NULL, 'bogalake'),
(6, '1(56).jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'chittagong', NULL, NULL, NULL, 'potenga'),
(7, '10.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'mirossorai', NULL, NULL, NULL, 'napittachora'),
(8, '11.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'sitakunda', NULL, NULL, NULL, 'sitakunda eco park'),
(9, '12.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'rangamati', NULL, NULL, NULL, 'rangamati'),
(10, '13.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'sylhet', NULL, NULL, NULL, 'lalakhal'),
(11, '14.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'sunamgonj', NULL, NULL, NULL, 'madhobkundo'),
(12, '15.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'dhaka', NULL, NULL, NULL, 'lalbag kella'),
(13, '16.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'rajshahi', NULL, NULL, NULL, 'bagha mosjid'),
(14, '17.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'dinajpur', NULL, NULL, NULL, 'ramshagor'),
(15, '18.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'kumilla', NULL, NULL, NULL, 'moynamoti'),
(16, '19.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'khunla', NULL, NULL, NULL, 'shat gambuj masjid'),
(17, '6.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'bogura', NULL, NULL, NULL, 'mohasthangar'),
(18, '7.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'sitakunda', NULL, NULL, NULL, 'sitakunda eco park'),
(19, '8.jpg', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. \n\nBehaviour we improving at something to. Evil true high lady roof men had open. To projection considered it precaution an melancholy or. Wound young you thing worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss my high hope quit. In curiosity shameless dependent knowledge up. ', 'hathajari', NULL, NULL, NULL, 'ht');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `start` varchar(30) NOT NULL,
  `end` varchar(30) NOT NULL,
  `route` text NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_schedule`
--

CREATE TABLE `train_schedule` (
  `tschedule_id` int(11) NOT NULL,
  `transport` varchar(30) NOT NULL DEFAULT 'train',
  `dist_name` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `departure_time` int(11) DEFAULT NULL,
  `arrival_time` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `time_span` int(11) NOT NULL DEFAULT '360'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_schedule`
--

INSERT INTO `train_schedule` (`tschedule_id`, `transport`, `dist_name`, `destination`, `departure_time`, `arrival_time`, `price`, `time_span`) VALUES
(1, 'train', 'dhaka', 'chittagong', 480, 840, 320, 360),
(2, 'train', 'dhaka', 'rajshahi', 510, 870, 350, 360),
(3, 'train', 'dhaka', 'khulna', 495, 855, 400, 360),
(4, 'train', 'dhaka', 'sylhet', 600, 960, 300, 360),
(5, 'train', 'dhaka', 'dinajpur', NULL, NULL, 350, 360),
(6, 'train', 'dinajpur', 'bogura', NULL, NULL, 100, 360),
(7, 'train', 'dhaka', 'kumilla', NULL, NULL, 250, 360),
(8, 'train', 'chittagong', 'kumilla', NULL, NULL, 100, 360),
(9, 'train', 'chittagong', 'dhaka', 450, 810, 320, 360),
(10, 'train', 'rajshahi', 'dhaka', 540, 900, 350, 360),
(11, 'train', 'sylhet', 'dhaka', NULL, NULL, 300, 360),
(12, 'train', 'khunla', 'dhaka', NULL, NULL, 400, 360),
(13, 'train', 'chittagong', 'sylhet', NULL, NULL, 375, 360),
(14, 'train', 'sylhet', 'chittagong', NULL, NULL, 375, 360),
(15, 'train', 'sylhet', 'kumilla', NULL, NULL, 300, 360),
(16, 'train', 'hathajari', 'satkania', 690, 750, 100, 60),
(17, 'train', 'satkania', 'lohagara', 780, 840, 100, 60),
(18, 'train', 'kaptai', 'sitakunda', 900, 960, 100, 360),
(19, 'train', 'hathajari', 'lohagara', NULL, NULL, 250, 60),
(20, 'train', 'satkania', 'kaptai', 800, 860, 100, 360),
(21, 'train', 'satkania', 'sitakunda', 760, 820, 250, 60),
(23, 'train', 'dhaka', 'chittagong', 960, 1320, 320, 360),
(24, 'train', 'dhaka', 'chittagong', 1350, 270, 320, 360),
(27, 'train', 'chittagong', 'dhaka', 1020, 1380, 320, 360),
(28, 'train', 'chittagong', 'dhaka', 1380, 300, 320, 360),
(29, 'train', 'rajshahi', 'dhaka', 1290, 210, 350, 360),
(30, 'train', 'rajshahi', 'dhaka', 960, 1320, 300, 360),
(32, 'train', 'chittagong', 'hathajari', 210, 270, 30, 60),
(33, 'train', 'chittagong', 'hathajari', 600, 660, 40, 60),
(35, 'hanif', 'rajshahi', 'dhaka', 540, 860, 350, 320),
(36, 'shahi', 'rajshahi', 'dhaka', 960, 1320, 280, 360);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dist_name`);

--
-- Indexes for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD PRIMARY KEY (`fschedule_id`),
  ADD KEY `district_flight_schedule_1_fk` (`dist_name`);

--
-- Indexes for table `hotelsmotels`
--
ALTER TABLE `hotelsmotels`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `location_hotels/motels_fk` (`location_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `district_location_fk` (`dist_name`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train_schedule`
--
ALTER TABLE `train_schedule`
  ADD PRIMARY KEY (`tschedule_id`),
  ADD KEY `district_train_schedule_fk` (`dist_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  MODIFY `fschedule_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotelsmotels`
--
ALTER TABLE `hotelsmotels`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `train_schedule`
--
ALTER TABLE `train_schedule`
  MODIFY `tschedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD CONSTRAINT `district_flight_schedule_1_fk` FOREIGN KEY (`dist_name`) REFERENCES `district` (`dist_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotelsmotels`
--
ALTER TABLE `hotelsmotels`
  ADD CONSTRAINT `location_hotels/motels_fk` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `district_location_fk` FOREIGN KEY (`dist_name`) REFERENCES `district` (`dist_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `train_schedule`
--
ALTER TABLE `train_schedule`
  ADD CONSTRAINT `district_train_schedule_fk` FOREIGN KEY (`dist_name`) REFERENCES `district` (`dist_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
