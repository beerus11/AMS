CREATE TABLE IF NOT EXISTS notifications (
  id        INT(11)        NOT NULL AUTO_INCREMENT,
  username  VARCHAR(16)    NOT NULL,
  initiator VARCHAR(16)    NOT NULL,
  app       VARCHAR(255)   NOT NULL,
  note      VARCHAR(255)   NOT NULL,
  did_read  ENUM('0', '1') NOT NULL DEFAULT '0',
  date_time DATETIME       NOT NULL,
  PRIMARY KEY (id)
)