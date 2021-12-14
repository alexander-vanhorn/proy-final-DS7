-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 18:27:55
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `congreso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencias`
--

CREATE TABLE `conferencias` (
  `conf_id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `salon` varchar(255) NOT NULL,
  `facultad` varchar(255) NOT NULL,
  `expositor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conferencias`
--

INSERT INTO `conferencias` (`conf_id`, `tema`, `fecha_hora`, `salon`, `facultad`, `expositor`) VALUES
(1, 'Conversatorio sobre el alza de natalidad y los desafíos para la seguridad alimentaria', '2021-12-14 18:10:51', 'B-234', 'FISC', 'Dayron Zapata'),
(2, 'Conservación del agua', '2021-12-14 18:10:51', 'B-235', 'Civil', 'Pepe La Russa'),
(3, 'Construcción de carreteras amigables con el medio ambiente', '2021-12-14 18:14:47', 'B-236', 'Civil', 'Ernesto González'),
(4, 'Inteligencia Artificial para promover la tolerancia en el manejo', '2021-12-14 18:14:47', 'B-340', 'FISC', 'Dr. Antonio Vargas'),
(5, '¿Cómo hacer queso?', '2021-12-14 18:17:25', 'C-231', 'FCyT', 'Ing. Yariela Méndez'),
(6, 'Movilidad Eléctrica en Panamá', '2021-12-14 18:18:50', 'C-120', 'Eléctrica', 'Mayer Mizrachi'),
(7, '¿Automatización para la industria?', '2021-12-14 18:18:50', 'A-100', 'Industrial', 'Rogelio Férnandez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `insc_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `monto` float NOT NULL,
  `descuento` float NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`insc_id`, `part_id`, `monto`, `descuento`, `fecha_hora`) VALUES
(2, 1, 200, 0, '2021-12-14 16:12:36'),
(3, 1, 200, 0, '2021-12-14 17:26:41'),
(4, 1, 200, 0, '2021-12-14 17:27:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `tipo_doc` varchar(20) NOT NULL,
  `part_id` int(15) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`nombre`, `apellido`, `correo`, `tipo_doc`, `part_id`, `institucion`, `rol`) VALUES
('Alexander', 'Vanhorn', 'alexander.vanhorn@utp.ac.pa', '8-931-2330', 1, 'Universidad Tecnológica de Panamá', 'Estudiante pregrado'),
('José', 'Peralta', 'jose.peralta@utp.ac.pa', '8-111-111', 2, 'Universidad Interamericana de Panamá', 'Estudiante postgrado'),
('María', 'Vega', 'maria.vega@uip.ac.pa', '2-2222-2222', 3, 'Universidad Interamericana de Panamá', 'Estudiante postgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_conferencias`
--

CREATE TABLE `participantes_conferencias` (
  `part_conf_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `conf_id` int(11) NOT NULL,
  `hora_ingreso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participantes_conferencias`
--

INSERT INTO `participantes_conferencias` (`part_conf_id`, `part_id`, `conf_id`, `hora_ingreso`) VALUES
(1, 1, 1, '2021-12-14 17:13:32'),
(2, 1, 1, '2021-12-14 17:14:12'),
(3, 1, 5, '2021-12-14 17:21:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_usuario`
--

INSERT INTO `rol_usuario` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Operativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`, `foto`, `id_rol`) VALUES
(1, 'Alexander', 'Vanhorn', 'alexander.vanhorn@utp.ac.pa', 'bf8c7ffbe9eee14fe1902223a3936bad', 'user.png', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conferencias`
--
ALTER TABLE `conferencias`
  ADD PRIMARY KEY (`conf_id`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`insc_id`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`part_id`);

--
-- Indices de la tabla `participantes_conferencias`
--
ALTER TABLE `participantes_conferencias`
  ADD PRIMARY KEY (`part_conf_id`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conferencias`
--
ALTER TABLE `conferencias`
  MODIFY `conf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `insc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `part_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `participantes_conferencias`
--
ALTER TABLE `participantes_conferencias`
  MODIFY `part_conf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol_usuario` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
