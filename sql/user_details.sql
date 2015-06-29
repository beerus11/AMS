CREATE TABLE IF NOT EXISTS `user_details` (
  `id`         INT(11)                   NOT NULL AUTO_INCREMENT,
  `username`   VARCHAR(255)              NOT NULL,
  `email`      VARCHAR(255)              NOT NULL,
  `password`   VARCHAR(255)              NOT NULL,
  `userlevel`  ENUM('g', 's', 't', 'xs') NOT NULL DEFAULT 'g',
  `gender`     ENUM('m', 'f')            NOT NULL,
  `website`    VARCHAR(255)              NULL,
  `country`    VARCHAR(255)              NULL,
  `avatar`     VARCHAR(255)              NULL,
  `ip`         VARCHAR(255)              NOT NULL,
  `signup`     DATETIME                  NOT NULL,
  `lastlogin`  DATETIME                  NOT NULL,
  `notescheck` DATETIME                  NOT NULL,
  `activated`  ENUM('0', '1')            NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)