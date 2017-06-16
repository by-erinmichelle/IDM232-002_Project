-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 15, 2017 at 05:07 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_page`
--

CREATE TABLE `project_page` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `desc` varchar(300) COLLATE utf8_bin NOT NULL,
  `photo` varchar(150) COLLATE utf8_bin NOT NULL,
  `infophoto` varchar(150) COLLATE utf8_bin NOT NULL,
  `nextproject` varchar(100) COLLATE utf8_bin NOT NULL,
  `category` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project_page`
--

INSERT INTO `project_page` (`id`, `title`, `desc`, `photo`, `infophoto`, `nextproject`, `category`) VALUES
(1, 'Yoda Walter White', 'This is a project I did for my digital design tools class. I had to create an alien, zombie, or human-animal using an image I found and an image of a celebrity provided. This is a mashup of Walter White and Yoda.\r\nTools: Photoshop', '../design/yoda-', '../design/yoda-', 'Buttons', 'Graphic'),
(2, 'Buttons', 'This is a project I did for my digital design tools class. I had to design a doomsday button, a dial in santa\'s workshop and a toggle switch on an alien ship.\r\nTools: Photoshop', '../design/buttons-', '../design/christmas-, ../design/alien-, ../design/doomsday-', 'David Bowie Turkey', 'Graphic'),
(3, 'David Bowie Turkey', 'This is a project I did for my creative concept design class. I had to design a ‘hand turkey’ to be entered into the ‘By a Show of Hands Contest’. Since David Bowie had recently passed, I wanted to design my turkey after him.\r\nTools: Illustrator', '../design/turkey-', '../design/turkey-, ../design/turkeycrop-', 'Single Art', 'Graphic'),
(4, 'Single Art\r\n', 'This is artwork I did for a local band called “Oblivion Her Majesty.” I worked closely with the band to design a military space helmet for the new single they were going to release.\r\nTools: Illustrator, Photoshop', '../design/helmet-', '../design/helmet-, ../design/helmet01-, ../design/helmet02-', 'Performing Arts Certificate', 'Graphic'),
(5, 'Performing Arts Certificate', 'This is a certificate I designed for the Drexel Performing Arts Department music classes at the Dornsife Center.\r\nTools: Illustrator, Photoshop', '../design/certificate-', '../design/certificate-, ../design/certificatekid-', 'Performing Arts Sign Up', 'Graphic'),
(6, 'Performing Arts Sign Up', 'This is a sign up card I designed for the Drexel Performing Arts Department. This card was passed out to prospective students for more event and audition information.\r\nTools: Illustrator ', '../design/todo-', '../design/todo-', 'Alien Resistance Poster', 'Graphic'),
(7, 'Alien Resistance Poster', 'This is a project I did for my digital design tools class. I had to design a resistance poster that used a texture and custom shape and place it in a scene.\r\nTools: Photoshop', '../design/alienposter-', '../design/alienposter-, ../design/posterplacement-', 'Sugar Skull', 'Graphic'),
(8, 'Sugar Skull', 'This is a project I did for my digital design tools class.  I had to create a sugar skull of my own design for Day of the Dead.\r\nTools: Illustrator', '../design/sugarskull-', '../design/sugarskull-', 'Zodiac Site', 'Graphic'),
(9, 'Zodiac Site', 'This is a project I did for my scripting class. I created a website that plays a song and tells user what their dance style is according to their birthday.\r\nTools: HTML, CSS, Javascript, Photoshop, Illustrator', '../web/zodiac-', '../web/zodiac-, ../web/zodiachome-', 'Laughter Yoga Site Redesign', 'Web'),
(10, 'Laughter Yoga Site Redesign', 'This is a project I did for my user interface design class. I redesigned a Laughter Yoga website and created a high fidelity prototype of it.\r\nTools: Invision, Illustrator', '../web/laughteryoga-', '../web/laughteryoga-, ../web/styleguide-', 'Dance Magazine Site Redesign', 'Web'),
(11, 'Dance Magazine Site Redesign', '\r\nThis is a project I did for my user interface design class. I redesigned the Dance Magazine website and created a high fidelity responsive prototype of it.\r\nTools: UxPin, Sketch, Illustrator, Photoshop\r\n', '../web/dancemag-', '../web/dancemag-, ../web/styletile-, ../web/userpersona-', 'Architecture', 'Web'),
(12, 'Architecture', 'This is a project I did for my digital still imaging class. I wanted to capture the design elements of the architecture around Drexel’s campus.\r\nTools: Nikon D5100, Photoshop', '../photography/architecture08-', '../photography/architecture08-, ../photography/architecture05-, ../photography/architecture12-, ../photography/architecture18-', 'Portraits', 'Photography'),
(13, 'Portraits', 'This is a project I did for my digital still imaging class. I used what I learned in class about portrait photography to take photos of my roommate.\r\nTools: Nikon D5100, Photoshop\r\n', '../photography/portrait07-', '../photography/portrait07-, ../photography/portrait04-, ../photography/portrait12-, ../photography/portrait05-', 'Moments', 'Photography'),
(14, 'Moments', 'This is a project I did for my digital still imaging class. I wanted to capture the moments students of different majors were working.\r\nTools: Nikon D5100, Photoshop', '../photography/moment01-', '../photography/moment01-, ../photography/moment02-, ../photography/moment03-, ../photography/moment04-', 'Senses', 'Photography'),
(15, 'Senses', 'This is a project I did for my creative concept design class. I created different pieces for the sense of sight and sense of smell.\r\nTools: Watercolor, Pen, Tea Leaves, Flowers\r\n', '../art/candle-', '../art/candle-, ../art/candle01-, ../art/sight-', 'Charcoal Degas', 'Art'),
(16, 'Charcoal Degas', 'This is a project I did for my introductory drawing class. I created a charcoal drawing of Edgar Degas’s painting “Woman Combing Her Hair.”\r\nTools: Charcoal', '../art/degas-', '../art/degas-', 'Line', 'Art'),
(17, 'Line', 'This is a project I did for my first design class class. I used variations of line and different values to create the pieces.\r\nTools: Pen, Acrylic Paint, Illustration Board', '../art/vsst07-', '../art/vsst05-, ../art/vsst06-, ../art/vsst07-', 'Yoda Walter White', 'Art');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_page`
--
ALTER TABLE `project_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_page`
--
ALTER TABLE `project_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
