create database lock_and_dates;
use lock_and_dates;


create table cita(
id_cita int auto_increment primary key,
fecha_cita date not null,
hora_cita time not null,
estado_cita varchar(20) not null);

create table rol(
id_rol int primary key,
descripcion_rol varchar (30) not null,
estado_rol varchar(20) not null);

create table servicio(
id_servicio int auto_increment primary key,
descripcion_servicio varchar(30) not null,
estado_servicio varchar(20) not null);

create table usuario(
id_usuario int auto_increment primary key,
num_doc_usuario varchar(15) not null,
tipo_doc_usuario varchar(20) not null unique,
nombre_usuario varchar (50) not null,
apellido_usuario varchar(50) not null,
direccion_usuario varchar(50) not null,
telefono_usuario varchar (20) not null,
correo_usuario varchar (50) not null,
pass_usuario varchar(20) not null,
estado_usuario varchar (20) not null,
id_rol_fk int not null default 2);



create table asignacion_cita(
id_asignacion int auto_increment primary key,
fecha_asignacion date not null,
id_cita_fk int not null,
id_usuario_fk int not null,
id_servicio_fk int not null);


alter table usuario add foreign key (id_rol_fk) references rol(id_rol);
alter table asignacion_cita add foreign key (id_usuario_fk) references usuario (id_usuario);
alter table asignacion_cita add foreign key (id_cita_fk) references cita (id_cita);
alter table asignacion_cita add foreign key (id_servicio_fk) references servicio (id_servicio);



#NOTA...
#los registros con varchar van dentro de comillas simples o dobles ("") ('')
#Los numeros van sin comillas

#---Inserción de datos en la tabla rol---

INSERT INTO rol (id_rol, descripcion_rol, estado_rol) VALUES (1, 'rol de usuario administrador', 'activo');
INSERT INTO rol (id_rol, descripcion_rol, estado_rol) VALUES (2, 'rol de usuario empleado', 'activo');
INSERT INTO rol (id_rol, descripcion_rol, estado_rol) VALUES (3, 'rol de usuario cliente', 'activo');


#---Inserción de datos en la tabla usuario---

 INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario,
 direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, estado_usuario, id_rol_fk) VALUES
 ('10145509387', 't.i', 'emanuel', 'farias', 'cale 51', '3133557646', 'emanuel@mail.com', 'emanuel0917', 'activo', 3);
 
 INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario,
 direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, estado_usuario, id_rol_fk) VALUES
 ('1013240987', 'c.c', 'juan', 'martinez', 'calle 21', '344023465', 'juanM@mail.com', 'juanm123', 'activo', 2);
 
 
  INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario,
 direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, estado_usuario, id_rol_fk) VALUES
 ('12121212', 'c.c', 'maria', 'paredes', 'calle 11', '1234564', 'maria@mail.com', 'maria123', 'activo', 3);
 

  INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario,
 direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, estado_usuario, id_rol_fk) VALUES
 ('31313131', 't.i', 'lorena', 'pinto', 'calle 63', '1209284', 'loremari@mail.com', 'lorenimsu', 'activo', 3);
 
   INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario,
 direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, estado_usuario, id_rol_fk) VALUES
 ('1210909', 't.i', 'jajaja', 'jeje', 'none 63', '0000000', 'anonimo@mail.com', 'cariñosa.com', 'activo', 3);
 
 
 
 #---Inserción de datos en la tabla cita---

 INSERT INTO `cita` (`fecha_cita`, `hora_cita`, `estado_cita`) VALUES ('2023-10-17', '17:32:12', 'activo');
 
 INSERT INTO `cita` (`fecha_cita`, `hora_cita`, `estado_cita`) VALUES ('2023-10-18', '15:26:18', 'activo');
 
 INSERT INTO `cita` (`fecha_cita`, `hora_cita`, `estado_cita`) VALUES ('2023-10-24', '08:33:59', 'activo');
 
 
  
 #---Inserción de datos en la tabla servicio---
 INSERT INTO `servicio` (`descripcion_servicio`, `estado_servicio`) VALUES ('corte de cabello, hombre', 'activo');
 
 INSERT INTO `servicio` (`descripcion_servicio`, `estado_servicio`) VALUES ('corte de cabello, mujer', 'activo');
 
 INSERT INTO `servicio` (`descripcion_servicio`, `estado_servicio`) VALUES ('elaboracion de trenzas ', 'activo');
 
 
  #---Inserción de datos en la tabla servicio---
 INSERT INTO `asignacion_cita` (`fecha_asignacion`, `id_cita_fk`, `id_usuario_fk`, `id_servicio_fk`) VALUES (
 '2023-10-17', '1', '3', '1');
 
 INSERT INTO `asignacion_cita` (`fecha_asignacion`, `id_cita_fk`, `id_usuario_fk`, `id_servicio_fk`) VALUES
 ('2023-10-25', '2', '4', '2');
 
 INSERT INTO `asignacion_cita` (`fecha_asignacion`, `id_cita_fk`, `id_usuario_fk`, `id_servicio_fk`) VALUES 
