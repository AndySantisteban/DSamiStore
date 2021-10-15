DROP DATABASE IF EXISTS DSamiStore;
CREATE DATABASE DSamiStore CHARACTER SET utf8mb4;
USE DSamiStore;

CREATE TABLE IF NOT EXISTS Categoria(
	idCategoria INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR(30),
    descripcion VARCHAR(45),
	CONSTRAINT pk_categoria PRIMARY KEY (idCategoria)
);

CREATE TABLE IF NOT EXISTS Imagen(
	idImagen INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    
    nombre VARCHAR(25),
    ruta VARCHAR(45),
    
	CONSTRAINT pk_imagen PRIMARY KEY (idImagen)
);

CREATE TABLE IF NOT EXISTS Detalle_Almacen(
	idDetalleAlmacen INT UNSIGNED AUTO_INCREMENT NOT NULL,
    
    stock INT UNSIGNED,
    
    CONSTRAINT pk_detalle_almacen PRIMARY KEY (idDetalleAlmacen)
);

CREATE TABLE IF NOT EXISTS Almacen(
	idAlmacen INT UNSIGNED AUTO_INCREMENT  NOT NULL,
	idDetalleAlmacen INT UNSIGNED,
    
    nombre VARCHAR(25),
    
	CONSTRAINT pk_almacen PRIMARY KEY (idAlmacen),
	CONSTRAINT fk_almacen_detalleAlmacen FOREIGN KEY (idDetalleAlmacen) REFERENCES Detalle_Almacen(idDetalleAlmacen)
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
    CONSTRAINT fk_producto_imagenes FOREIGN KEY (idImagen) REFERENCES Imagen(idImagen),
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

CREATE TABLE IF NOT EXISTS Rol_Operaciones(
	idRolOperaciones INT UNSIGNED AUTO_INCREMENT  NOT NULL,
	idRol INT UNSIGNED,
    idOperaciones INT UNSIGNED,
    
	CONSTRAINT pk_rolOperaciones PRIMARY KEY (idRolOperaciones),
    CONSTRAINT fk_rolOperaciones_operaciones FOREIGN KEY (idOperaciones) REFERENCES Operaciones(idOperaciones),
    CONSTRAINT fk_rolOperaciones_rol FOREIGN KEY (idRol) REFERENCES Rol(idRol)
);

CREATE TABLE IF NOT EXISTS Empleado(
	idEmpleado INT UNSIGNED AUTO_INCREMENT  NOT NULL,

    nombre VARCHAR(20),
    apellidoMaterno VARCHAR(15),
    apellidoPaterno VARCHAR(15),
	telefono VARCHAR(15),
    fechaNac DATETIME,
    direccion VARCHAR(40),
    
	CONSTRAINT pk_empleado PRIMARY KEY (idEmpleado)
);

CREATE TABLE IF NOT EXISTS Usuario(
	idUsuario INT UNSIGNED AUTO_INCREMENT  NOT NULL,
	idEmpleado INT UNSIGNED,
    idRol INT UNSIGNED,
    
    nombre VARCHAR(45),
    password VARCHAR(30),
    userName VARCHAR(45),
    email VARCHAR(30),
    
	CONSTRAINT pk_usuario PRIMARY KEY (idUsuario),
	CONSTRAINT fk_usuario_empleado FOREIGN KEY (idEmpleado) REFERENCES Empleado(idEmpleado),
    CONSTRAINT fk_usuario_rol FOREIGN KEY (idRol) REFERENCES Rol(idRol)
);

CREATE TABLE IF NOT EXISTS Cotizacion(
	idCotizacion INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idEmpleado INT UNSIGNED,
    idProveedor INT UNSIGNED,

    fechaCotizacion DATETIME,
    
	CONSTRAINT pk_cotizacion PRIMARY KEY (idCotizacion),
    CONSTRAINT fk_cotizacion_empleado FOREIGN KEY (idEmpleado) REFERENCES Empleado(idEmpleado),
    CONSTRAINT fk_cotizacion_proveedor FOREIGN KEY (idProveedor) REFERENCES Proveedor(idProveedor)
);

CREATE TABLE IF NOT EXISTS Detalle_Compra(
	idDetalleCompra INT UNSIGNED AUTO_INCREMENT  NOT NULL,
    idCotizacion INT UNSIGNED,
    idProducto INT UNSIGNED,

    fechaCompra DATETIME,
	cantidad INT UNSIGNED,
    precio DECIMAL,
    subtotal DECIMAL,
    
	CONSTRAINT pk_detalleCompra PRIMARY KEY (idDetalleCompra),
    CONSTRAINT fk_detalleCompra_cotizacion FOREIGN KEY (idCotizacion) REFERENCES Cotizacion(idCotizacion),
    CONSTRAINT fk_detalleCompra_producto FOREIGN KEY (idProducto) REFERENCES Producto(idProducto)
);

INSERT INTO Modulo VALUES (1, 'Inicio sesión');
INSERT INTO Modulo VALUES (2, 'Categorias');
INSERT INTO Modulo VALUES (3, 'Productos');
INSERT INTO Modulo VALUES (4, 'Pedidos');
INSERT INTO Modulo VALUES (5, 'Proveedores');
INSERT INTO Modulo VALUES (6, 'Usuarios');

INSERT INTO Operaciones VALUES (1, 1, 'Ver');
INSERT INTO Operaciones VALUES (2, 2, 'Ver');
INSERT INTO Operaciones VALUES (3, 2, 'Edicion');
INSERT INTO Operaciones VALUES (4, 3, 'Ver');
INSERT INTO Operaciones VALUES (5, 3, 'Edicion');
INSERT INTO Operaciones VALUES (6, 4, 'Ver');
INSERT INTO Operaciones VALUES (7, 4, 'Edicion');
INSERT INTO Operaciones VALUES (8, 4, 'Generar');
INSERT INTO Operaciones VALUES (9, 5, 'Ver');
INSERT INTO Operaciones VALUES (10, 5, 'Edicion');
INSERT INTO Operaciones VALUES (11, 6, 'Editar configuracion');

INSERT INTO Rol VALUES (1, 'Administrador');
INSERT INTO Rol VALUES (2, 'Encargado del almacen');

INSERT INTO Imagen VALUES (1, 'Mascarilla kN95', '/KN95.png');
INSERT INTO Imagen VALUES (2, 'Taza', '/taza.png');

INSERT INTO Categoria VALUES (1, 'Protección personal', 'Articulos de proteccion contra el COVID-19');
INSERT INTO Categoria VALUES (2, 'Hogar y cocina', 'Articulos del hogar');

INSERT INTO Detalle_Almacen VALUES (1, 50);
INSERT INTO Detalle_Almacen VALUES (2, 100);

INSERT INTO Almacen VALUES (1, 1, 'Almacen A');
INSERT INTO Almacen VALUES (2, 2, 'Almacen B');

INSERT INTO Producto VALUES (1, 1, 1, 1, 'Mascarilla kN95', 'Esta es una mascarilla', 3.50, 1);
INSERT INTO Producto VALUES (2, 2, 2, 2, 'Taza Dia de la madre', 'Esta es una taza', 10.0, 0);

INSERT INTO Proveedor VALUES (1, 'Prosemedic', 'Xiantao Rayxin Medical Products', '956652369', '1665455239874');
INSERT INTO Proveedor VALUES (2, 'Limpieza', 'Productos de limpieza', '981489636', '4963325698114');

INSERT INTO Empleado VALUES (1, 'Larry', 'Chuzon', 'Benites', '986532569', '01/01/2000', 'En mi casita');
INSERT INTO Empleado VALUES (2, 'Denilson', 'Chuzon', 'Benites', '986532569', '01/01/2000', 'En mi casita');
INSERT INTO Empleado VALUES (3, 'Liliana', 'Villegas', 'Villanueva', '986532569', '01/01/2000', 'En mi casita');

INSERT INTO Usuario VALUES (1, 1, 1, 'adm', 'adm', 'administrador', 'adm@adm.com');
INSERT INTO Usuario VALUES (2, 2, 2, 'Liliana', 'lili2021', 'vendedor', '@gmail.com');
INSERT INTO Usuario VALUES (3, 3, 2, 'Larry', 'larry2021', 'almacen', '@gmail.com');

INSERT INTO Cotizacion VALUES (1, 1, 1, '09-10-2021');
INSERT INTO Cotizacion VALUES (2, 2, 1, '10-10-2021');

INSERT INTO Detalle_Compra VALUES (1, 1, 1, '10-10-2021', 50, 5.0, 250.0);
INSERT INTO Detalle_Compra VALUES (2, 2, 2, '11-10-2021', 30, 7.5, 225.0);

INSERT INTO Rol_Operaciones VALUES (1, 1, 1 );
INSERT INTO Rol_Operaciones VALUES (2, 1, 2 );
INSERT INTO Rol_Operaciones VALUES (3, 1, 3 );
INSERT INTO Rol_Operaciones VALUES (4, 1, 4 );
INSERT INTO Rol_Operaciones VALUES (5, 1, 5 );
INSERT INTO Rol_Operaciones VALUES (6, 1, 6 );
INSERT INTO Rol_Operaciones VALUES (7, 1, 7 );
INSERT INTO Rol_Operaciones VALUES (8, 1, 8 );
INSERT INTO Rol_Operaciones VALUES (9, 1, 9 );
INSERT INTO Rol_Operaciones VALUES (10, 1, 10 );
INSERT INTO Rol_Operaciones VALUES (11, 1, 11 );

INSERT INTO Rol_Operaciones VALUES (12, 2, 1 );
INSERT INTO Rol_Operaciones VALUES (13, 2, 2 );
INSERT INTO Rol_Operaciones VALUES (14, 2, 3 );
INSERT INTO Rol_Operaciones VALUES (15, 2, 4 );
INSERT INTO Rol_Operaciones VALUES (16, 2, 5 );
INSERT INTO Rol_Operaciones VALUES (17, 2, 6 );
INSERT INTO Rol_Operaciones VALUES (18, 2, 7 );
INSERT INTO Rol_Operaciones VALUES (19, 2, 8 );
INSERT INTO Rol_Operaciones VALUES (20, 2, 9 );
INSERT INTO Rol_Operaciones VALUES (21, 2, 10 );
