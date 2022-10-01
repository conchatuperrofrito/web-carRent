<?php
if (isset($_GET["id"])) {
  //no reconocia porque estaba antes
  // $conexion1 = mysqli_connect("localhost", "root", "", "ejemplo");
  $matricula_veiculo = $_GET['id'];
  $sql = "DELETE FROM tveiculo WHERE matricula_veiculo='$matricula_veiculo'";
  $query = mysqli_query($conexion1, $sql);
  if ($query) {
    // header("Location:indexDash.php");
  } else {
    echo "no se pudo eliminar";
  }
} else {
  echo "no reconoce id";
}
