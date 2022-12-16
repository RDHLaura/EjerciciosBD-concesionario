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
 
 ?>
<div id="formularios">
    <section class="acceso">
        <form class="formulario_acceso" action="login.php" method="POST">
            <caption><h2>Login</h2></caption>
            <label for="usuario">Nombre de usuario:</label>
            <input type="text" name="usuario" required>
            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" required>
            <input class="boton_acceso" type="submit" name="login" value="Entrar">
        </form>
    </section>

    <section class="acceso">
        <form class="formulario_acceso" action="registro.php" method="POST">
            <caption><h2>Registro</h2></caption>
            <label for="usuario">Nombre de usuario:</label>
            <input type="text" name="usuario" required>
            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" required>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" required>
            <label for="edad">Edad:</label>
            <input type="text" name="edad" required>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" required>
            <input class="boton_acceso" type="submit" name="registro" value="Registrarse">
        </form>
    </section>
</div>
<?php
include_once 'includes/footer.php'
?>
</main>
</body>
</html>