<?php
include("db.php");
if (
  strlen($_POST['introducir_apellido']) >= 1
  && strlen($_POST['introducir_edad']) >= 1 && strlen($_POST['introducir_dni']) >= 1 && strlen($_POST['introducir_telefono']) >= 1 && strlen($_POST['ruta_cliente']) >= 1 && strlen($_POST['residencia_cliente']) >= 1 && strlen($_POST['oficio']) >= 1 && strlen($_POST['introducir_asunto']) >= 1 && strlen($_POST['check'])
) {
  $introducir_apellido = trim($_POST['introducir_apellido']);
  $introducir_edad = trim($_POST['introducir_edad']);
  $introducir_dni = trim($_POST['introducir_dni']);
  $introducir_telefono = trim($_POST['introducir_telefono']);
  $ruta_cliente = trim($_POST['ruta_cliente']);
  $residencia_cliente = trim($_POST['residencia_cliente']);
  $oficio = trim($_POST['oficio']);
  $introducir_asunto = trim($_POST['introducir_asunto']);
  $fechaEntrega = $_POST['fechaEntrega'];
  $check = trim($_POST['check']);
  $numeroDioas = trim($_POST['numeroDioas']);
  $menu = trim($_POST['menu']);

  $ide = $_GET["id"];
  $consulta1 = "SELECT*FROM tusuario where correo_cliente ='$ide'";
  $resultado2 = mysqli_query($conexion, $consulta1);
  $filas2 = mysqli_num_rows($resultado2);
  $datos = $resultado2->fetch_object();
  //modo tradicional
  // $row = mysqli_fetch_array($resultado); 
  // $usuario_usuario = $row['usuario_usuario'];
  //modo arouw
  echo $datos->nombre_usuario;
  echo $datos->correo_cliente;
  // fechaEntrega
  $consulta = "INSERT INTO tsolicitud VALUES ('0','$datos->correo_cliente','$datos->nombre_usuario','$introducir_apellido','$introducir_telefono','$introducir_edad','$ruta_cliente','$residencia_cliente','$fechaEntrega','$numeroDioas','$menu','$oficio','$check','$introducir_asunto','$introducir_dni')";
  $resultado = mysqli_query($conexion, $consulta);
  if ($resultado) {
    header("location:plantilla.php?id=$ide");
  } else {
?>
    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
  <?php
  }
} else {
  ?>
  <h3 class="bad">no te funca la weada</h3>
<?php
}
mysqli_close($conexion);
