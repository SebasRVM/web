<?php
$var_codigo = $_POST['codigo'];
$var_curso = $_POST['curso'];
include ("conexion/conexion1.php");
$conectar=Conectarse();
mysqli_query($conectar,"insert into cursos
(codigo_cur, nombres_cur)
values
('$var_codigo', '$var_curso')");
echo mysqli_error($conectar);
if (@mysqli_affected_rows($conectar)){
echo "<br>Ingreso correcto.";
}
?>
<html>
<head><title>REGISTRO CURSO</title></head>
<body>
<p>SE REGISTRO EL CURSO <?php echo $var_curso; ?> DE FORMA
CORRECTA.
</p>
<p><a href="formulario_registrar_curso.php" target="_parent">Formulario Registrar
Curso</a></p>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
</body>
</html>