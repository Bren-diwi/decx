<?php
$correo = $_POST["emCorreo"];
$contrasena = $_POST["pwContrasena"];
 require_once("Conexion.php");

 if($correo == ""){
     die("Correo no proporcionado <a href='index.html'>Regresar</a>");
 }
 if($contrasena == ""){
     die("Contraseña no proporcionada <a href='index.html'>Regresar</a>");
 }

 

$sql = "SELECT * FROM tblusuario WHERE usuCorreo = '$correo'";
$resultado = mysqli_query($conexion, $sql);

if ($renglon = mysqli_fetch_assoc($resultado)) {
  if (password_verify($contrasena, $renglon["usuContrasena"])){
      session_start();
      $_SESSION["correo"] = $correo;
      $_SESSION["nombre"] = $registro["usuNombre"];

       header("Location: principal.php");
  }
  else echo "Contraseña Incorrecta <a href='index.html'>Regresar</a>"; 
}
else{
echo "No existe el Correo <a href='index.html'>Regresar</a>"; 
}

?>
