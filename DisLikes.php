
<?php
session_start();
if(!isset($_SESSION["correo"])) 
{
    header("Location: index.html");
}
 $correo = $_SESSION["correo"];
 $id = $_POST["txtdislikID"];
 $FechaHora = date("Y-m-d H:i");
 require_once("Conexion.php");
 $sql1 = "SELECT COUNT(*) FROM tbldislikes WHERE dislikFoto = $id AND dislikCorreo  = '$correo'";
 $resultado = mysqli_query($conexion, $sql1);
 $registro = mysqli_fetch_row($resultado);
 if($registro[0] == 0) 
{
 $sql = "INSERT INTO tbldislikes VALUES (null, '$correo', '$id', '$FechaHora')";
 mysqli_query($conexion, $sql);
 mysqli_close($conexion);
 header ("Location: fotos.php");
}
else
{
$sql ="DELETE FROM tbldislikes WHERE dislikFoto = $id AND dislikCorreo = '$correo'";
}
mysqli_query($conexion,$sql);
mysqli_close($conexion);
header ("Location: fotos.php");
?>
