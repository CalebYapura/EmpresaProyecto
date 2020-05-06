DROP DATABASE empresaProyectos;

CREATE DATABASE empresaProyectos;
 USE empresaProyectos

 CREATE TABLE empresa(
idEmpresa INT AUTO_INCREMENT PRIMARY KEY,
nit VARCHAR(15) UNIQUE,
nombre VARCHAR(20) NOT NULL, 
direccion VARCHAR(20) NOT NULL,
cantidadProyectos VARCHAR(20),
logo LONGBLOB,
telefono INT NOT NULL,
descripcion VARCHAR(70) NULL,
activo BOOLEAN NOT NULL
)ENGINE=InnoDB;

CREATE TABLE proyecto(
idProyecto INT AUTO_INCREMENT PRIMARY KEY,
idEmpresa INT NOT NULL,
nombre VARCHAR(60) NOT NULL,
fechaInicio DATE NOT NULL,
fechaFin  DATE NOT NULL,
fechaRealCulminacion DATE,
activo BOOL NOT NULL,
FOREIGN KEY(idEmpresa) REFERENCES empresa(idEmpresa)
)ENGINE=InnoDB;

CREATE TABLE profesion(
idProfesion INT AUTO_INCREMENT PRIMARY KEY ,
nombreProfesion VARCHAR(20) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE empleado(
idEmpleado INT AUTO_INCREMENT PRIMARY KEY,
ci INT UNIQUE,
primerNombre VARCHAR(20) NOT NULL,
segundoNombre VARCHAR (20),
apellidoPaterno VARCHAR(20) NOT NULL,
apellidoMaterno VARCHAR(20),
celular INT NOT NULL
) ENGINE=InnoDB;

CREATE TABLE asignacionProyecto(
idProyecto INT NOT NULL,
idEmpleado INT NOT NULL,
idProfesion INT NOT NULL,
horasTrabajo VARCHAR(15) NOT NULL,
observacion VARCHAR(15) ,
FOREIGN KEY(idProyecto) REFERENCES proyecto(idProyecto),
FOREIGN KEY(idEmpleado) REFERENCES empleado(idEmpleado),
FOREIGN KEY(idProfesion) REFERENCES profesion(idProfesion)
)ENGINE=InnoDB;
