<?php
if (isset($_POST["registrar"])) {
  if (!empty($_POST["matricula_veiculo"]) && !empty($_POST["marca_veiculo"]) && !empty($_POST["modelo_veiculo"]) && !empty($_POST["color_veiculo"]) && !empty($_POST["stock_veiculo"]) && !empty($_POST["costo_diari_veiculo"])) {

    $imagenCar = $_POST["imagenCar"];
    $matricula_veiculo = $_POST["matricula_veiculo"];
    $marca_veiculo = $_POST["marca_veiculo"];
    $modelo_veiculo = $_POST["modelo_veiculo"];
    $color_veiculo = $_POST["color_veiculo"];
    $stock_veiculo = $_POST["stock_veiculo"];
    $costo_diario_veiculo = $_POST["costo_diari_veiculo"];
    $sql = $conexion1->query("INSERT INTO tveiculo(imagenCar,matricula_veiculo,marca_veiculo,modelo_veiculo,color_veiculo,stock_veiculo,costo_diario_veiculo) values('$imagenCar','$matricula_veiculo','$marca_veiculo','$modelo_veiculo','$color_veiculo','$stock_veiculo','$costo_diario_veiculo')");
    if ($sql == 1) {
      // echo '<div class="alert alert-success">cliente registrado</div>';
    } else {
      echo "no se pudo registrar";
    }
  } else {

    echo "los campos estan vacios";
  }
} else {

  echo "no logra entrar el boton 1";
}
