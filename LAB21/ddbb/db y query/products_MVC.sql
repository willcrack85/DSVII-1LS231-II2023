-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql.wccorp.duckdns.org
-- Tiempo de generación: 30-11-2023 a las 09:13:06
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
-- Base de datos: `prodsmvc`
--
DROP DATABASE IF EXISTS `prodsmvc`;
CREATE DATABASE IF NOT EXISTS `prodsmvc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `prodsmvc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--
-- Creación: 30-11-2023 a las 07:59:09
-- Última actualización: 30-11-2023 a las 07:59:42
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `cod` int(11) UNSIGNED NOT NULL COMMENT 'Para registro de codigos en productos.',
  `short_name` varchar(20) NOT NULL COMMENT 'Para almacenar el nombre del producto.',
  `pvp` decimal(5,2) NOT NULL COMMENT 'Para almacenar el valor del producto.',
  `nombre` varchar(100) NOT NULL COMMENT 'Para almacenar la descripcion del producto.',
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Uso exclusivo para auditoria interna.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `products`:
--

--
-- Truncar tablas antes de insertar `products`
--

TRUNCATE TABLE `products`;
--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`cod`, `short_name`, `pvp`, `nombre`, `fecha_reg`) VALUES
(1, 'Monitor', 400.00, 'Dell 21 full HD', '2023-11-30 07:59:42'),
(2, 'Teclado', 9.99, 'Teclado inalámbrico Logitech', '2023-11-30 07:59:42'),
(3, 'iPad Pro', 900.00, 'Apple iPad Pro 9', '2023-11-30 07:59:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
