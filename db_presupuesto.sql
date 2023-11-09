/* ===== CREANDO LA BASE DE DARTOS ===== */


create database if not exists sis_presupuesto default character set latin1 collate latin1_swedish_ci;
use sis_presupuesto;

/* ===== CREANDO TABLA DE USUARIOS ===== */

create table usuario(
    id int(11) not null primary key auto_increment,
    nombre varchar(200) not null,
    usuario varchar(200) not null,
    password varchar(200) not null,
    perfil varchar(100) not null,
    estado int(11) not null,
    ultimo_login datetime not null,
    fecha timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) engine=InnoDB default charset=utf8 collate=utf8_spanish_ci;

/* ===== CREANDO TABLA DE CONTACTO DE CLIENTE ===== */

create table contacto_cliente(
    id_contacto int(11) not null primary key auto_increment,
    nombre_contacto varchar(150) not null,
    apellidos_contacto varchar(200) not null,
    telefono_contacto varchar(12) not null,
    correo_contacto varchar(150) not null,
    fecha_contacto timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)engine=InnoDB default charset=utf8 collate=utf8_spanish_ci;

/* ===== CREANDO TABLA DE EMPRESA ===== */

create table empresa(
    id_empresa int(11) not null primary key auto_increment,
    nombre_empresa varchar(200) not null,
    ruc_empresa varchar(200) not null,
    direccion_empresa varchar(200) not null,
    telefono_empresa varchar(12) not null,
    correo_empresa varchar(200) not null,
    fecha_empresa timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)engine=InnoDB default charset=utf8 collate=utf8_spanish_ci;

/* ===== CREANDO TABLA DE PROVEEDOR ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */



/* =====  ===== */
