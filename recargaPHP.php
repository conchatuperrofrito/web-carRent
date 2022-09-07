<?php

$servername="localhost"; //databases.000webhost. //2a02:4780:bad:f00d::17
$database="id18834008_cavinainternet";//pT_@bU3!c8pH}{*v
$username ="	id18834008_luis2";
$contra = "bMoVOfh-5h<QoUY%";//bMoVOfh-5h<QoUY%

$mysqli=new mysqli($servername, $username, $contra , $database);
$mysqli->set_charset("utf8");




if (!$mysqli) {
  echo"error en conexion";
}

$nombre =$_POST['nombre'];
$montoRe=$_POST['monto'];

$query ="INSERT INTO trecargas 
values ('0','$nombre',$montoRe)";
$resultado =mysqli_query($mysqli,$query);
if ($resultado) {
  echo "a";
}else {
  echo "error";
}
?>
