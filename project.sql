CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'Michelle@gmail.com', '123456'),
(2, 'Rachel@gmail.com', '765432');


CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5eef62e782673', '5eef62e80a9f5'),
('5eef62e875444', '5eef62e87beea'),
('5eef62e8a577a', '5eef62e8bc5c8'),
('5eef62e8e5fb6', '5eef62e8f211e'),
('5eef62e93a49b', '5eef62e94664f'),
('5eef6c9e036c1', '5eef6c9e260a2'),
('5eef6c9e84db7', '5eef6c9e9268e'),
('5eef6c9ec9ac8', '5eef6c9ed2dad'),
('5eef6c9f15fbb', '5eef6c9f21cbf'),
('5eef6c9f7df88', '5eef6c9f8a2d1'),
('5eef6c9fc6db7', '5eef6c9fd3040'),
('5eef6ca0220bf', '5eef6ca02ccb1'),
('5eef6ca0787ca', '5eef6ca07edba'),
('5eef6ca0b9eec', '5eef6ca0c1d6d'),
('5eef6ca0f35a0', '5eef6ca1062d6');


CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('galaxyfanyy1106@gmail.com', '5eef5e7cbc33f', 2, 5, 3, 2, '2020-06-21 13:42:40'),
('John@gmail.com', '5eef5e7cbc33f', -2, 5, 2, 3, '2020-06-21 13:46:05'),
('MeiLing97@gmail.com', '5eef5e7cbc33f', 2, 5, 3, 2, '2020-06-21 13:51:33'),
('Muhammad123@gmail.com', '5eef5e7cbc33f', -6, 5, 1, 4, '2020-06-21 13:53:16'),
('Sherly98@gmail.com', '5eef5e7cbc33f', -6, 5, 1, 4, '2020-06-21 13:55:53'),
('Winson0621@gmail.com', '5eef5e7cbc33f', -6, 5, 1, 4, '2020-06-21 13:56:54'),
('John@gmail.com', '5eef6a29b0578', -16, 10, 1, 9, '2020-06-21 14:23:18'),
('galaxyfanyy1106@gmail.com', '5eef6a29b0578', -4, 10, 4, 6, '2020-06-21 14:24:05'),
('MeiLing97@gmail.com', '5eef6a29b0578', -12, 10, 2, 8, '2020-06-21 14:24:44'),
('Muhammad123@gmail.com', '5eef6a29b0578', -16, 10, 1, 9, '2020-06-21 14:25:21'),
('Sherly98@gmail.com', '5eef6a29b0578', -8, 10, 3, 7, '2020-06-21 14:26:10');


CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5eef62e782673', 'Module ', '5eef62e80a9e9'),
('5eef62e782673', 'Relational model', '5eef62e80a9f2'),
('5eef62e782673', 'Schema', '5eef62e80a9f4'),
('5eef62e782673', 'Sub schema', '5eef62e80a9f5'),
('5eef62e875444', 'Composite keys', '5eef62e87bee5'),
('5eef62e875444', 'Candidate keys', '5eef62e87beea'),
('5eef62e875444', ' Determinants', '5eef62e87beeb'),
('5eef62e875444', ' Foreign keys', '5eef62e87beec'),
('5eef62e8a577a', '  Tables', '5eef62e8bc5c2'),
('5eef62e8a577a', '  Relations', '5eef62e8bc5c6'),
('5eef62e8a577a', 'Rows', '5eef62e8bc5c7'),
('5eef62e8a577a', 'Attributes', '5eef62e8bc5c8'),
('5eef62e8e5fb6', 'Column', '5eef62e8f2119'),
('5eef62e8e5fb6', 'one-dimensional table', '5eef62e8f211d'),
('5eef62e8e5fb6', 'two-dimensional table', '5eef62e8f211e'),
('5eef62e8e5fb6', ' three-dimensional table', '5eef62e8f211f'),
('5eef62e93a49b', 'Referential integrity constraints', '5eef62e94664a'),
('5eef62e93a49b', 'Normal forms', '5eef62e94664e'),
('5eef62e93a49b', 'Modification anomalies', '5eef62e94664f'),
('5eef62e93a49b', 'Transitive dependencies', '5eef62e946650'),
('5eef6c9e036c1', ' RFC', '5eef6c9e260a2'),
('5eef6c9e036c1', 'RCF', '5eef6c9e260a7'),
('5eef6c9e036c1', ' ID', '5eef6c9e260a8'),
('5eef6c9e036c1', 'DFC', '5eef6c9e260a9'),
('5eef6c9e84db7', 'Added', '5eef6c9e9268e'),
('5eef6c9e84db7', 'Removed', '5eef6c9e92693'),
('5eef6c9e84db7', ' Rearranged', '5eef6c9e92694'),
('5eef6c9e84db7', 'Modified', '5eef6c9e92695'),
('5eef6c9ec9ac8', 'Syntax', '5eef6c9ed2dad'),
('5eef6c9ec9ac8', 'Semantics', '5eef6c9ed2db1'),
('5eef6c9ec9ac8', 'Struct', '5eef6c9ed2db2'),
('5eef6c9ec9ac8', 'Formatting', '5eef6c9ed2db3'),
('5eef6c9f15fbb', ' Automatic', '5eef6c9f21cb9'),
('5eef6c9f15fbb', 'Half-duplex', '5eef6c9f21cbd'),
('5eef6c9f15fbb', ' Full-duplex', '5eef6c9f21cbe'),
('5eef6c9f15fbb', 'Simplex', '5eef6c9f21cbf'),
('5eef6c9f7df88', ' CNNET', '5eef6c9f8a2ca'),
('5eef6c9f7df88', 'NSFNET', '5eef6c9f8a2cf'),
('5eef6c9f7df88', 'ASAPNET', '5eef6c9f8a2d0'),
('5eef6c9f7df88', ' ARPANET', '5eef6c9f8a2d1'),
('5eef6c9fc6db7', 'Path', '5eef6c9fd303d'),
('5eef6c9fc6db7', 'Medium', '5eef6c9fd3040'),
('5eef6c9fc6db7', 'Protocol', '5eef6c9fd3041'),
('5eef6c9fc6db7', 'Route', '5eef6c9fd3042'),
('5eef6ca0220bf', 'ITU-T', '5eef6ca02ccab'),
('5eef6ca0220bf', ' IEEE', '5eef6ca02ccb0'),
('5eef6ca0220bf', ' FCC', '5eef6ca02ccb1'),
('5eef6ca0220bf', 'ISOC', '5eef6ca02ccb2'),
('5eef6ca0787ca', ' PC', '5eef6ca07edb3'),
('5eef6ca0787ca', ' Smartphones', '5eef6ca07edb8'),
('5eef6ca0787ca', ' Servers', '5eef6ca07edb9'),
('5eef6ca0787ca', 'Switch', '5eef6ca07edba'),
('5eef6ca0b9eec', ' Protocols', '5eef6ca0c1d6d'),
('5eef6ca0b9eec', 'Standards', '5eef6ca0c1d72'),
('5eef6ca0b9eec', ' RFCs', '5eef6ca0c1d73'),
('5eef6ca0b9eec', 'Servers', '5eef6ca0c1d74'),
('5eef6ca0f35a0', 'Unipoint', '5eef6ca1062d1'),
('5eef6ca0f35a0', 'Multipoint', '5eef6ca1062d6'),
('5eef6ca0f35a0', 'Point to point', '5eef6ca1062d7'),
('5eef6ca0f35a0', ' Simplex', '5eef6ca1062d8');


CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5eef5e7cbc33f', '5eef62e782673', 'The way a particular application views the data from the database that the application uses is a\r\n', 4, 1),
('5eef5e7cbc33f', '5eef62e875444', ' The primary key is selected from the\r\n', 4, 2),
('5eef5e7cbc33f', '5eef62e8a577a', ' A functional dependency is a relationship between or among\r\n', 4, 3),
('5eef5e7cbc33f', '5eef62e8e5fb6', 'A relation is considered a\r\n', 4, 4),
('5eef5e7cbc33f', '5eef62e93a49b', 'For some relations, changing the data can have undesirable consequences called\r\n', 4, 5),
('5eef6a29b0578', '5eef6c9e036c1', 'The IETF standards documents are called ________', 4, 1),
('5eef6a29b0578', '5eef6c9e84db7', ' In the layer hierarchy as the data packet moves from the upper to the lower layers, headers are ___________', 4, 2),
('5eef6a29b0578', '5eef6c9ec9ac8', 'The structure or format of data is called __________', 4, 3),
('5eef6a29b0578', '5eef6c9f15fbb', 'Communication between a computer and a keyboard involves ______________ transmission.', 4, 4),
('5eef6a29b0578', '5eef6c9f7df88', 'The first Network was called ________', 4, 5),
('5eef6a29b0578', '5eef6c9fc6db7', 'A _______ is the physical path over which a message travels.', 4, 6),
('5eef6a29b0578', '5eef6ca0220bf', 'Which organization has authority over interstate and international commerce in the communications field?', 4, 7),
('5eef6a29b0578', '5eef6ca0787ca', 'Which of this is not a network edge device?', 4, 8),
('5eef6a29b0578', '5eef6ca0b9eec', 'A _________ set of rules that governs data communication.', 4, 9),
('5eef6a29b0578', '5eef6ca0f35a0', 'Three or more devices share a link in ________ connection.', 4, 10);


CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('5eef5e7cbc33f', 'Database', 2, 2, 5, 15, 'Please answer all the question.', 'Database', '2020-06-21 13:19:56'),
('5eef6a29b0578', 'Computer Networking', 2, 2, 10, 30, 'Please answer all the question.', 'computer networking', '2020-06-21 14:09:45');


CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 9, '2015-06-24 03:22:38'),
('avantika420@gmail.com', 8, '2015-06-23 14:49:39'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('galaxyfanyy1106@gmail.com', -2, '2020-06-21 14:24:05'),
('John@gmail.com', -18, '2020-06-21 14:23:18'),
('MeiLing97@gmail.com', -10, '2020-06-21 14:24:44'),
('Muhammad123@gmail.com', -22, '2020-06-21 14:25:21'),
('Sherly98@gmail.com', -14, '2020-06-21 14:26:10'),
('Winson0621@gmail.com', -6, '2020-06-21 13:56:54');


CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Siti', 'F', 'University Tun Hussein Onn Malaysia', 'galaxyfanyy1106@gmail.com', 167806028, '827ccb0eea8a706c4c34a16891f84e7b'),
('John', 'M', 'University Tun Hussein Onn Malaysia', 'John@gmail.com', 123434345, '01cfcd4f6b8770febfb40cb906715822'),
('Lim Mei Ling', 'F', 'University Tun Hussein Onn Malaysia', 'MeiLing97@gmail.com', 124569786, '1e01ba3e07ac48cbdab2d3284d1dd0fa'),
('Muhammad Bin Abu', 'M', 'University Tun Hussein Onn Malaysia', 'Muhammad123@gmail.com', 165432343, '6531401f9a6807306651b87e44c05751'),
('Sherly', 'F', 'University Tun Hussein Onn Malaysia', 'Sherly98@gmail.com', 137656787, '0838ecfb969d782bae32f24d02057e26'),
('Winson', 'M', 'University Tun Hussein Onn Malaysia', 'Winson0621@gmail.com', 148976587, 'c8837b23ff8aaa8a2dde915473ce0991');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);


ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `quiz1` (
  `Name` text NOT NULL,
  `Matric_ID` varchar(1000) NOT NULL,
  `Q1` varchar(1000) NOT NULL,
  `Q2` varchar(1000) NOT NULL,
  `Q3` varchar(1000) NOT NULL,
  `Q4` varchar(1000) NOT NULL,
  `Q5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `quiz1` (`Name`, `Matric_ID`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`) VALUES
('Syamil', 'Ci170056', 'Hai', 'Hello', 'YOOO', 'lalalaala', 'qwerty'),
('test1', '', 'hmm', 'asams', 'ff', 'fss', 'ff'),
('test1', 'huhu', 'hmm', 'asams', 'ff', 'fss', 'ff'),
('test3', 'huhu', 'hmm', 'asams', 'ff', 'fss', 'ff');


CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `insert_number` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;


CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `lecturer` (`lecturer_id`, `email`, `password`) VALUES
(1, 'Joey@gmail.com', '180900'),
(2, 'Rachel@gmail.com', '765432');

