-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.epizy.com
-- Generation Time: Jun 21, 2022 at 06:10 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31713972_Monitoring_Evaluation_Dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `stakeholderid` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `stakeholderid`, `email`, `password`) VALUES
(1, NULL, 'aec1@ashesi.edu.gh', 'AdminAec1'),
(2, NULL, 'aec2@ashesi.edu.gh', 'AdminAec2'),
(3, NULL, 'aec3@ashesi.edu.gh', 'AdminAec3');

-- --------------------------------------------------------

--
-- Table structure for table `Companies`
--

CREATE TABLE `Companies` (
  `stakeholderid` int(11) DEFAULT NULL,
  `company_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Companies`
--

INSERT INTO `Companies` (`stakeholderid`, `company_name`) VALUES
(12, 'Sankofa Ltd'),
(14, 'KPMG'),
(15, 'Nokwary'),
(16, 'Ampare Ltd'),
(17, 'Tombikopharma Ltd'),
(18, 'Garihub ltd'),
(19, 'Abolagh'),
(20, 'kunkragh');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(40) DEFAULT NULL,
  `date_started` date DEFAULT NULL,
  `course_status` enum('Active','Inactive') DEFAULT NULL,
  `course_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `date_started`, `course_status`, `course_description`) VALUES
(1, 'Foundations Of Design Thinking', '2022-04-01', 'Active', 'Introduction to the elements of design thinking for stakeholders'),
(2, 'Advance Communication Techniques', '2022-04-21', 'Active', 'Learn to communicate with the investors and team mates'),
(3, 'Advertising Skills', '2022-04-30', 'Active', 'Learn to do digital advertising and how to scale project'),
(4, 'Project Management', '2022-04-27', 'Inactive', 'This is a course intro student to time management '),
(5, 'Managing Your Manager', '2023-04-13', 'Inactive', 'This is how to manage supervisors'),
(6, 'Coaching Skills', '2022-03-23', 'Inactive', 'Learn to be a coach ');

-- --------------------------------------------------------

--
-- Table structure for table `course_project`
--

CREATE TABLE `course_project` (
  `course_id` int(11) DEFAULT NULL,
  `Projectid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_project`
--

INSERT INTO `course_project` (`course_id`, `Projectid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depart_id` int(11) NOT NULL,
  `depart_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depart_id`, `depart_name`) VALUES
(1, 'Design Lab'),
(2, 'Community Entrepreneurship'),
(3, 'Training Across the Curriculum'),
(4, 'Ashesi Venture Incubator'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `eventid` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `event_start_date` datetime DEFAULT NULL,
  `event_end_date` datetime DEFAULT NULL,
  `event_target_group` enum('Students','Alumni','Clubs','Other') DEFAULT NULL,
  `event_type` enum('Information Session','Hackathon','Competition','Career Fair','Exhibition') DEFAULT NULL,
  `event_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`eventid`, `department_id`, `event_name`, `event_start_date`, `event_end_date`, `event_target_group`, `event_type`, `event_description`) VALUES
