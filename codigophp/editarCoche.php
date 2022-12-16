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
  $id = $_GET['id'];
  $modelo = $_GET['modelo'];
  $marca = $_GET['marca'];
  $precio = $_GET['precio'];
  $stock = $_GET['stock'];

 ?>
 
 <section id= "formulario">
 <form name="modificarCoche" action="modificarCoche.php" method="POST">
	<caption><h2>Modificar coche</h2></caption>
    <input type="hidden" name="id" value="<?=$id?>">
  <label for="modelo">Modelo:</label>
  <input type="text" name="modelo" value="<?=$modelo?>" >
  <label for="marca">Marca:</label>
  <input type="text" name="marca" value="<?=$marca?>" >
  <label for="precio">Precio:</label>
  <input type="number" name="precio" min="0" value="<?=$precio?>" >
  <label for="stock">Stock:</label>
  <input type="number" name="stock" min="0" value="<?=$stock?>" >
  <input type="submit" name="enviar" value="Aplicar cambios">
</form>

</section>
 <?php
include_once 'includes/footer.php'
?>

</main>
</body>
</html>