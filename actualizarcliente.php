<?php

include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion1->query("select * from tveiculo where matricula_veiculo='$id'");

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/css/all.min.js"></script>
</head>

<body>
  <form class="col-4 px-5 m-auto" action="" method="POST">
    <?php
    include "controlador/actualizar_cliente.php";
    ?>
    <h3>Actualizar Cliente</h3>
    <input type="text" name="id" hidden value="<?= $_GET["id"] ?>">
    <?php
    while ($datos = $sql->fetch_object()) {
    ?>
      <!-- <div class="mb-3">
        <label class="form-label">matricula_veiculo</label>
        <input type="text" class="form-control" name="matricula_veiculo" value="<?= $datos->matricula_veiculo ?>">
      </div> -->
      <div class="mb-3">
        <label class="form-label">imagen Veiculo</label>
        <input type="text" class="form-control" name="imagenCar" value="<?= $datos->imagenCar ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">marca_veiculo</label>
        <input type="text" class="form-control" name="marca_veiculo" value="<?= $datos->marca_veiculo ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">modelo_veiculo</label>
        <input type="text" class="form-control" name="modelo_veiculo" value="<?= $datos->modelo_veiculo ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">color_veiculo</label>
        <input type="text" class="form-control" name="color_veiculo" value="<?= $datos->color_veiculo ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">stock_veiculo</label>
        <input type="text" class="form-control" name="stock_veiculo" value="<?= $datos->stock_veiculo ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">costoXdia</label>
        <input type="text" class="form-control" name="costo_diario_veiculo" value="<?= $datos->costo_diario_veiculo ?>">
      </div>
    <?php
    }
    ?>
    <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Actualizar</button>
  </form>
</body>

</html>