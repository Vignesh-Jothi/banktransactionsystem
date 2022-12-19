-- Database: `bank`
-- Table structure for table `statement`

DROP TABLE IF EXISTS `statement`;
CREATE TABLE IF NOT EXISTS `statement` (
  `from_cust` varchar(20) DEFAULT NULL,
  `to_cust` varchar(20) DEFAULT NULL,
  `amt` int DEFAULT NULL,
  `res` varchar(40) DEFAULT NULL,
  `paydate` date DEFAULT NULL,
  `ctime` varchar(10) DEFAULT NULL
);
