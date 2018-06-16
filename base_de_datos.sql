	/*crear base de datos*/
	CREATE DATABASE consolidado;
	/*crear tabla user*/
	CREATE TABLE `consolidado`.`user` ( `id` INT(12) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `lastname` VARCHAR(20) NOT NULL , `username` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , `email` VARCHAR(20) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
	/*CREAR TABLA RESERVAS*/
	CREATE TABLE `consolidado`.`reservas` (
  `id_reservas` INT NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NOT NULL,
  `cant` VARCHAR(3) NOT NULL,
  `hora` VARCHAR(10) NOT NULL,
  `mesa` VARCHAR(3) NOT NULL,
  PRIMARY KEY (`id_reservas`),
  UNIQUE INDEX `id_reservas_UNIQUE` (`id_reservas` ASC));

/*insertar columna day en tabla reservas*/
ALTER TABLE `consolidado`.`reservas` 
ADD COLUMN `day` VARCHAR(20) NOT NULL AFTER `cant`;
