CREATE TABLE IF NOT EXISTS photos (
  id          INT(11)      NOT NULL AUTO_INCREMENT,
  user        VARCHAR(16)  NOT NULL,
  gallery     VARCHAR(16)  NOT NULL,
  filename    VARCHAR(255) NOT NULL,
  description VARCHAR(255) NULL,
  uploaddate  DATETIME     NOT NULL,
  PRIMARY KEY (id)
)