-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 12:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spolnici_walkadog`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `breed_id` int(11) NOT NULL,
  `breed` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`breed_id`, `breed`) VALUES
(1, 'Affenpinscher\r\n'),
(2, 'Afghan Hound\r\n'),
(3, 'Airedale Terrier\r\n'),
(4, 'Akita\r\n'),
(5, 'Alaskan Klee Kai\r\n'),
(6, 'Alaskan Malamute\r\n'),
(7, 'American Bulldog\r\n'),
(8, 'American English Coonhound\r\n'),
(9, 'American Eskimo Dog\r\n'),
(10, 'American Foxhound\r\n'),
(11, 'American Pit Bull Terrier\r\n'),
(12, 'American Staffordshire Terrier\r\n'),
(13, 'American Water Spaniel\r\n'),
(14, 'Anatolian Shepherd Dog\r\n'),
(15, 'Appenzeller Sennenhunde\r\n'),
(16, 'Australian Cattle Dog\r\n'),
(17, 'Australian Kelpie\r\n'),
(18, 'Australian Shepherd\r\n'),
(19, 'Australian Terrier\r\n'),
(20, 'Azawakh\r\n'),
(21, 'Barbet\r\n'),
(22, 'Basenji\r\n'),
(23, 'Basset Hound\r\n'),
(24, 'Beagle\r\n'),
(25, 'Bearded Collie\r\n'),
(26, 'Bedlington Terrier\r\n'),
(27, 'Belgian Malinois\r\n'),
(28, 'Belgian Sheepdog\r\n'),
(29, 'Belgian Tervuren\r\n'),
(30, 'Berger Picard\r\n'),
(31, 'Bernedoodle\r\n'),
(32, 'Bernese Mountain Dog\r\n'),
(33, 'Bichon Frise\r\n'),
(34, 'Black and Tan Coonhound\r\n'),
(35, 'Black Mouth Cur\r\n'),
(36, 'Black Russian Terrier\r\n'),
(37, 'Bloodhound\r\n'),
(38, 'Blue Lacy\r\n'),
(39, 'Bluetick Coonhound\r\n'),
(40, 'Boerboel\r\n'),
(41, 'Bolognese\r\n'),
(42, 'Border Collie\r\n'),
(43, 'Border Terrier\r\n'),
(44, 'Borzoi\r\n'),
(45, 'Boston Terrier\r\n'),
(46, 'Bouvier des Flandres\r\n'),
(47, 'Boxer\r\n'),
(48, 'Boykin Spaniel\r\n'),
(49, 'Bracco Italiano\r\n'),
(50, 'Briard\r\n'),
(51, 'Brittany\r\n'),
(52, 'Brussels Griffon\r\n'),
(53, 'Bull Terrier\r\n'),
(54, 'Bulldog\r\n'),
(55, 'Bullmastiff\r\n'),
(56, 'Cairn Terrier\r\n'),
(57, 'Canaan Dog\r\n'),
(58, 'Cane Corso\r\n'),
(59, 'Cardigan Welsh Corgi\r\n'),
(60, 'Catahoula Leopard Dog\r\n'),
(61, 'Caucasian Shepherd Dog\r\n'),
(62, 'Cavalier King Charles Spaniel\r\n'),
(63, 'Cesky Terrier\r\n'),
(64, 'Chesapeake Bay Retriever\r\n'),
(65, 'Chihuahua\r\n'),
(66, 'Chinese Crested\r\n'),
(67, 'Chinese Shar-Pei\r\n'),
(68, 'Chinook\r\n'),
(69, 'Chow Chow\r\n'),
(70, 'Clumber Spaniel\r\n'),
(71, 'Cockapoo\r\n'),
(72, 'Cocker Spaniel\r\n'),
(73, 'Collie\r\n'),
(74, 'Coton de Tulear\r\n'),
(75, 'Curly-Coated Retriever\r\n'),
(76, 'Dachshund\r\n'),
(77, 'Dalmatian\r\n'),
(78, 'Dandie Dinmont Terrier\r\n'),
(79, 'Doberman Pinscher\r\n'),
(80, 'Dogo Argentino\r\n'),
(81, 'Dogue de Bordeaux\r\n'),
(82, 'Dutch Shepherd\r\n'),
(83, 'English Cocker Spaniel\r\n'),
(84, 'English Foxhound\r\n'),
(85, 'English Setter\r\n'),
(86, 'English Springer Spaniel\r\n'),
(87, 'English Toy Spaniel\r\n'),
(88, 'Entlebucher Mountain Dog\r\n'),
(89, 'Field Spaniel\r\n'),
(90, 'Finnish Lapphund\r\n'),
(91, 'Finnish Spitz\r\n'),
(92, 'Flat-Coated Retriever\r\n'),
(93, 'Fox Terrier\r\n'),
(94, 'French Bulldog\r\n'),
(95, 'German Pinscher\r\n'),
(96, 'German Shepherd Dog\r\n'),
(97, 'German Shorthaired Pointer\r\n'),
(98, 'German Wirehaired Pointer\r\n'),
(99, 'Giant Schnauzer\r\n'),
(100, 'Glen of Imaal Terrier\r\n'),
(101, 'Goldador\r\n'),
(102, 'Golden Retriever\r\n'),
(103, 'Goldendoodle\r\n'),
(104, 'Gordon Setter\r\n'),
(105, 'Great Dane\r\n'),
(106, 'Great Pyrenees\r\n'),
(107, 'Greater Swiss Mountain Dog\r\n'),
(108, 'Greyhound\r\n'),
(109, 'Harrier\r\n'),
(110, 'Havanese\r\n'),
(111, 'Ibizan Hound\r\n'),
(112, 'Icelandic Sheepdog\r\n'),
(113, 'Irish Red and White Setter\r\n'),
(114, 'Irish Setter\r\n'),
(115, 'Irish Terrier\r\n'),
(116, 'Irish Water Spaniel\r\n'),
(117, 'Irish Wolfhound\r\n'),
(118, 'Italian Greyhound\r\n'),
(119, 'Jack Russell Terrier\r\n'),
(120, 'Japanese Chin\r\n'),
(121, 'Japanese Spitz\r\n'),
(122, 'Korean Jindo Dog\r\n'),
(123, 'Karelian Bear Dog\r\n'),
(124, 'Keeshond\r\n'),
(125, 'Kerry Blue Terrier\r\n'),
(126, 'Komondor\r\n'),
(127, 'Kooikerhondje\r\n'),
(128, 'Kuvasz\r\n'),
(129, 'Labradoodle\r\n'),
(130, 'Labrador Retriever\r\n'),
(131, 'Lagotto Romagnolo\r\n'),
(132, 'Lakeland Terrier\r\n'),
(133, 'Lancashire Heeler\r\n'),
(134, 'Leonberger\r\n'),
(135, 'Lhasa Apso\r\n'),
(136, 'Lowchen\r\n'),
(137, 'Maltese\r\n'),
(138, 'Maltese Shih Tzu\r\n'),
(139, 'Maltipoo\r\n'),
(140, 'Manchester Terrier\r\n'),
(141, 'Mastiff\r\n'),
(142, 'Miniature Pinscher\r\n'),
(143, 'Miniature Schnauzer\r\n'),
(144, 'Mudi\r\n'),
(145, 'Mutt\r\n'),
(146, 'Neapolitan Mastiff\r\n'),
(147, 'Newfoundland\r\n'),
(148, 'Norfolk Terrier\r\n'),
(149, 'Norwegian Buhund\r\n'),
(150, 'Norwegian Elkhound\r\n'),
(151, 'Norwegian Lundehund\r\n'),
(152, 'Norwich Terrier\r\n'),
(153, 'Nova Scotia Duck Tolling Retriever\r\n'),
(154, 'Old English Sheepdog\r\n'),
(155, 'Otterhound\r\n'),
(156, 'Papillon\r\n'),
(157, 'Peekapoo\r\n'),
(158, 'Pekingese\r\n'),
(159, 'Pembroke Welsh Corgi\r\n'),
(160, 'Petit Basset Griffon Vendeen\r\n'),
(161, 'Pharaoh Hound\r\n'),
(162, 'Plott\r\n'),
(163, 'Pocket Beagle\r\n'),
(164, 'Pointer\r\n'),
(165, 'Polish Lowland Sheepdog\r\n'),
(166, 'Pomeranian\r\n'),
(167, 'Pomsky\r\n'),
(168, 'Poodle\r\n'),
(169, 'Portuguese Water Dog\r\n'),
(170, 'Pug\r\n'),
(171, 'Puggle\r\n'),
(172, 'Puli\r\n'),
(173, 'Pyrenean Shepherd\r\n'),
(174, 'Rat Terrier\r\n'),
(175, 'Redbone Coonhound\r\n'),
(176, 'Rhodesian Ridgeback\r\n'),
(177, 'Rottweiler\r\n'),
(178, 'Saint Bernard\r\n'),
(179, 'Saluki\r\n'),
(180, 'Samoyed\r\n'),
(181, 'Schipperke\r\n'),
(182, 'Schnoodle\r\n'),
(183, 'Scottish Deerhound\r\n'),
(184, 'Scottish Terrier\r\n'),
(185, 'Sealyham Terrier\r\n'),
(186, 'Shetland Sheepdog\r\n'),
(187, 'Shiba Inu\r\n'),
(188, 'Shih Tzu\r\n'),
(189, 'Siberian Husky\r\n'),
(190, 'Silken Windhound\r\n'),
(191, 'Silky Terrier\r\n'),
(192, 'Skye Terrier\r\n'),
(193, 'Sloughi\r\n'),
(194, 'Small Munsterlander Pointer\r\n'),
(195, 'Soft Coated Wheaten Terrier\r\n'),
(196, 'Stabyhoun\r\n'),
(197, 'Staffordshire Bull Terrier\r\n'),
(198, 'Standard Schnauzer\r\n'),
(199, 'Sussex Spaniel\r\n'),
(200, 'Swedish Vallhund\r\n'),
(201, 'Tibetan Mastiff\r\n'),
(202, 'Tibetan Spaniel\r\n'),
(203, 'Tibetan Terrier\r\n'),
(204, 'Toy Fox Terrier\r\n'),
(205, 'Treeing Tennessee Brindle\r\n'),
(206, 'Treeing Walker Coonhound\r\n'),
(207, 'Vizsla\r\n'),
(208, 'Weimaraner\r\n'),
(209, 'Welsh Springer Spaniel\r\n'),
(210, 'Welsh Terrier\r\n'),
(211, 'West Highland White Terrier\r\n'),
(212, 'Whippet\r\n'),
(213, 'Wirehaired Pointing Griffon\r\n'),
(214, 'Xoloitzcuintli\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `dog_id` int(11) NOT NULL,
  `owner_fk` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `breed` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vaccinated` tinyint(1) NOT NULL,
  `trained` tinyint(1) DEFAULT '0',
  `aggression` double DEFAULT '0',
  `other` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`dog_id`, `owner_fk`, `name`, `age`, `breed`, `vaccinated`, `trained`, `aggression`, `other`) VALUES
