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
 ?>
 <section id= "formulario">
 <form name="insertar_coche" action="comprobarCoche.php" method="POST">
	<caption><h2>Nuevo coche</h2></caption>
  <label for="modelo">Modelo:</label>
  <input type="text" name="modelo" required>
  <label for="marca">Marca:</label>
  <input type="text" name="marca" required>
  <label for="precio">Precio:</label>
  <input type="number" name="precio" min="0" required>
  <label for="stock">Stock:</label>
  <input type="number" name="stock" min="0" required>
  <input type="submit" name="enviar" value="Insertar">
</form>

</section>
 <?php
include_once 'includes/footer.php'
?>

</main>
</body>
</html>