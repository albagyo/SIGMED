-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 06:43:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sigmed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `fecha`, `estado`, `id_medico`, `id_paciente`, `id_horario`) VALUES
(21, '2022-04-03', 0, 12, 6, 6),
(24, '2021-12-16', 0, 12, 6, 8),
(25, '2021-12-13', 0, 12, 6, 21),
(26, '2021-12-24', 1, 19, 6, 19),
(27, '2021-12-28', 0, 15, 6, 12),
(28, '2021-12-13', 1, 21, 6, 11),
(29, '2021-12-14', 0, 15, 6, 7),
(30, '2021-12-28', 0, 18, 6, 11),
(31, '2022-01-19', 1, 20, 6, 6),
(32, '2021-12-15', 0, 20, 6, 14),
(33, '', 0, 12, 6, 6),
(35, '2022-01-18', 0, 20, 6, 17),
(36, '2021-12-24', 1, 21, 6, 21),
(37, '2021-12-24', 0, 12, 6, 13),
(38, '2022-01-04', 1, 12, 8, 14),
(39, '2021-12-29', 0, 18, 8, 13),
(40, '2021-12-30', 1, 19, 8, 10),
(41, '2021-12-15', 1, 16, 8, 17),
(42, '2022-01-19', 0, 12, 6, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`, `descripcion`) VALUES
(2, 'Cardiología', 'Tratamiento de enfermedades cardiovasculares'),
(3, 'Medicina Interna', 'Atención al adulto, tratamiento y prevención de enfermedades'),
(4, 'Pediatría', 'Salud y cuidado médico de infantes, niños y adolescentes'),
(5, 'Ortopedia', 'Tratamiento del sistema musculoesquelético'),
(6, 'Obstetricia', 'Embarazo, parto y puerperio de mujeres en edad reproductiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `franja_horaria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `franja_horaria`) VALUES
(6, '8:30'),
(7, '9:00'),
(8, '9:30'),
(9, '9:00'),
(10, '9:30'),
(11, '10:00'),
(12, '10:30'),
(13, '11:00'),
(14, '11:30'),
(15, '12:00'),
(16, '12:30'),
(17, '1:00'),
(18, '1:30'),
(19, '2:00'),
(20, '2:30'),
(21, '3:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_policlinica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id`, `nombre`, `apellido`, `cedula`, `id_usuario`, `id_especialidad`, `id_policlinica`) VALUES
(12, 'Rafael', 'Santos', '8-995-344', 17, 2, 6),
(13, 'Andres', 'Rosado', '7-934-081', 18, 2, 8),
(14, 'Adriana', 'Martí', '4-812-182', 19, 3, 7),
(15, 'Juan', 'Ortega', '1-335-562', 20, 3, 9),
(16, 'Oliver', 'Guirado', '3-301-2080', 21, 4, 8),
(17, 'María', 'Morales', '8-742-1963', 22, 4, 7),
(18, 'Natalie', 'Diaz', '9-794-2331', 23, 5, 10),
(19, 'Ricardo', 'Gómez', '4-824-495', 24, 5, 6),
(20, 'Amparo', 'Frias', '1-224-2357', 25, 6, 9),
(21, 'Mario', 'Grenald', '3-706-421', 26, 6, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido`, `cedula`, `id_usuario`) VALUES
(6, 'Alba', 'Guerra', '4-813-2080', 14),
(8, 'Yinavis', 'Segovia', '4-812-9090', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policlinica`
--

CREATE TABLE `policlinica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `hora_apertura` varchar(20) NOT NULL,
  `hora_cierre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `policlinica`
--

INSERT INTO `policlinica` (`id`, `nombre`, `telefono`, `ubicacion`, `hora_apertura`, `hora_cierre`) VALUES
(6, 'Policlínica Presidente Remón', '503-3330', 'C. 17 Oeste, Panamá', '7:00', '3:00'),
(7, 'Policlínica Dr. Carlos N. Brin', '503-1100', 'San Fransisco, Panamá', '7:00', '3:00'),
(8, 'Policlínica Don Generoso Guardia', '503-8348', 'Santa Librada, Panamá', '7:00', '3:00'),
(9, 'Policlínica Dr. Santiago Barraza', '253-3270', 'Chorrera, Panamá', '7:00', '3:00'),
(10, 'Policlínica Manuel María Valdés', '503-1500', 'San Miguelito, Panamá', '7:00', '3:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
(1, 'paciente'),
(2, 'medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasenna` varchar(20) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `contrasenna`, `id_tipo`) VALUES
(14, 'albayg00@gmail.com', '12345abc', 1),
(16, 'yinavismassiel@gmail.com', 'abc12345', 1),
(17, 'rsantos@gmail.com', 'Kizz56OS', 2),
(18, 'drarosado@gmail.com', 'vp4YcPg', 2),
(19, 'dra.marti@hotmail.com', 'VOI6g5P', 2),
(20, 'dr.ortegaa@live.com', 'zB5S3D8', 2),
(21, 'oguirado@gmail.com', '9PF7LVD', 2),
(22, 'mmorales13@hotmail.com', 'ma6kxmg', 2),
(23, 'dra.ndiaz1@live.com', '454XKEP', 2),
(24, 'rr.gomez@gmail.com', '85J5W82', 2),
(25, 'amparof.pro@gmail.com', 'jbe6kc7', 2),
(26, 'mariogrenald@hotmail.com', 'vekDBPg', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_id_medico_medico_id` (`id_medico`),
  ADD KEY `citas_id_paciente_paciente_id` (`id_paciente`),
  ADD KEY `citas_id_horario_horario_id` (`id_horario`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `medico_id_usuario_usuario_id` (`id_usuario`),
  ADD KEY `medico_id_especialidad_especialidad_id` (`id_especialidad`),
  ADD KEY `medico_id_policlinica_policlinica_id` (`id_policlinica`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `paciente_id_usuario_usuario_id` (`id_usuario`);

--
-- Indices de la tabla `policlinica`
--
ALTER TABLE `policlinica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `usuario_id_tipo_tipo_usuario_id` (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `policlinica`
--
ALTER TABLE `policlinica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_id_horario_horario_id` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id`),
  ADD CONSTRAINT `citas_id_medico_medico_id` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`),
  ADD CONSTRAINT `citas_id_paciente_paciente_id` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_id_especialidad_especialidad_id` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id`),
  ADD CONSTRAINT `medico_id_policlinica_policlinica_id` FOREIGN KEY (`id_policlinica`) REFERENCES `policlinica` (`id`),
  ADD CONSTRAINT `medico_id_usuario_usuario_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_id_usuario_usuario_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_id_tipo_tipo_usuario_id` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