(1, 1, 'Hektor', 21, 'German Shepherd', 1, 1, 0, 'he likes to play'),
(2, 1, 'Badi', 999, 'unknown', 0, 0, 1, 'iz u irl?');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hashedMail` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `code_fk` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `code_fk`, `comment`) VALUES
(1, '1234567890', 'Very good walks my dog is very pleased with ur services. He gives 10 paws out of 20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `code` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `address`, `phone`, `status`, `verified`, `code`) VALUES
(1, 'Gaspatarcic Linolada', 'walkadog@secondsection.in.rs', 'Liloladaland 21', '0621653523', 1, 0, '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `walks`
--

CREATE TABLE `walks` (
  `walk_id` int(11) NOT NULL,
  `user_fk` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `one_time_walk` datetime DEFAULT NULL,
  `weekly_walk_day` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weekly_walk_time` time DEFAULT NULL,
  `daily_walk_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `walks`
--

INSERT INTO `walks` (`walk_id`, `user_fk`, `type`, `one_time_walk`, `weekly_walk_day`, `weekly_walk_time`, `daily_walk_time`) VALUES
(1, 1, 'daily', '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, 1, 'daily', '0000-00-00 00:00:00', NULL, NULL, NULL),
(3, 1, 'daily', '0000-00-00 00:00:00', NULL, NULL, NULL),
(4, 1, 'daily', '2019-01-04 19:00:00', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`breed_id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`dog_id`),
  ADD KEY `owner_fk` (`owner_fk`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `code_fk` (`code_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `walks`
--
ALTER TABLE `walks`
  ADD PRIMARY KEY (`walk_id`),
  ADD KEY `user_fk` (`user_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `breed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walks`
--
ALTER TABLE `walks`
  MODIFY `walk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dogs`
--
ALTER TABLE `dogs`
  ADD CONSTRAINT `user-dog` FOREIGN KEY (`owner_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `walks`
--
ALTER TABLE `walks`
  ADD CONSTRAINT `walks-user_constraint` FOREIGN KEY (`user_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
