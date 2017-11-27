-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2017 at 11:31 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaula`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) UNSIGNED NOT NULL,
  `place_from` varchar(200) CHARACTER SET latin1 NOT NULL,
  `place_to` varchar(200) CHARACTER SET latin1 NOT NULL,
  `on_board` varchar(200) CHARACTER SET latin1 NOT NULL,
  `depart` varchar(200) CHARACTER SET latin1 NOT NULL,
  `arrive` varchar(200) CHARACTER SET latin1 NOT NULL,
  `distance` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `image_1` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_2` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_3` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_4` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_5` varchar(200) CHARACTER SET latin1 NOT NULL,
  `image_description_1` text CHARACTER SET latin1 NOT NULL,
  `image_description_2` text CHARACTER SET latin1 NOT NULL,
  `image_description_3` text CHARACTER SET latin1 NOT NULL,
  `image_description_4` text CHARACTER SET latin1 NOT NULL,
  `image_description_5` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `place_from`, `place_to`, `on_board`, `depart`, `arrive`, `distance`, `description`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_description_1`, `image_description_2`, `image_description_3`, `image_description_4`, `image_description_5`) VALUES
(94, 's', 'b', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', ''),
(95, 'a', 's', 'd', '3', '4', 5, 'flapjack', 'g', 'h', 'i', 'j', 'k', 'l', 'z', 'x', 'c', 'v'),
(96, 'q', 'w', 'e', '6', '7', 8, 'f', '', '', '', '', '', 'l', 'z', 'x', 'C', 'v'),
(97, 'm', 'n', 'b', '9', '8', 7, 'v', '', '', '', '', '', 'c', 'x', 'z', 'l', 'k'),
(99, 'l', 'k', 'j', '1', '2', 3, 'h', '20161207_230837.jpg', '20161221_130554.jpg', '20161221_130559.jpg', '20161221_130611.jpg', '20161221_130617.jpg', 'g', 'f', 'd', 's', 'a'),
(105, 'Chester', '', '', '1000', '', 0, '', '', '', '', '', '', '', '', '', '', ''),
(107, 'falmouth', '', '', '1001', '', 600, '', '', '', '', '', '', '', '', '', '', ''),
(110, 'XXX', '', '', 'XXX', '', 0, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_old`
--

CREATE TABLE `log_old` (
  `id` int(11) UNSIGNED NOT NULL,
  `place_from` varchar(200) COLLATE latin1_general_ci NOT NULL COMMENT 'Must have a value (unlike place_to). So, if just sailing around record in this column and leave place_to null.',
  `place_to` varchar(200) COLLATE latin1_general_ci DEFAULT NULL COMMENT 'optional',
  `on_board` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `depart_date` date NOT NULL COMMENT 'This field and also the depart_time are used to order the rows when displaying the results so this field must not be empty and must hold a valid date.',
  `depart_time` time DEFAULT NULL COMMENT 'optional but will be used secondarily to depart_date to order log when displayed.',
  `arrive_date` date DEFAULT NULL COMMENT 'optional',
  `arrive_time` time DEFAULT NULL COMMENT 'optional.',
  `distance` int(11) DEFAULT NULL COMMENT 'Distance in nautical miles. Optional.',
  `description` text COLLATE latin1_general_ci COMMENT 'Optional.',
  `image_1` varchar(200) COLLATE latin1_general_ci DEFAULT NULL COMMENT 'All image_n fields are optional. It depends if and how many files were uploaded.',
  `image_2` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `image_3` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `image_4` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `image_5` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `image_description_1` text COLLATE latin1_general_ci COMMENT 'All image_description_n fields are optional even if a corresponding image_n is present. Of course, image_description_n should not have a value if the corresponding image_n field does not.',
  `image_description_2` text COLLATE latin1_general_ci,
  `image_description_3` text COLLATE latin1_general_ci,
  `image_description_4` text COLLATE latin1_general_ci,
  `image_description_5` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `log_old`
--

INSERT INTO `log_old` (`id`, `place_from`, `place_to`, `on_board`, `depart_date`, `depart_time`, `arrive_date`, `arrive_time`, `distance`, `description`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_description_1`, `image_description_2`, `image_description_3`, `image_description_4`, `image_description_5`) VALUES
(74, 'Old Mill Creek, River Dart', 'Mount Edgecombe, Plymouth', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 35, 'Motored all the way with light head winds. Anchored. Got in a muddle anchoring much to the annoyance of fisherman on the shore who I got rather close to....', '20160627_095250.jpg', '20160721_180659.jpg', '20160721_205323.jpg', '', '', 'Getting ready to leave Old Mill Creek', 'Sailing lessons at Mount Edgecombe', 'Plymouth', '', ''),
(75, 'Mount Edgecombe, Plymouth', 'Portscatho', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 35, 'Motored all the way with roller reefing jib out. Anchored', '20160722_184212.jpg', '20160723_114937.jpg', '', '', '', 'Approaching Portscatho', 'Anchored at Portscatho', '', '', ''),
(76, 'Portscatho', 'Falmouth', 'Steve and Chris', '0000-00-00', NULL, '0000-00-00', NULL, 12, 'Sailed. Anchored at St Mawes. After a few days sailing with Chris Yerbury and also later mending things on the boat (mainly an oil leak from the engine where the pipe for the oil pressure gauge comes out which took 4 trips to Armada Hydraulics!) moved to anchor off Falmouth. Met Tramp and spent last night moored in Restronguet. Picking up the mooring in Restronguet was very tricky as it was crowded with moored boats and a strong tide was coming out and it was getting dark. Had a look at the amazing 100 tonne Lowestoft Trawler that Tramp is living on.', '20160723_161137.jpg', '20160723_162605.jpg', '20160728_153313.jpg', '', '', 'Sailing round Zone point. Steve', 'Sailing round Zone point. Chris adjusting the rigging', 'the threaded insert into the engine for the oil gauge outlet pipe had to be replaced', '', ''),
(77, 'Falmouth (Restronguet)', 'Hugh Town, St Marys, Scilly Isles', 'Steve and Tramp', '0000-00-00', NULL, '0000-00-00', NULL, 0, 'Very slow sailing at night heading South to round the Lizard (panicked after plotting position incorrectly and thought I was about to run into the Lizard!). Motor sailed during the next day. Finally wind got up and sailed a couple of hours before arriving. Moored. Lovely walks etc in Scillies. Mended diesel leak by replacing Banjo fitting on injector pump.', '20160805_143214.jpg', '20160806_144555.jpg', '', '', '', 'We went aground coming out of Restronguet (fortunately at low tide). Not as aground as the boat in front and to the right of Shaula!', 'On passage to the Scillies with Tramp asleep on the foredeck.', '', '', ''),
(78, 'Hugh Town, St Marys, Scilly Isles', 'hjhdoiugug', 'Steve and Tramp', '0000-00-00', NULL, '0000-00-00', NULL, 0, 'Sailed. Had to put 2nd reef in at night (on my own as Tramp in deep sleep). Anchored. Too far and too windy and too tired to go ashore.', '', '', '', '', '', '', '', '', '', ''),
(79, 'Lundy Island', 'Flat Holm', 'Steve and Tramp', '0000-00-00', NULL, '0000-00-00', NULL, 0, 'Motor sailed down Bristol Channel with 2 tides and against one. Took main sail down as weather helm became excessive. Echo sounder broken so used lead line for anchoring. Ended up with boat in 23 metres water (anchor probably in less) so had 70m chain out. Anchor watch every hour during night. Quite rolly.', '20160812_070719.jpg', '', '', '', '', 'Leaving Lundy behind.', '', '', '', ''),
(80, 'Flat Holm', 'Bristol', 'Steve and Tramp', '0000-00-00', NULL, '0000-00-00', NULL, 0, 'Sailed to Avonmouth then motored up Avon. Roller reefing jib was up as we passed under the M5. Chris was there with food and beers at Bristol lock. HMS Balmoral was coming out', '20160813_122422.jpg', '20160813_130727.jpg', '20160813_140411.jpg', '20160813_194232.jpg', '', 'On the Avon under the M5', 'On the Avon under Clifton Suspension Bridge', 'Waiting to lock into Bristol.', 'Shaula berthed in Bristol', ''),
(81, 'Cumberland Basin, Bristol', 'Cardiff', 'Steve and Chris Yerbury', '0000-00-00', NULL, '0000-00-00', NULL, 25, 'Motored as no wind. Strong tides as was Springs. Had drinks with Richard, Ed and Paul in the evening.', '20160920_132214.jpg', '20160920_135554.jpg', '20160920_141851.jpg', '', '', 'Strong tides in the Bristol Channel', 'Entering the lock to get into Cardiff Bay', 'Entering the lock to get into Cardiff Bay', '', ''),
(82, 'Cardiff', 'Portishead Quays Marina', 'Steve and Chris', '0000-00-00', NULL, '0000-00-00', NULL, 18, 'Motored as little wind. Put up sails for a while but wind direction wrong. Locked into marina (£36 for the night). Chris left on the bus to Bristol', '20160921_143226.jpg', '', '', '', '', 'In Portishead Quays. The lifeboat belongs to Dave who works at the marina.', '', '', '', ''),
(83, 'Portishead Quays Marina', 'Bristol', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 10, 'No wind so motored the two miles to Avonmouth and then up the Avon. Tied up to a pontoon by the Llyods Building in Bristol Floating Harbour opposite the Mathew.', '', '', '', '', '', '', '', '', '', ''),
(84, 'Bristol', 'Lymmington', 'Steve and Dominic Partridge', '0000-00-00', NULL, '0000-00-00', NULL, 56, 'Locked out with Mike on Charger. Considered going to Lundy but forecast NE wind never materialised so motored until tide turned and then anchored.', '20170502_122243.jpg', '20170502_193031.jpg', '20170502_192228.jpg', '', '', 'Leaving Bristol', 'Dominic attaching furling gear. Ideally done before departure.', 'Steve with evening Sun on Lynemouth', '', ''),
(85, 'Lynemouth', 'Swansea', 'Steve and Dominic Partridge', '0000-00-00', NULL, '0000-00-00', NULL, 0, '?', '20170503_060714.jpg', '20170503_122704.jpg', '20170506_204612.jpg', '', '', 'Dominic splicing the mainbrace', 'Shaula in Swansea marina with the Helwick lightship and Swansea museum behind', 'Corrugated iron church in Swansea', '', ''),
(86, 'Swansea', 'Lydstep Haven', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 0, 'Motored against wind and tide. Not brilliant passage planing but wind direction was forecast as variable. Was good to make progress.', '', '', '', '', '', '', '', '', '', ''),
(87, 'Lydstep Haven', 'Milford Haven', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 27, 'motored with jib up. Tide and wind on my side.', '20170508_194708.jpg', '20170509_182600.jpg', '20170520_135212.jpg', '20170516_155856.jpg', '20170514_185537.jpg', 'Anchored in Sandy Haven Bay', 'Sailing in Milford Haven', 'Racing round Grassholm in Mischief. I bumped into Martin, the skipper, when taking Shaula into Neyland.', 'Milford Haven', 'Anchored at Castle Reach on the River Cleddan.'),
(88, 'Milford Haven', 'Milford Haven', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 10, 'Spent time practicing going about, gybing and reefing and trying different sail combinations. Tied to a pontoon in Dale Bay.', '20170511_182403_001.jpg', '', '', '', '', 'Tied to pontoon in Dale Bay.', '', '', '', ''),
(89, 'Dale, Milford Haven', 'North Haven, Skomer', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 17, 'Intended to get to Fishguard but on the way towards South Bishop realised that the tide would turn against me while I was still heading North near the Bishops. So headed for Skomer. Motor sailed into a strong current round NW end of Skomer.', '', '', '', '', '', '', '', '', '', ''),
(90, 'North Haven, Skomer', 'Fishguard', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 27, 'Made reasonable progress with just the roller furling jib (ie no mainsail) but turned engine on to help me get round S. Bishop and ended up motor sailing the whole way from then. Tide turned against me once I was off Strumble Head so the last few miles were very slow.', '20170526_054340.jpg', '20170526_074146.jpg', '20170526_084556.jpg', '', '', 'Leaving North Haven, Skomer.', 'South Bishop Light House. A strong currant was running.', 'A friendly seagull joined me for a while.', '', ''),
(91, 'Fishguard', 'New Quay', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 27, 'Reasonable wind from behind made we want a pole so I could goosewing the jib. Made the mistake of taking the sails down off the headland by New Quay bay. Very rolly so not easy.', '20170530_092724.jpg', '20170530_111415.jpg', '20170530_152353.jpg', '', '', 'Pot buoy nearly submerged by tide running past it (fortunately on my side). Looking into Port Cardigan.', 'Sailing downwind off Port Cardiganiling downwind off Port Cardigan.', 'Arriving at New Quay.', '', ''),
(93, 'New Quay', 'Aberystwyth', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 16, 'Very little wind and reluctant to use the engine. Light wind against made me start sailing back to New Quay for a while. Eventually a good wind developed although rather late for entering Aberystwyth before 2 hours after high water so motor sailing for the last few miles.', '20170531_144255.jpg', '20170601_152723.jpg', '', '', '', 'View from my berth in Aberystwyth.', 'Shaula in Aberystwyth.', '', '', ''),
(101, 'Aberystwyth', 'Pwllheli', 'Steve', '0000-00-00', NULL, '0000-00-00', NULL, 50, 'Probably got the dates and distance wrong as this is just a test', '20170603_084835.jpg', '', '', '', '', 'St Tudwall Island', '', '', '', ''),
(102, '1', '2', '3', '0000-00-00', NULL, '0000-00-00', NULL, 6, '7', '', '', '', '', '', '8', '9', '10', '11', '12'),
(103, '1', '2', '3', '0000-00-00', NULL, '0000-00-00', NULL, 6, '7', '', '', '', '', '', '8', '9', '10', '11', '12'),
(104, '1', '2', '3', '0000-00-00', NULL, '0000-00-00', NULL, 6, '7', '', '', '', '', '', '8', '9', '10', '11', '12'),
(105, '1', '2', '3', '0000-00-00', NULL, '0000-00-00', NULL, 6, '7', '', '', '', '', '', '8', '9', '10', '11', '12'),
(106, 'z', 'x', 'c', '0000-00-00', NULL, '0000-00-00', NULL, 1, 'b', '', '', '', '', '', 'n', 'm', 'a', '', ''),
(107, 'Welford', 'Lechlade', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manuals`
--

CREATE TABLE `manuals` (
  `id` int(11) NOT NULL,
  `manual_name` varchar(200) NOT NULL,
  `manual_file_name` varchar(200) DEFAULT NULL,
  `manual_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manuals`
--

INSERT INTO `manuals` (`id`, `manual_name`, `manual_file_name`, `manual_description`) VALUES
(1, 'g', '20161221_130554.jpg', 'h'),
(2, 'v', '20161207_230837.jpg', 'b'),
(3, 'v', '20161207_230837.jpg', 'b'),
(4, 'y', '20161030_000208.jpg', 'u'),
(5, 'y', '20170203_221822.jpg', 'u'),
(6, 'Fire Extinguisher', '20161101_121514.jpg', 'How to use a fire extinguisher in 68 simple steps.'),
(7, 'Fire Extinguisher', '20161101_121514.jpg', 'How to use a fire extinguisher in 68 simple steps.'),
(8, 'Fire Extinguisher', '20161101_121514.jpg', 'How to use a fire extinguisher in 68 simple steps.'),
(9, 'Outboard', '20161221_130554.jpg', 'How to use the outboard'),
(10, 'lds;kfj', '20161028_085250.jpg', 'lkgdj;fgh'),
(11, 'asdf', '20170121_160801.jpg', 'fdsa'),
(12, 'Fire Extinguisher', '20170307_172846.jpg', 'udr ogfld'),
(13, 'The Useful Manual', '20161030_000302.jpg', 'This jpg is useful!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `depart` (`depart`);

--
-- Indexes for table `log_old`
--
ALTER TABLE `log_old`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `manuals`
--
ALTER TABLE `manuals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `log_old`
--
ALTER TABLE `log_old`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `manuals`
--
ALTER TABLE `manuals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
