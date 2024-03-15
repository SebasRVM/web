<?php
include("conexion\conexion1.php");
$conectar=Conectarse();
$var_codigoalumno = $_GET['id'];
$consulta=mysqli_query($conectar, "SELECT codigo_al, apepaterno_al, apematerno_al,
nombres_al,
DATE_FORMAT(fechanac_al,'%d/%m/%Y'), id_distrito_al, telefono_al, correo_al
FROM alumnos WHERE codigo_al='$var_codigoalumno'");
$resultado = mysqli_fetch_array($consulta);
$res_codigo = $resultado[0];
$res_paterno = $resultado[1];
$res_materno = $resultado[2];
$res_nombres = $resultado[3];
$res_fechanac = $resultado[4];
$res_distrito = $resultado[5];
$res_telefono = $resultado[6];
$res_correo = $resultado[7];
mysqli_close($conectar);
?>
<html>
<head>
<title>ACTUALIZAR</title>
<script Language="JavaScript">
function validar(formulario1){
if (confirm('Esta seguro de ELIMINAR?')){
}else{
alert("Cancelado");
return (false);
}
}
</script>
</head>
<body>
<form name="formulario1" method="post" action="proceso_eliminar_alumno.php"
onSubmit = "return validar(this)">
<TABLE width="260" height="79">
<TR>
<TD><b>Codigo:</b></TD>
<TD><input name="codigo" type="text" id="codigo" style="backgroundcolor:#
CFE6FC" value="<?php echo $res_codigo; ?>" readonly></TD>
</TR>
<TR>
<TD width="80"><b>Paterno:</b></TD>
<TD width="180"><label for="paterno"></label>
<?php echo $res_paterno; ?></TD>
</TR>
<TR>
<TD><b>Materno:</b></TD>
<TD><label for="materno"></label>
<?php echo $res_materno; ?></TD>
</TR>
<TR>
<TD><b>Nombres:</b></TD>
<TD><?php echo $res_nombres; ?></TD>
</TR>
<TR>
<TD><b>FechaNac:</b></TD>
<TD><?php echo $res_fechanac; ?></TD>
</TR>
<TR>
<TD><b>Distrito:</b></TD>
<TD><?php echo $res_distrito; ?></TD>
</TR>
<TR>
<TD><b>Telefono:</b></TD>
<TD><?php echo $res_telefono; ?></TD>
</TR>
<TR>
<TD><b>Correo:</b></TD>
<TD><?php echo $res_correo; ?></TD>
</TR>
<TR>
<TD colspan="2" align="center"><input type="submit" name="eliminar"
id="eliminar" value="Eliminar"></TD>
</TR>
</TABLE>
</form>
<p><a href="listado_alumnos.php" target="_parent">Ir al listado de alumnos</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html>