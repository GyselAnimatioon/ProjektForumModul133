-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `vorname` VARCHAR(80) NOT NULL,
  `nachname` VARCHAR(80) NOT NULL,
  `mail` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`nachrichten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`nachrichten` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titel` VARCHAR(150) NOT NULL,
  `nachricht` MEDIUMTEXT NOT NULL,
  `daumen_hoch` INT NOT NULL DEFAULT 0,
  `daumen_runter` INT NOT NULL DEFAULT 0,
  `erstellt_am` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user_nachricht`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user_nachricht` (
  `user_id` INT NOT NULL,
  `nachrichten_id` INT NOT NULL,
  INDEX `fk_user_nachricht_user_idx` (`user_id` ASC),
  INDEX `fk_user_nachricht_nachrichten1_idx` (`nachrichten_id` ASC),
  CONSTRAINT `fk_user_nachricht_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_nachricht_nachrichten1`
    FOREIGN KEY (`nachrichten_id`)
    REFERENCES `mydb`.`nachrichten` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
