<?php
//almaceno el output del require en el buffer
ob_start();
require_once 'includes/conexionBD.php';

try {
    $id = $_GET['id'];   
    $sql = "delete from coche where id = '$id'";
    $conn->exec($sql);
    echo "Registro borrado correctamente";
    //redirección al listado si hemos tenido éxito
    header("Location: listarCoches.php");
} catch (PDOException $e) {
    echo $consulta . "<br>" . $e->getMessage();
}
$conn = null;