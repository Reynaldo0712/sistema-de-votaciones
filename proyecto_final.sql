-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 06:04:44
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `partido_pertenece` int(11) DEFAULT NULL,
  `puesto_aspira` int(11) DEFAULT NULL,
  `foto_perfil` varchar(6000) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `nombre`, `apellido`, `partido_pertenece`, `puesto_aspira`, `foto_perfil`, `estado`, `votos`) VALUES
(1, 'luis', 'Abinarder', 2, 1, '1.jpeg', 1, 22),
(2, 'eduardo', 'estrella', 1, 2, '2.jpeg', 1, 13),
(3, 'Faridee', 'Rafull', 2, 3, '3.jpeg', 1, 27),
(4, 'Abel', 'Martinez', 2, 4, '4.png', 1, 29),
(5, 'Ninguno', 'Ninguno', 3, 1, '5.png', 1, 2),
(6, 'Guillermo', 'Moreno', 4, 1, '6.jpeg', 1, 7),
(7, 'julio', 'Lopez', 1, 2, '7.png', 1, 3),
(8, 'Jose', 'Laluz', 2, 3, '8.png', 1, 3),
(9, 'Cristian', 'nunes', 1, 4, '9.png', 1, 10),
(40, 'Ning', 'Ninguno', 3, 2, '40.png', 1, 2),
(41, 'Ninguno', 'Ninguno', 3, 3, '41.png', 1, 2),
(42, 'Ninguno', 'Ninguno', 3, 4, '42.png', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadanos`
--

CREATE TABLE `ciudadanos` (
  `documento_dentidad` varchar(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudadanos`
--

INSERT INTO `ciudadanos` (`documento_dentidad`, `nombre`, `apellido`, `email`, `estado`) VALUES
('12', 'Jarol', 'Mercado', 'jarol.mercado.9', 1),
('11', 'Juan ', 'Lopez', 'Juan@lopez', 1),
('22', 'jose', 'ro', 'jo@ro.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elecciones`
--

CREATE TABLE `elecciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha_realizacion` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `logo_partido` varchar(6000) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `nombre`, `descripcion`, `logo_partido`, `estado`) VALUES
(1, 'PRM', 'Partido r m', '1.jpeg', 1),
(2, 'PLD', 'partido l d', '2.png', 1),
(3, 'Ninguno', 'Ninguno', '3.png', 1),
(4, 'Alianza Pais', 'APp', '4.jpeg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto_electivo`
--

CREATE TABLE `puesto_electivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puesto_electivo`
--

INSERT INTO `puesto_electivo` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Presidente', 'pre', 1),
(2, 'Diputado', 'Dip', 1),
(3, 'senador', 'Sen', 1),
(4, 'Alcalde', 'Alc', 1),
(5, 'Ninguno', 'Ninguno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puesto_aspira` (`puesto_aspira`),
  ADD KEY `puesto_aspira_2` (`puesto_aspira`),
  ADD KEY `puesto_aspira_3` (`puesto_aspira`),
  ADD KEY `partido_pertenece` (`partido_pertenece`);

--
-- Indices de la tabla `elecciones`
--
ALTER TABLE `elecciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puesto_electivo`
--
ALTER TABLE `puesto_electivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `elecciones`
--
ALTER TABLE `elecciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `puesto_electivo`
--
ALTER TABLE `puesto_electivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `candidatos_ibfk_1` FOREIGN KEY (`puesto_aspira`) REFERENCES `puesto_electivo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `candidatos_ibfk_2` FOREIGN KEY (`partido_pertenece`) REFERENCES `partidos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
