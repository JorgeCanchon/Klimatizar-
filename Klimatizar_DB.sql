use master
go
IF DB_ID(N'KLIMATIZAR')IS NOT NULL
DROP DATABASE KLIMATIZAR
GO
create database KLIMATIZAR
use KLIMATIZAR
go


create table empleados(
Codigo_empleado Varchar(20) primary key,
Documento varchar(30) not null,
Nombre varchar(30)not null,
Apellidos varchar(30)not null,
Cargo varchar(30)not null,
Telefono varchar(30)not null,
Correo varchar(30)null,
Codigo_cargo varchar(20) not null
)

create table cargo(
Codigo_cargo varchar(20)primary key,
Nombre_cargo varchar(30) not null,
Descripcion varchar(30) null
)
create table producto(
Codigo_producto varchar(20)primary key,
Nombre_producto varchar(30) not null,
Detalle_producto varchar(30)null,
precio money not null,
valor_unidad money not null,
Cantidad varchar(30)not null,
NIT varchar(20)not null
)
create table Proveedores(
NIT varchar(20)primary key,
Nombre_proveedor varchar(30) not null,
Direccion varchar(30)not null,
Telefono varchar(30)not null
)

Create table Empleado_Fichatecnica(
Codigo_empleado_fichatecnica varchar(20) primary key,
Codigo_empleado varchar(20)not null,
Codigo_ficha varchar(20)not null
)

Create table Orden_de_compra(
Codigo_orden varchar(20)primary key,
Fecha date not null,
Comprador varchar(30)not null,
Direccion varchar(30)not null,
obra_o_proyecto varchar(30)not null,
Descripcion varchar(30)null,
Codigo_despacho varchar(20)not null,
Codigo_producto varchar(20)not null,
Codigo_empleado varchar(20)not null
)

create table Despacho_materiales(
Codigo_despacho varchar(20)primary key,
Descripcion varchar (30) null,
Codigo_producto varchar(20)not null,
Fecha date not null
)
create table Ficha_tecnica(
Codigo_ficha varchar(20)primary key,
Descripcion varchar(30)not null,
Fecha_inicio date not null,
Fecha_fin date not null,
Duracion varchar(30)not null,
Codigo_proyecto varchar(20)not null,
Codigo_empleado varchar(20)not null
)
Create table Proyecto(
Codigo_proyecto varchar(20)primary key,
Nombre_proyecto varchar(20)not null,
Encargado_proyecto varchar(30) not null,
Descripcion varchar(30)null,
Codigo_requisicion varchar(20)not null,
Codigo_devolucion varchar(20)not null
)
Create table Requisicion_de_materiales(
Codigo_requisicion varchar(20)primary key,
Solicitado_por varchar(30)not null,
Entregado_por varchar(30)not null,
Descripcion varchar(30)not null,
Fecha date not null,
Cantidad varchar(30)not null,
Valor_unidad money not null,
Clase_unidad varchar(30)not null
)

create table Devolucion(
Codigo_devolucion varchar(20) primary key,
Codigo_producto varchar(20) not null,
Fecha date not null,
Descripcion varchar(30)not null
)

alter table empleados
add foreign key (Codigo_cargo)references cargo
Alter table empleado_fichatecnica
add foreign key (Codigo_empleado)references empleados,
foreign key (codigo_ficha)references ficha_tecnica
Alter table ficha_tecnica
add foreign key (Codigo_proyecto)references proyecto,
foreign key(codigo_empleado)references empleados
alter table proyecto
add foreign key(Codigo_requisicion)references requisicion_de_materiales,
foreign key(Codigo_devolucion)references devolucion
alter table devolucion
add foreign key(codigo_producto)references producto
alter table orden_de_compra 
add foreign key (codigo_despacho)references despacho_materiales,
foreign key(codigo_producto)references producto,
foreign key(codigo_empleado)references empleados
alter table producto
add foreign key(NIT)references proveedores


