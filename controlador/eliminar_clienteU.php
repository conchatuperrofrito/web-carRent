<?php
if (isset($_GET["id"])) {
  //no reconocia porque estaba antes
  // $conexion1 = mysqli_connect("localhost", "root", "", "ejemplo");
  $correo_cliente = $_GET['id'];
  $sql = "DELETE FROM tusuario WHERE correo_cliente='$correo_cliente'";
  $query = mysqli_query($conexion1, $sql);
  if ($query) {
    // header("Location:indexDash.php");
    echo "deveria eliminar";
  } else {
    echo "no se pudo eliminar";
  }
} else {
  echo "no reconoce id";
}
