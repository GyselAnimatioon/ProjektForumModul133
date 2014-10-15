-- MySQL Workbench Forward Engineering
drop schema if exists  mydb;
create schema mydb;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`nachrichten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`nachrichten` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titel` VARCHAR(150) NOT NULL,
  `nachricht` MEDIUMTEXT NOT NULL,
  `erstellt_am` int(8) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 77
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `vorname` VARCHAR(80) NOT NULL,
  `nachname` VARCHAR(80) NOT NULL,
  `mail` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `phone_nummer` VARCHAR(45) NULL DEFAULT 'Not_Set',
  `birthdate` VARCHAR(45) NULL DEFAULT 'Not_Set',
  `bio` MEDIUMTEXT NULL DEFAULT NULL,
  `fav_color` VARCHAR(45) NULL DEFAULT 'Not_Set',
  `fav_animal` VARCHAR(45) NULL DEFAULT 'Not_Set',
  `fav_food` VARCHAR(45) NULL DEFAULT 'Not_Set',
  `fav_drink` VARCHAR(45) NULL DEFAULT 'Not_Set',
  `facebook` VARCHAR(255) NULL DEFAULT 'Not_Set',
  `youtube` VARCHAR(255) NULL DEFAULT 'Not_Set',
  `twitter` VARCHAR(255) NULL DEFAULT 'Not_Set',
  `instagram` VARCHAR(255) NULL DEFAULT 'Not_Set',
  `lang` VARCHAR(45) NULL DEFAULT 'DE',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 29
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`gefaellt_mir`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`gefaellt_mir` (
  `user_id` INT(11) NOT NULL,
  `nachrichten_id` INT(11) NOT NULL,
  `how` INT(11) NOT NULL,
  INDEX `fk_like_user1_idx` (`user_id` ASC),
  INDEX `fk_like_nachrichten1_idx` (`nachrichten_id` ASC),
  CONSTRAINT `fk_like_nachrichten1`
    FOREIGN KEY (`nachrichten_id`)
    REFERENCES `mydb`.`nachrichten` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_like_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`user_nachricht`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user_nachricht` (
  `user_id` INT(11) NOT NULL,
  `nachrichten_id` INT(11) NOT NULL,
  INDEX `fk_user_nachricht_user_idx` (`user_id` ASC),
  INDEX `fk_user_nachricht_nachrichten1_idx` (`nachrichten_id` ASC),
  CONSTRAINT `fk_user_nachricht_nachrichten1`
    FOREIGN KEY (`nachrichten_id`)
    REFERENCES `mydb`.`nachrichten` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_nachricht_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
