-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2018 a las 18:27:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cacao`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_ADMINISTRADOR` int(11) NOT NULL,
  `ADMINISTRADOR_NOMBRE` varchar(45) DEFAULT NULL,
  `ADMINISTRADOR_APELLIDO` varchar(45) DEFAULT NULL,
  `ADMINISTRADOR_USER` varchar(45) DEFAULT NULL,
  `ADMINISTRADOR_PASS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_ADMINISTRADOR`, `ADMINISTRADOR_NOMBRE`, `ADMINISTRADOR_APELLIDO`, `ADMINISTRADOR_USER`, `ADMINISTRADOR_PASS`) VALUES
(1, 'Diego', 'Carrascal', 'DiegoC', 'los'),
(2, 'Diego', 'Carrascal', 'DiegoC', 'los'),
(3, 'DIeguito', 'Cara', 'Fresai', 'jueves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `idAGENDA` int(11) NOT NULL,
  `CULTIVO_idCULTIVO` int(11) NOT NULL,
  `AGENDA_COMENTARIO` varchar(45) DEFAULT NULL,
  `AGENDAFECHA_REGISTRO` datetime DEFAULT NULL,
  `AGENDA_TIPO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`idAGENDA`, `CULTIVO_idCULTIVO`, `AGENDA_COMENTARIO`, `AGENDAFECHA_REGISTRO`, `AGENDA_TIPO`) VALUES
(1, 1, 'La ocupacion rusa', '2018-06-14 00:00:00', 'Nota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cacaotero`
--

CREATE TABLE `cacaotero` (
  `idCacaotero` int(11) NOT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cacaotero`
--

INSERT INTO `cacaotero` (`idCacaotero`, `cargo`, `cedula`, `usuario`, `contraseña`) VALUES
(1, 'tre', 'dfads', 'sdf', 'sdfsd'),
(2, 'Cultivador', '1546', 'Alirio', ''),
(3, 'Cultivador', '1546', 'Alirio', ''),
(4, 'sdf', 'sdf', 'sfs', ''),
(5, 'dsf', 'sdfsd', 'sdfs', '2018-06-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cacaotero_has_cultivo`
--

CREATE TABLE `cacaotero_has_cultivo` (
  `CACAOTERO_idCACAOTERO` int(11) NOT NULL,
  `CULTIVO_idCULTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cacaotero_has_cultivo`
--

INSERT INTO `cacaotero_has_cultivo` (`CACAOTERO_idCACAOTERO`, `CULTIVO_idCULTIVO`) VALUES
(1, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cosecha`
--

CREATE TABLE `cosecha` (
  `idCOSECHA` int(11) NOT NULL,
  `CULTIVO_idCULTIVO` int(11) NOT NULL,
  `COSECHA_SACOS` int(11) DEFAULT NULL,
  `COSECHAFECHA_REGISTRO` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cosecha`
--

INSERT INTO `cosecha` (`idCOSECHA`, `CULTIVO_idCULTIVO`, `COSECHA_SACOS`, `COSECHAFECHA_REGISTRO`) VALUES
(1, 1, 25, '2018-06-14 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cosecha_has_cacaotero`
--

CREATE TABLE `cosecha_has_cacaotero` (
  `COSECHA_idCOSECHA` int(11) NOT NULL,
  `CACAOTERO_idCACAOTERO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE `cultivo` (
  `idCULTIVO` int(11) NOT NULL,
  `SECTOR_idSECTOR` int(11) NOT NULL,
  `CULTIVO_FECHASIEMBRA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`idCULTIVO`, `SECTOR_idSECTOR`, `CULTIVO_FECHASIEMBRA`) VALUES
(1, 1, '2018-06-14 00:00:00'),
(2, 3, '2018-06-13 00:00:00'),
(3, 3, '2018-06-13 00:00:00'),
(4, 3, '2018-06-13 00:00:00'),
(5, 3, '2018-06-09 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fertilizacion`
--

CREATE TABLE `fertilizacion` (
  `idFertilizacion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `idSuelo` int(11) NOT NULL,
  `idFertilizante` int(11) NOT NULL,
  `idCacaotero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fertilizante`
--

CREATE TABLE `fertilizante` (
  `idFertilizante` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `idFinca` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `dueño` varchar(45) DEFAULT NULL,
  `ADMINISTRADOR_id_ADMINISTRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`idFinca`, `nombre`, `dueño`, `ADMINISTRADOR_id_ADMINISTRADOR`) VALUES
(1, 'La gran pantalla azul', 'Mr Robot', 1),
(2, 'LOS GIRASOLES', 'fRANSISCO cUEVAS', 3),
(3, 'LOS GIRASOLES', 'fRANSISCO cUEVAS', 3),
(4, 'LOS GIRASOLES', 'fRANSISCO cUEVAS', 3),
(5, 'dfgdf', 'dfgdf', 3),
(6, 'hyh', 'juju', 3),
(7, 'hyh', 'juju', 3),
(8, 'reg', 'erger', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE `ingrediente` (
  `idIngrediente` int(11) NOT NULL,
  `componente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientefertilizante`
--

CREATE TABLE `ingredientefertilizante` (
  `idIngredienteFertilizante` int(11) NOT NULL,
  `idIngrediente` int(11) NOT NULL,
  `idFertilizante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `idSECTOR` int(11) NOT NULL,
  `SECTOR_LARGO` int(11) DEFAULT NULL,
  `SECTOR_ANCHO` int(11) DEFAULT NULL,
  `FINCA_idFINCA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`idSECTOR`, `SECTOR_LARGO`, `SECTOR_ANCHO`, `FINCA_idFINCA`) VALUES
(1, 14, 14, 1),
(3, 10, 14, 2),
(4, 25, 25, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelo`
--

CREATE TABLE `suelo` (
  `idSuelo` int(11) NOT NULL,
  `hectarea` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `idFinca` int(11) NOT NULL,
  `pH` float DEFAULT NULL,
  `carbonoOrganico` float DEFAULT NULL,
  `materiaOrganico` float DEFAULT NULL,
  `potasio` float DEFAULT NULL,
  `calcio` float DEFAULT NULL,
  `magnesio` float DEFAULT NULL,
  `sodio` float DEFAULT NULL,
  `boro` float DEFAULT NULL,
  `fosforo` float DEFAULT NULL,
  `nitrogeno` float DEFAULT NULL,
  `azufre` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_ADMINISTRADOR`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAGENDA`),
  ADD KEY `fk_AGENDA_CULTIVO1_idx` (`CULTIVO_idCULTIVO`);

--
-- Indices de la tabla `cacaotero`
--
ALTER TABLE `cacaotero`
  ADD PRIMARY KEY (`idCacaotero`);

--
-- Indices de la tabla `cacaotero_has_cultivo`
--
ALTER TABLE `cacaotero_has_cultivo`
  ADD PRIMARY KEY (`CACAOTERO_idCACAOTERO`,`CULTIVO_idCULTIVO`),
  ADD KEY `fk_CACAOTERO_has_CULTIVO_CULTIVO1_idx` (`CULTIVO_idCULTIVO`),
  ADD KEY `fk_CACAOTERO_has_CULTIVO_CACAOTERO1_idx` (`CACAOTERO_idCACAOTERO`);

--
-- Indices de la tabla `cosecha`
--
ALTER TABLE `cosecha`
  ADD PRIMARY KEY (`idCOSECHA`),
  ADD KEY `fk_COSECHA_CULTIVO1_idx` (`CULTIVO_idCULTIVO`);

--
-- Indices de la tabla `cosecha_has_cacaotero`
--
ALTER TABLE `cosecha_has_cacaotero`
  ADD PRIMARY KEY (`COSECHA_idCOSECHA`,`CACAOTERO_idCACAOTERO`),
  ADD KEY `fk_COSECHA_has_CACAOTERO_CACAOTERO1_idx` (`CACAOTERO_idCACAOTERO`),
  ADD KEY `fk_COSECHA_has_CACAOTERO_COSECHA1_idx` (`COSECHA_idCOSECHA`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`idCULTIVO`),
  ADD KEY `fk_CULTIVO_SECTOR1_idx` (`SECTOR_idSECTOR`);

--
-- Indices de la tabla `fertilizacion`
--
ALTER TABLE `fertilizacion`
  ADD PRIMARY KEY (`idFertilizacion`),
  ADD KEY `fk_Fertilizacion_Suelo1_idx` (`idSuelo`),
  ADD KEY `fk_Fertilizacion_Fertilizante1_idx` (`idFertilizante`),
  ADD KEY `fk_Fertilizacion_Cacaotero1_idx` (`idCacaotero`);

--
-- Indices de la tabla `fertilizante`
--
ALTER TABLE `fertilizante`
  ADD PRIMARY KEY (`idFertilizante`);

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`idFinca`),
  ADD KEY `fk_Finca_ADMINISTRADOR1_idx` (`ADMINISTRADOR_id_ADMINISTRADOR`);

--
-- Indices de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`idIngrediente`);

--
-- Indices de la tabla `ingredientefertilizante`
--
ALTER TABLE `ingredientefertilizante`
  ADD PRIMARY KEY (`idIngredienteFertilizante`),
  ADD KEY `fk_IngredienteFertilizante_Ingrediente1_idx` (`idIngrediente`),
  ADD KEY `fk_IngredienteFertilizante_Fertilizante1_idx` (`idFertilizante`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`idSECTOR`),
  ADD KEY `fk_SECTOR_FINCA1_idx` (`FINCA_idFINCA`);

--
-- Indices de la tabla `suelo`
--
ALTER TABLE `suelo`
  ADD PRIMARY KEY (`idSuelo`),
  ADD KEY `fk_SUELO_FINCA1_idx` (`idFinca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_ADMINISTRADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cacaotero`
--
ALTER TABLE `cacaotero`
  MODIFY `idCacaotero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cosecha`
--
ALTER TABLE `cosecha`
  MODIFY `idCOSECHA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `idCULTIVO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fertilizacion`
--
ALTER TABLE `fertilizacion`
  MODIFY `idFertilizacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fertilizante`
--
ALTER TABLE `fertilizante`
  MODIFY `idFertilizante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `finca`
--
ALTER TABLE `finca`
  MODIFY `idFinca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  MODIFY `idIngrediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingredientefertilizante`
--
ALTER TABLE `ingredientefertilizante`
  MODIFY `idIngredienteFertilizante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `idSECTOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `suelo`
--
ALTER TABLE `suelo`
  MODIFY `idSuelo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_AGENDA_CULTIVO1` FOREIGN KEY (`CULTIVO_idCULTIVO`) REFERENCES `cultivo` (`idCULTIVO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cacaotero_has_cultivo`
--
ALTER TABLE `cacaotero_has_cultivo`
  ADD CONSTRAINT `fk_CACAOTERO_has_CULTIVO_CACAOTERO1` FOREIGN KEY (`CACAOTERO_idCACAOTERO`) REFERENCES `cacaotero` (`idCacaotero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CACAOTERO_has_CULTIVO_CULTIVO1` FOREIGN KEY (`CULTIVO_idCULTIVO`) REFERENCES `cultivo` (`idCULTIVO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cosecha`
--
ALTER TABLE `cosecha`
  ADD CONSTRAINT `fk_COSECHA_CULTIVO1` FOREIGN KEY (`CULTIVO_idCULTIVO`) REFERENCES `cultivo` (`idCULTIVO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cosecha_has_cacaotero`
--
ALTER TABLE `cosecha_has_cacaotero`
  ADD CONSTRAINT `fk_COSECHA_has_CACAOTERO_CACAOTERO1` FOREIGN KEY (`CACAOTERO_idCACAOTERO`) REFERENCES `cacaotero` (`idCacaotero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COSECHA_has_CACAOTERO_COSECHA1` FOREIGN KEY (`COSECHA_idCOSECHA`) REFERENCES `cosecha` (`idCOSECHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD CONSTRAINT `fk_CULTIVO_SECTOR1` FOREIGN KEY (`SECTOR_idSECTOR`) REFERENCES `sector` (`idSECTOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fertilizacion`
--
ALTER TABLE `fertilizacion`
  ADD CONSTRAINT `fk_Fertilizacion_Cacaotero1` FOREIGN KEY (`idCacaotero`) REFERENCES `cacaotero` (`idCacaotero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fertilizacion_Fertilizante1` FOREIGN KEY (`idFertilizante`) REFERENCES `fertilizante` (`idFertilizante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fertilizacion_Suelo1` FOREIGN KEY (`idSuelo`) REFERENCES `suelo` (`idSuelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `finca`
--
ALTER TABLE `finca`
  ADD CONSTRAINT `fk_Finca_ADMINISTRADOR1` FOREIGN KEY (`ADMINISTRADOR_id_ADMINISTRADOR`) REFERENCES `administrador` (`id_ADMINISTRADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingredientefertilizante`
--
ALTER TABLE `ingredientefertilizante`
  ADD CONSTRAINT `fk_IngredienteFertilizante_Fertilizante1` FOREIGN KEY (`idFertilizante`) REFERENCES `fertilizante` (`idFertilizante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_IngredienteFertilizante_Ingrediente1` FOREIGN KEY (`idIngrediente`) REFERENCES `ingrediente` (`idIngrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `fk_SECTOR_FINCA1` FOREIGN KEY (`FINCA_idFINCA`) REFERENCES `finca` (`idFinca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `suelo`
--
ALTER TABLE `suelo`
  ADD CONSTRAINT `fk_SUELO_FINCA1` FOREIGN KEY (`idFinca`) REFERENCES `finca` (`idFinca`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
