
<?php
    require_once("Conexion.php");
    $correoPara = $_SESSION["correo"];
    $sql = "SELECT F.*, U.usuNombre FROM tblfoto F
            INNER JOIN tblusuario U ON F.fotCorreo = U.usuCorreo
            ORDER BY fotFechaHora DESC";
    $resultado = mysqli_query($conexion, $sql);
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<br><br>";
        echo "Fecha/Hora: " . $registro["fotFechaHora"] . "<br>";
        echo "De: ". $registro["usuNombre"] . "<br>";
        echo "Descripcion: " . $registro["fotDescripcion"] . "<br>";
        $archivo = $registro["fotArchivo"];
        echo "<img src='fotos/$archivo' height='250px' width='auto'>";
        ?>
        <form id='frmMeGusta' method="POST" action="SaveLike.php">
  <input type="hidden" id="txtlikID" name="txtlikID" value="<?php echo $registro["fotID"]; ?>">
  <input type ="image" id="btnlike" name="btnlike" src="pict/nikes" heigt="10px" width="100px"></form>
  
  <?php
  include("ContarLikes.php");
    }
?>
