-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 02:03:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacion_mad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE `afiliados` (
  `cc_afiliado` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `apoyo_familiar` varchar(500) NOT NULL,
  `nivel_independencia` varchar(500) NOT NULL,
  `nivel_sisben` varchar(15) NOT NULL,
  `EPS` varchar(50) NOT NULL,
  `tipo_afiliacion` varchar(50) NOT NULL,
  `apoyo` varchar(500) NOT NULL,
  `discapacidad` varchar(10) NOT NULL,
  `patologias` varchar(500) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `correo_electrónico` varchar(50) NOT NULL,
  `telefono_fijo` bigint(20) NOT NULL,
  `Telefono_movil` bigint(20) NOT NULL,
  `cc_donante` bigint(20) DEFAULT NULL,
  `cc_voluntario` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`cc_afiliado`, `nombre`, `fecha`, `apoyo_familiar`, `nivel_independencia`, `nivel_sisben`, `EPS`, `tipo_afiliacion`, `apoyo`, `discapacidad`, `patologias`, `Direccion`, `correo_electrónico`, `telefono_fijo`, `Telefono_movil`, `cc_donante`, `cc_voluntario`) VALUES
(51523215, 'Laura Vélez mesa', '2023-10-23', 'Sobrina', 'Camina', '3', 'Sura', 'Beneficiaria', 'Bastón', 'Ninguna', 'Demencia', 'Barrio Sta Rita', 'lauravelez1911@gmail.com', 3578456, 3245968516, NULL, NULL),
(54651156, 'Weymar', '2023-10-24', 'Sobrino', 'no camina', '2', '', 'Beneficiario', 'Bastón', 'Ninguna', 'Alzheimer', 'barrio bosques', 'weymar@gmail.com', 3113027462, 31256987452, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes`
--

CREATE TABLE `donantes` (
  `cc_donante` bigint(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `monto_donacion` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donantes`
--

INSERT INTO `donantes` (`cc_donante`, `nombre`, `direccion`, `telefono`, `monto_donacion`) VALUES
(2451116, 'Laura Vélez', 'puerto espejo', 3118455243, '900000.00'),
(84566161, 'Weymar', 'puerto espejo', 3228455243, '99999999.99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE `voluntarios` (
  `cc_voluntario` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `voluntarios`
--

INSERT INTO `voluntarios` (`cc_voluntario`, `nombre`, `direccion`, `telefono`, `correo`) VALUES
(54106840, 'jose alfredo gimenez k', 'sta rita mz 7 casa 12', 3203632167, 'lo22622@gmail.com'),
(1094932707, 'Weymar', 'asjfchbc f', 5745633, 'josealfredo1922@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD PRIMARY KEY (`cc_afiliado`),
  ADD KEY `cc_donante` (`cc_donante`),
  ADD KEY `cc_voluntario` (`cc_voluntario`);

--
-- Indices de la tabla `donantes`
--
ALTER TABLE `donantes`
  ADD PRIMARY KEY (`cc_donante`);

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`cc_voluntario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD CONSTRAINT `afiliados_ibfk_1` FOREIGN KEY (`cc_donante`) REFERENCES `donantes` (`cc_donante`),
  ADD CONSTRAINT `afiliados_ibfk_2` FOREIGN KEY (`cc_voluntario`) REFERENCES `voluntarios` (`cc_voluntario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
