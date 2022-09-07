<?php
/*
$conexion  =mysqli_connect(
 'localhost ',//hos https://uncounselled-steril.000webhostapp.com/
 'id18834008_luis',//usuario
 '0%^/o|)TbcDE!S\C',//contraseña  0%^/o|)TbcDE!S\C
 'id18834008_cabina_de_internet'//nombre de la base de datos
);
*/

$servername="localhost"; //databases.000webhost.  //2a02:4780:bad:f00d::17
$database="id18834008_cavinainternet";//pT_@bU3!c8pH}{*v
$username ="	id18834008_luis2";
$contra = "bMoVOfh-5h<QoUY%";//bMoVOfh-5h<QoUY%
$mysqli=new mysqli($servername, $username, $contra , $database);
$mysqli->set_charset("utf8");
if (!$mysqli) {
  echo"error en conexion";
}
$nombre =$_POST['usuarioR'];
$password =$_POST['passwordR'];
$monto =$_POST['montoR'];

$query ="INSERT INTO tusuarios (ususario,passwort,horaUsuario,minutoUsuario,segundoUsuario)
values ('$nombre','$password',$monto,1,1)";
$resultado =mysqli_query($mysqli,$query);

if ($resultado) {
  echo "a";
}else {
  echo "error";
}
?>
