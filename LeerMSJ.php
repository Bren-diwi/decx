<?php
      require_once("Conexion.php");
    $correo = $_SESSION["correo"];
    $sql = "SELECT * FROM tblmensajes WHERE menPara = '$correo'";
    $resultado = mysqli_query($conexion, $sql);
    while ($registro = mysqli_fetch_assoc($resultado)) {
      echo "De: ". $registro["menDe"];
      echo "<br>";
      echo"Asunto: ". $registro["menAsunto"];
      echo "<br>";
      echo "Mensaje: ".$registro["menMensaje"];
      echo "<br>";
    }
    mysqli_close($conexion);
    ?>
    
