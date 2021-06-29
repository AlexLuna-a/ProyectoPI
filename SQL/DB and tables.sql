/**
 * Author:  alexl
 * Created: 19/04/2021
 */

CREATE DATABASE ProyectoPI;
USE ProyectoPI;


/* --ADMINISTRADORES--  */

CREATE TABLE administradores(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(150) NOT NULL,
apellidos VARCHAR(150) NOT NULL,
correo VARCHAR(255) NOT NULL UNIQUE,
pass VARCHAR(255) NOT NULL,
rol INT(1) NOT NULL,
archivo_n VARCHAR(255),
archivo VARCHAR(255), 
status INT(1) DEFAULT  1,
eliminado INT(1) DEFAULT 0
);

INSERT INTO administradores (nombre, apellidos,correo, pass,rol) 
VALUES ('Alex', 'Luna', 'Alex@mail.com', '12345', 1), 
('Jose', 'Robles', 'Jose@mail.com', '12345', 1), 
('Pedro', 'Perez', 'Pedro@mail.com', '12345', 2),
('Juan', 'Lopez', 'Juan@mail.com', '12345', 2);


CREATE VIEW lista_administradores AS 
SELECT id, nombre, apellidos, Correo, IF (rol>1, "Gerente", "Ejecutivo") AS rol 
FROM administradores WHERE status = 1 AND eliminado = 0;

CREATE VIEW detalle_administradores AS 
SELECT id, CONCAT(nombre, " ", apellidos) AS nombre, correo, IF (rol>1, "Gerente", "Ejecutivo") AS rol, IF (status>0, "Activo", "Inactivo") AS status, archivo_n, archivo
FROM administradores;




/* --PRODUCTOS--  */

CREATE TABLE productos(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(128) NOT NULL,
    codigo VARCHAR(32) NOT NULL UNIQUE,
    descripcion TEXT NOT NULL,
    costo DOUBLE NOT NULL,
    stock INT NOT NULL,
    archivo_n VARCHAR(255) NOT NULL,
    archivo VARCHAR(128) NOT NULL,
    status INT NOT NULL DEFAULT 1,
    eliminado INT NOT NULL DEFAULT 0
);

INSERT INTO `productos` 
(`id`, `nombre`, `codigo`, `descripcion`, `costo`, `stock`, `archivo_n`, `archivo`, `status`, `eliminado`) 
VALUES 
(NULL, 'Prueba ', 'P1', 'Esta es una prueba para el funcionamiento  de la tabla', '100.10', '10', '39a114ed74f70b34510483bf4eab0278.jfif', '39a114ed74f70b34510483bf4eab0278.jfif', '1', '0');
INSERT INTO `productos` 
(`id`, `nombre`, `codigo`, `descripcion`, `costo`, `stock`, `archivo_n`, `archivo`, `status`, `eliminado`) 
VALUES 
(NULL, 'Prueba 2', 'P2', 'Esta es una prueba para el funcionamiento  de la tabla', '10', '1', '39a114ed74f70b34510483bf4eab0278.jfif', '39a114ed74f70b34510483bf4eab0278.jfif', '1', '0');
INSERT INTO `productos` (`id`, `nombre`, `codigo`, `descripcion`, `costo`, `stock`, `archivo_n`, `archivo`, `status`, `eliminado`) 
VALUES 
(NULL, 'Prueba 3', 'P3', 'Esta es una prueba para el funcionamiento  de la tabla', '1.15', '100', '39a114ed74f70b34510483bf4eab0278.jfif', '39a114ed74f70b34510483bf4eab0278.jfif', '1', '0');




/* --BANNERS--  */

CREATE TABLE banners (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(128) NOT NULL,
    archivo VARCHAR(128) NOT NULL,
    status INT NOT NULL DEFAULT 1,
    eliminado INT NOT NULL DEFAULT 0
);