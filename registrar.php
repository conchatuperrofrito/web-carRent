<?php
include("db.php");
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $pass = trim($_POST['password']);
	    $consulta = "INSERT INTO tusuario (correo_cliente,nombre_usuario,contraseña_usuario,estado_usuario ) VALUES ('$email','$name','$pass ','false')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
            header("location:login.html");
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