/*
Navicat MySQL Data Transfer

Source Server         : localserver
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : parnet

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-29 18:40:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(30) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `psdw` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Horacio', '753951');
INSERT INTO `admin` VALUES ('2', '1', '1');

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id_area` int(30) NOT NULL,
  `nombre_area` varchar(100) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES ('1', 'Certificaciones');
INSERT INTO `areas` VALUES ('2', 'Telecomunicaciones');
INSERT INTO `areas` VALUES ('3', 'Redes Eléctricas');
INSERT INTO `areas` VALUES ('4', 'Circuito Cerrado TV');
INSERT INTO `areas` VALUES ('5', 'Corriente Regulada');
INSERT INTO `areas` VALUES ('6', 'Data Centers');
INSERT INTO `areas` VALUES ('7', 'Fibra Óptica');
INSERT INTO `areas` VALUES ('8', 'Cable Estructurado');
INSERT INTO `areas` VALUES ('9', 'Pólizas');
INSERT INTO `areas` VALUES ('10', 'Outsourcing');

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticia` int(30) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` varchar(50) NOT NULL,
  `descripcion_noticia` varchar(255) NOT NULL,
  `imagen_noticia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('1', 'MS Ofiice', 'Algo importante de Bill Gates', '/parnett/img/noticias/noticia 5.jpeg');
INSERT INTO `noticias` VALUES ('6', 'Donald Trump', 'Redes Sociales', '/parnett/img/noticias/noticia 1.jpeg');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(255) DEFAULT NULL,
  `descripcion_producto` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `costo` double DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `area_id` (`area_id`),
  CONSTRAINT `area_id` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', 'Regulador de Corriente', 'Regulador de Corriente v11', '/parnett/img/productos/ups.png', '12', '12', '1');
INSERT INTO `productos` VALUES ('2', 'Camara fija', 'Solo graba un lado por que es fija 4K UHD 360°', '/parnett/img/productos/camara_fija.png', '5000', '20', '2');
INSERT INTO `productos` VALUES ('16', 'DVR', 'Le caben 8 camaras', '/parnett/img/productos/dvr.png', '8000', '5', '4');
INSERT INTO `productos` VALUES ('18', 'Camara', 'Que graba a 1080 4.0 px por pulgada', '/parnett/img/productos/domoip.png', '2500', '15', '4');

-- ----------------------------
-- Table structure for servicios
-- ----------------------------
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id_servicio` int(30) NOT NULL AUTO_INCREMENT,
  `area_id` int(30) NOT NULL,
  `descripcion_servicio` varchar(255) NOT NULL,
  `tel_servicio` varchar(10) NOT NULL,
  `email_servicio` varchar(50) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `id_area` (`area_id`),
  CONSTRAINT `id_area` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of servicios
-- ----------------------------
INSERT INTO `servicios` VALUES ('1', '7', 'Prueba 1', '8441205952', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('2', '9', 'Preqw', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('3', '2', 'qweqweqw', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('4', '10', 'qweqeqw', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('5', '1', 'qweqwe', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('6', '7', 'qweqweqw', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('7', '8', 'ewq', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('8', '10', 'wqe', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('9', '1', 'eqe', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('10', '4', 'Cotizacion', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('11', '2', 'Se apaga la camara', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('12', '4', 'Camara', '8441198017', 'jose097543@gmail.com');
INSERT INTO `servicios` VALUES ('13', '9', 'Cotizacion', '8421095952', 'jose097543@gmail.com');

-- ----------------------------
-- Table structure for sugerencias
-- ----------------------------
DROP TABLE IF EXISTS `sugerencias`;
CREATE TABLE `sugerencias` (
  `id_sugerencia` int(30) NOT NULL AUTO_INCREMENT,
  `titulo_sugerencia` varchar(50) NOT NULL,
  `remitente_sugerencia` varchar(50) NOT NULL,
  `email_remitente_sugerencia` varchar(50) NOT NULL,
  `tel_remitente_sugerencia` bigint(50) NOT NULL,
  `asunto_sugerencia` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sugerencia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sugerencias
-- ----------------------------
INSERT INTO `sugerencias` VALUES ('1', 'Mas RGB', 'qwe', 'jose097543@gmail.com', '8441198017', 'FPS');
INSERT INTO `sugerencias` VALUES ('2', 'Hola', 'Ya jala', 'jose097543@gmail.com', '8441198017', 'Holaaaaa');
INSERT INTO `sugerencias` VALUES ('3', 'Mejoras de equipo', 'Horacio', 'jose097543@gmail.com', '8441198017', 'Debe tener mas RAM para que sea mas rapido');
INSERT INTO `sugerencias` VALUES ('4', 'Servicios de Red', 'David', 'jose097543@gmail.com', '8441198017', 'Su informacion de redes no esta cool');
