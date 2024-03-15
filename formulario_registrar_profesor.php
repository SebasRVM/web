<html> 
<head> 
 <title>REGISTRO DEL PROFESOR</title> 
<script Language="JavaScript">
<?php include("javascript/validar.js"); ?>
</script>
</head> 
<body> 
<H1>REGISTRO DEL PROFESOR</H1> 
<FORM ACTION="proceso_registrar_profesor.php" method="post" 
name="miformulario" id="miformulario" onSubmit = "return validar(this)"> 
<TABLE>
<TR> 
 <TD width="93">Codigo:</TD> 
 <TD width="144"><INPUT TYPE="text" name="codigo" id="codigo"></TD> 
</TR> 
<TR>
 <TD>Paterno:</TD>
 <TD><INPUT TYPE="text" name="paterno" id="paterno"></TD>
</TR>
<TR>
 <TD>Materno:</TD>
 <TD><INPUT TYPE="text" name="materno" id="materno"></TD>
</TR>
<TR> 
 <TD>Nombre:</TD> 
 <TD><INPUT TYPE="text" name="nombre" id="nombre"></TD> 
</TR>
<TR>
 <TD>Distrito:</TD>
 <TD><label for="distritos"></label> 
<select name="distritos" id="distritos">
<option>Seleccione un distrito...</option>
<?php
include("conexion\conexion1.php");
$conectar=Conectarse();
///// CONSULTA PARA MOSTRAR LOS DISTRITOS DE LA BD COLEGIO.
$consulta = "SELECT id_distrito, nombre_dis FROM distritos ORDER BY nombre_dis 
ASC";
$resultado = mysqli_query($conectar, $consulta);
$fila = mysqli_num_rows($resultado);
if ($fila = mysqli_fetch_array($resultado)){
do {
 echo '<option value= "'.$fila[0].'">'.utf8_encode($fila[1]).'</option>';
} while ($fila = mysqli_fetch_array($resultado));
}
?>
</select>
 </TD>
</TR> 
</TABLE> 
<INPUT TYPE="submit" name="accion" VALUE="Grabar"> 
</FORM>
</body>
</html>