-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 09:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(10) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventCategory` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `eventDate` date NOT NULL,
  `eventDesc` varchar(255) DEFAULT NULL,
  `eventImage` varchar(255) NOT NULL,
  `eventTicketPrice` double DEFAULT NULL,
  `eventAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventCategory`, `eventLocation`, `eventDate`, `eventDesc`, `eventImage`, `eventTicketPrice`, `eventAddress`) VALUES
(1, 'Desa Parkcity Charity Run', 'Sports', 'Kuala Lumpur', '2019-10-20', 'This race will be organized and promoted as a charity run, where funds will be raised from the participating runners, and donated to selected ', 'img/events/charity-run.jpg', 45, 'Desa Park City, Kuala Lumpur'),
(2, 'Mega Career Fair & Post-Graduate Education Fair 2020', 'Education', 'Kuala Lumpur', '2020-04-04', ' Mega Career Fair and Post Graduate Education Fair is coming to KLCC!\r\n\r\nWe are bringing some of the country\'s best employers and top universities and colleges over to bridge the gap between you and your future employer under one roof!\r\n\r\nJump into this a', 'img/events/career-fair.jpg', 0, 'KLCC Convention Centre\r\n\r\nExhibition Hall 1 & 2\r\n\r\nKuala Lumpur, Kuala Lumpur 50450 '),
(3, 'BIGIT 2019, THE 7th Annual Data Science Show', 'Education, Conference', 'Kuala Lumpur', '2019-09-24', 'The BIGIT2019 theme - The Rise of the Data-Driven Organization - aptly describes the current state of big data adoption in Malaysia. We are beginning to discover many impactful advanced analytics- and AI-driven products and solutions that are catalysts to', 'img/events/data-science-show.jpg', 0, 'Le Meridien Kuala Lumpur Sentral\r\n\r\nKuala Lumpur, Wilayah Persekutuan Kuala Lumpur 50470 '),
(4, 'Contemporary Dance Workshop', 'Leisure', 'Kuala Lumpur', '2019-10-05', 'Come experience diverse dance and body form movements including - contemporary & modern dance, hip hop and martial arts - in this special one day workshop with Sharath CK. ', 'img/events/dance-workshop.jpg', 20, 'The LINC KL\r\n\r\n360 Jalan Tun Razak\r\n\r\nKuala Lumpur, Wilayah Persekutuan Kuala Lumpur 50400 '),
(5, 'Kuala Lumpur 24 Hour Race 2019', 'Sports', 'Sungai Buloh', '2019-11-23', 'The 24 Hour Race is back in Kuala Lumpur!\r\n\r\nThere is no better place to be this fall. Join in for hot music, mouth-watering food, games and entertainment, all the while taking part in fighting human trafficking.\r\n\r\nOn November 23, 2019, hundreds of high ', 'img/events/kl-race.jpg', 80, 'IGB International School (IGBIS)\r\n\r\nJalan Sierramas Utama\r\n\r\nSungai Buloh, Selangor 47000 '),
(6, 'Performance Clinic with Marty Friedman', 'Music, Hobbies', 'Kuala Lumpur', '2019-09-29', 'See Marty Friedman perform live in Malaysia and pick up tips and tricks from the master himself.\r\n\r\nGuitar.com, in partnership with Swee Lee and Jackson Guitars, is proud to bring Marty Friedman to Kuala Lumpur for a free performance clinic. Performing li', 'img/events/guitar-class.jpg', 0, 'Wisma MCA\r\n\r\n163 Jalan Ampang\r\n\r\n#3rd Floor\r\n\r\nKuala Lumpur, Wilayah Persekutuan Kuala Lumpur 50450 '),
(7, 'Learn With Olympus - Basic Workshop', 'Workshop, Hobbies', 'Petaling Jaya', '2019-10-01', 'Just got your Olympus camera and don\'t know where to start? Come join Olympus Visionary Robin Wong as he helps you navigate through your camera\'s operations, and the basics of photography so you can begin your own photography journey!\r\n\r\nIn this crash cou', 'img/events/olympus-workshop.jpg', 0, 'Olympus Training Center\r\n\r\nUnit No 512, 5th Floor, Block D Kelana Square 17, Jalan SS 7/26\r\n\r\nJalan SS 7/26, Kelana Jaya\r\n\r\nPetaling Jaya, Selangor 47301 '),
(8, 'Kuala Lumpur Bird Park, Orchid Garden, Butterfly & Deer Garden Tour', 'Outdoor', 'Kuala Lumpur', '2019-09-30', 'Kuala Lumpur may be a concrete jungle, but there are still some green spaces tucked between its skyscrapers and chaotic city streets. See nature hidden away from plain sight with this triple-access ticket for a guided tour of the Orchid Garden, the Butter', 'img/events/garden-tour.jpg', 120, 'Kuala Lumpur Butterfly Park\r\n\r\nJalan Cenderawasih, Tasik Perdana\r\n\r\nKuala Lumpur '),
(9, 'Selangor Smart City & Digital Economy Convention 2019', 'Science & Tech', 'Kuala Lumpur', '2019-10-11', 'A global convention like no other, the Selangor Smart City & Digital Economy Convention 2019 is set to be Asia’s hottest smart city and digital economy event for years to come! A hotbed of innovation, creativity and intelligence, this year, the convention', 'img/events/smart-city-convention.jpg', 99, 'Malaysian International Trade and Exhibition Centre\r\n\r\n8 Jalan Dutamas 2\r\n\r\nKuala Lumpur, Wilayah Persekutuan Kuala Lumpur 50480 '),
(10, 'Finding Your Voice - Full Day of Workshops', 'Health & Wellness', 'Kua;a Lumpur', '2019-09-28', 'A negative review, a request for a refund from a customer or rejection in a relationship can cause our self-confidence to dwindle. Well-meaning but sometimes unkind comments from those closest to us can also hit us hard.\r\n\r\nOn top of this, we have to deal', 'img/events/finding-your-voice.jpg', 100, 'Prana World Malaysia\r\n\r\nA-3-3, Centrio Pantai Hillpark\r\n\r\nJalan Panta Murni, Bangsar South\r\n\r\nKuala Lumpur, Wilayah Persekutuan Kuala Lumpur 59200 '),
(11, 'World Data Science Forum in Kuala Lumpur, Malaysia', 'Science & Tech', 'Kuala Lumpur', '2019-10-05', 'At bitgrit, we aim to foster a world of open communication and knowledge sharing in the world of Data Science. The World Data Science Forum (WDSF) represents one of our efforts to do so.\r\n\r\n\r\nA conference-style event featuring prominent figures from the w', 'img/events/world-data-science-forum.jpg', 0, 'Asia Pacific University of Technology & Innovation (APU)\r\n\r\nJalan Teknologi 5\r\n\r\nKuala Lumpur, Wilayah Persekutuan Kuala Lumpur 57000 '),
(12, 'Sip & Paint Night : Sail Away', 'Arts & Crafts, Hobbies', 'Kuala Lumpur', '2019-09-27', 'PAINT. DRINK. HAVE FUN!\r\n\r\nDiscover A New Night Out With Paint & Wine!\r\n\r\nAfter a long, hard day of work, the night is all about relaxing, chatting, painting & having a glass of wine in your hand~\r\n\r\nIt\'s all about taking that moment out of your busy life', 'img/events/sip-and-paint.jpg', 130, 'Art & Bonding\r\n\r\nNo.28-2, Jalan 25/70A\r\n\r\nDesa Sri Hartamas\r\n\r\nKuala Lumpur, Wilayah Persekutuan 50480 ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `eventID` int(10) NOT NULL,
  `ticketQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `userEmail`, `userName`, `eventID`, `ticketQty`) VALUES
