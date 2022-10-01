<?php

include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion1->query("select * from tusuario where correo_cliente='$id'");
echo "el correo es " . $id;

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
    include "controlador/actualizar_clienteU.php";
    ?>
    <h3>Actualizar Cliente</h3>
    <input type="text" name="id" hidden value="<?= $_GET["id"] ?>">
    <?php
    while ($datos = $sql->fetch_object()) {
    ?>
      <div class="mb-3">
        <label class="form-label">correo_cliente</label>
        <input type="text" class="form-control" name="correo_cliente" value="<?= $datos->correo_cliente ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">nombre_usuario</label>
        <input type="text" class="form-control" name="nombre_usuario" value="<?= $datos->nombre_usuario ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">contraseña_usuario</label>
        <input type="text" class="form-control" name="contraseña_usuario" value="<?= $datos->contraseña_usuario ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">estado_usuario</label>
        <input type="text" class="form-control" name="estado_usuario" value="<?= $datos->estado_usuario ?>">
      </div>
    <?php
    }
    ?>
    <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Actualizar</button>
  </form>
</body>

</html>