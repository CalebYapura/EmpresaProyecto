--idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,
--usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado 16
-- primera froma normal 

--insercion de datos de la tabla rol---
INSERT INTO rol(idRol,nombre) 
VALUES(null,'Administrador');
INSERT INTO rol(idRol,nombre) 
VALUES(null,'Lider');
INSERT INTO rol(idRol,nombre) 
VALUES(null,'Empleado');

--insercion de datos de la tabal empleados
INSERT INTO empleado 
VALUES(null,1,'12345','Noelia','Yamila','Coria','Garsia',74114492,'ncoria','12345','2010-04-12','2015-10-30','2020-10-30',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,1,'12346','Wara','Oporto','Belarde','Rodriguez',6587842,'wbelarde','12346','2019-04-12','2020-09-30','2020-12-30',NULL,NULL,FALSE);

INSERT INTO empleado 
VALUES(null,2,'12347','Daniel','Mario','Rodriguez','Ramirez',76764401,'drodriguez','12347','2017-04-12','2018-12-30','2019-10-18',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12348','Juan','Pedro','Perez','Villarroel',79990221,'jperez','12348','2015-04-12','2018-11-30','2020-12-20',NULL,NULL,FALSE);

-- segunda forma normal
INSERT INTO empleado 
VALUES(null,2,'12349','Miguel','','Urenia','',66435643,'murenia','12349','2013-04-12','2017-11-16','2018-10-19',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12310','Angel','','Daza','',79993219,'adaza','12310','2014-03-12','2015-05-11','2018-08-30',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12311','Mario','','Flores','',66643211,'mflores','12311','2012-04-12','2018-10-30','2020-10-25',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12312','Edgar','','Nina','',79323211,'enina','12312','2011-04-05','2013-07-10','2019-10-13',NULL,NULL,FALSE);

INSERT INTO empleado 
VALUES(null,2,'12313','Raul','','Coca','',77435643,'rcoca','12313','2019-05-09','2019-10-09','2019-11-15',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12314','Isaac','','Nina','',79883219,'inina','12314','2018-01-12','2019-10-06','2020-10-30',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12315','Mario','','Huanca','',66603211,'mhuanca','12315','2017-01-10','2019-10-13','2019-10-18',NULL,NULL,TRUE);

INSERT INTO empleado 
VALUES(null,2,'12316','Luis','','Lima','',79321111,'llima','12316','2015-05-05','2016-10-25','2020-10-30',NULL,NULL,FALSE);




--tercera forma normal--------------
INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12317','Gabriel','Alan','Galarza','Lopez',70778789,'ggalarza','12317','2017-04-12','2018-11-30','2020-10-30',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12318','Jeydi','Jimena','Mendez','Fernandez',70775678,'jmendez','12318','2012-04-12','2015-10-30','2019-10-30',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12319','Yamila','Noelia','Coria','Huayta',70774542,'ycoria','12319','2011-04-12','2019-11-15','2020-10-25',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12320','Miguel','Angel','Caro','Lopez',70724354,'mcaro','12320','2011-04-12','2018-08-30','2019-10-15',NULL,NULL,TRUE);


--cuarta forma normal

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12321','Sara','','Manzanero','Duran',77632354,'smanzanero','12321','2017-04-12','2014-10-30','2018-10-18',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12322','Genesis','','Garmendia','Andia',77724354,'ggarmendia','12322','2017-04-12','2019-10-30','2020-10-30',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12323','Juan','','Delgado','Mamani',71756678,'jdelgado','12323','2017-04-12','2017-12-30','2018-10-19',NULL,NULL,FALSE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12324','Pedro','','Fernandez','Duran',66231678,'pfernandez','12324','2017-04-12','2017-09-30','2020-05-20',NULL,NULL,FALSE);

--quinta forma normal

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,apellidoPaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12325','Fabiola','Sanmiguel',76200313,'fsanmiguel','12325','2018-04-12','2019-11-03','2018-10-10',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,apellidoPaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12326','Caleb','Yapura',67200313,'cyapura','12326','2015-04-12','2016-12-10','2019-10-20',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,apellidoPaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12327','Miguel','Daza',77003227,'mdaza','12327','2011-04-12','2015-03-20','2020-10-20',NULL,NULL,TRUE);

INSERT INTO empleado(idEmpleado,idRol,ci,primerNombre,apellidoPaterno,celular,usuario,contrasenia,fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado) 
VALUES(null,3,'12328','Rulia','Calani',61222331,'rcalani','12328','2015-04-11','2020-02-10','2021-10-12',NULL,NULL,TRUE);


--insercion de datos de la tabla empresa
 
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(01,54321,'Samsung','CBBA-Calle Bolivar',NULL,71776244,'fabrica Multinacional',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(02,54322,'Spotify','CBBA-Calle Antezana',NULL,67576244,'empresa reproductora de musica',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(03,54323,'Sony','Quillacollo-calle Andes',NULL,71300244,'fabrica electronica',FALSE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(04,54324,'Nintendo','Sacaba-Av Villazon',NULL,89326244,'empresa de video juegos',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(05,54325,'Amazon','SC-Calle Ivañez',NULL,711776244,'Ecomerse',FALSE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(06,54326,'Microsoft','CBBA-Av Heoinas',NULL,66676244,'compañía tecnológica',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(07,54327,'Facebook','Pando-Av Zuares',NULL,70776244,'red social',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(08,54328,'Google','Vinto-Av Simon y Patiño',NULL,71776120,'navegador web',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(09,54329,'Wikipedia','La Paz-Calle Mendez',NULL,71787991,'enciclopedia libre',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
VALUES(11,64321,'Yahoo!','CBBA-Av Murillo',NULL,65342189,'directorio web',FALSE);

----insercion de datos de la tabla proyecto---

INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,01,'galaxi s20','2018-01-28','2020-01-28','2020-10-30','Crear un celular inteligente',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,02,'reproduccion visual','2017-04-12','2018-05-20','2018-10-5','implementar reporduccion de video',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,03,'Sony XAultra 20','2020-01-15','2020-12-28','2020-10-30','Crear un celular resistente',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,04,'videojuegos','2018-12-12','2020-12-12','','Nueba consola nintendo',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,05,'inmobiliario','2017-11-07','2019-08-28','','venta de casas o departamentos',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,06,'Windows 11','2019-01-28','2020-05-23','','Crear sistema operativo windows',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,07,'streaming','2019-07-21','2020-05-23','2020-07-30','tranmicion de GamePlays',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,08,'stadia','2018-09-28','2019-09-12','2019-10-20','Mejor calidad de juegos',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,09,'stackoverflow','2016-01-28','2017-01-28','','resolver dudas',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
VALUES(NULL,11,'video llamdas','2019-01-28','2020-12-28','','implementar video llamadas',FALSE);


--insercion de datos de la tabla profecion--


INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0001,'Arquitecto de Software');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0002,'Desarrollador');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0003,'Diseñador');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0004,'Control de Calidad');

--insercion de datos de la tabla Asignacion Materia--

INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(1,3,0001,'10 horas','ashhjsdhd',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(2,4,0001,'15 horas','ashhjsdhd',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(3,5,0002,'20 horas','',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(4,6,0002,'5 horas','ashhjsdhd',0);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(5,7,0003,'12 horas','',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(6,8,0003,'6 horas','',0);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(7,9,0004,'21 horas','',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(8,10,0004,'17 horas','ASDDASDASADS',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(9,11,0001,'20 horas','',1);
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion,esLider)
VALUES(10,12,002,'11 horas','SADDASASDFDFDS',1);