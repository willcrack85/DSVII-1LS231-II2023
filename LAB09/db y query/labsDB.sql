-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql.wccorp.duckdns.org
-- Tiempo de generación: 15-11-2023 a las 21:49:29
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

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--
-- Creación: 11-10-2023 a las 07:37:15
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL DEFAULT '',
  `texto` text NOT NULL,
  `categoria` enum('promociones','ofertas','costas') NOT NULL DEFAULT 'promociones',
  `fecha` date NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;