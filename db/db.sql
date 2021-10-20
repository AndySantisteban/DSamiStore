-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2021 a las 22:43:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dsamistore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `idAlmacen` int(10) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`idAlmacen`, `stock`) VALUES
(1, 20),
(2, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `descripcion`) VALUES
(1, 'Categoria A', 'Esta es la categoria A'),
(2, 'Categoria B', 'Esta es la categoria B'),
(5, '1', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `idCotizacion` int(10) UNSIGNED NOT NULL,
  `idEmpleado` int(10) UNSIGNED DEFAULT NULL,
  `idProveedor` int(10) UNSIGNED DEFAULT NULL,
  `fechaCotizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idCotizacion`, `idEmpleado`, `idProveedor`, `fechaCotizacion`, `total`) VALUES
(1, 3, 1, '0000-00-00 00:00:00', '50'),
(2, 2, 1, '0000-00-00 00:00:00', '8'),
(4, 3, 1, '0000-00-00 00:00:00', '8'),
(5, 2, 1, '0000-00-00 00:00:00', '8'),
(7, 5, 2, '0000-00-00 00:00:00', '78'),
(10, 1, 2, '0000-00-00 00:00:00', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `idDetalleCompra` int(10) UNSIGNED NOT NULL,
  `idCotizacion` int(10) UNSIGNED DEFAULT NULL,
  `idProducto` int(10) UNSIGNED DEFAULT NULL,
  `precio_producto` decimal(10,0) DEFAULT NULL,
  `cantidad` decimal(10,0) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallecompra`
--

INSERT INTO `detallecompra` (`idDetalleCompra`, `idCotizacion`, `idProducto`, `precio_producto`, `cantidad`, `subtotal`) VALUES
(1, 1, 1, '0', NULL, '250'),
(2, 2, 2, '0', NULL, '225');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidoMaterno` varchar(15) DEFAULT NULL,
  `apellidoPaterno` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fechaNac` datetime DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `idUsuario`, `nombre`, `apellidoMaterno`, `apellidoPaterno`, `telefono`, `fechaNac`, `direccion`) VALUES
(1, 9, 'Jona', 'Gonzales', 'Nose', '9785412', '0000-00-00 00:00:00', 'asdsf'),
(2, 2, 'Jhajaira', 'More', 'Villegas', '986532569', '0000-00-00 00:00:00', 'En mi casita no toy'),
(3, 3, 'Mauricio', 'Regalado', 'Mendoza', '986532569', '0000-00-00 00:00:00', 'En mi casita 3'),
(5, 1, 'Rosa', 'Flores', 'Rojas', '603778', '2021-10-13 00:49:10', 'En mi casitax2'),
(10, 4, '80', '90', '80', '80', '0000-00-00 00:00:00', '800'),
(12, 2, '2', '2', '2', '2', '0000-00-00 00:00:00', '2'),
(13, 5, '1', '1', '1', '1', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `nombre`, `img`) VALUES
(1, 'Mascarilla kN95', 'KN95.png'),
(2, 'Taza', 'taza.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idModulo` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idModulo`, `nombre`) VALUES
(1, 'Panel principal'),
(2, 'Panel categoria'),
(3, 'Panel producto'),
(4, 'Panel proveedores'),
(5, 'Panel pedidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `idOperaciones` int(10) UNSIGNED NOT NULL,
  `idModulo` int(10) UNSIGNED DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operaciones`
--

INSERT INTO `operaciones` (`idOperaciones`, `idModulo`, `nombre`) VALUES
(1, 1, 'Ver'),
(2, 2, 'Ver'),
(3, 2, 'Editar'),
(4, 2, 'Eliminar'),
(5, 2, 'Agregar'),
(6, 2, 'Ver'),
(7, 2, 'Editar'),
(8, 2, 'Eliminar'),
(9, 2, 'Agregar'),
(10, 2, 'Ver'),
(11, 2, 'Editar'),
(12, 2, 'Eliminar'),
(13, 2, 'Agregar'),
(14, 2, 'Ver'),
(15, 2, 'Editar'),
(16, 2, 'Eliminar'),
(17, 2, 'Agregar'),
(18, 2, 'Generar'),
(19, 2, 'Editar configuracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) UNSIGNED NOT NULL,
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `idImagen` int(10) UNSIGNED NOT NULL,
  `idAlmacen` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `idCategoria`, `idImagen`, `idAlmacen`, `nombre`, `descripcion`, `precio`, `estado`) VALUES
(1, 1, 1, 1, 'Mascarilla kN95', 'Esta es una mascarilla', '4', b'1'),
(2, 2, 2, 2, 'Taza Dia de la madre', 'Esta es una taza', '10', b'0'),
(3, 1, 1, 1, '1', 'q', '7', b'1'),
(4, 1, 1, 1, '7', '7', '7', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `razonSocial` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `ruc` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombre`, `razonSocial`, `telefono`, `ruc`) VALUES
(1, 'Javier', 'Sac. Javier', '956652369', '1665455239874'),
(2, 'Fiorella', 'Fiorella SAC.', '981489636', '4963325698114'),
(3, 'as', 'asasad', '87498', '74894'),
(4, 'Fernando', 'Fer SAC', '123456', '789451263');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Vendedo'),
(3, 'Encargado del almacén'),
(7, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roloperaciones`
--

CREATE TABLE `roloperaciones` (
  `idRolOperaciones` int(10) UNSIGNED NOT NULL,
  `idRol` int(10) UNSIGNED DEFAULT NULL,
  `idOperaciones` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roloperaciones`
--

INSERT INTO `roloperaciones` (`idRolOperaciones`, `idRol`, `idOperaciones`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `idRol` int(10) UNSIGNED DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idRol`, `nombre`, `password`, `userName`, `email`) VALUES
(1, 1, 'adm', 'adm', 'administrador', 'adm@adm.com'),
(2, 3, 'Fernandoooo', '', 'e', 'fer@123'),
(3, 1, 'Fiorella', '', 'almacen', 'fio@456'),
(4, 1, 'Samuel', '', 'Sam123', 'sam@789'),
(5, 2, 'Javier Delgado', '', 'JavierDF', 'javier@123'),
(9, 7, 'Javier', '789', 'Manuel ', '123@'),
(10, 2, '1', '1', '1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`idAlmacen`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`idCotizacion`),
  ADD KEY `fk_cotizacion_empleado` (`idEmpleado`),
  ADD KEY `fk_cotizacion_proveedor` (`idProveedor`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`idDetalleCompra`),
  ADD KEY `fk_detalleCompra_cotizacion` (`idCotizacion`),
  ADD KEY `fk_detalleCompra_producto` (`idProducto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `fk_empleado_usuario` (`idUsuario`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idModulo`);

--
-- Indices de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`idOperaciones`),
  ADD KEY `fk_operaciones_modulo` (`idModulo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_producto_categortia` (`idCategoria`),
  ADD KEY `fk_producto_imagenes` (`idImagen`),
  ADD KEY `fk_producto_almacen` (`idAlmacen`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `roloperaciones`
--
ALTER TABLE `roloperaciones`
  ADD PRIMARY KEY (`idRolOperaciones`),
  ADD KEY `fk_rolOperaciones_operaciones` (`idOperaciones`),
  ADD KEY `fk_rolOperaciones_rol` (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_usuario_rol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `idAlmacen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `idCotizacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `idDetalleCompra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idModulo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `idOperaciones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roloperaciones`
--
ALTER TABLE `roloperaciones`
  MODIFY `idRolOperaciones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_cotizacion_empleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  ADD CONSTRAINT `fk_cotizacion_proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`);

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `fk_detalleCompra_cotizacion` FOREIGN KEY (`idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`),
  ADD CONSTRAINT `fk_detalleCompra_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_empleado_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD CONSTRAINT `fk_operaciones_modulo` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`idModulo`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_almacen` FOREIGN KEY (`idAlmacen`) REFERENCES `almacen` (`idAlmacen`),
  ADD CONSTRAINT `fk_producto_categortia` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `fk_producto_imagenes` FOREIGN KEY (`idImagen`) REFERENCES `imagenes` (`idImagen`);

--
-- Filtros para la tabla `roloperaciones`
--
ALTER TABLE `roloperaciones`
  ADD CONSTRAINT `fk_rolOperaciones_operaciones` FOREIGN KEY (`idOperaciones`) REFERENCES `operaciones` (`idOperaciones`),
  ADD CONSTRAINT `fk_rolOperaciones_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
