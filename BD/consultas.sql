SELECT em.nombre AS NombreEmpresa, p.nombre AS NombreProyecto, COUNT(e.idEmpleado) AS cantidadEmpleado, p.activo
FROM empleado e INNER JOIN asignacionProyecto ap
ON e.idEmpleado = ap.idEmpleado
INNER JOIN proyecto p
ON ap.idProyecto = p.idProyecto
INNER JOIN empresa em
ON p.idEmpresa = em.idEmpresa
GROUP BY NombreProyecto
ORDER BY em.nombre, p.nombre;


----empleado
SELECT ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno)as nombreEmpleado,
 COUNT(p.idProyecto) AS cantidadproyectos, SUM(ap.horasTrabajo) AS HorasTrabajadas
FROM empleado e INNER JOIN asignacionProyecto ap
ON e.idEmpleado = ap.idEmpleado
INNER JOIN proyecto p
ON ap.idProyecto = p.idProyecto
GROUP BY nombreEmpleado
ORDER BY nombreEmpleado;


--autentificacion usuario
              SELECT *
              FROM rol r INNER JOIN empleado e
              ON e.idRol = r.idRol
              WHERE usuario = usuario
              AND contrasenia = contrasenia;
--lista de empleados activos
SELECT idEmpleado, ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,
            apellidoMaterno)as nombreEmpleado,celular, estado
            FROM empleado
            WHERE estado = 1
            ORDER BY primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno;
 --consulta de empleados mas proyectos

 SELECT ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno)as nombreEmpleado, p.nombre AS proyectos
FROM empleado e INNER JOIN asignacionProyecto ap
ON e.idEmpleado = ap.idEmpleado
INNER JOIN proyecto p
ON ap.idProyecto = p.idProyecto
GROUP BY nombreEmpleado
ORDER BY nombreEmpleado;

--consulta de lista de empresas mas cantidad de proyectos





SELECT e.primerNombre, e.usuario,e.contrasenia,r.idRol,e.estado
FROM rol r inner join empleado e
on r.idRol=e.idRol
order by e.primerNombre;

--recuperar datos de proyecto
SELECT ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno)as nombreEmpleado,p.nombre
FROM empleado e INNER JOIN asignacionProyecto ap
ON e.idEmpleado = ap.idEmpleado
INNER JOIN proyecto p
ON ap.idProyecto = p.idProyecto
GROUP BY nombreEmpleado
ORDER BY nombreEmpleado;

--lista de empresas activas
SELECT idEmpresa, nit,nombre,direccion,logo,telefono,descripcion,activo
			FROM empresa
			WHERE activo = 1
			ORDER BY idEmpresa, nit,nombre, direccion, logo,telefono, descripcion,activo;

--empresa mas cantidad de proyectos
SELECT e.logo AS Logo,e.nombre AS nombre , e.telefono AS Telefono, e.direccion AS Direccion, e.activo AS Estado,COUNT(p.idProyecto) AS totalProyecto
FROM empresa e left JOIN proyecto p on e.idEmpresa= p.idEmpresa
GROUP BY e.idEmpresa
ORDER BY e.nombre ASC;




