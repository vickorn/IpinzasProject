/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : final

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-12-15 03:04:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cargo
-- ----------------------------
DROP TABLE IF EXISTS `cargo`;
CREATE TABLE `cargo` (
`ID_Cargo`  int(255) NOT NULL AUTO_INCREMENT ,
`descCargo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`ID_Cargo`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of cargo
-- ----------------------------
BEGIN;
INSERT INTO `cargo` VALUES ('1', 'Jefe Mantención'), ('2', 'Prevencionista'), ('3', 'Tecnico');
COMMIT;

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
`ID`  int(11) NOT NULL AUTO_INCREMENT ,
`titulo`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`noticia`  longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of noticia
-- ----------------------------
BEGIN;
INSERT INTO `noticia` VALUES ('1', 'Ipinza se retira de las elecciones', 'Don Clown Ipinza decide retirarse de las elecciones para tecnico debido a que recientes investigaciones han develado la falsificacion de sus titulos universitarios.'), ('2', 'Nicolas lidera las votaciones para jefe de mantencion', 'Don Nicolas, quien cuenta momentaneamente con la mayorÃ­a de votos, estaria planificando su posible mandato a traves de una tirania totalitaria ante sus subordinados.');
COMMIT;

-- ----------------------------
-- Table structure for postular
-- ----------------------------
DROP TABLE IF EXISTS `postular`;
CREATE TABLE `postular` (
`ID_Usuario`  int(255) NOT NULL ,
`ID_Cargo`  int(255) NOT NULL ,
`Cantidad_Votos`  int(255) NULL DEFAULT NULL ,
PRIMARY KEY (`ID_Usuario`, `ID_Cargo`),
FOREIGN KEY (`ID_Cargo`) REFERENCES `cargo` (`ID_Cargo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `fk_usuario` (`ID_Usuario`) USING BTREE ,
INDEX `fk_cargo` (`ID_Cargo`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of postular
-- ----------------------------
BEGIN;
INSERT INTO `postular` VALUES ('2', '1', '1'), ('4', '1', '3'), ('4', '2', '1'), ('4', '3', '1');
COMMIT;

-- ----------------------------
-- Table structure for tipousuario
-- ----------------------------
DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE `tipousuario` (
`ID_Tipo`  int(255) NOT NULL AUTO_INCREMENT ,
`DescTipo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`ID_Tipo`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of tipousuario
-- ----------------------------
BEGIN;
INSERT INTO `tipousuario` VALUES ('1', 'Administrador'), ('2', 'Votante'), ('3', 'Nuevo');
COMMIT;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
`ID_Usuario`  int(255) NOT NULL AUTO_INCREMENT ,
`Nombre`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`RUT`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Edad`  int(3) NULL DEFAULT NULL ,
`Direccion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Ciudad`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Fono`  int(7) NULL DEFAULT NULL ,
`Movil`  int(9) NULL DEFAULT NULL ,
`EstadoCivil`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`EscuelaVotacion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`TipoUsuario`  int(255) NULL DEFAULT NULL ,
`Username`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Sexo`  varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`ID_Usuario`),
FOREIGN KEY (`TipoUsuario`) REFERENCES `tipousuario` (`ID_Tipo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `ID_Tipo` (`TipoUsuario`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=11

;

-- ----------------------------
-- Records of usuario
-- ----------------------------
BEGIN;
INSERT INTO `usuario` VALUES ('1', 'Ivan', '18310903-0', '22', 'Mañihuales #9551', 'Antofagasta', '272154', '81505502', 'Soltero', 'Santa Emilia', '1', 'admin', 'admin', 'Masculino'), ('2', 'Juan', '17452168-5', '23', 'Los Ipinzas #3114', 'Antofagasta', '147859', '84714526', 'Soltero', 'Santa Emilia', '2', 'juan', 'juan', 'Masculino'), ('3', 'Pedro', '17624593-5', '24', 'Jardines de Ipinza II #31', 'Antofagasta', '112233', '84455667', 'Soltero', 'Ipinzianos', '3', 'pedro', 'pedro', 'Masculino'), ('4', 'Nicolas', '19145506-5', '21', 'Jardines de Ipinza IV', 'Antofagasta', '225544', '87755663', 'Soltero', 'Ipinzianos', '2', 'nico', 'nico', 'Masculino'), ('5', 'Bianca', '11223344-5', '21', 'Mañihuales #9551', 'Antofagasta', '272154', '81505502', 'Soltero(a)', 'La pintana', '2', 'bianca', 'bianca', 'Femenino');
COMMIT;

-- ----------------------------
-- Table structure for voto
-- ----------------------------
DROP TABLE IF EXISTS `voto`;
CREATE TABLE `voto` (
`ID_Usuario`  int(255) NOT NULL ,
`ID_Cargo`  int(255) NOT NULL ,
`ID_Postulante`  int(255) NOT NULL ,
PRIMARY KEY (`ID_Usuario`, `ID_Cargo`, `ID_Postulante`),
FOREIGN KEY (`ID_Cargo`) REFERENCES `postular` (`ID_Cargo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`ID_Postulante`) REFERENCES `postular` (`ID_Usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `fk_postulante` (`ID_Postulante`) USING BTREE ,
INDEX `fk_cargoVoto` (`ID_Cargo`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of voto
-- ----------------------------
BEGIN;
INSERT INTO `voto` VALUES ('4', '1', '2'), ('2', '1', '4'), ('4', '3', '4'), ('5', '1', '4');
COMMIT;

-- ----------------------------
-- Auto increment value for cargo
-- ----------------------------
ALTER TABLE `cargo` AUTO_INCREMENT=4;

-- ----------------------------
-- Auto increment value for noticia
-- ----------------------------
ALTER TABLE `noticia` AUTO_INCREMENT=3;

-- ----------------------------
-- Auto increment value for tipousuario
-- ----------------------------
ALTER TABLE `tipousuario` AUTO_INCREMENT=4;

-- ----------------------------
-- Auto increment value for usuario
-- ----------------------------
ALTER TABLE `usuario` AUTO_INCREMENT=11;
