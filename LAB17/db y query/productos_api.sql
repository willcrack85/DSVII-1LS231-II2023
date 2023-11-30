-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: wccorp.duckdns.org
-- Tiempo de generación: 29-11-2022 a las 10:44:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos_api`
--
DROP DATABASE IF EXISTS `productos_api`;
CREATE DATABASE IF NOT EXISTS `productos_api` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `productos_api`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--
-- Creación: 28-11-2022 a las 21:36:06
-- Última actualización: 28-11-2022 a las 22:07:42
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Para registro incremental de registro.',
  `nombre` varchar(256) COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'Para almacenar el nombre de la categoria.',
  `descripcion` text COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'Para almacenar la descripcion de la categoria.',
  `creado` datetime NOT NULL COMMENT 'Para almacenar cuando se crea la categoria.',
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Uso exclusivo para auditoria interna.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `categorias`:
--

--
-- Truncar tablas antes de insertar `categorias`
--

TRUNCATE TABLE `categorias`;
--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `creado`, `modificado`) VALUES
(1, 'Moda', ' Categoría para todo lo relacionado con la moda.', '2019-06-01 00:35:07', '2019-05-30 22:34:33'),
(2, 'Electronicos', 'Gadgets, drones y más.', '2019-06-01 00:35:07', '2019-05-30 22:34:33'),
(3, 'Motores', 'Deportes de motor y más', '2019-06-01 00:35:07', '2019-05-30 22:34:54'),
(4, 'Peliculas', ' Productos de cine.', '0000-00-00 00:00:00', '2019-01-08 18:27:26'),
(5, 'Libros', 'Libros Kindle, audiolibros y más.', '0000-00-00 00:00:00', '2019-01-08 18:27:47'),
(6, 'Deportes', 'Ropa, calzados y articulos deportivos.', '2019-01-09 02:24:24', '2019-01-09 06:24:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
-- Creación: 29-11-2022 a las 01:06:54
-- Última actualización: 29-11-2022 a las 09:43:09
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Para registro incremental de productos.',
  `nombre` varchar(32) COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'Para almacenar el nombre de productos.',
  `descripcion` text COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'Para almacenar la descripcion de productos.',
  `precio` decimal(10,0) NOT NULL COMMENT 'Para almacenar los precios de productos.',
  `categoria_id` int(11) UNSIGNED NOT NULL COMMENT 'Para almacenar el codigo de categorias en  productos.',
  `creado` datetime NOT NULL COMMENT 'Para almacenar cuando se crea la categoria.',
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Uso exclusivo para auditoria interna.',
  PRIMARY KEY (`id`),
  KEY `FOREIGN` (`categoria_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `productos`:
--   `categoria_id`
--       `categorias` -> `id`
--

--
-- Truncar tablas antes de insertar `productos`
--

TRUNCATE TABLE `productos`;
--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`, `creado`, `modificado`) VALUES
(1, 'Samsung Galaxy Note 10 Plus', ' El mejor celular Samsung en este momento y el más completo', '1110', 2, '2019-06-01 01:12:26', '2019-05-31 22:12:26'),
(2, ' Huawei P30 Pro', ' Cámara que ofrece zoom óptico 5X', '719', 2, '2019-06-01 01:12:26', '2019-05-31 22:12:26'),
(3, 'Samsung Galaxy S10', '¿Qué tal este smartphone?', '800', 3, '2019-06-01 01:12:26', '2019-05-31 22:12:26'),
(4, 'Ropa para levantar Pesas', 'De tipo Bench Shirt', '29', 1, '2019-06-01 01:12:26', '2019-05-31 07:12:21'),
(5, 'Laptop Lenovo', 'Mi socio comercial', '399', 2, '2019-06-01 01:13:45', '2019-05-31 07:13:39'),
(6, 'Samsung Galaxy Tab 10.1', 'Buena Tableta', '259', 2, '2019-06-01 01:14:13', '2019-05-31 07:14:08'),
(7, 'Reloj Spalding', 'Mi reloj deportivo', '199', 1, '2019-06-01 01:18:36', '2019-05-31 07:18:31'),
(8, ' Smart Watch de Sony', '¡El reloj inteligente más genial!', '300', 2, '2019-06-06 17:10:01', '2019-06-05 23:09:51'),
(9, 'Huawei Y9s', 'Para fines de prueba.', '350', 2, '2019-06-06 17:11:04', '2019-06-05 23:10:54'),
(10, 'Microsoft Surface Pro 6', 'Excelente tablet-laptop, para tu comodidad', '699', 6, '2019-06-06 17:12:21', '2019-06-05 23:12:11'),
(11, 'Camisa Abercrombie Allen Brook', '¡Camisa roja genial!', '70', 1, '2019-06-06 17:12:59', '2019-06-05 23:12:49'),
(12, 'Camara Canon EOS 6D', 'Excelente camara profesional', '1455', 2, '2019-11-22 19:07:34', '2019-11-22 01:07:34'),
(13, 'Billetera', '¡Absolutamente puedes usar este!', '199', 6, '2019-12-04 21:12:03', '2019-12-04 03:12:03'),
(14, 'Camisa de Amanda Waller', 'Nueva camisa impresionante!', '333', 1, '2019-12-13 00:52:54', '2019-12-12 06:52:54'),
(15, 'Zapatillas Nike para hombre', 'Zapatillas Nike', '129', 3, '2019-12-12 06:47:08', '2019-12-12 10:47:08'),
(16, 'Zapatos Bristol', 'Zapatos impresionantes', '199', 5, '2019-01-08 06:36:37', '2019-01-08 10:36:37'),
(17, 'Reloj Rolex', 'Reloj de lujo.', '25000', 1, '2019-01-11 15:46:02', '2019-01-11 19:46:02'),
(18, 'Microsoft Surface Pro 6', 'Excelente tablet-laptop, para tu comodidad', '699', 2, '2022-11-29 01:20:45', '2022-11-29 00:20:45');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FOREIGN_KEY1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
