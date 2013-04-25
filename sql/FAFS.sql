SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `data`
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `key` varchar(64) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;
