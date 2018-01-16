-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema siac
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `siac` ;

-- -----------------------------------------------------
-- Schema siac
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `siac` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `siac` ;

-- -----------------------------------------------------
-- Table `bgdepartamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgdepartamentos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgdepartamentos` (
  `iddepartamento` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Numero` INT NULL COMMENT '',
  `CeCo` VARCHAR(8) NULL COMMENT '',
  `Nombre` VARCHAR(65) NOT NULL COMMENT '',
  `idestado` INT NOT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`iddepartamento`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgempresas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgempresas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgempresas` (
  `idempresa` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(65) NOT NULL COMMENT '',
  `idestado` INT NOT NULL DEFAULT 0 COMMENT '',
  PRIMARY KEY (`idempresa`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgempleados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgempleados` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgempleados` (
  `idEmpleado` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idempresa` INT NOT NULL COMMENT '',
  `TipoEmpleado` INT NULL COMMENT '',
  `iddepartamento` INT NOT NULL COMMENT '',
  `NombreEmpleado` VARCHAR(45) NULL COMMENT '',
  `Apaterno` VARCHAR(45) NULL COMMENT '',
  `Amaterno` VARCHAR(45) NULL COMMENT '',
  `Correo` VARCHAR(125) NULL COMMENT '',
  `Telefono` VARCHAR(15) NULL COMMENT '',
  `Telefono2` VARCHAR(15) NULL COMMENT '',
  `Celular` VARCHAR(15) NULL COMMENT '',
  `Ext` VARCHAR(7) NULL COMMENT '',
  `idestado` INT NULL COMMENT '',
  `idusuario_alta` INT NULL COMMENT '',
  `idusuario_um` INT NULL COMMENT '',
  `fecha_alta` DATETIME NULL COMMENT '',
  `fecha_um` DATETIME NULL COMMENT '',
  PRIMARY KEY (`idEmpleado`, `idempresa`, `iddepartamento`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgusuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgusuarios` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgusuarios` (
  `idusuario` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idEmpleado` INT NOT NULL COMMENT '',
  `iddepartamento` INT NOT NULL COMMENT '',
  `NickName` VARCHAR(65) NOT NULL COMMENT '',
  `UsuarioLogin` VARCHAR(45) NOT NULL COMMENT '',
  `Clave` VARCHAR(255) NOT NULL COMMENT '',
  `ClaveTemp` VARCHAR(255) NOT NULL COMMENT '',
  `idestado` INT NOT NULL DEFAULT 0 COMMENT '',
  `idperfil` INT NULL COMMENT '',
  PRIMARY KEY (`idusuario`, `idEmpleado`, `iddepartamento`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgclientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgclientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgclientes` (
  `idcliente` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(65) NULL COMMENT '',
  `Apaterno` VARCHAR(65) NULL COMMENT '',
  `Amaterno` VARCHAR(65) NULL COMMENT '',
  `Domicilio` VARCHAR(185) NULL COMMENT '',
  `Telefono1` VARCHAR(18) NULL COMMENT '',
  `Telefono2` VARCHAR(18) NULL COMMENT '',
  `Celular1` VARCHAR(18) NULL COMMENT '',
  `Celular2` VARCHAR(18) NULL COMMENT '',
  `TelRecados1` VARCHAR(18) NULL COMMENT '',
  `TelRecads2` VARCHAR(18) NULL COMMENT '',
  PRIMARY KEY (`idcliente`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgEmpresaClientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgEmpresaClientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgEmpresaClientes` (
  `idClienteEmpresa` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `NombreEmpresa` VARCHAR(85) NOT NULL COMMENT '',
  `idestado` INT NULL COMMENT '',
  PRIMARY KEY (`idClienteEmpresa`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgcuentas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgcuentas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgcuentas` (
  `idcuenta` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idempresa` INT NOT NULL COMMENT '',
  `idClienteEmpresa` INT NOT NULL COMMENT '',
  `idcliente` INT NOT NULL COMMENT '',
  `Descripcion` VARCHAR(45) NULL COMMENT '',
  `idestado` INT NOT NULL COMMENT '',
  `Supervisor` INT NOT NULL COMMENT '',
  `AgenteAsignado` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idcuenta`, `idcliente`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgseguimiento_cuenta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgseguimiento_cuenta` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgseguimiento_cuenta` (
  `idseguimiento` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idcuenta` INT NOT NULL COMMENT '',
  `TipoSeguimiento` INT NULL COMMENT '',
  `MedioSeguimiento` INT NULL COMMENT '',
  `Comentario` TEXT NULL COMMENT '',
  PRIMARY KEY (`idseguimiento`, `idcuenta`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `bgadjuntos_cuentas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bgadjuntos_cuentas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bgadjuntos_cuentas` (
  `idAdjunto` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idcuenta` INT NOT NULL COMMENT '',
  `idcliente` INT NOT NULL COMMENT '',
  `TipoAdjunto` INT NULL COMMENT '',
  `RutaAdjunto` VARCHAR(50) NULL COMMENT '',
  `NombreAdjunto` VARCHAR(125) NULL COMMENT '',
  `Descripcion` TEXT NULL COMMENT '',
  `MimeAdjunto` VARCHAR(25) NULL COMMENT '',
  `Extension` VARCHAR(5) NULL COMMENT '',
  PRIMARY KEY (`idAdjunto`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
