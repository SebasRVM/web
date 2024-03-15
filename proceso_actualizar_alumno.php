<?php
include("conexion\conexion1.php");
$conectar=Conectarse();
$codigo = $_POST['codigo'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nombres = $_POST['nombres'];
$fechanac = $_POST['fechanac'];
$distrito = $_POST['distrito'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$fechanac_data = date("Y-m-d",strtotime($fechanac));
$consultasql = "UPDATE alumnos
SET apepaterno_al = '$paterno',
apematerno_al = '$materno',
nombres_al = '$nombres',
fechanac_al = '$fechanac',
id_distrito_al = '$distrito',
telefono_al = '$telefono',
correo_al = '$correo'
WHERE codigo_al = '$codigo'";
$resultado = mysqli_query($conectar, $consultasql);
echo mysqli_error($conectar);
mysqli_close($conectar);
?>
<html>
<head><title>ACTUALIZAR</title></head>
<body>
<p>EL ALUMNO CON CODIGO <?php echo "<B>".$codigo."</B><br>"; ?> FUE
ACTUALIZADO CORRECTAMENTE</p>
<p><b>REPORTE DE DATOS ACTUALIZADOS:</b> </p>
<TABLE width="292" height="79">
<TR>
<TD width="115">CODIGO:</TD>
<TD width="133"><?php echo $codigo; ?></TD>
</TR>
<TR>
<TD>PATERNO:</TD>
<TD><?php echo $paterno; ?></TD>
</TR>
<TR>
<TD>MATERNO:</TD>
<TD><?php echo $materno; ?></TD>
</TR>
<TR>
<TD>NOMBRES:</TD>
<TD><?php echo $nombres; ?></TD>
</TR>
<TR>
<TD>FECHA NAC:</TD>
<TD><?php echo $fechanac; ?></TD>
</TR>
<TR>
<TD>DISTRITO:</TD>
<TD><?php echo $distrito; ?></TD>
</TR>
<TR>
<TD>TELEFONO:</TD>
<TD><?php echo $telefono; ?></TD>
</TR>
<TR>
<TD>CORREO:</TD>
<TD><?php echo $correo; ?></TD>
</TR>
</TABLE>
<p><a href="listado_alumnos.php"
target="_parent">Ir al listado de alumnos</a></p>
<p><a href="operaciones.php"
target="_parent">Panel Principal</a></p>
</body>
</html>