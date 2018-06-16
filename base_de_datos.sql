	/*crear base de datos*/
	CREATE DATABASE consolidado;
	/*crear tabla user*/
	CREATE TABLE `consolidado`.`user` ( `id` INT(12) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `lastname` VARCHAR(20) NOT NULL , `username` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , `email` VARCHAR(20) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
	