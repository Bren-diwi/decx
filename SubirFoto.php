<?php
session_start();
if(!isset($_SESSION["correo"]))
{
header("Location: index.html");
}
require_once("conexion.php");
$correo = $_SESSION["correo"];
$descripcion = $_POST["textdescripcion"];
$archivo = DATE ("Y-m-d H-i-s") . ".jpg";
$tamano = $_FILES["fileFoto"]["size"];
$tipo = $_FILES["fileFoto"]["type"];

$sql = "INSERT INTO tblfoto VALUES(NULL,'$correo','$descripcion','$archivo',NOW())";

mysqli_query ($conexion,$sql);
move_uploaded_file($_FILES["fileFoto"]["tmp_name"],"fotos/$archivo");
mysqli_close($conexion);
header("Location: fotos.php");
?>