(1, 'grace@mail.com', 'Evangelista Grace', 1, 1),
(2, 'grace@mail.com', 'Evangelista Grace', 2, 1),
(3, 'mary@mail.com', 'Mary Dimary', 3, 1),
(4, 'mary@mail.com', 'Mary Dimary', 6, 2),
(5, 'mary@mail.com', 'Mary Dimary', 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentID` int(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `cardNum` varchar(255) NOT NULL,
  `cardExpiry` date NOT NULL,
  `cardCVV` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileNum` bigint(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentID`, `country`, `cardNum`, `cardExpiry`, `cardCVV`, `firstName`, `lastName`, `address`, `mobileNum`, `email`) VALUES
(1, 'Malaysia', '1234567', '2019-09-03', 678, 'Evangelista', 'Grace', 'asdfghjkl', 189686774, 'evangrace98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userPassword`) VALUES
(23, 'gry', 'pops@mail.com', '81e047aa9039b5428b6d6f5c440f4670'),
(24, 'Chevs', 'evangrace98@gmail.com', '040b7cf4a55014e185813e0644502ea9'),
(25, 'Chevs', 'evangrace123@gmail.com', 'a384b6463fc216a5f8ecb6670f86456a'),
(26, 'Grace', 'grace@mail.com', '15e5c87b18c1289d45bb4a72961b58e8'),
(27, 'mary', 'mary@mail.com', 'b8e7be5dfa2ce0714d21dcfc7d72382c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
