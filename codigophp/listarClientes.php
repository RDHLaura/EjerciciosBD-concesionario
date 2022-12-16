<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Concesionario</title>
</head>
<body>
  <main>
  
<?php

  include_once "includes/header.php";
  include_once "includes/navbar.php";
	//conexión a la bbdd
  include_once "includes/conexionBD.php";
  //consulta que nos de los datos
  $consulta = $conn->query("select * from cliente");
 ?>
 <section id="tabla">
 <table>
	<caption><h2>Listado de Clientes</h2></caption>
  <tr>
	  <th>ID</th>
    <th>Nombre</th>
    <th>Ciudad</th>
    <th>Gastado</th>
    <th>Encargos</th>
   
  </tr>
  <?php
    //fetchObject() recorre la consulta
	  while ($cliente = $consulta->fetchObject()) {
  ?>
  <tr>
	  <td><?= $cliente->id ?></td>
    <td><?= $cliente->nombre ?></td>
    <td><?= $cliente->ciudad ?></td>
    <td><?= $cliente->gastado ?></td>
    <td><a href="listadoEncargos.php?id=<?= $cliente->id ?>">Listar</a></td>
    
	</tr>

  <?php
	  }
  ?>

</table>
</section>


<?php
include_once 'includes/footer.php'
?>
</main>
</body>
</html>