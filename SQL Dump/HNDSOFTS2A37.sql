-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2021 at 06:16 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HNDSOFTS2A37`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins_webflix`
--

CREATE TABLE IF NOT EXISTS `admins_webflix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL,
  `is_senior_admin` char(1) NOT NULL DEFAULT 'N',
  `is_account_approved` char(1) NOT NULL DEFAULT 'N',
  `account_status` varchar(15) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admins_webflix`
--

INSERT INTO `admins_webflix` (`id`, `first_name`, `last_name`, `dob`, `email`, `pass`, `contact_number`, `country`, `added_date`, `is_senior_admin`, `is_account_approved`, `account_status`) VALUES
(5, 'Lukasz', 'asdas', '1885-10-05', 'luk@luk', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 5, 'United Kingdom', '2021-04-13 14:13:02', 'N', 'Y', 'Active'),
(6, 'luk', 'lk', '1983-06-05', 'pol@pol', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 456, 'pol', '2021-04-15 10:40:44', 'N', 'N', 'Active'),
(7, 'test', 'test', '1993-09-05', 'test@test', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 7555, 'test', '2021-04-26 11:05:51', 'N', 'N', 'Active'),
(8, 'test', 'test', '1993-09-05', 'test@test2', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 7555, 'test', '2021-04-26 11:07:29', 'N', 'N', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `booking_date` datetime NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `total`, `booking_date`) VALUES
(32, 26, 8.00, '2020-11-24 13:41:57'),
(33, 18, 8.00, '2020-11-26 13:55:22'),
(34, 18, 8.00, '2020-11-26 13:57:50'),
(35, 33, 24.00, '2020-11-30 13:07:02'),
(36, 33, 24.00, '2020-11-30 13:15:34'),
(37, 33, 16.00, '2020-11-30 13:38:21'),
(38, 34, 8.00, '2020-11-30 14:01:03'),
(39, 35, 8.00, '2020-11-30 14:12:01'),
(40, 35, 16.00, '2020-11-30 14:13:38'),
(41, 18, 24.00, '2020-11-30 14:50:32'),
(42, 18, 104.00, '2020-11-30 15:19:30'),
(43, 18, 8.00, '2020-11-30 15:19:55'),
(44, 18, 8.00, '2020-11-30 15:21:13'),
(45, 18, 104.00, '2020-11-30 15:24:24'),
(46, 18, 16.00, '2020-11-30 16:39:33'),
(47, 18, 8.00, '2020-11-30 16:42:25'),
(48, 18, 8.00, '2020-11-30 16:43:13'),
(49, 18, 8.00, '2020-11-30 16:43:37'),
(50, 18, 8.00, '2020-11-30 16:44:36'),
(51, 18, 8.00, '2020-11-30 16:46:24'),
(52, 39, 8.00, '2020-12-01 09:18:55'),
(53, 39, 24.00, '2020-12-01 09:20:32'),
(54, 18, 8.00, '2020-12-01 15:03:55'),
(55, 18, 8.00, '2020-12-08 08:50:23'),
(56, 18, 8.00, '2020-12-08 10:06:04'),
(57, 18, 8.00, '2020-12-08 10:06:27'),
(58, 18, 8.00, '2020-12-09 10:46:27'),
(59, 18, 8.00, '2021-01-12 13:51:12'),
(60, 43, 16.00, '2021-05-03 08:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `booking_contents`
--

CREATE TABLE IF NOT EXISTS `booking_contents` (
  `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `mov_title` int(50) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL DEFAULT '1',
  `mov_price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `booking_contents`
--

INSERT INTO `booking_contents` (`content_id`, `booking_id`, `id`, `mov_title`, `quantity`, `mov_price`) VALUES
(36, 32, 2, 0, 1, 8.00),
(37, 33, 2, 0, 1, 8.00),
(38, 34, 1, 0, 1, 8.00),
(39, 35, 9, 0, 3, 8.00),
(40, 36, 1, 0, 3, 8.00),
(41, 37, 1, 0, 2, 8.00),
(42, 38, 2, 0, 1, 8.00),
(43, 39, 2, 0, 1, 8.00),
(44, 40, 5, 0, 2, 8.00),
(45, 41, 2, 0, 2, 8.00),
(46, 41, 3, 0, 1, 8.00),
(47, 42, 2, 0, 13, 8.00),
(48, 43, 2, 0, 1, 8.00),
(49, 44, 1, 0, 1, 8.00),
(50, 45, 2, 0, 2, 8.00),
(51, 46, 2, 0, 2, 8.00),
(52, 47, 1, 0, 1, 8.00),
(53, 48, 1, 0, 1, 8.00),
(54, 49, 2, 0, 1, 8.00),
(55, 50, 1, 0, 1, 8.00),
(56, 51, 2, 0, 1, 8.00),
(57, 52, 2, 0, 1, 8.00),
(58, 53, 5, 0, 3, 8.00),
(59, 54, 2, 0, 1, 8.00),
(60, 55, 2, 0, 1, 8.00),
(61, 56, 1, 0, 1, 8.00),
(62, 57, 2, 0, 1, 8.00),
(63, 58, 1, 0, 1, 8.00),
(64, 59, 1, 0, 1, 8.00),
(65, 60, 2, 0, 2, 8.00);

-- --------------------------------------------------------

--
-- Table structure for table `category_webflix`
--

CREATE TABLE IF NOT EXISTS `category_webflix` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category_webflix`
--

INSERT INTO `category_webflix` (`cat_id`, `cat_name`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Drama'),
(4, 'Fantasy'),
(5, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `CommingSoon`
--

CREATE TABLE IF NOT EXISTS `CommingSoon` (
  `id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `mov_desc` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `preview` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CommingSoon`
--

INSERT INTO `CommingSoon` (`id`, `title`, `mov_desc`, `img`, `preview`) VALUES
(1, 'THE BATMAN', 'The Batman is an upcoming American superhero film based on the DC Comics character of the same name. Produced by DC Films and distributed by Warner Bros. Pictures, it is a reboot of the Batman film franchise. The film is directed by Matt Reeves, who wrote the screenplay with Peter Craig.', 'img/CommingSoon/Batman.jpg', 'https://www.youtube.com/embed/U3olJWzIKvY'),
(2, 'AVATAR 2', 'Avatar 2 is an upcoming American science fiction film directed by James Cameron and produced by 20th Century Studios. It is the second film in the Avatar franchise, following Avatar.', 'img/CommingSoon/avatar 2.jpg', 'https://www.youtube.com/embed/AxLH0lXEGAY'),
(3, 'Mission: Impossible 7', 'Mission: Impossible 7 is an upcoming American action spy film written and directed by Christopher McQuarrie, and starring Tom Cruise, who reprises his role as Ethan Hunt.', 'img/CommingSoon/mission impossible 7.jpg', 'https://www.youtube.com/embed/prjF7YhJP9Y'),
(4, 'Boos baby 2', 'The Boss Baby: Family Business is an upcoming American 3D computer-animated family comedy film loosely based on the 2010 picture book of the same name by Marla Frazee, produced by DreamWorks Animation and distributed by Universal Pictures.', 'img/CommingSoon/Boos baby 2.jpg', 'https://www.youtube.com/embed/qcH6jG5PKkg');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `more_info` varchar(500) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `title`, `more_info`, `img`) VALUES
(1, 'Cuba', 'The largest and perhaps most intriguing of the Caribbean islands, Cuba is a unique place, where time-stood-still heritage has been captured for all to see. ', 'img/img1.jpg'),
(2, 'Barbados', 'Visit Barbados and fall in love with Caribbean island life. Discover beautiful white-sand beaches, a cosmopolitan and historical vibe, plenty of rum and sunshine and island music wherever you go.', 'img/img2.jpg'),
(3, 'Antigua', 'Lively or laid back, sandcastles or safaris, Antigua holidays have it all - in (buckets and) spades. Whatever your vibe, you''ll find it in this authentic corner of the Caribbean. 365 beaches, friendly faces and an abundance of history make for a time out that''s good for the soul.', 'img/img3.jpg'),
(4, 'Jamaica', 'There''s plenty to keep you entertained on your Jamaica holiday. With reggae, jerk chicken and rum on tap, Jamaica is a large and lively gem of the Caribbean where the Blue Mountains and Dunn''s River Falls enchant everyone who visits. ', 'img/img4.jpg'),
(5, 'Tobago', 'Tobago is the slightly smaller sister island of Trinidad, but it''s bursting at the seams with natural wonders. From the volcanic beaches inhabited by Hawksbill turtles to the rejuvenating ''powers'' of Nylon Pool lagoon, this a magical eco-destination to explor', 'img/img5.jpg'),
(6, 'Mexico', 'Mexico holidays offer all the bliss of the Caribbean, with a sprinkling of Latin fiestas and mythical Mayan sites. Glorious beaches, fabulous shopping and excellent cuisine also make it the ideal place to kick back and indulge. If that wasn''t enough, our all-inclusive packages bring another level of luxury for visitors ready to try new experiences on their Mexico holiday.', 'img/img6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kocia`
--

CREATE TABLE IF NOT EXISTS `kocia` (
  `id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `more_info` varchar(500) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mov_title` varchar(20) DEFAULT NULL,
  `mov_desc` varchar(2000) NOT NULL,
  `mov_img` varchar(100) NOT NULL,
  `preview` varchar(100) NOT NULL,
  `showing1` varchar(10) NOT NULL,
  `showing2` varchar(10) NOT NULL,
  `mov_price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `mov_title`, `mov_desc`, `mov_img`, `preview`, `showing1`, `showing2`, `mov_price`) VALUES
(1, 'Black Widow', 'At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day New York, where she is a freelance operative.', 'img/NowShowing/Terminator 2.jpg', 'https://www.youtube.com/embed/ybji16u608U', '14:30', '17:30', 8.00),
(2, 'Blade', 'Blade, who is part-vampire and part-mortal, becomes a vampire hunter to protect human beings. He prevents vampires from taking control over the human race', 'img/NowShowing/blade', ' https://www.youtube.com/embed/kaU2A7KyOu4', '14:30', '17:30', 8.00),
(3, 'Finding Nemo', 'After his son gets abducted from the Great Barrier Reef and is dispatched to Sydney, Marlin, a meek clownfish, enlists the help of a forgetful fish and embarks on a journey to bring him home.', 'img/NowShowing/Finding Nemo', ' https://www.youtube.com/embed/wZdpNglLbt8', '14:30', '17:30', 8.00),
(4, 'Harry Potter', 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.', 'img/NowShowing/Harry Potter', 'https://www.youtube.com/embed/cGvbeaq7kK4', '14:30', '17:30', 8.00),
(5, 'Spider-Man Homecomin', 'Peter Parker tries to stop the Vulture from selling weapons made with advanced Chitauri technology while trying to balance his life as an ordinary high school student.', 'img/NowShowing/Spider-Man.jpg', 'https://www.youtube.com/embed/HQgZKcRIg28', '18:15', '20:30', 8.00),
(6, 'Batman vs. Superman', 'Bruce Wayne, a billionaire, believes that Superman is a threat to humanity after his battle in Metropolis. Thus, he decides to adopt his mantle of Batman and defeat him once and for all.', 'img/NowShowing/batman vs superman.jpg', 'https://www.youtube.com/embed/kEarhz4tFH4', '15:15', '19:30', 8.00),
(7, 'Wonder Woman', 'Princess Diana of an all-female Amazonian race rescues US pilot Steve. Upon learning of a war, she ventures into the world of men to stop Ares, the god of war, from destroying mankind.', 'img/NowShowing/wonder-woman.jpg', 'https://www.youtube.com/embed/T6ysag9X0eA', '14:00', '20:15', 8.00),
(8, 'Justice League', 'Steppenwolf and his Parademons return after eons to capture Earth. However, Batman seeks the help of Wonder Woman to recruit and assemble Flash, Cyborg and Aquaman to fight the powerful new enemy.', 'img/NowShowing/justice league.jpg', 'https://www.youtube.com/embed/r9-DM9uBtVI', '18:30', '20:15', 8.00),
(9, 'Avengers: Endgame', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 'img/NowShowing/avengers.jpg', 'https://www.youtube.com/embed/7nN6KVAgwK4', '11:15', '23:30', 8.00),
(10, 'Iron Man 3', 'Tony Stark encounters a formidable foe called the Mandarin. After failing to defeat his enemy, Tony embarks on a journey of self-discovery as he fights against the powerful Mandarin.', 'img/NowShowing/iron - man 3.jpg', 'https://www.youtube.com/embed/FgGXyg87v4o', '15:20', '18:05', 8.00);

-- --------------------------------------------------------

--
-- Table structure for table `movies_webflix`
--

CREATE TABLE IF NOT EXISTS `movies_webflix` (
  `mov_id` int(11) NOT NULL AUTO_INCREMENT,
  `mov_title` varchar(50) NOT NULL,
  `mov_image` varchar(500) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `mov_description` varchar(500) NOT NULL,
  `mov_release_year` year(4) NOT NULL,
  `mov_language` varchar(25) NOT NULL,
  `mov_duration` varchar(5) NOT NULL,
  `mov_trailer` varchar(250) NOT NULL,
  `mov_link` varchar(250) NOT NULL,
  PRIMARY KEY (`mov_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `movies_webflix`
--

INSERT INTO `movies_webflix` (`mov_id`, `mov_title`, `mov_image`, `cat_id`, `mov_description`, `mov_release_year`, `mov_language`, `mov_duration`, `mov_trailer`, `mov_link`) VALUES
(1, 'Avengers: Endgame', 'img/Movies/Action/Avengers Endgame.jpg', 1, 'After Thanos  an intergalactic warlord disintegrates half of the universe the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 2019, 'English', '03:02', 'https://www.youtube.com/embed/TcMBFSGVi1c', 'https://www.youtube.com/embed/TcMBFSGVi1c'),
(2, 'Terminator 2', 'img/Movies/Action/Terminator 2.jpg', 1, '  A terminator is set on a mission to kill Sarah''s son John Connor. However another cyborg  who was once after Sarah''s life  has now been assigned to protect him.', 1991, 'English', '02:36', 'https://www.youtube.com/embed/Ajw77tvtpFc', 'https://www.youtube.com/embed/Ajw77tvtpFc'),
(3, 'Rambo: First Blood', 'img/Movies/Action/Rambo First Blood.jpg', 1, 'John Ramb, a former US soldier traumatised by memories of the Vietnam War gets into trouble when an incident with a small-town sheriff triggers his violent side.', 1982, 'English', '01:42', 'https://www.youtube.com/embed/fPywPOapDRc', 'https://www.youtube.com/embed/fPywPOapDRc'),
(4, 'Batman', 'img/Movies/Action/Batman.jpg', 1, 'Batman, a masked vigilante from Gotham City, fights against evil to keep its citizens safe. He must battle Jack Napier,  who turns into the Joker and threatens to take over Gotham City', 1989, 'English', '02:06', 'https://www.youtube.com/embed/n0e8c4lqJGc', 'https://www.youtube.com/embed/n0e8c4lqJGc'),
(5, 'The Matrix', 'img/Movies/Action/The Matrix.jpg', 1, 'Thomas Anderson, a computer programmer, is led to fight an underground war against powerful computers who have constructed his entire reality with a system called the Matrix.', 1999, 'English', '02:30', 'https://www.youtube.com/embed/m8e-FF8MsqU', 'https://www.youtube.com/embed/m8e-FF8MsqU'),
(6, 'Dumb and Dumber', 'img/Movies/Comedy/Dumb and Dumber.jpg', 2, 'Two good-hearted but incredibly stupid friends stumble upon a briefcase. Unknown to them, it contains money that is intended for abductors with connections to the mob.', 1995, 'English', '01:53', 'https://www.youtube.com/embed/l13yPhimE3o', 'https://www.youtube.com/embed/l13yPhimE3o'),
(7, 'Ghostbusters', 'img/Movies/Comedy/Ghostbusters.jpg', 2, 'When Peter Venkman, Raymond Stantz and Egon Spengler lose their jobs as scientists, they start an establishment called Ghostbusters to fight the evil ghosts lurking in New York City.', 1984, 'English', '01:47', 'https://www.youtube.com/embed/eowrFdpcRbs', 'https://www.youtube.com/embed/eowrFdpcRbs'),
(8, 'Coming to America	', 'img/Movies/Comedy/Coming to America.jpg', 2, 'On his 21st birthday, African Prince Akeem has to marry a woman he has never seen. Determined to break tradition, he goes to America to look for one he can truly love and respect.', 1988, 'English', '01:57', 'https://www.youtube.com/embed/ZDme5Y5E-bI', 'https://www.youtube.com/embed/ZDme5Y5E-bI'),
(9, 'Toy Story', 'img/Movies/Comedy/Toy Story.jpg', 2, 'Toy Story is a 1995 American computer-animated comedy film produced by Pixar Animation Studios and released by Walt Disney Pictures. The first installment in the Toy Story franchise, it was the first entirely computer-animated feature film, as well as the first feature film from Pixar.', 1995, 'English', '01:21', 'https://www.youtube.com/embed/4KPTXpQehio', 'https://www.youtube.com/embed/4KPTXpQehio'),
(10, 'Home Alone', 'img/Movies/Comedy/Home Alone.jpg', 2, 'Eight-year-old Kevin is accidentally left behind when his family leaves for France. At first, he is happy to be in charge, but when thieves try to break into his home, he tries to put up a fight.', 1990, 'English', '01:43', 'https://www.youtube.com/embed/jEDaVHmw7r4', 'https://www.youtube.com/embed/jEDaVHmw7r4'),
(11, 'The Hurt Locker ', 'img/Movies/Drama/The Hurt Locker.jpg', 3, 'Sergeant William James is tasked with training a bomb disposal team during the Iraq War. His ideologies and reckless approach towards the job gives rise to conflicts with his subordinates.', 2009, 'English', '02:11', 'https://www.youtube.com/embed/M6mJFSjRAEI', 'https://www.youtube.com/embed/M6mJFSjRAEI'),
(12, 'Creed ', 'img/Movies/Drama/Creed.jpg', 3, 'Adonis Johnson, the son of heavyweight champion Apollo Creed, embraces his legacy as a boxer and seeks mentorship from Rocky Balboa, his father''s old friend and rival.', 2015, 'English', '02:13', 'https://www.youtube.com/embed/AdYqGiWT64w', 'https://www.youtube.com/embed/AdYqGiWT64w'),
(13, 'The Green Mile', 'img/Movies/Drama/The Green Mile.jpg', 3, 'Paul Edgecomb, the head guard of a prison, meets an inmate, John Coffey, a black man who is accused of murdering two girls. His life changes drastically when he discovers that John has a special gift.', 1999, 'English', '03:09', 'https://www.youtube.com/embed/Ki4haFrqSrw', 'https://www.youtube.com/embed/Ki4haFrqSrw'),
(14, 'Ghost', 'img/Movies/Drama/Ghost.jpg', 3, 'Sam and Molly love each other, but their romance is short-lived when Sam is killed by a thug. Unable to tell Molly that her life is in danger, Sam''s spirit takes a psychic''s help in order to save her.', 1990, 'English', '02:09', 'https://www.youtube.com/embed/ZbdmFTJ7aKI', 'https://www.youtube.com/embed/ZbdmFTJ7aKI'),
(15, 'Titanic', 'img/Movies/Drama/Titanic.jpg', 3, 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.', 1997, 'English', '03:30', 'https://www.youtube.com/embed/CSq7i7v_D5o', 'https://www.youtube.com/embed/CSq7i7v_D5o'),
(16, 'The Wizard of Oz', 'img\\Movies\\Fantasy\\The Wizard of Oz.jpg', 4, 'When a tornado rips through Kansas, Dorothy (Judy Garland) and her dog, Toto, are whisked away in their house to the magical land of Oz. They follow the Yellow Brick Road toward the Emerald City to meet the Wizard, and en route they meet a Scarecrow (Ray Bolger) that needs a brain, a Tin Man (Jack Haley) missing a heart, and a Cowardly Lion (Bert Lahr) who wants courage. The wizard asks the group to bring him the broom of the Wicked Witch of the West (Margaret Hamilton) to earn his help.', 1939, 'English', '01:52', 'https://www.youtube.com/embed/Tm5KMle65Ls"', 'https://www.youtube.com/embed/Tm5KMle65Ls"'),
(17, 'The Lord of the Rings: The Two Towers', 'img\\Movies\\Fantasy\\The Lord of the Rings The Two Towers.jpg', 4, 'DB\\Img\\Movies\\Fantasy\\Frodo and Sam arrive in Mordor with the help of Gollum. A number of new allies join their former companions to defend Isengard as Saruman launches an assault from his domain.', 2002, 'English', '03:43', 'https://www.youtube.com/embed/nuTU5XcZTLA', 'https://www.youtube.com/embed/nuTU5XcZTLA'),
(18, 'Harry Potter and the Deathly Hallows – Part 2', 'img\\Movies\\Fantasy\\Harry Potter 2.jpg', 4, 'Harry, Ron and Hermione race against time to destroy the remaining Horcruxes. Meanwhile, the students and teachers unite to defend Hogwarts against Lord Voldemort and the Death Eaters.', 2011, 'English', '02:10', 'https://www.youtube.com/embed/_31zwi0U8NE', 'https://www.youtube.com/embed/_31zwi0U8NE'),
(19, 'Beauty and the Beast', 'img\\Movies\\Fantasy\\Beauty and the Beast.jpg', 4, 'Belle, a village girl, embarks on a journey to save her father from a creature that has locked him in his dungeon. Eventually, she learns that the creature is an enchanted prince who has been cursed.', 2017, 'English', '02:10', 'https://www.youtube.com/embed/0uvSkYfAE9A', 'https://www.youtube.com/embed/0uvSkYfAE9A'),
(20, 'The Hobbit: An Unexpected Journey', 'img\\Movies\\Fantasy\\The Hobbit An Unexpected Journey.jpg', 4, 'Bilbo Baggins, a hobbit, is persuaded into accompanying a wizard and a group of dwarves on a journey to reclaim the city of Erebor and all its riches from the dragon Smaug.', 2012, 'English', '03:02', 'https://www.youtube.com/embed/SDnYMbYB-nU', 'https://www.youtube.com/embed/SDnYMbYB-nU'),
(21, 'The Silence of the Lambs', 'img\\Movies\\Thriller\\The Silence of the Lambs.jpg', 5, 'Clarice Starling, an FBI agent, seeks help from Hannibal Lecter, a psychopathic serial killer and former psychiatrist, in order to apprehend another serial killer who has been claiming female victims.', 1991, 'English', '02:18', 'https://www.youtube.com/embed/W6Mm8Sbe__o', 'https://www.youtube.com/embed/W6Mm8Sbe__o'),
(22, ' Taxi Driver ', 'img\\Movies\\Thriller\\Taxi Driver.jpg', 5, 'Travis, an ex-marine and Vietnam veteran, works as a taxi driver in New York City. One day, he is driven to save an underage prostitute from her pimp in an effort to clean the city of its corruption.', 1976, 'English', '01:54', 'https://www.youtube.com/embed/Wt0GlbeybmA', 'https://www.youtube.com/embed/Wt0GlbeybmA'),
(23, 'Seven', 'img\\Movies\\Thriller\\Seven.jpg', 5, 'A serial killer begins murdering people according to the seven deadly sins. Two detectives, one new to the city and the other about to retire, are tasked with apprehending the criminal.', 1995, 'English', '02:08', 'https://www.youtube.com/embed/znmZoVkCjpI', 'https://www.youtube.com/embed/znmZoVkCjpI'),
(24, 'Black Swan', 'img\\Movies\\Thriller\\Black Swan.jpg', 5, 'Nina, a ballerina, gets the chance to play the White Swan, Princess Odette. But she finds herself slipping into madness when Thomas, the artistic director, decides that Lily might fit the role better.', 2011, 'English', '01:50', 'https://www.youtube.com/embed/5jaI1XOB-bs', 'https://www.youtube.com/embed/5jaI1XOB-bs'),
(25, 'Basic Instinct', 'img\\Movies\\Thriller\\Basic Instinct.jpg', 5, 'Detective Nick is tasked with investigating the murder of Johnny Boz. He suspects Johnny''s girlfriend Catherine to be responsible for the act. However, things take a turn when he falls for her.', 1992, 'English', '02:18', 'https://www.youtube.com/embed/4f96x3UpoaQ', 'https://www.youtube.com/embed/4f96x3UpoaQ');

-- --------------------------------------------------------

--
-- Table structure for table `orders_webflix`
--

CREATE TABLE IF NOT EXISTS `orders_webflix` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_purchased` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `card_number` varchar(20) NOT NULL,
  `exp_month` int(2) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`user_id`, `full_name`, `card_number`, `exp_month`, `exp_year`, `cvv`, `reg_date`) VALUES
(18, '123123', '123123', 123, 123, 123, '2020-11-23 14:45:11'),
(26, 'asd', 'asd', 12, 12, 123, '2020-11-24 13:41:47'),
(33, 'mag', '4535', 45, 12, 234, '2020-11-30 13:06:43'),
(34, 'Mon Mor', '4751111111111', 5, 21, 36, '2020-11-30 14:00:39'),
(35, 'Javier Dom', '1234123412341234', 5, 35, 666, '2020-11-30 14:11:23'),
(39, 'John Doe', '12345123451234512345', 5, 35, 666, '2020-12-01 09:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(2500) DEFAULT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` text NOT NULL,
  `movie_id` text NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `author`, `content`, `date_created`, `rating`, `movie_id`) VALUES
(116, 'luk', 'q', '2021-01-12 21:17:55', 'q', 'Wonder Woman'),
(117, 'luk', 'asd', '2021-01-12 21:35:55', '3', ''),
(118, 'luk', 'asd', '2021-01-12 21:35:55', '3', ''),
(119, 'luk', 'asd', '2021-01-12 21:37:38', '3', 'Wonder Woman'),
(120, 'luk', 'asd', '2021-01-12 21:39:04', '1', 'Wonder Woman'),
(121, 'luk', 'asd', '2021-01-12 21:42:53', '1', 'Wonder Woman'),
(122, 'luk', 'asd', '2021-01-12 21:43:25', '4', 'Wonder Woman'),
(123, 'luk', '2', '2021-01-12 21:44:40', '3', ''),
(124, 'luk', 'asd', '2021-01-12 21:45:33', '1', ''),
(125, 'luk', 'asd', '2021-01-12 21:48:43', '3', ''),
(126, 'luk', '2', '2021-01-12 21:50:53', '4', ''),
(127, 'luk', 'asd', '2021-01-12 21:51:50', '5', ''),
(128, 'luk', '2', '2021-01-12 21:53:34', '12231', ''),
(129, 'luk', '3', '2021-01-12 21:56:28', '234234', ''),
(130, 'luk', 'asdasd', '2021-01-12 21:58:38', '6asdasd', ''),
(131, 'luk', 'q', '2021-01-12 22:01:46', 'q', ''),
(132, 'luk', 'asdasd', '2021-01-12 22:11:22', 'asdasd', ''),
(133, 'luk', 'q', '2021-01-12 22:12:46', 'q', ''),
(134, 'luk', 'r', '2021-01-12 22:15:11', 'r', 'Wonder Woman'),
(135, 'luk', 'rwerwerwer', '2021-01-12 22:17:32', 'q', 'Wonder Woman'),
(136, 'luk', 'q', '2021-01-12 22:22:01', 'dasdadasdasd', 'Wonder Woman'),
(137, 'luk', 'asd', '2021-01-12 22:31:14', 'qqqq', ''),
(138, 'luk', '3', '2021-01-12 22:31:47', '54', ''),
(139, 'luk', 'q', '2021-01-12 22:32:49', 'q', 'Array'),
(140, 'luk', 'q', '2021-01-12 22:37:08', 'qqqq', ''),
(141, 'luk', 'asd', '2021-01-12 22:49:56', 'asdasd', ''),
(142, 'luk', 'asd', '2021-01-12 22:55:12', 'asdasd', ''),
(143, 'luk', '2', '2021-01-12 22:55:55', 'asdasd', ''),
(144, 'luk', 'Jaja', '2021-01-13 07:39:29', 'Hahah', 'Wonder Woman'),
(145, 'luk', 'Y', '2021-01-18 11:24:01', 'Y', 'Wonder Woman');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE 16`
--

CREATE TABLE IF NOT EXISTS `TABLE 16` (
  `COL 1` varchar(26) DEFAULT NULL,
  `COL 2` varchar(39) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL,
  `COL 4` varchar(286) DEFAULT NULL,
  `COL 5` varchar(17) DEFAULT NULL,
  `COL 6` varchar(12) DEFAULT NULL,
  `COL 7` varchar(12) DEFAULT NULL,
  `COL 8` varchar(41) DEFAULT NULL,
  `COL 9` varchar(41) DEFAULT NULL,
  `COL 10` varchar(41) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE 16`
--

INSERT INTO `TABLE 16` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`) VALUES
('mov_id	mov_title', 'mov_image', 'cat_id', 'mov_ description', 'mov_ release_year', 'mov_language', 'mov_duration', 'mov_trailer', 'mov_link', ''),
('Avengers: Endgame			', 'ImagesMoviesActionAvengers Endgame.jpg', '1', 'After Thanos  an intergalactic warlord disintegrates half of the universe the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', '2019', 'English', '03:02', 'https://www.youtube.com/embed/TcMBFSGVi1c', 'https://www.youtube.com/embed/TcMBFSGVi1c', ''),
('	Terminator 2		1	', 'ImagesMoviesActionTerminator 2.jpg', '1', '  A terminator is set on a mission to kill Sarah''s son John Connor. However another cyborg  who was once after Sarah''s life  has now been assigned to protect him.', '1991', 'English', '02:36', 'https://www.youtube.com/embed/Ajw77tvtpFc', 'https://www.youtube.com/embed/Ajw77tvtpFc', 'https://www.youtube.com/embed/Ajw77tvtpFc'),
('Rambo: First Blood', 'ImagesMoviesActionRambo First Blood.jpg', '1', 'John Ramb, a former US soldier traumatised by memories of the Vietnam War gets into trouble when an incident with a small-town sheriff triggers his violent side.', '1982', 'English', '01:42', 'https://www.youtube.com/embed/fPywPOapDRc', 'https://www.youtube.com/embed/fPywPOapDRc', ''),
('	Batman		', 'ImagesMoviesActionBatman.jpg', '1', 'Batman, a masked vigilante from Gotham City, fights against evil to keep its citizens safe. He must battle Jack Napier,  who turns into the Joker and threatens to take over Gotham City', '1989', 'English', '02:06', 'https://www.youtube.com/embed/n0e8c4lqJGc', 'https://www.youtube.com/embed/n0e8c4lqJGc', ''),
('The Matrix', 'ImagesMoviesActionThe Matrix.jpg', '1', 'Thomas Anderson, a computer programmer, is led to fight an underground war against powerful computers who have constructed his entire reality with a system called the Matrix.', '1999', 'English', '02:30', 'https://www.youtube.com/embed/m8e-FF8MsqU', 'https://www.youtube.com/embed/m8e-FF8MsqU', ''),
('Dumb and Dumber', 'ImagesMoviesComedyDumb and Dumber.jpg', '2', 'Two good-hearted but incredibly stupid friends stumble upon a briefcase. Unknown to them, it contains money that is intended for abductors with connections to the mob.', '1995', 'English', '01:53', 'https://www.youtube.com/embed/l13yPhimE3o', 'https://www.youtube.com/embed/l13yPhimE3o', ''),
('Ghostbusters						', 'ImagesMoviesComedyGhostbusters.jpg', '2', 'When Peter Venkman, Raymond Stantz and Egon Spengler lose their jobs as scientists, they start an establishment called Ghostbusters to fight the evil ghosts lurking in New York City.', '1984', 'English', '01:47', 'https://www.youtube.com/embed/eowrFdpcRbs', 'https://www.youtube.com/embed/eowrFdpcRbs', ''),
('Coming to America 								', 'ImagesMoviesComedyComing to America.jpg', '2', 'On his 21st birthday, African Prince Akeem has to marry a woman he has never seen. Determined to break tradition, he goes to America to look for one he can truly love and respect.', '1988', 'English', '01:57', 'https://www.youtube.com/embed/ZDme5Y5E-bI', 'https://www.youtube.com/embed/ZDme5Y5E-bI', ''),
('Toy Story', 'ImagesMoviesComedyToy Story.jpg', '2', 'Toy Story is a 1995 American computer-animated comedy film produced by Pixar Animation Studios and released by Walt Disney Pictures. The first installment in the Toy Story franchise, it was the first entirely computer-animated feature film, as well as the first feature film from Pixar.', '1995', 'English', '01:21', 'https://www.youtube.com/embed/4KPTXpQehio', 'https://www.youtube.com/embed/4KPTXpQehio', ''),
('Home Alone', 'ImagesMoviesComedyHome Alone.jpg', '2', 'Eight-year-old Kevin is accidentally left behind when his family leaves for France. At first, he is happy to be in charge, but when thieves try to break into his home, he tries to put up a fight.', '1990', 'English', '01:43', 'https://www.youtube.com/embed/jEDaVHmw7r4', 'https://www.youtube.com/embed/jEDaVHmw7r4', '');

-- --------------------------------------------------------

--
-- Table structure for table `tv_shows_webflix`
--

CREATE TABLE IF NOT EXISTS `tv_shows_webflix` (
  `tv_id` int(11) NOT NULL AUTO_INCREMENT,
  `tv_title` varchar(100) NOT NULL,
  `tv_image` varchar(250) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `tv_description` varchar(500) NOT NULL,
  `tv_release_year` year(4) NOT NULL,
  `tv_language` varchar(50) NOT NULL,
  `tv_seasons` int(4) NOT NULL,
  `tv_episodes` int(4) NOT NULL,
  `tv_trailer` varchar(250) NOT NULL,
  `tv_link` varchar(250) NOT NULL,
  PRIMARY KEY (`tv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tv_shows_webflix`
--

INSERT INTO `tv_shows_webflix` (`tv_id`, `tv_title`, `tv_image`, `cat_id`, `tv_description`, `tv_release_year`, `tv_language`, `tv_seasons`, `tv_episodes`, `tv_trailer`, `tv_link`) VALUES
(1, 'The A-Team', 'img\\TV Show\\Action\\The A-Team.jpg', 1, 'A team of ex-special forces soldiers on the lam from the military police (even though they didn''t really commit the crime for which they''d been imprisoned) leaves a trail of explosions in its wake. But Hannibal, Faceman, B.A. and Murdock always stop to help the little guy against some corrupt local bigwig before escaping the MPs once again.', 1983, 'English', 5, 98, 'https://www.youtube.com/embed/Cn6kEsloMdE', 'https://www.youtube.com/embed/Cn6kEsloMdE'),
(2, 'MacGyver', 'img\\TV Show\\Action\\MacGyver.jpg', 1, 'MacGyver is a top agent for the Phoenix Foundation, a progressive agency devoted to righting the wrongs of the world. Even more progressive is the genius MacGyver, who never carries a gun and always thwarts the enemy with vast scientific knowledge - sometimes with little more than a paper clip and the duct tape in his pocket.', 1985, 'English', 5, 36, 'https://www.youtube.com/embed/dVVN4eqVB5U', 'https://www.youtube.com/embed/dVVN4eqVB5U'),
(3, 'Knight Rider', 'img\\TV Show\\Action\\Knight Rider.jpg', 1, 'Michael Knight is a man on a mission. Reborn, so to speak, after getting shot in the face, Knight decides to dedicate his life to fighting for justice. Self-made billionaire Wilton Knight hires Michael to be the lead field agent in his Knight Foundation''s public justice organization, part of which includes the developoing of KITT (Knight Industries Two Thousand), a superpowered, intelligent souped-up Pontiac Trans-Am. KITT can drive 300 miles an hour, is bulletproof, fireproof, can talk, and hel', 1982, 'English', 4, 90, 'https://www.youtube.com/embed/uO8yFLF9uhM', 'https://www.youtube.com/embed/uO8yFLF9uhM'),
(4, 'Airwolf', 'img\\TV Show\\Action\\Airwolf.jpg', 1, 'At the behest of a shadowy government organization, an enigmatic loner steals a supersonic military helicopter from its twisted creator and uses it to fight the bad guys around the world in this 1980s action series.', 1984, 'English', 4, 80, 'https://www.youtube.com/embed/ULfmowbNlK0', 'https://www.youtube.com/embed/ULfmowbNlK0'),
(5, 'Walker, Texas Ranger', 'img\\TV Show\\Action\\Walker, Texas Ranger.jpg', 1, 'Texas Ranger Cordell Walker kicks posterior -- usually in slo-mo. Because of his martial-arts skills, he has a competitive edge against the bad guys. With the help of retired ranger C.D. Parker, partner James Trivette and A.D.A. Alex Cahill, Walker ruthlessly fights for justice.', 1993, 'English', 9, 203, 'https://www.youtube.com/embed/nKebLNk04is', 'https://www.youtube.com/embed/nKebLNk04is'),
(6, 'Friends', 'img\\TV Show\\Comedy\\Friends.jpg', 2, 'Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures which make their lives both troublesome and happening.', 1994, 'English', 10, 236, 'https://www.youtube.com/embed/67hDG_tzRvE', 'https://www.youtube.com/embed/67hDG_tzRvE'),
(7, '''Allo ''Allo!', 'img\\TV Show\\Comedy\\Allo Allo.jpg', 2, 'Rene Artois owns a small cafe in France during World War II. While his cafe is used as a safe house for British airmen, he also runs covert operations, flirts with women and keeps his wife happy.', 1982, 'English', 9, 85, 'https://www.youtube.com/embed/-isrjFPkH00', 'https://www.youtube.com/embed/-isrjFPkH00'),
(8, 'Alf', 'img\\TV Show\\Comedy\\Alf.jpg', 2, 'When an ugly creature, who loves eating cats, crash-lands into the Terran family''s garage, they treat him as a guest and allow him to live with them as he comments on the stupidity of mankind.', 1986, 'English', 4, 102, 'https://www.youtube.com/embed/2hBSMInlDGg', 'https://www.youtube.com/embed/2hBSMInlDGg'),
(9, 'Married... with Children', 'img\\TV Show\\Comedy\\Married... with Children.jpg', 2, 'The antithesis of the loving "Cosby Show" family, "Married ... With Children" focused on the Bundys, a suburban Chicago family who would rather eat nails than say a kind word to one another. Al, the patriarch, is a misogynistic shoe salesman, whose wife, Peggy, is a housewife who does no work around the house. Saying their children, Kelly and Bud, do not have a lot going for them is an understatement. This biting comedy focuses on the couple''s constant verbal sparring over their slacker kids, th', 1987, 'English', 11, 259, 'https://www.youtube.com/embed/p8t5cOjlEPU', 'https://www.youtube.com/embed/p8t5cOjlEPU'),
(10, 'The Cosby Show ', 'img\\TV Show\\Comedy\\The Cosby Show.jpg', 2, '"The Cosby Show" centers on the lives of the Huxtables: obstetrician Cliff and his lawyer wife Claire, their daughters Sondra, Denise, Vanessa and Rudy, and son Theo. Based on the standup comedy of Bill Cosby, the show focused on his observations of family life. Although based on comedy, the series also addresses some more serious topics, such as learning disabilities and teen pregnancy.', 1984, 'English', 8, 202, 'https://www.youtube.com/embed/yNx7-7b4vIo', 'https://www.youtube.com/embed/yNx7-7b4vIo'),
(11, 'Game of Thrones', 'img\\TV Show\\Drama\\Game of Thrones.jpg', 3, 'Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. Meanwhile, a force is rising after millenniums and threatens the existence of living men.', 2011, 'English', 8, 73, 'https://www.youtube.com/embed/s7L2PVdrb_8', 'https://www.youtube.com/embed/s7L2PVdrb_8'),
(12, 'The Sopranos', 'img\\TV Show\\Drama\\The Sopranos.jpg', 3, 'Tony Soprano, an Italian-American mafia head based in New Jersey, struggles to manage his family and criminal life and confides his affairs to his psychiatrist Jennifer Melfi.', 1999, 'English', 6, 86, 'https://www.youtube.com/embed/NUT07eZoXPw', 'https://www.youtube.com/embed/NUT07eZoXPw'),
(13, 'Anne of Green Gables ', 'img\\TV Show\\Drama\\Anne of Green Gables.jpg', 3, 'An orphan girl, sent to an elderly brother and sister by mistake, charms her new home and community with her fiery spirit and imagination.', 1985, 'English', 4, 27, 'https://www.youtube.com/embed/ddSwigDd5yE', 'https://www.youtube.com/embed/ddSwigDd5yE'),
(14, 'Rome', 'img\\TV Show\\Drama\\Rome.jpg', 3, 'Lucius Vorenus and Titus Pullo, two ordinary Roman soldiers, turn into heroes after their feats in the arena. Their lives change as they witness the fall of a republic and the creation of an empire.', 2005, 'English', 2, 22, 'https://www.youtube.com/embed/8YDngmnixSc', 'https://www.youtube.com/embed/8YDngmnixSc'),
(15, 'House', 'img\\TV Show\\Drama\\House.jpg', 3, 'Dr House, an ingenious and unsociable physician who flouts hospital rules, clashes with fellow doctors and his assistants as he comes up with controversial hypotheses about his patients'' illnesses.', 2004, 'English', 8, 177, 'https://www.youtube.com/embed/a6zJ9dEwNek', 'https://www.youtube.com/embed/a6zJ9dEwNek'),
(16, 'Lois & Clark: The New Adventures of Superman', 'img\\TV Show\\Fantasy\\Lois & Clark The New Adventures of Superman.jpg', 4, 'Another incarnation of the Superman legend, this series puts a 1990s spin on the standard story. This time, the focus is on the romantic triangle forming between Superman, Clark Kent and Lois (who obviously doesn''t know that they are in fact one and the same). True to old Superman form, the evil Lex Luthor pops up every once in a while to wreak havoc on The Daily Planet and the city of Metropolis.', 1993, 'English', 4, 88, 'https://www.youtube.com/embed/5-N3o1IAxFc', 'https://www.youtube.com/embed/5-N3o1IAxFc'),
(17, 'The X-Files', 'img\\TV Show\\Fantasy\\The X-Files.jpg', 4, 'Conspiracy theorist Fox Mulder and realist Dana Scully pull out all the stops as FBI special agents to investigate and get to the bottom of inexplicable paranormal cases.', 1993, 'English', 11, 209, 'https://www.youtube.com/embed/Vpqffgak7To', 'https://www.youtube.com/embed/Vpqffgak7To'),
(18, 'The Witcher', 'img\\TV Show\\Fantasy\\The Witcher.jpg', 4, 'The witcher Geralt, a mutated monster hunter, struggles to find his place in a world in which people often prove more wicked than beasts.', 2019, 'English', 1, 8, 'https://www.youtube.com/embed/4SjV1e-B4Ns', 'https://www.youtube.com/embed/4SjV1e-B4Ns'),
(19, 'Grimm', 'img\\TV Show\\Fantasy\\Grimm.jpg', 4, 'Nick Burkhardt, a detective, begins to see what nobody else can, gruesome monstrosity. He soon realises that like his ancestors, he too is a huntsman.', 2011, 'English', 6, 123, 'https://www.youtube.com/embed/2-4xKNZ_gaA', 'https://www.youtube.com/embed/2-4xKNZ_gaA'),
(20, 'Altered Carbon', 'img\\TV Show\\Fantasy\\Altered Carbon.jpg', 4, 'More than 300 years in the future, society has been transformed by new technology, leading to human bodies being interchangeable and death no longer being permanent. Takeshi Kovacs is the only surviving soldier of a group of elite interstellar warriors who were defeated in an uprising against the new world order. His mind was imprisoned for centuries until impossibly wealthy businessman Laurens Bancroft offers him the chance to live again. Kovacs will have to do something for Bancroft, though, i', 2018, 'English', 2, 18, 'https://www.youtube.com/embed/-Yt89b5AcwY', 'https://www.youtube.com/embed/-Yt89b5AcwY'),
(21, 'Twin Peaks', 'img\\TV Show\\Thriller\\Twin Peaks.jpg', 5, 'A crime drama mixed with healthy doses of the surreal, this series is about FBI Agent Dale Cooper, who travels to the small logging town of Twin Peaks to solve the murder of seemingly innocent high schooler Laura Palmer. Almost nothing is as it seems, however, and the show''s sometimes eerie visuals, oddball characters and wild dream sequences drive the point home.', 1990, 'English', 3, 48, 'https://www.youtube.com/embed/2rmC9M1yla0', 'https://www.youtube.com/embed/2rmC9M1yla0'),
(22, 'Dexter', 'img\\TV Show\\Thriller\\Dexter.jpg', 5, 'Dexter Morgan, a man with homicidal tendencies, lives a double life. He works as a forensic technician for the police department during the day and kills heinous perpetrators in his free time.', 2006, 'English', 8, 96, 'https://www.youtube.com/embed/YQeUmSD1c3g', 'https://www.youtube.com/embed/YQeUmSD1c3g'),
(23, 'Hannibal', 'img\\TV Show\\Thriller\\Hannibal.jpg', 5, 'Will Graham, an FBI criminal profiler, has an uncanny ability to sympathise with Dr Hannibal Lecter, a forensic psychiatrist. However, he is unaware that he is a cannibal.', 2013, 'English', 3, 39, 'https://www.youtube.com/embed/Es3B24z8fdA', 'https://www.youtube.com/embed/Es3B24z8fdA'),
(24, 'Breaking Bad', 'img\\TV Show\\Thriller\\Breaking Bad.jpg', 5, 'Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. His priorities begin to change when he partners with Jesse.', 2008, 'English', 5, 62, 'https://www.youtube.com/embed/HhesaQXLuRY', 'https://www.youtube.com/embed/HhesaQXLuRY'),
(25, 'Bates Motel', 'img\\TV Show\\Thriller\\Bates Motel.jpg', 5, 'Using characters and elements from the novel Psycho by Robert Bloch, the series serves as a prequel to the 1960 film of the same name directed by Alfred Hitchcock, albeit within a contemporary setting. Following the death of her abusive husband, Norma Louise Bates (Vera Farmiga) relocates to the fictional town of White Pine Bay, Oregon with her son Norman (Freddie Highmore). There, she purchases a small motel and attempts to start a new life with her son. They are soon intercepted by Norma''s est', 2013, 'English', 5, 50, 'https://www.youtube.com/embed/sjMEyNtgwvc', 'https://www.youtube.com/embed/sjMEyNtgwvc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `reg_date`) VALUES
(17, 'Sharon', 'Martin', 'sm@sm.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2020-11-10 10:37:22'),
(33, 'mag', 'mag', 'mag@mag', 'f8685538bda2d6dc0d6d013011da6c986f1646c66f1b7a09035fc199d77999fb', '2020-11-30 13:06:18'),
(34, 'Mon', 'Mor', 'monika.moreno@edinburghcollege.ac.uk', '11507a0e2f5e69d5dfa40a62a1bd7b6ee57e6bcd85c67c9b8431b36fff21c437', '2020-11-30 13:59:19'),
(35, 'Javier', 'Dom', 'ec1844281@ec.ac', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2020-11-30 14:10:20'),
(39, 'John', 'Doe', 'johndoe@ec.ac', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2020-12-01 09:17:11'),
(40, 'ma', 'ma', 'mama@mama', '24b6b27909d04734a6b6ddd9088719e7ee0eae9caf238fbcfb2e1c28eed22137', '2020-12-01 14:50:29'),
(41, 'sadwfecghjnm', 'sadwefgt', 'ec1822804@edinburghcollege.ac.uk', '4d3db77953355e072b79a152be062bdfd34a65ffc31d7e11c7e816cb349e2175', '2020-12-14 15:34:50'),
(42, 'dol', 'dol', 'dol@dol', 'd06379416452a88b40fc82f833b0ef456d064e5d3d193f76f9b5207cfde8edcf', '2021-03-31 12:33:17'),
(43, 'luk', 'luk', 'luk@luk', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', '2021-04-13 21:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `users_webflix`
--

CREATE TABLE IF NOT EXISTS `users_webflix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `contact_number` int(30) NOT NULL,
  `country` varchar(100) NOT NULL,
  `join_date` datetime NOT NULL,
  `account_status` varchar(30) NOT NULL DEFAULT 'Active',
  `member_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users_webflix`
--

INSERT INTO `users_webflix` (`id`, `first_name`, `last_name`, `dob`, `email`, `pass`, `contact_number`, `country`, `join_date`, `account_status`, `member_type`) VALUES
(33, 'luk', 'luk', '1983-05-05', 'pol@pol', 'ae1cd33015b06703de2302e02280e51085c5a1748a8404f5a51ff3f239891d36', 56078630, 'pol', '2021-04-08 15:46:59', 'Active', 'free'),
(35, 'Lukasz', '075457', '1983-07-07', 'szmulkiewicz@ho07', '9294ab38039f60d2ec53822fb46b52c663af7ea478f4d17bf43da44ede5e166c', 2147483647, 'United Kingdom', '2021-04-08 15:52:03', 'Active', 'free'),
(36, 'Lukasz', '075', '1890-00-11', 'szmulkiewicz@hotmai', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 2147483647, 'Jordania', '2021-04-08 15:53:37', 'Active', 'free'),
(39, 'Dolimea', 'Polo', '1235-00-00', 'lola@lola', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 2147483647, 'Jamajka', '2021-04-08 15:57:06', 'Active', 'free'),
(40, 'Lukasz', 'Szmul', '1850-00-05', 'Polska@polska', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 2147483647, 'Egipt', '2021-04-08 15:57:43', 'Active', 'paid'),
(49, 'luk', 'luk', '1830-09-05', 'luk@luk', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 5645, 'luk', '2021-04-13 22:36:29', 'Active', 'paid'),
(51, 'gol', 'gol', '1923-07-05', 'gol@gol', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 5680, 'gol', '2021-04-14 07:47:14', 'Active', 'paid'),
(52, 'dola', 'dola', '1983-07-05', 'dola@dola', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 4065, 'dola', '2021-04-14 08:31:31', 'Active', 'paid'),
(53, 'ola', 'ola', '1983-10-05', 'ola@ola', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 56048, 'pol', '2021-04-14 08:34:08', 'Active', 'paid'),
(54, 'asd', 'asd', '1983-05-10', 'polop@polop', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 165, 'asd', '2021-04-14 14:01:49', 'Active', 'paid'),
(55, 'age', 'age', '2010-10-05', 'age@age', 'b07030100ac0099999d70c9283f64da14803899623e317983a61031e363a4493', 467, 'United Kingdom', '2021-04-14 14:41:11', 'Active', 'free');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
