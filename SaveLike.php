<?php
    session_start();
    if (!isset($_SESSION["correo"])) {
        header("Location: index.html");
    }
        $correo = $_SESSION["correo"];
        $idFoto = $_POST["txtlikID"];
        $FechaHora = date("y-m-d H:i");

        require_once("Conexion.php");
        $sql1 = "SELECT COUNT(*) FROM tbllikes WHERE likFoto = $idFoto AND likCorreo = '$correo'";

        $resultado = mysqli_query($conexion, $sql1);
        $registro = mysqli_fetch_row($resultado);

        if($registro[0] == 0) 
        {
         $sql = "INSERT INTO tbllikes VALUES (null, '$correo', '$idFoto', '$FechaHora')";
         mysqli_query($conexion, $sql);
          mysqli_close($conexion);
         header ("Location: fotos.php");
         
        }
        else
        {
        $sql ="DELETE FROM tbllikes WHERE likFoto = $idFoto AND likCorreo = '$correo'";
        }
        
        mysqli_query($conexion,$sql);
    mysqli_close($conexion);
   header ("Location: fotos.php");
?>