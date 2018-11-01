drop database gestorDeposito;
create database gestorDeposito;
use gestorDeposito;
create table deposito(
id int not null auto_increment primary key,
nombre varchar(20),
precio float(6,2),
cantidad int(5)
);

create table Usuarios(
id_Usuarios int not null auto_increment primary key,
nombreU varchar(20),
apellidoU varchar(20),
correo varchar(20),
contrasena varchar(20)
);
select*from deposito;
