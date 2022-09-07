<?php
include("db.php");
    if (strlen($_POST['introducir_email']) >= 1 && strlen($_POST['introducir_nombre']) >= 1&& strlen($_POST['introducir_apellido']) >= 1
    && strlen($_POST['introducir_edad']) >= 1&& strlen($_POST['introducir_dni']) >= 1&& strlen($_POST['introducir_telefono']) >= 1&& strlen($_POST['ruta_cliente']) >= 1&& strlen($_POST['residencia_cliente']) >= 1&& strlen($_POST['oficio']) >= 1&& strlen($_POST['introducir_asunto']) >= 1&& strlen($_POST['check'])) {
	    $introducir_email = trim($_POST['introducir_email']);
	    $introducir_nombre = trim($_POST['introducir_nombre']);
      $introducir_apellido = trim($_POST['introducir_apellido']);
      $introducir_edad = trim($_POST['introducir_edad']);
	    $introducir_dni = trim($_POST['introducir_dni']);
      $introducir_telefono = trim($_POST['introducir_telefono']);
      $ruta_cliente = trim($_POST['ruta_cliente']);
	    $residencia_cliente = trim($_POST['residencia_cliente']);
      $oficio = trim($_POST['oficio']);
      $introducir_asunto = trim($_POST['introducir_asunto']);
      $check = trim($_POST['check']);
      insert into tsolicitud values('0','vpnnetmiun@gmail.com',
'luis','checcaña','784512145','22','avancay','lima','2022-03-20','3',
'tanburco','ing civil','virtual','turismo','77344588');

	    $consulta = "INSERT INTO tsolicitud VALUES ('0','$introducir_email','$introducir_nombre','$introducir_apellido','$introducir_telefono','$introducir_edad','$residencia_cliente','$ruta_cliente','2022-03-20','1','tanburco','$oficio','$check','$introducir_asunto','$introducir_dni')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
            header("location:plantilla.php");
	    } else {
?> 
<h3 class="bad">¡Ups ha ocurrido un error!</h3>
<?php
	    }
    }   else {
?> 
<h3 class="bad">no te funca la weada</h3>
<?php
    }
mysqli_close($conexion);