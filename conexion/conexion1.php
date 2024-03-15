<?php
function Conectarse(){
if (!($conectar=mysqli_connect("localhost","root",""))){
echo "Error conectando a la base de datos."."<BR>";
echo "<img src=../imagenes/error.png>";
exit();
}
if (!mysqli_select_db($conectar,"colegio")){
echo "Error seleccionando la base de datos.";
exit();
}
return $conectar;
}
$conectar=Conectarse();
echo "<img src=../imagenes/ok.png>";
mysqli_close($conectar);
?>