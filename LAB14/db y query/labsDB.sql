-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql.wccorp.duckdns.org
-- Tiempo de generación: 29-11-2023 a las 03:26:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

--
-- WillCrack Solution Corp.
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `labsdb`
--
DROP DATABASE IF EXISTS `labsdb`;
CREATE DATABASE IF NOT EXISTS `labsdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `labsdb`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_actualizar_votos`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_actualizar_votos` (IN `param_votos1` VARCHAR(255), IN `param_votos2` VARCHAR(255))   BEGIN
	SET @s = CONCAT("UPDATE votos SET votos1=",param_votos1,", votos2=",param_votos2);
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DROP PROCEDURE IF EXISTS `sp_grabar_usuario`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_grabar_usuario` (IN `param_usr` VARCHAR(255), IN `param_pwd_crypt` VARCHAR(255))   BEGIN
	SET @s = CONCAT("INSERT INTO usuarios (`usuario`, `clave`) VALUES ('",param_usr,"','",param_pwd_crypt,"')");
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_noticias`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_listar_noticias` ()   BEGIN
	SELECT id, titulo, texto, categoria, fecha, imagen FROM noticias;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_noticias_filtro`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_listar_noticias_filtro` (IN `param_campo` VARCHAR(255), IN `param_valor` VARCHAR(255))   BEGIN
	SET @s = CONCAT("SELECT id, titulo, texto, categoria, fecha, imagen FROM noticias WHERE ",param_campo," LIKE CONCAT('%",param_valor,"%')");
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_noticia_paginada`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_listar_noticia_paginada` (IN `param_inicio` VARCHAR(255), IN `param_total` VARCHAR(255))   BEGIN
	SET @S = CONCAT("SELECT titulo, texto, categoria, fecha, imagen FROM noticias LIMIT ",param_inicio,",",param_total);
    PREPARE stmt FROM @S;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_votos`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_listar_votos` ()   BEGIN
	SELECT votos1, votos2 FROM votos;
END$$

DROP PROCEDURE IF EXISTS `sp_validar_usuario`$$
CREATE DEFINER=`willcrackcorp`@`localhost` PROCEDURE `sp_validar_usuario` (IN `param_user` VARCHAR(255), IN `param_pass` VARCHAR(255))   BEGIN
	SET @s = CONCAT("SELECT count(*) FROM usuarios WHERE usuario='",param_user,"' AND clave='",param_pass,"'");
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--
-- Creación: 16-11-2023 a las 03:52:10
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL DEFAULT '',
  `texto` text NOT NULL,
  `categoria` enum('promociones','ofertas','costas') NOT NULL DEFAULT 'promociones',
  `fecha` date NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `noticias`:
--

--
-- Truncar tablas antes de insertar `noticias`
--

TRUNCATE TABLE `noticias`;
--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `categoria`, `fecha`, `imagen`) VALUES
(1, 'Nueva promocion en Ciudad Cristal', '145 viviendas de lujo en urbanizacion ajardinada situadas en un entorno privilegiado', 'promociones', '2019-02-04', NULL),
(2, 'Ultimas viviendas junto al rio', 'Apartamentos de 1 y 2 dormitorios, con fantasticas vistas. Excelentes condiciones de financiacion.', 'ofertas', '2019-02-05', NULL),
(3, 'Apartamentos en el Puerto de San Martin', 'En la Playa del Sol, en primera linea de playa. Pisos reformados y completamente \r\namueblados.', 'costas', '2019-02-06', 'apartamento8.jpg'),
(4, 'Casa reformada en el barrio de la Palmera', 'Dos plantas y atico, 5 habitaciones, patio interior, amplio garaje. Situada en una calle tranquila y a un paso del centro historico.', 'promociones', '2019-02-07', NULL),
(5, 'Promocion en Costa Mar', 'Con vistas al campo de golf, magnificas calidades, entorno ajardinado con piscina y servicio de\r\nvigilancia.', 'costas', '2019-02-09', 'apartamento9.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 28-11-2023 a las 01:11:14
-- Última actualización: 29-11-2023 a las 02:10:25
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Para incrementar el numero de registros de la cita.',
  `usuario` varchar(20) NOT NULL DEFAULT '' COMMENT 'Para almacenar el nombre del usuario.',
  `clave` varchar(20) NOT NULL DEFAULT '' COMMENT 'Para almacenar la contrasena de usuario.',
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Uso exclusivo para auditoria interna.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `fecha_reg`) VALUES
(1, 'testuser', 'teXB5LK3JWG6g', '2023-11-28 01:15:49'),
(2, 'wmiranda', 'willcrack', '2023-11-29 02:10:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--
-- Creación: 16-11-2023 a las 03:52:11
--

DROP TABLE IF EXISTS `votos`;
CREATE TABLE IF NOT EXISTS `votos` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `votos1` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `votos2` int(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `votos`:
--

--
-- Truncar tablas antes de insertar `votos`
--

TRUNCATE TABLE `votos`;
--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`id`, `votos1`, `votos2`) VALUES
(1, 42, 58);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
