CREATE DATABASE test_ide;

USE test_ide;

CREATE TABLE `school`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `school_code` varchar(20) NOT NULL,
  `school_name` varchar(100) NULL,
  `inaugurated_date` date NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `unique_school_code`(`school_code`) USING BTREE
);