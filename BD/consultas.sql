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