CREATE TABLE IF NOT EXISTS `users` (
  `id`        INT(11)                   NOT NULL AUTO_INCREMENT,
  `username`  VARCHAR(255)              NOT NULL,
  `email`     VARCHAR(255)              NOT NULL,
  `password`  VARCHAR(255)              NOT NULL,
  `userlevel` ENUM('g', 's', 't', 'xs') NOT NULL DEFAULT 'g',
  `ip`        VARCHAR(255)              NOT NULL,
  `signup`    DATETIME                  NOT NULL,
  `activated` ENUM('0', '1')            NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)