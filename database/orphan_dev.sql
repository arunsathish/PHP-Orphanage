CREATE TABLE `member` (
  `user_id` INT AUTO_INCREMENT,
  `username` VARCHAR(32),
  `password` VARCHAR(40),
  `join_date` DATETIME,
  `first_name` VARCHAR(32),
  `last_name` VARCHAR(32),
  `gender` VARCHAR(1),
  `birthdate` DATE,
  `city` VARCHAR(32),
  `state` VARCHAR(2),
  `picture` VARCHAR(32),
  PRIMARY KEY (`user_id`)
);