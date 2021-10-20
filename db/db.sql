DROP DATABASE IF EXISTS DSamiStore;
CREATE DATABASE DSamiStore CHARACTER SET utf8mb4;
USE DSamiStore;

CREATE TABLE IF NOT EXISTS categoria(
	idCategoria INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),
    descripcion VARCHAR(45),
	CONSTRAINT pk_categoria PRIMARY KEY (idCategoria)
);

CREATE TABLE IF NOT EXISTS imagen(
	idImagen INT UNSIGNED AUTO_INCREMENT  NOT NULL,    
    nombre VARCHAR(25),
    ruta VARCHAR(45),    
	CONSTRAINT pk_imagen PRIMARY KEY (idImagen)
);

CREATE TABLE IF NOT EXISTS detalle_almacen(
	idDetalleAlmacen INT UNSIGNED AUTO_INCREMENT NOT NULL,    
    stock INT UNSIGNED,    
    CONSTRAINT pk_detalle_almacen PRIMARY KEY (idDetalleAlmacen)
);

CREATE TABLE IF NOT EXISTS almacen(
	idAlmacen INT UNSIGNED AUTO_INCREMENT  NOT NULL,
	idDetalleAlmacen INT UNSIGNED,    
    nombre VARCHAR(25),    
	CONSTRAINT pk_almacen PRIMARY KEY (idAlmacen),
	CONSTRAINT fk_almacen_detalleAlmacen FOREIGN KEY (idDetalleAlmacen) 
    REFERENCES detalle_almacen(idDetalleAlmacen)
);

CREATE TABLE IF NOT EXISTS producto(
	idProducto INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idCategoria INT UNSIGNED NOT NULL,
    idImagen INT UNSIGNED NOT NULL,
    idAlmacen INT UNSIGNED NOT NULL,    
    nombre VARCHAR(30),
    descripcion VARCHAR(45),
    precio DECIMAL,
    estado BIT,    
    CONSTRAINT pk_producto PRIMARY KEY (idProducto),
	CONSTRAINT fk_producto_categortia FOREIGN KEY (idCategoria) 
    REFERENCES categoria(idCategoria),
    CONSTRAINT fk_producto_imagenes FOREIGN KEY (idImagen) 
    REFERENCES imagen(idImagen),
    CONSTRAINT fk_producto_almacen FOREIGN KEY (idAlmacen) 
    REFERENCES almacen(idAlmacen)
);

CREATE TABLE IF NOT EXISTS proveedor(
	idProveedor INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),
    razonSocial VARCHAR(50),
    telefono VARCHAR(20),
    ruc VARCHAR(17),
	CONSTRAINT pk_proveedor PRIMARY KEY (idProveedor)
);

CREATE TABLE IF NOT EXISTS modulo(
	idModulo INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),    
	CONSTRAINT pk_modulo PRIMARY KEY (idModulo)
);

CREATE TABLE IF NOT EXISTS operaciones(
	idOperaciones INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idModulo INT UNSIGNED,    
    nombre VARCHAR(30),        
	CONSTRAINT pk_operaciones PRIMARY KEY (idOperaciones),
    CONSTRAINT fk_operaciones_modulo FOREIGN KEY (idModulo) 
    REFERENCES modulo(idModulo)
);

CREATE TABLE IF NOT EXISTS rol(
	idRol INT UNSIGNED AUTO_INCREMENT  NOT NULL,    
    nombre VARCHAR(30),        
	CONSTRAINT pk_rol PRIMARY KEY (idRol)
);

CREATE TABLE IF NOT EXISTS rol_operaciones(
	idRolOperaciones INT UNSIGNED AUTO_INCREMENT  NOT NULL,
	idRol INT UNSIGNED,
    idOperaciones INT UNSIGNED,    
	CONSTRAINT pk_rolOperaciones PRIMARY KEY (idRolOperaciones),
    CONSTRAINT fk_rolOperaciones_operaciones FOREIGN KEY (idOperaciones) 
    REFERENCES operaciones(idOperaciones),
    CONSTRAINT fk_rolOperaciones_rol FOREIGN KEY (idRol) 
    REFERENCES rol(idRol)
);

