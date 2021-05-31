-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 04:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Email`, `Phone`) VALUES
('DEFH', 'abcd', 'defh@gmail.com', 123456789),
('Abc', 'def', 'abc@gmail.com', 14567);

-- --------------------------------------------------------

--
-- Table structure for table `advent1`
--

CREATE TABLE `advent1` (
  `Country` varchar(25) NOT NULL,
  `City1` varchar(25) NOT NULL,
  `City2` varchar(25) NOT NULL,
  `City3` varchar(25) NOT NULL,
  `City4` varchar(25) NOT NULL,
  `CostCity1` varchar(15) DEFAULT NULL,
  `CostCity2` varchar(15) DEFAULT NULL,
  `CostCity3` varchar(15) DEFAULT NULL,
  `CostCity4` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advent1`
--

INSERT INTO `advent1` (`Country`, `City1`, `City2`, `City3`, `City4`, `CostCity1`, `CostCity2`, `CostCity3`, `CostCity4`) VALUES
('India', 'Chennai', 'Manali', 'Mumbai', 'Cochin', '3 Lakhs', '3 lakhs', '3 Lakhs', '5 Lakhs'),
('England', 'Southampton', 'Headingly', 'Birmingham', 'Cardiff', '3 Lakhs', '3 lakhs', '3 Lakhs', '2 Lakhs'),
('Australia', 'Geelong', 'Perth', 'Brisbane', 'Hobart', '2 Lakhs', '3 Lakhs', '1 Lakhs', '2 Lakhs'),
('France', 'Lyon', 'Bordeaux', 'Marseille', 'Grenoble', '3 Lakhs', '5 lakhs', '2 Lakhs', '7 Lakhs'),
('Germany', 'Munich', 'Hamburg', 'Nuremburg', 'Heidelberg', '5 Lakhs', '3 lakhs', '2 Lakhs', '4 Lakhs'),
('Italy', 'Venice', 'Milan', 'Naples', 'Turin', '3 Lakhs', '3 lakhs', '4 Lakhs', '2 Lakhs'),
('New Zealand', 'Christchurch', 'Dunedin', 'Hamilton', 'Napier', '3 Lakhs', '5 lakhs', '3 Lakhs', '2 Lakhs'),
('America', 'Chicago', 'Boston', 'Indianapolis', 'Phoenix', '3 Lakhs', '3 lakhs', '1 Lakhs', '6 Lakhs'),
('SouthAfrica', 'Durban', 'Port Elizabeth', 'Nelspruit', 'Capetown', '3 Lakhs', '3 lakhs', '2 Lakhs', '2 Lakhs'),
('Switzerland', 'Basel', 'Bern', 'Winterthur', 'Lucerne', '7 Lakhs', '3 lakhs', '5 Lakhs', '7 Lakhs'),
('Maldives', 'Addu City', 'Dhidhdhoo', 'Kulhudhuffushi', 'Eydhafushi', '3 Lakhs', '3 lakhs', '3 Lakhs', '3 Lakhs'),
('Mauritius', 'Maheburg', 'Curepipe', 'Grand Bale', 'Vacoas-Phoenix', '3 Lakhs', '3 lakhs', '2 Lakhs', '2 Lakhs'),
('Brazil', 'swe', 'des', 'sgsg', 'sst', NULL, NULL, NULL, NULL),
('Braz', '', '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `Australia` varchar(20) NOT NULL,
  `England` varchar(20) NOT NULL,
  `India` varchar(20) NOT NULL,
  `France` varchar(20) NOT NULL,
  `USA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adventure`
--

INSERT INTO `adventure` (`Australia`, `England`, `India`, `France`, `USA`) VALUES
('Sydney', 'Birmingham', 'Manali', 'Marseille', 'New York'),
('Canberra', 'Yorkshire', 'Shimla', 'Bordeaux', 'Florida'),
('Queensland', 'Cardiff', 'Munnar', 'Strasbourg', 'washington DC');

-- --------------------------------------------------------

--
-- Table structure for table `customer99`
--

CREATE TABLE `customer99` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `datearrival` date NOT NULL,
  `datedep` date NOT NULL,
  `city` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `number` varchar(7) NOT NULL,
  `log` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer99`
--

INSERT INTO `customer99` (`name`, `email`, `datearrival`, `datedep`, `city`, `country`, `phone`, `number`, `log`) VALUES
('dew', 'dew@gmail.com', '2019-11-30', '2019-12-03', 'Brisbane', 'Australia', 1457, '4', 'vardan'),
('dew', 'sw@gmail.com', '2019-11-23', '2019-11-26', 'Geelong', 'Australia', 1234, '3', 'vardan'),
('vardan', '123@gmail.com', '2019-11-23', '2019-11-26', 'Southampton', 'England', 4578, '1', 'vardan'),
('vardan', '123@gmail.com', '2019-11-12', '2019-11-14', 'Brisbane', 'Australia', 5, '2', 'vardan'),
('vardan', '123@gmail.com', '2019-11-12', '2019-11-14', 'Brisbane', 'Australia', 5, '2', 'vardan'),
('vardan', '123@gmail.com', '2019-11-12', '2019-11-14', 'Brisbane', 'Australia', 5, '2', 'vardan'),
('yt', 'yt@gmail.com', '2019-11-21', '2019-11-23', 'Melbourne', 'Australia', 12345678, '1', 'yt'),
('yuvraj', 'wdddf@gmail.com', '4565-07-04', '2343-04-23', 'Hyderabad', 'India', 9969565101, '3', 'yuvraj'),
('ebqjeqfb', 'kjdqbkq@gsdn.com', '2019-11-08', '2019-11-09', 'Hyderabad', 'India', 56465465, '2', 'vardan'),
('bjqkbkjqf', 'fqkjb@jdbqke.com', '2019-11-07', '2019-11-01', 'London', 'England', 0, '2', 'vardan'),
('vardan', '123@gmail.com', '2019-11-15', '2019-11-17', 'Geelong', 'Australia', 45678, '1', 'vardan'),
('dew', 'wdddf@gmail.com', '2019-11-11', '2019-11-14', 'Brisbane', 'Australia', 2, '4', 'vardan'),
('ysingh', 'ysingh@gmail.com', '2019-11-22', '2019-11-17', 'Hyderabad', 'India', 123456789, '4', 'ysingh'),
('vardan', 'ysingh@gmail.com', '2019-11-13', '2019-11-08', 'Chennai', 'India', 123, '4', 'ysingh'),
('vardan', 'vardan@gamil.com', '2019-11-07', '2019-11-20', 'Chennai', 'India', 123456, '5', 'vardan'),
('vardan', 'sw@gmail.com', '2019-10-24', '2019-10-31', 'Paris', 'France', 123456789, '2', 'vardan');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `Country` varchar(25) NOT NULL,
  `CostCity1` varchar(25) NOT NULL,
  `CostCity2` varchar(25) NOT NULL,
  `CostCity3` varchar(25) NOT NULL,
  `CostCity4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`Country`, `CostCity1`, `CostCity2`, `CostCity3`, `CostCity4`) VALUES
