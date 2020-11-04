CREATE DATABASE prueba character set utf8;
USE prueba;
CREATE TABLE alumno(
dni INT NOT NULL PRIMARY KEY,
nombre VARCHAR(30) NOT NULL ,
apellido VARCHAR(30) NOT NULL ,
carrera VARCHAR (40) NOT NULL
)
