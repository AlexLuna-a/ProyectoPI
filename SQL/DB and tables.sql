/**
 * Author:  alexl
 * Created: 19/04/2021
 */

CREATE DATABASE ProyectoPI;
USE ProyectoPI;

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
SELECT id, CONCAT(nombre, " ", apellidos) AS nombre, correo, IF (rol>1, "Gerente", "Ejecutivo") AS rol, IF (status>0, "Activo", "Inactivo") AS status
FROM administradores;