('Australia', '5 lakhs', '2600', '20 lakhs', '30 lakhs'),
('India', '7 lakhs', '10.5 lakhs', '25 lakhs', '30 lakhs'),
('England', '20.5 lakhs', '25.5 lakhs', '30 lakhs', '50 lakhs'),
('France', '8 lakhs', '15.5 lakhs', '25 lakhs', '30.5 lakhs'),
('Germany', '9.5 lakhs', '17.5 lakhs', '30 lakhs', '35.5 lakhs'),
('Italy', '9 lakhs', '19.5 lakhs', '25 lakhs', '35 lakhs'),
('New Zealand', '7 lakhs', '10.5 lakhs', '25 lakhs', '30 lakhs'),
('America', '15 lakhs', '35.5 lakhs', '50 lakhs', '75 lakhs'),
('Switzerland', '15 lakhs', '30.5 lakhs', '40 lakhs', '45.5 lakhs'),
('SouthAfrica', '5 lakhs', '9.5 lakhs', '20 lakhs', '24lakhs'),
('Maldives', '7 lakhs', '9.5 lakhs', '18 lakhs', '30 lakhs'),
('Mauritius', '7 lakhs', '10.5 lakhs', '25 lakhs', '30 lakhs'),
('Singapore', '10 lakhs', 'Null', 'Null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `family_trip`
--

CREATE TABLE `family_trip` (
  `Country` varchar(25) NOT NULL,
  `City1` varchar(25) NOT NULL,
  `City2` varchar(25) NOT NULL,
  `City3` varchar(25) NOT NULL,
  `City4` varchar(25) NOT NULL,
  `CostCity1` varchar(15) DEFAULT NULL,
  `CostCity2` varchar(15) DEFAULT NULL,
  `CostCity3` varchar(15) DEFAULT NULL,
  `CostCity4` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_trip`
--

INSERT INTO `family_trip` (`Country`, `City1`, `City2`, `City3`, `City4`, `CostCity1`, `CostCity2`, `CostCity3`, `CostCity4`) VALUES
('India', 'Banglore', 'Delhi', 'Surat', 'Lucknow', '3 Lakhs', '3 lakhs', '2 Lakhs', '2 Lakhs'),
('England', 'London', 'Headingly', 'Manchester', 'Bristol', '3 Lakhs', '5 lakhs', '2 Lakhs', '2 Lakhs'),
('Australia', 'Melbourne', 'Goldcoast', 'Adelaide', 'New Castle', '3 Lakhs', '4 Lakhs', '2 Lakhs', '3 Lakhs'),
('France', 'Tolouse', 'Strasbourg', 'Nimes', 'Mulhouse', '2 Lakhs', '3 lakhs', '2 Lakhs', '2 Lakhs'),
('Germany', 'Frankfurt', 'Hanover', 'Augsberg', 'Bielefeld', '3 Lakhs', '2 lakhs', '2 Lakhs', '5 Lakhs'),
('Italy', 'Florence', 'Turin', 'Genoa', 'Pisa', '3 Lakhs', '3 lakhs', '2 Lakhs', '3 Lakhs'),
('New Zealand', 'Auckland', 'Wellington', 'Nelson', 'Gisborne', '3 Lakhs', '3 lakhs', '2 Lakhs', '3 Lakhs'),
('America', 'San Francisco', 'Boston', 'Portland', 'Atlanta', '3 Lakhs', '3 lakhs', '7 Lakhs', '5 Lakhs'),
('SouthAfrica', 'Johannesburg', 'Pretoria', 'Bloemfontein', 'Polokwane', '3 Lakhs', '3 lakhs', '2 Lakhs', '5 Lakhs'),
('Switzerland', 'Geneva', 'Bern', 'Fribourg', 'Uster', '3 Lakhs', '7 lakhs', '2 Lakhs', '5 Lakhs'),
('Maldives', 'Farukolhufunadhoo', 'Felidhoo', 'Hithadhoo', 'Magoodhoo', '3 Lakhs', '3 lakhs', '2 Lakhs', '5 Lakhs'),
('Mauritius', 'Beau Basin-Rose Hill', 'Tamarin', 'Plaine Magnien', 'Souillac', '3 Lakhs', '3 lakhs', '2 Lakhs', '5 Lakhs'),
('Brazil', 'sqw', 'Dess', 'sgdjdoi', 'red', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `honeymoon`
--

CREATE TABLE `honeymoon` (
  `Country` varchar(25) NOT NULL,
  `City1` varchar(25) NOT NULL,
  `City2` varchar(25) NOT NULL,
  `City3` varchar(25) NOT NULL,
  `City4` varchar(25) NOT NULL,
  `CostCity1` varchar(15) DEFAULT NULL,
  `CostCity2` varchar(15) DEFAULT NULL,
  `CostCity3` varchar(15) DEFAULT NULL,
  `CostCity4` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `honeymoon`
--

INSERT INTO `honeymoon` (`Country`, `City1`, `City2`, `City3`, `City4`, `CostCity1`, `CostCity2`, `CostCity3`, `CostCity4`) VALUES
('India', 'Dehradun', 'Panaji', 'Visakhapatnam', 'Jodhpur', '5 Lakhs', '3 lakhs', '2 Lakhs', '2 Lakhs'),
('England', 'Nottingham', 'Chester-Le-Street', 'York', 'Leicester', '3 Lakhs', '5 lakhs', '2 Lakhs', '2 Lakhs'),
('Australia', 'Canberra', 'Logan', 'Wollongong', 'Sydney', '2 Lakhs', '3 Lakhs', '3 Lakhs', '3 Lakhs'),
('France', 'Paris', 'Nice', 'Montpellier', 'Angers', '2 Lakhs', '3 lakhs', '2 Lakhs', '2 Lakhs'),
('Germany', 'Berlin', 'Dusseldorf', 'Essen', 'Regensburg', '3 Lakhs', '2 lakhs', '2 Lakhs', '5 Lakhs'),
('Italy', 'Rome', 'Verona', 'Catania', 'Trieste', '3 Lakhs', '3 lakhs', '2 Lakhs', '3 Lakhs'),
('New Zealand', 'Hamilton', 'Rotorua', 'Tauranga', 'Invercargill', '3 Lakhs', '3 lakhs', '2 Lakhs', '3 Lakhs'),
('America', 'New York', 'Miami', 'Indianapolis', 'Phoenix', '3 Lakhs', '3 lakhs', '7 Lakhs', '5 Lakhs'),
('SouthAfrica', 'Pietermaritzburg', 'Capetown', 'Upington', 'Bhisho', '3 Lakhs', '3 lakhs', '2 Lakhs', '5 Lakhs'),
('Switzerland', 'Zurich', 'St.Gallen', 'Neuchatel', 'Chur', '3 Lakhs', '7 lakhs', '2 Lakhs', '5 Lakhs'),
('Maldives', 'Mula', 'Thinadhoo', 'Veymandhoo', 'Kudahuvadhoo', '3 Lakhs', '3 lakhs', '2 Lakhs', '5 Lakhs'),
('Mauritius', 'Bambous', 'Cap Mailheureux', 'Port Mathurin', 'Bel Ombre', '3 Lakhs', '3 lakhs', '2 Lakhs', '5 Lakhs');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Country` varchar(25) NOT NULL,
  `City1` varchar(500) NOT NULL,
  `City2` varchar(500) NOT NULL,
  `City3` varchar(500) NOT NULL,
  `City4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Country`, `City1`, `City2`, `City3`, `City4`) VALUES
('India', 'Hill.jpg', 'Beach.jpg', 'Imp.jpg', 'hyd1.jpeg'),
('England', 'Eng1.jpg', 'Eng2.jpg', 'Eng3.jpg', 'Eng4.jpg'),
('Australia', 'AUS1.jpg', 'Aus2.jpg', 'AUs3.jpg', 'Aus4.jpg'),
('France', 'France1.jpg', 'France2.jpg', 'France4.jpg', 'France5.jpg'),
('Germany', 'Ger1.jpg', 'Ger2.jpg', 'Ger3.jpg', 'Ger4.jpg'),
('Italy', 'It2.jpg', 'It3.jpg', 'It4.jpg', 'It5.jpg'),
('America', 'Am1.jpg', 'Am2.jpg', 'Am3.jpg', 'Am4.jpg'),
('New Zealand', 'Nz1.jpg', 'Nz2.jpg', 'Nz3.jpg', 'Nz4.jpg'),
('Switzerland', 'St1.jpg', 'St2.jpg', 'St3.jpg', 'St4.jpg'),
('SouthAfrica', 'Sa1.jpg', 'Sa2.jpg', 'Sa3.jpg', 'Sa4.jpg'),
('Singapore', 'Sin1.jpg', 'Sin2.jpg', 'Sin3.jpg', 'Sin4.jpg'),
('Maldives', 'Md1.jpg', 'Md5.jpg', 'Md3.jpg', 'Md4.jpg'),
('Mauritius', 'Mu1.jpg', 'Mu2.jpg', 'Mu3.jpg', 'Mu4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `Country` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Short Description` varchar(100) NOT NULL,
  `Cost` varchar(25) NOT NULL,
  `Full Descrition` varchar(400) NOT NULL,
  `BestTime` varchar(30) DEFAULT NULL,
  `Place` varchar(500) DEFAULT NULL,
  `FamousPl` varchar(200) DEFAULT NULL,
  `Transport` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`Country`, `City`, `Image`, `Short Description`, `Cost`, `Full Descrition`, `BestTime`, `Place`, `FamousPl`, `Transport`) VALUES
('India', 'Hyderabad', 'hyd.jpg', '5 days package with Tourist Guide', '20 lakhs', 'Places to Visit in Hyderabad are the Famous Charminar Fort,Gardens and parks,Museums', 'October-February', 'Chowmahalla Palace,birla planetarium,Salar Jung Museum,Chilkur Balaji Mandir', 'Charminar,Golconda Fort,Ramoji Film City,Birla Mandir', 'Bus,taxi,Private Car'),
('England', 'London', 'Eng1.jpg', '7 days package with Tourist Guide', '25 lakhs', 'Place to visit in London are the beautiful Thames River,Amusement Park,Gardens', 'March-May', 'British Museum,Westminster Abbey,Baker Street,Leicester Square', 'Hyde Park,Camden,Shoreditch,Buckingham Palace,Galleries', 'Private Car or Taxi'),
('Australia', 'Melbourne', 'AUs3.jpg', '7 days package with Tourist Guide', '3 Lakhs', 'Place to visit in Melbourne are Beaches,Gardens,Amusement Park', 'September-November', 'National Gallery Of Victoria,Eureka Tower,Arcades and Laneways,Melbourne Zoo', 'Federation Square,Royal Botanic gardens,Yarra River Cruise', 'Private car,Taxi'),
('France', 'Paris', 'France2.jpg', '6 days package with tourist Guide', '30 lakhs', 'Place to visit in France are Rivers,Museum,Palces,Aquarium', 'December-February', 'Place of Versailles,Sculpture Garden,Chayeau de Chambord,Domaine National du Palais-Royal,Luxemburg Palace', 'Eiffel Tower,Louvre Museum,Arc de Triomphe,Champs-Elysees,place de la Concorde', 'Bus,Taxi or Private Car '),
('Germany', 'Frankfurt', 'Ger2.jpg', '5 days package with Tourist Guide', '27.5lakhs', 'Place to visit in Frankfurt are Museum,Gardens,Church,Market ', 'April to May,August-September', 'Frankurt Zoological Garden,Opel Zoo,Fairy tale road tour,Kronberg Castle,old St Nicholas Church', 'Main Tower,Stadel Museum,Palemgarten,Zeil Shopping Street,Romerberg', 'Private Car,Taxi'),
('America', 'New York', 'Am.jpg', '5 days package with Tourist Guide', '35 lakhs', 'Places to visit in new York are gardens,Museums,Statue of Liberty,Times Square', 'April-June', 'Botanical gardens,Zoo-animal Spotting,Federal Hall', 'Times Square,Brooklyn Bridge,staue of liberty', 'taxi,Private Car'),
('Australia', 'Sydney', 'Aus2.jpg', 'asfusfsuidf', '1 Lakhs', 'sjdgfjepokrgp[po[posafbiuaehf', 'November', 'sugifhahdiuoir', 'kdhfoijpgo[-o[posdeihaUYf', 'Car');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Email`) VALUES
('duhfiuh', '12345', NULL),
('abcd', '78910', NULL),
('abcd', '78910', NULL),
('', '123', 'acde@gmail.com'),
('yt', '789', 'gt@gmail.com'),
('vardan', '123', '123@gmail.com'),
('yuvraj', '123', 'gffbdfb@ghn.com'),
('er', '157', 'er@gmail.com'),
('re', '157', 're@gmail.com'),
('re', '157', 're@gmail.com'),
('ysingh', '123', 'ysingh@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
