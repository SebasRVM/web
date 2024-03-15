<?php
$var_codigo = $_POST['codigo'];
$var_nombre = $_POST['nombre'];
include ("conexion/conexion1.php");
$conectar=Conectarse();
mysqli_query($conectar,"insert into distritos
(id_distrito, nombre_dis)
values
('$var_codigo', '$var_nombre')");
echo mysqli_error($conectar);
if (@mysqli_affected_rows($conectar)){
echo "<br>Ingreso correcto.";
}
?>
<html>
<head><title>REGISTRO DISTRITO</title></head>
<body>
<p>SE REGISTRO EL DISTRITO <?php echo $var_nombre; ?> DE FORMA
CORRECTA.
</p>
<p><a href="formulario_registrar_distrito.php" target="_parent">Formulario Registrar
Distrito</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html>