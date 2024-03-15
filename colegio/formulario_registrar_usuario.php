<html> 
<head> 
 <title>REGISTRO DEL USUARIO</title> 
<script Language="JavaScript">
function validar(formulario1) {
if (formulario1.nombre.value.length < 1){
alert("Ingrese el codigo");
miformulario.nombre.focus();
return false;
 }
if (formulario1.usuario.value.length < 1){
alert("Ingrese el usuario");
miformulario.usuario.focus();
return false;
 }
if (formulario1.clave.value.length < 1){
alert("Ingrese la clave");
miformulario.clave.focus();
return false;
 }
if (confirm('Esta seguro de procesar el formulario?')){
}else{
alert("Cancelado");
return (false);
}
}
</script>
</head> 
<body> 
<H1>REGISTRO DEL USUARIO</H1> 
<FORM ACTION="proceso_registrar_usuario.php" method="post" 
name="miformulario" id="miformulario" onSubmit = "return validar(this)"> 
<TABLE> 
<TR> 
 <TD width="93">Nombre:</TD> 
 <TD width="144"><INPUT TYPE="text" name="nombre" id="nombre"></TD> 
</TR> 
<TR>
 <TD>Usuario:</TD>
 <TD><INPUT TYPE="text" name="usuario" id="usuario"></TD>
</TR>
<TR>
 <TD>Clave:</TD>
 <TD><INPUT TYPE="password" name="clave" id="clave"></TD>
</TR>
<TR> 
 <TD>Nivel:</TD> 
 <TD><label for="nivel"></label>
 <select name="nivel" id="nivel">
 <option value="1">Gerencial</option>
 <option value="2">Profesor</option>
 <option value="3">Alumno</option>
 </select></TD> 
</TR> 
</TABLE> 
<INPUT TYPE="submit" name="accion" VALUE="Grabar"> 
</FORM>
</body>
</html>