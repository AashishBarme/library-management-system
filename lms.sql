
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(100) NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `date_receive` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `category`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(100) NOT NULL,
	`description` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(50) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `borrow_member_id_fk` (`member_id`),
  KEY `borrow_book_id_fk` (`book_id`)
);


CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `user_login`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_id` INT(11) NOT NULL,
	`username` VARCHAR(20) NOT NULL,
	`password` text NOT NULL,
	PRIMARY KEY(`id`),
	FOREIGN KEY (`user_id`) REFERENCES `user`(id) ON DELETE CASCADE	
);

ALTER TABLE `user`
ADD COLUMN IF NOT EXISTS `role` varchar(10) COLLATE 'utf8mb4_unicode_ci' NOT NULL AFTER `gender`;

ALTER TABLE `user_login`
ADD COLUMN IF NOT EXISTS `status`  varchar(10) COLLATE 'utf8mb4_unicode_ci' NOT NULL AFTER `password`;


INSERT IGNORE INTO `user` (`id`,`firstname`, `lastname`, `gender`,`role`, `address`, `contact`, `status`)
VALUES (1, 'admin', 'admin', 'male', 'admin','address', '12345678', 'active');
INSERT IGNORE INTO `user_login` (`id`,`user_id`, `username`, `password`,`status`)
VALUES (1,'1', 'admin', 'admin','active');


ALTER TABLE `user_login` add unique (username);