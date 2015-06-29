CREATE TABLE IF NOT EXISTS useroptions (
  id         INT(11)      NOT NULL,
  username   VARCHAR(16)  NOT NULL,
  background VARCHAR(255) NOT NULL,
  question   VARCHAR(255) NULL,
  answer     VARCHAR(255) NULL,
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
)