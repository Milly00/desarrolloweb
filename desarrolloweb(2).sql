-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2021 a las 06:17:13
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desarrolloweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `codigoa` varchar(15) NOT NULL,
  `uid_creador` varchar(20) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hr_inicio` time DEFAULT NULL,
  `asunto` varchar(50) DEFAULT NULL,
  `hr_final` time DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiste`
--

CREATE TABLE `asiste` (
  `codigoa` varchar(15) NOT NULL,
  `uid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso`
--

CREATE TABLE `compromiso` (
  `codigoc` varchar(15) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `codigoa` varchar(15) NOT NULL,
  `f_final` date DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `f_inicio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultor`
--

CREATE TABLE `consultor` (
  `uid_consultor` varchar(20) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creador`
--

CREATE TABLE `creador` (
  `uid_creador` varchar(20) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `creador`
--

INSERT INTO `creador` (`uid_creador`, `nombres`) VALUES
('1000345899', 'Carlos Cantero Espitia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emite`
--

CREATE TABLE `emite` (
  `codigof` varchar(10) DEFAULT NULL,
  `codigop` varchar(10) DEFAULT NULL,
  `codigoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `codigof` varchar(10) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`codigof`, `nombre`) VALUES
('FCT0001', 'Facultad de ingeníeria'),
('FCT0002', 'Facultad medicina veterinaria y zootecnia'),
('FCT0003', 'Facultad ciencias agrícolas'),
('FCT0004', 'Facultad ciencias básicas'),
('FCT0005', 'Facultad educación y ciencias humanas'),
('FCT0006', 'Facultad ecónomicas, juridícas y administrativas'),
('FCT0007', 'Facultad ciencias de la salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `codigop` varchar(10) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `codigof` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`codigop`, `nombre`, `codigof`) VALUES
('PRG0001', 'Ingeniería Ambiental', 'FCT0001'),
('PRG0002', 'Ingeniería de Alimentos', 'FCT0001'),
('PRG0003', 'Ingeniería Industrial', 'FCT0001'),
('PRG0004', 'Ingeniería Mecánica', 'FCT0001'),
('PRG0005', 'Ingeniería de Sistemas', 'FCT0001'),
('PRG0006', 'Medicina Veterinaria y Zootecnia ', 'FCT0002'),
('PRG0007', 'Acuicultura', 'FCT0002'),
('PRG0008', 'Ingeniería Agronómica', 'FCT0003'),
('PRG0009', 'Técnico Profesional en Manejo y Conservación de Productos Agroindustri', 'FCT0003'),
('PRG0010', 'Tecnología en Control y Gestión de Procesos Agroindustriales', 'FCT0003'),
('PRG0011', 'Biología', 'FCT0004'),
('PRG0012', 'Estadística', 'FCT0004'),
('PRG0013', 'Física', 'FCT0004'),
('PRG0014', 'Geografía', 'FCT0004'),
('PRG0015', 'Matemática', 'FCT0004'),
('PRG0016', 'Química', 'FCT0004'),
('PRG0017', 'Licenciatura en Educación Infantil', 'FCT0005'),
('PRG0018', 'Licenciatura en Literatura y lengua Castellana', 'FCT0005'),
('PRG0019', 'Licenciatura en Educación Física, Recreación y Deportes', 'FCT0005'),
('PRG0020', 'Licenciatura en Lenguas Extranjeras con Énfasis en Inglés', 'FCT0005'),
('PRG0021', 'Licenciatura en Informática', 'FCT0005'),
('PRG0022', 'Licenciatura en Ciencias Sociales', 'FCT0005'),
('PRG0023', 'Licenciatura en Educación Artística', 'FCT0005'),
('PRG0024', 'Licenciatura en Ciencias Naturales y Educación Ambiental', 'FCT0005'),
('PRG0025', 'Administración en Finanzas y Negocios Internacionales', 'FCT0006'),
('PRG0026', 'Derecho', 'FCT0006'),
('PRG0027', 'Administración en Salud', 'FCT0007'),
('PRG0028', 'Bacteriología', 'FCT0007'),
('PRG0029', 'Enfermería', 'FCT0007'),
('PRG0030', 'Tecnología en Regencia de Farmacia', 'FCT0007');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `uid` varchar(20) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `codigof` varchar(10) DEFAULT NULL,
  `codigop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`uid`, `nombres`, `password`, `rol`, `codigof`, `codigop`) VALUES
('1000345899', 'Carlos Cantero Espitia', '123456', 'user', 'FCT0001', 'PRG0001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`codigoa`),
  ADD KEY `uid_creador` (`uid_creador`);

--
-- Indices de la tabla `asiste`
--
ALTER TABLE `asiste`
  ADD PRIMARY KEY (`codigoa`,`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indices de la tabla `compromiso`
--
ALTER TABLE `compromiso`
  ADD PRIMARY KEY (`codigoa`,`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indices de la tabla `consultor`
--
ALTER TABLE `consultor`
  ADD PRIMARY KEY (`uid_consultor`);

--
-- Indices de la tabla `creador`
--
ALTER TABLE `creador`
  ADD PRIMARY KEY (`uid_creador`);

--
-- Indices de la tabla `emite`
--
ALTER TABLE `emite`
  ADD PRIMARY KEY (`codigoa`),
  ADD KEY `codigof` (`codigof`),
  ADD KEY `codigop` (`codigop`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`codigof`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`codigop`),
  ADD KEY `codigof` (`codigof`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `codigof` (`codigof`),
  ADD KEY `codigop` (`codigop`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `acta_ibfk_1` FOREIGN KEY (`uid_creador`) REFERENCES `creador` (`uid_creador`);

--
-- Filtros para la tabla `asiste`
--
ALTER TABLE `asiste`
  ADD CONSTRAINT `asiste_ibfk_1` FOREIGN KEY (`codigoa`) REFERENCES `acta` (`codigoa`),
  ADD CONSTRAINT `asiste_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `usuario` (`uid`);

--
-- Filtros para la tabla `compromiso`
--
ALTER TABLE `compromiso`
  ADD CONSTRAINT `compromiso_ibfk_1` FOREIGN KEY (`codigoa`) REFERENCES `acta` (`codigoa`),
  ADD CONSTRAINT `compromiso_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `usuario` (`uid`);

--
-- Filtros para la tabla `consultor`
--
ALTER TABLE `consultor`
  ADD CONSTRAINT `consultor_ibfk_1` FOREIGN KEY (`uid_consultor`) REFERENCES `usuario` (`uid`);

--
-- Filtros para la tabla `creador`
--
ALTER TABLE `creador`
  ADD CONSTRAINT `creador_ibfk_1` FOREIGN KEY (`uid_creador`) REFERENCES `usuario` (`uid`);

--
-- Filtros para la tabla `emite`
--
ALTER TABLE `emite`
  ADD CONSTRAINT `emite_ibfk_1` FOREIGN KEY (`codigof`) REFERENCES `facultad` (`codigof`),
  ADD CONSTRAINT `emite_ibfk_2` FOREIGN KEY (`codigop`) REFERENCES `programa` (`codigop`),
  ADD CONSTRAINT `emite_ibfk_3` FOREIGN KEY (`codigoa`) REFERENCES `acta` (`codigoa`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`codigof`) REFERENCES `facultad` (`codigof`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`codigof`) REFERENCES `facultad` (`codigof`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
