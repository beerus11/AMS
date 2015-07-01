CREATE TABLE IF NOT EXISTS `users_personal_details` (
  `id`            INT(11)             NOT NULL AUTO_INCREMENT,
  `username`      VARCHAR(255)        NOT NULL,
  `firstname`     VARCHAR(255)        NOT NULL,
  `middlename`    VARCHAR(255)        NOT NULL,
  `lastname`      VARCHAR(255)        NOT NULL,
  `dob`           DATE                NOT NULL,
  `gender`        ENUM('M', 'F')      NOT NULL,
  `mobno`         BIGINT              NOT NULL,
  `telno`         BIGINT              NOT NULL,
  `martialstatus` ENUM('U', 'M', 'D') NOT NULL,
  `aboutme`       TEXT                NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)