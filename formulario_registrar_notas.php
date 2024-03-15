<html>
<head>
<title>REGISTRO DE NOTAS</title>
<SCRIPT>
function evento_promedio() {
var n1 = parseFloat(document.getElementById("nota1").value);
var n2 = parseFloat(document.getElementById("nota2").value);
var promedio = (n1 + n2)/2;
document.getElementById("promedio").value = promedio;
}
</script>
</head>
<body>
<H1>REGISTRO DE NOTAS</H1>
<FORM ACTION="proceso_registrar_notas.php" method="post"
name="miformulario" id="miformulario" onSubmit = "return validar(this)">
<TABLE>
<TR>
<TD width="93">Alumno:</TD>
<TD width="144"><select name="alumnos" id="alumnos">
<option>Seleccione un alumno...</option>
<?php
include("conexion\conexion1.php");
$conectar=Conectarse();
///// CONSULTA PARA MOSTRAR LOS DISTRITOS DE LA BD COLEGIO.
$consulta = "SELECT codigo_al, CONCAT(apepaterno_al, ' ', apematerno_al, ' ',
nombres_al) FROM alumnos ORDER BY apepaterno_al ASC";
$resultado = mysqli_query($conectar, $consulta);
$fila = mysqli_num_rows($resultado);
if ($fila = mysqli_fetch_array($resultado)){
do {
echo '<option value= "'.$fila[0].'">'.utf8_encode($fila[1]).'</option>';
} while ($fila = mysqli_fetch_array($resultado));
}
?>
</select></TD>
</TR>
<TR>
<TD>Curso:</TD>
<TD><select name="cursos" id="cursos">
<option>Seleccione un curso...</option>
<?php
//include("conexion\conexion1.php");
$conectar=Conectarse();
///// CONSULTA PARA MOSTRAR LOS DISTRITOS DE LA BD COLEGIO.
$consulta2 = "SELECT codigo_cur, nombres_cur FROM cursos ORDER BY
nombres_cur ASC";
$resultado2 = mysqli_query($conectar, $consulta2);
$fila2 = mysqli_num_rows($resultado2);
if ($fila2 = mysqli_fetch_array($resultado2)){
do {
echo '<option value= "'.$fila2[0].'">'.utf8_encode($fila2[1]).'</option>';
} while ($fila2 = mysqli_fetch_array($resultado2));
}
?>
</select></TD>
</TR>
<TR>
<TD>Nota1:</TD>
<TD><INPUT TYPE="text" name="nota1" id="nota1"></TD>
</TR>
<TR>
<TD>Nota2:</TD>
<TD><INPUT TYPE="text" name="nota2" id="nota2"></TD>
</TR>
<TR>
<TD colspan="2" align="center">
<a href="#" onclick="evento_promedio();">Calcular promedio</a>
</TD>
</TR>
<TR>
<TD>Promedio:</TD>
<TD><label for="alumnos">
<INPUT name="promedio" TYPE="text" id="promedio" readonly="readonly">
</label></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" name="accion" VALUE="Grabar">
</FORM>
<a href="operaciones_profesores.php" target="_parent">Operaciones</a>
</body>
</html>