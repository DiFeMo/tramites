-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2016 a las 05:08:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtramites`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csentrada`
--
CREATE TABLE `csentrada` (
`fecha` date
,`entrada` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cssalida`
--
CREATE TABLE `cssalida` (
`fecha` date
,`salida` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csutilidad`
--
CREATE TABLE `csutilidad` (
`fecha` date
,`entra` decimal(55,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csutilidaddia`
--
CREATE TABLE `csutilidaddia` (
`fecha` date
,`utilidad` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcliente` int(11) NOT NULL COMMENT 'identificador del cliente',
  `idtramitante` int(11) DEFAULT NULL COMMENT 'Identificador del tramitante',
  `cedula` varchar(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `idtramitante`, `cedula`, `nombre`, `celular`, `telefono`, `email`) VALUES
(1, NULL, '1072555444', 'Andres', NULL, NULL, NULL),
(2, 1, '1072111222', 'Carlos Valderrama', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgastos`
--

CREATE TABLE `tbgastos` (
  `idgasto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  `observacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbgastos`
--

INSERT INTO `tbgastos` (`idgasto`, `fecha`, `motivo`, `valor`, `observacion`) VALUES
(1, '2016-05-23', 'Almuerzo', 11000, NULL),
(2, '2016-05-24', 'Compra de resma de papel', 15000, NULL),
(3, '2016-05-24', 'compras varias', 12000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtramitante`
--

CREATE TABLE `tbtramitante` (
  `idtramitante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbtramitante`
--

INSERT INTO `tbtramitante` (`idtramitante`, `nombre`, `telefono`, `email`) VALUES
(1, 'Diego', '468468', 'diego@gmail.com'),
(2, 'Felipe', '984684', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtramite`
--

CREATE TABLE `tbtramite` (
  `idtramite` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tipotramite` enum('Afiliacion Dependiente','Afiliacion Independiente','SG - SST','Derecho Laboral','Creacion Empresa','Tramite general') NOT NULL,
  `servicios` int(11) DEFAULT NULL,
  `costotramite` int(11) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `estado` enum('Pendiente','Completo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbtramite`
--

INSERT INTO `tbtramite` (`idtramite`, `idcliente`, `fecha`, `tipotramite`, `servicios`, `costotramite`, `descripcion`, `estado`) VALUES
(1, 1, '2016-05-23', 'Afiliacion Independiente', NULL, 25000, NULL, 'Pendiente'),
(2, 2, '2016-05-23', 'Derecho Laboral', NULL, 90000, NULL, 'Completo'),
(3, 1, '2016-05-24', 'SG - SST', NULL, 50000, NULL, 'Completo');

-- --------------------------------------------------------

--
-- Estructura para la vista `csentrada`
--
DROP TABLE IF EXISTS `csentrada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csentrada`  AS  select `tbtramite`.`fecha` AS `fecha`,sum(`tbtramite`.`costotramite`) AS `entrada` from `tbtramite` group by `tbtramite`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cssalida`
--
DROP TABLE IF EXISTS `cssalida`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cssalida`  AS  select `tbgastos`.`fecha` AS `fecha`,sum(`tbgastos`.`valor`) AS `salida` from `tbgastos` group by `tbgastos`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidad`
--
DROP TABLE IF EXISTS `csutilidad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csutilidad`  AS  select `csentrada`.`fecha` AS `fecha`,sum(`csentrada`.`entrada`) AS `entra` from `csentrada` group by `csentrada`.`fecha` union all select `cssalida`.`fecha` AS `fecha`,sum((`cssalida`.`salida` * -(1))) AS `sale` from `cssalida` group by `cssalida`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidaddia`
--
DROP TABLE IF EXISTS `csutilidaddia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csutilidaddia`  AS  select `csutilidad`.`fecha` AS `fecha`,sum(`csutilidad`.`entra`) AS `utilidad` from `csutilidad` group by `csutilidad`.`fecha` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `idtramitante` (`idtramitante`);

--
-- Indices de la tabla `tbgastos`
--
ALTER TABLE `tbgastos`
  ADD PRIMARY KEY (`idgasto`);

--
-- Indices de la tabla `tbtramitante`
--
ALTER TABLE `tbtramitante`
  ADD PRIMARY KEY (`idtramitante`);

--
-- Indices de la tabla `tbtramite`
--
ALTER TABLE `tbtramite`
  ADD PRIMARY KEY (`idtramite`),
  ADD KEY `idcliente` (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del cliente', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbgastos`
--
ALTER TABLE `tbgastos`
  MODIFY `idgasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbtramitante`
--
ALTER TABLE `tbtramitante`
  MODIFY `idtramitante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbtramite`
--
ALTER TABLE `tbtramite`
  MODIFY `idtramite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `tbcliente_ibfk_1` FOREIGN KEY (`idtramitante`) REFERENCES `tbtramitante` (`idtramitante`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbtramite`
--
ALTER TABLE `tbtramite`
  ADD CONSTRAINT `tbtramite_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `tbcliente` (`idcliente`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
