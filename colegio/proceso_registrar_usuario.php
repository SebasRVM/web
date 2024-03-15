<?php
$var_nombre = $_POST['nombre'];
$var_usuario = $_POST['usuario'];
$var_clave = $_POST['clave'];
$var_nivel = $_POST['nivel'];
include("conexion\conexion1.php");
$conectar=Conectarse(); 
mysqli_query($conectar,"insert into usuarios 
(nombre_usuario, usuario, clave, nivel)
values 
('$var_nombre', '$var_usuario', '$var_clave', 
'$var_nivel')",);
echo mysqli_error($conectar);
if (@mysqli_affected_rows($conectar)){
echo "<br>Ingreso correcto.";
}
?>
<html>
<head><title>REGISTRO USUARIO</title></head>
<body>
<p>SE REGISTRO EL USUARIO <?php echo $var_nombre; ?> DE FORMA 
CORRECTA.
</p>
<p><a href="formulario_registrar_usuario.php" target="_parent">Formulario Registrar 
Usuario</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html>