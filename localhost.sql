-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2017 at 01:45 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elizas02_csci332`
--

DELIMITER $$
--
-- Functions
--
CREATE
    DEFINER = `elizas02`@`localhost` FUNCTION `checkRank`(rank char(5)) RETURNS tinyint(1)
BEGIN
    DECLARE result tinyint(1);
    SET result =
            ((strcmp(role, 'Principal') = 0) or (strcmp(role, 'Soloist') = 0) or (strcmp(role, 'Corps de Ballet') = 0));
    RETURN result;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `act`
--

CREATE TABLE IF NOT EXISTS `act`
(
    `actName`  char(30) NOT NULL DEFAULT '',
    `balletFK` char(50) NOT NULL,
    PRIMARY KEY (`actName`),
    KEY `act_ibfk_1` (`balletFK`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `act`
--

INSERT INTO `act` (`actName`, `balletFK`)
VALUES ('Concerto, Opus 24', 'Episodes'),
       ('Five Pieces, Opus 10', 'Episodes'),
       ('Ricercata', 'Episodes'),
       ('Symphony, Opus 21', 'Episodes'),
       ('1st Variation: Melancholic', 'Four Temperaments'),
       ('2nd Variation: Sanguinic', 'Four Temperaments'),
       ('3rd Variation: Phlegmatic', 'Four Temperaments'),
       ('4th Variation: Choleric', 'Four Temperaments'),
       ('Theme', 'Four Temperaments'),
       ('1st Episode', 'Rodeo'),
       ('2nd Episode', 'Rodeo'),
       ('3rd Episode', 'Rodeo'),
       ('4th Episode', 'Rodeo');

-- --------------------------------------------------------

--
-- Table structure for table `ballet`
--

CREATE TABLE IF NOT EXISTS `ballet`
(
    `balletName`    char(50) NOT NULL DEFAULT '',
    `description`   text,
    `choreography`  char(30) NOT NULL,
    `performanceFK` char(100)         DEFAULT NULL,
    PRIMARY KEY (`balletName`),
    KEY `performanceFK` (`performanceFK`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `ballet`
--

INSERT INTO `ballet` (`balletName`, `description`, `choreography`, `performanceFK`)
VALUES ('Concerto Barocco',
        'One of Balanchine''s greatest masterpieces, Concerto Barocco is music made visible as two elegant yet dynamic lead ballerinas each depict one of the instrumental soloists in a virtuosic double violin concerto.',
        'George Balanchine', 'Balanchine Black & White'),
       ('Eight Easy Pieces',
        'A spirited ballet accompanied by two onstage pianists, Eight Easy Pieces displays the virtuosity of three female dancers in a series of charming vignettes. ',
        'Peter Martins', 'Stravinsky x Five'),
       ('Episodes',
        'A four part avant-garde work, Episodes grew out of Balanchine''s enthusiasm for Anton von Webern''s orchestral music, which Balanchine once wrote "fills the air like molecules."',
        'George Balanchine', 'Balanchine Black & White'),
       ('Firebird',
        'Dressed in Chagall''s exquisite sets and costumes, Firebird illustrates an enchanting Russian fairytale and the fantastical creatures of its strange world.',
        'George Balanchine', 'Balanchine Short Stories'),
       ('Four Temperaments',
        'A ballet with unceasing appeal, The Four Temperaments references the medieval concept of psychological humors through its classically grounded but definitively modern movement.',
        'George Balanchine', 'Balanchine Black & White'),
       ('La Sonnambula',
        'Deceit, desire, and death shadow La Sonnambula''s masked ball, haunting with the image of a beautiful sleepwalker and the misfortune in her wake.',
        'George Balanchine', 'Balanchine Short Stories'),
       ('Mercurial Manoeuvres',
        'Mercurial Manoeuvres accents the wit in Shostakovich''s concerto, pairing dramatic movements with the peaks and valleys of the composer''s dynamic music.',
        'Christopher Wheeldon', '21st Century Choreographers'),
       ('Monumentum pro Gesualdo',
        'Known for its plush refinement, this streamlined leotard ballet arrests viewers with its formal beauty and simplicity.',
        'George Balanchine', 'Balanchine Black & White'),
       ('Movements for Piano and Orchestra',
        'A signature leotard ballet, Movements for Piano and Orchestra''s dissonance and electric currents sweep on a wave of exacting precision.',
        'George Balanchine', 'Balanchine Black & White'),
       ('Prodigal Son',
        'The ultimate story of sin and redemption, Prodigal Son''s powerful message, expressive score, and dramatic movement make it eternally impactful.',
        'George Balanchine', 'Balanchine Short Stories'),
       ('Rodeo',
        'A plotless take on Aaron Copland''s well known Americana score, Rodeo: Four Dance Episodes pairs a lone woman with a cast of 15 jocular, energetic, and charming male dancers for a fresh and thrilling adventure that audiences adore.',
        'Justin Peck', '21st Century Choreographers'),
       ('Scenes de Ballet',
        'On a stage mimicking a rehearsal studio, Scenes de Ballet displays 62 student dancers and their implied reflections in the mirror as they perfect their craft.',
        'Christopher Wheeldon', 'Stravinsky x Five'),
       ('Scherzo Fantastique',
        'A Summer 2016 commission marking the 50th anniversary of NYCB''s annual summer residence, the Saratoga Performing Arts Center, this new work is set to Stravinsky''s Scherzo Fantastique. ',
        'Justin Peck', 'Stravinsky x Five'),
       ('Stravinsky Violin Concerto',
        'The outer sections of Stravinsky Violin Concerto are carefully-woven masterpieces of symmetry that peel away to reveal two of Balanchine''s most ingenious and unique pas de deux.',
        'Peter Martins', 'Stravinsky x Five'),
       ('Symphonic Dances',
        'Grounded by Rachmaninoff''s colorful melodies, Symphonic Dances alternates between powerful ensemble sections and wistful pas de deux for its lead couple.',
        'Peter Martins', '21st Century Choreographers'),
       ('The Cage',
        'The Cage plunges into the world of natural selection, using Stravinsky''s daring score to depict the feral instinct compelling the female of an insect species to consider its male counterpart as prey. ',
        'Jerome Robbins', 'Stravinsky x Five');

-- --------------------------------------------------------

--
-- Table structure for table `dancer`
--

CREATE TABLE IF NOT EXISTS `dancer`
(
    `dancerName` char(30) NOT NULL,
    `rank`       char(15) NOT NULL,
    PRIMARY KEY (`dancerName`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `dancer`
--

INSERT INTO `dancer` (`dancerName`, `rank`)
VALUES ('', ''),
       ('Adrian Danchig-Waring', 'Principal'),
       ('Amar Ramasar', 'Principal'),
       ('Ana Sophia Scheller', 'Principal'),
       ('Andrew Veyette', 'Principal'),
       ('Anthony Huxley', 'Principal'),
       ('Ashley Bouder', 'Principal'),
       ('Ask la Cour', 'Principal'),
       ('Chase Finlay', 'Principal'),
       ('Daniel Ulbricht', 'Principal'),
       ('Gonzalo Garcia', 'Principal'),
       ('Jared Angle', 'Principal'),
       ('Jennie Somogyi', 'Principal'),
       ('Joaquin De Luz', 'Principal'),
       ('Lauren Lovette', 'Principal'),
       ('Maria Kowroski', 'Principal'),
       ('Megan Fairchild', 'Principal'),
       ('Rebecca Krohn', 'Principal'),
       ('Robert Fairchild', 'Principal'),
       ('Sara Mearns', 'Principal'),
       ('Sean Suozzi', 'Principal'),
       ('Sterling Hyltin', 'Principal'),
       ('Teresa Reichlen', 'Principal'),
       ('Tiler Peck', 'Principal'),
       ('Tyler Angle', 'Principal');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE IF NOT EXISTS `performance`
(
    `performanceName` char(100) NOT NULL DEFAULT '',
    `performanceDate` char(6)            DEFAULT NULL,
    `seasonFK`        char(11)  NOT NULL,
    PRIMARY KEY (`performanceName`),
    KEY `performance_ibfk_1` (`seasonFK`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`performanceName`, `performanceDate`, `seasonFK`)
VALUES ('21st Century Choreographers', 'May 30', 'Spring 2015'),
       ('Balanchine Black & White', 'Oct 18', 'Fall 2015'),
       ('Balanchine Short Stories', 'Jan 21', 'Winter 2017'),
       ('Stravinsky x Five', 'Jan 22', 'Winter 2017');

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE IF NOT EXISTS `piece`
(
    `pieceName` char(50) NOT NULL,
    `composer`  char(30) NOT NULL,
    `balletFK`  char(50) NOT NULL,
    PRIMARY KEY (`pieceName`),
    KEY `balletFK` (`balletFK`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `piece`
--

INSERT INTO `piece` (`pieceName`, `composer`, `balletFK`)
VALUES ('Piano Concerto No. 1 in C minor, op. 35', 'Dmitri Shostakovich', 'Mercurial Manoeuvres'),
       ('Rodeo', 'Aaron Copland', 'Rodeo'),
       ('Symphonic Dances', 'Sergei Rachmaninoff', 'Symphonic Dances');

-- --------------------------------------------------------

--
-- Stand-in structure for view `programView`
--
CREATE TABLE IF NOT EXISTS `programView`
(
    `seasonName` char(11),
    `beginDate`  char(6),
    `endDate`    char(6),
    `balletName` char(50),
    `dancerFK`   char(30)
);
-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role`
(
    `balletFK` char(50) NOT NULL DEFAULT '',
    `dancerFK` char(30) NOT NULL DEFAULT '',
    PRIMARY KEY (`dancerFK`, `balletFK`),
    KEY `balletFK` (`balletFK`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`balletFK`, `dancerFK`)
VALUES ('Concerto Barocco', 'Sara Mearns'),
       ('Episodes', 'Jared Angle'),
       ('Episodes', 'Sara Mearns'),
       ('Mercurial Manoeuvres', 'Gonzalo Garcia'),
       ('Mercurial Manoeuvres', 'Jared Angle'),
       ('Rodeo', 'Amar Ramasar'),
       ('Rodeo', 'Daniel Ulbricht'),
       ('Rodeo', 'Gonzalo Garcia'),
       ('Rodeo', 'Sean Suozzi'),
       ('Rodeo', 'Tiler Peck'),
       ('Symphonic Dances', 'Andrew Veyette'),
       ('Symphonic Dances', 'Sterling Hyltin'),
       ('The Cage', 'Tiler Peck');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE IF NOT EXISTS `season`
(
    `seasonName` char(11) NOT NULL DEFAULT '',
    `beginDate`  char(6)           DEFAULT NULL,
    `endDate`    char(6)           DEFAULT NULL,
    PRIMARY KEY (`seasonName`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`seasonName`, `beginDate`, `endDate`)
VALUES ('Fall 2015', 'Sep 15', 'Nov 2'),
       ('Spring 2015', 'Apr 28', 'Jun 7'),
       ('Winter 2017', 'Jan 17', 'Feb 26');

CREATE TABLE IF NOT EXISTS `users`
(
    `userName` varchar(20) NOT NULL,
    `password` varchar(40) NOT NULL,
    `token`    varchar(40) DEFAULT NULL,
    PRIMARY KEY (`userName`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

INSERT INTO `users` (`userName`, `password`, `token`)
VALUES ('admin', 'admin', 'qwertz'),
       ('david', 'test', 'abcd');

--
-- Triggers `season`
--
DROP TRIGGER IF EXISTS `seasonTrigger`;
DELIMITER //
CREATE TRIGGER `seasonTrigger`
    BEFORE INSERT
    ON `season`
    FOR EACH ROW
begin
    if length(new.seasonName) > 12 then
        set new.seasonName = 'too long';
    end if;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `programView`
--
DROP TABLE IF EXISTS `programView`;

CREATE ALGORITHM = UNDEFINED DEFINER =`elizas02`@`localhost` SQL SECURITY DEFINER VIEW `programView` AS
select `season`.`seasonName` AS `seasonName`,
       `season`.`beginDate`  AS `beginDate`,
       `season`.`endDate`    AS `endDate`,
       `ballet`.`balletName` AS `balletName`,
       `role`.`dancerFK`     AS `dancerFK`
from (((`season` join `performance` on ((`performance`.`seasonFK` = `season`.`seasonName`))) join `ballet` on ((`ballet`.`performanceFK` = `performance`.`performanceName`)))
         join `role` on ((`role`.`balletFK` = `ballet`.`balletName`)));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `act`
--
ALTER TABLE `act`
    ADD CONSTRAINT `act_ibfk_1` FOREIGN KEY (`balletFK`) REFERENCES `ballet` (`balletName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ballet`
--
ALTER TABLE `ballet`
    ADD CONSTRAINT `ballet_ibfk_1` FOREIGN KEY (`performanceFK`) REFERENCES `performance` (`performanceName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
    ADD CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`seasonFK`) REFERENCES `season` (`seasonName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piece`
--
ALTER TABLE `piece`
    ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`balletFK`) REFERENCES `ballet` (`balletName`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
    ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`balletFK`) REFERENCES `ballet` (`balletName`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `role_ibfk_2` FOREIGN KEY (`dancerFK`) REFERENCES `dancer` (`dancerName`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
