-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 03:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE `care` (
  `which` int(11) NOT NULL,
  `blue` varchar(100) DEFAULT NULL,
  `traditional` varchar(200) DEFAULT NULL,
  `top` varchar(100) DEFAULT NULL,
  `democratic` varchar(200) DEFAULT NULL,
  `enjoy` varchar(200) NOT NULL,
  `Mr` varchar(250) NOT NULL,
  `stock` varchar(200) DEFAULT NULL,
  `you` varchar(100) DEFAULT NULL,
  `first` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`which`, `blue`, `traditional`, `top`, `democratic`, `enjoy`, `Mr`, `stock`, `you`, `first`) VALUES
(1, 'Subagja Martawijaya', 'Software Enginner', 'Bandung', '20', '2021/06/30', 'Jln.Taman Sari Bawah', '$162.700', '082120241449', 'Work From Home'),
(6, 'Harry Warren', 'Software Enginner', 'Bogor', '21', '2019/04/19', 'Jln.durian', '$280.788', '087868786235', 'Work From Home'),
(10, 'Gregg Thornton ', 'Security Enginner', 'Jakarta', '34', '20/5/2019', 'Jln.Nangka', '$234.123', '08972387468', 'off work'),
(11, 'Rudy Woods', 'System Analyst', 'Bandung', '24', '20/7/2020', 'Jln.Mangga', '$122.123', '0897075865', 'off work'),
(12, 'Jeannette Moody', 'Web Developer', 'Jakarta', '28', '09/3/2019', 'Jln.Anggur', '$323.123', '089723874', 'Work From Home');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`) VALUES
('Gojosatoru', '$2y$10$3whbZhyC5570toViekmOp.Lu/7oBZpdrbBTJ9.df1KPfke72o5Yie', 'Gojo Satoru'),
('Gregg1', '$2y$10$onVST8LQcxPEni00TLO/nekftaSSe1frFp.gHDrtziH6EeZSJ3BZC', 'Gregg Thornton'),
('Jaja', '$2y$10$MHm7im7yx3lJ2XW3dGDfQ.iCxG10pLWsql7FOPZR/SlDwz/XVul0e', 'Budi'),
('Silvercrow', '$2y$10$j85o6ibnaw7JRjtuvwxUouvVrJ1zeTsY9dR/HZIc28u5H/qc6pJA6', 'Subagja Martawijaya'),
('Stimpy', '$2y$10$bOZMEx6va6RyI9P.bJFeXuWTNZzFcAGwplZRzd7ofqL16KGRvN4LO', 'Subagja Martawijaya'),
('Stimpy$', '$2y$10$BbWh8noocD24cjrAHch4lezN2eOCtr.WXX8VKkaOZlyRVtvd89TsW', 'Stimpy'),
('subagja.martawijaya', '$2y$10$RgEk97DggeydYp3bw8edVOl7YCZLQl1VsBl8AJRbRV72o6EXiPmtC', 'Subagja Martawijaya'),
('subagjawijaya', '$2y$10$1/gvlQm8Ph4T1f0IU/lycu8H/Q6Dp0O7MChTkea6tudJuNJnunO1G', 'Budi'),
('testing', '$2y$10$s1ttE.xTCbK7Qh71caz9Eu8x1.IoaPgn2fb4u06kwVTGRmJZlNo6q', 'Subagja Martawijaya'),
('testing@', '$2y$10$FRXfHUdhYatm90xIxUgD2uFilZSfjiotg65DXMnlfP9zek23kVx8y', 'Rudi Tabuti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`which`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `which` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
