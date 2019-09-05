-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema megapoliscinema
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema megapoliscinema
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `megapoliscinema` DEFAULT CHARACTER SET utf8;
USE `megapoliscinema`;

-- -----------------------------------------------------
-- Table `megapoliscinema`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`customers`
(
    `idcustomer`    INT         NOT NULL AUTO_INCREMENT,
    `namecustomer`  VARCHAR(50) NOT NULL,
    `phonecustomer` VARCHAR(15) NULL,
    PRIMARY KEY (`idcustomer`)
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`genres`
(
    `idgenre`          INT          NOT NULL AUTO_INCREMENT,
    `genrename`        VARCHAR(45)  NOT NULL,
    `genredescription` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`idgenre`)
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`movies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`movies`
(
    `idmovie`          INT          NOT NULL AUTO_INCREMENT,
    `moviename`        VARCHAR(100) NOT NULL,
    `moviedescription` VARCHAR(250) NOT NULL,
    `duration`         INT(3)       NOT NULL,
    `genres_idgenre`   INT          NOT NULL,
    PRIMARY KEY (`idmovie`),
    INDEX `fk_movies_genres_idx` (`genres_idgenre` ASC),
    CONSTRAINT `fk_movies_genres`
        FOREIGN KEY (`genres_idgenre`)
            REFERENCES `megapoliscinema`.`genres` (id)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`sessions`
(
    `idsession`      INT  NOT NULL AUTO_INCREMENT,
    `sessiondate`    DATE NOT NULL,
    `sessiontime`    TIME NOT NULL,
    `movies_idmovie` INT  NOT NULL,
    PRIMARY KEY (`idsession`),
    INDEX `fk_sessions_movies1_idx` (`movies_idmovie` ASC),
    CONSTRAINT `fk_sessions_movies1`
        FOREIGN KEY (`movies_idmovie`)
            REFERENCES `megapoliscinema`.`movies` (`idmovie`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`cashiers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`cashiers`
(
    `idcashier`     INT          NOT NULL AUTO_INCREMENT,
    `cashiername`   VARCHAR(100) NOT NULL,
    `cashierphone`  VARCHAR(15)  NOT NULL,
    `cashieraddres` VARCHAR(80)  NOT NULL,
    PRIMARY KEY (`idcashier`)
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`booking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`booking`
(
    `idbooking`            INT  NOT NULL AUTO_INCREMENT,
    `date`                 DATE NOT NULL,
    `customers_idcustomer` INT  NOT NULL,
    `sessions_idsession`   INT  NOT NULL,
    `cashiers_idcashier`   INT  NOT NULL,
    PRIMARY KEY (`idbooking`),
    INDEX `fk_booking_sessions1_idx` (`sessions_idsession` ASC),
    INDEX `fk_booking_customers1_idx` (`customers_idcustomer` ASC),
    INDEX `fk_booking_cashiers1_idx` (`cashiers_idcashier` ASC),
    CONSTRAINT `fk_booking_sessions1`
        FOREIGN KEY (`sessions_idsession`)
            REFERENCES `megapoliscinema`.`sessions` (`idsession`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
    CONSTRAINT `fk_booking_customers1`
        FOREIGN KEY (`customers_idcustomer`)
            REFERENCES `megapoliscinema`.`customers` (`idcustomer`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
    CONSTRAINT `fk_booking_cashiers1`
        FOREIGN KEY (`cashiers_idcashier`)
            REFERENCES `megapoliscinema`.`cashiers` (`idcashier`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`actors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`actors`
(
    `idactor`   INT          NOT NULL AUTO_INCREMENT,
    `actorname` VARCHAR(100) NOT NULL,
    `actorinfo` VARCHAR(250) NOT NULL,
    PRIMARY KEY (`idactor`)
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `megapoliscinema`.`movies_has_actors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `megapoliscinema`.`movies_has_actors`
(
    `movies_idmovie` INT NOT NULL,
    `actors_idactor` INT NOT NULL,
    PRIMARY KEY (`movies_idmovie`, `actors_idactor`),
    INDEX `fk_movies_has_actors_actors1_idx` (`actors_idactor` ASC),
    INDEX `fk_movies_has_actors_movies1_idx` (`movies_idmovie` ASC),
    CONSTRAINT `fk_movies_has_actors_movies1`
        FOREIGN KEY (`movies_idmovie`)
            REFERENCES `megapoliscinema`.`movies` (`idmovie`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
    CONSTRAINT `fk_movies_has_actors_actors1`
        FOREIGN KEY (`actors_idactor`)
            REFERENCES `megapoliscinema`.`actors` (id)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
)
    ENGINE = InnoDB;


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;
