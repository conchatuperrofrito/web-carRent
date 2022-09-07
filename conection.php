<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $email = $_POST['email'];

$insertar = "INSERT INTO cliente VALUES ('$nombre','$apellido','$email') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = 'ejercicio18.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'ejercicio18.html';
    </script>";
}






?>