<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar toda la BD</title>
</head>
<body>

  <?php
	$conexion = mysqli_connect("localhost", "root", "", "mi_bd");
    $sqlConsulta = "select * from mi_bd";
    $resultado = mysqli_query($conexion, $sqlConsulta);
   ?>
   <br>
<center>
      <table border="3">
	   <thead>
           <tr>
           	  <th>Nombre</th>
           	  <th>Apellido</th>
           	  <th>Emai</th>
           </tr>
        </thead>

        <tbody>
         	 <?php

              while($filas=mysqli_fetch_assoc($resultado)){
         	 ?>

           
             <tr>
             	<td><?php  echo $filas['Nombre'] ?></td>
             	<td><?php echo $filas [ 'Apellido'] ?></td>
             	<td><?php echo $filas [ 'Emai'] ?></td>

             </tr>

            <?php
               }
               ?>
        </tbody>

        </table>
        </center>
</body>
</html>