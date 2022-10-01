<?php
if (isset($_POST["actualizar"])) {
  if (!empty($_POST["correo_cliente"]) && !empty($_POST["nombre_usuario"]) && !empty($_POST["contraseña_usuario"]) && !empty($_POST["estado_usuario"])) {
    $id = $_GET["id"];
    $correo_cliente = $_POST["correo_cliente"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña_usuario = $_POST["contraseña_usuario"];
    $estado_usuario = $_POST["estado_usuario"];
    $sql = $conexion1->query("UPDATE tusuario SET correo_cliente='$correo_cliente',
     nombre_usuario='$nombre_usuario',contraseña_usuario='$contraseña_usuario',
     estado_usuario='$estado_usuario' WHERE correo_cliente='$id'");
    if ($sql == 1) {
      header("location:indexDash.php");
    } else {
      echo "no se pudo registrar";
    }
  } else {
    echo "los campos estan vacios";
  }
}