(1, 4, 'Design Think In Ghana', '2022-04-22 13:57:45', '2022-04-22 13:57:45', 'Students', 'Information Session', 'learn about the importance of design think in ghana'),
(2, 1, 'Community Service ', '2022-04-22 13:57:45', '2022-04-22 13:57:45', 'Students', 'Information Session', 'The act of community service in ghana'),
(3, 3, 'Out of Ideas and mind', '2022-04-22 13:57:45', '2022-04-29 12:02:28', 'Clubs', 'Hackathon', 'The creating ideas out of nothing'),
(4, 1, 'We love AEC', '2022-04-26 02:17:38', '2022-04-26 02:17:38', 'Clubs', 'Career Fair', 'This was fun'),
(5, 1, 'Time To Hack a ton', '2022-04-26 02:17:38', '2022-04-26 02:17:38', 'Students', 'Competition', 'Old'),
(6, 1, 'AEC', '2022-05-08 18:30:17', '2022-05-08 18:30:17', 'Alumni', 'Exhibition', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `Grants`
--

CREATE TABLE `Grants` (
  `Grantid` int(11) NOT NULL,
  `stakeholderid` int(11) DEFAULT NULL,
  `Grant_name` varchar(40) DEFAULT NULL,
  `Grant_Amount` decimal(10,2) DEFAULT NULL,
  `Date_Recieved` datetime DEFAULT NULL,
  `Medium_recieved` enum('E-transfer','Cash') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grants`
--

INSERT INTO `Grants` (`Grantid`, `stakeholderid`, `Grant_name`, `Grant_Amount`, `Date_Recieved`, `Medium_recieved`) VALUES
(1, 12, 'Something for the boys', '500.00', '2022-05-26 00:00:00', 'Cash'),
(3, 14, 'CSR Sankofa', '7000.00', '2022-04-22 14:07:00', 'Cash'),
(4, 15, 'For Student', '8000.00', '2022-04-22 14:07:00', 'E-transfer'),
(5, 16, 'Bright Fund', '7000.00', '2022-04-22 14:07:00', 'Cash'),
(6, 17, 'Mastercard Foundation', '100000.00', '2022-04-22 14:07:00', 'E-transfer'),
(7, 18, 'Jim Ovia Funds', '100000.00', '2022-04-22 14:07:00', 'E-transfer'),
(8, 19, 'Abolagh Funds', '200000.00', '2022-04-22 14:07:00', 'E-transfer'),
(9, 20, 'kunkragh Funds', '300000.00', '2022-04-22 14:07:00', 'E-transfer');

-- --------------------------------------------------------

--
-- Table structure for table `Grant_Department`
--

CREATE TABLE `Grant_Department` (
  `department_id` int(11) DEFAULT NULL,
  `Grantid` int(11) DEFAULT NULL,
  `Amountgiven` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grant_Department`
--

INSERT INTO `Grant_Department` (`department_id`, `Grantid`, `Amountgiven`) VALUES
(2, 1, '700.00'),
(3, 3, '600.00'),
(4, 4, '582.00'),
(3, 1, '900.00'),
(4, 6, '700.00'),
(3, 5, '900.00');

-- --------------------------------------------------------

--
-- Table structure for table `Grant_Event`
--

CREATE TABLE `Grant_Event` (
  `Grantid` int(11) DEFAULT NULL,
  `eventid` int(11) DEFAULT NULL,
  `Amountgiven` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grant_Event`
--

INSERT INTO `Grant_Event` (`Grantid`, `eventid`, `Amountgiven`) VALUES
(1, 1, '2000.00'),
(3, 1, '300.00'),
(4, 1, '7000.00'),
(5, 2, '2000.00'),
(6, 2, '400.00'),
(7, 2, '300.00'),
(8, 2, '7000.00'),
(9, 3, '2000.00'),
(1, 3, '300.00'),
(4, 4, '2000.00'),
(5, 5, '400.00'),
(6, 5, '300.00'),
(7, 5, '7000.00'),
(8, 6, '2000.00'),
(9, 6, '400.00'),
(6, 6, '300.00'),
(4, 6, '7000.00');

-- --------------------------------------------------------

--
-- Table structure for table `Grant_Project`
--

CREATE TABLE `Grant_Project` (
  `Grantid` int(11) DEFAULT NULL,
  `Projectid` int(11) DEFAULT NULL,
  `Amountgiven` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grant_Project`
--

INSERT INTO `Grant_Project` (`Grantid`, `Projectid`, `Amountgiven`) VALUES
(1, 1, '2000.00'),
(3, 1, '300.00'),
(4, 1, '7000.00'),
(5, 2, '2000.00'),
(6, 2, '400.00'),
(7, 2, '300.00'),
(8, 2, '7000.00'),
(9, 3, '2000.00'),
(1, 3, '300.00'),
(4, 4, '2000.00'),
(5, 5, '400.00'),
(6, 5, '300.00'),
(7, 5, '7000.00'),
(8, 6, '2000.00'),
(9, 6, '400.00'),
(6, 6, '300.00'),
(4, 6, '7000.00');

-- --------------------------------------------------------

--
-- Table structure for table `Individuals`
--

CREATE TABLE `Individuals` (
  `stakeholderid` int(11) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','other') DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Individuals`
--

INSERT INTO `Individuals` (`stakeholderid`, `fname`, `lname`, `gender`, `role_id`) VALUES
(1, 'Eric123', 'Gadzi', 'Male', 1),
(2, 'Linda ', 'Arthur', 'Female', 1),
(3, 'Idaya ', 'Seidu', 'Female', 1),
(4, 'Dr David', 'Ebo', 'Male', 3),
(5, 'Samantha', 'Mavunga', 'Female', 2),
(6, 'Papa Kwame', 'Ofori-Asante', 'Male', 2),
(7, 'Sean', 'Ofori', 'Male', 3),
(8, 'Millicent', 'Ameyaw', 'Female', 1),
(9, 'Mama', ' Pams', 'Female', 1),
(10, 'Aaron', 'Partey', 'Male', 1),
(11, 'Bright', 'Atopa', 'Male', 2),
(23, 'Max', 'Menu', 'Female', 2),
(24, 'Eric', 'Gadzi', 'Male', 1),
(25, 'Kwamena', 'Amen', 'Male', 1),
(27, 'Ebo', 'David', 'Male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `module_name` varchar(40) DEFAULT NULL,
  `module_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `course_id`, `module_name`, `module_description`) VALUES
(1, 1, 'Creativity', 'A journey on creativity'),
(2, 1, 'sustainable business', 'Creates, delivers, \r\n and captures value for all its stakeholders without depleting the natural, eco'),
(3, 2, 'sustainable business', 'Creates, delivers, and captures value for all its stakeholders without depleting the natural, econom'),
(4, 2, 'Enterprise Technology & Innovation', 'Examines the role that technology innovation played businesses.'),
(5, 3, 'The challenge of business ethics', 'Explains the biggest ethical issues facing business'),
(6, 4, 'Information Management', 'Describes the Collection and management of information from one or more sources and the distribution');

-- --------------------------------------------------------

--
-- Table structure for table `Potential_Sponsors`
--

CREATE TABLE `Potential_Sponsors` (
  `stakeholderid` int(11) DEFAULT NULL,
  `Date_contacted` date DEFAULT NULL,
  `Contact_Status` enum('Contacted','Not Contacted') DEFAULT NULL,
  `Medium_contact` enum('Whatsapp','Call','Email','In-person') DEFAULT NULL,
  `Reason_for_contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Potential_Sponsors`
--

INSERT INTO `Potential_Sponsors` (`stakeholderid`, `Date_contacted`, `Contact_Status`, `Medium_contact`, `Reason_for_contact`) VALUES
(12, '2022-04-15', 'Contacted', 'Email', 'for money'),
(14, '2019-04-03', 'Contacted', 'Call', 'Career Fair'),
(15, '2022-05-19', 'Contacted', 'In-person', 'Project'),
(16, '2022-04-21', 'Contacted', 'Email', 'Hackaton'),
(17, '2022-04-30', 'Contacted', 'Call', 'Career Fair'),
(18, '2022-08-24', 'Contacted', 'Call', 'Information session'),
(19, '2022-06-29', 'Contacted', 'In-person', 'General Support'),
(20, '2022-06-30', 'Contacted', 'In-person', 'Great');

-- --------------------------------------------------------

--
-- Table structure for table `Project`
--

CREATE TABLE `Project` (
  `Projectid` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `Project_name` varchar(40) DEFAULT NULL,
  `Project_description` varchar(100) DEFAULT NULL,
  `Communication_type` enum('Whatsapp','phonecall','others') DEFAULT NULL,
  `Project_status` enum('Training','Prototyping','testing','in-operation') DEFAULT NULL,
  `Project_industry` varchar(40) DEFAULT NULL,
  `Project_location` varchar(40) DEFAULT NULL,
  `Project_type` enum('Business enterprise','Social project','Others') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Project`
--

INSERT INTO `Project` (`Projectid`, `department_id`, `Project_name`, `Project_description`, `Communication_type`, `Project_status`, `Project_industry`, `Project_location`, `Project_type`) VALUES
(1, 1, 'Mental Health', 'Awarnness About Mental Health', 'Whatsapp', 'Training', 'Health', 'Kumasi', 'Social project'),
(2, 2, 'Solve Flooding', 'Awarnness About Floods', 'phonecall', 'Prototyping', 'Environment Protection', 'Accra', 'Social project'),
(3, 3, 'She Knows She Can', 'Awarnness about teenage pregnancy', 'Whatsapp', 'testing', 'Child Protection', 'Damanko', 'Social project'),
(4, 4, 'Cod4all', 'Awarnness about computer Literacy', 'Whatsapp', 'in-operation', 'Technology', 'Ashesi', 'Social project'),
(5, 5, 'Farm All', 'Awarnness about farming', 'phonecall', 'testing', 'Agriculture', 'Damanko', 'Business enterprise'),
(6, 1, 'Green gym', 'Awarnness about fitness', 'Whatsapp', 'in-operation', 'Health', 'Damanko', 'Business enterprise'),
(7, 2, 'Fruit On Wheels', 'Awarness about Eating fruits', 'phonecall', 'Prototyping', 'Health', 'Daman', 'Business enterprise');

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`role_id`, `role_name`) VALUES
(1, 'Student'),
(2, 'Alumni'),
(3, 'Lecturer'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `SDG`
--

CREATE TABLE `SDG` (
  `SDG_ID` int(11) NOT NULL,
  `SD_goals` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SDG`
--

INSERT INTO `SDG` (`SDG_ID`, `SD_goals`) VALUES
(1, 'No Poverty '),
(2, ' Zero Hunger'),
(3, 'Good Health & Well-being'),
(4, 'Quality Education'),
(5, 'Gender Equality'),
(6, 'Clean Water & Sanitation'),
(7, 'Affordable & Clean Energy'),
(8, 'Decent Work & Economic Growth'),
(9, 'Industry,Innovation &Infrastructure'),
(10, 'Reduced Inequality'),
(11, 'Sustainable Cities & Communities'),
(12, 'Responsible Consumption & Production'),
(13, 'Climate Action'),
(14, 'Life Below Water'),
(15, 'Life On Land'),
(16, 'Peace Justice & Strong Institutions'),
(17, 'Partnership For The Goals');

-- --------------------------------------------------------

--
-- Table structure for table `SDG_Project`
--

CREATE TABLE `SDG_Project` (
  `SDG_ID` int(11) DEFAULT NULL,
  `Projectid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SDG_Project`
--

INSERT INTO `SDG_Project` (`SDG_ID`, `Projectid`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 4),
(11, 4),
(12, 4),
(13, 5),
(14, 5),
(14, 5),
(14, 7),
(15, 7),
(16, 7),
(16, 1),
(17, 2),
(17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Stakeholders`
--

CREATE TABLE `Stakeholders` (
  `stakeholderid` int(11) NOT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stakeholders`
--

INSERT INTO `Stakeholders` (`stakeholderid`, `contact`, `email`, `address`) VALUES
(1, '0556111111', 'eric@gmail.com', 'Accra'),
(2, '0554222222', 'linda@gmail.com', 'Aburi'),
(3, '0554177777', 'idaya@gmail.com', 'Nsuta'),
(4, '0244123456', 'Ebo@gmail.com', 'Kasoa'),
(5, '0556888999', 'Samantha@gmail,com', 'Mankesim'),
(6, '0202022031', 'Papa@gmail.com', 'Tema'),
(7, '054699445', 'sean@gmail.com', 'Kwabenya'),
(8, '057669225', 'sam@gmail.com', 'Ashaman'),
(9, '0564201235', 'theresa@gmail.com', 'Ashesi University'),
(10, '024569985', 'Aaron@gmail.com', 'Adenta'),
(11, '0558899654', 'bright@gmail.com', 'Comet, Greaer Accra'),
(12, '0559559545', 'SankofaLtd@gmail.com', 'Nsuta'),
(14, '056202314', 'KPMG@gmail.com', 'Capecoast'),
(15, '02315269872', 'nokwary@gmail.com', 'sunyani'),
(16, '059595859', 'AmpareLtd@gmail.com', 'Aburi'),
(17, '0242526252', 'TombikopharmaLtd@gmail.com', 'Tema'),
(18, '0269686854', 'Garihubltd@gmail.com', 'Takoradi'),
(19, '05432252124', 'Abola@gmail.com', 'Tamale'),
(20, '0244001400', 'kunkra@gmail.com', 'banku Avenue'),
(23, '0209246382', 'menu@gmail.com', 'Togo'),
(24, '0245555556', 'eric.gadzi@ashesi.gh', 'Tarkwa - Brenuakyim'),
(25, '0244445854', 'eric.gadzi@i.edu.gh', 'Tarkwa - Brenuakyim'),
(27, '0558571000', 'eboemail@gmail.com', 'Ashesi');

-- --------------------------------------------------------

--
-- Table structure for table `Stakeholder_Course`
--

CREATE TABLE `Stakeholder_Course` (
  `course_id` int(11) DEFAULT NULL,
  `stakeholderid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stakeholder_Course`
--

INSERT INTO `Stakeholder_Course` (`course_id`, `stakeholderid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 5),
(1, 6),
(1, 11),
(1, 8),
(1, 9),
(1, 10),
(2, 1),
(2, 2),
(2, 3),
(2, 5),
(2, 6),
(2, 11),
(2, 8),
(2, 9),
(2, 10),
(3, 1),
(3, 2),
(3, 3),
(3, 5),
(3, 6),
(3, 11),
(3, 8),
(3, 9),
(3, 10),
(4, 1),
(4, 2),
(4, 3),
(4, 5),
(4, 6),
(4, 11),
(4, 8),
(4, 9),
(4, 10),
(5, 1),
(5, 2),
(5, 3),
(5, 5),
(5, 6),
(5, 11),
(5, 8),
(5, 9),
(5, 10),
(6, 1),
(6, 2),
(6, 3),
(6, 5),
(6, 6),
(6, 11),
(6, 8),
(6, 9),
(6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Stakeholder_Event`
--

CREATE TABLE `Stakeholder_Event` (
  `eventid` int(11) DEFAULT NULL,
  `stakeholderid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stakeholder_Event`
--

INSERT INTO `Stakeholder_Event` (`eventid`, `stakeholderid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(4, 1),
(4, 2),
(5, 3),
(6, 4),
(4, 5),
(5, 6),
(6, 7),
(4, 8),
(5, 9),
(6, 10),
(5, 11);

-- --------------------------------------------------------

--
-- Table structure for table `Stakeholder_Project`
--

CREATE TABLE `Stakeholder_Project` (
  `stakeholderid` int(11) DEFAULT NULL,
  `projectid` int(11) DEFAULT NULL,
  `stakeholder_type` enum('Owner','Coache') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stakeholder_Project`
--

INSERT INTO `Stakeholder_Project` (`stakeholderid`, `projectid`, `stakeholder_type`) VALUES
(1, 1, 'Owner'),
(2, 2, 'Owner'),
(4, 3, 'Coache'),
(7, 3, 'Coache'),
(3, 3, 'Owner'),
(5, 4, 'Owner'),
(6, 5, 'Owner'),
(8, 6, 'Owner'),
(4, 4, 'Coache'),
(7, 1, 'Coache'),
(4, 2, 'Coache'),
(7, 6, 'Coache');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `stakeholderid` int(11) NOT NULL,
  `major` enum('Computer Science','Management Information System',' Engineerining','Business Adminstration','Humanities') DEFAULT NULL,
  `level` enum('Freshman','Sophormore','Junior','Senior','Other') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`stakeholderid`, `major`, `level`) VALUES
(1, 'Computer Science', 'Sophormore'),
(2, 'Business Adminstration', 'Senior'),
(3, 'Computer Science', 'Junior'),
(8, 'Humanities', 'Freshman'),
(9, 'Business Adminstration', 'Other'),
(10, ' Engineerining', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `Winner_Competition`
--

CREATE TABLE `Winner_Competition` (
  `eventid` int(11) DEFAULT NULL,
  `stakeholderid` int(11) DEFAULT NULL,
  `position` enum('1st','2nd','3rd') DEFAULT NULL,
  `type_award_given` enum('cash prize','cashless') DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `stakeholderid` (`stakeholderid`);

--
-- Indexes for table `Companies`
--
ALTER TABLE `Companies`
  ADD KEY `stakeholderid` (`stakeholderid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`eventid`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `Grants`
--
ALTER TABLE `Grants`
  ADD PRIMARY KEY (`Grantid`),
  ADD KEY `stakeholderid` (`stakeholderid`);

--
-- Indexes for table `Grant_Department`
--
ALTER TABLE `Grant_Department`
  ADD KEY `Grantid` (`Grantid`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `Grant_Event`
--
ALTER TABLE `Grant_Event`
  ADD KEY `Grantid` (`Grantid`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `Grant_Project`
--
ALTER TABLE `Grant_Project`
  ADD KEY `Grantid` (`Grantid`),
  ADD KEY `Projectid` (`Projectid`);

--
-- Indexes for table `Individuals`
--
ALTER TABLE `Individuals`
  ADD KEY `stakeholderid` (`stakeholderid`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `Potential_Sponsors`
--
ALTER TABLE `Potential_Sponsors`
  ADD KEY `stakeholderid` (`stakeholderid`);

--
-- Indexes for table `Project`
--
ALTER TABLE `Project`
  ADD PRIMARY KEY (`Projectid`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `SDG`
--
ALTER TABLE `SDG`
  ADD PRIMARY KEY (`SDG_ID`);

--
-- Indexes for table `SDG_Project`
--
ALTER TABLE `SDG_Project`
  ADD KEY `SDG_ID` (`SDG_ID`),
  ADD KEY `Projectid` (`Projectid`);

--
-- Indexes for table `Stakeholders`
--
ALTER TABLE `Stakeholders`
  ADD PRIMARY KEY (`stakeholderid`);

--
-- Indexes for table `Stakeholder_Course`
--
ALTER TABLE `Stakeholder_Course`
  ADD KEY `stakeholderid` (`stakeholderid`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `Stakeholder_Event`
--
ALTER TABLE `Stakeholder_Event`
  ADD KEY `eventid` (`eventid`),
  ADD KEY `stakeholderid` (`stakeholderid`);

--
-- Indexes for table `Stakeholder_Project`
--
ALTER TABLE `Stakeholder_Project`
  ADD KEY `stakeholderid` (`stakeholderid`),
  ADD KEY `projectid` (`projectid`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`stakeholderid`);

--
-- Indexes for table `Winner_Competition`
--
ALTER TABLE `Winner_Competition`
  ADD KEY `eventid` (`eventid`),
  ADD KEY `stakeholderid` (`stakeholderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Grants`
--
ALTER TABLE `Grants`
  MODIFY `Grantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Project`
--
ALTER TABLE `Project`
  MODIFY `Projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `SDG`
--
ALTER TABLE `SDG`
  MODIFY `SDG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Stakeholders`
--
ALTER TABLE `Stakeholders`
  MODIFY `stakeholderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Stakeholders` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Companies`
--
ALTER TABLE `Companies`
  ADD CONSTRAINT `Companies_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Stakeholders` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Events`
--
ALTER TABLE `Events`
  ADD CONSTRAINT `Events_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`depart_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Grants`
--
ALTER TABLE `Grants`
  ADD CONSTRAINT `Grants_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Potential_Sponsors` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Grant_Department`
--
ALTER TABLE `Grant_Department`
  ADD CONSTRAINT `Grant_Department_ibfk_1` FOREIGN KEY (`Grantid`) REFERENCES `Grants` (`Grantid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Grant_Department_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`depart_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Grant_Event`
--
ALTER TABLE `Grant_Event`
  ADD CONSTRAINT `Grant_Event_ibfk_1` FOREIGN KEY (`Grantid`) REFERENCES `Grants` (`Grantid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Grant_Event_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `Events` (`eventid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Grant_Project`
--
ALTER TABLE `Grant_Project`
  ADD CONSTRAINT `Grant_Project_ibfk_1` FOREIGN KEY (`Grantid`) REFERENCES `Grants` (`Grantid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Grant_Project_ibfk_2` FOREIGN KEY (`Projectid`) REFERENCES `Project` (`Projectid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Individuals`
--
ALTER TABLE `Individuals`
  ADD CONSTRAINT `Individuals_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Stakeholders` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Individuals_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `Roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Potential_Sponsors`
--
ALTER TABLE `Potential_Sponsors`
  ADD CONSTRAINT `Potential_Sponsors_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Stakeholders` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Project`
--
ALTER TABLE `Project`
  ADD CONSTRAINT `Project_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`depart_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SDG_Project`
--
ALTER TABLE `SDG_Project`
  ADD CONSTRAINT `SDG_Project_ibfk_1` FOREIGN KEY (`SDG_ID`) REFERENCES `SDG` (`SDG_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SDG_Project_ibfk_2` FOREIGN KEY (`Projectid`) REFERENCES `Project` (`Projectid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Stakeholder_Course`
--
ALTER TABLE `Stakeholder_Course`
  ADD CONSTRAINT `Stakeholder_Course_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Individuals` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Stakeholder_Course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Stakeholder_Event`
--
ALTER TABLE `Stakeholder_Event`
  ADD CONSTRAINT `Stakeholder_Event_ibfk_1` FOREIGN KEY (`eventid`) REFERENCES `Events` (`eventid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Stakeholder_Event_ibfk_2` FOREIGN KEY (`stakeholderid`) REFERENCES `Individuals` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Stakeholder_Project`
--
ALTER TABLE `Stakeholder_Project`
  ADD CONSTRAINT `Stakeholder_Project_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Stakeholders` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Stakeholder_Project_ibfk_2` FOREIGN KEY (`projectid`) REFERENCES `Project` (`Projectid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `Students_ibfk_1` FOREIGN KEY (`stakeholderid`) REFERENCES `Individuals` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Winner_Competition`
--
ALTER TABLE `Winner_Competition`
  ADD CONSTRAINT `Winner_Competition_ibfk_1` FOREIGN KEY (`eventid`) REFERENCES `Events` (`eventid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Winner_Competition_ibfk_2` FOREIGN KEY (`stakeholderid`) REFERENCES `Stakeholders` (`stakeholderid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
