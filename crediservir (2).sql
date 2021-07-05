-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2020 a las 23:42:45
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crediservir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `acce_id` bigint(20) UNSIGNED NOT NULL,
  `acce_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `acce_clave` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acce_perfil` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `funci_doc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`acce_id`, `acce_usuario`, `acce_clave`, `acce_perfil`, `funci_doc`) VALUES
(1, 'yeinyropero98', 'yeinyropero98', 'administrador', 987);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `articulo_cod` varchar(15) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `articulo_des` varchar(90) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `articulo_val` float NOT NULL,
  `articulo_fec` date NOT NULL,
  `articulo_est` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `funci_doc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`articulo_cod`, `articulo_des`, `articulo_val`, `articulo_fec`, `articulo_est`, `funci_doc`) VALUES
('64', 'alicatedos', 456, '2019-10-22', 'inactivo', 987),
('78', 'hk', 78, '2019-10-22', 'inactivo', 987),
('7987', 'alicate45', 56789, '2019-10-22', 'inactivo', 987),
('87', 'alicate98', 5000, '2019-10-22', 'inactivo', 987);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `funci_doc` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `funci_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `funci_perfil` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`funci_doc`, `funci_nombre`, `funci_perfil`) VALUES
('987', 'andres', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`acce_id`),
  ADD UNIQUE KEY `acce_id` (`acce_id`),
  ADD KEY `funci_doc` (`funci_doc`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`articulo_cod`(4)),
  ADD KEY `funci_doc` (`funci_doc`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`funci_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `acce_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
