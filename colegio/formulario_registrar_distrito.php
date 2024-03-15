<html>
<head>
<title>REGISTRO DE DISTRITO</title>
<script Language="JavaScript">
<?php include("javascript/validar.js"); ?>
</script>
</head>
<body>
<H1>REGISTRO DE DISTRITO</H1>
<FORM ACTION="proceso_registrar_distrito.php" method="post"
name="miformulario" id="miformulario" onSubmit = "return validar(this)">
<TABLE>
<TR>
<TD>Codigo:</TD>
<TD><INPUT TYPE="text" name="codigo" id="codigo"></TD>
</TR>
<TR>
<TD>Nombre:</TD>
<TD><INPUT TYPE="text" name="nombre" id="nombre"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" name="accion" VALUE="Grabar">
</FORM>
</body>
</html>