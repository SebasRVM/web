<?php
include("conexion\conexion1.php");
$conectar=Conectarse();
$codigo = $_POST['codigo'];
$consultasql = "DELETE FROM alumnos WHERE codigo_al = '$codigo'";
$resultado = mysqli_query($conectar, $consultasql);
echo mysqli_error($conectar);
mysqli_close($conectar);
?>
<html>
<head><title>ELIMINAR ALUMNO</title></head>
<body>
<p>EL ALUMNO CON CODIGO <?php echo $codigo; ?> FUE ELIMINADO
CORRECTAMENTE</p>
<p><a href="listado_alumnos.php" target="_parent">Ir al listado de alumnos</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html>