<?php
session_start();
$usuario = htmlspecialchars(strip_tags($_POST['usuario']));
$clave = htmlspecialchars(strip_tags($_POST['clave']));
include("conexion\conexion1.php");
$conectar=Conectarse();
$consultasql = "select nombre_usuario, nivel from usuarios where usuario = '$usuario'
and clave = '$clave'";
$resultado = mysqli_query($conectar, $consultasql);
$filasDevueltas = mysqli_num_rows($resultado);
$resul = mysqli_fetch_array($resultado);
$nombreusuario = $resul[0];
$nivelusuario = $resul[1];
if ($filasDevueltas==0){
echo "Usuario no existe";
}else{
if ($nivelusuario == "1"){
$_SESSION['usuario'] = $nombreusuario;
header('Location: operaciones.php');
}else{
if ($nivelusuario == "2") {
$_SESSION['usuario'] = $nombreusuario;
header('Location: operaciones_profesores.php’);
}else{
$_SESSION['usuario'] = $nombreusuario;
header('Location: operaciones_alumnos.php ');
}
}
}
?>
