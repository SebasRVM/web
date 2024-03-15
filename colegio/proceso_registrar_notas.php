<?php
$var_alumnos = $_POST['alumnos'];
$var_cursos = $_POST['cursos'];
$var_nota1 = $_POST['nota1'];
$var_nota2 = $_POST['nota2'];
$var_promedio = $_POST['promedio'];
include("conexion\conexion1.php");
$conectar=Conectarse();
mysqli_query($conectar, "insert into notas
(codigo_al, codigo_cur, nota1, nota2, promedio)
values
('$var_alumnos', '$var_cursos', '$var_nota1', '$var_nota2',
'$var_promedio')",);
echo mysqli_error($conectar);
if (@mysqli_affected_rows($conectar)){
echo "<br>Ingreso correcto.";
}
?>
<html>
<head>
<title>REGISTRO NOTAS</title>
</head>
<body>
<p>SE REGISTRO LA NOTA DE FORMA CORRECTA.
</p>
<p><a href="formulario_registrar_curso.php" target="_parent">Formulario Registrar
Notas</a></p>
<p><a href="operaciones_profesores.php" target="_parent">Operaciones</a></p>
</body>
</html>