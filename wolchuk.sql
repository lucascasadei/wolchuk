-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2024 a las 19:24:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wolchuk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE `barrio` (
  `Id_Barrios` int(11) NOT NULL,
  `Barrios_Nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`Id_Barrios`, `Barrios_Nombre`) VALUES
(1, '12 DE OCTUBRE'),
(2, '2 DE ABRIL'),
(4, 'OBRERO'),
(5, 'BARRIO VIAL'),
(6, 'DON BOSCO'),
(7, 'EL MISTOL'),
(8, 'EL RESGUARDO'),
(9, 'MANUEL BELGRANO'),
(10, 'EMILIO TOMAS'),
(11, 'EVA PERÓN'),
(12, 'GUADALUPE'),
(13, 'INDEPENDENCIA'),
(14, 'J.F. KENNEDY'),
(15, 'JUAN D. PERÓN'),
(16, 'LA FLORESTA'),
(17, 'LAS DELICIAS'),
(18, 'LIBORSI'),
(19, 'MARIANO MORENO'),
(20, 'NANQOM'),
(21, 'SAN AGUSTÍN'),
(22, 'SAN FRANCISCO'),
(23, 'SAN JOSÉ OBRERO'),
(24, 'SAN MARTÍN'),
(25, 'SAN MIGUEL'),
(26, 'SAN PEDRO'),
(27, 'SANTA ROSA'),
(28, 'SIMÓN BOLIVAR'),
(29, 'VENEZUELA'),
(30, 'VILLA DEL ROSARIO'),
(31, 'VILLA HERMOSA'),
(32, 'VILLA LA PILAR'),
(33, 'VILLA LOURDES'),
(34, 'VIRGEN DE LUJÁN'),
(35, 'LA ESPERANZA'),
(36, '7 DE MAYO'),
(37, 'ANTENOR GAUNA'),
(38, '1° DE MAYO'),
(39, 'EL PORVENIR'),
(40, 'BERNARDINO RIVADAVIA'),
(41, 'VIRGEN DE ITATÍ'),
(42, 'JUAN M. DE ROSAS'),
(43, 'LA PAZ'),
(44, 'DIVINO NIÑO JESÚS'),
(45, 'SAN PÍO X'),
(46, 'B° PIERO'),
(47, 'PARQUE INDUSTRIAL'),
(48, 'SAN JUAN BAUTISTA'),
(49, '16 DE JULIO'),
(50, 'SAG. CORAZÓN DE MARÍA'),
(51, 'ARTURO ILLIA'),
(52, 'HIPÓLITO IRIGOYEN'),
(53, 'SAN CAYETANO'),
(54, 'FACUNDO QUIROGA'),
(55, 'SAN ANDRES'),
(56, 'SANTA LUCÍA'),
(57, 'LA VIRGEN NIÑA'),
(58, '17 DE OCTUBRE'),
(59, 'LIBERTAD'),
(60, 'ISLAS MALVINAS'),
(61, 'COLLUCCIO'),
(62, 'SAN ISIDRO LABRADOR'),
(63, 'ROBERTO SOTELO'),
(64, '8 DE MARZO'),
(65, 'CO.VI.FOL.'),
(66, 'FONTANA'),
(67, 'SOLANO LIMA'),
(68, 'LA ESTRELLA'),
(69, '20 de JULIO'),
(70, 'REPÚBLICA ARGENTINA'),
(71, '8 DE OCTUBRE'),
(72, 'EL QUEBRANTO'),
(73, 'EL PALOMAR'),
(74, 'STELLA MARIS'),
(75, 'LOS INMIGRANTES'),
(76, 'LAS ORQUIDEAS'),
(77, 'Dr. RICARDO BALBÍN'),
(78, 'SAN JUAN'),
(79, 'SAN ANTONIO'),
(80, 'PARQUE URBANO'),
(81, 'ARTURO ILLIA II'),
(1, '12 DE OCTUBRE'),
(2, '2 DE ABRIL'),
(4, 'OBRERO'),
(5, 'BARRIO VIAL'),
(6, 'DON BOSCO'),
(7, 'EL MISTOL'),
(8, 'EL RESGUARDO'),
(9, 'MANUEL BELGRANO'),
(10, 'EMILIO TOMAS'),
(11, 'EVA PERÓN'),
(12, 'GUADALUPE'),
(13, 'INDEPENDENCIA'),
(14, 'J.F. KENNEDY'),
(15, 'JUAN D. PERÓN'),
(16, 'LA FLORESTA'),
(17, 'LAS DELICIAS'),
(18, 'LIBORSI'),
(19, 'MARIANO MORENO'),
(20, 'NANQOM'),
(21, 'SAN AGUSTÍN'),
(22, 'SAN FRANCISCO'),
(23, 'SAN JOSÉ OBRERO'),
(24, 'SAN MARTÍN'),
(25, 'SAN MIGUEL'),
(26, 'SAN PEDRO'),
(27, 'SANTA ROSA'),
(28, 'SIMÓN BOLIVAR'),
(29, 'VENEZUELA'),
(30, 'VILLA DEL ROSARIO'),
(31, 'VILLA HERMOSA'),
(32, 'VILLA LA PILAR'),
(33, 'VILLA LOURDES'),
(34, 'VIRGEN DE LUJÁN'),
(35, 'LA ESPERANZA'),
(36, '7 DE MAYO'),
(37, 'ANTENOR GAUNA'),
(38, '1° DE MAYO'),
(39, 'EL PORVENIR'),
(40, 'BERNARDINO RIVADAVIA'),
(41, 'VIRGEN DE ITATÍ'),
(42, 'JUAN M. DE ROSAS'),
(43, 'LA PAZ'),
(44, 'DIVINO NIÑO JESÚS'),
(45, 'SAN PÍO X'),
(46, 'B° PIERO'),
(47, 'PARQUE INDUSTRIAL'),
(48, 'SAN JUAN BAUTISTA'),
(49, '16 DE JULIO'),
(50, 'SAG. CORAZÓN DE MARÍA'),
(51, 'ARTURO ILLIA'),
(52, 'HIPÓLITO IRIGOYEN'),
(53, 'SAN CAYETANO'),
(54, 'FACUNDO QUIROGA'),
(55, 'SAN ANDRES'),
(56, 'SANTA LUCÍA'),
(57, 'LA VIRGEN NIÑA'),
(58, '17 DE OCTUBRE'),
(59, 'LIBERTAD'),
(60, 'ISLAS MALVINAS'),
(61, 'COLLUCCIO'),
(62, 'SAN ISIDRO LABRADOR'),
(63, 'ROBERTO SOTELO'),
(64, '8 DE MARZO'),
(65, 'CO.VI.FOL.'),
(66, 'FONTANA'),
(67, 'SOLANO LIMA'),
(68, 'LA ESTRELLA'),
(69, '20 de JULIO'),
(70, 'REPÚBLICA ARGENTINA'),
(71, '8 DE OCTUBRE'),
(72, 'EL QUEBRANTO'),
(73, 'EL PALOMAR'),
(74, 'STELLA MARIS'),
(75, 'LOS INMIGRANTES'),
(76, 'LAS ORQUIDEAS'),
(77, 'Dr. RICARDO BALBÍN'),
(78, 'SAN JUAN'),
(79, 'SAN ANTONIO'),
(80, 'PARQUE URBANO'),
(81, 'ARTURO ILLIA II'),
(1, '12 DE OCTUBRE'),
(2, '2 DE ABRIL'),
(4, 'OBRERO'),
(5, 'BARRIO VIAL'),
(6, 'DON BOSCO'),
(7, 'EL MISTOL'),
(8, 'EL RESGUARDO'),
(9, 'MANUEL BELGRANO'),
(10, 'EMILIO TOMAS'),
(11, 'EVA PERÓN'),
(12, 'GUADALUPE'),
(13, 'INDEPENDENCIA'),
(14, 'J.F. KENNEDY'),
(15, 'JUAN D. PERÓN'),
(16, 'LA FLORESTA'),
(17, 'LAS DELICIAS'),
(18, 'LIBORSI'),
(19, 'MARIANO MORENO'),
(20, 'NANQOM'),
(21, 'SAN AGUSTÍN'),
(22, 'SAN FRANCISCO'),
(23, 'SAN JOSÉ OBRERO'),
(24, 'SAN MARTÍN'),
(25, 'SAN MIGUEL'),
(26, 'SAN PEDRO'),
(27, 'SANTA ROSA'),
(28, 'SIMÓN BOLIVAR'),
(29, 'VENEZUELA'),
(30, 'VILLA DEL ROSARIO'),
(31, 'VILLA HERMOSA'),
(32, 'VILLA LA PILAR'),
(33, 'VILLA LOURDES'),
(34, 'VIRGEN DE LUJÁN'),
(35, 'LA ESPERANZA'),
(36, '7 DE MAYO'),
(37, 'ANTENOR GAUNA'),
(38, '1° DE MAYO'),
(39, 'EL PORVENIR'),
(40, 'BERNARDINO RIVADAVIA'),
(41, 'VIRGEN DE ITATÍ'),
(42, 'JUAN M. DE ROSAS'),
(43, 'LA PAZ'),
(44, 'DIVINO NIÑO JESÚS'),
(45, 'SAN PÍO X'),
(46, 'B° PIERO'),
(47, 'PARQUE INDUSTRIAL'),
(48, 'SAN JUAN BAUTISTA'),
(49, '16 DE JULIO'),
(50, 'SAG. CORAZÓN DE MARÍA'),
(51, 'ARTURO ILLIA'),
(52, 'HIPÓLITO IRIGOYEN'),
(53, 'SAN CAYETANO'),
(54, 'FACUNDO QUIROGA'),
(55, 'SAN ANDRES'),
(56, 'SANTA LUCÍA'),
(57, 'LA VIRGEN NIÑA'),
(58, '17 DE OCTUBRE'),
(59, 'LIBERTAD'),
(60, 'ISLAS MALVINAS'),
(61, 'COLLUCCIO'),
(62, 'SAN ISIDRO LABRADOR'),
(63, 'ROBERTO SOTELO'),
(64, '8 DE MARZO'),
(65, 'CO.VI.FOL.'),
(66, 'FONTANA'),
(67, 'SOLANO LIMA'),
(68, 'LA ESTRELLA'),
(69, '20 de JULIO'),
(70, 'REPÚBLICA ARGENTINA'),
(71, '8 DE OCTUBRE'),
(72, 'EL QUEBRANTO'),
(73, 'EL PALOMAR'),
(74, 'STELLA MARIS'),
(75, 'LOS INMIGRANTES'),
(76, 'LAS ORQUIDEAS'),
(77, 'Dr. RICARDO BALBÍN'),
(78, 'SAN JUAN'),
(79, 'SAN ANTONIO'),
(80, 'PARQUE URBANO'),
(81, 'ARTURO ILLIA II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_clientes` int(11) NOT NULL,
  `clientes_nombre` varchar(200) NOT NULL,
  `clientes_apellido` varchar(200) NOT NULL,
  `clientes_razonSocial` varchar(100) NOT NULL,
  `clientes_cuit` varchar(30) NOT NULL,
  `clientes_CodPostal` varchar(50) NOT NULL,
  `Rela_barrio` int(11) NOT NULL,
  `Rela_departamento` int(11) NOT NULL,
  `Rela_localidad` int(11) NOT NULL,
  `Rela_zona` int(11) NOT NULL,
  `Rela_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_clientes`, `clientes_nombre`, `clientes_apellido`, `clientes_razonSocial`, `clientes_cuit`, `clientes_CodPostal`, `Rela_barrio`, `Rela_departamento`, `Rela_localidad`, `Rela_zona`, `Rela_usuario`) VALUES
