-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 00:42:52
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ubica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id_archivo` int(11) NOT NULL,
  `tipo_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `extension` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion_ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecreg` datetime NOT NULL,
  `fecmod` datetime NOT NULL,
  `userreg` int(11) NOT NULL,
  `usermod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de Archivos/Portada';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_inscrito`
--

CREATE TABLE `datos_inscrito` (
  `id_dato` int(11) NOT NULL,
  `id_inscrito` int(11) NOT NULL,
  `nombre_persona_negocio` text COLLATE utf8_spanish_ci NOT NULL,
  `id_archivo` int(11) NOT NULL,
  `descripcion_negocio` longtext COLLATE utf8_spanish_ci NOT NULL,
  `lista_servicios` longtext COLLATE utf8_spanish_ci NOT NULL,
  `ids_rubro` text COLLATE utf8_spanish_ci NOT NULL,
  `portafolio_prod_serv` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono_negocio` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion_detallada` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion_maps` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_documento` text COLLATE utf8_spanish_ci NOT NULL,
  `num_documento` text COLLATE utf8_spanish_ci NOT NULL,
  `fecreg` datetime NOT NULL,
  `fecmod` datetime NOT NULL,
  `userreg` text COLLATE utf8_spanish_ci NOT NULL,
  `usermod` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE `inscritos` (
  `id_inscrito` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `fecreg` datetime NOT NULL,
  `fecmod` datetime NOT NULL,
  `userreg` text COLLATE utf8_spanish_ci NOT NULL,
  `usermod` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inscritos`
--

INSERT INTO `inscritos` (`id_inscrito`, `nombre`, `apellidos`, `telefono`, `correo`, `password`, `fecreg`, `fecmod`, `userreg`, `usermod`) VALUES
(1, 'Michael', 'Balladares', '654654654', 'admin@gmail.com', '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 'Michael', 'Balladares', '654654654654', 'admin@gmail.com', '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 'Nombre', 'Apellido', '1234567489', 'admin@ubica.pe', 'admin123', '2020-11-27 16:40:16', '0000-00-00 00:00:00', '', ''),
(4, 'Prueba Nombre', 'Apellido Prueba', '97979797', 'prueba@prueba.com', 'pruebacontra123', '2020-11-27 17:52:21', '0000-00-00 00:00:00', '', ''),
(5, 'prueba 2', 'apellido2', '654654654', 'admin@ubica.pe', 'ubica123', '2020-11-27 17:53:04', '0000-00-00 00:00:00', '', ''),
(6, 'Juan', 'Melendez', '887989879', 'juan@gmail.com', '123456', '2020-11-27 18:11:24', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubro`
--

CREATE TABLE `rubro` (
  `id_rubro` int(11) NOT NULL,
  `nombre_rubro` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_doc` int(11) NOT NULL,
  `nombre_doc` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `id_inscrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `datos_inscrito`
--
ALTER TABLE `datos_inscrito`
  ADD PRIMARY KEY (`id_dato`);

--
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`id_inscrito`);

--
-- Indices de la tabla `rubro`
--
ALTER TABLE `rubro`
  ADD PRIMARY KEY (`id_rubro`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_inscrito`
--
ALTER TABLE `datos_inscrito`
  MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  MODIFY `id_inscrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rubro`
--
ALTER TABLE `rubro`
  MODIFY `id_rubro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
