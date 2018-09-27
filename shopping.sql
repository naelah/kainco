-- phpMyAdmin SQL Dump
-- version 2.11.9.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2009 at 01:47 PM
-- Server version: 5.0.81
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `member` (
`mem_id` int(11) NOT NULL AUTO_INCREMENT,
`email` varchar(30) NOT NULL,
`password` varchar(30) NOT NULL,
`name` varchar(30) NOT NULL,
`address` varchar(100) NOT NULL,
`contact` varchar(30) NOT NULL, date datetime NOT NULL,
PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customers`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL auto_increment,
  `date` date NOT NULL,
  `mem_id` int(11) NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `description` varchar(255) collate latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;


CREATE TABLE `temp_members_db` (
`confirm_code` varchar(65) NOT NULL,
`email` varchar(30) NOT NULL,
`password` varchar(30) NOT NULL,
`name` varchar(30) NOT NULL,
`address` varchar(100) NOT NULL,
`contact` varchar(30) NOT NULL,
`date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


create table polar (
pol_id int(10) NOT NULL AUTO_INCREMENT, 
email varchar(30) NOT NULL, 
date datetime, 
bh float(4) NOT NULL, 
kk float(4) NOT NULL, 
pt float(4) NOT NULL, 
ll float(4) NOT NULL, 
da float(4) NOT NULL, 
pi float(4) NOT NULL, 
pb float(4) NOT NULL, 
pu float(4) NOT NULL, 
lb float(4) NOT NULL, 
bd float(4) NOT NULL, 
bp float(4) NOT NULL, 
lk float(4) NOT NULL, 
primary key (pol_id), 
foreign key (email) references member(email) on delete cascade);

create table image(orderid int(11) auto_increment, type varchar(64), name varchar(64), 
alt varchar(64), img blob, primary key(orderid));

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Baju Kurung Pesak', 'Berkekek & Kain - susun tepi & Tempoh jahit - 5 hari bekerja', 50, 'images/pesak.png');

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(2, 'Baju Kurung Pahang', 'Berpesak kecil dan besar & Kain - susun tepi  & Tempoh jahit - 5 hari bekerja', 60, 'images/pahang.png');


INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(3, 'Baju Kurung Moden', 'Berzip belakang & Kain - silang hadapan  & Tempoh jahit - 7 hari bekerja', 80, 'images/moden.png');


mysql> ALTER TABLE PRODUCTS ADD COLUMN BOTTOM VARCHAR(30);
Query OK, 3 rows affected (0.01 sec)
Records: 3  Duplicates: 0  Warnings: 0

mysql> ALTER TABLE PRODUCTS ADD COLUMN duration  VARCHAR(30);
Query OK, 3 rows affected (0.02 sec)
Records: 3  Duplicates: 0  Warnings: 0

mysql> update products set bottom = 'Kain Susun Tepi' where serial = '1';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set bottom = 'Kain Susun Tepi' where serial = '2';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set bottom = 'Kain Silang Hadapan' where serial = '3';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set duration = '7' where serial = '3';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set duration = '5' where serial = '2';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set duration = '5' where serial = '1';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set description = 'Berkekek' where serial = '1';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set description = 'Berpesak kecil dan besar' where serial = '2';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update products set description = 'Berzip belakang' where serial = '3';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0


mysql> select * from products;
+--------+--------------------+--------------------------+-------+-------------------+---------------------+----------+
| serial | name               | description              | price | picture           | BOTTOM              | duration |
+--------+--------------------+--------------------------+-------+-------------------+---------------------+----------+
|      1 | Baju Kurung Pesak  | Berkekek                 |    50 | images/pesak.png  | Kain Susun Tepi     | 5        |
|      2 | Baju Kurung Pahang | Berpesak kecil dan besar |    60 | images/pahang.png | Kain Susun Tepi     | 5        |
|      3 | Baju Kurung Moden  | Berzip belakang          |    80 | images/moden.png  | Kain Silang Hadapan | 7        |
+--------+--------------------+--------------------------+-------+-------------------+---------------------+----------+
3 rows in set (0.00 sec)

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `description` varchar(255) collate latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) collate latin1_general_ci NOT NULL,
  `bottom` varchar(30) collate latin1_general_ci NOT NULL,
  `duration` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;



INSERT INTO `products` VALUES (1, 'Baju Kurung Pesak', 'Berkekek', 50, 'images/pesak.png', 'Kain Susun Tepi', '5');

INSERT INTO `products` VALUES
(2, 'Baju Kurung Pahang', 'Berpesak kecil dan besar', 60, 'images/pahang.png', 'Kain Susun Tepi', '5');


INSERT INTO `products`  VALUES
(3, 'Baju Kurung Moden', 'Berzip belakang', 80, 'images/moden.png', 'Kain Silang Hadapan', '7');