(1, 'Lucasas', 'Sosa Casadeias', '36003', '234234', '36004', 64, 9, 57, 2, 1),
(3, 'Lucas', 'Sosa Casadei', '3600', '62652', '3600', 40, 5, 32, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id_departamento` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Id_departamento`, `descripcion`) VALUES
(1, 'BERMEJO'),
(2, 'FORMOSA'),
(3, 'LAISHI'),
(4, 'MATACOS'),
(5, 'PATIÑO'),
(6, 'PILAGÁS'),
(7, 'PILCOMAYO'),
(8, 'PIRANÉ'),
(9, 'RAMÓN LISTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `Id_dias` int(11) NOT NULL,
  `dias_descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`Id_dias`, `dias_descripcion`) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES'),
(6, 'SABADO'),
(7, 'DOMINGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `Id_equipos` int(11) NOT NULL,
  `equipos_descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `Id_pueblo` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rela_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pueblo`
--

INSERT INTO `pueblo` (`Id_pueblo`, `descripcion`, `Rela_departamento`) VALUES
(1, 'LAGUNA YEMA', 1),
(2, 'LOS CHIRIGUANOS', 1),
(3, 'POZO DE MAZA', 1),
(4, 'POZO DEL MORTERO', 1),
(5, 'COLONIA PASTORIL', 2),
(6, 'FORMOSA', 2),
(7, 'GRAN GUARDIA', 2),
(8, 'MARIANO BOEDO', 2),
(9, 'MOJÓN DE FIERRO', 2),
(10, 'SAN HILARIO', 2),
(11, 'VILLA DEL CARMEN', 2),
(12, 'VILLA TRINIDAD', 2),
(13, 'BANCO PAYAGUÁ', 3),
(14, 'GENERAL LUCIO V. MANSILLA', 3),
(15, 'HERRADURA', 3),
(16, 'SAN FRANCISCO DE LAISHI', 3),
(17, 'TATANÉ', 3),
(18, 'VILLA ESCOLAR', 3),
(19, 'INGENIERO GUILLERMO N. JUÁREZ ', 4),
(20, 'BARTOLOMÉ DE LAS CASAS', 5),
(21, 'COLONIA SARMIENTO', 5),
(22, 'COMANDANTE FONTANA', 5),
(23, 'EL RECREO', 5),
(24, 'ESTANISLAO DEL CAMPO', 5),
(25, 'FORTÍN CABO 1º LUGONES ', 5),
(26, 'FORTÍN SARGENTO 1º LEYES', 5),
(27, 'IBARRETA', 5),
(28, 'JUAN G. BAZÁN ', 5),
(29, 'LAS LOMITAS', 5),
(30, 'POSTA CAMBIO ZALAZAR', 5),
(31, 'POZO DEL TIGRE', 5),
(32, 'SAN MARTÍN I', 5),
(33, 'SAN MARTÍN II', 5),
(34, 'SUBTENIENTE PERÍN', 5),
(35, 'VILLA GENERAL GÜEMES', 5),
(36, 'VILLA GENERAL MANUEL BELGRANO', 5),
(37, 'BUENA VISTA', 6),
(38, 'EL ESPINILLO', 6),
(39, 'LAGUNA GALLO', 6),
(40, 'MISIÓN TACAAGLÉ', 6),
(41, 'PORTÓN NEGRO', 6),
(42, 'TRES LAGUNAS', 6),
(43, 'CLORINDA', 7),
(44, 'LAGUNA BLANCA', 7),
(45, 'LAGUNA NAICK-NECK', 7),
(46, 'PALMA SOLA', 7),
(47, 'PUERTO PILCOMAYO', 7),
(48, 'RIACHO HE-HE', 7),
(49, 'RIACHO NEGRO', 7),
(50, 'SIETE PALMAS', 7),
(51, 'COLONIA CAMPO VILLAFAÑE', 8),
(52, 'EL COLORADO', 8),
(53, 'PALO SANTO', 8),
(54, 'PIRANÉ', 8),
(55, 'VILLA KILÓMETRO 213', 8),
(56, 'EL POTRILLO', 9),
(57, 'GENERAL MOSCONI', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rela_zona_dias`
--

CREATE TABLE `rela_zona_dias` (
  `Id_Rela_zona_dias` int(11) NOT NULL,
  `Rela_zona` int(11) NOT NULL,
  `Rela_dias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rela_zona_dias`
--

INSERT INTO `rela_zona_dias` (`Id_Rela_zona_dias`, `Rela_zona`, `Rela_dias`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 2),
(4, 2, 5),
(5, 3, 3),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuarios` int(11) NOT NULL,
  `usuarios_nombre` varchar(150) NOT NULL,
  `usuarios_apellido` varchar(150) NOT NULL,
  `usuarios_dni` varchar(12) NOT NULL,
  `usuarios_contrasena` varchar(255) NOT NULL,
  `Rela_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuarios`, `usuarios_nombre`, `usuarios_apellido`, `usuarios_dni`, `usuarios_contrasena`, `Rela_area`) VALUES
(1, 'Lucas', 'Casadei', '40626296', '$2y$10$fyM2q4mdlma4TrqLVgbuG.LJQ3UcQJtDB1uucN7YmSBrKGBgIR74O', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `Id_zona` int(11) NOT NULL,
  `zona_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`Id_zona`, `zona_nombre`) VALUES
(1, 'Zona 1'),
(2, 'Zona 2'),
(3, 'Zona 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_clientes`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id_departamento`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`Id_dias`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`Id_equipos`);

--
-- Indices de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD PRIMARY KEY (`Id_pueblo`),
  ADD KEY `fk_rela_departamento` (`Rela_departamento`);

--
-- Indices de la tabla `rela_zona_dias`
--
ALTER TABLE `rela_zona_dias`
  ADD PRIMARY KEY (`Id_Rela_zona_dias`),
  ADD KEY `fk_rela_zona` (`Rela_zona`),
  ADD KEY `fk_rela_dias` (`Rela_dias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuarios`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`Id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `Id_dias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `Id_equipos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `Id_pueblo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `rela_zona_dias`
--
ALTER TABLE `rela_zona_dias`
  MODIFY `Id_Rela_zona_dias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `Id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD CONSTRAINT `pueblo_ibfk_1` FOREIGN KEY (`Rela_departamento`) REFERENCES `departamento` (`Id_departamento`);

--
-- Filtros para la tabla `rela_zona_dias`
--
ALTER TABLE `rela_zona_dias`
  ADD CONSTRAINT `rela_zona_dias_ibfk_1` FOREIGN KEY (`Rela_zona`) REFERENCES `zona` (`Id_zona`),
  ADD CONSTRAINT `rela_zona_dias_ibfk_2` FOREIGN KEY (`Rela_dias`) REFERENCES `dias` (`Id_dias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
