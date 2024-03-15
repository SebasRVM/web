<?php
$var_codigo = $_POST['codigo'];
$var_paterno = $_POST['paterno'];
$var_materno = $_POST['materno'];
$var_nombre = $_POST['nombre'];
$var_distritos = $_POST['distritos'];
$var_fechanac = $_POST['fechanac'];
$var_telefono = $_POST['telefono'];
$var_correo = $_POST['correo'];
$fecha_nac = date("Y-m-d",strtotime($var_fechanac));
include("conexion\conexion1.php");
$conectar=Conectarse(); 
mysqli_query($conectar,"insert into alumnos
(codigo_al, apepaterno_al, apematerno_al, nombres_al, 
id_distrito_al, fechanac_al, telefono_al, correo_al)
values 
('$var_codigo', '$var_paterno', '$var_materno', '$var_nombre', 
'$var_distritos', '$fecha_nac', '$var_telefono', '$var_correo')",);
echo mysqli_error($conectar);
if (@mysqli_affected_rows($conectar)){
echo "<br>Ingreso correcto.";
}
?>
<html><head><title>REGISTRO ALUMNO</title></head>
<body>
<p>SE REGISTRO EL ALUMNO <?php echo $var_nombre." ".$var_paterno." 
".$var_materno; ?> DE FORMA CORRECTA.
</p>
<p><a href="formulario_registrar_alumno.php" target="_parent">Formulario Registrar 
Alumno</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html> 