SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `flashcards` ;
CREATE SCHEMA IF NOT EXISTS `flashcards` ;
USE `flashcards` ;

-- -----------------------------------------------------
-- Table `profile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `profile` ;

CREATE  TABLE IF NOT EXISTS `profile` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `email` VARCHAR(80) NOT NULL ,
  `date_of_birth` DATE NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `flashcard`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flashcard` ;

CREATE  TABLE IF NOT EXISTS `flashcard` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(50) NOT NULL ,
  `image` TEXT NOT NULL ,
  `description` TEXT NULL ,
  `created` DATETIME NOT NULL ,
  `last_updated` DATETIME NOT NULL ,
  `featured` TINYINT NOT NULL DEFAULT 0 COMMENT '0: Default and 1: Editor Choise' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `question`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `question` ;

CREATE  TABLE IF NOT EXISTS `question` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `text` TEXT NOT NULL ,
  `flashcard_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_question_flashcard1`
    FOREIGN KEY (`flashcard_id` )
    REFERENCES `flashcard` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_question_flashcard1` ON `question` (`flashcard_id` ASC) ;


-- -----------------------------------------------------
-- Table `state`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `state` ;

CREATE  TABLE IF NOT EXISTS `state` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `question_id` INT NOT NULL ,
  `profile_id` INT NOT NULL ,
  `weight` INT NOT NULL DEFAULT 0 ,
  `visible` TINYINT NOT NULL DEFAULT 1 COMMENT '0 or 1' ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_have_profile`
    FOREIGN KEY (`profile_id` )
    REFERENCES `profile` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_have_question1`
    FOREIGN KEY (`question_id` )
    REFERENCES `question` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_have_profile` ON `state` (`profile_id` ASC) ;

CREATE INDEX `fk_have_question1` ON `state` (`question_id` ASC) ;


-- -----------------------------------------------------
-- Table `request_board`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `request_board` ;

CREATE  TABLE IF NOT EXISTS `request_board` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `email` VARCHAR(80) NOT NULL ,
  `created` DATETIME NOT NULL ,
  `title` VARCHAR(50) NOT NULL ,
  `description` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `authentication`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `authentication` ;

CREATE  TABLE IF NOT EXISTS `authentication` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `profile_id` INT NOT NULL ,
  `member_id` VARCHAR(21) NOT NULL ,
  `member_password` VARCHAR(45) NOT NULL ,
  `authorization` ENUM('member', 'root') NOT NULL DEFAULT 'member' ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_authentication_profile1`
    FOREIGN KEY (`profile_id` )
    REFERENCES `profile` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_authentication_profile1` ON `authentication` (`profile_id` ASC) ;


-- -----------------------------------------------------
-- Table `answer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `answer` ;

CREATE  TABLE IF NOT EXISTS `answer` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `choice` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `multiple`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `multiple` ;

CREATE  TABLE IF NOT EXISTS `multiple` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `question_id` INT NOT NULL ,
  `answer_id` INT NOT NULL ,
  `is_correct` TINYINT NOT NULL DEFAULT 0 COMMENT '0: False or 1: Correct' ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_multiple_question1`
    FOREIGN KEY (`question_id` )
    REFERENCES `question` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_multiple_answer1`
    FOREIGN KEY (`answer_id` )
    REFERENCES `answer` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_multiple_question1` ON `multiple` (`question_id` ASC) ;

CREATE INDEX `fk_multiple_answer1` ON `multiple` (`answer_id` ASC) ;


-- -----------------------------------------------------
-- Table `owned`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `owned` ;

CREATE  TABLE IF NOT EXISTS `owned` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `profile_id` INT NOT NULL ,
  `flashcard_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_owned_profile1`
    FOREIGN KEY (`profile_id` )
    REFERENCES `profile` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_owned_flashcard1`
    FOREIGN KEY (`flashcard_id` )
    REFERENCES `flashcard` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_owned_profile1` ON `owned` (`profile_id` ASC) ;

CREATE INDEX `fk_owned_flashcard1` ON `owned` (`flashcard_id` ASC) ;


-- -----------------------------------------------------
-- Table `collected`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `collected` ;

CREATE  TABLE IF NOT EXISTS `collected` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `profile_id` INT NOT NULL ,
  `flashcard_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_collected_profile1`
    FOREIGN KEY (`profile_id` )
    REFERENCES `profile` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_collected_flashcard1`
    FOREIGN KEY (`flashcard_id` )
    REFERENCES `flashcard` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_collected_profile1` ON `collected` (`profile_id` ASC) ;

CREATE INDEX `fk_collected_flashcard1` ON `collected` (`flashcard_id` ASC) ;


-- -----------------------------------------------------
-- Table `used`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `used` ;

CREATE  TABLE IF NOT EXISTS `used` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `profile_id` INT NOT NULL ,
  `flashcard_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_used_profile1`
    FOREIGN KEY (`profile_id` )
    REFERENCES `profile` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_used_flashcard1`
    FOREIGN KEY (`flashcard_id` )
    REFERENCES `flashcard` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_used_profile1` ON `used` (`profile_id` ASC) ;

CREATE INDEX `fk_used_flashcard1` ON `used` (`flashcard_id` ASC) ;


-- -----------------------------------------------------
-- Table `report`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `report` ;

CREATE  TABLE IF NOT EXISTS `report` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `profile_id` INT NOT NULL COMMENT 'Informer' ,
  `flashcard_id` INT NOT NULL COMMENT 'Object' ,
  `type` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_report_profile1`
    FOREIGN KEY (`profile_id` )
    REFERENCES `profile` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_flashcard1`
    FOREIGN KEY (`flashcard_id` )
    REFERENCES `flashcard` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_report_profile1` ON `report` (`profile_id` ASC) ;

CREATE INDEX `fk_report_flashcard1` ON `report` (`flashcard_id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
