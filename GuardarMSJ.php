<?php
session_start();
if(!isset($_SESSION["correo"]))
{
header("Location: index.html");
}
require_once("Conexion.php");
$para = $_POST["msj_para"];
$de = $_SESSION["correo"];
$asunto = $_POST["txtAsunto"];
$mensaje = $_POST["txtMensaje"];
if ($para =="")
{
echo "El correo no puede quedar vacio";
die("<a href='principal.php'>Regresar</a>");
}
if ($asunto =="")
{
echo "El asunto no puede quedar vacio";
die("<a href='principal.php'>Regresar</a>");
}
if ($mensaje =="")
{
echo "El mensaje no puede quedar vacio";
die("<a href='principal.php'>Regresar</a>");
}
$sql = "INSERT INTO tblmensajes VALUES (NULL,'$para','$de','$asunto','$mensaje')";
mysqli_query($conexion,$sql);
mysqli_close($conexion);
echo "Mensaje enviado con exito <a href='principal.php'>Regresar</a>";
?>