CREATE TABLE IF NOT EXISTS empleado(
	idEmpleado INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(20),
    apellidoMaterno VARCHAR(15),
    apellidoPaterno VARCHAR(15),
	telefono VARCHAR(15),
    fechaNac DATETIME,
    direccion VARCHAR(40),    
	CONSTRAINT pk_empleado PRIMARY KEY (idEmpleado)
);

CREATE TABLE IF NOT EXISTS usuario(
	idUsuario INT UNSIGNED AUTO_INCREMENT  NOT NULL,
	idEmpleado INT UNSIGNED,
    idRol INT UNSIGNED,    
    nombre VARCHAR(45),
    password VARCHAR(30),
    userName VARCHAR(45),
    email VARCHAR(30),    
	CONSTRAINT pk_usuario PRIMARY KEY (idUsuario),
	CONSTRAINT fk_usuario_empleado FOREIGN KEY (idEmpleado) 
    REFERENCES empleado(idEmpleado),
    CONSTRAINT fk_usuario_rol FOREIGN KEY (idRol) 
    REFERENCES rol(idRol)
);

CREATE TABLE IF NOT EXISTS cotizacion(
	idCotizacion INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idEmpleado INT UNSIGNED,
    idProveedor INT UNSIGNED,
    fechaCotizacion DATETIME,    
	CONSTRAINT pk_cotizacion PRIMARY KEY (idCotizacion),
    CONSTRAINT fk_cotizacion_empleado FOREIGN KEY (idEmpleado) 
    REFERENCES empleado(idEmpleado),
    CONSTRAINT fk_cotizacion_proveedor FOREIGN KEY (idProveedor) 
    REFERENCES proveedor(idProveedor)
);

CREATE TABLE IF NOT EXISTS detalle_compra(
	idDetalleCompra INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idCotizacion INT UNSIGNED,
    idProducto INT UNSIGNED,
    fechaCompra DATETIME,
	cantidad INT UNSIGNED,
    precio DECIMAL,
    subtotal DECIMAL,    
	CONSTRAINT pk_detalleCompra PRIMARY KEY (idDetalleCompra),
    CONSTRAINT fk_detalleCompra_cotizacion FOREIGN KEY (idCotizacion) 
    REFERENCES cotizacion(idCotizacion),
    CONSTRAINT fk_detalleCompra_producto FOREIGN KEY (idProducto) 
    REFERENCES producto(idProducto)
);

INSERT INTO modulo VALUES (1, 'Inicio sesión');
INSERT INTO modulo VALUES (2, 'Categorias');
INSERT INTO modulo VALUES (3, 'Productos');
INSERT INTO modulo VALUES (4, 'Pedidos');
INSERT INTO modulo VALUES (5, 'Proveedores');
INSERT INTO modulo VALUES (6, 'Usuarios');

INSERT INTO operaciones VALUES (1, 1, 'Ver');
INSERT INTO operaciones VALUES (2, 2, 'Ver');
INSERT INTO operaciones VALUES (3, 2, 'Edicion');
INSERT INTO operaciones VALUES (4, 3, 'Ver');
INSERT INTO operaciones VALUES (5, 3, 'Edicion');
INSERT INTO operaciones VALUES (6, 4, 'Ver');
INSERT INTO operaciones VALUES (7, 4, 'Edicion');
INSERT INTO operaciones VALUES (8, 4, 'Generar');
INSERT INTO operaciones VALUES (9, 5, 'Ver');
INSERT INTO operaciones VALUES (10, 5, 'Edicion');
INSERT INTO operaciones VALUES (11, 6, 'Editar configuracion');

INSERT INTO rol VALUES (1, 'Administrador');
INSERT INTO rol VALUES (2, 'Encargado del almacen');

