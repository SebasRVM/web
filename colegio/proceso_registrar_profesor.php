<?php
$var_codigo = $_POST['codigo'];
$var_paterno = $_POST['paterno'];
$var_materno = $_POST['materno'];
$var_nombre = $_POST['nombre'];
$var_distritos = $_POST['distritos'];
include("conexion\conexion1.php");
$conectar=Conectarse(); 
mysqli_query($conectar,"insert into profesores (codigo_pro, apepaterno_pro, apematerno_pro, 
nombres_pro, id_distrito_pro)
values ('$var_codigo', '$var_paterno', '$var_materno', '$var_nombre', 
'$var_distritos')",);
echo mysqli_error($conectar);
if (@mysqli_affected_rows($conectar)){
echo "<br>Ingreso correcto.";
}
?>
<html>
<head><title>REGISTRO PROFESOR</title></head>
<body>
<p>SE REGISTRO EL PROFESOR <?php echo $var_nombre." ".$var_paterno." 
".$var_materno; ?> DE FORMA CORRECTA.
</p>
<p><a href="formulario_registrar_profesor.php" target="_parent">Formulario Registrar 
Profesor</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html>