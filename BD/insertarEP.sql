

-- primera froma normal 

INSERT INTO empleado 
VALUES(null,'12345','Noelia','Yamila','Coria','Garsia',74114492);

INSERT INTO empleado 
VALUES(null,'12346','Wara','Oporto','Belarde','Rodriguez',6587842);

INSERT INTO empleado 
VALUES(null,'12347','Daniel','Mario','Rodriguez','Ramirez',76764401);

INSERT INTO empleado 
VALUES(null,'12348','Juan','Pedro','Perez','Villarroel',79990221);


-- segunda forma normal
INSERT INTO empleado 
VALUES(null,'12349','Miguel','','Ureña','',66435643);

INSERT INTO empleado 
VALUES(null,'12310','Angel','','Daza','',79993219);

INSERT INTO empleado 
VALUES(null,'12311','Mario','','Flores','',66643211);

INSERT INTO empleado 
VALUES(null,'12312','Edgar','','Nina','',79323211);

INSERT INTO empleado 
VALUES(null,'12314','Eberth','','Gaspar','',71873220);


--tercera forma normal--------------
INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12315','Gabriel','Alan','Galarza','Lopez',70778789);

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12316','Jeydi','Jimena','Mendez','Fernandez',70775678);

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12317','Yamila','Noelia','Coria','Huayta',70774542);

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12318','Miguel','Angel','Caro','Lopez',70724354);


--cuarta forma normal

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12515','Sara','','Manzanero','Duran',77632354);

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12416','Genesis','','Garmendia','Andia',77724354);

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12417','Juan','','Delgado','Mamani',71756678);

INSERT INTO empleado(idEmpleado,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular) 
VALUES(null,'12418','Pedro','','Fernandez','Duran',66231678);

--quinta forma normal

INSERT INTO empleado(idEmpleado,ci,primerNombre,apellidoPaterno,celular) 
VALUES(null,'13619','Fabiola','Sanmiguel',76200313);

INSERT INTO empleado(idEmpleado,ci,primerNombre,apellidoPaterno,celular) 
VALUES(null,'14418','Caleb','Yapura',67200313);

INSERT INTO empleado(idEmpleado,ci,primerNombre,apellidoPaterno,celular) 
VALUES(null,'15418','Miguel','Ureña',77003227);

INSERT INTO empleado(idEmpleado,ci,primerNombre,apellidoPaterno,celular) 
VALUES(null,'16418','Rulia','Calani',61222331);


--empresa
 
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(01,54321,'Samsung','CBBA-Calle Bolivar','1',NULL,71776244,'fabrica Multinacional',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(02,54322,'Spotify','CBBA-Calle Antezana','1',NULL,67576244,'empresa reproductora de musica',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(03,54323,'Sony','Quillacollo-calle Andes','1',NULL,71300244,'fabrica electronica',FALSE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(04,54324,'Nintendo','Sacaba-Av Villazon','1',NULL,89326244,'empresa de video juegos',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(05,54325,'Amazon','SC-Calle Ivañez','1',NULL,711776244,'Ecomerse',FALSE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(06,54326,'Microsoft','CBBA-Av Heoinas','1',NULL,66676244,'compañía tecnológica',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(07,54327,'Facebook','Pando-Av Zuares','1',NULL,70776244,'red social',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(08,54328,'Google','Vinto-Av Simon y Patiño','1',NULL,71776120,'navegador web',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(09,54329,'Wikipedia','La Paz-Calle Mendez','1',NULL,71787991,'enciclopedia libre',TRUE);
INSERT INTO empresa(idEmpresa,nit,nombre,direccion,cantidadProyectos,logo,telefono,descripcion,activo)
VALUES(11,64321,'Yahoo!','CBBA-Av Murillo','1',NULL,65342189,'directorio web',FALSE);

----proyecto---

INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(001,01,'galaxi s20','2018-01-28','2020-01-28','2020-10-30',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(002,02,'reproduccion visual','2017-04-12','2018-05-20','2018-10-5',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(003,03,'Sony XAultra 20','2020-01-15','2020-12-28','2020-10-30',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(004,04,'videojuegos','2018-12-12','2020-12-12','',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(005,05,'inmobiliario','2017-11-07','2019-08-28','',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(006,06,'Windows 11','2019-01-28','','',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(007,07,'streaming','2019-07-21','2020-05-23','2020-07-30',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(008,08,'stadia','2018-09-28','2019-09-12','2019-10-20',TRUE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(009,09,'stackoverflow','2016-01-28','2017-01-28','',FALSE);
INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,activo)
VALUES(101,11,'video llamdas','2020-01-28','','',FALSE);





INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0001,'Programador de videojuegos');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0002,'Analista programador');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0003,'Controlador de Calidad (QA)');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0004,'Auditor de Sistemas');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0005,'Desarrollador');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0006,'Analista Funcional');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0007,'Webmaster');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0008,'Diseñador/a Web');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0009,'Ingeniero/a de redes');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0011,'Experto/a en analítica web');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0012,'Técnico de soporte');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0013,'Técnico en seguridad informática');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0014,'Asesor en Tecnología');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0015,'Administrador/a de sistemas');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0016,'Arquitecto de Software');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0017,'Consultor en tecnología');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0018,'Director de Datos');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0019,'Director de proyecto');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0021,'Líder de Proyecto');
INSERT INTO profesion(idProfesion,nombreProfesion)
VALUES(0022,'Project Manager');



INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(001,1,0001,'10 horas','ashhjsdhd');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(002,2,0002,'15 horas','ashhjsdhd');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(003,3,0003,'20 horas','');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(004,4,0004,'5 horas','ashhjsdhd');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(005,5,0005,'12 horas','');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(006,6,0006,'6 horas','');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(007,7,0007,'21 horas','');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(008,8,0008,'17 horas','ASDDASDASADS');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(101,9,0009,'20 horas','');
INSERT INTO asignacionProyecto(idProyecto,idEmpleado,idProfesion,horasTrabajo,observacion)
VALUES(005,11,0011,'11 horas','SADDASASDFDFDS');