-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php2020`
--

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

CREATE TABLE `employee` (
  `No` int(11) NOT NULL,
  `Fname` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Minit` char(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Sex` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `employee`
--

INSERT INTO `employee` (`No`, `Fname`, `Minit`, `Lname`, `Bdate`, `Address`, `Sex`, `Salary`) VALUES
(1, 'John', 'B', 'Smith', '1965-01-09', '', 'M', '30000.00'),
(2, 'Franklin', 'T', 'Wong', '1955-12-08', '', 'M', '40000.00'),
(3, 'Joyce', 'A', 'English', '1972-07-31', '', 'F', '25000.00'),
(4, 'Ramesh', 'K', 'Narayan', '1962-09-15', '', 'M', '380000.00'),
(5, 'James', 'E', 'Borg', '1937-11-10', '', 'M', '55000.00'),
(6, 'Jennifer', 'S', 'Wallace', '1941-06-20', '', 'F', '43000.00'),
(7, 'Ahmad', 'V', 'Jabbar', '1969-03-29', '', 'M', '25000.00'),
(8, 'Alicia', 'J', 'Zelaya', '1968-01-10', '', 'F', '25000.00');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`No`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `employee`
--
ALTER TABLE `employee`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
