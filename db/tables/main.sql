CREATE TABLE  `miembros` (
 `id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `userid` VARCHAR( 23 ) NOT NULL ,
 `user_pass` VARCHAR( 32 ) NOT NULL ,
 `email` VARCHAR( 39 ) NOT NULL ,
 `group_id` TINYINT( 3 ) NOT NULL ,
 `state` INT( 11 ) NOT NULL ,
 `unban_time` INT( 11 ) NOT NULL ,
 `logincount` MEDIUMINT( 9 ) NOT NULL ,
 `last_ip` VARCHAR( 100 ) NOT NULL ,
 `sex` TINYINT( 1 ) NOT NULL ,
INDEX (  `userid` )
) ENGINE = MYISAM ;