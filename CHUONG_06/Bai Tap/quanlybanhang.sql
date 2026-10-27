-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2026 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL COMMENT 'Mã hàng',
  `tenhang` varchar(40) NOT NULL COMMENT 'Tên hàng',
  `mansx` varchar(2) NOT NULL COMMENT 'Mã nhà SX',
  `namsx` int(11) NOT NULL COMMENT 'Năm sản xuất',
  `gia` int(11) NOT NULL COMMENT 'Giá bán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Dell Inspiron', 'DE', 2015, 550),
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Dell Inspiron', 'DE', 2015, 550),
('AS01', 'Asus TUF', 'AS', 2017, 520),
('AS02', 'Asus Vivobook', 'AS', 2017, 580),
('LE01', 'Lenovo Thinkpad', 'LE', 2019, 750),
('TO01', 'Toshiba Satellite', 'TO', 2014, 630),
('LE01', 'Lenovo Legion', 'LE', 2020, 540),
('LE01', 'Lenovo Thinkpad', 'LE', 2020, 600);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(3) NOT NULL COMMENT 'Mã hoá đơn',
  `makh` varchar(3) NOT NULL COMMENT 'Mã K.Hàng',
  `mahang` varchar(4) NOT NULL COMMENT 'Mã Hàng',
  `soluong` int(11) NOT NULL COMMENT 'Số lượng',
  `thanhtien` int(11) NOT NULL COMMENT 'Thành Tiền'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K00', 'DE01', 2, 0),
('001', 'K00', 'DE02', 1, 0),
('001', 'K00', 'DE01', 2, 0),
('001', 'K00', 'DE02', 1, 0),
('002', 'K00', 'LE01', 5, 0),
('002', 'K00', 'LE02', 3, 0),
('003', 'K00', 'TO01', 1, 0),
('004', 'K00', 'DE01', 2, 0),
('005', 'K00', 'AS01', 4, 0),
('005', 'K00', 'LE01', 6, 0),
('005', 'K00', 'LE02', 8, 0),
('006', 'K00', 'AS01', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khach hang`
--

CREATE TABLE `khach hang` (
  `makh` varchar(4) NOT NULL COMMENT 'Mã K.Hàng',
  `tenkh` varchar(30) NOT NULL COMMENT 'Tên K.Hàng',
  `namsinh` int(11) NOT NULL COMMENT 'Năm sinh\r\n',
  `dienthoai` varchar(10) NOT NULL COMMENT 'Số điện thoại',
  `diachi` varchar(50) NOT NULL COMMENT 'Địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach hang`
--

INSERT INTO `khach hang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'Nguyễn Thị Lan', 1980, '0913123456', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1985, '0913024357', 'Vĩnh Lợi'),
('K001', 'Nguyễn Thị Lan', 1980, '0913123456', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1985, '0913024357', 'Vĩnh Lợi'),
('K003', 'Lâm Văn Thanh', 1979, '0913123457', 'Giá Rai'),
('K004', 'Dương Thu Thuỷ', 1995, '0913024358', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', 1987, '0903223344', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', 1975, '0989122112', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', 1990, '0944556677', 'Bạc Liêu'),
('K008', 'Hồ Trung Tín', 2000, '0944119999', 'Phước Long'),
('K009', 'Trương Xuân Thi', 2001, '0909000111', 'Vĩnh Lợi'),
('K010', 'Ngô Văn Nam', 2001, '0909000112', 'Giá Rai');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(2) NOT NULL COMMENT 'Mã nhà SX',
  `tennsx` varchar(40) NOT NULL COMMENT 'Tên nhà SX',
  `quocgia` varchar(20) NOT NULL COMMENT 'Quốc Gia '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('DE', 'DELL ', 'Hoa Kỳ'),
('AS', 'ASUS', 'Đài Loan'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản'),
('DE', 'DELL ', 'Hoa Kỳ'),
('AS', 'ASUS', 'Đài Loan'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
