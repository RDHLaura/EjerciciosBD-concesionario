<?php
//almacenamos el output del require en el buffer
ob_start();

require_once 'includes/conexionBD.php';
try {
    $id = $_POST['id'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $precio = (int) $_POST['precio'];
    $stock = (int) $_POST['stock'];
    $sql = "update coche set modelo='$modelo', marca='$marca', precio='$precio',stock='$stock' where id ='$id'";

    $conn->exec($sql);
    echo "Registro actualizado correctamente";
    //redirección
    header("Location: listarCoches.php");

} catch (PDOException $e) {
    echo $consulta . "<br>" . $e->getMessage();
}
$conn = null;