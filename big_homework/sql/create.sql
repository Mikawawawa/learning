CREATE TABLE `music`.`user`
(`id` VARCHAR
(16) NOT NULL , `name` VARCHAR
(32) NOT NULL ,`password` VARCHAR
(32) NOT NULL,PRIMARY KEY
(`id`)) ENGINE = InnoDB;

CREATE TABLE `music`.`singer`
( 
`id` VARCHAR
(16) NOT NULL , 
`name` VARCHAR
(32) NOT NULL ,
`sex` BIT NOT NULL ,
`region` VARCHAR
(32) NOT NULL,
`company` VARCHAR
(32)
PRIMARY KEY
(`id`)
) ENGINE = InnoDB;

-- CREATE TABLE `music`.`album` ( 
-- `id` VARCHAR(16) NOT NULL , 
-- `name` VARCHAR(32) NOT NULL ,
-- `sex` BIT NOT NULL ,
-- `region` VARCHAR(32) NOT NULL,
-- `company` VARCHAR(32)
-- PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB;