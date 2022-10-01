<?php
if (isset($_POST["registrar"])) {
  if (!empty($_POST["correo_cliente"]) && !empty($_POST["nombre_usuario"]) && !empty($_POST["contraseña_usuario"]) && !empty($_POST["estado_usuario"])) {
    $correo_cliente = $_POST["correo_cliente"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña_usuario = $_POST["contraseña_usuario"];
    $estado_usuario = $_POST["estado_usuario"];
    $sql = $conexion1->query("INSERT INTO tusuario(correo_cliente,nombre_usuario,contraseña_usuario,estado_usuario) values('$correo_cliente','$nombre_usuario','$contraseña_usuario','$estado_usuario')");
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
