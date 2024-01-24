-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2024 a las 20:38:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `cod_articulo` varchar(255) NOT NULL,
  `nombre_articulo` varchar(255) NOT NULL,
  `desc` text DEFAULT NULL,
  `cant_actual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `cod_articulo`, `nombre_articulo`, `desc`, `cant_actual`) VALUES
(1, '50151', 'QUESO BARRA', NULL, 50),
(2, '50152', 'QUESO CREMOSO', NULL, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaproductos`
--

CREATE TABLE `listaproductos` (
  `Id_listaProductos` int(11) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cod_valanza` varchar(150) NOT NULL,
  `precio_valanza` varchar(150) NOT NULL,
  `fecha_valanza` date NOT NULL,
  `cod_bejerman` varchar(150) NOT NULL,
  `precio_bejerman` varchar(150) NOT NULL,
  `fecha_bejerman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` int(11) NOT NULL,
  `cod_flexxus` varchar(20) DEFAULT NULL,
  `cod_valanza` varchar(20) DEFAULT NULL,
  `cod_hassar` int(11) DEFAULT NULL,
  `pesable` tinyint(1) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio_costo` decimal(10,2) DEFAULT NULL,
  `precio_flexxus` decimal(10,2) DEFAULT NULL,
  `precio_valanza` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `cod_flexxus`, `cod_valanza`, `cod_hassar`, `pesable`, `descripcion`, `precio_costo`, `precio_flexxus`, `precio_valanza`) VALUES
(1, 'MK970', '1', 50001, 1, 'QUESO BARRA DANBO MILKAUT', 0.00, 0.00, 0.00),
(2, 'MK2067', '2', 50002, 1, 'QUESO CREMOSO AL VAC?O MILKAUT', 0.00, 0.00, 0.00),
(3, 'MK2099', '3', 50003, 1, 'QUESO CREMOSO TROZADO MILKAUT', 0.00, 0.00, 0.00),
(4, 'MK35', '4', 50004, 1, 'QUESO MOZZARELLA EN BARRA MILKAUT', 0.00, 0.00, 0.00),
(5, 'MK1172', '5', 50005, 1, 'QUESO PATEGRAS MILKAUT', 0.00, 0.00, 0.00),
(6, 'MK2456', '6', 50006, 1, 'QUESO PORT SALUT CUAD. 1/2 HORMA MILKAUT', 0.00, 0.00, 0.00),
(7, 'MK11', '7', 50007, 1, 'QUESO PORT SALUT CUAD. AL VACIO MILKAUT 4KGR', 0.00, 0.00, 0.00),
(8, 'MK2032', '8', 50008, 1, 'QUESO PORT SALUT TROZADO MILKAUT', 0.00, 0.00, 0.00),
(9, 'MK1481', '9', 50009, 1, 'QUESO SARDO MILKAUT', 0.00, 0.00, 0.00),
(10, 'MK2034', '10', 50010, 1, 'QUESO SARDO TROZADO MILKAUT 285 GR', 0.00, 0.00, 0.00),
(11, 'MK2764', '11', 50011, 1, 'QUESO PATEGR?S TROZADO MILKAUT320 GR', 0.00, 0.00, 0.00),
(12, 'MK2531', '12', 50012, 1, 'QUESO MOZZARELLA MILKAUT HORMA X 500 G', 0.00, 0.00, 0.00),
(13, 'MK1084', '13', 50013, 1, 'QUESO REGGIANITO MILKAUT AL VACIO', 0.00, 0.00, 0.00),
(14, '', '14', 50014, 1, '#N/A', 0.00, 0.00, 0.00),
(15, 'MK2638', '15', 50015, 1, 'Q.PROC.FETAS EMMENTHAL MK X 192', 0.00, 0.00, 0.00),
(16, 'MK2848', '16', 50016, 1, 'QUESO FONTINA RESERVA SR HORMA', 0.00, 0.00, 0.00),
(17, 'MK2849', '17', 50017, 1, 'QUESO FONTINA SR RESERVA TROZADO 250', 0.00, 0.00, 0.00),
(18, 'MK2058', '18', 50018, 1, 'QUESO REGGIANITO MILKAUT TROZADO ENV. VACIO. 285GR', 0.00, 0.00, 0.00),
(19, 'MK2898', '19', 50019, 1, 'QUESO CHEDDAR FETAS IMP. MILKAUT X192', 0.00, 0.00, 0.00),
(20, 'MK2965', '20', 50020, 1, 'QUESO PROVOLETA MILKAUT BARRA', 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `iva` decimal(10,2) NOT NULL,
  `id_sucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `listaproductos`
--
ALTER TABLE `listaproductos`
  ADD PRIMARY KEY (`Id_listaProductos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_sucursal` (`id_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `listaproductos`
--
ALTER TABLE `listaproductos`
  MODIFY `Id_listaProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id_articulo`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