CREATE TABLE `courseinfo` (
  `id` int(11) NOT NULL,
  `Course_ID` varchar(8) NOT NULL,
  `Course_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`id`, `Course_ID`, `Course_Name`) VALUES
(2, 'BIW20310', 'Web Designing'),
(3, 'BIW23011', 'Java Programming'),
(5, 'BIW32102', 'Network And Security');

-- --------------------------------------------------------

--
-- Table structure for table `databaseuser`
--

CREATE TABLE `databaseuser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databaseuser`
--

INSERT INTO `databaseuser` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '12345', 'admin'),
(2, 'AI180038', '12345678', 'student'),
(3, 'hazalila', '123456789', 'lecturer'),
(4, 'sapari', '123456789a', 'lecturer'),
(5, 'AI180037', 'qwerty', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `lecturerinfo`
--

CREATE TABLE `lecturerinfo` (
  `id` int(11) NOT NULL,
  `Lect_ID` varchar(8) NOT NULL,
  `Lect_Name` varchar(50) NOT NULL,
  `Lect_Email` varchar(50) NOT NULL,
  `Lect_Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturerinfo`
--

INSERT INTO `lecturerinfo` (`id`, `Lect_ID`, `Lect_Name`, `Lect_Email`, `Lect_Phone`) VALUES
(1, 'LI470035', 'Luqman Najat Al-Akbar bin Qayyum', 'najathensem@gmail.com', '067991745'),
(2, 'LI550032', 'Ahmad Hambali bin Ali', 'humble-li@gmail.com', '067543321'),
(3, 'LI550066', 'Nur Nurul binti Nara', 'nurululz@gmail.com', '067543445');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `Student_ID` varchar(8) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Student_Email` varchar(50) NOT NULL,
  `Student_Phone` varchar(10) NOT NULL,
  `Student_GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `Student_ID`, `Student_Name`, `Student_Email`, `Student_Phone`, `Student_GPA`) VALUES
(3, 'AI180031', 'Fikri Arif bin Azman', 'fikria322@gmail.com', '0196776223', 3.4),
(1, 'AI180037', 'ROSNAH MAD ARIS BINTI ARIWATAN', 'rosnahbawang@gmail.com', '0176545543', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `studentscore`
--

CREATE TABLE `studentscore` (
  `id` int(100) NOT NULL,
  `Student_ID` varchar(8) NOT NULL,
  `Course_ID` varchar(8) NOT NULL,
  `Lab_Score` float NOT NULL,
  `Quiz1_Score` float NOT NULL,
  `Quiz2_Score` float NOT NULL,
  `Test1_Score` float NOT NULL,
  `Test2_Score` float NOT NULL,
  `Project_Score` float NOT NULL,
  `Final_Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workload`
--

CREATE TABLE `workload` (
  `id` int(11) NOT NULL,
  `lect_name` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courseinfo`
--
ALTER TABLE `courseinfo`
  ADD PRIMARY KEY (`Course_ID`),
  ADD UNIQUE KEY `Course_Name` (`Course_Name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `databaseuser`
--
ALTER TABLE `databaseuser`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lecturerinfo`
--
ALTER TABLE `lecturerinfo`
  ADD PRIMARY KEY (`Lect_ID`),
  ADD UNIQUE KEY `Lect_Name` (`Lect_Name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`Student_ID`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `studentscore`
--
ALTER TABLE `studentscore`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_CourseID` (`Course_ID`),
  ADD KEY `Fk_StudentID` (`Student_ID`);

--
-- Indexes for table `workload`
--
ALTER TABLE `workload`
  ADD KEY `id` (`id`),
  ADD KEY `Fk_CourseName` (`course_name`),
  ADD KEY `Fk_LectName` (`lect_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courseinfo`
--
ALTER TABLE `courseinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `databaseuser`
--
ALTER TABLE `databaseuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturerinfo`
--
ALTER TABLE `lecturerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentscore`
--
ALTER TABLE `studentscore`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workload`
--
ALTER TABLE `workload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workload`
--
ALTER TABLE `workload`
  ADD CONSTRAINT `Fk_CourseName` FOREIGN KEY (`course_name`) REFERENCES `courseinfo` (`Course_Name`) ON DELETE CASCADE,
  ADD CONSTRAINT `Fk_LectName` FOREIGN KEY (`lect_name`) REFERENCES `lecturerinfo` (`Lect_Name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `register` (
  `courses` text NOT NULL,
  `subject` text NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `section` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`courses`, `subject`, `subject_code`, `section`) VALUES
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 0),
('Information Security', 'Web Security', 'BIS21340', 3),
('Information Security', 'Web Security', 'BIS21340', 3),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2),
('Information Security', 'Database', 'BIS21340', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
