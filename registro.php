<?php
 require_once("Conexion.php");
  $correo = $_POST["emCorreoR"];
  $nombre = $_POST["txtNombre"];
  $contrasena = $_POST["pwContrasenaR"];
  $confirmar = $_POST["pwContrasenaC"];
  $fecha = $_POST["FechaN"];

 if ($correo =="") {
   die("El correo no puede estar vacio <a href='index.html'>Regresar</a>");
 }
 if ($nombre =="") {
  die("El Nombre no puede estar vacio <a href='index.html'>Regresar</a>");
 }
 if ($contrasena =="") {
  die("La contraseña no puede estar vacia <a href='index.html'>Regresar</a>");
 }
 if ($confirmar =="") {
  die("La confirmacion no puede estar vacia <a href='index.html'>Regresar</a>");
 }
   if($fecha =="") {
    die("La fecha no puede estar vacia <a href='index.html'>Regresar</a>");
   }
if ($contrasena != $confirmar) {
  die("La contraseña y la confirmacion no coinciden <a href='index.html'>Regresar</a>");
}
$cifrado = password_hash ($contrasena,PASSWORD_DEFAULT);

$sql = "INSERT INTO tblusuario VALUES('$correo','$nombre','$cifrado','$fecha')";
mysqli_query($conexion,$sql);
mysqli_close($conexion);
echo "Usuario Registrado <a href='index.html'>Regresar</a>";
?>