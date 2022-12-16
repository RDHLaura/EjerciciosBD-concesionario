<?php
//almacena todos los output en un buffer hasta que la ejecución
//del código haya acabado para permitir usar el header
ob_start();
//conexión a la BD
require_once 'includes/conexionBD.php';
try{
    //recupera los datos del formulario de insertarCoche.php 
    $modelo=$_POST["modelo"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $stock=$_POST["stock"];
    //insertar datos en la BD
    $sql = "insert into coche values(null, '$modelo','$marca',$precio,$stock)";
    $conn->exec($sql);
    echo "Se añadió coche a la BD.";
    header("Location: listarCoches.php");
    
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
    header("Location: insertarCoche.php");
}
//cierra la conexión a la BD
$conn= null;
?>