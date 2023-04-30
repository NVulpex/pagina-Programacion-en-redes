

create table usuarios(
id_usuario int primary key auto_increment not null,
nom_usuario varchar(45) not null,
ape_usuario varchar(45) not null,
nomu_usuario varchar(45) not null,
email_usuario varchar(50) not null,
pass_usuario varchar(30) not null
);

/* Usuario administrador*/
insert into usuarios (nom_usuario, ape_usuario, nomu_usuario, email_usuario, pass_usuario) value ('Admin', 'Vulpis', 'AdminVulpis', 'ludiuriel@gmail.com', 'criemaludi');

create table domicilios(
id_domicilio int primary key auto_increment not null,
id_usu int ,
calle varchar(30) not null,
num_calle int not null,
provincia varchar(30) not null,
ciudad varchar(30)not null,
piso int,
dpto varchar(5),
pais varchar(50) not null,
CodigoPostal varchar(8) not null,
foreign key (id_usu) references usuarios(id_usuario)
);

create table productos(
id_producto int primary key auto_increment not null,
nom_producto varchar(50) not null,
precio_producto decimal(10,2) not null,
info_producto text(100)
);

create table carrito(
id_carrito int primary key auto_increment not null,
id_usu int,
id_prod int,
cantidad int not null,
foreign key (id_usu) references usuarios(id_usuario),
foreign key (id_prod) references productos(id_producto)
);

create table MetodoPago(
id_MP int primary key auto_increment not null,
nombre varchar(30)
);

insert into MetodoPago(nombre) value('credito');
insert into MetodoPago(nombre) value('paypal');
insert into MetodoPago(nombre) value('efectivo');
insert into MetodoPago(nombre) value('otro');

create table orden(
id_orden int primary key auto_increment not null,
id_usu int,
id_mp int,
id_dom int,
total decimal(10,2) not null,
foreign key (id_usu) references usuarios(id_usuario),
foreign key (id_mp) references MetodoPago(id_MP),
foreign key (id_dom) references domicilios(id_domicilio)
);

create table detalle_orden(
id_DO int primary key auto_increment not null,
id_ord int,
id_prod int,
cantidad int not null,
precio decimal(10,2) not null,
foreign key (id_prod) references productos(id_producto),
foreign key (id_ord) references orden(id_orden)
);

create table reportes(
id_reporte int primary key auto_increment not null,
id_usu int,
id_prod int,
foreign key (id_prod) references productos(id_producto),
foreign key (id_usu) references usuarios(id_usuario)
);

