-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2022 a las 14:59:14
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrodiario`
--
CREATE DATABASE IF NOT EXISTS `registrodiario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registrodiario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblgasto`
--

CREATE TABLE `tblgasto` (
  `IdGasto` bigint(20) UNSIGNED NOT NULL,
  `IdProveedor` int(11) DEFAULT NULL,
  `IdTipoComprobante` smallint(5) UNSIGNED DEFAULT NULL,
  `NumeroComprobante` varchar(25) NOT NULL,
  `Fecha` date NOT NULL,
  `IdTipoGasto` smallint(5) UNSIGNED DEFAULT NULL,
  `Notas` varchar(255) DEFAULT NULL,
  `AplicaIGV` tinyint(1) DEFAULT 0,
  `Monto` decimal(10,6) NOT NULL,
  `IGV` decimal(10,6) DEFAULT NULL,
  `MontoTotal` decimal(10,6) NOT NULL,
  `Modificado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblgasto`
--

INSERT INTO `tblgasto` (`IdGasto`, `IdProveedor`, `IdTipoComprobante`, `NumeroComprobante`, `Fecha`, `IdTipoGasto`, `Notas`, `AplicaIGV`, `Monto`, `IGV`, `MontoTotal`, `Modificado`) VALUES
(1, NULL, 2, 'BV001-22223', '2022-03-13', 1, 'Por la compra de mercadería.', 1, '1000.000000', '180.000000', '1180.000000', '2022-04-21 23:26:26'),
(2, NULL, 1, 'FE002-66522253', '2022-03-22', 3, 'Por el pago de servicio de transporte de mercadería', 1, '50.000000', '9.000000', '59.000000', '2022-04-21 23:51:47'),
(3, NULL, 1, 'FE005-3652214', '2022-03-28', 2, 'Por la compra de pasaje aéreo a la ciudad de Lima, para compra de mercadería.', 1, '226.000000', '40.680000', '266.680000', '2022-04-22 22:25:36'),
(4, NULL, 1, 'FE022-666595', '2022-04-14', NULL, 'POR LA COMPRA DE MERCADERIA ABRIL 1', 0, '1000.000000', '0.000000', '1000.000000', '2022-04-24 21:13:45'),
(5, NULL, 1, 'FE005-36522555', '2022-04-15', NULL, 'POR EL PAGO DE FLETES', 1, '100.000000', '18.000000', '118.000000', '2022-04-24 21:21:26'),
(6, NULL, 1, 'FE002-6652001', '2022-04-16', NULL, 'POR ALGO', 0, '1200.000000', '216.000000', '1416.000000', '2022-04-24 21:22:47'),
(7, NULL, 1, 'FE005-36522002', '2022-04-17', NULL, 'POR UN GASTO', 0, '120.000000', '21.600000', '141.600000', '2022-04-24 21:37:53'),
(8, NULL, 1, 'FE01-22333', '2022-04-18', NULL, 'XXXXXX', 0, '100.000000', '18.000000', '118.000000', '2022-04-24 22:02:34'),
(9, NULL, 2, 'BV016', '2022-04-18', NULL, 'DDDDDDDD', 0, '146.000000', '120.000000', '1120.000000', '2022-04-24 22:05:25'),
(10, NULL, 1, 'BV016', '2022-04-18', NULL, 'gsdfgsdfgs dfgdfg', 1, '100.000000', '18.000000', '1180.000000', '2022-04-24 22:14:02'),
(11, NULL, 1, 'FE005-365561', '2022-04-19', NULL, 'POR LA COMPRA DE MERCADERÍA', 1, '1200.000000', '360.000000', '1560.000000', '2022-04-24 22:26:10'),
(12, NULL, 1, 'FV026-6589', '2022-04-20', NULL, 'COMPRA DE MERCADERÍA EN LA CIUDAD LIMA', 1, '600.000000', '108.000000', '708.000000', '2022-04-25 21:47:02'),
(13, NULL, 1, 'FZ055-36966', '2022-04-20', NULL, 'POR EL PAGO DE FLETE DE MERCADERÍA LIM IQT', 1, '255.000000', '45.900000', '300.900000', '2022-04-25 22:19:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblingreso`
--

