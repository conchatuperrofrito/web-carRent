<?php
if (isset($_POST["actualizar"])) {
  if (!empty($_POST["marca_veiculo"]) && !empty($_POST["modelo_veiculo"]) && !empty($_POST["color_veiculo"]) && !empty($_POST["stock_veiculo"]) && !empty($_POST["costo_diario_veiculo"])) {
    $id = $_GET["id"];
    $imagenCar = $_POST["imagenCar"];
    $marca_veiculo = $_POST["marca_veiculo"];
    $modelo_veiculo = $_POST["modelo_veiculo"];
    $color_veiculo = $_POST["color_veiculo"];
    $stock_veiculo = $_POST["stock_veiculo"];
    $costo_diario_veiculo = $_POST["costo_diario_veiculo"];
    $sql = $conexion1->query("UPDATE tveiculo SET imagenCar='$imagenCar',marca_veiculo='$marca_veiculo',
     modelo_veiculo='$modelo_veiculo',color_veiculo='$color_veiculo',
     stock_veiculo='$stock_veiculo',costo_diario_veiculo='$costo_diario_veiculo' WHERE matricula_veiculo='$id'");
    if ($sql == 1) {
      header("location:indexDash.php");
    } else {
      echo "no se pudo registrar";
    }
  } else {
    echo "los campos estan vacios";
  }
}
