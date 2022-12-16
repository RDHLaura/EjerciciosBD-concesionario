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
  $consulta = $conn->query("select * from coche");
 ?>
 <section id="tabla">
 <table>
	<caption><h2>Listado de coches</h2></caption>
  <tr>
	  <th>ID</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Precio</th>
    <th>Stock</th>
    <th class="botones_tabla"></th>
  </tr>
  <?php
    //fetchObject() recorre la consulta
	  while ($coche = $consulta->fetchObject()) {
  ?>
  <tr>
	  <td><?= $coche->id ?></td>
    <td><?= $coche->marca ?></td>
    <td><?= $coche->modelo ?></td>
    <td><?= $coche->precio ?></td>
    <td><?= $coche->stock ?></td>
    <td class="botones_tabla">
      <a href="editarCoche.php?id=<?= $coche->id ?>&marca=<?=$coche->marca?>&modelo=<?= $coche->modelo ?>&precio=<?= $coche->precio ?>&stock=<?= $coche->stock ?>"><img class="boton" src="img/edit.png"></a>
      <a href="borrarCoche.php?id=<?= $coche->id ?>"><img class="boton" src="img/delete.png"></a>
    </td>
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