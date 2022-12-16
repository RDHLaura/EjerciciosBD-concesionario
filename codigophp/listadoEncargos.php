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

//almacenamos el output del require en el buffer
    ob_start();
    $id = $_GET['id'];
  //consulta que nos de los datos
  $consulta = $conn->query("select * from encargo
                            join coche on coche_id= coche.id
                            where cliente_id = '$id'");
 ?>
 <section id="tabla">
 <table>
	<caption><h2>Listado de Encargos</h2></caption>
  <tr>
	  <th>ID</th>
    <th>Marca coche</th>
    <th>Modelo coche</th>
    <th>cantidad</th>
    <th>Fecha</th>
 
  </tr>
  <?php
    //fetchObject() recorre la consulta
	  while ($encargo = $consulta->fetchObject()) {
  ?>
  <p><? $encargo ?></p>
  <tr>
	  <td><?= $encargo->id ?></td>
    <td><?= $encargo->marca ?></td>
    <td><?= $encargo->modelo ?></td>
    <td><?= $encargo->cantidad ?></td>
    <td><?= $encargo->fecha ?></td>
    
	</tr>

  <?php
	  }
  ?>

</table>
</section>