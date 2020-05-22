DROP DATABASE empresaProyectos;

CREATE DATABASE empresaProyectos;
 USE empresaProyectos

 CREATE TABLE empresa(
idEmpresa INT AUTO_INCREMENT PRIMARY KEY,
nit VARCHAR(15) UNIQUE,
nombre VARCHAR(20) NOT NULL, 
direccion VARCHAR(20) NOT NULL,
logo LONGBLOB,
telefono INT NOT NULL,
descripcion VARCHAR(100),
activo TINYINT NOT NULL
)ENGINE=InnoDB;

CREATE TABLE proyecto(
idProyecto INT AUTO_INCREMENT PRIMARY KEY,
idEmpresa INT NOT NULL,
nombre VARCHAR(60) NOT NULL,
fechaInicio DATE NOT NULL,
fechaFin  DATE NOT NULL,
fechaRealCulminacion DATE,
descripcion VARCHAR(100),
activo TINYINT NOT NULL,
FOREIGN KEY(idEmpresa) REFERENCES empresa(idEmpresa)
)ENGINE=InnoDB;

CREATE TABLE profesion(
idProfesion INT AUTO_INCREMENT PRIMARY KEY ,
nombreProfesion VARCHAR(20) NOT NULL
)ENGINE=InnoDB;


CREATE TABLE rol(
idRol INT(11) AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30)
)ENGINE=InnoDB;

CREATE TABLE empleado(
idEmpleado INT AUTO_INCREMENT PRIMARY KEY,
idRol INT NOT NULL,
ci INT UNIQUE,
primerNombre VARCHAR(20) NOT NULL,
segundoNombre VARCHAR (20),
apellidoPaterno VARCHAR(20) NOT NULL,
apellidoMaterno VARCHAR(20),
celular INT(11) NOT NULL,
usuario VARCHAR(15) NOT NULL,
contrasenia VARCHAR(15) NOT NULL,
fechaIngreso DATE NOT NULL,
fechaActualizacion DATE  NOT NULL,
fechaRetiro DATE  NOT NULL,
imagenCiAnverso LONGBLOB,
imagenCiReverso LONGBLOB,
estado BOOL,
FOREIGN KEY(idRol) REFERENCES rol(idRol)
)ENGINE=InnoDB;

CREATE TABLE asignacionProyecto(
idProyecto INT NOT NULL,
idEmpleado INT NOT NULL,
idProfesion INT NOT NULL,
horasTrabajo VARCHAR(15) NOT NULL,
observacion VARCHAR(15),
esLider TINYINT(1),
FOREIGN KEY(idProyecto) REFERENCES proyecto(idProyecto),
FOREIGN KEY(idEmpleado) REFERENCES empleado(idEmpleado),
FOREIGN KEY(idProfesion) REFERENCES profesion(idProfesion)
)ENGINE=InnoDB;
