CREATE TABLE IF NOT EXISTS `register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `accomodation` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB COLLATE=utf8_unicode_ci;

