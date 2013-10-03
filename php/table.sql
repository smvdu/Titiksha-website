CREATE TABLE IF NOT EXISTS `register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `year_of_study` varchar(5) NOT NULL,
  `phone_number` varchar(5) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB COLLATE=utf8_unicode_ci;

