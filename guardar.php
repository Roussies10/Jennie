<?php
 echo 'SI LLEGO';
$conexion = mysqli_connect("localhost", "root", "", "mi_bd");
    


if($_POST){
$n = $_POST['nom'];
$a = $_POST['apel'];
$e = $_POST['emai'];

mysqli_query($conexion, " INSERT INTO mi_bd(nombre, apellido, emai) VALUES ( '$n', '$a', '$e')") or die (mysql_error);
    echo 'Informacion Guardada';
  }
?>