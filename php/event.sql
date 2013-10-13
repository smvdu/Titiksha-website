CREATE TABLE IF NOT EXISTS `events` (
  `email_id` varchar(50) NOT NULL,
  `branch_id` varchar(50) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time_stamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB COLLATE=utf8_unicode_ci;

