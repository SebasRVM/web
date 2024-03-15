<?php
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
<title>Cerrar sesion</title>
</head>
<body>
<h1>Acaba de cerrar su sesion de forma correcta</h1>
<p><a href = "index.php" target="_parent">Ir a la pagina principal</a></p>
</body>
</html>