INSERT INTO imagen VALUES (1, 'Mascarilla kN95', '/KN95.png');
INSERT INTO imagen VALUES (2, 'Taza', '/taza.png');

INSERT INTO categoria VALUES (1, 'Protección personal', 'Articulos de proteccion contra el COVID-19');
INSERT INTO categoria VALUES (2, 'Hogar y cocina', 'Articulos del hogar');

INSERT INTO detalle_almacen VALUES (1, 50);
INSERT INTO detalle_almacen VALUES (2, 100);

INSERT INTO almacen VALUES (1, 1, 'Almacen A');
INSERT INTO almacen VALUES (2, 2, 'Almacen B');

INSERT INTO producto VALUES (1, 1, 1, 1, 'Mascarilla kN95', 'Esta es una mascarilla', 3.50, 1);
INSERT INTO producto VALUES (2, 2, 2, 2, 'Taza Dia de la madre', 'Esta es una taza', 10.0, 0);

INSERT INTO proveedor VALUES (1, 'Prosemedic', 'Xiantao Rayxin Medical Products', '956652369', '1665455239874');
INSERT INTO proveedor VALUES (2, 'Limpieza', 'Productos de limpieza', '981489636', '4963325698114');

INSERT INTO empleado VALUES (1, 'Larry', 'Chuzon', 'Benites', '986532569', '01/01/2000', 'En mi casita');
INSERT INTO empleado VALUES (2, 'Denilson', 'Chuzon', 'Benites', '986532569', '01/01/2000', 'En mi casita');
INSERT INTO empleado VALUES (3, 'Liliana', 'Villegas', 'Villanueva', '986532569', '01/01/2000', 'En mi casita');

INSERT INTO usuario VALUES (1, 1, 1, 'adm', 'adm', 'administrador', 'adm@adm.com');
INSERT INTO usuario VALUES (2, 2, 2, 'Liliana', 'lili2021', 'vendedor', '@gmail.com');
INSERT INTO usuario VALUES (3, 3, 2, 'Larry', 'larry2021', 'almacen', '@gmail.com');

INSERT INTO cotizacion VALUES (1, 1, 1, '09-10-2021');
INSERT INTO cotizacion VALUES (2, 2, 1, '10-10-2021');

INSERT INTO detalle_compra VALUES (1, 1, 1, '10-10-2021', 50, 5.0, 250.0);
INSERT INTO detalle_compra VALUES (2, 2, 2, '11-10-2021', 30, 7.5, 225.0);

INSERT INTO rol_operaciones VALUES (1, 1, 1 );
INSERT INTO rol_operaciones VALUES (2, 1, 2 );
INSERT INTO rol_operaciones VALUES (3, 1, 3 );
INSERT INTO rol_operaciones VALUES (4, 1, 4 );
INSERT INTO rol_operaciones VALUES (5, 1, 5 );
INSERT INTO rol_operaciones VALUES (6, 1, 6 );
INSERT INTO rol_operaciones VALUES (7, 1, 7 );
INSERT INTO rol_operaciones VALUES (8, 1, 8 );
INSERT INTO rol_operaciones VALUES (9, 1, 9 );
INSERT INTO rol_operaciones VALUES (10, 1, 10 );
INSERT INTO rol_operaciones VALUES (11, 1, 11 );

INSERT INTO rol_operaciones VALUES (12, 2, 1 );
INSERT INTO rol_operaciones VALUES (13, 2, 2 );
INSERT INTO rol_operaciones VALUES (14, 2, 3 );
INSERT INTO rol_operaciones VALUES (15, 2, 4 );
INSERT INTO rol_operaciones VALUES (16, 2, 5 );
INSERT INTO rol_operaciones VALUES (17, 2, 6 );
INSERT INTO rol_operaciones VALUES (18, 2, 7 );
INSERT INTO rol_operaciones VALUES (19, 2, 8 );
INSERT INTO rol_operaciones VALUES (20, 2, 9 );
INSERT INTO rol_operaciones VALUES (21, 2, 10 );
