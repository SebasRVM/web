<?php
include("conexion\conexion1.php");
$conectar=Conectarse();
$resultado=mysqli_query($conectar, "SELECT codigo_al, apepaterno_al, apematerno_al,
nombres_al,
DATE_FORMAT(fechanac_al,'%d/%m/%Y'), id_distrito_al, telefono_al, correo_al
FROM alumnos");
$numero_filas = mysqli_num_rows($resultado);
?>
<title>LISTADO ALUMNOS</title>
<p><a href="operaciones.php" target="_parent">Panel Principal</a></p>
<table width="1050" height="42" border="1">
<tr height="20">
<td width="74" align="center"><b>Elim.</b><b></b></td>
<td width="82" align="center"><b>Edit.</b></td>
<td width="91" align="center"><b>CODIGO</b></td>
<td width="72" align="center"><b>PATERNO</b></td>
<td width="72" align="center"><b>MATERNO</b></td>
<td width="72" align="center"><b>NOMBRES</b></td>
<td width="72" align="center"><b>FECHA NAC</b></td>
<td width="72" align="center"><b>DISTRITO</b></td>
<td width="72" align="center"><b>TELEFONO</b></td>
<td width="72" align="center"><b>CORREO</b></td>
</tr>
<?php
while($row = mysqli_fetch_array($resultado)){
$eliminar = "<a href='eliminar_alumno.php?id=$row[0]'>Eliminar</a></a>";
$editar = "<a href='editar_alumno.php?id=$row[0]'>Editar</a></a>";
printf("<tr>
<td align=center><font face=Arial Narrow size=1>$eliminar</font></td>
<td align=center><font face=Arial Narrow size=1>$editar</font></td>
<td align=center><font face=Arial Narrow size=1>$row[0]</font></td>
<td align=left><font face=Arial Narrow size=1>$row[1]</font></td>
<td align=center><font face=Arial Narrow size=1>$row[2]</font></td>
<td align=center><font face=Arial Narrow size=1>$row[3]</font></td>
<td align=center><font face=Arial Narrow size=1>$row[4]</font></td>
<td align=left><font face=Arial Narrow size=1>$row[5]</font></td>
<td align=left><font face=Arial Narrow size=1>$row[6]</font></td>
<td align=left><font face=Arial Narrow size=1>$row[7]</font></td>
</tr>"
);
}
mysqli_free_result($resultado);
mysqli_close($conectar);
?>
</table>
<p>Cantidad de alumnos:<?php echo "<b>".$numero_filas."</b>"; ?></p>