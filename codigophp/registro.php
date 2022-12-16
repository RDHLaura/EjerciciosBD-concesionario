<?php
//almacena todos los output en un buffer hasta que la ejecución
//del código haya acabado para permitir usar el header
ob_start();
//conexión a la BD
require_once 'includes/conexionBD.php';
try{
    //recupera los datos del formulario de registro
    $nombreusu=$_POST["usuario"];
    $clave=password_hash($_POST["clave"],PASSWORD_DEFAULT);
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $direccion=$_POST["direccion"]; 

    //insertar datos en la BD
    $sql = "insert into usuario values ('$nombreusu','$clave','$nombre','$apellidos',$edad,'$direccion')";
    $conn->exec($sql);
    echo "Se registró el usuario correctamente.";
    header("Location: listarCoches.php");
    
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
    header("Location: index.php?error=Ya existe un usuario con ese nombre");
}
//cierra la conexión a la BD
$conn= null;
?>