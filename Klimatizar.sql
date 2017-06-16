-- phpMyAdmin SQL Dumpa
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2016 a las 12:16:08
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `klimatizar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afp`
--

CREATE TABLE `afp` (
  `idAFP` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica la AFP',
  `nombreAFP` varchar(45) NOT NULL COMMENT 'Nombre de la AFP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afp`
--

INSERT INTO `afp` (`idAFP`, `nombreAFP`) VALUES
(1, 'Porvenir'),
(2, 'Proteccion'),
(3, 'Colfondos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arl`
--

CREATE TABLE `arl` (
  `idARL` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica el ARL',
  `nombreARL` varchar(45) NOT NULL COMMENT 'Nombre de la ARL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `arl`
--

INSERT INTO `arl` (`idARL`, `nombreARL`) VALUES
(1, 'Sura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codigoCargo` int(11) NOT NULL COMMENT 'codigo con el cual se identifica el cargo del empleado',
  `NombreCargo` varchar(45) NOT NULL COMMENT 'Nombre del cargo con el que se va a desempe├▒ar el empleado en la empresa',
  `Descripcion` varchar(100) NOT NULL COMMENT 'Peque├▒a descripcion de las funciones del empleado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`codigoCargo`, `NombreCargo`, `Descripcion`) VALUES
(1, 'Gerente A/tiva y Financiera ', 'NULL'),
(2, 'Ingeniero de Proyectos', 'NULL'),
(3, 'Auxiliar de Refregeracion', 'NULL'),
(4, 'Auxiliar de Obra', 'NULL'),
(5, 'Tecnico Refrieracion', 'NULL'),
(6, 'Tecnico Refrigeracion', 'NULL'),
(8, 'Gerente A/tiva y Financiera ', 'NULL'),
(9, 'Ingeniero de Proyectos', 'NULL'),
(10, 'Auxiliar de Refregeracion', 'NULL'),
(11, 'Auxiliar de Obra', 'NULL'),
(12, 'Tecnico Refrieracion', 'NULL'),
(13, 'Tecnico Refrigeracion', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigoCliente` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica el cliente\n',
  `nombreCliente` varchar(45) NOT NULL COMMENT 'Nombre del cliente\n',
  `direccion` varchar(40) DEFAULT NULL COMMENT 'Direccion del cliente\n',
  `telefono` varchar(30) NOT NULL COMMENT 'Telefono del cliente\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codigoCliente`, `nombreCliente`, `direccion`, `telefono`) VALUES
(1, 'KLIMATIZAR COLOMBIA SAS', 'CRA 46 No.131-22 P3', '2592272/2592277 '),
(2, 'RUGELES DURAN ARQUITECTOS', 'NULL', 'NULL'),
(3, 'COTEL S.A', 'carrera 49 102a -43', '6325990');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigoorden`
--

CREATE TABLE `codigoorden` (
  `idCodigoOrden` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la orden de compra'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigoorden`
--

INSERT INTO `codigoorden` (`idCodigoOrden`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigoremision`
--

CREATE TABLE `codigoremision` (
  `idCodigoRemision` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la remision del material'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigoremision`
--

INSERT INTO `codigoremision` (`idCodigoRemision`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigosolicitud`
--

CREATE TABLE `codigosolicitud` (
  `idCodigoSolicitud` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la solicitud'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigosolicitud`
--

INSERT INTO `codigosolicitud` (`idCodigoSolicitud`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigosolicitudcliente`
--

CREATE TABLE `codigosolicitudcliente` (
  `Cliente_codigoCliente` int(11) NOT NULL COMMENT 'Codigo con el que se identifica el cliente '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Documento` varchar(30) NOT NULL COMMENT 'Numero de identificacion ',
  `NombreCompleto` varchar(45) NOT NULL COMMENT 'Nombre completo del empleado',
  `Direccion` varchar(40) NOT NULL COMMENT 'Direccion de residencia del empleado',
  `Telefono` varchar(30) NOT NULL COMMENT 'N├║mero telefonico de contacto\n',
  `Correo` varchar(45) DEFAULT NULL COMMENT 'Medio para enviar y recibir mensajes\ncon el empleado',
  `FechaNacimiento` date NOT NULL COMMENT 'Fecha de nacimiento del empleado',
  `Cargo_codigoCargo` int(11) NOT NULL COMMENT 'C├│digo de identificaci├│n del puesto del empleado \n',
  `EPS_idEPS` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica la EPS',
  `ARL_idARL` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica la ARL',
  `AFP_idAFP` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica la AFP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Documento`, `NombreCompleto`, `Direccion`, `Telefono`, `Correo`, `FechaNacimiento`, `Cargo_codigoCargo`, `EPS_idEPS`, `ARL_idARL`, `AFP_idAFP`) VALUES
('1012410133', 'LOPEZ RICARDO', ' Calle 62B sur No. 87N-21 ', '7848377', 'NULL', '1994-04-05', 4, 5, 1, 2),
('1022984148', 'AVILA DUARTE CRISTIAN EFREN', ' Cra 14T ', '2674227', 'NULL', '1993-02-08', 6, 5, 1, 1),
('1074616890', 'PRIETO CRISTIAN YESID', ' Cra 1 No. 83-23 ', '3016799658', 'NULL', '1998-01-02', 4, 1, 1, 1),
('1084576463', 'GUARACA COLLAZOS DILBER ANDRES', ' Calle 23B # 97-18 ', '3019419', 'NULL', '1987-09-16', 5, 1, 1, 1),
('1111785903', 'MINOTTA RENTERIA JOHAN ANDRES', 'NULL', 'NULL', 'NULL', '1991-08-22', 5, 2, 1, 2),
('15648017', 'RIVERO MIRANDA MAURICIO JOSE', ' Cra 79 D # 58 C -27 Sur ', '317 512 15 89', 'NULL', '1983-05-12', 5, 2, 1, 1),
('39016339', 'GOMEZ ORTIZ NEYDIS', ' Cra. 53C # 134-29 Int. 6 Ap 303 ', '3014011', 'NULL', '1973-12-28', 1, 4, 1, 2),
('79780450', 'ROMERO VELA FLORESMIRO', ' Cra. 53C # 134-29 Int. 6 Ap 303 ', '3014011', 'NULL', '1974-06-30', 2, 2, 1, 3),
('80052388', 'PARDO JIMENEZ HERNANDO ANDRES', ' Calle 147A No 50-83 ', '3033239', 'NULL', '1980-11-24', 2, 5, 1, 3),
('80878336', 'PARDO BALLESTEROS DANIEL ORLANDO', ' Calle 95B Sur No. 14C-10 ', 'NULL', 'NULL', '1983-12-13', 5, 3, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `idEPS` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica la EPS\n',
  `nombreEPS` varchar(45) NOT NULL COMMENT 'Nombre de la EPS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`idEPS`, `nombreEPS`) VALUES
(1, 'Cafesalud'),
(2, 'Compensar'),
(3, 'Coomeva'),
(4, 'Eps Sanitas'),
(5, 'Famisanar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichatecnica`
--

CREATE TABLE `fichatecnica` (
  `codigoFicha` int(11) NOT NULL COMMENT 'C├│digo con el cual se identifica la ficha t├®cnica\n',
  `descripcion` varchar(100) NOT NULL COMMENT 'Breve descripci├│n del proyecto\n',
  `fechaInicio` date NOT NULL COMMENT 'Fecha en la que inici├│ el proyecto\n',
  `fechaFin` date NOT NULL COMMENT 'Fecha en la que finaliz├│ el proyecto\n',
  `duracion` varchar(45) NOT NULL COMMENT 'Duraci├│n del proyecto\n',
  `valorTotalProyecto` double NOT NULL COMMENT 'Valor total del proyecto\n',
  `Obra_codigoObra` varchar(45) NOT NULL COMMENT 'C├│digo con el cual se identifica la obra',
  `Empleado_Documento` varchar(30) NOT NULL COMMENT 'C├│digo de identificaci├│n del empleado \n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fichatecnica`
--

INSERT INTO `fichatecnica` (`codigoFicha`, `descripcion`, `fechaInicio`, `fechaFin`, `duracion`, `valorTotalProyecto`, `Obra_codigoObra`, `Empleado_Documento`) VALUES
(1, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2015-08-01', '2015-10-01', '2 meses', 20000000, '15_137', ''),
(2, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-06-16', '2016-10-16', '4 meses', 30000000, '16_316', ''),
(3, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2014-02-16', '2014-04-16', '2 meses', 25000000, '16_333', ''),
(4, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2015-03-22', '2015-06-22', '3 meses', 15000000, '16_229', ''),
(5, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-08-16', '2016-10-16', '2 meses', 18000000, '16_233', ''),
(6, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-10-06', '2016-12-06', '2 meses', 32000000, '16_232', ''),
(7, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-12-19', '2017-01-19', '1 mes', 32000000, '16_333', ''),
(8, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2017-02-20', '2017-04-20', '2 meses', 20000000, '16_231', ''),
(9, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2017-04-16', '2017-07-16', '3 meses', 23900000, '16_230', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movinventario`
--

CREATE TABLE `movinventario` (
  `idTab_inventario` int(11) NOT NULL,
  `existencia` varchar(45) NOT NULL,
  `Proveedor_NIT` varchar(35) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipoMovimiento` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `documentoEmple` varchar(45) NOT NULL,
  `remisionNO` varchar(45) NOT NULL,
  `Producto_codigoProducto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `codigoObra` varchar(45) NOT NULL COMMENT 'C├│digo con el cual se identifica la obra',
  `contratante` varchar(45) NOT NULL COMMENT 'Nombre contratante',
  `nombreObra` varchar(45) NOT NULL COMMENT 'Nombre con el cual se identifica la obra',
  `Producto_codigoProducto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`codigoObra`, `contratante`, `nombreObra`, `Producto_codigoProducto`) VALUES
('15_137', 'OMEGA INGENIEROS', 'HOTEL CITY EXPRESS', ''),
('16_229', 'UNIVERSIDAD JAVERIANA', 'CAMPUS UNVIERSITARIO', ''),
('16_230', 'NULL', 'BRISSA ATLANTIS', ''),
('16_231', 'NULL', 'BRISSA ATLANTIS CLOSET DE LINOS', ''),
('16_232', 'NULL', 'BRISSA TITAN', ''),
('16_233', 'NULL', 'MINISTERIO DEL INTERIOR	', ''),
('16_316', 'TDI SISTEMAS', 'CAV CLARO BMANGA', ''),
('16_333', 'RUGELES DURAN ARQUITECTOS', 'BANCO PICHINCHA B/QUILA', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendecompra`
--

CREATE TABLE `ordendecompra` (
  `idCodigoOrden` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la orden de compra',
  `Fecha` date NOT NULL COMMENT 'Fecha en la que hace la orden de compra\n',
  `Item` varchar(30) NOT NULL COMMENT 'Enumeracion dentro de la orden de compra\n',
  `unidad` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `precioUnitario` double NOT NULL,
  `subTotal` double NOT NULL COMMENT 'Valor unitario por la cantidad',
  `IVA` double NOT NULL COMMENT 'Impuesto valor agregado',
  `valorTotal` double NOT NULL COMMENT 'Valor total del producto',
  `AutorizadoPor_EmpleadoDocumento` varchar(30) NOT NULL,
  `Cliente_codigoCliente` int(11) NOT NULL COMMENT 'Codigo con el cual se identifica el cliente',
  `SolicitudDeMaterial_CodigoSolicitud_idCodigoSolicitud` int(11) NOT NULL,
  `Proveedor_NIT` varchar(35) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordendecompra`
--

INSERT INTO `ordendecompra` (`idCodigoOrden`, `Fecha`, `Item`, `unidad`, `cantidad`, `precioUnitario`, `subTotal`, `IVA`, `valorTotal`, `AutorizadoPor_EmpleadoDocumento`, `Cliente_codigoCliente`, `SolicitudDeMaterial_CodigoSolicitud_idCodigoSolicitud`, `Proveedor_NIT`, `estado`) VALUES
(2, '2015-03-26', '1', 'm', '2', 40000, 80000, 12800, 92800, '80052388', 1, 0, '', ''),
(3, '2015-12-09', '1', 'm', '2', 40000, 80000, 12800, 92800, '80052388', 1, 0, '', ''),
(4, '2016-03-22', '1', 'UND', '4', 25000, 100000, 16000, 116000, '80052388', 1, 0, '', ''),
(5, '2016-05-14', '1', 'ML', '60', 43000, 2580000, 412800, 2992800, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '10', 'UND', '14', 1100, 15400, 2464, 17864, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '11', 'UND', '20', 1050, 21000, 3360, 24360, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '12', 'UND', '14', 900, 12600, 2016, 14616, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '13', 'UND', '6', 1000, 6000, 960, 6960, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '14', 'UND', '6', 700, 4200, 672, 4872, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '15', 'UND', '6', 650, 3900, 624, 4524, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '16', 'UND', '6', 800, 4800, 768, 5568, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '17', 'UND', '50', 8000, 400000, 64000, 464000, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '18', 'TIRA', '32', 4500, 144000, 23040, 167040, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '19', 'TIRA', '23', 3000, 69000, 11040, 80040, '80878336', 1, 0, '', ''),
(2, '2015-03-26', '2', 'galon', ' 1/2', 52000, 26000, 4160, 30160, '80052388', 1, 0, '', ''),
(3, '2015-12-09', '2', 'galon', ' 1/2', 52000, 26000, 4160, 30160, '80052388', 1, 0, '', ''),
(4, '2016-03-22', '2', 'galon', ' 1/2', 52000, 26000, 4160, 30160, '80052388', 1, 0, '', ''),
(5, '2016-05-14', '2', 'ML', '60', 39000, 2340000, 374400, 2714400, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '20', 'TIRA', '32', 4200, 134400, 21504, 155904, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '21', 'TIRA', '23', 3500, 80500, 12880, 93380, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '3', 'ML', '42', 41000, 1722000, 275520, 1997520, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '4', 'ML', '42', 36000, 1512000, 241920, 1753920, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '5', 'UND', '8', 700, 5600, 896, 6496, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '6', 'UND', '8', 600, 4800, 768, 5568, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '7', 'UND', '8', 840, 6720, 1075, 7795, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '8', 'UND', '8', 650, 5200, 832, 6032, '80878336', 1, 0, '', ''),
(5, '2016-05-14', '9', 'UND', '20', 1200, 24000, 3840, 27840, '80878336', 1, 0, '', ''),
(1, '2016-08-22', '1', 'UND', '1', 75000, 75000, 12000, 87000, '80052388', 3, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigoProducto` varchar(45) NOT NULL COMMENT 'C├│digo  por el que se identifican el producto\n',
  `nombreProducto` varchar(100) NOT NULL COMMENT 'Nombre por el cual conocemos del producto\n',
  `detalleProducto` varchar(45) NOT NULL COMMENT 'Peque├▒a descripci├│n del producto\n',
  `unidad` varchar(45) NOT NULL,
  `valorUnitario` double NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigoProducto`, `nombreProducto`, `detalleProducto`, `unidad`, `valorUnitario`, `cantidad`) VALUES
('1', 'CABLE AWG No. 14 THHN (VARIOS COLORES) VIENE POR ROLLOS DE 100 MTS 7 HILOS ', 'NULL', '', 0, 0),
('10', '"CODOS PVC CONDUIT DE 1/2"""', 'NULL', '', 0, 0),
('11', '"CODOS PVC CONDUIT DE 3/4"""', 'NULL', '', 0, 0),
('12', '"ADAPTADOR TERMINAL PVC CONDUIT DE 1/2"""', 'NULL', '', 0, 0),
('13', '"ADAPTADOR TERMINAL PVC CONDUIT DE 3/4"""', 'NULL', '', 0, 0),
('14', 'SOLDADURA LIQUIDA PVC CONDUIT x 1/4', 'NULL', '', 0, 0),
('15', '"LIMPIADOR PVC x 1/4"""', 'NULL', '', 0, 0),
('16', '"CORAZA AMERICANA DE 1/2"""', 'NULL', '', 0, 0),
('17', '"CONECTOR CURVO PARA CORAZA AMERICANA DE 1/2"" "', 'NULL', '', 0, 0),
('18', '"CONECTOR RECTO PARA CORAZA AMERICANA DE 1/2"" "', 'NULL', '', 0, 0),
('19', 'TERMINAL TIPO OJO PARA CABLE No. 16-14', 'NULL', '', 0, 0),
('2', 'CABLE AWG No. 16 THHN,', 'NULL', '', 0, 0),
('20', 'medio filtrante merk 7', 'NULL', '', 0, 0),
('21', 'desindrustante industrial para serpetin', 'NULL', '', 0, 0),
('22', 'Polifusor tuber', 'NULL', '', 0, 0),
('23', 'Filtro metalico de 18\'\' x 19\'\' x 1\'\'', 'NULL', '', 0, 0),
('24', 'TUBERIA COBRE RIGIDA 1/4 \'\'', 'NULL', '', 0, 0),
('25', 'TUBERIA COBRE RIGIDA 3/8\'\'', 'NULL', '', 0, 0),
('26', 'TUBERIA COBRE RIGIDA 1/2 \'\'', 'NULL', '', 0, 0),
('27', 'TUBERIA COBRE RIGIDA 5/8 \'\'', 'NULL', '', 0, 0),
('28', 'UNION COBRE 1/4 \'\'', 'NULL', '', 0, 0),
('29', 'UNION COBRE 3/8\'\'', 'NULL', '', 0, 0),
('3', 'AMARRES PLASTICOS NEGROS X 20 CMS ', 'NULL', '', 0, 0),
('30', 'UNION COBRE 1/2\'\'', 'NULL', '', 0, 0),
('31', 'UNION COBRE 5/8\'\'', 'NULL', '', 0, 0),
('32', 'CODO COBRE 1/4 \'\'', 'NULL', '', 0, 0),
('33', 'CODO COBRE 3/8 \'\'', 'NULL', '', 0, 0),
('34', 'CODO COBRE 1/2 \'\'', 'NULL', '', 0, 0),
('35', 'CODO COBRE 5/8 \'\'', 'NULL', '', 0, 0),
('36', 'SEMICODO COBRE 1/4 \'\'', 'NULL', '', 0, 0),
('37', 'SEMICODO COBRE 3/8 \'\'', 'NULL', '', 0, 0),
('38', 'SEMICODO COBRE 1/2 \'\'', 'NULL', '', 0, 0),
('39', 'SEMICODO COBRE 5/8 \'\'', 'NULL', '', 0, 0),
('4', '"TUBERIA PVC CONDUIT DE 1/2"""', 'NULL', '', 0, 0),
('40', 'VARILLAS DE SOLDADURA DE PLATA', 'NULL', '', 0, 0),
('41', 'RUBATEX DE 1/4\'\'', 'NULL', '', 0, 0),
('42', 'RUBATEX DE 3/8\'\'', 'NULL', '', 0, 0),
('43', 'RUBATEX DE 1/2\'\'', 'NULL', '', 0, 0),
('44', 'RUBATEX DE 5/8\'\'', 'NULL', '', 0, 0),
('5', '"TUBERIA PVC CONDUIT DE 3/4"""', 'NULL', '', 0, 0),
('6', 'CAJAS DE PASO METALICA O PLASTICA DE 15CMSX15CMSX10CMS', 'NULL', '', 0, 0),
('7', 'CAJAS DE PASO METALICA O PLASTICA DE 20CMSX20CMSX10CMS', 'NULL', '', 0, 0),
('8', '"UNION PVC CONDUIT DE 1/2"""', 'NULL', '', 0, 0),
('9', '"UNION PVC CONDUIT DE 3/4"""', 'NULL', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nombreProveedor` varchar(45) NOT NULL COMMENT 'Nombre  del Proveedor',
  `NIT` varchar(35) NOT NULL COMMENT 'Identificaci├│n del proveedor\n',
  `direccion` varchar(40) NOT NULL COMMENT 'Direccion del proveedor\n',
  `telefono` varchar(30) DEFAULT NULL COMMENT 'Numero de contacto de proveedor',
  `contactoVenta` varchar(45) NOT NULL COMMENT 'Nombre del vendedor ',
  `correo` varchar(45) DEFAULT NULL COMMENT 'Correo proveedor',
  `celular` varchar(30) NOT NULL COMMENT 'Numero de contacto del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nombreProveedor`, `NIT`, `direccion`, `telefono`, `contactoVenta`, `correo`, `celular`) VALUES
('PIPECO S.A.', '830510216-3', 'Av (Cl) 80 69-70 Bdg 35', '3116439', 'JOSE ACEVEDO', 'ventas@pipeco.com.co', 'NULL'),
('TUVALREP S.A.S', '900013663-4', 'Cra. 29 B # 79 -38', '3713386', 'EDITH ORTIZ', 'ventas6@tuvalrep.com.co', '311-4856922'),
('TRS PARTES SA', '900023663-4', 'Cra. 29 B # 79 -38', '805 0163 /805 0169', 'ING HUGO PRIETO', 'hugo.prieto@trspartes.com', '311-2236262'),
('TORNIEXITO LTDA', '900242806-6', 'Avenida 27#29-18 SUR', 'NULL', 'NULL', 'torniexito@hotmail.com  ', '3184870777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisionmaterial`
--

CREATE TABLE `remisionmaterial` (
  `idCodigoRemision` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la remision del material',
  `Fecha` date NOT NULL COMMENT 'Fecha de la remision de  material',
  `Item` varchar(30) NOT NULL COMMENT 'Enumeracion en la remision de material\n',
  `codigoProducto` int(11) NOT NULL COMMENT 'C├│digo  por el que se identifican los productos\n',
  `unidad` varchar(20) NOT NULL COMMENT 'Unidad de medida\n',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad de productos comprados\n',
  `precioUnitario` double NOT NULL COMMENT 'Precio unitario del producto',
  `valorTotal` double NOT NULL COMMENT 'Precio total de los productos\n',
  `entregadoPor` varchar(45) NOT NULL COMMENT 'Nombre de la persona que realizo la remision\n',
  `recibidoPor` varchar(45) NOT NULL COMMENT 'Nombre de la persona que recibio la remision\n',
  `OrdenDeCompra_CodigoOrden_idCodigoOrden` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la orden de compra',
  `Cliente_codigoCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `remisionmaterial`
--

INSERT INTO `remisionmaterial` (`idCodigoRemision`, `Fecha`, `Item`, `codigoProducto`, `unidad`, `cantidad`, `precioUnitario`, `valorTotal`, `entregadoPor`, `recibidoPor`, `OrdenDeCompra_CodigoOrden_idCodigoOrden`, `Cliente_codigoCliente`) VALUES
(1, '2016-03-10', '1', 22, 'UND', 1, 0, 0, 'PARDO JIMENEZ HERNANDO ANDRES', 'GOMEZ ORTIZ NEYDIS', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituddematerial`
--

CREATE TABLE `solicituddematerial` (
  `idCodigoSolicitud` int(11) NOT NULL COMMENT 'C├│digo por el cual se identifica la solicitud de material',
  `Item` varchar(30) NOT NULL COMMENT 'Codigo con el cual se identifica el item\n',
  `unidad` varchar(20) NOT NULL COMMENT 'Unidad de medida\n',
  `cantidad` varchar(50) NOT NULL COMMENT 'Cantidad de productos solicitados\n',
  `observaciones` varchar(45) NOT NULL COMMENT 'Observacion con respecto al producto \n',
  `Cliente_codigoCliente` int(11) NOT NULL,
  `Obra_codigoObra` varchar(45) NOT NULL,
  `Producto_codigoProducto` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SolicitadoPor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL COMMENT 'Llave principal con la cual se identifica la tabla usuario',
  `Usuario` varchar(50) NOT NULL COMMENT 'Cadena de caracteres que representa el nombre unico del usuario',
  `Contrasena` varchar(50) NOT NULL COMMENT 'Cadena de caracteres que representa la contrase├▒a del usuario.',
  `Empleado_Documento` varchar(30) NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Contrasena`, `Empleado_Documento`, `time`) VALUES
(4, '1020831720', '1020831720', '1012410133', '2016-11-29 07:06:05');

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
-- Indices de la tabla `codigoorden`
--
ALTER TABLE `codigoorden`
  ADD PRIMARY KEY (`idCodigoOrden`);

--
-- Indices de la tabla `codigoremision`
--
ALTER TABLE `codigoremision`
  ADD PRIMARY KEY (`idCodigoRemision`);

--
-- Indices de la tabla `codigosolicitud`
--
ALTER TABLE `codigosolicitud`
  ADD PRIMARY KEY (`idCodigoSolicitud`);

--
-- Indices de la tabla `codigosolicitudcliente`
--
ALTER TABLE `codigosolicitudcliente`
  ADD PRIMARY KEY (`Cliente_codigoCliente`),
  ADD KEY `fk_CodigoSolicitudCliente_Cliente1_idx` (`Cliente_codigoCliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Documento`,`Cargo_codigoCargo`,`EPS_idEPS`,`ARL_idARL`,`AFP_idAFP`),
  ADD KEY `fk_Empleado_Cargo_idx` (`Cargo_codigoCargo`),
  ADD KEY `fk_Empleado_EPS1_idx` (`EPS_idEPS`),
  ADD KEY `fk_Empleado_ARL1_idx` (`ARL_idARL`),
  ADD KEY `fk_Empleado_AFP1_idx` (`AFP_idAFP`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`idEPS`);

--
-- Indices de la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  ADD PRIMARY KEY (`codigoFicha`,`Obra_codigoObra`,`Empleado_Documento`),
  ADD KEY `fk_FichaTecnica_Obra1_idx` (`Obra_codigoObra`),
  ADD KEY `fk_FichaTecnica_Empleado1_idx` (`Empleado_Documento`);

--
-- Indices de la tabla `movinventario`
--
ALTER TABLE `movinventario`
  ADD PRIMARY KEY (`idTab_inventario`,`Proveedor_NIT`,`Producto_codigoProducto`),
  ADD KEY `fk_movInventario_Proveedor1_idx` (`Proveedor_NIT`),
  ADD KEY `fk_movInventario_Producto1_idx` (`Producto_codigoProducto`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`codigoObra`,`Producto_codigoProducto`),
  ADD KEY `fk_Obra_Producto1_idx` (`Producto_codigoProducto`);

--
-- Indices de la tabla `ordendecompra`
--
ALTER TABLE `ordendecompra`
  ADD PRIMARY KEY (`Cliente_codigoCliente`,`Item`,`SolicitudDeMaterial_CodigoSolicitud_idCodigoSolicitud`,`Proveedor_NIT`,`idCodigoOrden`),
  ADD KEY `fk_OrdenDeCompra_comprador1_idx` (`Cliente_codigoCliente`),
  ADD KEY `fk_OrdenDeCompra_CodigoOrden1_idx` (`idCodigoOrden`),
  ADD KEY `fk_OrdenDeCompra_SolicitudDeMaterial1_idx` (`SolicitudDeMaterial_CodigoSolicitud_idCodigoSolicitud`),
  ADD KEY `fk_OrdenDeCompra_Proveedor1_idx` (`Proveedor_NIT`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigoProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`NIT`);

--
-- Indices de la tabla `remisionmaterial`
--
ALTER TABLE `remisionmaterial`
  ADD PRIMARY KEY (`idCodigoRemision`,`Item`,`OrdenDeCompra_CodigoOrden_idCodigoOrden`,`Cliente_codigoCliente`),
  ADD KEY `fk_RemisionMaterial_OrdenDeCompra1_idx` (`OrdenDeCompra_CodigoOrden_idCodigoOrden`),
  ADD KEY `fk_RemisionMaterial_CodigoRemision1_idx` (`idCodigoRemision`),
  ADD KEY `fk_RemisionMaterial_Cliente1_idx` (`Cliente_codigoCliente`);

--
-- Indices de la tabla `solicituddematerial`
--
ALTER TABLE `solicituddematerial`
  ADD PRIMARY KEY (`idCodigoSolicitud`,`Item`,`Cliente_codigoCliente`,`Obra_codigoObra`,`Producto_codigoProducto`),
  ADD KEY `fk_SolicitudDeMaterial_CodigoSolicitud1_idx` (`idCodigoSolicitud`),
  ADD KEY `fk_SolicitudDeMaterial_Cliente1_idx` (`Cliente_codigoCliente`),
  ADD KEY `fk_SolicitudDeMaterial_Obra1_idx` (`Obra_codigoObra`,`Producto_codigoProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`,`Empleado_Documento`),
  ADD UNIQUE KEY `Usuario_UNIQUE` (`Usuario`),
  ADD KEY `fk_Usuario_Empleado1_idx` (`Empleado_Documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afp`
--
ALTER TABLE `afp`
  MODIFY `idAFP` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo con el cual se identifica la AFP', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `arl`
--
ALTER TABLE `arl`
  MODIFY `idARL` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo con el cual se identifica el ARL', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `codigoCargo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo con el cual se identifica el cargo del empleado', AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigoCliente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo con el cual se identifica el cliente\n', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `codigoorden`
--
ALTER TABLE `codigoorden`
  MODIFY `idCodigoOrden` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo por el cual se identifica la orden de compra', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `codigoremision`
--
ALTER TABLE `codigoremision`
  MODIFY `idCodigoRemision` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo por el cual se identifica la remision del material', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `codigosolicitud`
--
ALTER TABLE `codigosolicitud`
  MODIFY `idCodigoSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo por el cual se identifica la solicitud', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `codigosolicitudcliente`
--
ALTER TABLE `codigosolicitudcliente`
  MODIFY `Cliente_codigoCliente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo con el que se identifica el cliente ';
--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `idEPS` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo con el cual se identifica la EPS\n', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  MODIFY `codigoFicha` int(11) NOT NULL AUTO_INCREMENT COMMENT 'C├│digo con el cual se identifica la ficha t├®cnica\n', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `movinventario`
--
ALTER TABLE `movinventario`
  MODIFY `idTab_inventario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave principal con la cual se identifica la tabla usuario', AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `codigosolicitudcliente`
--
ALTER TABLE `codigosolicitudcliente`
  ADD CONSTRAINT `fk_CodigoSolicitudCliente_Cliente1` FOREIGN KEY (`Cliente_codigoCliente`) REFERENCES `cliente` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_Empleado_AFP1` FOREIGN KEY (`AFP_idAFP`) REFERENCES `afp` (`idAFP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_ARL1` FOREIGN KEY (`ARL_idARL`) REFERENCES `arl` (`idARL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Cargo` FOREIGN KEY (`Cargo_codigoCargo`) REFERENCES `cargo` (`codigoCargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_EPS1` FOREIGN KEY (`EPS_idEPS`) REFERENCES `eps` (`idEPS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  ADD CONSTRAINT `fk_FichaTecnica_Empleado1` FOREIGN KEY (`Empleado_Documento`) REFERENCES `empleado` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FichaTecnica_Obra1` FOREIGN KEY (`Obra_codigoObra`) REFERENCES `obra` (`codigoObra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movinventario`
--
ALTER TABLE `movinventario`
  ADD CONSTRAINT `fk_movInventario_Producto1` FOREIGN KEY (`Producto_codigoProducto`) REFERENCES `producto` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movInventario_Proveedor1` FOREIGN KEY (`Proveedor_NIT`) REFERENCES `proveedor` (`NIT`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `fk_Obra_Producto1` FOREIGN KEY (`Producto_codigoProducto`) REFERENCES `producto` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordendecompra`
--
ALTER TABLE `ordendecompra`
  ADD CONSTRAINT `fk_OrdenDeCompra_CodigoOrden1` FOREIGN KEY (`idCodigoOrden`) REFERENCES `codigoorden` (`idCodigoOrden`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrdenDeCompra_Proveedor1` FOREIGN KEY (`Proveedor_NIT`) REFERENCES `proveedor` (`NIT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrdenDeCompra_SolicitudDeMaterial1` FOREIGN KEY (`SolicitudDeMaterial_CodigoSolicitud_idCodigoSolicitud`) REFERENCES `solicituddematerial` (`idCodigoSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrdenDeCompra_comprador1` FOREIGN KEY (`Cliente_codigoCliente`) REFERENCES `cliente` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `remisionmaterial`
--
ALTER TABLE `remisionmaterial`
  ADD CONSTRAINT `fk_RemisionMaterial_Cliente1` FOREIGN KEY (`Cliente_codigoCliente`) REFERENCES `cliente` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RemisionMaterial_CodigoRemision1` FOREIGN KEY (`idCodigoRemision`) REFERENCES `codigoremision` (`idCodigoRemision`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RemisionMaterial_OrdenDeCompra1` FOREIGN KEY (`OrdenDeCompra_CodigoOrden_idCodigoOrden`) REFERENCES `ordendecompra` (`idCodigoOrden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicituddematerial`
--
ALTER TABLE `solicituddematerial`
  ADD CONSTRAINT `fk_SolicitudDeMaterial_Cliente1` FOREIGN KEY (`Cliente_codigoCliente`) REFERENCES `cliente` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SolicitudDeMaterial_CodigoSolicitud1` FOREIGN KEY (`idCodigoSolicitud`) REFERENCES `codigosolicitud` (`idCodigoSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SolicitudDeMaterial_Obra1` FOREIGN KEY (`Obra_codigoObra`,`Producto_codigoProducto`) REFERENCES `obra` (`codigoObra`, `Producto_codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Empleado1` FOREIGN KEY (`Empleado_Documento`) REFERENCES `empleado` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
