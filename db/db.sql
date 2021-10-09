DROP DATABASE IF EXISTS DSamiStore;
CREATE DATABASE DSamiStore CHARACTER SET utf8mb4;
USE DSamiStore;

CREATE TABLE IF NOT EXISTS Categoria(
	idCategoria INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),
    descripcion VARCHAR(45),
	CONSTRAINT pk_categoria PRIMARY KEY (idCategoria)
);

CREATE TABLE IF NOT EXISTS Imagenes(
	idImagen INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(25),
    img VARCHAR(45),
	CONSTRAINT pk_imagen PRIMARY KEY (idImagen)
);

CREATE TABLE IF NOT EXISTS Almacen(
	idAlmacen INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    stock INT UNSIGNED,
	CONSTRAINT pk_almacen PRIMARY KEY (idAlmacen)
);

CREATE TABLE IF NOT EXISTS Producto(
	idProducto INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idCategoria INT UNSIGNED NOT NULL,
    idImagen INT UNSIGNED NOT NULL,
    idAlmacen INT UNSIGNED NOT NULL,
    
    nombre VARCHAR(30),
    descripcion VARCHAR(45),
    precio DECIMAL,
    estado BIT,
    
    CONSTRAINT pk_producto PRIMARY KEY (idProducto),
	CONSTRAINT fk_producto_categortia FOREIGN KEY (idCategoria) REFERENCES Categoria(idCategoria),
    CONSTRAINT fk_producto_imagenes FOREIGN KEY (idImagen) REFERENCES imagenes(idImagen),
    CONSTRAINT fk_producto_almacen FOREIGN KEY (idAlmacen) REFERENCES Almacen(idAlmacen)
);

CREATE TABLE IF NOT EXISTS Proveedor(
	idProveedor INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),
    razonSocial VARCHAR(50),
    telefono VARCHAR(20),
    ruc VARCHAR(17),
	CONSTRAINT pk_proveedor PRIMARY KEY (idProveedor)
);

CREATE TABLE IF NOT EXISTS Modulo(
	idModulo INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),    
	CONSTRAINT pk_modulo PRIMARY KEY (idModulo)
);

CREATE TABLE IF NOT EXISTS Operaciones(
	idOperaciones INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idModulo INT UNSIGNED,
    
    nombre VARCHAR(30),    
    
	CONSTRAINT pk_operaciones PRIMARY KEY (idOperaciones),
    CONSTRAINT fk_operaciones_modulo FOREIGN KEY (idModulo) REFERENCES Modulo(idModulo)
);

CREATE TABLE IF NOT EXISTS Rol(
	idRol INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    
    nombre VARCHAR(30),    
    
	CONSTRAINT pk_rol PRIMARY KEY (idRol)
);

CREATE TABLE IF NOT EXISTS RolOperaciones(
	idRolOperaciones INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idOperaciones INT UNSIGNED,
    idRol INT UNSIGNED,
    
	CONSTRAINT pk_rolOperaciones PRIMARY KEY (idRolOperaciones),
    CONSTRAINT fk_rolOperaciones_operaciones FOREIGN KEY (idOperaciones) REFERENCES Operaciones(idOperaciones),
    CONSTRAINT fk_rolOperaciones_rol FOREIGN KEY (idRol) REFERENCES Rol(idRol)
);

CREATE TABLE IF NOT EXISTS Usuario(
	idUsuario INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idRol INT UNSIGNED,
    
    nombre VARCHAR(45),
    password VARCHAR(30),
    userName VARCHAR(45),
    email VARCHAR(30),
    
	CONSTRAINT pk_usuario PRIMARY KEY (idUsuario),
    CONSTRAINT fk_usuario_rol FOREIGN KEY (idRol) REFERENCES Rol(idRol)
);

CREATE TABLE IF NOT EXISTS Empleado(
	idEmpleado INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idUsuario INT UNSIGNED,
    
    nombre VARCHAR(20),
    apellidoMaterno VARCHAR(15),
    apellidoPaterno VARCHAR(15),
	telefono VARCHAR(15),
    fechaNac DATETIME,
    direccion VARCHAR(40),
    
	CONSTRAINT pk_empleado PRIMARY KEY (idEmpleado),
    CONSTRAINT fk_empleado_usuario FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE IF NOT EXISTS Cotizacion(
	idCotizacion INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idEmpleado INT UNSIGNED,
    idProveedor INT UNSIGNED,

    fechaCotizacion DATETIME,
    cantidad INT UNSIGNED,
    precio DECIMAL,
    
	CONSTRAINT pk_cotizacion PRIMARY KEY (idCotizacion),
    CONSTRAINT fk_cotizacion_empleado FOREIGN KEY (idEmpleado) REFERENCES Empleado(idEmpleado),
    CONSTRAINT fk_cotizacion_proveedor FOREIGN KEY (idProveedor) REFERENCES Proveedor(idProveedor)
);

CREATE TABLE IF NOT EXISTS DetalleCompra(
	idDetalleCompra INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idCotizacion INT UNSIGNED,
    idProducto INT UNSIGNED,

    fechaCompra DATETIME,
    total DECIMAL,
    
	CONSTRAINT pk_detalleCompra PRIMARY KEY (idDetalleCompra),
    CONSTRAINT fk_detalleCompra_cotizacion FOREIGN KEY (idCotizacion) REFERENCES Cotizacion(idCotizacion),
    CONSTRAINT fk_detalleCompra_producto FOREIGN KEY (idProducto) REFERENCES Producto(idProducto)
);