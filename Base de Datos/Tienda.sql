CREATE TABLE sucursal(
    id_sucursal INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_sucursal),
    direcion VARCHAR(150) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE rol_usuario(
    id_rol_usuario INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_rol_usuario),
    nombreRol CHAR(25) NOT NULL
);
CREATE TABLE empleado(
    id_emplado INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_emplado),
    pnombre CHAR(30) NOT NULL,
    papellido CHAR(30) NOT NULL,
    dir_emp VARCHAR(40) NULL,
    telefono VARCHAR(20) NOT NULL,
    cel VARCHAR(20) NULL,
    nom_usu VARCHAR(30) NOT NULL,
    pasword VARCHAR(8) NOT NULL,
    id_rol_usuario INT NOT NULL,
    id_sucursal INT NOT NULL,
    comision NUMERIC(6, 2) NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE clientes(
    id_cliente INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_cliente),
    pnombre CHAR(30) NOT NULL,
    papellido CHAR(30) NOT NULL,
    dir_cli VARCHAR(60) NULL,
    NIT VARCHAR(30) NULL,
    NRC VARCHAR(30) NULL,
    Telefono VARCHAR(20) NULL,
    Celular VARCHAR(20) NULL,
    id_rol_usuario INT,
    email VARCHAR(50) NOT NULL,
    pasword VARCHAR(8) NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE tipo_pago(
    id_pago INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_pago),
    tipo VARCHAR(30) NOT NULL
);
CREATE TABLE factura(
    serie INT AUTO_INCREMENT,
    cod_factura VARCHAR(8),
    PRIMARY KEY(serie, cod_factura),
    fecha_fac DATE,
    id_sucursal INT,
    NRC_dueño VARCHAR(20),
    id_emplado INT,
    id_cliente INT,
    descrip VARCHAR(60),
    descuento NUMERIC(4, 2),
    total NUMERIC(7, 2),
    iva NUMERIC(5, 2),
    estado VARCHAR(30),
    venta_Exenta NUMERIC(5, 2),
    venta_Gravada NUMERIC(5, 2),
    id_pago INT 
);
CREATE TABLE presentacion(
    id_precentacion INT AUTO_INCREMENT,
    PRIMARY KEY(id_precentacion),
    descripcion_pre VARCHAR(50) NOT NULL,
    can_uni_pre NUMERIC(4) NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE colores(
    id_color INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_color),
    color VARCHAR(20) NOT NULL
);
CREATE TABLE marcas(
    id_marca INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_marca),
    Marca VARCHAR(30) NOT NULL
);
CREATE TABLE proveedor(
    id_proveedor INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY(id_proveedor),
    nom_prov VARCHAR(40) NOT NULL,
    nom_ejec VARCHAR(40) NULL,
    NRC VARCHAR(30) NOT NULL,
    dir_prov VARCHAR(50) NULL,
    telefono VARCHAR(20) NOT NULL,
    celular_ejec CHAR(20) NULL,
    email VARCHAR(50) NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE ListaProducto(
    id_Procuto VARCHAR(20),
    PRIMARY KEY(id_Procuto),
    id_marca INT,
    id_color INT,
    id_precentacion INT,
    nom_pro VARCHAR(60) NOT NULL,
    pre_compra NUMERIC(10, 2) NOT NULL,
    id_proveedor INT,
    tpIva VARCHAR(20) NOT NULL,
    existenciaTotal INT NOT NULL,
    estado VARCHAR(30) NOT NULL,
    imagen BLOB NOT NULL
);
CREATE TABLE existenciaProducto(
    id_Procuto VARCHAR(20),
    cod_barras VARCHAR(20),
    id_marca INT,
    id_color INT,
    id_precentacion INT,
    PRIMARY KEY(
        cod_barras,
        id_color,
        id_precentacion,
        id_marca
    ),
    existencia INT NOT NULL,
    pre_venta NUMERIC(10, 2) NOT NULL,
    pre_mayore NUMERIC(10, 2) NULL,
    id_sucursal INT NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE Detalle(
    linea INT AUTO_INCREMENT,
    serie INT,
    cod_factura VARCHAR(8),
    PRIMARY KEY(linea, cod_factura),
    cod_barras VARCHAR(20),
    id_marca INT,
    id_color INT,
    id_precentacion INT,
    pre_venta NUMERIC(10, 2) NOT NULL,
    cantidad_comp INT NOT NULL,
    total NUMERIC(7, 2) NOT NULL
);
CREATE TABLE OrdenPedido(
    cod_orden INT AUTO_INCREMENT NOT NULL,
    cod_prov INT NOT NULL,
    PRIMARY KEY(cod_orden),
    fecha_pedido DATE NOT NULL,
    id_sucursal INT NOT NULL,
    estado VARCHAR(30) NOT NULL
);
CREATE TABLE detallepedido(
    linea INT AUTO_INCREMENT NOT NULL,
    cod_orden INT,
    PRIMARY KEY(linea, cod_orden),
    cod_barras VARCHAR(20),
    id_marca INT,
    id_color INT,
    id_precentacion INT,
    precio_compra NUMERIC(10, 2),
    can_pre INT NOT NULL,
    total NUMERIC(7, 2)
);
ALTER TABLE
    clientes ADD FOREIGN KEY(id_rol_usuario) REFERENCES rol_usuario(id_rol_usuario);
ALTER TABLE
    factura ADD FOREIGN KEY(id_sucursal) REFERENCES sucursal(id_sucursal);
ALTER TABLE
    factura ADD FOREIGN KEY(id_emplado) REFERENCES empleado(id_emplado);
ALTER TABLE
    factura ADD FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente);
ALTER TABLE
    factura ADD FOREIGN KEY(id_pago) REFERENCES tipo_pago(id_pago);
ALTER TABLE
    empleado ADD FOREIGN KEY(id_rol_usuario) REFERENCES rol_usuario(id_rol_usuario);
ALTER TABLE
    empleado ADD FOREIGN KEY(id_sucursal) REFERENCES sucursal(id_sucursal);
ALTER TABLE
    ListaProducto ADD FOREIGN KEY(id_marca) REFERENCES marcas(id_marca);
ALTER TABLE
    ListaProducto ADD FOREIGN KEY(id_color) REFERENCES colores(id_color);
ALTER TABLE
    ListaProducto ADD FOREIGN KEY(id_precentacion) REFERENCES presentacion(id_precentacion);
ALTER TABLE
    ListaProducto ADD FOREIGN KEY(id_proveedor) REFERENCES proveedor(id_proveedor);
ALTER TABLE
    existenciaProducto ADD FOREIGN KEY(id_Procuto) REFERENCES ListaProducto(id_Procuto);
ALTER TABLE
    existenciaProducto ADD FOREIGN KEY(id_marca) REFERENCES marcas(id_marca);
ALTER TABLE
    existenciaProducto ADD FOREIGN KEY(id_color) REFERENCES colores(id_color);
ALTER TABLE
    existenciaProducto ADD FOREIGN KEY(id_precentacion) REFERENCES presentacion(id_precentacion);
ALTER TABLE
    existenciaProducto ADD FOREIGN KEY(id_sucursal) REFERENCES sucursal(id_sucursal);
ALTER TABLE
    Detalle ADD FOREIGN KEY(serie, cod_factura) REFERENCES factura(serie, cod_factura);
ALTER TABLE
    Detalle ADD FOREIGN KEY(
        cod_barras,
        id_color,
        id_precentacion,
        id_marca
    ) REFERENCES existenciaProducto(
        cod_barras,
        id_color,
        id_precentacion,
        id_marca
    );
ALTER TABLE
    OrdenPedido ADD FOREIGN KEY(id_sucursal) REFERENCES sucursal(id_sucursal);
ALTER TABLE
    OrdenPedido ADD FOREIGN KEY(cod_prov) REFERENCES proveedor(id_proveedor);
ALTER TABLE
    detallepedido ADD FOREIGN KEY(cod_orden) REFERENCES OrdenPedido(cod_orden);
ALTER TABLE
    detallepedido ADD FOREIGN KEY(
        cod_barras,
        id_color,
        id_precentacion,
        id_marca
    ) REFERENCES existenciaProducto(
        cod_barras,
        id_color,
        id_precentacion,
        id_marca
    );