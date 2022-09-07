<?php
include('db.php');
$email=trim($_POST['emailName']);
$password=trim($_POST['passwordName']);
$consulta="SELECT*FROM tusuario where correo_cliente ='$email' and contraseña_usuario ='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:plantilla.php");
}else{
    ?>
    <?php
    include("index.html");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);