('2023-10-25', '3', '5', '3');
 
 
 
 
 #---Consultar datos---
 select * from usuario;
 select * from rol;
 select * from cita;
 select * from servicio;
 select * from asignacion_cita;
 
 
 #---Actualizar datos---
 update usuario
 set apellido_usuario = "farias"
 where id_usuario = 2;
 
 update cita
 set fecha_cita =  "2023-10-19"
 where id_cita = 2;
 
 

  #---Eliminar datos---
delete from usuario where id_usuario=6;


#CRUD:
# C = CREATE - CREAR 
# R = READ -LEER
# U = UPDATE -ACTUALIZAR
# D = DELETE - ELIMINAR


select * from usuario; #Consulta general

select nombre_usuario, apellido_usuario, correo_usuario from usuario where id_usuario = 5; #Consulta especifica

select * FROM rol;



# Procedimientos almacenados insertar

#Crear rol usuario
delimiter //
create procedure insertar_rol(id_rol_usuario int, desc_rol varchar(30), estado varchar(20))
begin
INSERT INTO rol (id_rol, descripcion_rol, estado_rol) VALUES (id_rol_usuario, desc_rol, estado);
end // 
delimiter ;

call insertar_rol(1, "rol de usuario administrador", "activo");







# crear usuario
delimiter //
create procedure insertar_usuario(num_doc varchar(15),
 tipo_doc varchar(20), 
 nombre_usu varchar (50),
 apellido_usu varchar(50),
 direccion_usu varchar(50),
 telefono_usu varchar (20),
 correo_usu varchar (50),
 pass_usu varchar(20),
 estado_usu varchar (20),
 id_rol_usu_fk int)
 
 begin
  INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario,
 direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, estado_usuario, id_rol_fk) VALUES
 (num_doc,  tipo_doc, nombre_usu, apellido_usu, direccion_usu, telefono_usu ,  correo_usu,  pass_usu,  estado_usu, id_rol_usu_fk);
 end //
 delimiter ;
 
 call insertar_usuario(1013454554,"c.c", "Emanuel","Farias","calle 51", 12354434,"emanuel@gmail.com","colco12","activo",2);
 
 
 
 
 

 
 # crear cita
 delimiter //
create procedure insertar_cita(fecha date, hora time, estado varchar(20))
begin

 INSERT INTO `cita` (`fecha_cita`, `hora_cita`, `estado_cita`) VALUES (fecha, hora, estado);
end //
delimiter ;

call insertar_cita("2024-05-9", "17:30:12", "activo");







# crear servicio 
delimiter //
create procedure insertar_servicio (desc_servicio varchar(30), estado_servicio varchar(20))
begin
insert into servicio (descripcion_servicio,estado_servicio)
values (desc_servicio,estado_servicio);
end //
delimiter ;

call insertar_servicio ("corte de cabello para hombre","activo");






# Procedimientos almacenados consulta general
#consultar usuarios
delimiter //
create procedure consultar_usuarios()
begin
select * from usuario;
end //
delimiter ;

call consultar_usuarios();




#consultar servicios
delimiter //
create procedure consultar_servicios()
begin
select * from servicio;
end //
delimiter ;

call consultar_servicios();



#consultar citas 
delimiter //
create procedure consultar_citas()
begin
select * from cita;
end //
delimiter ;

call consultar_citas();



#consultar roles 
delimiter //
create procedure consultar_roles()
begin
select * from rol;
end //
delimiter ;

call consultar_roles();





# Procedimientos almacenados consulta por clave
# consultar usuario por id
delimiter //
create procedure consultar_usuario_por_id(id int)
begin
select * from usuario where id_usuario = id;
end //
delimiter ;

call consultar_usuario(3);



# consultar servicio por id
delimiter //
create procedure consultar_servicio_por_id(id int)
begin
select * from servicio where id_servicio = id;
end //
delimiter ;

call consultar_servicio(1);


# consultar cita por id
delimiter //
create procedure consultar_cita_por_id(id int)
begin
select * from cita where id_cita = id;
end //
delimiter ;

call consultar_cita_por_id(1);


# consultar rol por id
delimiter //
create procedure consultar_rol_por_id(id int)
begin
select * from rol where id_rol = id;
end //
delimiter ;

call consultar_rol_por_id(1);





# procedimientos almacenados eliminar
# Eliminar usuario
delimiter //
create procedure eliminar_usuario(id int)
begin
delete from usuario where id_usuario = id;
end //
delimiter ;

call eliminar_usuario(1);



# Eliminar servicio
delimiter //
create procedure eliminar_servicio(id int)
begin
delete from servicio where id_servicio = id;
end //
delimiter ;

call eliminar_servicio(3);



# Eliminar cita
delimiter //
create procedure eliminar_cita(id int)
begin
delete from cita where id_cita = id;
end //
delimiter ;

call eliminar_cita(3);




# Eliminar rol
delimiter //
create procedure eliminar_rol(id int)
begin
delete from rol where id_rol = id;
end //
delimiter ;

call eliminar_rol(3);











 