CREATE TABLE `tblingreso` (
  `IdIngreso` bigint(20) UNSIGNED NOT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `IdTipoComprobante` smallint(6) NOT NULL,
  `NumeroComprobante` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Notas` varchar(255) DEFAULT NULL,
  `Monto` double NOT NULL,
  `Modificado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblingreso`
--

INSERT INTO `tblingreso` (`IdIngreso`, `IdCliente`, `IdTipoComprobante`, `NumeroComprobante`, `Fecha`, `Notas`, `Monto`, `Modificado`) VALUES
(1, NULL, 2, 'BV004', '2022-04-01', 'Primera venta', 116, '2022-04-17 19:00:55'),
(2, NULL, 2, 'BV005', '2022-04-01', 'Segunda venta', 116, '2022-04-17 19:01:09'),
(3, NULL, 0, 'BV006', '2022-04-03', 'Segunda venta de otro producto', 122, '2022-04-17 19:01:44'),
(4, NULL, 0, 'BV007', '2022-04-04', 'Por la venta de mercadería.', 131, '2022-04-17 19:02:04'),
(5, NULL, 0, 'BV001', '2022-04-15', 'Venta de algún producto', 100, '2022-04-21 22:17:49'),
(6, NULL, 2, 'BV002', '2022-04-16', 'Venta de otro producto.', 146, '2022-04-21 22:20:21'),
(7, NULL, 0, 'BV003', '2022-04-17', 'Por la venta de zapatos de caballero', 144, '2022-04-21 22:22:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipocomprobante`
--

CREATE TABLE `tbltipocomprobante` (
  `IdTipoComprobante` smallint(6) NOT NULL,
  `TipoComprobante` varchar(50) NOT NULL,
  `CodigoComprobante` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltipocomprobante`
--

INSERT INTO `tbltipocomprobante` (`IdTipoComprobante`, `TipoComprobante`, `CodigoComprobante`) VALUES
(1, 'Factura', 1),
(2, 'Boleta de Venta', 3),
(3, 'Nota de Crédito Electrónica', NULL),
(4, 'Nota de Débito Electrónica', NULL),
(5, 'Recibo de Servicios Públicos Electrónico', NULL),
(6, 'Recibo por Honorarios Electrónico', NULL),
(7, 'Comprobante de Retención Electrónico', NULL),
(8, 'Comprobante de Percepción Electrónico', NULL),
(9, 'Liquidación de Compra Electrónica', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipogasto`
--

CREATE TABLE `tbltipogasto` (
  `IdTipoGasto` smallint(6) NOT NULL,
  `TipoGasto` varchar(100) NOT NULL,
  `TipoObjeto` varchar(10) NOT NULL COMMENT 'Bienes o Servicios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltipogasto`
--

INSERT INTO `tbltipogasto` (`IdTipoGasto`, `TipoGasto`, `TipoObjeto`) VALUES
(1, 'Compra de mercaderia', 'Bienes'),
(2, 'Compra de pasajes aéreos', 'Servicios'),
(3, 'Pago de flete, carguío y transporte', 'Servicios'),
(4, 'Viáticos: alimentación', 'Bienes'),
(5, 'Viáticos: hospedaje', 'Servicios'),
(6, 'Viáticos: transporte local', 'Servicios'),
(7, 'Cargos bancarios: comisiones', 'Servicios'),
(8, 'Cargos bancarios: ITF', 'Servicios'),
(9, 'Impuesto a la renta', 'Impuestos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblgasto`
--
ALTER TABLE `tblgasto`
  ADD PRIMARY KEY (`IdGasto`);

--
-- Indices de la tabla `tblingreso`
--
ALTER TABLE `tblingreso`
  ADD PRIMARY KEY (`IdIngreso`);

--
-- Indices de la tabla `tbltipocomprobante`
--
ALTER TABLE `tbltipocomprobante`
  ADD PRIMARY KEY (`IdTipoComprobante`);

--
-- Indices de la tabla `tbltipogasto`
--
ALTER TABLE `tbltipogasto`
  ADD PRIMARY KEY (`IdTipoGasto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblgasto`
--
ALTER TABLE `tblgasto`
  MODIFY `IdGasto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tblingreso`
--
ALTER TABLE `tblingreso`
  MODIFY `IdIngreso` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbltipocomprobante`
--
ALTER TABLE `tbltipocomprobante`
  MODIFY `IdTipoComprobante` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbltipogasto`
--
ALTER TABLE `tbltipogasto`
  MODIFY `IdTipoGasto` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
