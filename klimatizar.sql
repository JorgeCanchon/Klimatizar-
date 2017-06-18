-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2017 a las 04:52:19
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `klimatizar`
--


--
-- Estructura de tabla para la tabla `afp`
--

CREATE TABLE `afp` (
  `idAFP` int(11) NOT NULL,
  `nombreAFP` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afp`
--

INSERT INTO `afp` (`idAFP`, `nombreAFP`, `visibilidad`) VALUES
(1, 'Porvenir', 1),
(2, 'Proteccion', 1),
(3, 'Colfondos', 1),
(4, 'pruebaS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arl`
--

CREATE TABLE `arl` (
  `idARL` int(11) NOT NULL,
  `nombreARL` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `arl`
--

INSERT INTO `arl` (`idARL`, `nombreARL`, `visibilidad`) VALUES
(1, 'Sura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codigoCargo` int(11) NOT NULL,
  `NombreCargo` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`codigoCargo`, `NombreCargo`, `descripcion`, `visibilidad`) VALUES
(1, 'Gerente Activa y Financiera ', 'NULL', 1),
(2, 'Ingeniero de Proyectos', 'NULL', 1),
(3, 'Auxiliar de Refregeracion', 'NULL', 1),
(4, 'Auxiliar de Obra', 'NULL', 1),
(5, 'Tecnico Refrieracion', 'NULL', 1),
(6, 'Tecnico Refrigeracion', 'NULL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigoCliente` int(11) NOT NULL,
  `nombreCliente` varchar(45) NOT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codigoCliente`, `nombreCliente`, `direccion`, `telefono`, `visibilidad`) VALUES
(1, 'KLIMATIZAR COLOMBIA SAS', 'CRA 46 No.131-22 P3', '2592272/2592277 ', 1),
(2, 'RUGELES DURAN ARQUITECTOS', 'NULL', 'NULL', 1),
(3, 'COTEL S.A', 'carrera 49 102a -43', '6325990', 1),
(4, 'pruebas', 'kr 6an189', '311271136', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `codigoProducto` varchar(45) NOT NULL,
  `codigoRemision` int(11) NOT NULL,
  `Cantidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Documento` varchar(30) NOT NULL,
  `NombreCompleto` varchar(45) NOT NULL,
  `Direccion` varchar(40) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Cargo_codigoCargo` int(11) NOT NULL,
  `EPS_idEPS` int(11) NOT NULL,
  `ARL_idARL` int(11) NOT NULL,
  `AFP_idAFP` int(11) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Documento`, `NombreCompleto`, `Direccion`, `Telefono`, `Correo`, `FechaNacimiento`, `Cargo_codigoCargo`, `EPS_idEPS`, `ARL_idARL`, `AFP_idAFP`, `visibilidad`) VALUES
('1012410133', 'LOPEZ RICARDO', 'Calle 62B sur No. 87N-21 ', '7848377', 'jlcanchon@misena.edu.co', '1994-04-05', 1, 1, 1, 1, 1),
('1020831720', 'Jorge luis canchon espinosa', 'Kr 6a n 188 c 36 INT 1', '5267278', 'jlcanchon@misena.edu.co', '1998-04-06', 1, 1, 1, 1, 1),
('1074616890', 'PRIETO CRISTIAN YESID', ' Cra 1 No. 83-23 ', '3016799658', 'NULL', '1998-01-02', 4, 1, 1, 1, 1),
('1084576463', 'LOPEZ COLLAZOS DILBER ANDRES', ' Calle 23B # 97-18 ', '3019419', 'jlcanchon@misena.edu.co', '1987-09-16', 1, 1, 1, 1, 1),
('1111785903', 'MINOTTA RENTERIA JOHAN ANDRES', 'NULL', 'NULL', 'NULL', '1991-08-22', 5, 2, 1, 2, 1),
('12345', 'Bryan Steven Canchon', 'kr 6a n188 c36 int1', '3125111218', 'jlcanchon@misena.edu.co', '1998-04-06', 1, 1, 1, 1, 1),
('15648017', 'RIVERO MIRANDA MAURICIO JOSE', ' Cra 79 D # 58 C -27 Sur ', '317 512 15 89', 'NULL', '1983-05-12', 5, 2, 1, 1, 1),
('39016339', 'GOMEZ ORTIZ NEYDIS', ' Cra. 53C # 134-29 Int. 6 Ap 303 ', '3014011', 'jlcanchon@misena.edu.co', '1973-12-28', 1, 4, 1, 2, 1),
('79780450', 'ROMERO VELA FLORESMIRO', ' Cra. 53C # 134-29 Int. 6 Ap 303 ', '3014011', 'NULL', '1974-06-30', 2, 2, 1, 3, 1),
('80052388', 'PARDO JIMENEZ HERNANDO ANDRES', ' Calle 147A No 50-83 ', '3033239', 'NULL', '1980-11-24', 2, 5, 1, 3, 1),
('80878336', 'PARDO BALLESTEROS DANIEL ORLANDO', ' Calle 95B Sur No. 14C-10 ', 'NULL', 'NULL', '1983-12-13', 5, 3, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `idEPS` int(11) NOT NULL,
  `nombreEPS` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`idEPS`, `nombreEPS`, `visibilidad`) VALUES
(1, 'Cafesalud', 1),
(2, 'Compensar', 1),
(3, 'Coomeva', 1),
(4, 'Eps Sanitas', 1),
(5, 'Famisanar', 1),
(6, 'pruebas', 1),
(7, 'j', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `idObra` varchar(15) NOT NULL,
  `contratante` varchar(45) NOT NULL,
  `nombreObra` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1',
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`idObra`, `contratante`, `nombreObra`, `visibilidad`, `fechaInicio`, `fechaFin`) VALUES
('0001', 'DIEGO FERNANDO', 'MORARI', 1, '2017-06-01', '2017-06-15'),
('1020824740', 'Bryan  stiven canchon', 'HOTEL CITY EXPRESS', 0, '2017-06-08', '2017-08-06'),
('15_137', 'OMEGA INGENIEROS', 'HOTEL CITY EXPRESS', 1, '2017-05-02', '2017-05-02'),
('16_229', 'UNIVERSIDAD JAVERIANA', 'CAMPUS UNVIERSITARIO', 1, NULL, NULL),
('16_230', 'NULL', 'BRISSA ATLANTIS', 1, NULL, NULL),
('16_231', 'NULL', 'BRISSA ATLANTIS CLOSET DE LINOS', 1, NULL, NULL),
('16_232', 'NULL', 'BRISSA TITAN', 1, NULL, NULL),
('16_233', 'NULL', 'MINISTERIO DEL INTERIOR ', 1, NULL, NULL),
('16_316', 'TDI SISTEMAS', 'CAV CLARO BMANGA', 1, NULL, NULL),
('16_333', 'RUGELES DURAN ARQUITECTOS', 'BANCO PICHINCHA B/QUILA', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendecompra`
--

CREATE TABLE `ordendecompra` (
  `idCodigoOrden` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Item` varchar(30) NOT NULL,
  `subTotal` double NOT NULL,
  `valorTotal` double NOT NULL,
  `IVA` double NOT NULL,
  `Cliente_codigoCliente` int(11) NOT NULL,
  `SolicitudDeMaterial_idCodigoSolicitud` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(45) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(45) NOT NULL,
  `valorUnitario` double NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `cantidad`, `unidad`, `valorUnitario`, `visibilidad`) VALUES
('1', 'cable', 20, 'm', 50, 1),
('10', 'JORGECANCHON', 3, 'ML', 12.5, 1),
('101', 'JORGECANCHON', 10, 'UND', 12.5, 1),
('11', 'JORGECANCHON', 4, 'ML', 12.5, 1),
('12', 'JORGECANCHON', 5, 'UND', 12.5, 1),
('13', 'JORGECANCHON', 6, 'UND', 12.5, 1),
('14', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('15', 'JORGECANCHON', 3, 'UND', 12.5, 1),
('16', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('17', 'JORGECANCHON', 1, 'UND', 12.5, 1),
('18', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('19', 'JORGECANCHON', 3, 'UND', 12.5, 1),
('2', 'JORGECANCHON', 1, 'm', 12.5, 1),
('20', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('21', 'JORGECANCHON', 5, 'UND', 12.5, 1),
('22', 'JORGECANCHON', 6, 'UND', 12.5, 1),
('23', 'JORGECANCHON', 7, 'UND', 12.5, 1),
('24', 'JORGECANCHON', 5, 'm', 12.5, 1),
('25', 'JORGECANCHON', 3, 'm', 12.5, 1),
('26', 'JORGECANCHON', 2, 'm', 12.5, 1),
('27', 'JORGECANCHON', 2, 'm', 12.5, 1),
('28', 'JORGECANCHON', 1, 'UND', 12.5, 1),
('29', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('3', 'JORGECANCHON', 1, 'UND', 12.5, 1),
('30', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('31', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('32', 'JORGECANCHON', 3, 'UND', 12.5, 1),
('33', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('34', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('35', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('36', 'JORGECANCHON', 5, 'UND', 12.5, 1),
('37', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('38', 'JORGECANCHON', 1, 'UND', 12.5, 1),
('39', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('4', 'JORGECANCHON', 1, 'm', 12.5, 1),
('40', 'JORGECANCHON', 3, 'm', 12.5, 1),
('41', 'JORGECANCHON', 4, 'UND', 12.5, 1),
('42', 'JORGECANCHON', 5, 'UND', 12.5, 1),
('43', 'JORGECANCHON', 6, 'UND', 12.5, 1),
('44', 'JORGECANCHON', 3, 'UND', 12.5, 1),
('5', 'JORGECANCHON', 3, '', 12.5, 1),
('555', 'JORGECANCHON', 2, 'm', 15, 1),
('6', 'JORGECANCHON', 3, 'UND', 12.5, 1),
('7', 'JORGECANCHON', 2, 'UND', 12.5, 1),
('8', 'JORGECANCHON', 1, 'ML', 12.5, 1),
('9', 'JORGECANCHON', 2, 'ML', 12.5, 1);

--
-- Disparadores `producto`
--
DELIMITER $$
CREATE TRIGGER `promedioProducto` BEFORE UPDATE ON `producto` FOR EACH ROW BEGIN
IF NEW.valorUnitario > 0 THEN
             SET NEW.valorUnitario=((OLD.valorUnitario+NEW.valorUnitario)/2);
         END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nombreProveedor` varchar(45) NOT NULL,
  `NIT` varchar(35) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `contactoVenta` varchar(45) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `celular` varchar(30) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nombreProveedor`, `NIT`, `direccion`, `telefono`, `contactoVenta`, `correo`, `celular`, `visibilidad`) VALUES
('cableas', '1234', 'kr 6a n188 c36 int1', '3112711335', 'Bryan canchon', 'jlcanchon@misnea.edu.co', '3212314421', 1),
('Proveedor', '12345', 'cll31s', '4354636', 'hgerg', 'jorge@gmail.com', '43125513', 0),
('tuboas', '830510216-3', 'kr 6a n188 c36 int1', '3112711339', 'Bryan canchon', 'jlcanchon@misnea.edu.co', '3212314421', 1),
('astuas', '900013663-4', 'kr 6a n188 c36 int1', '3112711335', 'Bryan canchon', 'jlcanchon@misnea.edu.co', '3212314421', 1),
('cintA', '900023663-4', 'kr 6a n188 c36 int1', '3112711335', 'Bryan canchon', 'jlcanchon@misnea.edu.co', '3212314421', 1),
('lapizas', '900242806-6', 'kr 6a n188 c36 int1', '3112711335', 'Bryan canchon', 'jlcanchon@misnea.edu.co', '3212314421', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_producto`
--

CREATE TABLE `proveedor_producto` (
  `Producto_codigoProducto` varchar(45) NOT NULL,
  `Proveedor_NIT` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor_producto`
--

INSERT INTO `proveedor_producto` (`Producto_codigoProducto`, `Proveedor_NIT`) VALUES
('11', '1234'),
('13', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisionmaterial`
--

CREATE TABLE `remisionmaterial` (
  `idRemision` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Item` varchar(30) NOT NULL,
  `codigoProducto` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` double NOT NULL,
  `valorTotal` double NOT NULL,
  `entregadoPor` varchar(45) NOT NULL,
  `recibidoPor` varchar(45) DEFAULT NULL,
  `OrdenDeCompra_idCodigoOrden` int(11) NOT NULL,
  `Cliente_codigoCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `visibilidad` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombre`, `visibilidad`) VALUES
(1, 'Gerente', 1),
(2, 'Ingeniero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituddematerial`
--

CREATE TABLE `solicituddematerial` (
  `idSolicitud` int(11) NOT NULL,
  `codigoCliente` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `codDocumento` varchar(30) NOT NULL,
  `codigoObra` varchar(15) NOT NULL,
  `observaciones` text NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicituddematerial`
--

INSERT INTO `solicituddematerial` (`idSolicitud`, `codigoCliente`, `fecha`, `codDocumento`, `codigoObra`, `observaciones`, `visibilidad`) VALUES
(1, 1, '2016-12-06 22:34:34', '80052388', '15_137', '', 1),
(2, 1, '2016-12-06 22:34:34', '80052388', '16_230', '', 1),
(3, 1, '2016-12-06 22:34:34', '80052388', '16_232', '', 1),
(4, 1, '2016-12-06 22:34:34', '80052388', '16_232', '', 1),
(5, 1, '2016-12-06 22:34:34', '80052388', '16_333', '', 1),
(6, 1, '2017-06-18 03:56:29', '1020831720', '0001', 'Ninguna\r\n       \r\n      ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_tramite`
--

CREATE TABLE `solicitud_tramite` (
  `codigoTramite` int(11) NOT NULL,
  `codigoSolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitud_tramite`
--

INSERT INTO `solicitud_tramite` (`codigoTramite`, `codigoSolicitud`) VALUES
(3, 6),
(1, 1),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramiteproducto`
--

CREATE TABLE `tramiteproducto` (
  `idTramite` int(11) NOT NULL,
  `nombreProducto` text NOT NULL,
  `unidad` varchar(80) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tramiteproducto`
--

INSERT INTO `tramiteproducto` (`idTramite`, `nombreProducto`, `unidad`, `cantidad`, `fechaIngreso`, `visibilidad`) VALUES
(1, 'Prueba', 'm', 10, '2017-05-26 18:28:20', 1),
(2, 'Prueba2', 'm', 10, '2017-05-26 18:28:20', 1),
(3, '1', '1', 1, '2017-06-18 03:56:33', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(80) NOT NULL,
  `Empleado_Documento` varchar(30) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `codRol` int(11) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Contrasena`, `Empleado_Documento`, `time`, `codRol`, `visibilidad`) VALUES
(1, '1020831720', '$2y$10$1LcQ3qqJZgtMc.e7VdeqT.owlT5Y0f8ltofsWaXAEYR2R7DSvpS.e', '1020831720', '2017-05-05 13:36:17', 1, 1),
(2, '12345', '$2y$10$alZKzADGRFGvFrP7qsyeZuLF9SFBGU8o9aWSme0RJWsDsGHiFY3v2', '12345', '2017-06-01 02:24:57', 2, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `viewconsultaempleado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `viewconsultaempleado` (
`Documento` varchar(30)
,`Nombre` varchar(45)
,`Direccion` varchar(40)
,`Telefono` varchar(30)
,`Correo` varchar(45)
,`FechaNacimiento` date
,`Cargo` varchar(100)
,`EPS` varchar(45)
,`ARL` varchar(45)
,`AFP` varchar(45)
,`visibilidad` tinyint(4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `viewreporteproducto`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `viewreporteproducto` (
`idProducto` varchar(45)
,`nombreProducto` varchar(100)
,`cantidad` int(11)
,`unidad` varchar(45)
,`valorUnitario` double
);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afp`
--
ALTER TABLE `afp`
  ADD PRIMARY KEY (`idAFP`);

--
-- Indices de la tabla `arl`
--
ALTER TABLE `arl`
  ADD PRIMARY KEY (`idARL`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codigoCargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD KEY `codigoProducto` (`codigoProducto`),
  ADD KEY `codigoRemision` (`codigoRemision`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Documento`),
  ADD KEY `Cargo_codigoCargo` (`Cargo_codigoCargo`),
  ADD KEY `EPS_idEPS` (`EPS_idEPS`),
  ADD KEY `ARL_idARL` (`ARL_idARL`),
  ADD KEY `AFP_idAFP` (`AFP_idAFP`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`idEPS`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`idObra`);

--
-- Indices de la tabla `ordendecompra`
--
ALTER TABLE `ordendecompra`
  ADD PRIMARY KEY (`idCodigoOrden`),
  ADD KEY `Cliente_codigoCliente` (`Cliente_codigoCliente`),
  ADD KEY `SolicitudDeMaterial_idCodigoSolicitud` (`SolicitudDeMaterial_idCodigoSolicitud`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`NIT`);

--
-- Indices de la tabla `proveedor_producto`
--
ALTER TABLE `proveedor_producto`
  ADD PRIMARY KEY (`Producto_codigoProducto`,`Proveedor_NIT`),
  ADD KEY `fk_proveedor_producto_Proveedor1_idx` (`Proveedor_NIT`);

--
-- Indices de la tabla `remisionmaterial`
--
ALTER TABLE `remisionmaterial`
  ADD PRIMARY KEY (`idRemision`),
  ADD KEY `OrdenDeCompra_idCodigoOrden` (`OrdenDeCompra_idCodigoOrden`),
  ADD KEY `Cliente_codigoCliente` (`Cliente_codigoCliente`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `solicituddematerial`
--
ALTER TABLE `solicituddematerial`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `codigoCliente` (`codigoCliente`),
  ADD KEY `codigoObra` (`codigoObra`),
  ADD KEY `codDocumento` (`codDocumento`);

--
-- Indices de la tabla `solicitud_tramite`
--
ALTER TABLE `solicitud_tramite`
  ADD KEY `codigoTramite` (`codigoTramite`),
  ADD KEY `codigoSolicitud` (`codigoSolicitud`);

--
-- Indices de la tabla `tramiteproducto`
--
ALTER TABLE `tramiteproducto`
  ADD PRIMARY KEY (`idTramite`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `codRol` (`codRol`),
  ADD KEY `Empleado_Documento` (`Empleado_Documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afp`
--
ALTER TABLE `afp`
  MODIFY `idAFP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `arl`
--
ALTER TABLE `arl`
  MODIFY `idARL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `codigoCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `idEPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `remision_ibfk_1` FOREIGN KEY (`codigoProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `remision_ibfk_2` FOREIGN KEY (`codigoRemision`) REFERENCES `remisionmaterial` (`idRemision`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`Cargo_codigoCargo`) REFERENCES `cargo` (`codigoCargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`EPS_idEPS`) REFERENCES `eps` (`idEPS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`ARL_idARL`) REFERENCES `arl` (`idARL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_ibfk_4` FOREIGN KEY (`AFP_idAFP`) REFERENCES `afp` (`idAFP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedor_producto`
--
ALTER TABLE `proveedor_producto`
  ADD CONSTRAINT `fk_proveedor_producto_Producto1` FOREIGN KEY (`Producto_codigoProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proveedor_producto_Proveedor1` FOREIGN KEY (`Proveedor_NIT`) REFERENCES `proveedor` (`NIT`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicituddematerial`
--
ALTER TABLE `solicituddematerial`
  ADD CONSTRAINT `solicituddemateriao_ibfk_1` FOREIGN KEY (`codigoObra`) REFERENCES `obra` (`idObra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `solicituddemateriao_ibfk_2` FOREIGN KEY (`codDocumento`) REFERENCES `empleado` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud_tramite`
--
ALTER TABLE `solicitud_tramite`
  ADD CONSTRAINT `fk_codigoSolicitud` FOREIGN KEY (`codigoSolicitud`) REFERENCES `solicituddematerial` (`idSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_codigoTrami` FOREIGN KEY (`codigoTramite`) REFERENCES `tramiteproducto` (`idTramite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Empleado_Documento`) REFERENCES `empleado` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`codRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
DELIMITER $$
--
-- Procedimientos
--
CREATE PROCEDURE `ConsultaEmpleado` (`doc` VARCHAR(30), `a` INT(11), `b` INT(11))  BEGIN
select empleado.Documento,empleado.visibilidad, empleado.NombreCompleto as Nombre,
 empleado.Direccion, empleado.Telefono, empleado.Correo, empleado.FechaNacimiento, 
cargo.NombreCargo as Cargo, eps.nombreEPS as EPS, arl.nombreARL as ARL, afp.nombreAFP as AFP
from empleado  
inner join cargo on cargo.codigoCargo=empleado.Cargo_codigoCargo 
inner join eps on eps.idEPS=empleado.EPS_idEPS
inner join arl on arl.idARL=empleado.ARL_idARL
inner join afp on afp.idAFP=empleado.AFP_idAFP 
where empleado.visibilidad=1  AND Documento<>doc order by Nombre asc LIMIT a,b;
END$$

CREATE PROCEDURE `ingresarProducto` (`codP` VARCHAR(45), `nombre` VARCHAR(100), `cantidad` INT(11), `unidad` VARCHAR(45), `valorUnitario` DOUBLE)  BEGIN
INSERT INTO producto(idProducto,nombreProducto,cantidad,unidad,valorUnitario)
VALUES (codp,nombre,cantidad,unidad,valorUnitario);
END$$

CREATE PROCEDURE `modificarAFP` (`nombre` VARCHAR(45), `codigo` INT(11))  BEGIN
UPDATE afp
SET nombreAFP=nombre
WHERE idAFP=codigo;
END$$

CREATE PROCEDURE `modificarARL` (`nombre` VARCHAR(45), `codigo` INT(11))  BEGIN
UPDATE arl
SET nombreARL=nombre
WHERE idARL=codigo;
END$$

CREATE PROCEDURE `modificarCargo` (`nombre` VARCHAR(100), `descripcion` TEXT, `codigo` INT(11))  BEGIN
UPDATE cargo
SET NombreCargo=nombre,
descripcion=Descripcion
WHERE codigoCargo=codigo;
END$$

CREATE PROCEDURE `modificarCliente` (`nombre` VARCHAR(45), `codigo` INT(11), `tele` VARCHAR(30), `dire` VARCHAR(40))  BEGIN
UPDATE cliente
SET nombreCliente=nombre,
direccion=dire,
telefono=tele
WHERE codigoCliente=codigo;
END$$

CREATE PROCEDURE `modificarEPS` (`nombre` VARCHAR(45), `codigo` INT(11))  BEGIN
UPDATE eps
SET nombreEPS=nombre
WHERE idEPS=codigo;
END$$

DELIMITER ;

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Estructura para la vista `viewconsultaempleado`
--
DROP TABLE IF EXISTS `viewconsultaempleado`;

CREATE VIEW `viewconsultaempleado`  AS  select `empleado`.`Documento` AS `Documento`,`empleado`.`NombreCompleto` AS `Nombre`,`empleado`.`Direccion` AS `Direccion`,`empleado`.`Telefono` AS `Telefono`,`empleado`.`Correo` AS `Correo`,`empleado`.`FechaNacimiento` AS `FechaNacimiento`,`cargo`.`NombreCargo` AS `Cargo`,`eps`.`nombreEPS` AS `EPS`,`arl`.`nombreARL` AS `ARL`,`afp`.`nombreAFP` AS `AFP`,`empleado`.`visibilidad` AS `visibilidad` from ((((`empleado` join `cargo` on((`cargo`.`codigoCargo` = `empleado`.`Cargo_codigoCargo`))) join `eps` on((`eps`.`idEPS` = `empleado`.`EPS_idEPS`))) join `arl` on((`arl`.`idARL` = `empleado`.`ARL_idARL`))) join `afp` on((`afp`.`idAFP` = `empleado`.`AFP_idAFP`))) where (`empleado`.`visibilidad` = 1) order by `empleado`.`NombreCompleto` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `viewreporteproducto`
--
DROP TABLE IF EXISTS `viewreporteproducto`;

CREATE VIEW `viewreporteproducto`  AS  select `producto`.`idProducto` AS `idProducto`,`producto`.`nombreProducto` AS `nombreProducto`,`producto`.`cantidad` AS `cantidad`,`producto`.`unidad` AS `unidad`,`producto`.`valorUnitario` AS `valorUnitario` from `producto` order by `producto`.`idProducto` ;

