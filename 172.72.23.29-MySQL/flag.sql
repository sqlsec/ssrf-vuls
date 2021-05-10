SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

drop database if exists flag;
create database flag;
use flag;

-- ----------------------------
-- Table structure for table
-- ----------------------------
DROP TABLE IF EXISTS `table`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `flag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of table
-- ----------------------------
BEGIN;
INSERT INTO `test` VALUES (1, 'flag{71a5d5e6b2b9a3da3dc0a85851d50316}');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
