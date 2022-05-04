-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2022 a las 13:44:20
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alm_alumno`
--

CREATE TABLE `alm_alumno` (
  `alm_id` int(11) NOT NULL,
  `alm_codigo` varchar(100) DEFAULT NULL,
  `alm_nombre` varchar(300) DEFAULT NULL,
  `alm_sexo` varchar(100) DEFAULT NULL,
  `alm_id_grd` int(11) DEFAULT NULL,
  `alm_observacion` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alm_alumno`
--

INSERT INTO `alm_alumno` (`alm_id`, `alm_codigo`, `alm_nombre`, `alm_sexo`, `alm_id_grd`, `alm_observacion`) VALUES
(1, 'COD-100001', 'Paul Perez', 'hombre', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry´s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,'),
(2, 'COD-100002', 'Pedro Alvarados', 'hombre', 8, 'Hola Mundo'),
(4, 'COD-100004', 'Ricardo Corleto', 'hombre', 1, ''),
(5, 'COD-100005', 'Alejandra Medrano', 'mujer', 6, 'Hola mundo'),
(7, 'COD-100008', 'Sara Prado', 'mujer', 9, 'Hola mundo'),
(8, 'COD-100007', 'Sandra Guerra', 'mujer', 5, 'Hola mundo'),
(9, 'COD-100009', 'Juan Carlos Hernández', 'hombre', 2, 'Lorem Ipsum es simplemente un texto ficticio de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la codificó para hacer un libro de muestras tip');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grd_grado`
--

CREATE TABLE `grd_grado` (
  `grd_id` int(11) NOT NULL,
  `grd_nombre` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grd_grado`
--

INSERT INTO `grd_grado` (`grd_id`, `grd_nombre`) VALUES
(1, '1º Grado'),
(2, '2º Grado'),
(3, '3º Grado'),
(4, '4º Grado'),
(5, '5º Grado'),
(6, '6º Grado'),
(7, '7º Grado'),
(8, '8º Grado'),
(9, '9º Grado'),
(14, '1º Año de bachillerato'),
(15, '2º Año de bachillerato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mat_materia`
--

CREATE TABLE `mat_materia` (
  `mat_id` int(11) NOT NULL,
  `mat_nombre` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mat_materia`
--

INSERT INTO `mat_materia` (`mat_id`, `mat_nombre`) VALUES
(1, 'Lenguaje'),
(2, 'Matemáticas'),
(3, 'Sociales'),
(4, 'Ciencias y Medio Ambiente'),
(5, 'Educación Física'),
(6, 'Computo'),
(7, 'Educación para la Fe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mxg_materiaxgrado`
--

CREATE TABLE `mxg_materiaxgrado` (
  `mxg_id` int(11) NOT NULL,
  `mxg_id_grd` int(11) DEFAULT NULL,
  `mxg_id_mat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mxg_materiaxgrado`
--

INSERT INTO `mxg_materiaxgrado` (`mxg_id`, `mxg_id_grd`, `mxg_id_mat`) VALUES
(33, 3, 7),
(34, 5, 1),
(35, 5, 4),
(36, 6, 6),
(37, 2, 2),
(38, 4, 3),
(39, 4, 6),
(40, 8, 3),
(41, 8, 4),
(42, 8, 6),
(43, 15, 1),
(44, 15, 3),
(45, 15, 5),
(46, 15, 7),
(50, 14, 1),
(51, 14, 3),
(52, 9, 5),
(53, 9, 6),
(54, 7, 1),
(55, 7, 2),
(56, 7, 4),
(57, 1, 3),
(58, 1, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alm_alumno`
--
ALTER TABLE `alm_alumno`
  ADD PRIMARY KEY (`alm_id`);

--
-- Indices de la tabla `grd_grado`
--
ALTER TABLE `grd_grado`
  ADD PRIMARY KEY (`grd_id`);

--
-- Indices de la tabla `mat_materia`
--
ALTER TABLE `mat_materia`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indices de la tabla `mxg_materiaxgrado`
--
ALTER TABLE `mxg_materiaxgrado`
  ADD PRIMARY KEY (`mxg_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alm_alumno`
--
ALTER TABLE `alm_alumno`
  MODIFY `alm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `grd_grado`
--
ALTER TABLE `grd_grado`
  MODIFY `grd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `mat_materia`
--
ALTER TABLE `mat_materia`
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mxg_materiaxgrado`
--
ALTER TABLE `mxg_materiaxgrado`
  MODIFY `mxg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
