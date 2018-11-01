-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema CartaWeb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `CartaWeb` ;

-- -----------------------------------------------------
-- Schema CartaWeb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CartaWeb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `CartaWeb` ;

-- -----------------------------------------------------
-- Table `CartaWeb`.`TipoProductos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`TipoProductos` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`TipoProductos` (
  `idTipoProducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoProducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CartaWeb`.`CatProductos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`CatProductos` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`CatProductos` (
  `idCatProducto` INT NOT NULL AUTO_INCREMENT,
  `nombreCategoria` VARCHAR(100) NOT NULL,
  `TipoProductos_idTipoProducto` INT NOT NULL,
  PRIMARY KEY (`idCatProducto`),
  INDEX `fk_CatProductos_TipoProductos1_idx` (`TipoProductos_idTipoProducto` ASC),
  CONSTRAINT `fk_CatProductos_TipoProductos1`
    FOREIGN KEY (`TipoProductos_idTipoProducto`)
    REFERENCES `CartaWeb`.`TipoProductos` (`idTipoProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CartaWeb`.`Productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`Productos` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`Productos` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `descripcion` TEXT(60) NOT NULL,
  `precio` DOUBLE NOT NULL,
  `CatProductos_idCatProducto` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_Productos_CatProductos1_idx` (`CatProductos_idCatProducto` ASC),
  CONSTRAINT `fk_Productos_CatProductos1`
    FOREIGN KEY (`CatProductos_idCatProducto`)
    REFERENCES `CartaWeb`.`CatProductos` (`idCatProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CartaWeb`.`Factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`Factura` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`Factura` (
  `idFactura` INT NOT NULL AUTO_INCREMENT,
  `hora` VARCHAR(10) NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idFactura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CartaWeb`.`Clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`Clientes` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`Clientes` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nombreCliente` VARCHAR(100) NOT NULL,
  `apellidoCliente` VARCHAR(100) NOT NULL,
  `cedulaCliente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CartaWeb`.`Detalle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`Detalle` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`Detalle` (
  `idDetalle` INT NOT NULL AUTO_INCREMENT,
  `cantidad` VARCHAR(45) NOT NULL,
  `Productos_idProducto` INT NOT NULL,
  `Factura_idFactura` INT NOT NULL,
  `Clientes_idCliente` INT NOT NULL,
  PRIMARY KEY (`idDetalle`),
  INDEX `fk_Detalle_Productos1_idx` (`Productos_idProducto` ASC),
  INDEX `fk_Detalle_Factura1_idx` (`Factura_idFactura` ASC),
  INDEX `fk_Detalle_Clientes1_idx` (`Clientes_idCliente` ASC),
  CONSTRAINT `fk_Detalle_Productos1`
    FOREIGN KEY (`Productos_idProducto`)
    REFERENCES `CartaWeb`.`Productos` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Detalle_Factura1`
    FOREIGN KEY (`Factura_idFactura`)
    REFERENCES `CartaWeb`.`Factura` (`idFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Detalle_Clientes1`
    FOREIGN KEY (`Clientes_idCliente`)
    REFERENCES `CartaWeb`.`Clientes` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CartaWeb`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CartaWeb`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `CartaWeb`.`Usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombreusuario` VARCHAR(100) NOT NULL,
  `apellidoUsuario` VARCHAR(100) NOT NULL,
  `user` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
